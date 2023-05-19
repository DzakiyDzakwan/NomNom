<div x-data="dropdown">
    @if($type == "urutkan")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button label="{{ $text }}" primary />
            </x-slot>
        
            <x-dropdown.item label="Populer" />
            <x-dropdown.item separator label="Terbaru" />
            <x-dropdown.item separator label="Terlama" />
        </x-dropdown>
    @elseif($type == "kategori")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button label="{{ $text }}" primary />
            </x-slot>
        
            <x-dropdown.item label="Sarapan" />
            <x-dropdown.item separator label="Makan malam" />
            <x-dropdown.item separator label="Makan siang" />
        </x-dropdown>
    @elseif($type == "subkategori")
        <x-dropdown>
            <x-slot name="trigger">
                <x-button label="{{ $text }}" primary />
            </x-slot>
        
            <x-dropdown.item label="Occasion" />
            <x-dropdown.item separator label="Cuisine" />
            <x-dropdown.item separator label="Cara memasak" />
        </x-dropdown>
    @endif
</div>

@pushOnce('component-script')
<script>
    document.addEventListener('alpine:init', () => 
    {
        Alpine.data('dropdowns', () => (
        {
            init() 
            {
            },
        }))
    })
</script>
@endPushOnce