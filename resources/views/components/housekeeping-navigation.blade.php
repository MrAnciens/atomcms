<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open"
     :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }"
     class="fixed w-0 md:w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-gray-800 shadow-sm">
    <div class="h-full overflow-y-auto scrollbars">
        <!--logo-->
        <div class="mh-18 flex justify-center items-center py-5">
            <a href="#" class="relative">
                <img src="{{ setting('cms_logo') }}" alt="">
            </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{selected:1}"
            class="w-full float-none flex flex-col font-medium ps-1.5">
            <li>
                <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="calendar.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- dropdown -->
            <li class="relative">
                <a @click="selected !== 1 ? selected = 1 : selected = null"
                   class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    <!-- <i class="me-2 fas fa-home"></i> -->
                    <span>Website</span>
                    <!-- caret -->
                    <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     class="transform transition duration-300 mt-1.5 bi bi-chevron-down"
                     :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"
                     width=".8rem"
                     height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected === 1" x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
                    <li class="relative">
                        <a class="text-indigo-500 dark:text-gray-300 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index.html">Settings</a>
                    </li>
                    <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index-analytics.html">Permissions</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <a @click="selected !== 2 ? selected = 2 : selected = null"
                   class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    <!-- <i class="me-2 fas fa-home"></i> -->
                    <span>Emulator</span>
                    <!-- caret -->
                    <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     class="transform transition duration-300 mt-1.5 bi bi-chevron-down"
                     :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"
                     width=".8rem"
                     height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
                    <li class="relative">
                        <a class="text-indigo-500 dark:text-gray-300 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index.html">Settings</a>
                    </li>
                    <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index-analytics.html">Permissions</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <a @click="selected !== 3 ? selected = 3 : selected = null"
                   class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    <!-- <i class="me-2 fas fa-home"></i> -->
                    <span>Client</span>
                    <!-- caret -->
                    <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     class="transform transition duration-300 mt-1.5 bi bi-chevron-down"
                     :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }"
                     width=".8rem"
                     height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
                    <li class="relative">
                        <a class="text-indigo-500 dark:text-gray-300 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index.html">Settings</a>
                    </li>
                    <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300"
                           href="index-analytics.html">Permissions</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="calendar.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                        <path
                            d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                    <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
                    <span>Something else</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
