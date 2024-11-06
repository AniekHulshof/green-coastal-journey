<section class="bg-fixed bg-[url('/images/kust-geschiedenis.jpg')] min-h-screen bg-cover bg-center flex flex-col justify-between">
    <div class="bg-[#1B6656] bg-opacity-70 flex-grow flex items-center py-10">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-5 p-4">
            <div class="w-full md:w-1/2 bg-white rounded-lg p-6">
                <p class="text-2xl text-[#1B6656] font-bold"><?= $taal["geschiedenis"]["title"][0] ?></p>
                <p class="text-zinc-500 font-serif">
                    <?= $taal["geschiedenis"]["paragraph"][0] ?>
                </p>
            </div>
            <div class="w-full md:w-1/2 bg-white rounded-lg p-6">
                <p class="text-2xl text-[#1B6656] font-bold"><?= $taal["geschiedenis"]["title"][1] ?></p>
                <p class="text-zinc-500 font-serif">
                    <?= $taal["geschiedenis"]["paragraph"][1] ?>
                </p>
                <img src="/images/groene-kustweg.jpg" alt="" class="h-48 mt-9">
            </div>
        </div>
    </div>
</section>
