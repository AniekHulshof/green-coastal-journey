<!-- <div id="map" style="height: 400px; width: 400px;"></div> -->

<!-- bigger then ms -->
<div class="min-h-screen bg-cover bg-center bg-no-repeat bg-[url('/images/landingPageHeader2.jpg')] sm:block hidden">
    <div class="w-full min-h-screen flex justify-start items-center bg-white bg-opacity-30 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#1B6656]"></div>
        <div class="w-1/2"></div>
        <div class="w-1/2 flex justify-center items-center">
            <div class="border-4 rounded border-black inline-block p-10">
                <p class="text-6xl text-center">
                    <?= $taal["landingpage"]["quote"] ?>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- smaller then ms -->
<div class="min-h-screen bg-cover bg-center bg-no-repeat bg-[url('/images/landingPageHeader2.jpg')] sm:hidden">
    <div class="w-full min-h-screen flex justify-start items-center bg-white bg-opacity-30 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#1B6656]"></div>
        <div class="w-full flex justify-center items-center">
            <div class="border-4 rounded border-black inline-block p-10">
                <p class="text-6xl text-center">
                    <?= $taal["landingpage"]["quote"] ?>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="bg-[#1B6656] flex justify-center py-8 sm:py-12">
    <h1 class="font-bold text-4xl sm:text-6xl md:text-9xl title-bg text-white">Green Coastal Journey</h1>
</div>

<div class="bg-[#1B6656] min-h-screen mx-auto px-4 py-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md">
                <img src="/images/homeAboutUs.jpg" class="rounded-t-xl" alt="" />
                <div class="p-6">
                    <p class="text-xl md:text-2xl font-semibold">
                        <?= $taal["landingpage"]["topic"][0] ?>
                    </p>
                    <p class="mt-3 mb-5 text-lg md:text-xl">
                        <?= $taal["landingpage"]["paragraph"][0] ?>
                    </p>
                </div>
                <div class="p-6 mt-auto">
                    <a href="?page=project" class="hover:underline text-blue-800"><?= $taal["landingpage"]["link"][0] ?></a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md">
                <img src="/images/homeMap.jpg" class="rounded-t-xl" alt="" />
                <div class="p-6">
                    <p class="text-xl md:text-2xl font-semibold">
                        <?= $taal["landingpage"]["topic"][1] ?>
                    </p>
                    <p class="mt-3 mb-5 text-lg md:text-xl">
                        <?= $taal["landingpage"]["paragraph"][1] ?>
                    </p>
                </div>
                <div class="p-6 mt-auto">
                    <a href="?page=kaart" class="hover:underline text-blue-800"><?= $taal["landingpage"]["link"][1] ?></a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md">
                <img src="/images/homeContact.jpg" class="rounded-t-xl" alt="" />
                <div class="p-6">
                    <p class="text-xl md:text-2xl font-semibold">
                        <?= $taal["landingpage"]["topic"][2] ?>
                    </p>
                    <p class="mt-3 mb-5 text-lg md:text-xl">
                        <?= $taal["landingpage"]["paragraph"][2] ?>
                    </p>
                </div>
                <div class="p-6 mt-auto">
                    <a href="?page=contact" class="hover:underline text-blue-800"><?= $taal["landingpage"]["link"][2] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
