<button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
                <span class="sr-only">Menu Toggle Button</span>
                <i class="mgc_round_line text-xl"></i>
            </button>


            <div class="srcollbar" data-simplebar>
                <ul class="menu" data-fc-type="accordion">
                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="{{('admin')}}" class="menu-link">
                            <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="menu-item">
                        <a href="{{route('pegawai.index')}}" class="menu-link">
                            <span class="menu-icon"><i class="mgc_android_2_fill"></i></span>
                            <span class="menu-text"> Pegawai </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="mgc_badge_line"></i></span>
                            <span class="menu-text"> Angota </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="mgc_bank_card_fill"></i></span>
                            <span class="menu-text"> Simpanan </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="mgc_bird_fill"></i></span>
                            <span class="menu-text"> Pinjaman </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="mgc_brief_line"></i></span>
                            <span class="menu-text"> Angsuran </span>
                        </a>
                    </li>

                    <li class="menu-title">Logout</li>

                    <li class="menu-item">
                        <a href="{{('logout')}}" class="menu-link">
                            <span class="menu-icon"><i class="mgc_align_arrow_right_fill"></i></span>
                            <span class="menu-text"> Logout </span>
                        </a>
                    </li>
                </ul>
                
                

                <!-- Help Box Widget -->
                {{-- <div class="my-10 mx-5">
                    <div class="help-box p-6 bg-black/5 text-center rounded-md">
                        <div class="flex justify-center mb-4">
                            <svg width="30" height="18" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z" fill="#38BDF8"></path>
                            </svg>
                        </div>
                        <h5 class="mb-2">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-secondary text-white">Upgrade</a>
                    </div>
                </div> --}}
            </div>
        </div>