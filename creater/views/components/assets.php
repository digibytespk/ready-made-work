<div class="row mb-20 pb-20">
    <div class="row">
        <?php
        if (isset($shops_array) && is_array($shops_array)) {
            foreach ($shops_array as $key => $value) {
        ?>
                <div class="col-lg-3 col-sm-6 shops-griss">
                    <div class="box-shop-wrd">
                        <img src="<?= $value['image'] ?>" />
                        <div class="cw-b-rwap">
                            <div class="rf-nowname">Reference 01.jpg</div>
                            <div class="mt-42">
                                <svg width="70" height="4" viewBox="0 0 70 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1" y1="1" x2="69" y2="1" stroke="#E4E5F2" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="d-flex align-items-center mt-10">
                                <button class="c-btn-c pt-7 pb-7">Download</button>
                                <button class="c-btn-c bg-lwo-s min-width-auto">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7666 9.50278L10.6093 6.34637C10.6754 6.02399 10.7081 5.69565 10.7071 5.36655C10.7068 4.46418 10.4795 3.57642 10.0462 2.78535C9.6129 1.99428 8.98753 1.32542 8.22792 0.840594C7.4683 0.355769 6.59896 0.0706282 5.70025 0.0115269C4.80153 -0.0475744 3.90245 0.121271 3.08611 0.502457C2.98268 0.549795 2.89235 0.621714 2.82296 0.711969C2.75357 0.802224 2.70723 0.908086 2.68794 1.02036C2.66873 1.13121 2.67648 1.24507 2.71053 1.35228C2.74458 1.45949 2.80392 1.5569 2.88353 1.63625L5.92214 4.67368L4.66478 5.93344L1.63316 2.88901C1.5533 2.81049 1.45577 2.75234 1.3488 2.71945C1.24183 2.68657 1.12853 2.67991 1.01846 2.70005C0.907098 2.71866 0.801902 2.76404 0.711877 2.8323C0.621851 2.90055 0.54968 2.98966 0.501544 3.09197C0.119815 3.91258 -0.0485608 4.81658 0.0120789 5.71989C0.0727186 6.6232 0.360404 7.49647 0.848373 8.25847C1.33634 9.02046 2.00874 9.64642 2.80302 10.0781C3.5973 10.5098 4.48765 10.7332 5.39125 10.7276C5.71973 10.7286 6.04744 10.6958 6.3692 10.6296L9.51957 13.793C9.5845 13.8586 9.66176 13.9106 9.74688 13.9462C9.83201 13.9817 9.92331 14 10.0155 14C10.1077 14 10.199 13.9817 10.2842 13.9462C10.3693 13.9106 10.4465 13.8586 10.5115 13.793C10.577 13.7279 10.6289 13.6505 10.6644 13.5652C10.6998 13.4799 10.7181 13.3885 10.7181 13.2961C10.7181 13.2037 10.6998 13.1122 10.6644 13.0269C10.6289 12.9416 10.577 12.8642 10.5115 12.7992L7.08868 9.3698C7.00315 9.28468 6.89708 9.22318 6.78079 9.19129C6.6645 9.1594 6.54196 9.15821 6.42508 9.18784C6.08781 9.27833 5.7404 9.32537 5.39125 9.32781C4.86879 9.33243 4.35057 9.23343 3.86646 9.03651C3.38235 8.83959 2.94191 8.54865 2.57051 8.18044C2.19912 7.81224 1.9041 7.37405 1.70247 6.89111C1.50084 6.40817 1.39656 5.89004 1.39566 5.36655C1.39476 5.13211 1.41345 4.898 1.45155 4.66668L4.18978 7.41717C4.25472 7.48277 4.33198 7.53483 4.4171 7.57036C4.50222 7.6059 4.59352 7.62419 4.68574 7.62419C4.77795 7.62419 4.86925 7.6059 4.95438 7.57036C5.0395 7.53483 5.11676 7.48277 5.18169 7.41717L7.40302 5.17059C7.52892 5.04008 7.5993 4.86568 7.5993 4.68418C7.5993 4.50267 7.52892 4.32827 7.40302 4.19777L4.68574 1.45428C4.91666 1.4165 5.15029 1.39777 5.38427 1.39829C6.43349 1.40014 7.43911 1.81905 8.18037 2.56304C8.92163 3.30703 9.33795 4.31531 9.33795 5.36655C9.33551 5.71637 9.28856 6.06444 9.19824 6.40236C9.16867 6.51946 9.16986 6.64224 9.20168 6.75875C9.23351 6.87526 9.29489 6.98154 9.37986 7.06723L12.8027 10.4966C12.9342 10.6284 13.1126 10.7024 13.2986 10.7024C13.4846 10.7024 13.663 10.6284 13.7946 10.4966C13.9261 10.3648 14 10.1861 14 9.99969C14 9.81331 13.9261 9.63457 13.7946 9.50278H13.7666Z" fill="#272838"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <div class="row pt-20 mt-20">
        <div class="col-lg-5 col-sm-12 ">
            <div class="pagiantion_ce">
                <div>
                    <button>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.7 0C0.313401 0 0 0.313401 0 0.7V7.3C0 7.6866 0.313401 8 0.7 8C1.0866 8 1.4 7.6866 1.4 7.3V0.7C1.4 0.313401 1.0866 0 0.7 0ZM6.61926 7.58619C6.58541 7.66737 6.53582 7.74104 6.47333 7.80296C6.41136 7.8654 6.33762 7.91495 6.25638 7.94877C6.17514 7.98259 6.08801 8 6 8C5.91199 8 5.82485 7.98259 5.74362 7.94877C5.66238 7.91495 5.58864 7.8654 5.52667 7.80296L2.19333 4.47237C2.13264 4.40902 2.08506 4.33432 2.05333 4.25256C2.01806 4.17282 1.99984 4.08661 1.99984 3.99943C1.99984 3.91226 2.01806 3.82604 2.05333 3.74631C2.08506 3.66454 2.13264 3.58984 2.19333 3.52649L5.52667 0.195899C5.6522 0.0704671 5.82247 0 6 0C6.17753 0 6.3478 0.0704671 6.47333 0.1959C6.59887 0.321332 6.66939 0.491455 6.66939 0.668843C6.66939 0.846231 6.59887 1.01635 6.47333 1.14179L4.27333 3.33331L9.33333 3.33331C9.51014 3.33331 9.67971 3.40349 9.80474 3.52842C9.92976 3.65334 10 3.82277 10 3.99943C10 4.1761 9.92976 4.34553 9.80474 4.47045C9.67971 4.59537 9.51014 4.66555 9.33333 4.66555L4.27333 4.66555L6.47333 6.85708C6.53582 6.919 6.58541 6.99267 6.61926 7.07385C6.65311 7.15502 6.67053 7.24208 6.67053 7.33002C6.67053 7.41795 6.65311 7.50502 6.61926 7.58619Z" fill="#DCDBE6" />
                        </svg>
                    </button>
                    <button>
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.47333 7.80296C4.53582 7.74104 4.58541 7.66737 4.61926 7.58619C4.65311 7.50502 4.67053 7.41795 4.67053 7.33002C4.67053 7.24208 4.65311 7.15502 4.61926 7.07385C4.58541 6.99267 4.53582 6.919 4.47333 6.85708L2.27333 4.66555L7.33333 4.66555C7.51014 4.66555 7.67971 4.59537 7.80474 4.47045C7.92976 4.34553 8 4.1761 8 3.99943C8 3.82277 7.92976 3.65334 7.80474 3.52842C7.67971 3.40349 7.51014 3.33331 7.33333 3.33331L2.27333 3.33331L4.47333 1.14179C4.59887 1.01635 4.66939 0.846231 4.66939 0.668843C4.66939 0.491455 4.59887 0.321332 4.47333 0.1959C4.3478 0.0704671 4.17753 -1.67085e-07 4 -1.74846e-07C3.82247 -1.82606e-07 3.6522 0.0704671 3.52667 0.195899L0.193333 3.52649C0.13264 3.58984 0.0850623 3.66454 0.0533331 3.74631C0.0180629 3.82604 -0.00015562 3.91226 -0.000155624 3.99943C-0.000155628 4.08661 0.0180629 4.17282 0.0533331 4.25256C0.0850623 4.33432 0.13264 4.40902 0.193333 4.47238L3.52667 7.80296C3.58864 7.8654 3.66238 7.91495 3.74361 7.94877C3.82485 7.98259 3.91199 8 4 8C4.08801 8 4.17514 7.98259 4.25638 7.94877C4.33762 7.91495 4.41136 7.8654 4.47333 7.80296Z" fill="#DCDBE6" />
                        </svg>
                    </button>
                </div>
                <div class="count_btn_owep">
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>5</button>
                </div>
                <div>
                    <button>
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.52667 0.197037C3.46418 0.258962 3.41459 0.332634 3.38074 0.413807C3.34689 0.494979 3.32947 0.582045 3.32947 0.669981C3.32947 0.757916 3.34689 0.844981 3.38074 0.926154C3.41459 1.00733 3.46418 1.081 3.52667 1.14292L5.72667 3.33445L0.666667 3.33445C0.489856 3.33445 0.320287 3.40463 0.195262 3.52955C0.0702381 3.65447 4.97995e-08 3.8239 4.76927e-08 4.00057C4.5586e-08 4.17723 0.0702381 4.34666 0.195262 4.47158C0.320287 4.59651 0.489856 4.66669 0.666667 4.66669L5.72667 4.66669L3.52667 6.85821C3.40113 6.98365 3.33061 7.15377 3.33061 7.33116C3.33061 7.50855 3.40113 7.67867 3.52667 7.8041C3.6522 7.92953 3.82247 8 4 8C4.17753 8 4.3478 7.92953 4.47333 7.8041L7.80667 4.47351C7.86736 4.41016 7.91494 4.33546 7.94667 4.25369C7.98194 4.17396 8.00016 4.08774 8.00016 4.00057C8.00016 3.91339 7.98194 3.82718 7.94667 3.74744C7.91494 3.66568 7.86736 3.59098 7.80667 3.52762L4.47333 0.197037C4.41136 0.134604 4.33762 0.0850468 4.25638 0.0512291C4.17515 0.0174113 4.08801 5.25586e-07 4 5.24537e-07C3.91199 5.23487e-07 3.82486 0.0174113 3.74362 0.051229C3.66238 0.0850468 3.58864 0.134604 3.52667 0.197037Z" fill="#1ED599" />
                        </svg>
                    </button>
                    <button>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.3 8C9.6866 8 10 7.6866 10 7.3L10 0.7C10 0.313401 9.6866 -2.73984e-08 9.3 -6.11959e-08C8.9134 -9.49935e-08 8.6 0.313401 8.6 0.7L8.6 7.3C8.6 7.6866 8.9134 8 9.3 8ZM3.38074 0.413806C3.41459 0.332634 3.46418 0.258961 3.52667 0.197037C3.58864 0.134603 3.66238 0.0850462 3.74362 0.0512285C3.82486 0.0174107 3.91199 -5.53934e-08 4 -4.76995e-08C4.08801 -4.00056e-08 4.17515 0.0174107 4.25639 0.0512285C4.33763 0.0850468 4.41136 0.134603 4.47333 0.197037L7.80667 3.52762C7.86736 3.59098 7.91494 3.66568 7.94667 3.74744C7.98194 3.82718 8.00016 3.91339 8.00016 4.00057C8.00016 4.08774 7.98194 4.17396 7.94667 4.25369C7.91494 4.33546 7.86736 4.41016 7.80667 4.47351L4.47333 7.8041C4.3478 7.92953 4.17753 8 4 8C3.82247 8 3.6522 7.92953 3.52667 7.8041C3.40113 7.67867 3.33061 7.50854 3.33061 7.33116C3.33061 7.15377 3.40113 6.98365 3.52667 6.85821L5.72667 4.66669L0.666667 4.66669C0.489856 4.66669 0.320287 4.59651 0.195263 4.47158C0.0702384 4.34666 3.34197e-07 4.17723 3.49641e-07 4.00057C3.65086e-07 3.8239 0.0702385 3.65447 0.195263 3.52955C0.320287 3.40463 0.489856 3.33445 0.666667 3.33445L5.72667 3.33445L3.52667 1.14292C3.46418 1.081 3.41459 1.00733 3.38074 0.926154C3.34689 0.844981 3.32947 0.757915 3.32947 0.66998C3.32947 0.582044 3.34689 0.494979 3.38074 0.413806Z" fill="#1ED599" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-7 justify-content-right d-flex align-items-center">
            <div class="mvweprihv">
                <div class="sb_txtcew">Show Results per Page</div>
                <div class="sel_cwe">
                    <select>
                        <option>20</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>