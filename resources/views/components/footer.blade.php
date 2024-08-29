    <div class="bg-gna text-shadowed pt-10 flex flex-col md:flex-row justify-center items-center">
        <div class="flex flex-col font-semibold">
            <div class="bg-shadowed/10 p-2 rounded-xl">
                {{ $slot }}
            </div>

            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-20 mt-10">
                <div class="w-[8rem] h-[8rem] md:w-[7rem] md:h-[7rem] mx-auto md:mx-0">
                    <img class="rounded-full" draggable="false" src="{{ Vite::asset('resources/images/gna-logo.jpg') }}"
                        alt="Logo">
                </div>

                <div class="flex flex-col items-center justify-center text-center md:text-left">
                    <div
                        class="font-medium text-xs md:text-sm tracking-widest uppercase text-wrap w-[170px] mx-auto md:mx-0">
                        follow our social media
                    </div>

                    <div class="flex space-x-3 mt-4 justify-center md:self-start">
                        <a href="https://www.facebook.com/apartments.gna/" target="_blank">
                            <svg width="22" height="22" viewBox="0 0 93 93" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6039 0.613029C19.6319 3.81003 3.76294 20.28 0.518944 40.142C-2.10506 56.206 5.41294 74.352 18.7489 84.141C23.4749 87.611 34.8559 92.535 38.1489 92.535C39.3629 92.535 39.6039 89.806 39.6039 76.035V59.535H34.6039H29.6039V53.035V46.535H34.6039H39.6039V39.247C39.6039 33.66 40.1289 30.931 41.8539 27.555C45.5269 20.367 48.1959 19.035 58.9239 19.035H68.1039L68.4039 24.785L68.7039 30.535H63.1079C55.2929 30.535 52.6039 33.211 52.6039 40.99V46.535H59.6709C65.9199 46.535 66.6829 46.738 66.2549 48.285C65.9899 49.248 65.4819 52.173 65.1269 54.785L64.4809 59.535H60.0429H55.6039V76.143V92.752L58.3539 92.109C68.2509 89.798 82.5829 78.385 87.3559 69.015C92.2819 59.345 93.9479 46.075 91.5439 35.65C86.2039 12.487 62.2449 -3.36997 38.6039 0.613029Z"
                                    fill="#ffa500" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/gna_apartments/" target="_blank">
                            <svg width="22" height="22" viewBox="0 0 96 96" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M36.0359 1.55252C10.6809 8.37152 -5.00607 34.6245 1.45493 59.4295C8.14493 85.1145 34.3589 100.959 59.3819 94.4405C84.9919 87.7695 100.909 61.5315 94.4319 36.6645C87.6809 10.7455 61.1569 -5.20348 36.0359 1.55252ZM67.2279 22.7165C72.6449 25.8805 74.6629 29.9955 75.4539 39.4885C76.4869 51.8855 75.2539 64.1855 72.5819 68.1505C68.2619 74.5615 65.2499 75.4535 47.9239 75.4535C30.6229 75.4535 27.5829 74.5575 23.2979 68.1985C19.1799 62.0885 18.9679 34.7165 22.9879 28.1075C27.0739 21.3875 32.7069 19.8915 51.7309 20.4765C61.4399 20.7745 64.7119 21.2475 67.2279 22.7165ZM33.9399 25.9395C28.2389 27.3715 26.3309 30.5365 25.5549 39.8485C25.1819 44.3155 25.1859 51.6795 25.5639 56.2125C26.1519 63.2525 26.6309 64.8325 28.8569 67.0585C31.1799 69.3815 32.4889 69.7295 40.9429 70.2765C46.1579 70.6135 53.7449 70.5475 57.8039 70.1295C64.0509 69.4865 65.5359 68.9605 67.4779 66.7035C70.3469 63.3675 71.3429 56.1135 70.7159 43.1045C69.9459 27.1125 68.2349 25.6405 50.0169 25.2995C43.0909 25.1695 35.8559 25.4575 33.9399 25.9395ZM64.7239 31.1715C66.4749 32.9225 66.1939 34.7565 63.9929 35.9345C61.2489 37.4035 58.4919 34.6465 59.9609 31.9025C61.1389 29.7015 62.9729 29.4205 64.7239 31.1715ZM57.7699 38.3505C61.1589 41.7395 61.4239 42.4375 61.4239 47.9715C61.4239 53.5375 61.1709 54.1905 57.6569 57.7045C54.1429 61.2185 53.4899 61.4715 47.9239 61.4715C42.3579 61.4715 41.7049 61.2185 38.1909 57.7045C34.6839 54.1975 34.4239 53.5305 34.4239 48.0205C34.4239 42.8165 34.7859 41.7205 37.4239 38.9335C41.4029 34.7295 43.4879 33.9215 49.2699 34.3425C53.2689 34.6345 54.7539 35.3345 57.7699 38.3505ZM41.8469 41.8945C39.8519 43.8895 38.9239 45.8195 38.9239 47.9715C38.9239 52.2735 43.6219 56.9715 47.9239 56.9715C52.2259 56.9715 56.9239 52.2735 56.9239 47.9715C56.9239 45.8195 55.9959 43.8895 54.0009 41.8945C50.0709 37.9645 45.7769 37.9645 41.8469 41.8945Z"
                                    sv fill="#ffa500" />
                            </svg>
                        </a>
                    </div>

                    <div class="font-medium mt-4 text-xs md:text-sm tracking-widest uppercase text-wrap w-[170px]">
                        call us now
                        <div class="mt-3 text-font">
                            <p>070/345-177 Vane</p>
                            <p>070/300-639 Nikola</p>
                        </div>
                    </div>
                </div>

                <div class="text-center md:text-left">
                    <div class="font-medium text-xs md:text-sm tracking-widest uppercase">
                        send us a message
                        <div class="mt-3 tracking-normal lowercase text-[17px] text-font">
                            <p>apartmentsgna@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gna text-font pt-10 pb-2 text-xs flex justify-center">
        <p>&copy; 2024 Apartments GNA. All Rights Reserved</p>
    </div>
