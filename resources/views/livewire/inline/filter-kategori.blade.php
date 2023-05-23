<x-dropdown>
    <x-slot name="trigger">
        @if ($label)
            <x-button type="filter" :with-gradient=false text="{{ $label }}" />
        @else
            <x-button type="filter" :with-gradient=false text="Kategori" />
        @endif
    </x-slot>
    @if (!empty($kategori))
        @foreach ($kategori as $item)
            <x-dropdown.item class="hover:bg-[#FFB03E] hover:text-white" wire:click="update(`{{ $item['id'] }}`)"
                label="{{ $item['nama_kategori'] }}" />
        @endforeach
    @else
        <x-dropdown.item label="-" />
    @endif
</x-dropdown>
