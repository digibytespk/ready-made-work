<?php
include("navs/index.php");
?>
<?php
include("components/bread-crumb.php");
BreadCrumb([
    "My Projects"
], "American Web Builder’s Custom Logo Design")
?>
<div class="container">
    <?php
    include("components/project-nav.php");
    ?>
    <div class="text-center">
        <div class="mb-20 mt-40 text-center">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5 15C11.837 15 11.2011 15.2634 10.7322 15.7322C10.2634 16.2011 10 16.837 10 17.5C10 18.163 10.2634 18.7989 10.7322 19.2678C11.2011 19.7366 11.837 20 12.5 20H15C15.663 20 16.2989 19.7366 16.7678 19.2678C17.2366 18.7989 17.5 18.163 17.5 17.5C17.5 16.837 17.2366 16.2011 16.7678 15.7322C16.2989 15.2634 15.663 15 15 15H12.5ZM25 45H7.5C6.83696 45 6.20107 44.7366 5.73223 44.2678C5.26339 43.7989 5 43.163 5 42.5V7.5C5 6.83696 5.26339 6.20107 5.73223 5.73223C6.20107 5.26339 6.83696 5 7.5 5H20V12.5C20 14.4891 20.7902 16.3968 22.1967 17.8033C23.6032 19.2098 25.5109 20 27.5 20H35V22.5C35 23.163 35.2634 23.7989 35.7322 24.2678C36.2011 24.7366 36.837 25 37.5 25C38.163 25 38.7989 24.7366 39.2678 24.2678C39.7366 23.7989 40 23.163 40 22.5V17.5C40 17.5 40 17.5 40 17.35C39.974 17.1203 39.9237 16.8941 39.85 16.675V16.45C39.7298 16.1929 39.5695 15.9567 39.375 15.75L24.375 0.75C24.1683 0.55554 23.9321 0.395202 23.675 0.275C23.6004 0.2644 23.5246 0.2644 23.45 0.275L22.65 0H7.5C5.51088 0 3.60322 0.790177 2.1967 2.1967C0.790177 3.60322 0 5.51088 0 7.5V42.5C0 44.4891 0.790177 46.3968 2.1967 47.8033C3.60322 49.2098 5.51088 50 7.5 50H25C25.663 50 26.2989 49.7366 26.7678 49.2678C27.2366 48.7989 27.5 48.163 27.5 47.5C27.5 46.837 27.2366 46.2011 26.7678 45.7322C26.2989 45.2634 25.663 45 25 45ZM25 8.525L31.475 15H27.5C26.837 15 26.2011 14.7366 25.7322 14.2678C25.2634 13.7989 25 13.163 25 12.5V8.525ZM47.075 32.925C45.1685 31.1063 42.6348 30.0917 40 30.0917C37.3652 30.0917 34.8315 31.1063 32.925 32.925C31.5276 34.324 30.5763 36.1058 30.1913 38.0453C29.8064 39.9848 30.0051 41.9949 30.7623 43.8215C31.5195 45.6481 32.8012 47.2093 34.4455 48.3076C36.0897 49.4059 38.0227 49.9921 40 49.9921C41.9773 49.9921 43.9103 49.4059 45.5545 48.3076C47.1988 47.2093 48.4805 45.6481 49.2377 43.8215C49.9949 41.9949 50.1936 39.9848 49.8087 38.0453C49.4237 36.1058 48.4724 34.324 47.075 32.925ZM35 40C35 38.6739 35.5268 37.4021 36.4645 36.4645C37.4021 35.5268 38.6739 35 40 35C40.4306 35.0056 40.8588 35.0644 41.275 35.175L35.175 41.275C35.0644 40.8588 35.0056 40.4306 35 40ZM43.525 43.525C42.9052 44.1287 42.1395 44.5612 41.3025 44.7803C40.4655 44.9994 39.586 44.9976 38.75 44.775L44.825 38.725C44.9356 39.1412 44.9944 39.5694 45 40C44.9944 41.3239 44.464 42.5916 43.525 43.525ZM22.5 40C23.163 40 23.7989 39.7366 24.2678 39.2678C24.7366 38.7989 25 38.163 25 37.5C25 36.837 24.7366 36.2011 24.2678 35.7322C23.7989 35.2634 23.163 35 22.5 35H12.5C11.837 35 11.2011 35.2634 10.7322 35.7322C10.2634 36.2011 10 36.837 10 37.5C10 38.163 10.2634 38.7989 10.7322 39.2678C11.2011 39.7366 11.837 40 12.5 40H22.5ZM27.5 25H12.5C11.837 25 11.2011 25.2634 10.7322 25.7322C10.2634 26.2011 10 26.837 10 27.5C10 28.163 10.2634 28.7989 10.7322 29.2678C11.2011 29.7366 11.837 30 12.5 30H27.5C28.163 30 28.7989 29.7366 29.2678 29.2678C29.7366 28.7989 30 28.163 30 27.5C30 26.837 29.7366 26.2011 29.2678 25.7322C28.7989 25.2634 28.163 25 27.5 25Z" fill="#DCDBE6" />
            </svg>
        </div>
        <h1 class="nfhbu_life">No files have been uploaded in this project yet.</h1>
        <h4 class="nd_opui">If you are looking for a specific file and can’t find it,<br /> request it from your designer.</h4>
        <button class="c-btn-c mt-20">Open Activity</button>
    </div>
    <div class="row mt-10">
        <div class="col-lg-3 bt-gayloc pt-20">
            <ul class="galc_aher">
                <li><a>All Files</a></li>
                <li><a>References Files</a></li>
                <li><a>In Progress Files</a></li>
                <li><a>Final Files</a></li>
            </ul>
            <p class="mt-40 pra_klopi">You can download all the files in your project together.</p>
            <button class="c-btn-c bg-white text-black">Download all Files</button>
            <button class="c-btn-c bg-white text-black mt-10    ">Download Final Files</button>
        </div>

        <div class="col-lg-9">
            <?php
            for ($i = 0; $i < 3; $i++) {
            ?>
                <div class="bt-gayloc pt-20 pb-20">
                    <div class="ridate-pflifes">JANUARY 12, 2023 - 5:40 PM</div>
                    <div class="d-flex flex-wrap">
                        <div class="atacbox-opio">
                            <img src="/assets/attachments/1.png" />
                            <div class="cw-b-rwap">
                                <div class="rf-nowname">Reference 01.jpg</div>
                                <div class="mt-42">
                                    <svg width="70" height="4" viewBox="0 0 70 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1" y1="1" x2="69" y2="1" stroke="#E4E5F2" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center mt-10">
                                    <button class="c-btn-c pt-7 pb-7">Download</button>
                                    <p class="size-flie mb-0">560.54 KBs</p>
                                </div>
                            </div>
                        </div>
                        <div class="atacbox-opio">
                            <img src="/assets/attachments/2.png" />
                            <div class="cw-b-rwap">
                                <div class="rf-nowname">Reference 02.jpg</div>
                                <div class="mt-42">
                                    <svg width="70" height="4" viewBox="0 0 70 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1" y1="1" x2="69" y2="1" stroke="#E4E5F2" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex align-items-center mt-10">
                                    <button class="c-btn-c pt-7 pb-7">Download</button>
                                    <p class="size-flie mb-0">560.54 KBs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>