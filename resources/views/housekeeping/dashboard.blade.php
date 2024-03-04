<x-housekeeping-layout>
    @push('title', 'Dashboard')

    <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
        <x-housekeeping-navigation />

        <div x-bind:aria-expanded="open" :class="{ 'ms-64 -me-64 md:ms-0 md:mr-0': open, 'ms-0 me-0 md:ms-64': !(open) }" class="flex flex-col me-0 md:ms-64 min-h-screen transition-all duration-500 ease-in-out">
            <!-- Navbar -->
            <x-housekeeping-mobile-navigation />
            <!-- End Navbar -->

            <main class="pt-20 -mt-2">
                <div class="mx-auto py-2 sm:px-2">
                    <div class="flex flex-wrap flex-row py-3">
                        <div class="flex-shrink max-w-full w-full order-2 md:order-1 xl:w-2/3">
                            <div class="px-4">
                                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                    <div class="flex flex-wrap flex-row items-center">
                                        <div class="flex-shrink max-w-full">
                                            <h2 class="text-center text-2xl font-bold">
                                                {{ __('Welcome to the :hotel housekeeping', ['hotel' => setting('hotel_name')]) }} 🚀
                                            </h2>

                                            <div>
                                                <p class="mt-4">
                                                    {{ __('The :hotel housekeeping is a place giving you access various aspects of the hotel, that would otherwise be limited.', ['hotel' => setting('hotel_name')]) }}
                                                    {{ __('It is designed to ease the process of moderating and managing the hotel when needed.') }}
                                                </p>

                                                <p class="mt-4">
                                                    <strong>{{ __('However, it is essential to remember that with great power comes great responsibility.') }}</strong><br/>
                                                    {{ __('The housekeeping is not to be abused, and we take the utmost precautions to ensure the safety and privacy of our users. To maintain a secure environment, we will be logging every action performed within the housekeeping. Therefore, we kindly warn you that any misuse of the housekeeping, including abusing its features or sharing any confidential information obtained through it with unauthorized individuals, will result in potential suspension and loss of access.') }}
                                                </p>

                                                <p class="mt-4">
                                                    {{ __('We trust that you will use this tool wisely and responsibly, carrying out your duties with professionalism and dedication. The housekeeping provides a way for you to manage various aspects of the hotel, that would otherwise be limited. Should you encounter any issues or have questions, our support team is available around the clock to assist you.') }}
                                                </p>

                                                <p class="mt-4">
                                                    {{ __('By utilizing the housekeeping feature, you contribute significantly to upholding our hotel\'s reputation for excellence and creating a pleasant stay for our valued guests. Your dedication to maintaining the highest standards of service is greatly appreciated.') }}
                                                </p>

                                                <p class="mt-4">
                                                    {{ __('Thank you for being a part of our :hotel staff team. Together, we strive to make every guest\'s experience extraordinary, ensuring they leave with cherished memories and a desire to return.', ['hotel' => setting('hotel_name')]) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-shrink max-w-full px-4 w-full order-1 md:order-2 xl:w-1/3 mb-6">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                                <h2 class="text-2xl font-semibold">New users</h2>

                                <div class="hidden-header hidden-sort-after -mt-3">
                                    <!-- table posts -->
                                    <table class="table-sorter table-bordered-bottom w-full text-sm ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <tbody>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">How to get started
                                                    with Tailwind Css ?</a></td>
                                            <td>934</td>
                                            <td>136</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Best Html admin
                                                    template for Tailwind</a></td>
                                            <td>789</td>
                                            <td>132</td>
                                            <td>98</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Introducing
                                                    Tailwind UI/UX Ecommerce</a></td>
                                            <td>629</td>
                                            <td>92</td>
                                            <td>87</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">The Next
                                                    Generation of Tailwind CSS</a></td>
                                            <td>609</td>
                                            <td>82</td>
                                            <td>83</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">W3C TPAC 2021
                                                    Exhibition Space opens for registration</a></td>
                                            <td>600</td>
                                            <td>90</td>
                                            <td>72</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Minecraft Wild
                                                    Update's Deep Cities Turn It Into A Horror Game</a></td>
                                            <td>529</td>
                                            <td>72</td>
                                            <td>81</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">How Long Is A Day
                                                    On Mars</a></td>
                                            <td>509</td>
                                            <td>62</td>
                                            <td>77</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Why The Moon
                                                    Sequel Isn't Happening</a></td>
                                            <td>500</td>
                                            <td>52</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">How Far Away Is It
                                                    From The Sun?</a></td>
                                            <td>489</td>
                                            <td>62</td>
                                            <td>66</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars is a cold
                                                    planet filled with rocks & sand</a></td>
                                            <td>489</td>
                                            <td>62</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Why Mars Has
                                                    Longer Days Than Earth?</a></td>
                                            <td>329</td>
                                            <td>42</td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars Dunes Look
                                                    Massive In This Stunning Perseverance Photo</a></td>
                                            <td>249</td>
                                            <td>32</td>
                                            <td>34</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="bg-white dark:bg-gray-800 p-6 shadow-sm text-center">
                    &copy {{ date('Y') }} - Atom CMS. Made by Object
            </footer>
        </div>
    </div>
</x-housekeeping-layout>
