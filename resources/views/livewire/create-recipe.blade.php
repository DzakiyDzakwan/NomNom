<div>
    @livewire('inline.navbar')

    <section class="text-gray-600 mt-[72px] px-32 pt-8 mb-4">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="flex items-center gap-1 text-sm text-gray-500">
                <li>
                    <a href="#" class="block transition hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
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
    </section>

    <div class="shadow-xl bg-white rounded-2xl px-8 py-10 mx-32 mb-12 text-gray-800">
        <h1 class="font-bold text-2xl text-primary">Buat Resep Kamu Sendiri.</h1>
        <p class="font-normal text-base pt-1.5">Buatlah resep versimu sendiri dan posting agar dapat dilihat banyak orang!</p>
    </div>

    <form>
        <div id="steps" class="flex flex-wrap shadow-xl bg-white rounded-2xl px-8 py-10 mx-32 mb-12 text-gray-800" x-data="steps">
            <div class="basis-full mb-8">
                <p class="text-xs font-medium text-secondary" x-text="progress"></p>
                <div class="mt-4 overflow-hidden rounded-full bg-gray-200">
                    <div class="h-2 rounded-full bg-primary transition-all duration-500" :class="{ 'w-[25%]' : percentage === 25,  'w-[50%]' : percentage === 50, 'w-[75%]' : percentage === 75, 'w-[100%]' : percentage === 100,}"></div>
                </div>
            </div>

            <article id="keterangan-resep" class="basis-full" x-show="keterangan" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-xl font-bold mb-4">Keterangan Resep</div>
                <div class="px-8">
                    <div class="mb-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 px-4">
                            <x-forms wire:model.defer="judul" for="regular" type="text" id="Judul" text="Judul" placeholder=" "></x-forms>
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <x-forms wire:model for="file" id="thumbnail" text="Thumbnail"></x-forms>
                        </div>
                    </div>

                    <div class="w-full mb-6 px-4">
                        <x-forms for="textarea" id="deskripsi" text="Deskripsi">
                        </x-forms>
                    </div>

                    <div class="w-full mb-6 px-4">
                        <label class="block mb-2  font-medium dark:text-white">Kategori</label>
                        <div class="pb-2">
                            <select data-te-select-init class="pb-8 bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Ocassion</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                        <div class="pb-2">
                            <div class="flex justify-end">
                                <select data-te-select-init class="mr-2 bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">Meals</option>
                                    <option value="2">Jam</option>
                                </select>
                                <button class="flex items-center  justify-end">
                                    <span>
                                        <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
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

                    <div class="w-full mb-6 px-4">
                        <x-forms for="regular" type="number" id="email" text="Porsi" placeholder=" "></x-forms>
                    </div>

                    <div class="mb-6 flex flex-wrap">
                        <div class="w-full md:w-1/4 px-4">
                            <x-forms for="regular-text" type="number" id="waktu" text="Kalori" placeholder=" " satuan="kkal"></x-forms>
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

                    <div class="mb-12 flex flex-wrap">
                        <div class="w-full md:w-2/3 px-4">
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder=" "></x-forms>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mt-8">
                            <select data-te-select-init class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button type="rounded" :with-gradient=false text="Selanjutnya" @click="Next('bahan')"></x-button>
                    </div>
                </div>
            </article>

            <article id="bahan-bahan" class="basis-full" x-show="bahan" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-lg font-bold mb-4">Bahan-Bahan</div>
                <div class="px-8">
                    <div class="w-full px-4">
                        <form class="flex items-center">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="search-bahan" class="bg-gray text-main border border-gray-300 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari Bahan-Bahan..." required>
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-end px-4">
                        <div class=" mr-2 w-full ">
                            <x-forms for="disabled" type="text" id="email" text=" " value="Ayam">
                            </x-forms>
                        </div>
                        <div class="mt-3">
                            <button class="flex items-center justify-end">
                                <span>
                                    <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                    </svg>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="w-full mb-12 px-4">
                        <x-forms for="regular" type="text" id="email" text=" " placeholder="Input Bahan Lainnya..."></x-forms>
                    </div>

                    <div class="flex justify-end gap-2">
                        <div>
                            <div class="group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-secondary">
                                <button type="button" class="px-6 py-2 rounded-full text-md font-bold text-plain bg-secondary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" @click="Previous('keterangan')">Sebelumnya</button>
                            </div>
                        </div>
                        <x-button type="rounded" :with-gradient=false text="Selanjutnya" @click="Next('peralatan')"></x-button>
                    </div>
                </div>
            </article>

            <article id="peralatan" class="basis-full" x-show="peralatan" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-lg font-bold mb-4">Peralatan Memasak</div>
                <div class="px-8">
                    <div class="w-full px-4">
                        <form class="flex items-center">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="search-peralatan" class="bg-gray text-main border border-gray-300 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari Alat Masak..." required>
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-end px-4">
                        <div class=" mr-2 w-full ">
                            <x-forms for="disabled" type="text" id="email" text=" " value="Panci">
                            </x-forms>
                        </div>
                        <div class="mt-3">
                            <button class="flex items-center justify-end">
                                <span>
                                    <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                    </svg>
                                </span>
                            </button>
                        </div>
    
                    </div>
                    <div class="w-full mb-12 px-4">
                        <x-forms for="regular" type="text" id="email" text=" " placeholder="Input Alat Masak Lainnya..."></x-forms>
                    </div>

                    <div class="flex justify-end gap-2">
                        <div>
                            <div class="group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-secondary">
                                <button type="button" class="px-6 py-2 rounded-full text-md font-bold text-plain bg-secondary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" @click="Previous('bahan')">Sebelumnya</button>
                            </div>
                        </div>
                        <x-button type="rounded" :with-gradient=false text="Selanjutnya" @click="Next('langkah')"></x-button>
                    </div>
                </div>
            </article>

            <article id="langkah-memasak" class="basis-full" x-show="langkah" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-lg font-bold mb-4">Langkah Memasak</div>
                <div class="px-8">
                    <div class="mb-0 flex flex-wrap items-start">
                        <div class="w-full md:w-1/12 p-4">
                            <x-forms for="nomor-tahapan" nomor="1"></x-forms>
                        </div>
                        <div class="w-full md:w-6/12 p-4">
                            <x-forms for="textarea-step" id="thumbnail" text="Tahap Memasak" placeholder=" ">
                            </x-forms>
                        </div>
                        <div class="w-full md:w-4/12 p-4">
                            <x-forms for="upload-image"></x-forms>
                        </div>
                        <div class="w-full md:w-1/12 p-4">
                            <button class="flex items-center  justify-end">
                                <span>
                                    <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="mb-12 flex flex-wrap">
                        <div class="w-full md:w-1/12 px-4">
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <x-forms for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder=" "></x-forms>
                        </div>
                        <div class="w-full md:w-5/12 px-4 mt-8">
                            <select data-te-select-init class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Menit</option>
                                <option value="2">Jam</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end gap-2">
                        <div>
                            <div class="group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-secondary">
                                <button type="button" class="px-6 py-2 rounded-full text-md font-bold text-plain bg-secondary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" @click="Previous('peralatan')">Sebelumnya</button>
                            </div>
                        </div>
                        <x-button type="rounded" :with-gradient=false text="Submit"></x-button>
                    </div>
                </div>
            </article>
        </div>
    </form>
</div>

@pushOnce('component-script')
<script>
    document.addEventListener('alpine:init', () => 
    {
        Alpine.data('steps', () => 
        ({
            percentage: 25,
            progress: '1/4 - Keterangan Resep',
            keterangan: true,
            bahan: false,
            peralatan: false,
            langkah: false,

            Previous(slide)
            {
                if(slide == 'peralatan')
                {
                    this.langkah = false;

                    setTimeout(() => {
                        this.peralatan = true;
                        this.progress = "3/4 - Peralatan Memasak";
                        this.percentage = 75;
                    }, 500);
                }
                else if(slide == 'bahan')
                {
                    this.peralatan = false;
                    
                    setTimeout(() => {
                        this.bahan = true;
                        this.progress = "2/4 - Bahan-Bahan"
                        this.percentage = 50;
                    }, 500);
                }
                else if(slide == 'keterangan')
                {
                    this.bahan = false;

                    setTimeout(() => {
                        this.keterangan = true;
                        this.progress = "1/4 - Keterangan Resep"
                        this.percentage = 25;
                    }, 500);
                }

                document.querySelector('#steps').scrollIntoView({block: 'start', inline: 'nearest', behavior: 'smooth'});
            },
            Next(slide)
            {
                if(slide == 'bahan')
                {
                    this.keterangan = false;
                    
                    setTimeout(() => {
                        this.bahan = true;
                        this.progress = "2/4 - Bahan-Bahan"
                        this.percentage = 50;
                    }, 500);
                }
                else if(slide == 'peralatan')
                {
                    this.bahan = false;

                    setTimeout(() => {
                        this.peralatan = true;
                        this.progress = "3/4 - Peralatan Memasak"
                        this.percentage = 75;
                    }, 500);
                }
                else if(slide == 'langkah')
                {
                    this.peralatan = false;

                    setTimeout(() => {
                        this.langkah = true;
                        this.progress = "4/4 - Langkah-Langkah"
                        this.percentage = 100;
                    }, 500);
                }

                document.querySelector('#steps').scrollIntoView({block: 'start', inline: 'nearest', behavior: 'smooth'});
            }
        }))
    })
</script>
@endPushOnce