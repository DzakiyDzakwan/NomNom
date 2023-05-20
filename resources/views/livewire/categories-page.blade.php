<div>
    <x-navbar></x-navbar>
    <section class="container px-24 mt-12 mx-auto">
        <div class="mt-24">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center gap-1 text-sm text-gray-600">
                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Home </a>
                    </li>
                    <li class="rtl:rotate-180">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                            />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Kategori </a>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="mt-2 text-gray-800">
            <h1 class="font-bold text-4xl text-center">Resep berdasarkan kategori</h1>
        </div>
    
        <div class="mb-8 mt-8">
            <p class="font-medium text-base text-gray-800 mb-4">Menampilkan <b>33</b> hasil pencarian dengan kategori <b>Breakfast</b>.</p>
            <div class="flex gap-3">
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-button type="filter" :with-gradient=false text="Kategori"/>
                    </x-slot>

                    <x-dropdown.item label="Sarapan" />
                    <x-dropdown.item separator label="Makan siang" />
                    <x-dropdown.item separator label="Makan malam" />
                </x-dropdown>

                <x-dropdown>
                    <x-slot name="trigger">
                        <x-button type="filter" :with-gradient=false text="Subkategori"/>
                    </x-slot>

                    <x-dropdown.item label="Occasion" />
                    <x-dropdown.item separator label="Cuisine" />
                    <x-dropdown.item separator label="Cara memasak" />
                </x-dropdown>

                <x-dropdown>
                    <x-slot name="trigger">
                        <x-button type="filter" :with-gradient=false text="Urutkan"/>
                    </x-slot>

                    <x-dropdown.item label="Populer" />
                    <x-dropdown.item separator label="Terbaru" />
                    <x-dropdown.item separator label="Terlama" />
                </x-dropdown>
            </div>
        </div>
        
        <div class="flex flex-wrap -m-4">
            @for ($i = 0; $i < 8; $i++) @livewire('inline.card') @endfor
        </div>

        <div class="mb-10">
            @livewire('pagination')
        </div>
    </section>
    <x-footer></x-footer>
</div>
