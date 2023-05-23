<div x-data>
    @livewire('inline.navbar')
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

    <x-modal name="profile">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <x-forms for="regular" id="username" text="Username" type="text" placeholder="Username, Email"></x-forms>
            <x-forms for="regular" id="password" text="Password" type="password" placeholder="Password"></x-forms>
            <x-button type="regular" :withGradient=false text="Login" class="w-full"></x-button>
            <div class="relative flex items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">OR</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <x-button type="regular" :withGradient=true text="Continue with Google" class="w-full !bg-transparent">
                <x-slot:icon>
                    <svg class="w-6 h-6 basis-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.76 10.77L19.67 10.42H12.23V13.58H16.68C16.4317 14.5443 15.8672 15.3974 15.0767 16.0029C14.2863 16.6084 13.3156 16.9313 12.32 16.92C11.0208 16.9093 9.77254 16.4135 8.81999 15.53C8.35174 15.0685 7.97912 14.5191 7.72344 13.9134C7.46777 13.3077 7.33407 12.6575 7.33 12C7.34511 10.6795 7.86792 9.41544 8.79 8.47002C9.7291 7.58038 10.9764 7.08932 12.27 7.10002C13.3779 7.10855 14.4446 7.52101 15.27 8.26002L17.47 6.00002C16.02 4.70638 14.1432 3.9941 12.2 4.00002C11.131 3.99367 10.0713 4.19793 9.08127 4.60115C8.09125 5.00436 7.19034 5.59863 6.43 6.35002C4.98369 7.8523 4.16827 9.85182 4.15152 11.9371C4.13478 14.0224 4.918 16.0347 6.34 17.56C7.12784 18.3449 8.06422 18.965 9.09441 19.3839C10.1246 19.8029 11.2279 20.0123 12.34 20C13.3484 20.0075 14.3479 19.8102 15.2779 19.42C16.2078 19.0298 17.0488 18.4549 17.75 17.73C19.1259 16.2171 19.8702 14.2347 19.83 12.19C19.8408 11.7156 19.8174 11.2411 19.76 10.77Z" fill="#000000"></path> </g></svg>
                </x-slot:icon>
            </x-button>
            <p class="!mt-2 text-center">
                Don't have an account? 
                <a href="#javascript(void)" class="text-primary font-bold text-base transition hover:underline" @click="ToggleModal();$store.register.ToggleModal()">Register</a>
            </p>
        </form>
    </x-modal>

    <x-footer></x-footer>

</div>
