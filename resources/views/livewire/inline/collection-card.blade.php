<div class="px-2 py-2 md:w-1/4 lg:w-1/4 sm:w-1/2">
    <div class="h-full rounded-t-2xl overflow-hidden">

        <div class="flex relative">
            <div class="relative py-1 z-10 tracking-widest w-full opacity-100 rounded-2xl">
                <div class="flex items-center py-36 pt-1 pr-2">
                    <div class="lg:ml-auto md:ml-0 ml-auto px-2 my-auto pt-2 bg-white opacity-100 rounded-full justify">
                        <x-slot name="trigger">
                            <x-button-ui label="Options" />
                        </x-slot>
                        <x-dropdown>
                            <x-dropdown.item label="Namai Ulang" />
                            <x-dropdown.item label="Hapus" />
                        </x-dropdown>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <img class="lg:h-48 md:h-48 w-full absolute object-center object-cover inset-0 h-full" src="{{ asset('assets/images/card-image.jpg') }}" alt="blog">
        </div>


        {{-- Title, icon --}}
        <div class="px-3">
            <div class="flex items-center flex-wrap mt-2">
                <h1 class="title-font text-base font-bold text-gray-800">All Collections</h1>
            </div>
        </div>
    </div>
</div>
