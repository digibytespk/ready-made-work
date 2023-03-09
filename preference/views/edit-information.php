<?php
include("../model/icons.php");
include("../views/components/nav.php");
?>
<link rel="stylesheet" href="/styles/preference.css" />
<div class="container mt-50">
    <div class="clp-flex-a">
        <h1 class="cs-h1">Preferences</h1>
    </div>

    <div class="row">
        <div class="col-lg-3 bt-gayloc pt-20">
            <ul class="galc_aher">
                <li><a>Edit Information</a></li>
                <li><a>Change Password</a></li>
                <li><a>Payment</a></li>
                <li><a>General Settings</a></li>
            </ul>
        </div>
        <div class="col-lg-9 bt-gayloc pt-20">
            <div class="edit-information-tab">
                <div>
                    <div class="inf-lable">Display Picture</div>
                    <div class="d-flex flex-wrap mt-30">
                        <div class="eif-pituxcer"><img src="/assets/designers/7.png" /></div>
                        <div>
                            <div><button class="c-btn-c pl-0 no-btn-style text-align-left itp_nbuo">Edit Profile</button></div>
                            <div><button class="c-btn-c pl-0 no-btn-style text-align-left itp_nbuo_delete">Delete</button></div>
                            <svg width="90" height="2" viewBox="0 0 90 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1" y1="1" x2="89" y2="1" stroke="#E4E5F2" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <div class="d-flex align-items-center infoetxt-inf mt-20">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 4.5C4.86739 4.5 4.74022 4.55268 4.64645 4.64645C4.55268 4.74021 4.5 4.86739 4.5 5V7C4.5 7.13261 4.55268 7.25978 4.64645 7.35355C4.74022 7.44732 4.86739 7.5 5 7.5C5.13261 7.5 5.25979 7.44732 5.35355 7.35355C5.44732 7.25978 5.5 7.13261 5.5 7V5C5.5 4.86739 5.44732 4.74021 5.35355 4.64645C5.25979 4.55268 5.13261 4.5 5 4.5ZM5.19 2.54C5.06827 2.48999 4.93173 2.48999 4.81 2.54C4.74863 2.5638 4.69255 2.59948 4.645 2.645C4.60084 2.6936 4.56532 2.74941 4.54 2.81C4.51201 2.86934 4.49831 2.93441 4.5 3C4.49962 3.0658 4.51223 3.13103 4.53712 3.19195C4.562 3.25287 4.59866 3.30828 4.645 3.355C4.6936 3.39916 4.74941 3.43468 4.81 3.46C4.88575 3.49112 4.96798 3.50316 5.04947 3.49506C5.13096 3.48695 5.20922 3.45896 5.27736 3.41353C5.3455 3.36811 5.40143 3.30664 5.44026 3.23453C5.47908 3.16243 5.49959 3.08189 5.5 3C5.49816 2.86762 5.44637 2.74082 5.355 2.645C5.30745 2.59948 5.25138 2.5638 5.19 2.54ZM5 0C4.01109 0 3.0444 0.293245 2.22215 0.842652C1.3999 1.39206 0.759043 2.17295 0.380604 3.08658C0.00216642 4.00021 -0.0968502 5.00555 0.0960758 5.97545C0.289002 6.94535 0.765206 7.83627 1.46447 8.53553C2.16373 9.23479 3.05465 9.711 4.02455 9.90392C4.99445 10.0969 5.99979 9.99783 6.91342 9.6194C7.82705 9.24096 8.60794 8.60009 9.15735 7.77785C9.70675 6.9556 10 5.9889 10 5C10 4.34339 9.87067 3.69321 9.6194 3.08658C9.36812 2.47995 8.99983 1.92876 8.53553 1.46447C8.07124 1.00017 7.52005 0.631876 6.91342 0.380602C6.30679 0.129329 5.65661 0 5 0ZM5 9C4.20888 9 3.43552 8.7654 2.77772 8.32588C2.11992 7.88635 1.60723 7.26164 1.30448 6.53073C1.00173 5.79983 0.92252 4.99556 1.07686 4.21964C1.2312 3.44371 1.61216 2.73098 2.17157 2.17157C2.73098 1.61216 3.44372 1.2312 4.21964 1.07686C4.99556 0.922518 5.79983 1.00173 6.53073 1.30448C7.26164 1.60723 7.88635 2.11992 8.32588 2.77772C8.7654 3.43551 9 4.20887 9 5C9 6.06086 8.57857 7.07828 7.82843 7.82842C7.07828 8.57857 6.06087 9 5 9Z" fill="#A09DB1" />
                                </svg>
                                Picture should be at least 900 x 900 pixels and no more than 2 MBs.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Primary Information</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Your Name
                                    </div>
                                    <div class="input"><input type="text" placeholder="Arados Markachanda" /></div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Email Address
                                    </div>
                                    <div class="input">
                                        <input type="text" placeholder="arados.markachanda@gmail.com.com" />
                                        <div class="psa_nverfied pl-10 pr-10">NOT VERIFIED</div>
                                        <div class="ipn_infomess mt-20">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 4.5C4.86739 4.5 4.74022 4.55268 4.64645 4.64645C4.55268 4.74021 4.5 4.86739 4.5 5V7C4.5 7.13261 4.55268 7.25978 4.64645 7.35355C4.74022 7.44732 4.86739 7.5 5 7.5C5.13261 7.5 5.25979 7.44732 5.35355 7.35355C5.44732 7.25978 5.5 7.13261 5.5 7V5C5.5 4.86739 5.44732 4.74021 5.35355 4.64645C5.25979 4.55268 5.13261 4.5 5 4.5ZM5.19 2.54C5.06827 2.48999 4.93173 2.48999 4.81 2.54C4.74863 2.5638 4.69255 2.59948 4.645 2.645C4.60084 2.6936 4.56532 2.74941 4.54 2.81C4.51201 2.86934 4.49831 2.93441 4.5 3C4.49962 3.0658 4.51223 3.13103 4.53712 3.19195C4.562 3.25287 4.59866 3.30828 4.645 3.355C4.6936 3.39916 4.74941 3.43468 4.81 3.46C4.88575 3.49112 4.96798 3.50316 5.04947 3.49506C5.13096 3.48695 5.20922 3.45896 5.27736 3.41353C5.3455 3.36811 5.40143 3.30664 5.44026 3.23453C5.47908 3.16243 5.49959 3.08189 5.5 3C5.49816 2.86762 5.44637 2.74082 5.355 2.645C5.30745 2.59948 5.25138 2.5638 5.19 2.54ZM5 0C4.01109 0 3.0444 0.293245 2.22215 0.842652C1.3999 1.39206 0.759043 2.17295 0.380604 3.08658C0.00216642 4.00021 -0.0968502 5.00555 0.0960758 5.97545C0.289002 6.94535 0.765206 7.83627 1.46447 8.53553C2.16373 9.23479 3.05465 9.711 4.02455 9.90392C4.99445 10.0969 5.99979 9.99783 6.91342 9.6194C7.82705 9.24096 8.60794 8.60009 9.15735 7.77785C9.70675 6.9556 10 5.9889 10 5C10 4.34339 9.87067 3.69321 9.6194 3.08658C9.36812 2.47995 8.99983 1.92876 8.53553 1.46447C8.07124 1.00017 7.52005 0.631876 6.91342 0.380602C6.30679 0.129329 5.65661 0 5 0ZM5 9C4.20888 9 3.43552 8.7654 2.77772 8.32588C2.11992 7.88635 1.60723 7.26164 1.30448 6.53073C1.00173 5.79983 0.92252 4.99556 1.07686 4.21964C1.2312 3.44371 1.61216 2.73098 2.17157 2.17157C2.73098 1.61216 3.44372 1.2312 4.21964 1.07686C4.99556 0.922518 5.79983 1.00173 6.53073 1.30448C7.26164 1.60723 7.88635 2.11992 8.32588 2.77772C8.7654 3.43551 9 4.20887 9 5C9 6.06086 8.57857 7.07828 7.82843 7.82842C7.07828 8.57857 6.06087 9 5 9Z" fill="#FAC458" />
                                            </svg>
                                            An email as been sent on this email address. You can open the email and click the verify me button to verify your email address.
                                        </div>
                                    </div>
                                    <div class="_eiwo_wto">
                                        <button class="c-btn-c">Verify</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Contact #
                                    </div>
                                    <div class="input"><input type="text" placeholder="+1 000 000 0090" /></div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Account Type
                                    </div>
                                    <div class="input"><input type="text" placeholder="Buyer" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Secondary Information</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Gender
                                    </div>
                                    <div class="input">
                                        <select>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Country
                                    </div>
                                    <div class="input">
                                        <select>
                                            <option>United States</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        State
                                    </div>
                                    <div class="input">
                                        <select>
                                            <option>New York</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Address
                                    </div>
                                    <div class="input">
                                        <textarea placeholder="Suite 401, Block 23, Queens Mariland Building, Albany, NY, USA"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-p-tab">
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Enter Existing Password</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Your Password
                                    </div>
                                    <div class="input"><input type="password" placeholder="Arados Markachanda" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Multi Factor Authentication</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        6 Digit OTP Code
                                    </div>
                                    <div class="input">
                                        <div class="input-otp">
                                            <input type="text" class="invalid" maxlength="1" />
                                            <input type="text" maxlength="1" />
                                            <input type="text" maxlength="1" />
                                            <input type="text" maxlength="1" />
                                            <input type="text" maxlength="1" />
                                            <input type="text" maxlength="1" />
                                        </div>
                                        <div class="ic-codesotp mt-20">Resend Code (30s)</div>
                                        <div class="rs-codesec mt-10">Resend Code (30s)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Change Password</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        New Password
                                    </div>
                                    <div class="input">
                                        <input type="text" placeholder="AwesomeP@ssword" />
                                    </div>
                                </div>
                            </div>
                            <div class="cwc_cewm00 mt-20 pl-0">
                                <div class="eif-input">
                                    <div class="cew-lj label">
                                        Confirm Password
                                    </div>
                                    <div class="input">
                                        <div>
                                            <input type="text" />
                                        </div>
                                        <div class="cw_knjerp mt-20 not-valid-ps">
                                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.81674 0.165363C7.76382 0.112965 7.70087 0.0713757 7.6315 0.0429939C7.56213 0.0146122 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0146122 7.19367 0.0429939C7.1243 0.0713757 7.06134 0.112965 7.00842 0.165363L2.7676 4.33581L0.985878 2.58042C0.930934 2.52829 0.866074 2.48731 0.795002 2.4598C0.723929 2.43229 0.648036 2.4188 0.571655 2.4201C0.495274 2.4214 0.419902 2.43746 0.349841 2.46737C0.27978 2.49727 0.216402 2.54043 0.163327 2.59439C0.110252 2.64835 0.0685192 2.71205 0.0405104 2.78185C0.0125016 2.85165 -0.00123442 2.92618 8.70471e-05 3.0012C0.00140852 3.07621 0.0177615 3.15023 0.0482121 3.21904C0.0786626 3.28784 0.122615 3.35008 0.177558 3.40221L2.36344 5.54892C2.41635 5.60132 2.47931 5.64291 2.54868 5.67129C2.61805 5.69967 2.69245 5.71429 2.7676 5.71429C2.84274 5.71429 2.91714 5.69967 2.98651 5.67129C3.05588 5.64291 3.11884 5.60132 3.17175 5.54892L7.81674 0.987153C7.87452 0.934803 7.92064 0.871267 7.95218 0.800549C7.98372 0.72983 8 0.653463 8 0.576258C8 0.499054 7.98372 0.422686 7.95218 0.351967C7.92064 0.281249 7.87452 0.217713 7.81674 0.165363Z" fill="#1ED599" />
                                            </svg>
                                            Password must be at least 8 characters long
                                        </div>
                                        <div class="cw_knjerp mt-10">
                                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.81674 0.165363C7.76382 0.112965 7.70087 0.0713757 7.6315 0.0429939C7.56213 0.0146122 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0146122 7.19367 0.0429939C7.1243 0.0713757 7.06134 0.112965 7.00842 0.165363L2.7676 4.33581L0.985878 2.58042C0.930934 2.52829 0.866074 2.48731 0.795002 2.4598C0.723929 2.43229 0.648036 2.4188 0.571655 2.4201C0.495274 2.4214 0.419902 2.43746 0.349841 2.46737C0.27978 2.49727 0.216402 2.54043 0.163327 2.59439C0.110252 2.64835 0.0685192 2.71205 0.0405104 2.78185C0.0125016 2.85165 -0.00123442 2.92618 8.70471e-05 3.0012C0.00140852 3.07621 0.0177615 3.15023 0.0482121 3.21904C0.0786626 3.28784 0.122615 3.35008 0.177558 3.40221L2.36344 5.54892C2.41635 5.60132 2.47931 5.64291 2.54868 5.67129C2.61805 5.69967 2.69245 5.71429 2.7676 5.71429C2.84274 5.71429 2.91714 5.69967 2.98651 5.67129C3.05588 5.64291 3.11884 5.60132 3.17175 5.54892L7.81674 0.987153C7.87452 0.934803 7.92064 0.871267 7.95218 0.800549C7.98372 0.72983 8 0.653463 8 0.576258C8 0.499054 7.98372 0.422686 7.95218 0.351967C7.92064 0.281249 7.87452 0.217713 7.81674 0.165363Z" fill="#1ED599" />
                                            </svg>
                                            Use at least one capital letter
                                        </div>
                                        <div class="cw_knjerp mt-10">
                                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.81674 0.165363C7.76382 0.112965 7.70087 0.0713757 7.6315 0.0429939C7.56213 0.0146122 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0146122 7.19367 0.0429939C7.1243 0.0713757 7.06134 0.112965 7.00842 0.165363L2.7676 4.33581L0.985878 2.58042C0.930934 2.52829 0.866074 2.48731 0.795002 2.4598C0.723929 2.43229 0.648036 2.4188 0.571655 2.4201C0.495274 2.4214 0.419902 2.43746 0.349841 2.46737C0.27978 2.49727 0.216402 2.54043 0.163327 2.59439C0.110252 2.64835 0.0685192 2.71205 0.0405104 2.78185C0.0125016 2.85165 -0.00123442 2.92618 8.70471e-05 3.0012C0.00140852 3.07621 0.0177615 3.15023 0.0482121 3.21904C0.0786626 3.28784 0.122615 3.35008 0.177558 3.40221L2.36344 5.54892C2.41635 5.60132 2.47931 5.64291 2.54868 5.67129C2.61805 5.69967 2.69245 5.71429 2.7676 5.71429C2.84274 5.71429 2.91714 5.69967 2.98651 5.67129C3.05588 5.64291 3.11884 5.60132 3.17175 5.54892L7.81674 0.987153C7.87452 0.934803 7.92064 0.871267 7.95218 0.800549C7.98372 0.72983 8 0.653463 8 0.576258C8 0.499054 7.98372 0.422686 7.95218 0.351967C7.92064 0.281249 7.87452 0.217713 7.81674 0.165363Z" fill="#1ED599" />
                                            </svg>
                                            Use at least one number
                                        </div>
                                        <div class="cw_knjerp mt-10">
                                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.81674 0.165363C7.76382 0.112965 7.70087 0.0713757 7.6315 0.0429939C7.56213 0.0146122 7.48773 0 7.41258 0C7.33744 0 7.26303 0.0146122 7.19367 0.0429939C7.1243 0.0713757 7.06134 0.112965 7.00842 0.165363L2.7676 4.33581L0.985878 2.58042C0.930934 2.52829 0.866074 2.48731 0.795002 2.4598C0.723929 2.43229 0.648036 2.4188 0.571655 2.4201C0.495274 2.4214 0.419902 2.43746 0.349841 2.46737C0.27978 2.49727 0.216402 2.54043 0.163327 2.59439C0.110252 2.64835 0.0685192 2.71205 0.0405104 2.78185C0.0125016 2.85165 -0.00123442 2.92618 8.70471e-05 3.0012C0.00140852 3.07621 0.0177615 3.15023 0.0482121 3.21904C0.0786626 3.28784 0.122615 3.35008 0.177558 3.40221L2.36344 5.54892C2.41635 5.60132 2.47931 5.64291 2.54868 5.67129C2.61805 5.69967 2.69245 5.71429 2.7676 5.71429C2.84274 5.71429 2.91714 5.69967 2.98651 5.67129C3.05588 5.64291 3.11884 5.60132 3.17175 5.54892L7.81674 0.987153C7.87452 0.934803 7.92064 0.871267 7.95218 0.800549C7.98372 0.72983 8 0.653463 8 0.576258C8 0.499054 7.98372 0.422686 7.95218 0.351967C7.92064 0.281249 7.87452 0.217713 7.81674 0.165363Z" fill="#1ED599" />
                                            </svg>
                                            Use at least one special character
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-tab">
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Payment</div>
                    <div class="payli_rdca mt-20">
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="img-pali-card"><img src="/assets/icons/cards/visa.png" /></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ca_mun">4808 0000 0982 4592</div>
                                <div class="ca_mnae">Arados Markachanda</div>
                            </div>
                            <div class="col-lg-3 text-right">
                                <button class="round-btn-g">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79961 9.6C4.95874 9.6 5.11135 9.53679 5.22387 9.42426C5.3364 9.31174 5.39961 9.15913 5.39961 9V5.4C5.39961 5.24087 5.3364 5.08826 5.22387 4.97574C5.11135 4.86321 4.95874 4.8 4.79961 4.8C4.64048 4.8 4.48787 4.86321 4.37535 4.97574C4.26282 5.08826 4.19961 5.24087 4.19961 5.4V9C4.19961 9.15913 4.26282 9.31174 4.37535 9.42426C4.48787 9.53679 4.64048 9.6 4.79961 9.6ZM10.7996 2.4H8.39961V1.8C8.39961 1.32261 8.20997 0.864773 7.8724 0.527208C7.53484 0.189642 7.077 0 6.59961 0H5.39961C4.92222 0 4.46438 0.189642 4.12682 0.527208C3.78925 0.864773 3.59961 1.32261 3.59961 1.8V2.4H1.19961C1.04048 2.4 0.887867 2.46321 0.775345 2.57574C0.662823 2.68826 0.599609 2.84087 0.599609 3C0.599609 3.15913 0.662823 3.31174 0.775345 3.42426C0.887867 3.53679 1.04048 3.6 1.19961 3.6H1.79961V10.2C1.79961 10.6774 1.98925 11.1352 2.32682 11.4728C2.66438 11.8104 3.12222 12 3.59961 12H8.39961C8.877 12 9.33484 11.8104 9.6724 11.4728C10.01 11.1352 10.1996 10.6774 10.1996 10.2V3.6H10.7996C10.9587 3.6 11.1114 3.53679 11.2239 3.42426C11.3364 3.31174 11.3996 3.15913 11.3996 3C11.3996 2.84087 11.3364 2.68826 11.2239 2.57574C11.1114 2.46321 10.9587 2.4 10.7996 2.4ZM4.79961 1.8C4.79961 1.64087 4.86282 1.48826 4.97535 1.37574C5.08787 1.26321 5.24048 1.2 5.39961 1.2H6.59961C6.75874 1.2 6.91135 1.26321 7.02387 1.37574C7.1364 1.48826 7.19961 1.64087 7.19961 1.8V2.4H4.79961V1.8ZM8.99961 10.2C8.99961 10.3591 8.9364 10.5117 8.82387 10.6243C8.71135 10.7368 8.55874 10.8 8.39961 10.8H3.59961C3.44048 10.8 3.28787 10.7368 3.17535 10.6243C3.06282 10.5117 2.99961 10.3591 2.99961 10.2V3.6H8.99961V10.2ZM7.19961 9.6C7.35874 9.6 7.51135 9.53679 7.62387 9.42426C7.7364 9.31174 7.79961 9.15913 7.79961 9V5.4C7.79961 5.24087 7.7364 5.08826 7.62387 4.97574C7.51135 4.86321 7.35874 4.8 7.19961 4.8C7.04048 4.8 6.88787 4.86321 6.77535 4.97574C6.66282 5.08826 6.59961 5.24087 6.59961 5.4V9C6.59961 9.15913 6.66282 9.31174 6.77535 9.42426C6.88787 9.53679 7.04048 9.6 7.19961 9.6Z" fill="#6B687B" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="payli_rdca mt-20">
                        <div class="row">
                            <div class="col-lg-1">
                                <div class="img-pali-card"><img src="/assets/icons/cards/paypal.png" /></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ca_mun">Arados Markachanda</div>
                                <div class="ca_mnae">arados.markachanda@gmail.com</div>
                            </div>
                            <div class="col-lg-3 text-right">
                                <button class="round-btn-g">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79961 9.6C4.95874 9.6 5.11135 9.53679 5.22387 9.42426C5.3364 9.31174 5.39961 9.15913 5.39961 9V5.4C5.39961 5.24087 5.3364 5.08826 5.22387 4.97574C5.11135 4.86321 4.95874 4.8 4.79961 4.8C4.64048 4.8 4.48787 4.86321 4.37535 4.97574C4.26282 5.08826 4.19961 5.24087 4.19961 5.4V9C4.19961 9.15913 4.26282 9.31174 4.37535 9.42426C4.48787 9.53679 4.64048 9.6 4.79961 9.6ZM10.7996 2.4H8.39961V1.8C8.39961 1.32261 8.20997 0.864773 7.8724 0.527208C7.53484 0.189642 7.077 0 6.59961 0H5.39961C4.92222 0 4.46438 0.189642 4.12682 0.527208C3.78925 0.864773 3.59961 1.32261 3.59961 1.8V2.4H1.19961C1.04048 2.4 0.887867 2.46321 0.775345 2.57574C0.662823 2.68826 0.599609 2.84087 0.599609 3C0.599609 3.15913 0.662823 3.31174 0.775345 3.42426C0.887867 3.53679 1.04048 3.6 1.19961 3.6H1.79961V10.2C1.79961 10.6774 1.98925 11.1352 2.32682 11.4728C2.66438 11.8104 3.12222 12 3.59961 12H8.39961C8.877 12 9.33484 11.8104 9.6724 11.4728C10.01 11.1352 10.1996 10.6774 10.1996 10.2V3.6H10.7996C10.9587 3.6 11.1114 3.53679 11.2239 3.42426C11.3364 3.31174 11.3996 3.15913 11.3996 3C11.3996 2.84087 11.3364 2.68826 11.2239 2.57574C11.1114 2.46321 10.9587 2.4 10.7996 2.4ZM4.79961 1.8C4.79961 1.64087 4.86282 1.48826 4.97535 1.37574C5.08787 1.26321 5.24048 1.2 5.39961 1.2H6.59961C6.75874 1.2 6.91135 1.26321 7.02387 1.37574C7.1364 1.48826 7.19961 1.64087 7.19961 1.8V2.4H4.79961V1.8ZM8.99961 10.2C8.99961 10.3591 8.9364 10.5117 8.82387 10.6243C8.71135 10.7368 8.55874 10.8 8.39961 10.8H3.59961C3.44048 10.8 3.28787 10.7368 3.17535 10.6243C3.06282 10.5117 2.99961 10.3591 2.99961 10.2V3.6H8.99961V10.2ZM7.19961 9.6C7.35874 9.6 7.51135 9.53679 7.62387 9.42426C7.7364 9.31174 7.79961 9.15913 7.79961 9V5.4C7.79961 5.24087 7.7364 5.08826 7.62387 4.97574C7.51135 4.86321 7.35874 4.8 7.19961 4.8C7.04048 4.8 6.88787 4.86321 6.77535 4.97574C6.66282 5.08826 6.59961 5.24087 6.59961 5.4V9C6.59961 9.15913 6.66282 9.31174 6.77535 9.42426C6.88787 9.53679 7.04048 9.6 7.19961 9.6Z" fill="#6B687B" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="general-tab">
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">General Settings</div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Notify me when a followed designer uploads a new asset</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Email me when a followed designer uploads a new asset</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Notify me when a followed designer adds a portfolio item</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Email me when a followed designer adds a portfolio item</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Email me a daily update of activities</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Email me promotional materials from Ready Made Work</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="bt-gayloc pt-20 mt-20">
                    <div class="inf-lable">Authentication Settings</div>
                    <div class="d-flex justify-content-between align-items-center mt-10 mb-10">
                        <div class="ings-mlopai">Enable Multi Factor Authentication</div>
                        <div class="stnig-witch">
                            Off
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="bt-gayloc pt-20 mt-20">
                    <div class="ft-cclp-but mt-10 text-right">
                        <button class="c-btn-c">Save Settings</button>
                        <button class="c-btn-c bg-white text-black">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>