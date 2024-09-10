<div class="bg-shadowed pt-6 pb-[85px]">

    <div class="w-[80%] mx-auto h-auto md:h-[75vh] flex flex-col-reverse md:flex-row justify-evenly items-center">

        <div id="intro-text" class="text-left">
            <div class="flex flex-col">
                <div class="flex space-x-1" id="first-paragraph">
                    <svg width="28" height="28" viewBox="0 0 88 96" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M49 4.715C39.375 7.425 29.025 10.397 26 11.321L20.5 13L20.212 22.25L19.925 31.5H29.943C39.503 31.5 39.987 31.603 40.512 33.75C40.814 34.987 40.935 47.925 40.781 62.5L40.5 89L37.75 89.316L35 89.633V63.535V37.437L23.25 37.718L11.5 38L11.233 63.75L10.966 89.5H5.483C0.0569997 89.5 0 89.531 0 92.5V95.5H44H88V92.5C88 89.833 87.667 89.5 85 89.5H82V54.943V20.385L77.75 20.693L73.5 21L73.237 55.25L72.974 89.5H70.487H68V45.059C68 20.616 67.662 0.431001 67.25 0.203001C66.838 -0.0259991 58.625 2.005 49 4.715ZM51.406 26.886C51.113 27.648 51.015 30.235 51.187 32.636C51.467 36.541 51.763 37 54 37C56.342 37 56.519 36.637 56.8 31.25C57.092 25.658 57.029 25.5 54.519 25.5C53.099 25.5 51.698 26.124 51.406 26.886ZM20 52C20 57.444 20.03 57.5 23 57.5C25.97 57.5 26 57.444 26 52C26 46.556 25.97 46.5 23 46.5C20.03 46.5 20 46.556 20 52ZM51 52C51 57.444 51.03 57.5 54 57.5C56.97 57.5 57 57.444 57 52C57 46.556 56.97 46.5 54 46.5C51.03 46.5 51 46.556 51 52ZM20 73C20 78.444 20.03 78.5 23 78.5C25.97 78.5 26 78.444 26 73C26 67.556 25.97 67.5 23 67.5C20.03 67.5 20 67.556 20 73ZM51 73C51 78.444 51.03 78.5 54 78.5C56.97 78.5 57 78.444 57 73C57 67.556 56.97 67.5 54 67.5C51.03 67.5 51 67.556 51 73Z"
                            fill="#ffa500" />
                    </svg>
                    <h2 class="font-bold text-gna text-xs md:text-sm tracking-widest uppercase self-end">GNA Apartments
                    </h2>
                </div>

                <h1 class="font-bold text-gna text-[40px] md:text-[60px] leading-none tracking-wide uppercase"
                    id="first-paragraph">
                    Building
                    <br> <span class="text-[60px] md:text-[95px]">YOUR</span> <br> Future Home
                </h1>

                <div class="border-l border-white p-2 mt-4 text-wrap w-full md:w-1/2 mx-auto md:mx-0"
                    id="second-paragraph">
                    <p class="text-sm text-gna font-semibold">Find happiness in your new apartment!
                        Contact us today to learn more about available housing and begin your journey to urban living.
                    </p>
                </div>

            </div>

            <div class="flex space-x-4">
                <div class="mt-8" id="second-paragraph">
                    <a href="/contact"
                        class="bg-accent py-4 px-8 rounded-lg font-semibold text-sm text-gna uppercase">Contact</a>
                </div>

                <div class="mt-8" id="second-paragraph">
                    <a href="{{ asset('assets/catalog-twins.pdf') }}" target="_blank"
                        class="bg-gna/20 py-4 px-8 rounded-lg font-semibold text-sm text-gna uppercase">Catalog</a>
                </div>
            </div>

        </div>

        <div id="image-container" class="mb-4 md:mb-0">
            <img class="rounded-lg w-full md:w-auto shadow-hover md:shadow-3xl" draggable="false"
                src="{{ Vite::asset('resources/images/intro.png') }}">
        </div>

    </div>

</div>
