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
      postData(url = '', data = {}) {
        return axios.post(url, {
          data: data,
        });
      },
      submit() {
        if (this.isInvalidForm) return;

        
        this.isSubmitButtonDisabled = true;
        const setSubmitSuccess = this.setSubmitSuccess;

        this.postData(HOST_URL + '/submit.php', this.email)
          .then((res) => {

            console.log(res);
            this.isSubmitButtonDisabled = false;
            setSubmitSuccess();
            console.log("* success");
          })
          .catch(() => {
            console.log('Server error! Try again later.');
            alert("! server error")
            this.isSubmitButtonDisabled = false;
          })
      },
      setSubmitSuccess() {
        this.submitted = true;
      },
    }
  })
