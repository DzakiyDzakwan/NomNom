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

        @livewire('inline.search-bahan')

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
