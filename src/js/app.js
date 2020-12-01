const HOST_URL = "http://localhost:80/Pineapple";

new Vue({
    el: '.newsletter',
    data() {
      return {
        email: '',
        terms: false,
        emailMessage: '',
        termsMessage: '',
        haveErrors: false,
        submitted: false,
        isSubmitButtonDisabled: false, 
      }
    },

    computed: {
      isInvalidForm() {
        this.emailMessage = '';
        this.termsMessage = '',
        this.haveErrors = false;

        const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const colombiaRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[Cc][Oo]))$/;

        if (this.email.length > 0) {
          if (!emailRegex.test(this.email)) {
            this.emailMessage = "* Please provide a valid e-mail address";
            this.haveErrors = true
          }
          if (colombiaRegex.test(this.email)) {
            this.emailMessage = "* We are not accepting subscriptions from Colombia emails";
            this.haveErrors = true
          }
        } else if (this.email.length === 0) {
          this.emailMessage = "* Email address is required";
          this.haveErrors = true
        }

        if (this.terms === false) {
          this.termsMessage = "* You must accept the terms and conditions";
          this.haveErrors = true
        }

        return this.haveErrors;
      },
    },
    methods: {
      async postData(url = '', data = {}) {
        const response = await fetch(url, {
          method: 'POST',
          mode: 'no-cors',
          cache: 'no-cache',
          credentials: 'same-origin',
          headers: {
            'Content-Type': 'application/json'
          },
          redirect: 'follow',
          referrerPolicy: 'no-referrer',
          body: JSON.stringify(data)
        });
        return response.json();
      },
      submit() {
        if (this.isInvalidForm) return;

        let data = {
          email: this.email,
          terms: this.terms
        }
        this.isSubmitButtonDisabled = true;
        const setSubmitSuccess = this.setSubmitSuccess;

        this.postData(HOST_URL + '/submit.php', data)
          .then(res => {
            setSubmitSuccess();
            this.isSubmitButtonDisabled = false;
          })
          .catch(() => {
            console.log('Server error! Try again later.');
            this.isSubmitButtonDisabled = false;
          })
      },
      setSubmitSuccess() {
        this.submitted = true;
      },
    }
  })
