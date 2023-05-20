<div>
    <x-navbar></x-navbar>
    <section class="container px-10 mt-12 mx-auto">
        <div class="mt-24">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center gap-1 text-sm text-gray-600">
                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Home </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Buat Resep </a>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="bg-white-100 mt-10 shadow-xl rounded-2xl px-5 py-6 text-gray-800">
            <h1 class="font-bold text-2xl">Buat Resep Kamu Sendiri.</h1>
            <p class="font-medium text-base pt-1.5">Buatlah resep versimu sendiri dan posting agar dapat dilihat banyak
                orang!</p>
        </div>

        <form>
            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 mt-12 px-8">
                <div class="text-lg font-bold mb-4">Keterangan Resep</div>
                <div class="px-8">
                    {{-- Email dan Thumbnail --}}
                    <div class="mb-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 p-4">
                            <x-forms for="regular" type="text" id="Judul" text="Judul" placeholder="Masukkan Judul Resep"></x-forms>
                        </div>
                        <div class="w-full md:w-1/2 p-4">
                            <x-forms for="file" id="thumbnail" text="Thumbnail"></x-forms>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="w-full mb-6 px-4">
                        <x-forms for="textarea" id="thumbnail" text="Description" placeholder="Masukkan Deskripsi Resep">
                        </x-forms>
                    </div>

                    {{-- Kategori --}}
                    <div class="w-full mb-6 px-4">
                        <label class="block mb-2  font-medium dark:text-white">Kategori</label>
                        <div class="pb-2">
                            <select data-te-select-init class="pb-8bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                        <div class="pb-2">
                            <select data-te-select-init class=" bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                        <div class="text-right mb-6">
                            <button class="inline-flex items-center gap-1 rounded-full border-2 border-[#FFB03E] bg-transparent px-2 py-1 text-base font-medium text-gray-800 transition-colors hover:bg-[#FFB03E] hover:text-white focus:outline-none focus:ring active:opacity-75" href="#" rel="noreferrer">
                                Tambah
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- Porsi --}}
                    <div class="w-full mb-6 px-4">
                        <x-forms for="regular" type="number" id="email" text="Porsi" placeholder="Masukkan Jumlah Porsi"></x-forms>
                    </div>

                    {{-- Ket. Gizi --}}
                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Kalori" placeholder="Masukkan Waktu Memasak" satuan="kkal"></x-forms>
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
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mt-7">
                            <select data-te-select-init class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 px-8">
                <div class="text-lg font-bold mb-4">Bahan-Bahan</div>
                <div class="px-8">
                    <div class="w-full mb-6 px-4">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray text-main border border-main text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari resep..." required x-model="counter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white mb-8 pb-4 pt-8 px-8">
                <div class="text-lg font-bold mb-4">Peralatan Memasak</div>
                <div class="px-8">
                    <div class="w-full mb-6 px-4">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" {{-- class=" border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" --}} class="bg-gray text-main border border-main text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari resep..." required x-model="counter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="h-full overflow-hidden shadow-md bg-white  pb-4 pt-8 px-8">
                <div class="text-lg font-bold mb-4">Langkah Memasak</div>
                {{-- tahapan --}}
                <div class="px-8">
                    <div class="mb-0 flex flex-wrap items-start">
                        {{-- NO tahapan memasak --}}
                        <div class="w-full md:w-1/12 p-4">
                            <x-forms for="nomor-tahapan" nomor="1"></x-forms>
                        </div>
                        {{-- textarea tahapan memasak --}}
                        <div class="w-full md:w-6/12 p-4">
                            <x-forms for="textarea-step" id="thumbnail" text="Tahap Memasak" placeholder="Masukkan Tahapan Memasak">
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
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-5/12 px-4 mt-7">
                            <select data-te-select-init class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                            <x-forms for="textarea-step" id="thumbnail" text="Tahap Memasak" placeholder="Masukkan Tahapan Memasak">
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
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder="Masukkan Waktu Memasak"></x-forms>
                        </div>
                        <div class="w-full md:w-5/12 px-4 mt-7">
                            <select data-te-select-init class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-right mb-6 px-4">
                        <button class="inline-flex items-center gap-1 rounded-full border-2 border-[#FFB03E] bg-transparent px-2 py-1 text-base font-medium text-gray-800 transition-colors hover:bg-[#FFB03E] hover:text-white focus:outline-none focus:ring active:opacity-75" href="#" rel="noreferrer">
                            Tambah
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-8 text-right">
                <x-button type="rounded" :with-gradient=true text="Simpan"></x-button>
            </div>
        </form>
    </section>
    <x-footer></x-footer>
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