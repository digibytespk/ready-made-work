<link rel="stylesheet" href="/styles/popup.css" />
<script>
    $(document).on("click", ".close-popup-mina", () => {
        $(".popup-body").removeClass("show");
    })
</script>
<div class="popup-body show" id="add-pay-met-popup">
    <div class="popup-header">
        <div class="popup-heading">Project Activity </div>
        <div>
            <button class="round-btn-g bg-transparent border-none close-popup-mina">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.4158 6.00409L11.7158 1.71409C11.9041 1.52579 12.0099 1.27039 12.0099 1.00409C12.0099 0.73779 11.9041 0.482395 11.7158 0.294092C11.5275 0.105788 11.2721 0 11.0058 0C10.7395 0 10.4841 0.105788 10.2958 0.294092L6.0058 4.59409L1.7158 0.294092C1.52749 0.105788 1.2721 -1.9841e-09 1.0058 0C0.739497 1.9841e-09 0.484102 0.105788 0.295798 0.294092C0.107495 0.482395 0.0017066 0.73779 0.0017066 1.00409C0.0017066 1.27039 0.107495 1.52579 0.295798 1.71409L4.5958 6.00409L0.295798 10.2941C0.20207 10.3871 0.127676 10.4977 0.0769072 10.6195C0.0261385 10.7414 0 10.8721 0 11.0041C0 11.1361 0.0261385 11.2668 0.0769072 11.3887C0.127676 11.5105 0.20207 11.6211 0.295798 11.7141C0.388761 11.8078 0.499362 11.8822 0.621222 11.933C0.743081 11.9838 0.873786 12.0099 1.0058 12.0099C1.13781 12.0099 1.26852 11.9838 1.39038 11.933C1.51223 11.8822 1.62284 11.8078 1.7158 11.7141L6.0058 7.41409L10.2958 11.7141C10.3888 11.8078 10.4994 11.8822 10.6212 11.933C10.7431 11.9838 10.8738 12.0099 11.0058 12.0099C11.1378 12.0099 11.2685 11.9838 11.3904 11.933C11.5122 11.8822 11.6228 11.8078 11.7158 11.7141C11.8095 11.6211 11.8839 11.5105 11.9347 11.3887C11.9855 11.2668 12.0116 11.1361 12.0116 11.0041C12.0116 10.8721 11.9855 10.7414 11.9347 10.6195C11.8839 10.4977 11.8095 10.3871 11.7158 10.2941L7.4158 6.00409Z" fill="#D51E1E" />
                </svg>
            </button>
        </div>
    </div>
    <div class="popup-inner-body">
        <div class="popup-that-putin">
            <input type="text" placeholder="Share your query ..." />
            <div class="ft-cclp-but fcbut-nput">
                <button class="c-btn-c bg-lwo-s">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7614 7.40951L7.35752 11.8205C6.78017 12.3336 6.02861 12.6067 5.25655 12.584C4.4845 12.5613 3.7503 12.2444 3.20414 11.6983C2.65798 11.1521 2.34113 10.4179 2.3184 9.64587C2.29567 8.87381 2.56879 8.12225 3.08187 7.5449L8.78273 1.84405C9.12309 1.52074 9.5746 1.34047 10.044 1.34047C10.5135 1.34047 10.965 1.52074 11.3054 1.84405C11.637 2.18011 11.8229 2.63324 11.8229 3.10536C11.8229 3.57749 11.637 4.03062 11.3054 4.36668L6.38837 9.27654C6.33971 9.32895 6.2812 9.37125 6.21619 9.40105C6.15118 9.43084 6.08093 9.44754 6.00947 9.45018C5.938 9.45283 5.86671 9.44138 5.79967 9.41647C5.73264 9.39157 5.67116 9.35371 5.61875 9.30504C5.56635 9.25638 5.52404 9.19787 5.49425 9.13286C5.46445 9.06785 5.44776 8.99761 5.44511 8.92614C5.44246 8.85467 5.45392 8.78339 5.47882 8.71635C5.50372 8.64931 5.54159 8.58783 5.59025 8.53543L9.24592 4.88688C9.38011 4.7527 9.4555 4.5707 9.4555 4.38093C9.4555 4.19116 9.38011 4.00917 9.24592 3.87498C9.11174 3.74079 8.92974 3.66541 8.73997 3.66541C8.55021 3.66541 8.36821 3.74079 8.23402 3.87498L4.57835 7.53778C4.39543 7.71928 4.25024 7.9352 4.15116 8.17308C4.05209 8.41097 4.00108 8.66611 4.00108 8.9238C4.00108 9.18149 4.05209 9.43663 4.15116 9.67451C4.25024 9.9124 4.39543 10.1283 4.57835 10.3098C4.95202 10.6658 5.4483 10.8643 5.96437 10.8643C6.48043 10.8643 6.97672 10.6658 7.35039 10.3098L12.2603 5.39283C12.8267 4.78494 13.1351 3.98092 13.1204 3.15016C13.1057 2.3194 12.7692 1.52676 12.1817 0.93923C11.5941 0.351702 10.8015 0.0151574 9.97074 0.000499596C9.13998 -0.0141582 8.33596 0.294215 7.72807 0.860652L2.02722 6.56151C1.25845 7.41296 0.847871 8.5282 0.881011 9.67487C0.914151 10.8215 1.38846 11.9112 2.20511 12.7168C3.02176 13.5225 4.11777 13.9819 5.26479 13.9995C6.41181 14.017 7.52137 13.5913 8.36229 12.8111L12.7733 8.40716C12.8398 8.34072 12.8925 8.26184 12.9284 8.17503C12.9644 8.08822 12.9829 7.99517 12.9829 7.90121C12.9829 7.80724 12.9644 7.7142 12.9284 7.62739C12.8925 7.54058 12.8398 7.4617 12.7733 7.39526C12.7069 7.32881 12.628 7.27611 12.5412 7.24015C12.4544 7.20419 12.3613 7.18569 12.2674 7.18569C12.1734 7.18569 12.0804 7.20419 11.9936 7.24015C11.9067 7.27611 11.8279 7.32881 11.7614 7.39526V7.40951Z" fill="#272838" />
                    </svg>
                </button>
                <button class="c-btn-c">Send</button>
            </div>
        </div>
        <div class="cntrl-nodetxt mt-10">Press Ctrl + B for Bold, Ctrl + U for Underline and Ctrl + L for Bullets</div>
        <div>
            <div class="box-kpop">
                <div class="refimg_kpip">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.71 14.71L15.29 12.29C15.197 12.1963 15.0864 12.1219 14.9646 12.0711C14.8427 12.0203 14.712 11.9942 14.58 11.9942C14.448 11.9942 14.3173 12.0203 14.1954 12.0711C14.0736 12.1219 13.963 12.1963 13.87 12.29L10.29 15.87C10.1973 15.9634 10.124 16.0743 10.0742 16.1961C10.0245 16.3179 9.99924 16.4484 10 16.58V19C10 19.2652 10.1054 19.5196 10.2929 19.7071C10.4804 19.8946 10.7348 20 11 20H13.42C13.5516 20.0008 13.6821 19.9755 13.8039 19.9258C13.9257 19.876 14.0366 19.8027 14.13 19.71L17.71 16.13C17.8037 16.037 17.8781 15.9264 17.9289 15.8046C17.9797 15.6827 18.0058 15.552 18.0058 15.42C18.0058 15.288 17.9797 15.1573 17.9289 15.0354C17.8781 14.9136 17.8037 14.803 17.71 14.71ZM13 18H12V17L14.58 14.42L15.58 15.42L13 18ZM7 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H8V5C8 5.79565 8.31607 6.55871 8.87868 7.12132C9.44129 7.68393 10.2044 8 11 8H14V9C14 9.26522 14.1054 9.51957 14.2929 9.70711C14.4804 9.89464 14.7348 10 15 10C15.2652 10 15.5196 9.89464 15.7071 9.70711C15.8946 9.51957 16 9.26522 16 9V7C16 7 16 7 16 6.94C15.9896 6.84813 15.9695 6.75763 15.94 6.67V6.58C15.8919 6.47718 15.8278 6.38267 15.75 6.3L9.75 0.3C9.66734 0.222216 9.57282 0.158081 9.47 0.11C9.44015 0.10576 9.40985 0.10576 9.38 0.11L9.06 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H7C7.26522 20 7.51957 19.8946 7.70711 19.7071C7.89464 19.5196 8 19.2652 8 19C8 18.7348 7.89464 18.4804 7.70711 18.2929C7.51957 18.1054 7.26522 18 7 18ZM10 3.41L12.59 6H11C10.7348 6 10.4804 5.89464 10.2929 5.70711C10.1054 5.51957 10 5.26522 10 5V3.41ZM5 12H11C11.2652 12 11.5196 11.8946 11.7071 11.7071C11.8946 11.5196 12 11.2652 12 11C12 10.7348 11.8946 10.4804 11.7071 10.2929C11.5196 10.1054 11.2652 10 11 10H5C4.73478 10 4.48043 10.1054 4.29289 10.2929C4.10536 10.4804 4 10.7348 4 11C4 11.2652 4.10536 11.5196 4.29289 11.7071C4.48043 11.8946 4.73478 12 5 12ZM5 8H6C6.26522 8 6.51957 7.89464 6.70711 7.70711C6.89464 7.51957 7 7.26522 7 7C7 6.73478 6.89464 6.48043 6.70711 6.29289C6.51957 6.10536 6.26522 6 6 6H5C4.73478 6 4.48043 6.10536 4.29289 6.29289C4.10536 6.48043 4 6.73478 4 7C4 7.26522 4.10536 7.51957 4.29289 7.70711C4.48043 7.89464 4.73478 8 5 8ZM7 14H5C4.73478 14 4.48043 14.1054 4.29289 14.2929C4.10536 14.4804 4 14.7348 4 15C4 15.2652 4.10536 15.5196 4.29289 15.7071C4.48043 15.8946 4.73478 16 5 16H7C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15C8 14.7348 7.89464 14.4804 7.70711 14.2929C7.51957 14.1054 7.26522 14 7 14Z" fill="white" />
                    </svg>
                </div>
                <div class="refname_kiop">Reference01.jpg</div>
                <div class="refsize_kipo">345 KBs</div>
                <select class="refselect_kiop">
                    <option>Reference</option>
                    <option>In Progress</option>
                </select>
            </div>
        </div>
        <div class="line-br-gya mt-30"></div>
        <ul class="activity-ul-jip">
            <li>
                <div class="act-prof-mig">
                    <img src="/assets/designers/7.png" />
                </div>
                <div class="w-min-migprof">
                    <div class="act-mess-mig">Euismod gravida rhoncus venenatis sed ut malesuada in enim. Velit lorem volutpat facilisi dui ultrices. Id ullamcorper metus gravida tempor sed cursus. Enim morbi aliquam aliquam scelerisque venenatis tempus scelerisque. Tincidunt odio lacus morbi tincidunt diam at. Eleifend praesent aliquam et mauris elit arcu. Nibh ipsum cursus aliquet condimentum nulla neque nec orci duis.
                        Donec elit sollicitudin lorem pulvinar luctus donec lectus ultrices risus. Ipsum eros morbi tellus laoreet velit lectus et quisque.
                    </div>
                    <div class="act-date-mig mt-10">January 12, 2023 at 5:23 pm</div>
                    <div class="mt-20">
                        <button class="c-btn-c show-con-popup mr-10">Accept Offer</button>
                        <button class="c-btn-c bg-white text-black mr-10">Negotiate</button>
                        <button class="c-btn-c bg-white text-black mr-10">Reject Offer</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="act-prof-mig">
                    <img src="/assets/designers/8.png" />
                </div>
                <div class="w-min-migprof">
                    <div class="act-mess-mig">
                        Euismod gravida rhoncus venenatis sed ut malesuada in enim. Velit lorem volutpat facilisi dui ultrices. Id ullamcorper metus gravida tempor sed cursus. Enim morbi aliquam aliquam scelerisque venenatis tempus scelerisque. Tincidunt odio lacus morbi tincidunt diam at.
                    </div>
                    <div class="act-date-mig mt-10">January 12, 2023 at 5:23 pm</div>
                </div>
            </li>
            <li>
                <div class="act-prof-mig">
                    <img src="/assets/designers/1.png" />
                </div>
                <div class="w-min-migprof">
                    <div class="act-mess-mig">
                        Euismod gravida rhoncus venenatis sed ut malesuada in enim. Velit lorem volutpat facilisi dui ultrices. Id ullamcorper metus gravida tempor sed cursus. Enim morbi aliquam aliquam scelerisque venenatis tempus scelerisque. Tincidunt odio lacus morbi tincidunt diam at.
                    </div>
                    <div class="label-upcase mt-20">ATTACHMENTS</div>
                    <div>
                        <div class="attch-citvty">
                            <img src="/assets/branding/motos.png" />
                            <div class="wrap-attch-citybu">
                                <button class="c-btn-c mr-0 mon-wid-hubred">Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="act-date-mig mt-10">January 12, 2023 at 5:23 pm</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).on("click", ".tabselect-signup", function() {
        $(".tabselect-signup").removeClass("active");
        $(this).addClass("active");
    })
</script>