<x-dropdown>
    <x-slot name="trigger">
        @if ($label)
            <x-button type="filter" :with-gradient=false text="{{ $label }}" />
        @else
            <x-button type="filter" :with-gradient=false text="Sub Kategori" />
        @endif
    </x-slot>

    @foreach ($subkategori as $item)
        <x-dropdown.item class="hover:bg-[#FFB03E] hover:text-white" wire:click="update(`{{ $item->id }}`)"
            label="{{ $item->nama_sub_kategori }}" />
    @endforeach
</x-dropdown>
