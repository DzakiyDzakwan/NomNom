<div>
    @livewire('inline.navbar')
    <section class="container px-24 mt-12 mx-auto">
        <div class="mt-24">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center gap-1 text-sm text-gray-600">
                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Home </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Bahan </a>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="bg-white-100 mt-10 shadow-xl rounded-2xl px-5 py-6 text-gray-800">
            <h1 class="font-bold text-2xl">Resep berdasarkan bahan masakan.</h1>
            <p class="font-medium text-base pt-1.5">Kombinasikan bahan masakan yang kamu miliki dan temukan resep yang
                tepat.</p>
        </div>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 mt-12">
            <div class="">
                @livewire('inline.search-bahan')
            </div>
            <div class="border border-2 border-[#FFB03E] rounded-2xl px-3.5 py-3.5">
                <p class="font-semibold text-base text-gray-800 mb-2.5">Bahan yang dipilih:</p>

                <a class="inline-flex items-center gap-1 rounded-full border-2 border-[#FFB03E] bg-transparent px-2 py-0.5 text-base font-medium text-gray-800 transition-colors hover:bg-[#FFB03E] hover:text-white focus:outline-none focus:ring active:opacity-75"
                    href="#" rel="noreferrer">
                    Telur
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="mb-8 mt-12">
            <p class="font-medium text-base pt-1.5 text-gray-800 mb-5">Menampilkan <b>33</b> hasil pencarian berdasarkan
                bahan yang dipilih</p>
            @livewire('inline.filter-button')
        </div>

        <div class="flex flex-wrap -m-4">
            @foreach ($resep as $item)
                @livewire('inline.card', ['data' => $item], key($item->id))
            @endforeach
        </div>

        <div class="mb-10">
            @livewire('pagination')
        </div>
    </section>
    <x-footer></x-footer>
</div>
