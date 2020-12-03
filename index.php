<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <title>Pineapple.</title>
</head>
<body>
  <div class="main-wrapper">
    <div class="content-block">
      <div id="navbar">
        <div class="logo">
          <a href="">
            <div class="logo__main">
              <svg width="25" height="40" viewBox="0 0 25 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.75658 14.5161L0 7.41936L6.57895 8.54839L5.75658 0.967742L10.5263 6.45161L12.5 0L14.4737 6.45161L19.2434 0.967742L18.4211 8.54839L25 7.41936L19.2434 14.5161H5.75658ZM8.07206 10.1146L7.51478 4.97752L11.0926 9.09101L12.5 4.49046L13.9074 9.09101L17.4852 4.97752L16.9279 10.1146L21.8124 9.27632L18.6088 13.2258H6.39123L3.18759 9.27632L8.07206 10.1146Z" fill="#4066A5"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0658 40H5.26316L0.328947 35.1613V20.6452L5.26316 15.8065H20.0658L25 20.6452V35.1613L20.0658 40ZM7.67582 27.2055L11.8448 23.1172L5.72958 17.1738L1.64474 21.1796V21.344L7.67582 27.2055ZM17.9841 17.0968H7.51948L12.7752 22.2048L17.9841 17.0968ZM8.61039 28.1138L12.7794 24.0255L16.8012 27.9342L12.6322 32.0225L8.61039 28.1138ZM13.7098 23.1131L17.7316 27.0218L23.6842 21.1844V21.1796L19.6828 17.2557L13.7098 23.1131ZM13.5667 32.9308L17.7357 28.8425L23.6842 34.6238V34.6268L19.5208 38.7097H19.5127L13.5667 32.9308ZM18.6662 27.9301L23.6842 32.8071V23.0092L18.6662 27.9301ZM6.7454 28.1179L1.64474 23.1606V33.1199L6.7454 28.1179ZM7.67998 29.0262L11.7017 32.9349L5.81302 38.7097H5.80818L1.80679 34.7857L7.67998 29.0262ZM17.6435 38.7097H7.67383L12.6363 33.8432L17.6435 38.7097Z" fill="#4066A5"/>
              </svg>
            </div>
            <div class="logo__secondary">
              <svg width="78" height="16" viewBox="0 0 78 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 16V3.45115H1.39834V4.63001C1.72803 4.16871 2.10035 3.82417 2.5153 3.59637C2.93026 3.36288 3.43332 3.24613 4.02449 3.24613C4.79755 3.24613 5.47967 3.44545 6.07084 3.8441C6.662 4.24275 7.10822 4.80655 7.40949 5.5355C7.71076 6.25877 7.86139 7.05321 7.86139 7.91885C7.86139 8.84713 7.6937 9.68429 7.35833 10.4303C7.02864 11.1707 6.54547 11.7402 5.90883 12.1388C5.27787 12.5318 4.61281 12.7282 3.91364 12.7282C3.40206 12.7282 2.94163 12.62 2.53236 12.4036C2.12877 12.1872 1.79624 11.9139 1.53476 11.5836V16H0ZM1.38981 8.03844C1.38981 9.20591 1.62571 10.0687 2.09751 10.6268C2.5693 11.1849 3.14058 11.464 3.81132 11.464C4.49344 11.464 5.07608 11.1764 5.55925 10.6012C6.0481 10.0203 6.29252 9.12333 6.29252 7.9103C6.29252 6.75423 6.05378 5.88859 5.5763 5.3134C5.1045 4.73821 4.53892 4.45061 3.87954 4.45061C3.22584 4.45061 2.64604 4.75814 2.14014 5.3732C1.63992 5.98256 1.38981 6.87097 1.38981 8.03844Z" fill="#131821"/>
                <path d="M9.72868 1.76829V0H11.2634V1.76829H9.72868ZM9.72868 12.5232V3.45115H11.2634V12.5232H9.72868Z" fill="#131821"/>
                <path d="M13.6082 12.5232V3.45115H14.9895V4.74106C15.6546 3.74444 16.6152 3.24613 17.8714 3.24613C18.4171 3.24613 18.9174 3.34579 19.3721 3.54511C19.8325 3.73874 20.1764 3.99502 20.4038 4.31393C20.6312 4.63285 20.7903 5.01157 20.8813 5.45008C20.9381 5.73483 20.9665 6.23314 20.9665 6.94501V12.5232H19.4318V7.00481C19.4318 6.37836 19.3721 5.91137 19.2527 5.60384C19.1334 5.29062 18.9202 5.04289 18.6132 4.86065C18.312 4.67272 17.9567 4.57875 17.5474 4.57875C16.8937 4.57875 16.3282 4.78662 15.8507 5.20235C15.3789 5.61808 15.143 6.40683 15.143 7.56861V12.5232H13.6082Z" fill="#131821"/>
                <path d="M29.5271 9.60171L31.113 9.79819C30.8629 10.7265 30.3997 11.4469 29.7232 11.9594C29.0468 12.472 28.1828 12.7282 27.1312 12.7282C25.8067 12.7282 24.7551 12.3211 23.9764 11.5067C23.2033 10.6866 22.8168 9.53906 22.8168 8.06407C22.8168 6.53782 23.209 5.35327 23.9934 4.51041C24.7779 3.66756 25.7954 3.24613 27.0459 3.24613C28.2567 3.24613 29.2457 3.65901 30.0131 4.48478C30.7805 5.31055 31.1642 6.47233 31.1642 7.9701C31.1642 8.06122 31.1613 8.1979 31.1557 8.38014H24.4027C24.4596 9.37676 24.7409 10.1399 25.2468 10.6695C25.7527 11.1991 26.3837 11.464 27.1397 11.464C27.7024 11.464 28.1828 11.3159 28.5807 11.0198C28.9786 10.7236 29.2941 10.2509 29.5271 9.60171ZM24.488 7.11586H29.5442C29.476 6.35273 29.2827 5.78039 28.9644 5.39883C28.4755 4.80655 27.8417 4.51041 27.063 4.51041C26.3581 4.51041 25.7641 4.74675 25.2809 5.21943C24.8035 5.69212 24.5391 6.32426 24.488 7.11586Z" fill="#131821"/>
                <path d="M38.9574 11.4042C38.3889 11.8882 37.8404 12.2299 37.3118 12.4293C36.7888 12.6286 36.2261 12.7282 35.6235 12.7282C34.6288 12.7282 33.8642 12.4862 33.3299 12.0021C32.7956 11.5124 32.5284 10.8888 32.5284 10.1313C32.5284 9.68713 32.6279 9.28279 32.8268 8.91831C33.0315 8.54814 33.2958 8.252 33.6198 8.0299C33.9495 7.8078 34.319 7.63979 34.7282 7.52589C35.0295 7.44617 35.4843 7.36928 36.0925 7.29525C37.3317 7.14718 38.244 6.97064 38.8295 6.76562C38.8352 6.5549 38.838 6.42107 38.838 6.36412C38.838 5.73768 38.693 5.29632 38.4031 5.04004C38.0109 4.69265 37.4283 4.51895 36.6552 4.51895C35.9333 4.51895 35.399 4.64709 35.0522 4.90336C34.7112 5.15394 34.4582 5.601 34.2934 6.24453L32.7927 6.03951C32.9292 5.39598 33.1537 4.87774 33.4663 4.48478C33.779 4.08614 34.2309 3.78146 34.822 3.57074C35.4132 3.35433 36.0982 3.24613 36.8769 3.24613C37.65 3.24613 38.2781 3.33725 38.7613 3.51949C39.2444 3.70173 39.5997 3.93237 39.8271 4.21143C40.0544 4.48478 40.2136 4.83218 40.3045 5.2536C40.3557 5.51557 40.3813 5.98825 40.3813 6.67165V8.72184C40.3813 10.1513 40.4125 11.0568 40.4751 11.4383C40.5433 11.8142 40.674 12.1758 40.8673 12.5232H39.2643C39.1052 12.2043 39.0028 11.8313 38.9574 11.4042ZM38.8295 7.9701C38.2724 8.1979 37.4368 8.39153 36.3227 8.55099C35.6917 8.64211 35.2455 8.74462 34.984 8.85852C34.7226 8.97241 34.5208 9.14042 34.3787 9.36252C34.2366 9.57893 34.1655 9.82096 34.1655 10.0886C34.1655 10.4987 34.319 10.8404 34.6259 11.1137C34.9386 11.3871 35.3933 11.5238 35.9902 11.5238C36.5813 11.5238 37.1071 11.3956 37.5676 11.1393C38.028 10.8774 38.3662 10.5214 38.5822 10.0715C38.747 9.72415 38.8295 9.2116 38.8295 8.5339V7.9701Z" fill="#131821"/>
                <path d="M42.7687 16V3.45115H44.167V4.63001C44.4967 4.16871 44.869 3.82417 45.284 3.59637C45.699 3.36288 46.202 3.24613 46.7932 3.24613C47.5662 3.24613 48.2484 3.44545 48.8395 3.8441C49.4307 4.24275 49.8769 4.80655 50.1782 5.5355C50.4795 6.25877 50.6301 7.05321 50.6301 7.91885C50.6301 8.84713 50.4624 9.68429 50.127 10.4303C49.7973 11.1707 49.3142 11.7402 48.6775 12.1388C48.0466 12.5318 47.3815 12.7282 46.6823 12.7282C46.1707 12.7282 45.7103 12.62 45.301 12.4036C44.8975 12.1872 44.5649 11.9139 44.3035 11.5836V16H42.7687ZM44.1585 8.03844C44.1585 9.20591 44.3944 10.0687 44.8662 10.6268C45.338 11.1849 45.9093 11.464 46.58 11.464C47.2621 11.464 47.8448 11.1764 48.3279 10.6012C48.8168 10.0203 49.0612 9.12333 49.0612 7.9103C49.0612 6.75423 48.8225 5.88859 48.345 5.3134C47.8732 4.73821 47.3076 4.45061 46.6482 4.45061C45.9945 4.45061 45.4147 4.75814 44.9088 5.3732C44.4086 5.98256 44.1585 6.87097 44.1585 8.03844Z" fill="#131821"/>
                <path d="M52.4888 16V3.45115H53.8872V4.63001C54.2169 4.16871 54.5892 3.82417 55.0042 3.59637C55.4191 3.36288 55.9222 3.24613 56.5133 3.24613C57.2864 3.24613 57.9685 3.44545 58.5597 3.8441C59.1509 4.24275 59.5971 4.80655 59.8983 5.5355C60.1996 6.25877 60.3502 7.05321 60.3502 7.91885C60.3502 8.84713 60.1826 9.68429 59.8472 10.4303C59.5175 11.1707 59.0343 11.7402 58.3977 12.1388C57.7667 12.5318 57.1017 12.7282 56.4025 12.7282C55.8909 12.7282 55.4305 12.62 55.0212 12.4036C54.6176 12.1872 54.2851 11.9139 54.0236 11.5836V16H52.4888ZM53.8787 8.03844C53.8787 9.20591 54.1146 10.0687 54.5864 10.6268C55.0582 11.1849 55.6294 11.464 56.3002 11.464C56.9823 11.464 57.5649 11.1764 58.0481 10.6012C58.5369 10.0203 58.7814 9.12333 58.7814 7.9103C58.7814 6.75423 58.5426 5.88859 58.0652 5.3134C57.5934 4.73821 57.0278 4.45061 56.3684 4.45061C55.7147 4.45061 55.1349 4.75814 54.629 5.3732C54.1288 5.98256 53.8787 6.87097 53.8787 8.03844Z" fill="#131821"/>
                <path d="M62.1749 12.5232V0H63.7097V12.5232H62.1749Z" fill="#131821"/>
                <path d="M72.2958 9.60171L73.8817 9.79819C73.6316 10.7265 73.1683 11.4469 72.4919 11.9594C71.8155 12.472 70.9515 12.7282 69.8999 12.7282C68.5754 12.7282 67.5238 12.3211 66.7451 11.5067C65.972 10.6866 65.5855 9.53906 65.5855 8.06407C65.5855 6.53782 65.9777 5.35327 66.7621 4.51041C67.5466 3.66756 68.5641 3.24613 69.8146 3.24613C71.0254 3.24613 72.0144 3.65901 72.7818 4.48478C73.5492 5.31055 73.9329 6.47233 73.9329 7.9701C73.9329 8.06122 73.93 8.1979 73.9244 8.38014H67.1714C67.2282 9.37676 67.5096 10.1399 68.0155 10.6695C68.5214 11.1991 69.1524 11.464 69.9084 11.464C70.4711 11.464 70.9515 11.3159 71.3494 11.0198C71.7473 10.7236 72.0627 10.2509 72.2958 9.60171ZM67.2567 7.11586H72.3129C72.2446 6.35273 72.0514 5.78039 71.7331 5.39883C71.2442 4.80655 70.6104 4.51041 69.8317 4.51041C69.1268 4.51041 68.5328 4.74675 68.0496 5.21943C67.5721 5.69212 67.3078 6.32426 67.2567 7.11586Z" fill="#131821"/>
                <path d="M76.2521 12.5232V10.772H78V12.5232H76.2521Z" fill="#131821"/>
              </svg>
            </div>
          </a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="newsletter hidden" id="js-enabled">
        <div class="success-message" v-if="submitted">
          <svg id="win-icon" width="44" height="70" viewBox="0 0 44 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 51C13 50.4477 13.4477 50 14 50H30C30.5523 50 31 50.4477 31 51V61C31 61.5523 30.5523 62 30 62H14C13.4477 62 13 61.5523 13 61V51ZM15 52H29V60H15V52Z" fill="#4066A5"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C7.44771 0 7 0.447723 7 1V5C7 5.55228 7.44772 6 8 6H9V7H8.1657C7.4119 7 6.7066 6.53748 6.27884 5.92047L5.68489 5.06351C4.806 3.79572 3.35709 3.03665 1.8147 3.03296H1.80081C1.32878 3.03296 0.866241 3.22342 0.529755 3.55728C0.188171 3.89661 0 4.34778 0 4.82794V9.22031C0 12.4582 0.716553 14.8268 2.19077 16.4615C3.48946 17.9018 5.23088 18.6052 6.76764 19.2259C8.55252 19.9469 10.2387 20.6281 11.0571 22.3049C11.3589 22.9237 11.28 23.5205 10.8347 23.9852C10.471 24.3649 9.92801 24.5916 9.3826 24.5916C9.15112 24.5916 8.93655 24.5504 8.74535 24.4692C7.89464 24.1076 7.81107 23.1128 7.83704 22.5518C7.8633 21.986 7.42316 21.506 6.8541 21.48C6.28104 21.457 5.80255 21.8916 5.77644 22.4576C5.69191 24.2883 6.49876 25.7455 7.93518 26.3559C8.38397 26.5465 8.87112 26.6432 9.3826 26.6432C10.4816 26.6432 11.5826 26.1786 12.3279 25.4007C12.4415 25.282 12.5437 25.157 12.6377 25.0284C13.6017 26.4686 15.7199 28.8035 17 30V34C17 34.5523 17.4477 35 18 35H18.8093C18.6024 36.0118 18.2809 37.2426 17.8385 38.4244C17.2437 40.0128 16.4994 41.3217 15.6714 42H6C5.44771 42 5 42.4477 5 43V47C5 47.5523 5.44772 48 6 48H7V64H6C5.44771 64 5 64.4477 5 65V69C5 69.5523 5.44772 70 6 70H38C38.5523 70 39 69.5523 39 69V65C39 64.4477 38.5523 64 38 64H37V48H38C38.5523 48 39 47.5523 39 47V43C39 42.4477 38.5523 42 38 42H28.3286C27.5005 41.3217 26.7562 40.0128 26.1615 38.4244C25.719 37.2426 25.3976 36.0118 25.1907 35H26C26.5523 35 27 34.5523 27 34V30C28.2771 28.8063 30.4076 26.4749 31.37 25.0385C31.462 25.1635 31.5614 25.2849 31.6719 25.4002C32.4173 26.1783 33.5183 26.6429 34.6173 26.6429C35.1288 26.6429 35.6159 26.5462 36.0648 26.3555C37.5011 25.7452 38.308 24.2879 38.2234 22.4574C38.1973 21.8915 37.7146 21.4573 37.1458 21.4797C36.5768 21.5058 36.1367 21.9857 36.1628 22.5516C36.1888 23.1124 36.1052 24.1073 35.2547 24.4688C35.0633 24.5501 34.8489 24.5913 34.6173 24.5913C34.0718 24.5913 33.5289 24.3646 33.1651 23.9849C32.7198 23.5202 32.6409 22.9236 32.9428 22.3048C33.7612 20.6278 35.4472 19.9467 37.2325 19.2256C38.7691 18.6051 40.5104 17.9016 41.8092 16.4613C43.2834 14.8267 44 12.4581 44 9.22015V4.82794C44.0003 4.34778 43.8121 3.89648 43.4701 3.55701C43.1306 3.22028 42.667 3.03159 42.1912 3.03296C40.6432 3.03665 39.1944 3.79587 38.3154 5.06366L37.7214 5.92047C37.2937 6.5376 36.5881 7 35.8343 7H35V6H36C36.5523 6 37 5.55228 37 5V1C37 0.447723 36.5523 0 36 0H8ZM33 6H11V12.4182C11 18.9243 13.9756 25.1141 19.2171 29H24.7982C30.04 25.1141 33 18.9243 33 12.4182V6ZM35 2H9V4H35V2ZM16.0159 44C16.0059 44.0002 15.9959 44.0002 15.9859 44H7V46H37V44H16.0159ZM25.7054 42C25.1178 41.1159 24.6529 40.0986 24.2886 39.1256C23.7454 37.6749 23.3721 36.1714 23.1529 35H20.8472C20.628 36.1714 20.2547 37.6749 19.7115 39.1256C19.3472 40.0986 18.8822 41.1159 18.2946 42H25.7054ZM25 33V31H19V33H19.9831C19.9935 32.9998 20.0039 32.9998 20.0143 33H25ZM9 48H35V64H9V48ZM37 66H7V68H37V66ZM3.72643 15.0916C4.70717 16.1791 6.08502 16.7357 7.54372 17.3248C8.19923 17.5897 8.88362 17.8665 9.54796 18.2054C9.04926 16.3331 9 14.3891 9 12.4182V9H8.1657C6.73355 9 5.39336 8.25754 4.58058 7.0849L3.98663 6.22809C3.54114 5.58536 2.8353 5.1748 2.06281 5.09784V9.22031C2.06281 11.9298 2.60698 13.8503 3.72643 15.0916ZM36.4567 17.3248C37.9155 16.7356 39.2932 16.1792 40.2738 15.0916C41.3933 13.8503 41.9372 11.9298 41.9372 9.22031V5.09836C41.1622 5.1763 40.4582 5.58673 40.0134 6.22836L39.4194 7.08502C38.6068 8.25766 37.2664 9 35.8343 9H35V12.4182C35 14.3859 34.9664 16.3271 34.4692 18.1967C35.1285 17.8617 35.8069 17.5872 36.4567 17.3248Z" fill="#4066A5"/>
            <rect opacity="0.3" x="15" y="52" width="14" height="8" fill="#4066A5"/>
            <rect opacity="0.3" x="7" y="44" width="30" height="2" fill="#4066A5"/>
            <rect opacity="0.3" x="9" y="2" width="26" height="2" fill="#4066A5"/>
            <rect opacity="0.3" x="7" y="66" width="30" height="2" fill="#4066A5"/>
            <rect opacity="0.3" x="19" y="31" width="6" height="2" fill="#4066A5"/>
          </svg>
          <h1>Thanks for subscribing!</h1>
          <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
        </div>
        <div class="newsletter-invitation" v-if="!submitted">
          <h1>Subscribe to newsletter</h1>
          <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
          <form id="newsletter-form" novalidate @submit.prevent="submit">
            <div class="email-container">
              <div class="error-message" v-if="isInvalidForm">{{ emailMessage }}</div>
              <div class="email-input">
                <span class="input-border"></span>
                <input type="email" v-model="email" id="email" name="email" placeholder="Type your email address here..."><br>
                <div class="button-container">
                  <button type="submit" id="submit" :disabled="isInvalidForm || isSubmitButtonDisabled">
                    <svg id="arrow-right" width="24" height="14" viewBox="0 0 24 14" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z"/>
                    </svg>                  
                  </button>
                </div>
              </div>
            </div>
            <div class="error-message" v-if="isInvalidForm">{{ termsMessage }}</div>
            <div class="checkbox-container">
              <input type="checkbox" v-model="terms" id="terms" name="terms" value="Agree">
              <label for="terms">
                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L4.70711 10.7071C4.31658 11.0976 3.68342 11.0976 3.29289 10.7071L0.292893 7.70711C-0.0976311 7.31658 -0.0976311 6.68342 0.292893 6.29289C0.683417 5.90237 1.31658 5.90237 1.70711 6.29289L4 8.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893Z" fill="white"/>
                </svg>
              </label>
              <span>I agree to <a href="#" class="terms-link">terms of service</a></span>
            </div>
          </form>
        </div>

      <div class="vertical-line"></div>
          <div class="social-icons">
            <a href="#" class="icon facebook-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="icon instagram-icon">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="icon twitter-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="icon youtube-icon">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
          </div>

      <noscript> 
        <div class="newsletter">
          <?php
            $emailMessage = '';
            $termsMessage = '';
            $haveErrors = false;
            $response = file_get_contents('php://input');
            $emailRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
            $colombiaRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[Cc][Oo]))$/';
            $successfullySubmitted = false;

            $id = 1;
            $email = '';
            $date = date("Y/m/d h:i:s");
            $emailPlatform = '';
            $terms = false;

            if ($response) { 
              parse_str($response, $parsedResponse);
              $email = $parsedResponse['email'];
              $emailPlatform = substr(strstr($email, '@'), 1);
              if (strpos($response, 'terms')) {
                $terms = $parsedResponse['terms'];
              }
            }

            $emailLength = strlen($email);
            if ($emailLength == 0) {
              $emailMessage = '* Email address is required';
              $haveErrors = true;
            } else {
              if (!preg_match($emailRegex, $email)) {
                $emailMessage = "* Please provide a valid e-mail address";
                $haveErrors = true;
              }
              if (preg_match($colombiaRegex, $email)) {
                $emailMessage = "* We are not accepting subscriptions from Colombia emails";
                $haveErrors = true;
              }
            }

            if ($terms == false) {
              $termsMessage = "* You must accept the terms and conditions";
              $haveErrors = true;
            }

            if ($emailLength > 0 && $terms == true && !$haveErrors) {
              include("config.php");

              $sql = "INSERT INTO `applications` (`email`, `email_platform`, `create_date`)
              VALUES ('$email', '$emailPlatform', '$date')";
  
              if ($conn->query($sql) === TRUE) {
                $successfullySubmitted = true;
              } else {
                $successfullySubmitted = false;
              }
  
              $conn->close();
            }
          ?>
          <div class="success-message" style="display: <?php $drawSuccess = $successfullySubmitted ? 'block"' : 'none"'; echo $drawSuccess; ?>>
            <svg id="win-icon" width="44" height="70" viewBox="0 0 44 70" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13 51C13 50.4477 13.4477 50 14 50H30C30.5523 50 31 50.4477 31 51V61C31 61.5523 30.5523 62 30 62H14C13.4477 62 13 61.5523 13 61V51ZM15 52H29V60H15V52Z" fill="#4066A5"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C7.44771 0 7 0.447723 7 1V5C7 5.55228 7.44772 6 8 6H9V7H8.1657C7.4119 7 6.7066 6.53748 6.27884 5.92047L5.68489 5.06351C4.806 3.79572 3.35709 3.03665 1.8147 3.03296H1.80081C1.32878 3.03296 0.866241 3.22342 0.529755 3.55728C0.188171 3.89661 0 4.34778 0 4.82794V9.22031C0 12.4582 0.716553 14.8268 2.19077 16.4615C3.48946 17.9018 5.23088 18.6052 6.76764 19.2259C8.55252 19.9469 10.2387 20.6281 11.0571 22.3049C11.3589 22.9237 11.28 23.5205 10.8347 23.9852C10.471 24.3649 9.92801 24.5916 9.3826 24.5916C9.15112 24.5916 8.93655 24.5504 8.74535 24.4692C7.89464 24.1076 7.81107 23.1128 7.83704 22.5518C7.8633 21.986 7.42316 21.506 6.8541 21.48C6.28104 21.457 5.80255 21.8916 5.77644 22.4576C5.69191 24.2883 6.49876 25.7455 7.93518 26.3559C8.38397 26.5465 8.87112 26.6432 9.3826 26.6432C10.4816 26.6432 11.5826 26.1786 12.3279 25.4007C12.4415 25.282 12.5437 25.157 12.6377 25.0284C13.6017 26.4686 15.7199 28.8035 17 30V34C17 34.5523 17.4477 35 18 35H18.8093C18.6024 36.0118 18.2809 37.2426 17.8385 38.4244C17.2437 40.0128 16.4994 41.3217 15.6714 42H6C5.44771 42 5 42.4477 5 43V47C5 47.5523 5.44772 48 6 48H7V64H6C5.44771 64 5 64.4477 5 65V69C5 69.5523 5.44772 70 6 70H38C38.5523 70 39 69.5523 39 69V65C39 64.4477 38.5523 64 38 64H37V48H38C38.5523 48 39 47.5523 39 47V43C39 42.4477 38.5523 42 38 42H28.3286C27.5005 41.3217 26.7562 40.0128 26.1615 38.4244C25.719 37.2426 25.3976 36.0118 25.1907 35H26C26.5523 35 27 34.5523 27 34V30C28.2771 28.8063 30.4076 26.4749 31.37 25.0385C31.462 25.1635 31.5614 25.2849 31.6719 25.4002C32.4173 26.1783 33.5183 26.6429 34.6173 26.6429C35.1288 26.6429 35.6159 26.5462 36.0648 26.3555C37.5011 25.7452 38.308 24.2879 38.2234 22.4574C38.1973 21.8915 37.7146 21.4573 37.1458 21.4797C36.5768 21.5058 36.1367 21.9857 36.1628 22.5516C36.1888 23.1124 36.1052 24.1073 35.2547 24.4688C35.0633 24.5501 34.8489 24.5913 34.6173 24.5913C34.0718 24.5913 33.5289 24.3646 33.1651 23.9849C32.7198 23.5202 32.6409 22.9236 32.9428 22.3048C33.7612 20.6278 35.4472 19.9467 37.2325 19.2256C38.7691 18.6051 40.5104 17.9016 41.8092 16.4613C43.2834 14.8267 44 12.4581 44 9.22015V4.82794C44.0003 4.34778 43.8121 3.89648 43.4701 3.55701C43.1306 3.22028 42.667 3.03159 42.1912 3.03296C40.6432 3.03665 39.1944 3.79587 38.3154 5.06366L37.7214 5.92047C37.2937 6.5376 36.5881 7 35.8343 7H35V6H36C36.5523 6 37 5.55228 37 5V1C37 0.447723 36.5523 0 36 0H8ZM33 6H11V12.4182C11 18.9243 13.9756 25.1141 19.2171 29H24.7982C30.04 25.1141 33 18.9243 33 12.4182V6ZM35 2H9V4H35V2ZM16.0159 44C16.0059 44.0002 15.9959 44.0002 15.9859 44H7V46H37V44H16.0159ZM25.7054 42C25.1178 41.1159 24.6529 40.0986 24.2886 39.1256C23.7454 37.6749 23.3721 36.1714 23.1529 35H20.8472C20.628 36.1714 20.2547 37.6749 19.7115 39.1256C19.3472 40.0986 18.8822 41.1159 18.2946 42H25.7054ZM25 33V31H19V33H19.9831C19.9935 32.9998 20.0039 32.9998 20.0143 33H25ZM9 48H35V64H9V48ZM37 66H7V68H37V66ZM3.72643 15.0916C4.70717 16.1791 6.08502 16.7357 7.54372 17.3248C8.19923 17.5897 8.88362 17.8665 9.54796 18.2054C9.04926 16.3331 9 14.3891 9 12.4182V9H8.1657C6.73355 9 5.39336 8.25754 4.58058 7.0849L3.98663 6.22809C3.54114 5.58536 2.8353 5.1748 2.06281 5.09784V9.22031C2.06281 11.9298 2.60698 13.8503 3.72643 15.0916ZM36.4567 17.3248C37.9155 16.7356 39.2932 16.1792 40.2738 15.0916C41.3933 13.8503 41.9372 11.9298 41.9372 9.22031V5.09836C41.1622 5.1763 40.4582 5.58673 40.0134 6.22836L39.4194 7.08502C38.6068 8.25766 37.2664 9 35.8343 9H35V12.4182C35 14.3859 34.9664 16.3271 34.4692 18.1967C35.1285 17.8617 35.8069 17.5872 36.4567 17.3248Z" fill="#4066A5"/>
              <rect opacity="0.3" x="15" y="52" width="14" height="8" fill="#4066A5"/>
              <rect opacity="0.3" x="7" y="44" width="30" height="2" fill="#4066A5"/>
              <rect opacity="0.3" x="9" y="2" width="26" height="2" fill="#4066A5"/>
              <rect opacity="0.3" x="7" y="66" width="30" height="2" fill="#4066A5"/>
              <rect opacity="0.3" x="19" y="31" width="6" height="2" fill="#4066A5"/>
            </svg>
            <h1>Thanks for subscribing!</h1>
            <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
          </div>

          <div class="newsletter-invitation" 
            <?php 
              $drawInvite = $successfullySubmitted ? 'style="display: none"' : 'style="display: block"';
              echo $drawInvite;
            ?>>
            <h1>Subscribe to newsletter</h1>
            <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
            <form id="newsletter-form" method="POST">
              <div class="email-container">
                <div class="error-message">
                  <?php echo $emailMessage; ?>
                </div>
                <div class="email-input">
                  <span class="input-border"></span>
                  <input type="email" id="email" name="email" placeholder="Type your email address here..."><br>
                  <div class="button-container">
                    <button type="submit" id="submit" :disabled="isInvalidForm || isSubmitButtonDisabled">
                      <svg id="arrow-right" width="24" height="14" viewBox="0 0 24 14" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z"/>
                      </svg>                  
                    </button>
                  </div>
                </div>
              </div>
              <div class="error-message">
                <?php echo $termsMessage; ?>
              </div>
              <div class="checkbox-container">
                <input type="checkbox" id="terms-ns" name="terms" value="Agree">
                <label for="terms-ns">
                  <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L4.70711 10.7071C4.31658 11.0976 3.68342 11.0976 3.29289 10.7071L0.292893 7.70711C-0.0976311 7.31658 -0.0976311 6.68342 0.292893 6.29289C0.683417 5.90237 1.31658 5.90237 1.70711 6.29289L4 8.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893Z" fill="white"/>
                  </svg>
                </label>
                <span>I agree to <a href="#" class="terms-link">terms of service</a></span>
              </div>
            </form>
          </div>
          <div class="vertical-line"></div>
        <div class="social-icons">
          <a href="#" class="icon facebook-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="icon instagram-icon">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="icon twitter-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="icon youtube-icon">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        </div>
      </noscript>
    </div>
    <div class="background-block"></div>
  </div>
</body>
<script src="src/js/app.js"></script>
<script type="text/javascript">
  document.getElementById('js-enabled').classList.remove("hidden");
</script>
</html>
