<div>
    <div class="bg-[url('../../public/assets/images/bg-hero.jpg')] bg-no-repeat bg-contain">
        {{-- @livewire('navbar', ['counter' => $counter]) --}}
        <x-navbar></x-navbar>
        
        <section class="text-gray-600 mt-[52px] mb-12">
            <div class="container mx-auto flex px-10 pt-8 md:flex-row flex-col items-center relative">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-[5rem] items-center text-center">
                    <h1 class="font-bold sm:text-5xl text-5xl mb-8 text-gray-900">Masak Apa Hari Ini?</h1>
                    <p class="mb-6 leading-relaxed text-base font-medium max-w-3xl">Temukan resep yang kamu inginkan berdasarkan kategori yang disediakan atau bahan yang kamu miliki serta buat resep versimu sendiri dan posting agar dapat dilihat oleh banyak orang! <br> Semua itu dapat kamu lakukan di NomNom.</p>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative">
                            <input type="text" id="simple-search" class="w-full bg-transparent backdrop-blur-sm text-[#616161] border border-[#838383] shadow-sm text-gray-800 text-base font-medium focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5 rounded-lg" placeholder="Cari Resep..." required>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </form>
                    {{-- <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> --}}
                </div>
                <div class="w-[553px] h-[550px] w-1/2 w-5/6">
                    <img class="object-cover object-center drop-shadow-xl" alt="hero" src="{{ asset('assets/images/hero.png') }}">
                </div>
            </div>
        </section>
        
        <section class="container px-10 mx-auto text-gray-600 body-font mt-12">
            @livewire('inline.category-card')
        </section>
    </div>

    <div class="text-center mt-9">
        <x-button type="rounded" :with-gradient=true text="Lihat Lainnya"></x-button>
    </div>

    <div class="flex flex-col text-center w-full mt-12">
        <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900">Rekomendasi Resep</h1>
    </div>

    <section class="container px-10 mt-6 mx-auto">
        <div class="mb-8">
            @livewire('inline.filter-button')
        </div>
        
        <div class="flex flex-wrap -m-4">
            @for ($i = 0; $i < 8; $i++) @livewire('inline.card') @endfor
        </div>
    </section>

    @livewire('pagination')

    <div class="text-center mt-9 mx-[35rem]">
        <x-button type="regular" :with-gradient=false text="Lihat Lainnya"></x-button>
    </div>

    @livewire('inline.faq')

    <div class="container mb-12 px-14 flex flex-wrap text-gray-800 body-font">
        @for ($i = 0; $i < 3; $i++) @livewire('inline.step') @endfor
    </div>

    {{-- @livewire('footer') --}}
    <x-footer></x-footer>

    <x-modal name="login">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <x-forms for="input" id="username" text="Username" type="text" placeholder="Username, Email"></x-forms>
            <x-forms for="input" id="password" text="Password" type="password" placeholder="Password"></x-forms>
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

    <x-modal name="register" :counter="$counter">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <x-forms for="input" id="username" text="Username" type="text" placeholder="Username"></x-forms>
            <x-forms for="input" id="email" text="Email" type="email" placeholder="Email"></x-forms>
            <x-forms for="input" id="password" text="Password" type="password" placeholder="Password"></x-forms>
            <x-button type="regular" :withGradient=false text="Register" class="w-full"></x-button>
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
                Already have an account? 
                <a href="#javascript(void)" class="text-primary font-bold text-base transition hover:underline" @click="ToggleModal();$store.login.ToggleModal()">Login</a>
            </p>
        </form>
    </x-modal>
</div>