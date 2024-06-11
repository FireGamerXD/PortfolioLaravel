<footer class=" py-[20vh]">
    <div class="w-full flex justify-center">
        <img src={{ asset('images/logo.png') }} alt="" class="xl:w-[8vw] w-[40vw]">
    </div>
    <div class="flex justify-center">
        {{-- <button
            class="flex items-center bg-primary-color text-white gap-1 px-4 py-2 cursor-pointer  font-semibold tracking-widest rounded-md hover:border-white hover:border hover:bg-transparent duration-300 hover:gap-2 hover:translate-x-2">
            Connect
            <svg class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                    stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
        </button> --}}
    </div>

    <div class="w-full flex justify-center">
        <div class="text-white flex w-[40%] justify-around py-16">

            <div class="group relative inline-block">
                <button class="focus:outline-none">
                    <svg viewBox="0 0 24 24"
                        class="transform transition-transform duration-300 hover:scale-125 hover:text-blue-500"
                        fill="currentColor" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                    </svg>
                </button>
                <span
                    class="absolute -top-14 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-sm font-bold text-white bg-gray-900 rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">amineg715@gmail.com</span>
                
            </div>

            <div class="group relative inline-block">
                <button class="focus:outline-none">
                    <svg viewBox="0 0 24 24"
                        class="bi bi-github transform transition-transform duration-300 hover:scale-125 hover:text-blue-500"
                        fill="currentColor" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.205 11.385.6.11.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.613-4.042-1.613-.546-1.385-1.333-1.754-1.333-1.754-1.09-.744.083-.729.083-.729 1.205.085 1.84 1.238 1.84 1.238 1.07 1.836 2.81 1.305 3.495.997.108-.776.418-1.305.76-1.605-2.665-.295-5.467-1.332-5.467-5.93 0-1.31.465-2.38 1.235-3.223-.135-.298-.54-1.524.105-3.176 0 0 1.005-.322 3.3 1.23a11.493 11.493 0 0 1 6 0c2.295-1.552 3.3-1.23 3.3-1.23.645 1.652.24 2.878.12 3.176.77.843 1.23 1.913 1.23 3.223 0 4.61-2.81 5.628-5.48 5.917.43.371.815 1.097.815 2.215 0 1.6-.015 2.885-.015 3.277 0 .32.21.695.825.576C20.566 21.798 24 17.302 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                </button>
                <span
                    class="absolute -top-14 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-sm font-bold text-white bg-gray-900 rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">FireGamerXD</span>
            </div>

            <div class="group relative inline-block">
                <button class="focus:outline-none">
                    <svg viewBox="0 0 16 16"
                        class="bi bi-instagram transform transition-transform duration-300 hover:scale-125 hover:text-blue-500"
                        fill="currentColor" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                        </path>
                    </svg>
                </button>
                <span
                    class="absolute -top-14 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 text-sm font-bold text-white bg-gray-900 rounded-lg shadow-lg transition-transform duration-300 ease-in-out scale-0 group-hover:scale-100">amine.bkm0</span>
            </div>

        </div>
    </div>


</footer>
