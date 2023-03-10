<link rel="stylesheet" href="/styles/popup.css" />
<script>
    $(document).on("click", ".close-popup-mina", () => {
        $(".popup-body").removeClass("show");
    })
</script>
<div class="popup-body" id="add-pay-met-popup">
    <div class="popup-header">
        <div class="popup-heading">Add Payment Method</div>
        <div>
            <button class="round-btn-g bg-transparent border-none close-popup-mina">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.4158 6.00409L11.7158 1.71409C11.9041 1.52579 12.0099 1.27039 12.0099 1.00409C12.0099 0.73779 11.9041 0.482395 11.7158 0.294092C11.5275 0.105788 11.2721 0 11.0058 0C10.7395 0 10.4841 0.105788 10.2958 0.294092L6.0058 4.59409L1.7158 0.294092C1.52749 0.105788 1.2721 -1.9841e-09 1.0058 0C0.739497 1.9841e-09 0.484102 0.105788 0.295798 0.294092C0.107495 0.482395 0.0017066 0.73779 0.0017066 1.00409C0.0017066 1.27039 0.107495 1.52579 0.295798 1.71409L4.5958 6.00409L0.295798 10.2941C0.20207 10.3871 0.127676 10.4977 0.0769072 10.6195C0.0261385 10.7414 0 10.8721 0 11.0041C0 11.1361 0.0261385 11.2668 0.0769072 11.3887C0.127676 11.5105 0.20207 11.6211 0.295798 11.7141C0.388761 11.8078 0.499362 11.8822 0.621222 11.933C0.743081 11.9838 0.873786 12.0099 1.0058 12.0099C1.13781 12.0099 1.26852 11.9838 1.39038 11.933C1.51223 11.8822 1.62284 11.8078 1.7158 11.7141L6.0058 7.41409L10.2958 11.7141C10.3888 11.8078 10.4994 11.8822 10.6212 11.933C10.7431 11.9838 10.8738 12.0099 11.0058 12.0099C11.1378 12.0099 11.2685 11.9838 11.3904 11.933C11.5122 11.8822 11.6228 11.8078 11.7158 11.7141C11.8095 11.6211 11.8839 11.5105 11.9347 11.3887C11.9855 11.2668 12.0116 11.1361 12.0116 11.0041C12.0116 10.8721 11.9855 10.7414 11.9347 10.6195C11.8839 10.4977 11.8095 10.3871 11.7158 10.2941L7.4158 6.00409Z" fill="#D51E1E" />
                </svg>
            </button>
        </div>
    </div>
    <div class="popup-inner-body">
        <p class="info-para-poup">Select a payment method from the following. You can also use various third party merchants listed in the others segment.</p>
        <div class="signin-f-labe signup_btns_slect">
            <button class="tabselect-signup active text-align-left pl-15">
                Credit / Debit Card</button>
            <button class="tabselect-signup text-align-left pl-15">
                Paypal</button>
            <button class="tabselect-signup text-align-left pl-15">
                Other</button>
        </div>
        <div class="line-br-gya mt-30"></div>
        <form id="demoForm" method="post">
            <div class="cwc_cewm00 mt-20 pl-0">
                <div class="eif-input">
                    <div class="cew-lj label w-30">
                        Credit Card Number
                    </div>
                    <div class="input w-70">
                        <input type="text" name="cc" placeholder="4902  0000 1298  9854" />
                    </div>
                </div>
            </div>
            <div class="cwc_cewm00 mt-20 pl-0">
                <div class="eif-input">
                    <div class="cew-lj label w-30">
                        Name on Card
                    </div>
                    <div class="input w-70"><input type="text" placeholder="Arados Markachanda" /></div>
                </div>
            </div>
            <div class="cwc_cewm00 mt-20 pl-0">
                <div class="eif-input">
                    <div class="cew-lj label w-30">
                        Year
                    </div>
                    <div class="input w-70">
                        <input type="text" placeholder="MM / YYYY" />
                        <div class="ipn_infomess mt-20 text-gray-meth">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 4.5C4.86739 4.5 4.74022 4.55268 4.64645 4.64645C4.55268 4.74021 4.5 4.86739 4.5 5V7C4.5 7.13261 4.55268 7.25978 4.64645 7.35355C4.74022 7.44732 4.86739 7.5 5 7.5C5.13261 7.5 5.25979 7.44732 5.35355 7.35355C5.44732 7.25978 5.5 7.13261 5.5 7V5C5.5 4.86739 5.44732 4.74021 5.35355 4.64645C5.25979 4.55268 5.13261 4.5 5 4.5ZM5.19 2.54C5.06827 2.48999 4.93173 2.48999 4.81 2.54C4.74863 2.5638 4.69255 2.59948 4.645 2.645C4.60084 2.6936 4.56532 2.74941 4.54 2.81C4.51201 2.86934 4.49831 2.93441 4.5 3C4.49962 3.0658 4.51223 3.13103 4.53712 3.19195C4.562 3.25287 4.59866 3.30828 4.645 3.355C4.6936 3.39916 4.74941 3.43468 4.81 3.46C4.88575 3.49112 4.96798 3.50316 5.04947 3.49506C5.13096 3.48695 5.20922 3.45896 5.27736 3.41353C5.3455 3.36811 5.40143 3.30664 5.44026 3.23453C5.47908 3.16243 5.49959 3.08189 5.5 3C5.49816 2.86762 5.44637 2.74082 5.355 2.645C5.30745 2.59948 5.25138 2.5638 5.19 2.54ZM5 0C4.01109 0 3.0444 0.293245 2.22215 0.842652C1.3999 1.39206 0.759043 2.17295 0.380604 3.08658C0.00216642 4.00021 -0.0968502 5.00555 0.0960758 5.97545C0.289002 6.94535 0.765206 7.83627 1.46447 8.53553C2.16373 9.23479 3.05465 9.711 4.02455 9.90392C4.99445 10.0969 5.99979 9.99783 6.91342 9.6194C7.82705 9.24096 8.60794 8.60009 9.15735 7.77785C9.70675 6.9556 10 5.9889 10 5C10 4.34339 9.87067 3.69321 9.6194 3.08658C9.36812 2.47995 8.99983 1.92876 8.53553 1.46447C8.07124 1.00017 7.52005 0.631876 6.91342 0.380602C6.30679 0.129329 5.65661 0 5 0ZM5 9C4.20888 9 3.43552 8.7654 2.77772 8.32588C2.11992 7.88635 1.60723 7.26164 1.30448 6.53073C1.00173 5.79983 0.92252 4.99556 1.07686 4.21964C1.2312 3.44371 1.61216 2.73098 2.17157 2.17157C2.73098 1.61216 3.44372 1.2312 4.21964 1.07686C4.99556 0.922518 5.79983 1.00173 6.53073 1.30448C7.26164 1.60723 7.88635 2.11992 8.32588 2.77772C8.7654 3.43551 9 4.20887 9 5C9 6.06086 8.57857 7.07828 7.82843 7.82842C7.07828 8.57857 6.06087 9 5 9Z" fill="#FAC458" />
                            </svg>
                            An email as been sent on this email address. You can open the email and click the verify me button to verify your email address.
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-br-gya mt-30"></div>
            <div class=" pt-20 mt-10">
                <div class="ft-cclp-but text-right">
                    <button class="c-btn-c">Save Payment Method</button>
                    <button class="c-btn-c bg-white text-black close-popup-mina">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).on("click", ".tabselect-signup", function() {
        $(".tabselect-signup").removeClass("active");
        $(this).addClass("active");
    })
</script>