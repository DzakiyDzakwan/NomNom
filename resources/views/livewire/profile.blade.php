<div x-data>
    @livewire('inline.navbar')
    <div class="mt-20 relative">
        @livewire('inline.biodata-section')
    </div>

    <div class="px-32 relative flex py-10">
        <div class="flex">
            <div class="group relative block h-full w-fit mx-auto before:absolute before:inset-0 before:rounded before:border-4 before:border-dotted before:border-primary">
                <button class="px-6 py-2 rounded text-md font-bold text-main border-none bg-primary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition">List Resep</button>
            </div>
            <a href="saved-collections" class="ml-10 text-base font-semibold my-auto">Koleksi Tersimpan</a>
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

    <section class="container px-32 mx-auto mb-16 ">
        <div class="flex flex-wrap -m-4">
            @foreach ($resep as $item)
                @livewire('inline.card', ['data' => $item], key($item->id))
            @endforeach
        </div>
    </section>

</div>
