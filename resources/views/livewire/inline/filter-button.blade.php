<div class="container px-20 py-8 mx-auto">
    <x-dropdown>
        <x-slot name="trigger">
            <x-button label="Urutkan" sm right-icon="chevron-down" class="text-gray-800 rounded-full border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white active:bg-yellow-600 font-medium text-xl px-2 outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-50"/>
        </x-slot>
    
        <x-dropdown.item label="Populer" />
        <x-dropdown.item separator label="Terbaru" />
        <x-dropdown.item separator label="Terlama" />
    </x-dropdown>
</div>