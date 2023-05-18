<div>
    <x-navbar></x-navbar>
    <section class="container px-10 mx-auto text-gray-600 body-font mt-20 pt-8">
        <form>
            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 px-8">
                <div class="text-lg mb-4">Keterangan Resep</div>
                <div class="px-8">
                    {{-- Email dan Thumbnail --}}
                    <div class="mb-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 p-4">
                            <x-forms for="regular" type="text" id="Judul" text="Judul"
                                placeholder="Masukkan Judul Resep"></x-forms>
                        </div>
                        <div class="w-full md:w-1/2 p-4">
                            <x-forms for="file" id="thumbnail" text="Thumbnail"></x-forms>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="w-full mb-6 px-4">
                        <x-forms for="textarea" id="thumbnail" text="Description"
                            placeholder="Masukkan Deskripsi Resep">
                        </x-forms>
                    </div>

                    {{-- Kategori --}}
                    <div class="w-full mb-6 px-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <div class="pb-2">
                            <select data-te-select-init
                                class="pb-8bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                        <div class="pb-2">
                            <select data-te-select-init
                                class=" bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>

                    </div>
                    {{-- Porsi --}}
                    <div class="w-full mb-6 px-4">
                        <x-forms for="regular" type="number" id="email" text="Porsi"
                            placeholder="Masukkan Jumlah Porsi"></x-forms>
                    </div>

                    {{-- Ket. Gizi --}}
                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Kalori"
                                placeholder="Masukkan Waktu Memasak" satuan="kkal"></x-forms>
                        </div>
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Lemak" satuan="gram">
                            </x-forms>
                        </div>
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Karbohidrat" satuan="gram">
                            </x-forms>
                        </div>
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Protein" satuan="gram">
                            </x-forms>
                        </div>
                    </div>

                    {{-- Waktu Memasak --}}
                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-2/3 px-4">
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak"
                                placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mt-7">
                            <select data-te-select-init
                                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 px-8">
                <div class="text-lg mb-4">Bahan-Bahan</div>
                <div class="px-8">
                    <div class="w-full mb-6 px-4">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400"
                                        fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" {{-- class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" --}}
                                    class="bg-gray text-[#616161] border border-[#C1C1C1] text-gray-900 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg"
                                    placeholder="Cari resep..." required x-model="counter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 px-8">
                <div class="text-lg mb-4">Peralatan Memasak</div>
                <div class="px-8">
                    <div class="w-full mb-6 px-4">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400"
                                        fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" {{-- class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" --}}
                                    class="bg-gray text-[#616161] border border-[#C1C1C1] text-gray-900 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg"
                                    placeholder="Cari resep..." required x-model="counter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white  pb-4 pt-8 px-8">
                <div class="text-lg mb-4">Langkah Memasak</div>
                {{-- tahapan --}}
                <div class="px-8">
                    <div class="mb-0 flex flex-wrap items-start">
                        {{-- NO tahapan memasak --}}
                        <div class="w-full md:w-1/12 p-4">
                            <x-forms for="nomor-tahapan" nomor="1"></x-forms>
                        </div>
                        {{-- textarea tahapan memasak --}}
                        <div class="w-full md:w-6/12 p-4">
                            <x-forms for="textarea-step" id="thumbnail" text="Tahap Memasak"
                                placeholder="Masukkan Tahapan Memasak">
                            </x-forms>
                        </div>
                        {{-- upload-image tahapan memasak --}}
                        <div class="w-full md:w-5/12 p-4">
                            <x-forms for="upload-image"></x-forms>
                        </div>
                    </div>
                    {{-- waktu memasak --}}
                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-1/12 px-4">
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak"
                                placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-5/12 px-4 mt-7">
                            <select data-te-select-init
                                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- tahapan --}}
                <div class="px-8">
                    <div class="mb-0 flex flex-wrap items-start">
                        {{-- NO tahapan memasak --}}
                        <div class="w-full md:w-1/12 p-4">
                            <x-forms for="nomor-tahapan" nomor="2"></x-forms>
                        </div>
                        {{-- textarea tahapan memasak --}}
                        <div class="w-full md:w-6/12 p-4">
                            <x-forms for="textarea-step" id="thumbnail" text="Tahap Memasak"
                                placeholder="Masukkan Tahapan Memasak">
                            </x-forms>
                        </div>
                        {{-- upload-image tahapan memasak --}}
                        <div class="w-full md:w-5/12 p-4">
                            <x-forms for="upload-image"></x-forms>
                        </div>
                    </div>
                    {{-- waktu memasak --}}
                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-1/12 px-4">
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak"
                                placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-5/12 px-4 mt-7">
                            <select data-te-select-init
                                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </section>
    <script>
        function showImage() {
            return {
                showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }
            }
        }
    </script>
</div>
