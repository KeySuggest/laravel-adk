<nav class="flex items-center justify-end flex-1 hidden w-full h-full space-x-10 md:flex">

    <div @mouseenter="dropdown = true" @mouseleave="dropdown=false" @click.away="dropdown=false" x-data="{ dropdown: false }" class="relative h-full select-none">
        <div :class="{ 'text-wave-600': dropdown, 'text-gray-500': !dropdown }" class="inline-flex items-center h-full space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out cursor-pointer select-none group hover:text-wave-600 focus:outline-none focus:text-wave-600">
            <span>Product</span>
            <svg class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-wave-600 group-focus:text-wave-600" x-bind:class="{ 'text-wave-600': dropdown, 'text-gray-400': !dropdown }" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </div>

        <div x-show="dropdown" x-transition:enter="duration-200 ease-out scale-95" x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-100 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute w-screen max-w-sm px-2 transform -translate-x-1/2 left-1/2 sm:px-0" x-cloak>
            <div class="shadow-lg rounded-xl">
                <div class="overflow-hidden border border-gray-100 shadow-md rounded-xl">
                    <div class="relative z-20 grid bg-white">
                        <a href="https://keysuggest.io/login" class="flex items-start p-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg pb-7 group">
                            <svg class="flex-shrink-0 w-6 h-6 mt-1 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.36,6.481C8.203,4.852,7.838,2.485,7.189,0.88C6.423,1.242,5.75,1.748,5.16,2.361C6.753,3.708,7.822,5.457,8.36,6.481z"></path>
                                <path d="M14.84,2.361c-0.589-0.613-1.263-1.119-2.029-1.481c-0.649,1.606-1.014,3.972-1.171,5.602C12.178,5.457,13.247,3.708,14.84,2.361z"></path>
                                <path d="M16.573,4.847c-2.402,1.185-3.636,2.637-3.657,2.662c-0.035,0.041-0.084,0.063-0.135,0.063c-0.039,0-0.078-0.013-0.111-0.039c-0.074-0.061-0.085-0.17-0.024-0.244c0.021-0.026,1.293-1.526,3.763-2.747c-0.384-0.699-0.827-1.347-1.332-1.919c-2.315,1.951-3.509,4.798-3.527,4.841c-0.006,0.016-0.021,0.025-0.031,0.038c-0.008,0.01-0.013,0.02-0.023,0.028c-0.031,0.025-0.067,0.042-0.107,0.042c-0.003,0-0.007,0-0.01,0c-0.003,0-0.004-0.003-0.007-0.003c-0.016-0.002-0.032-0.003-0.048-0.01c-0.013-0.005-0.017-0.02-0.028-0.028c-0.019-0.014-0.034-0.026-0.046-0.046c-0.012-0.019-0.017-0.037-0.021-0.059c-0.003-0.014-0.014-0.024-0.014-0.039c0.014-0.241,0.266-4.186,1.276-6.647C11.748,0.438,10.924,0.262,10,0.262c-0.924,0-1.748,0.176-2.493,0.478c1.01,2.462,1.261,6.407,1.276,6.647c0.001,0.015-0.011,0.025-0.014,0.039c-0.004,0.022-0.008,0.04-0.021,0.059c-0.013,0.02-0.027,0.032-0.046,0.046C8.691,7.539,8.687,7.553,8.674,7.559c-0.016,0.006-0.032,0.008-0.048,0.01c-0.003,0-0.004,0.003-0.007,0.003c-0.003,0-0.007,0-0.01,0c-0.04,0-0.076-0.017-0.107-0.042c-0.01-0.008-0.015-0.018-0.023-0.028c-0.01-0.013-0.024-0.022-0.031-0.038C8.43,7.42,7.236,4.573,4.921,2.622C4.416,3.194,3.974,3.841,3.589,4.541c2.47,1.221,3.742,2.721,3.763,2.747c0.061,0.074,0.05,0.183-0.024,0.244C7.296,7.559,7.256,7.572,7.218,7.572c-0.05,0-0.1-0.022-0.135-0.063c-0.02-0.025-1.255-1.477-3.657-2.662C0.961,9.619,0.958,16.405,0.958,16.405c0,0.688,0.578,1.246,1.292,1.246h2.882l1.728,1.458l1.256-0.628L10,19.738l1.885-1.256l1.256,0.628l1.728-1.458h2.882c0.713,0,1.292-0.558,1.292-1.246C19.042,16.405,19.039,9.619,16.573,4.847z M11.481,8.968h1.211c0.056,0.1,0.09,0.214,0.09,0.336c0,0.384-0.311,0.696-0.696,0.696s-0.696-0.311-0.696-0.696C11.391,9.182,11.426,9.068,11.481,8.968z M10,10.696c0.988,0,1.789,0.467,1.789,1.043c0,0.066-0.013,0.131-0.033,0.193c-0.084-0.026-0.172-0.044-0.265-0.044c-0.472,0-0.854,0.366-0.888,0.829c-0.189,0.04-0.39,0.065-0.603,0.065s-0.414-0.025-0.603-0.065c-0.034-0.463-0.416-0.829-0.888-0.829c-0.093,0-0.18,0.018-0.265,0.044c-0.02-0.063-0.033-0.127-0.033-0.193C8.211,11.163,9.012,10.696,10,10.696z M7.308,8.968h1.211c0.056,0.1,0.09,0.214,0.09,0.336C8.609,9.689,8.297,10,7.913,10c-0.384,0-0.696-0.311-0.696-0.696C7.218,9.182,7.252,9.068,7.308,8.968z M4.783,14.521c0,0.192-0.156,0.348-0.348,0.348s-0.348-0.156-0.348-0.348c0-1.44,1.418-2.648,3.494-3.182c-0.04,0.128-0.066,0.26-0.066,0.4c0,0.109,0.025,0.22,0.055,0.333C5.928,12.547,4.783,13.477,4.783,14.521z M12.772,15.754c-0.026,0.103-0.118,0.171-0.219,0.17H8.207H8.005c-0.438-0.002-0.792-0.382-0.79-0.825c0.002-0.443,0.359-0.8,0.797-0.798c0.066,0,0.134,0.01,0.195,0.026l4.346,1.136l0.057,0.015C12.731,15.508,12.803,15.632,12.772,15.754z M15.565,14.869c-0.192,0-0.348-0.156-0.348-0.348c0-1.044-1.145-1.975-2.787-2.449c0.03-0.113,0.055-0.224,0.055-0.333c0-0.139-0.026-0.272-0.066-0.4c2.076,0.534,3.494,1.742,3.494,3.182C15.912,14.713,15.757,14.869,15.565,14.869z"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Domain/URL Extractor
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    Extract keywords form Domain or URLs.
                                </p>
                            </div>
                        </a>
                        <a href="https://keysuggest.io/login" class="flex items-start px-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg py-7 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.177,17.658c0,0,3.445,1.987,4.823,1.987c2.067,0,4.823-1.987,4.823-1.987c0.024-0.025,0.044-0.054,0.068-0.08H5.109C5.133,17.604,5.153,17.633,5.177,17.658z M8.622,1.583V0.531C6.496,0.973,2.539,2.521,1.376,7.933H0.699c-0.189,0-0.344,0.155-0.344,0.344v1.378C0.354,9.845,0.509,10,0.699,10h0.392c-0.016,0.224-0.026,0.454-0.033,0.689H0.699c-0.189,0-0.344,0.155-0.344,0.344v1.378c0,0.189,0.155,0.344,0.344,0.344h0.439c0.089,0.79,0.262,1.804,0.594,2.849v2.663H4.34c-2.233-2.449-2.264-6.822-2.264-7.01C2.077,4.052,6.353,2.108,8.622,1.583zM10.689,0.354H9.311v2.059h1.378V0.354z M11.378,2.63v0.472H8.622V2.63C6.612,3.147,3.11,4.951,3.11,11.258c0,0,0.004,3.373,1.47,5.632h4.042v-0.689h2.756v0.689h4.042c1.466-2.259,1.47-5.632,1.47-5.632C16.89,4.951,13.388,3.147,11.378,2.63z M5.005,12.035c-0.318-0.364-0.517-0.833-0.517-1.354S4.687,9.69,5.005,9.327V12.035zM6.383,10.026c-0.295,0.078-0.517,0.335-0.517,0.654c0,0.319,0.222,0.576,0.517,0.654v1.395c-0.384-0.032-0.738-0.163-1.033-0.377V9.008c0.296-0.214,0.649-0.345,1.033-0.377V10.026z M7.761,12.353c-0.296,0.214-0.649,0.345-1.033,0.377v-1.395C7.022,11.257,7.244,11,7.244,10.681c0-0.319-0.222-0.576-0.517-0.654V8.631c0.384,0.032,0.738,0.163,1.033,0.377V12.353zM8.105,12.035V9.327c0.318,0.363,0.517,0.833,0.517,1.354S8.423,11.671,8.105,12.035z M10,13.445l-1.378,0.689L10,12.756l1.378,1.378L10,13.445z M11.895,12.035c-0.318-0.364-0.517-0.833-0.517-1.354s0.199-0.991,0.517-1.354V12.035z M13.273,10.026c-0.295,0.078-0.517,0.335-0.517,0.654c0,0.319,0.222,0.576,0.517,0.654v1.395c-0.384-0.032-0.738-0.163-1.033-0.377V9.008c0.296-0.214,0.649-0.345,1.033-0.377V10.026z M14.651,12.353c-0.296,0.214-0.649,0.345-1.033,0.377v-1.395c0.295-0.078,0.517-0.335,0.517-0.654c0-0.319-0.222-0.576-0.517-0.654V8.631c0.384,0.032,0.738,0.163,1.033,0.377V12.353zM14.995,12.035V9.327c0.318,0.363,0.517,0.833,0.517,1.354S15.313,11.671,14.995,12.035z M19.646,9.656V8.278c0-0.189-0.155-0.344-0.344-0.344h-0.678c-1.163-5.413-5.12-6.96-7.246-7.402v1.052c2.269,0.525,6.545,2.469,6.545,9.675c0,0.188-0.031,4.561-2.264,7.01h2.608v-2.663c0.333-1.044,0.505-2.058,0.594-2.849h0.439c0.189,0,0.344-0.155,0.344-0.344v-1.378c0-0.189-0.155-0.344-0.344-0.344h-0.359c-0.007-0.235-0.017-0.465-0.033-0.689h0.392C19.491,10,19.646,9.845,19.646,9.656z"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Multi-Keyword Search
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    Search multiple keywords at ones.
                                </p>
                            </div>
                        </a>
                        <a href="https://keysuggest.io/login" class="flex items-start px-10 pb-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg pt-7 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.645,7.262c-0.238-0.419-0.547-0.681-0.889-0.681C15.971,3.462,13.43,0.5,11.192,0.5C10.79,0.5,10.39,0.598,10,0.772C9.61,0.598,9.21,0.5,8.808,0.5c-2.238,0-4.779,2.962-5.564,6.08c-0.342,0-0.651,0.262-0.889,0.681C1.302,7.294,0.542,8.415,0.542,9.958c0,1.566,0.781,2.702,1.858,2.702c0.212,0,0.409-0.056,0.594-0.139c0.478,1.431,1.355,1.868,1.939,1.997v2.195c0,0.187,0.151,0.338,0.338,0.338c0.187,0,0.338-0.151,0.338-0.338v-0.778c0.488,0.874,1.471,1.566,2.702,1.903v0.564c0,0.187,0.151,0.338,0.338,0.338s0.338-0.151,0.338-0.338v-0.418c0.22,0.034,0.446,0.056,0.676,0.068v1.026c0,0.187,0.151,0.338,0.338,0.338s0.338-0.151,0.338-0.338v-1.026c0.23-0.012,0.456-0.033,0.676-0.068v0.418c0,0.187,0.151,0.338,0.338,0.338s0.338-0.151,0.338-0.338V17.84c1.232-0.337,2.215-1.029,2.702-1.903v0.778c0,0.187,0.151,0.338,0.338,0.338s0.338-0.151,0.338-0.338v-2.195c0.587-0.131,1.462-0.569,1.939-1.997c0.186,0.083,0.382,0.139,0.594,0.139c1.077,0,1.858-1.137,1.858-2.702C19.458,8.415,18.698,7.294,17.645,7.262z M2.4,11.647c-0.466,0-0.844-0.756-0.844-1.689c0-0.558,0.137-1.049,0.346-1.357c0.487,0.122,1.083,0.582,1.276,2.018C3.048,11.224,2.749,11.647,2.4,11.647z M12.094,7.98c0.171-0.171,0.737,0.119,1.264,0.647c0.528,0.528,0.817,1.094,0.647,1.264c-0.171,0.171-0.737-0.119-1.264-0.647C12.213,8.717,11.923,8.151,12.094,7.98z M6.66,8.627C7.188,8.099,7.754,7.81,7.924,7.98c0.171,0.171-0.119,0.737-0.647,1.264C6.75,9.772,6.184,10.062,6.013,9.891C5.843,9.721,6.132,9.155,6.66,8.627z M14.701,13.216c-0.04,0.005-0.08,0.008-0.12,0.008c-0.76,0-1.409-0.939-1.484-1.051c-1.236-1.855-3.078-1.876-3.097-1.876c-0.075,0.001-1.869,0.034-3.097,1.876c-0.079,0.118-0.798,1.144-1.604,1.043c-0.451-0.061-0.796-0.439-1.025-1.124l0.641-0.214c0.134,0.402,0.306,0.645,0.472,0.668c0.286,0.041,0.735-0.424,0.953-0.749C7.776,9.646,9.91,9.621,10,9.621s2.224,0.025,3.659,2.177c0.218,0.325,0.683,0.789,0.953,0.748c0.166-0.022,0.338-0.266,0.472-0.668l0.641,0.214C15.497,12.777,15.152,13.155,14.701,13.216z M17.6,11.647c-0.349,0-0.649-0.424-0.777-1.028c0.193-1.435,0.789-1.895,1.276-2.018c0.209,0.308,0.346,0.798,0.346,1.357C18.445,10.891,18.067,11.647,17.6,11.647z"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Keyword Gap
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    Know the difference between you and your competitors.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="https://keysuggest.io/pricing" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-wave-600 focus:outline-none focus:text-wave-600">
        Pricing
    </a>
    <a href="https://keysuggest.io/blog" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-wave-600 focus:outline-none focus:text-wave-600">
        Blog
    </a>

    <div @mouseenter="dropdown = true" @mouseleave="dropdown=false" @click.away="dropdown=false" x-data="{ dropdown: false }" class="relative h-full select-none">
        <div @click="dropdown = !dropdown" :class="{ 'text-wave-600': dropdown, 'text-gray-500': !dropdown }" class="inline-flex items-center h-full space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out cursor-pointer select-none hover:text-wave-600 focus:outline-none focus:text-wave-500">
            <span>More</span>
            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </div>

        <div x-show="dropdown" x-transition:enter="duration-200 ease-out scale-95" x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-100 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute w-screen max-w-sm px-2 transform -translate-x-1/2 left-1/2 sm:px-0" x-cloak>
            <div class="shadow-lg rounded-xl">
                <div class="overflow-hidden border border-gray-100 shadow-md rounded-xl">
                    <div class="relative z-20 grid bg-white">
                        <a href="https://keysuggest.document360.io/" class="flex items-start p-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg pb-7 group">
                            <svg class="flex-shrink-0 w-4 h-4 mt-1 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.04 2c1.91 0 3.46.9 3.46 2.55V15c-.45 0-.9-.3-1.17-.53-.86-.71-2.52-.75-4.31-.75H.83a.82.82 0 0 1-.59-.25.86.86 0 0 1-.24-.6V2.85C0 2.38.37 2 .83 2h3.2zm11.13 0c.22 0 .43.1.59.25.15.16.24.38.24.6v10.02c0 .23-.09.44-.24.6a.82.82 0 0 1-.6.25h-1.18c-1.8 0-3.45.04-4.3.75-.28.23-.73.53-1.18.53V4.55C8.5 2.91 10.05 2 11.96 2h3.2z" fill-rule="evenodd"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Help Center
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    Learn how to use KeySuggest.
                                </p>
                            </div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCklt0ucZ00Iax63lbo0l0cQ" target="_blank" class="flex items-start px-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg py-7 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Videos
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    A series of videos to help you get started.
                                </p>
                            </div>
                        </a>
                        <a href="https://keysuggest.io/blog" class="flex items-start px-10 pb-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg pt-7 group">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 duration-200 group-hover:text-gray-800 transition-color ease" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            <div class="space-y-1">
                                <p class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    Blog
                                </p>
                                <p class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                    Read the latest news from the team.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-1 h-5 mx-10 border-r border-gray-300"></div>
    <span class="inline-flex rounded-md shadow-sm">
        <a href="https://keysuggest.io" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-wave active:bg-wave-700">
            Home
        </a>
    </span>
</nav>