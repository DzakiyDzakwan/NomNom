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

    <form wire:submit.prevent="CreateRecipe" enctype="multipart/form-data">
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
                            <x-forms wire:model.defer="nama_resep" for="regular" type="text" id="Judul" text="Judul" placeholder=" "></x-forms>
                            @error('nama_resep')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-4">
                            <x-forms wire:model.defer="image" for="file" id="image" text="Image"></x-forms>
                            @error('image')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full mb-6 px-4">
                        <x-forms wire:model.defer="deskripsi" for="textarea" id="deskripsi" text="Deskripsi"></x-forms>
                        @error('deskripsi')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full mb-6 px-4">
                        <label class="block mb-2 font-medium dark:text-white">Kategori</label>
                        <div class="pb-2 space-y-3">
                            @foreach($arrayOfKategori as $i => $v)
                            <div class="space-y-1">
                                <div>
                                    <select class="py-4 border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="kategori.{{ $i }}">
                                        <option value=""></option>
                                        @foreach(\App\Models\Kategori::query()->get() as $e)
                                        <option value="{{ $e->id }}">{{ $e->nama_kategori }} {{ $v }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori.'.$i)
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <div class="flex">
                                        <select class="border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                            @foreach(\App\Models\SubKategori::query()->whereHas('categories', fn($q) => $q->where('kategoris.id', $kategori[$i]))->get() as $sub)
                                            <option value="{{ $sub->id }}">{{ $sub->nama_sub_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if($i + 1 < 3)
                        <div class="mb-6">
                            <button type="button" class="inline-flex items-center gap-1 rounded-full border-2 border-[#FFB03E] bg-transparent px-2 py-1 text-sm text-gray-800 transition-colors hover:bg-[#FFB03E] hover:text-white focus:outline-none focus:ring active:opacity-75" href="#" rel="noreferrer" wire:click="AddNewKategori">
                                Tambah
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </button>
                        </div>
                        @endif
                    </div>

                    <div class="w-full mb-6 px-4 flex gap-x-4">
                        <div class="w-full md:w-1/2">
                            <x-forms wire:model.defer="porsi" for="regular" type="number" id="porsi" text="Porsi" placeholder=""></x-forms>
                            @error('porsi')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2">
                            <label class="block mb-2 font-medium dark:text-white">Tingkat Kesulitan</label>
                            <select class="border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.defer="kesulitan">
                                <option value=""></option>
                                <option value="mudah">Mudah</option>
                                <option value="sulit">Sulit</option>
                            </select>
                            @error('kesulitan')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full mb-6 px-4 flex gap-x-4">
                        <div class="w-full md:w-1/3">
                            <x-forms wire:model.defer="kalori" for="regular-text" type="number" id="waktu" text="Kalori" satuan="kkal"></x-forms>
                            @error('kalori')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3">
                            <x-forms wire:model.defer="lemak" for="regular-text" type="number" id="waktu" text="Lemak" satuan="gram"></x-forms>
                            @error('lemak')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3">
                            <x-forms wire:model.defer="karbohidrat" for="regular-text" type="number" id="waktu" text="Karbohidrat" satuan="gram"></x-forms>
                            @error('karbohidrat')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-12 flex flex-wrap">
                        <div class="w-full md:w-2/3 px-4">
                            <x-forms wire:model.defer="durasi" for="regular" type="number" id="waktu" text="Waktu Memasak" placeholder=" "></x-forms>
                            @error('durasi')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-4 mt-8">
                            <select class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.defer="tipe_durasi">
                                <option value="menit">Menit</option>
                                <option value="jam">Jam</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button wire:click="ValidateKeterangan" type="rounded" :with-gradient=false text="Selanjutnya" @nextslide.window="Next($event.detail.data)"></x-button>
                    </div>
                </div>
            </article>

            <article id="bahan-bahan" class="basis-full" x-show="bahan" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-lg font-bold mb-4">Bahan-Bahan</div>
                <div class="px-8">
                    <div class="w-full px-4">
                        <form class="flex items-center">
                            <div class="relative w-full">
                                <div class="absolute inset-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input wire:model="queryBahan" wire:click="$set('showResultBahan', true)" type="text" id="search-bahan" class="text-main border border-gray-300 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari Bahan-Bahan..." required>

                                <div wire:loading wire:target="queryBahan" class="absolute bg-amber-50 z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg px-4 py-3 mt-1">
                                    <li class="list-none">
                                        {{-- <img alt="gallery" class="w-[29px] h-[24px] mx-auto" src="{{ asset('assets/images/search-loading-1.gif') }}"> --}}
                                        <div class="custom-loader mx-auto my-2"></div>
                                    </li>
                                </div>

                                @if($showResultBahan)
                                <div class="overflow-y-scroll h-full max-h-screen" x-data="{ open: @entangle('showResultBahan') }" @click.outside="open = false">
                                    <div class="absolute bg-amber-50 z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg rounded-t-lg shadow-lg mt-1">
                                        @if (!empty($listBahan))
                                        <ul class="list-group">
                                            @foreach ($listBahan as $item)
                                            <li class="list-group-item hover:bg-blue-100 first:rounded-t-lg last:rounded-b-lg px-4 py-2 cursor-pointer" wire:click="selectBahan('{{ $item['id'] }}')">
                                                <div class="inline-flex items-center">
                                                    <img src="storage/images/bahan/{{ $item['image'] }}" alt="" class="w-[50px] h-[50px] rounded-lg">
                                                    <span class="pl-3">{{ $item['nama_bahan'] }}</span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <li class="list-none px-4 py-3">Bahan tidak ditemukan</li>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    @if (!empty($selectedBahan))
                        @foreach ($selectedBahan as $_i => $_v)
                        <div class="flex justify-end px-4">
                            <div class=" mr-2 w-full ">
                                <x-forms for="disabled" type="text" id="email" text="" placeholder="" value="{{ $_v['nama_bahan'] }}"></x-forms>
                                @error('arrayOfBahan.'.$_i)
                                <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="button" class="flex items-center justify-end" wire:click="deleteBahan('{{ $_v['id'] }}')">
                                    <span>
                                        <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="flex justify-end px-4">
                        <div class="w-full">
                            <x-forms for="disabled" type="text" id="email" text="" value="Input bahan terlebih dahulu"></x-forms>
                            @error('arrayOfBahan.0')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @endif
                        
                    <div class="w-full mb-12 px-4">
                        {{-- <x-forms for="regular" type="text" id="email" text=" " placeholder="Input Bahan Lainnya..."></x-forms> --}}
                    </div>

                    <div class="flex justify-end gap-2">
                        <div>
                            <div class="group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-secondary">
                                <button type="button" class="px-6 py-2 rounded-full text-md font-bold text-plain bg-secondary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" @click="Previous('keterangan')">Sebelumnya</button>
                            </div>
                        </div>
                        <x-button wire:click="ValidateBahan" type="rounded" :with-gradient=false text="Selanjutnya" @nextslide.window="Next($event.detail.data)"></x-button>
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
                                <input wire:model="queryPeralatan" wire:click="$set('showResultPeralatan', true)" type="text" id="search-peralatan" class="text-main border border-gray-300 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg" placeholder="Cari Peralatan..." required>

                                <div wire:loading wire:target="queryPeralatan" class="absolute bg-amber-50 z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg px-4 py-3 mt-1">
                                    <li class="list-none">
                                        {{-- <img alt="gallery" class="w-[29px] h-[24px] mx-auto" src="{{ asset('assets/images/search-loading-1.gif') }}"> --}}
                                        <div class="custom-loader mx-auto my-2"></div>
                                    </li>
                                </div>

                                @if($showResultPeralatan)
                                <div class="overflow-y-scroll h-full max-h-screen" x-data="{ open: @entangle('showResultPeralatan') }" @click.outside="open = false">
                                    <div class="absolute bg-amber-50 z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg rounded-t-lg shadow-lg mt-1">
                                        @if (!empty($listPeralatan))
                                        <ul class="list-group">
                                            @foreach ($listPeralatan as $item)
                                            <li class="list-group-item hover:bg-blue-100 first:rounded-t-lg last:rounded-b-lg px-4 py-2 cursor-pointer" wire:click="selectPeralatan('{{ $item['id'] }}')">
                                                <div class="inline-flex items-center">
                                                    <img src="storage/images/bahan/{{ $item['image'] }}" alt="" class="w-[50px] h-[50px] rounded-lg">
                                                    <span class="pl-3">{{ $item['nama_peralatan'] }}</span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <li class="list-none px-4 py-3">Peralatan tidak ditemukan</li>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    @if (!empty($selectedPeralatan))
                        @foreach ($selectedPeralatan as $_ii => $_vv)
                        <div class="flex justify-end px-4">
                            <div class=" mr-2 w-full ">
                                <x-forms for="disabled" type="text" id="email" text="" placeholder="" value="{{ $_vv['nama_peralatan'] }}"></x-forms>
                                @error('arrayOfPeralatan.'.$_ii)
                                <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="button" class="flex items-center justify-end" wire:click="deletePeralatan('{{ $_vv['id'] }}')">
                                    <span>
                                        <svg class="h-8 w-8 fill-gray hover:fill-[#FF0000] focus:fill-[#FFB03E] active:fill-[#FF0000]" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 8.933-2.721-2.722c-.146-.146-.339-.219-.531-.219-.404 0-.75.324-.75.749 0 .193.073.384.219.531l2.722 2.722-2.728 2.728c-.147.147-.22.34-.22.531 0 .427.35.75.751.75.192 0 .384-.073.53-.219l2.728-2.728 2.729 2.728c.146.146.338.219.53.219.401 0 .75-.323.75-.75 0-.191-.073-.384-.22-.531l-2.727-2.728 2.717-2.717c.146-.147.219-.338.219-.531 0-.425-.346-.75-.75-.75-.192 0-.385.073-.531.22z" fill-rule="nonzero" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="flex justify-end px-4">
                        <div class="w-full">
                            <x-forms for="disabled" type="text" id="email" text="" value="Input peralatan terlebih dahulu"></x-forms>
                            @error('arrayOfPeralatan.0')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @endif
                        
                    <div class="w-full mb-12 px-4">
                        {{-- <x-forms for="regular" type="text" id="email" text=" " placeholder="Input Bahan Lainnya..."></x-forms> --}}
                    </div>

                    <div class="flex justify-end gap-2">
                        <div>
                            <div class="group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-secondary">
                                <button type="button" class="px-6 py-2 rounded-full text-md font-bold text-plain bg-secondary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" @click="Previous('bahan')">Sebelumnya</button>
                            </div>
                        </div>
                        <x-button wire:click="ValidatePeralatan" type="rounded" :with-gradient=false text="Selanjutnya" @nextslide.window="Next($event.detail.data)"></x-button>
                    </div>
                </div>
            </article>

            <article id="langkah-memasak" class="basis-full" x-show="langkah" x-transition:enter="transition duration-500" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-0 scale-0" x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="text-lg font-bold mb-4">Langkah Memasak</div>
                <div class="px-8">
                    <div class="mb-0 flex flex-wrap justify-end">
                        <div class="w-full md:w-1/12 p-4">
                            <x-forms for="nomor-tahapan" nomor="1"></x-forms>
                        </div>
                        <div class="w-full md:w-6/12 p-4">
                            <x-forms for="textarea-step" id="tahap" text="Tahap Memasak" placeholder=" ">
                            </x-forms>
                        </div>
                        <div class="w-full md:w-4/12 p-4">
                            <x-forms for="upload-image"></x-forms>
                        </div>
                        <div class="w-full md:w-1/12 relative">
                            <button class="absolute top-1 -right-3">
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
                            <select class="bg-gray border border-gray-300 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
            },
        }))
        
    })

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
@endPushOnce