<nav class="bg-white drop-shadow-xl z-10">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="/images/logo.png" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="?page=home" class="nav-link text-gray-300 hover:text-[#1B6656] rounded-md px-3 py-2 text-md font-medium"><?= $taal["header"]["home"] ?></a>

                        <div class="relative">
                            <button class="nav-link dropdown-button text-gray-300 hover:text-[#1B6656] rounded-md px-3 py-2 text-md font-medium focus:outline-none">
                                <?= $taal["header"]["aboutus"] ?>
                            </button>
                            <div class="absolute hidden dropdown-menu bg-white rounded-md shadow-lg z-10">
                                <a href="?page=geschiedenis" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white"><?= $taal["header"]["dropdown"]["history"] ?> </a>
                                <a href="?page=project" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white"><?= $taal["header"]["dropdown"]["project"] ?></a>
                                <a href="?page=organisatie" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white"><?= $taal["header"]["dropdown"]["organization"] ?></a>
                            </div>
                        </div>

                        <a href="?page=kaart" class="nav-link text-gray-300 hover:text-[#1B6656] rounded-md px-3 py-2 text-md font-medium"><?= $taal["header"]["map"] ?></a>
                        <a href="?page=contact" class="nav-link text-gray-300 hover:text-[#1B6656] rounded-md px-3 py-2 text-md font-medium"><?= $taal["header"]["contact"] ?></a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a href="?page=login" class="hover:text-[#1B6656] rounded-md px-3 py-2 text-sm font-medium"><svg class="h-8 w-8 text-gray-300 hover:text-[#1B6656]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg></a>
                <div class="relative ml-3">
                    <div>
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <button class="nav-link dropdown-button text-gray-300 hover:text-[#1B6656] rounded-md px-3 py-2 text-md font-medium focus:outline-none">
                        <?= $taal["header"]["translate"] ?>
                    </button>
                    <div class="z-10 absolute hidden dropdown-menu bg-white rounded-md shadow-lg py-2 px-2">
                        <a href="?taal=nl" class="px-2 taal nederlands"><img src="/images/nederland.png" class="object-cover h-6" alt="Nederlands"></a>
                        <a href="?taal=en" class="px-2 taal engels"><img src="/images/england.webp" class="object-cover h-6" alt="England"></a>
                        <a href="?taal=de" class="px-2 taal duits"><img src="/images/duitsland.png" class="object-cover h-6" alt="Duitsland"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="?page=home" class="nav-link text-gray-300 hover:text-[#1B6656] block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <div class="relative">
                <button class="nav-link dropdown-button text-gray-300 hover:text-[#1B6656] block rounded-md px-3 py-2 text-base font-medium focus:outline-none">
                    Over ons
                </button>
                <div class="absolute hidden dropdown-menu bg-white rounded-md shadow-lg z-10">
                    <a href="?page=geschiedenis" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Geschiedenis</a>
                    <a href="?page=project" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Het project</a>
                    <a href="?page=organisatie" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">De organisatie</a>
                </div>
            </div>
            <a href="?page=kaart" class="nav-link text-gray-300 hover:text-[#1B6656]  block rounded-md px-3 py-2 text-base font-medium">Kaart</a>
            <a href="?page=contact" class="nav-link text-gray-300 hover:text-[#1B6656]  block rounded-md px-3 py-2 text-base font-medium">Contact</a>
        </div>
    </div>
</nav>