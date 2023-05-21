<div x-data>
    @livewire('inline.navbar')
    <div class="mt-16 relative">
        @livewire('inline.biodata-section')
    </div>


    <div class="px-32 relative flex py-10">
        <div class="flex">
            <a href="profile" class="text-base font-semibold my-auto mr-10">List Resep</a>
            <x-button type="regular" :with-gradient=false text="Koleksi Tersimpan"></x-button>
        </div>
        <div class="absolute right-32 flex my-auto">
            <p class="text-lg mr-4 font-normal">Tampilkan: </p>
            <x-dropdown>
                <x-slot name="trigger">
                    <x-button type="filter" :with-gradient=false text="Semua Resep" />
                </x-slot>

                <x-dropdown.item label="Some Conclusion" />
                <x-dropdown.item separator label="Some Selection" />
                <x-dropdown.item separator label="Some Sort" />
                <x-dropdown.item separator label="Some Completion" />
            </x-dropdown>
        </div>
    </div>

    <section class="container mx-auto mb-48 px-32">
        <div class="flex flex-wrap -m-4 mb-20">
            @for ($i = 0; $i < 4; $i++)
                @livewire('inline.collection-card')
            @endfor
        </div>
        <div class="absolute right-32 flex my-auto">
            <button class="items-center rounded-full bg-white p-6 outline outline-gray-200 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8">
                    <path fill="#FFB03E"
                        d="M21 7h-2v2h-2V7h-2V5h2V3h2v2h2v2zm-2 14l-7-3l-7 3V5c0-1.1.9-2 2-2h7a5.002 5.002 0 0 0 5 7.9V21z" />
                </svg>
            </button>
        </div>
    </section>
</div>
<x-footer></x-footer>

</div>
