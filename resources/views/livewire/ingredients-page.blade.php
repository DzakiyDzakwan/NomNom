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
                        <a href="#" class="block transition hover:text-gray-700"> Bahan </a>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="bg-white mt-10 shadow-xl rounded-2xl px-5 py-6 text-gray-800">
            <h1 class="font-bold text-2xl">Resep berdasarkan bahan masakan.</h1>
            <p class="font-medium text-base pt-1.5">Kombinasikan bahan masakan yang kamu miliki dan temukan resep yang
                tepat.</p>
        </div>

        <div class="mt-8">
            @livewire('inline.search-bahan')
        </div>

        <div class="">
            <p class="font-medium text-base pt-1.5 text-gray-800 mb-5">Menampilkan <b>33</b> hasil pencarian berdasarkan
                bahan yang dipilih</p>
            @livewire('inline.filter-button')
        </div>

        <div class="my-8 flex flex-wrap ">
            @foreach ($resep as $item)
                @livewire('inline.card', ['data' => $item], key($item->id))
            @endforeach
        </div>

        <div class="my-8">
            {{ $resep->links() }}
        </div>
    </section>
</div>
