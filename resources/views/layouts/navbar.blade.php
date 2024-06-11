<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amine Bakrim</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/js/app.js']) @vite('resources/css/app.css')
</head>

<body>
    <nav class="w-full py-[4vh]">
        <div class="flex items-center">
            <span class="flex justify-around items-center w-[80%]">
                <img src={{ asset('images/logo.png') }} alt="" class="w-[5vw] ">
                <a class="text-white font-thin cursor-pointer transition-all duration-300 ease-in transform hover:text-blue-300 hover:border-b-2 hover:border-b-[#535cea] hover:scale-105 hover:shadow-lg" href="/">Home</a>
                <a class="text-white font-thin cursor-pointer transition-all duration-300 ease-in transform hover:text-blue-300 hover:border-b-2 hover:border-b-[#535cea] hover:scale-105 hover:shadow-lg" href="/projets">Projects</a>
                <a class="text-white font-thin cursor-pointer transition-all duration-300 ease-in transform hover:text-blue-300 hover:border-b-2 hover:border-b-[#535cea] hover:scale-105 hover:shadow-lg" href="/contact">Contact</a>
            </span>

            <span class="flex justify-end px-6 w-[20%]">
                <div class="group grid grid-cols-3 gap-0 hover:gap-2 duration-700 relative shadow-sm">
                    <h1
                        class="absolute z-10 group-hover:hidden duration-200 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-8 h-8 text-white rounded-xl">
                            <path d="M5 7h14M5 12h14M5 17h14" stroke-width="2" stroke-linecap="round"
                                stroke="currentColor"></path>
                        </svg>
                    </h1>

                    <!-- Inst icons -->
                    <a href="https://www.instagram.com/amine.bkm0/" target="_blank">
                        <svg class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-transparent hover:bg-[#cc39a4] backdrop-blur-md group-hover:shadow-xl rounded-tl-lg flex justify-center items-center w-full h-full text-[#cc39a4] hover:text-white duration-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path class="opacity-0 group-hover:opacity-100 duration-200" fill="currentColor"
                                fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <!-- Twitter icon -->
                    <a href="#">
                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-transparent hover:bg-blue-500 backdrop-blur-md group-hover:shadow-xl flex justify-center items-center w-full h-full text-blue-500 hover:text-white duration-200">
                            <path clip-rule="evenodd"
                                d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                fill-rule="evenodd" class="opacity-0 group-hover:opacity-100 duration-200"></path>
                        </svg>
                    </a>

                    <!-- Other icons... -->
                    <!-- Continue this structure for the remaining icons, adding comments and ensuring consistency -->

                    <!-- Example for another icon -->
                    <a href="https://github.com/FireGamerXD" target="_blank">
                        <svg class="group-hover:rounded-lg group-hover:opacity-1 p-3 bg-transparent hover:bg-gray-00 backdrop-blur-md group-hover:shadow-xl rounded-tl-lg flex justify-center items-center w-full h-full text-white hover:text-gray-900 hover:bg-gray-200 duration-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.867 8.166 6.839 9.489.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.604-3.369-1.342-3.369-1.342-.454-1.154-1.11-1.461-1.11-1.461-.908-.62.069-.608.069-.608 1.004.07 1.533 1.032 1.533 1.032.893 1.531 2.341 1.089 2.91.833.091-.648.35-1.09.636-1.34-2.22-.253-4.555-1.11-4.555-4.944 0-1.092.39-1.986 1.029-2.683-.103-.253-.446-1.27.098-2.645 0 0 .84-.269 2.75 1.024A9.564 9.564 0 0 1 12 6.801c.85.004 1.705.115 2.504.338 1.91-1.293 2.748-1.024 2.748-1.024.546 1.375.202 2.392.099 2.645.64.698 1.028 1.592 1.028 2.683 0 3.842-2.339 4.688-4.566 4.936.359.31.678.921.678 1.857 0 1.34-.012 2.422-.012 2.75 0 .269.18.58.688.482A10.013 10.013 0 0 0 22 12c0-5.523-4.477-10-10-10Z"
                                fill="currentColor" class="opacity-0 group-hover:opacity-100 duration-200"></path>
                        </svg>

                    </a>
                    <!-- Continue for the remaining icons -->
                </div>

            </span>
        </div>
    </nav>
</body>

</html>
