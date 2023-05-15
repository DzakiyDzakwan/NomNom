<x-dropdown>
    <x-slot name="trigger">
        <x-button type="filter" :with-gradient=false text="Urutkan"/>
    </x-slot>

    <x-dropdown.item label="Populer" />
    <x-dropdown.item separator label="Terbaru" />
    <x-dropdown.item separator label="Terlama" />
</x-dropdown>

{{-- <div x-data="dropdown">
    @if($type == "kategori")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button type="filter" :with-gradient=false text="Kategori"/>
            </x-slot>

            <x-dropdown.item label="Sarapan" />
            <x-dropdown.item separator label="Makan Siang" />
            <x-dropdown.item separator label="Makan malam" />
        </x-dropdown>
    @elseif($type == "subkategori")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button type="filter" :with-gradient=false text="Subkategori"/>
            </x-slot>

            <x-dropdown.item label="Occasion" />
            <x-dropdown.item separator label="Meals" />
            <x-dropdown.item separator label="Cara Memasak" />
        </x-dropdown>
    @elseif($type == "urutkan")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button type="filter" :with-gradient=false text="Urutkan"/>
            </x-slot>

            <x-dropdown.item label="Populer" />
            <x-dropdown.item separator label="Terbaru" />
            <x-dropdown.item separator label="Terlama" />
        </x-dropdown>
    @endif
</div>

@pushOnce('component-script')
<script>
    document.addEventListener('alpine:init', () => 
    {
        Alpine.data('dropdown', () => (
        {
            init() 
            {
            },
        }))
    })
</script>
@endPushOnce --}}
