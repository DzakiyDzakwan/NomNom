<div x-data>
    <x-navbar></x-navbar>
    <div class="mt-16 relative">
    @livewire('inline.biodata-section')
    </div>


    <div class="px-32 relative flex py-10">
        <div class="flex">
            <x-button type="regular" :with-gradient=false text="List Resep"></x-button>
            <a href="saved-collections" class="ml-10 text-base font-semibold my-auto">Koleksi Tersimpan</a>
        </div>
        <div class="absolute right-32 flex my-auto">
            <p class="text-lg mr-4 font-normal">Tampilkan: </p>
            <x-dropdown>
                <x-slot name="trigger">
                    <x-button type="filter" :with-gradient=false text="Semua Resep"/>
                </x-slot>
            
                <x-dropdown.item label="Some Conclusion" />
                <x-dropdown.item separator label="Some Selection" />
                <x-dropdown.item separator label="Some Sort" />
                <x-dropdown.item separator label="Some Completion" />
            </x-dropdown>
        </div>
    </div>

    <section class="container px-10 mx-auto mb-14">
        <div class="flex flex-wrap -m-4">
            @for ($i = 0; $i < 8; $i++) @livewire('inline.card') @endfor
        </div>
    </section>

    <x-footer></x-footer>
    
</div>
