{{-- <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 mt-12"> --}}
    <div class="flex items-start justify-between gap-4">
        <div class="w-1/2 flex items-center relative">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="query" wire:click="$set('kategoriBar', true)" wire:keydown.escape="$set('kategoriBar', false)" wire:keydown.tab="clear" type="text" id="simple-search" class="bg-gray text-[#616161] border border-[#C1C1C1] text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg mb-1" placeholder="Cari bahan..." aria-label="Search" />

                <div wire:loading class="absolute bg-white z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg px-4 py-3">
                    <li class="list-none">
                        {{-- <img alt="gallery" class="w-[29px] h-[24px] mx-auto" src="{{ asset('assets/images/search-loading-1.gif') }}"> --}}
                        <div class="custom-loader mx-auto my-2"></div>
                    </li>
                </div>

                @if ($kategoriBar)
                <div class="overflow-y-scroll h-full max-h-screen" x-data="{ open: @entangle('kategoriBar') }" @click.outside="open = false">
                    <div class="absolute bg-white z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg rounded-t-lg shadow-lg">
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

                {{-- @if (!empty($query))
                <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="clear"></div>

                <div class="overflow-y-scroll h-full max-h-screen">
                    <div class="absolute bg-white z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg">
                        @if (!empty($bahan))
                        @foreach ($bahan as $item)
                        <ul class="list-group">
                            <li class="list-group-item hover:bg-blue-100 hover:rounded-b-lg px-4 py-2 cursor-pointer" wire:click="toggleTag('{{ $item['nama_bahan'] }}')" wire:click="showResep('{{ $item['id'] }}')">
                                <div class="inline-flex items-center">
                                    <img src="storage/images/bahan/{{ $item['image'] }}" alt="" class="w-[50px] h-[50px] rounded-lg">
                                    <span class="pl-3">{{ $item['nama_bahan'] }}</span>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                        @else
                        <li class="list-none px-4 py-3">Bahan tidak ditemukan</li>
                        @endif

                    </div>
                </div>
                @endif --}}
            </div>
        </div>
        <div class="w-1/2 border border-[#FFB03E] rounded-lg px-3.5 py-3.5">
            <p class="font-semibold text-base text-gray-800 mb-2.5">Bahan yang dipilih:</p>

            @if (!empty($selectedBahan))
            @foreach ($selectedBahan as $tag)
            <button id="tag" class="inline-flex items-center gap-1 rounded-full border-2 border-[#FFB03E] bg-transparent px-2 py-0.5 text-base font-medium text-gray-800 transition-colors hover:bg-[#FFB03E] hover:text-white focus:outline-none focus:ring active:opacity-75">
                {{ $tag['nama_bahan'] }}
                <svg xmlns="http://www.w3.org/2000/svg" wire:click="deleteTag('{{ $tag['id'] }}')" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            @endforeach
            @else
            <span class="text-base">Silahkan pilih bahan terlebih dahulu</span>
            @endif

        </div>
    </div>