<div class="flex items-center relative">
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
        <input 
            type="text" id="simple-search"
            class="bg-gray text-[#616161] border border-[#C1C1C1] text-gray-900 text-sm focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 rounded-lg mb-1"
            placeholder="Cari bahan..."
            aria-label="Search"
            wire:model="query"
            wire:keydown.escape="clear"
            wire:keydown.tab="clear"/>

        <div wire:loading class="absolute bg-white z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg px-4 py-3">
            <li class="list-none">
                <img alt="gallery" class="w-[29px] h-[24px] mx-auto"
                    src="{{ asset('assets/images/search-loading-1.gif') }}">
            </li>
        </div>

        @if (!empty($query))
            <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="clear"></div>

            <div class="overflow-y-scroll h-full max-h-screen">
                <div class="absolute bg-white z-10 text-base font-medium text-gray-800 list-group w-full rounded-b-lg shadow-lg">
                @if (!empty($bahan))
                    @foreach ($bahan as $item)
                        <li class="list-none hover:bg-blue-100 hover:rounded-b-lg px-4 py-3">
                            <a href="{{ route('ingredients-page', $item['id']) }}" class="list-item">
                                <div class="inline-flex items-center">
                                    <img src="storage/images/bahan/{{ $item['image'] }}" alt="" class="w-[50px] h-[50px] rounded-lg">
                                    <span class="pl-3">{{ $item['nama_bahan'] }}</span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @else
                    <li class="list-none px-4 py-3">Bahan tidak ditemukan</li>
                @endif

                </div>
            </div>
        @endif
    </div>
</div>

{{-- <div class="relative mb-4 flex w-full flex-wrap items-stretch">
    <input
        type="search"
        class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l-lg border border-solid border-[#C1C1C1] bg-gray bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-gray-800 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:ring-primary focus:text-gray-800 focus:outline-none"
        placeholder="Cari bahan"
        aria-label="Search"
        aria-describedby="button-addon1" 
        wire:model.debounce.300ms="keyword"
        wire:keydown.enter="searchResults"/>

    <button
        wire.click="searchResults"
        class="relative z-[2] flex items-center rounded-r-lg bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-gradient-to-r from-[#FFB03E] to-[#F67356] hover:shadow-lg focus:bg-gradient-to-r from-[#FFB03E] to-[#F67356] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gradient-to-r from-[#FFB03E] to-[#F67356] active:shadow-lg"
        type="button"
        id="button-addon1"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="h-5 w-5">
        <path
            fill-rule="evenodd"
            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
            clip-rule="evenodd" />
        </svg>
    </button>

    <div class="relative">
        <div class="wire:loading.delay absolute top-100 mt-1 w-full border bg-gray shadow-lg rounded-lg z-10">
        @if(isset($searchResults) && !empty($keyword))
        <div class="absolute top-100 mt-1 w-full border bg-gray shadow-lg rounded-lg z-10">
            <div class="p-3">
            @if ($searchResults->count() > 0)
            <div class="divide-y" x-ref="list">
                @foreach ($searchResults as $key => $searchResult)
                <a href="#">
                    <span>{{ $searchResult->nama_bahan }}</span>
                </a>
                @endforeach
            </div>
            @elseif($searchResults->count() == 0)
                <a href="#">
                    <span>No results found</span>
                </a>
            @endif
            </div>
        </div>
        @endif
        </div>
    </div>
</div> --}}

