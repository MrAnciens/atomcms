<nav :class="{ 'start-64 -end-64 md:start-0 md:end-0': open, 'start-0 end-0 md:start-64': !(open) }"
     class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 start-0 md:start-64 end-0 px-6 bg-white dark:bg-gray-800 shadow-sm transition-all duration-500 ease-in-out"
     id="desktop-menu">
    <!-- sidenav button-->
    <button id="navbartoggle" type="button"
            class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-none focus:ring-0"
            aria-controls="sidebar-menu" @click="open = !open" aria-expanded="false"
            x-bind:aria-expanded="open.toString()">
        <span class="sr-only">Mobile menu</span>
        <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8"
             :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 16 16">
            <path class="hidden md:block" fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="md:hidden"
                  d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>

        <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8"
             :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 16 16">
            <path class="md:hidden" fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="hidden md:block"
                  d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <!-- <i class="text-2xl fas fa-bars"></i> -->
    </button>

    <!-- Search -->
    <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
        <div class="flex flex-wrap items-stretch w-full relative">
            <input type="text"
                   class="flex-shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                   placeholder="Search…" aria-label="Search">
            <div class="flex -mr-px">
                <button
                    class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <!-- <i class="fas fa-search"></i> -->
                </button>
            </div>
        </div>
    </form>

    <!-- menu -->
    <ul class="flex ltr:ml-auto rtl:mr-auto mt-2">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
            </svg>

            <div
                class="relative inline-block w-8 py-3 mt-0.5 align-middle select-none transition duration-200 ease-in ml-2 mr-2">
                <input type="checkbox" name="lightdark" id="lightdark"
                       class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                <label for="lightdark"
                       class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
            </svg>
        </div>

        <!-- profile -->
        <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button"
               @click="open = ! open">
                <div class="relative">
                    <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700"
                         src="{{ setting('avatar_imager') }}{{ Auth::user()->look }}&headonly=1&head_direction=4&gesture=sml"
                         alt="avatar">
                    <span title="online"
                          class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                </div>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition-all duration-200 ease-in"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md"
                style="min-width:12rem;display: none;">
                <li class="relative">
                    <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                        <div class="flex-shrink max-w-full px-4 w-1/3">
                            <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full" alt="Ari Budin">
                        </div>
                        <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                            <div class="font-bold"><a href="#"
                                                      class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari
                                    Budin</a></div>
                            <div class="text-gray text-sm mt-1">Professional Front end developer.</div>
                        </div>
                    </div>
                </li>
                <li class="relative">
                    <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                </li>
                <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                        </svg>
                        <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                    </a>
                </li>
                <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                        <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                    </a>
                </li>
                <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-translate" viewBox="0 0 16 16">
                            <path
                                d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                            <path
                                d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                        </svg>
                        <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                    </a>
                </li>
                <li class="relative">
                    <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                </li>
                <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd"
                                  d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                        <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
