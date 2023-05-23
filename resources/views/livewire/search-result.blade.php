<div>
    @livewire('inline.navbar')
    <section class="container px-24 mt-12 mx-auto">
        <div class="mt-24">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center gap-1 text-sm text-gray-600">
                    <li>
                        <a href="/" class="block transition hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Hasil Pencarian </a>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="bg-white mt-10 shadow-xl rounded-2xl px-5 py-6 text-gray-800">
            <h1 class="font-bold text-2xl">Hasil Pencarian.</h1>
            <p class="font-medium text-base pt-1.5">Menampilkan <b>{{ $count }}</b> hasil pencarian dengan keyword
                <b>"{{ $search }}"</b>.
            </p>
        </div>
        
        @if(empty($resep))
            {{-- Tidak ada data --}}
        @else
            {{-- <div class="mb-8 mt-12">
                @livewire('inline.filter-button')
            </div> --}}
    
            <div class="flex flex-wrap my-8">
                @foreach ($resep as $item)
                <div class="px-2 py-2 md:w-1/4 lg:w-1/4 sm:w-1/2">
                    <div class="h-full rounded-2xl overflow-hidden shadow-md bg-white">
                
                        <div class="flex relative">
                            <div class="relative py-1 z-10 tracking-widest w-full opacity-100 rounded-2xl">
                                <div class="flex items-center py-36 pt-1 pr-2">
                                    <div class="lg:ml-auto md:ml-0 ml-auto px-2 my-auto pt-2 bg-white opacity-100 rounded-full justify">
                                        <x-slot name="trigger">
                                            <x-button-ui label="Options" />
                                        </x-slot>
                                        <x-dropdown>
                                            <x-dropdown.item label="Sembunyikan" />
                                            <x-dropdown.item label="Laporkan" />
                                            <x-dropdown.item label="Blokir" />
                                        </x-dropdown>
                                    </div>
                                </div>
                            </div>
                
                            {{-- Image --}}
                            <img class="lg:h-48 md:h-48 w-full absolute object-center object-cover inset-0 h-full"
                                src="storage/images/resep/{{ $item->image }}" alt="image">
                        </div>
                
                
                        {{-- Title, icon --}}
                        <div class="px-3">
                            <div class="flex items-center flex-wrap grid grid-cols-2 mt-2">
                                <h1 class="title-font text-base font-bold text-gray-800 w-[180px] mt-1 leading-tight">{{ $item->nama_resep }}</h1>
                                <button
                                    class="mt-1 border-2 border-opacity-100 rounded-full px-1 py-1 shadow-md lg:ml-auto md:ml-0 ml-auto">
                                    <svg class="h-7 w-7 fill-gray hover:fill-[#FFB03E] focus:fill-[#FFB03E] active:fill-[#FFB03E]"
                                        viewBox="0 0 20 20">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                </button>
                            </div>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-6 h-6 mr-1 fill-gray" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="text-gray-800 text-sm font-normal">{{ $item->chef->username }}</div>
                            </span>
                            <div class="flex flex-wrap mb-2 inset-x-0 bottom-0">
                                </a>
                                <span class="inline-flex items-center leading-none text-sm pr-3 py-1">
                                    <svg class="w-5 h-5 mr-1 fill-[#FFC93F]" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 22 23">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    <div class="text-gray-800 text-sm font-medium">4.9</div>
                                </span>
                                <span class="inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm">
                                    <svg class="w-5 h-5 mr-1 fill-[#FFB03E]" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 22 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="text-gray-800 text-sm font-medium">{{ $item->durasi }}</div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
       

        {{-- <div class="my-8">
            {{ $resep->links() }}
        </div> --}}
    </section>
</div>
