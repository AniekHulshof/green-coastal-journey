<section class="bg-[url('/images/kaart.jpg')] h-dvh bg-cover bg-center">
    <div class="container mx-auto py-12 bg-gray-200 bg-opacity-50 h-full mb-10">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg px-8 py-6">
            <h2 class="text-[#1B6656] text-2xl font-bold mb-4"><?= $taal["contact"]["title"] ?></h2>
            <form action="#" method="POST">
                <div class="mb-6">
                    <label for="bedrijfsnaam" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][0] ?></label>
                    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                </div>
                <div class="mb-6 flex">
                    <div class="mr-2">
                        <label for="straatnaam" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][1] ?></label>
                        <input type="text" id="straatnaam" name="straatnaam" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                    </div>
                    <div>
                        <label for="huisnummer" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][2] ?></label>
                        <input type="text" id="huisnummer" name="huisnummer" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                    </div>
                </div>
                <div class="mb-6 flex">
                    <div class="mr-2">
                        <label for="postcode" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][3] ?></label>
                        <input type="text" id="postcode" name="postcode" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                    </div>
                    <div>
                        <label for="vestigingsplaats" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][4] ?></label>
                        <input type="text" id="vestigingsplaats" name="vestigingsplaats" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][5] ?></label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="telefoonnummer" class="block text-gray-700 text-sm font-bold mb-2"><?= $taal["contact"]["info"][6] ?></label>
                    <input type="tel" id="Telefoonnummer" name="Telefoonnummer" class="w-full px-3 py-2 border rounded-md focus:outline-none" placeholder="" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-[#1B6656] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><?= $taal["contact"]["submit"] ?></button>
                </div>
            </form>
        </div>
    </div>
</section>