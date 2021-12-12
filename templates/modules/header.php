<!-- This example requires Tailwind CSS v2.0+ -->

<nav class="sticky top-0 top-0 left-0 right-0 z-10 drop-shadow-md bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-2">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-center sm:justify-start">
                <div class="flex-shrink-0 flex items-center text-2xl text-black dark:text-white">
                    Theresabug
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu_class'      => 'flex space-x-4',
                            'menu_id' => 'menu',
                            'container_class' => 'primary-menu-container',
                            'before' => '<span class=" text-black dark:text-white hover:bg-purple-700 rounded-lg hover:text-white px-3 py-2 text-sm font-medium">',
                            'after' => '</span>'
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button id="toggle-mode" type="button" class="p-1 rounded-full text-purple-600 hover:text-purple-700 dark:text-gray-300 dark:hover:text-white focus:outline-none">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" data-action="light" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <svg class="h-6 w-6" data-action="dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="sm:hidden" id="mobile-menu">
            <?php
            wp_nav_menu(
                array(
                    'menu_class'      => 'px-2 pt-2 pb-3 space-y-1',
                    'menu_id' => 'menu',
                    'container_class' => 'primary-menu-container',
                    'before' => '<span class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">',
                    'after' => '</span>'
                ) //  rel="canonical"
            );
            ?>
        </div>
</nav>