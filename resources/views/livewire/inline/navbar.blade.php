<div x-data="navbar">
    <nav class="fixed inset-0 z-20 py-5 px-32 bg-white shadow-xl md:flex md:items-center md:justify-between h-[72px]">
        <div class="flex justify-between items-center ">
            <span class="text-2xl cursor-pointer">
                <img class="h-10 inline md:w-[121px] md:h-[46px]" src="{{ asset('assets/images/logo/logo3.png') }}">
            </span>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul
            class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset"
                    data-dropdown-offset-distance="10" data-dropdown-offset-skidding="100"
                    data-dropdown-placement="left" class="font-semibold text-base text-[#252525] duration-500"
                    @click="OpenDropdown">Kategori</button>
                <div id="dropdownOffset"
                    class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute mt-6 "
                    x-show="open" @click.outside="open = false" x-cloak
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="font-semibold text-base text-[#252525] duration-500">Jenis Makanan</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="font-semibold text-base text-[#252525] duration-500">Bahan</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-plain border border-main text-black text-sm focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5 rounded-lg"
                                placeholder="Cari resep..." required>
                        </div>
                    </form>
                </a>
            </li>
            @guest
                <button
                    class="bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 mx-2 hover:bg-cyan-500 rounded-[50px] w-[102px] h-[40px] "
                    @click="$store.register.ToggleModal()">
                    Masuk
                </button>
            @endguest
            @auth
                <img class="w-[48px] rounded-full mx-2" src="{{ asset('assets/images/2.jpg') }}" alt="">
                <x-button wire:click="logout" type="regular" :withGradient=false text="Log out" class="w-full"></x-button>
            @endauth
        </ul>
    </nav>

    {{-- Modal Register --}}
    <x-modal name="register">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button
                class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end"
                @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form wire:submit.prevent="register" class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <div>
                <label for="username"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" wire:model.defer="username"
                    class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('username')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" wire:model.defer="email"
                    class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('email')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div>
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" wire:model.defer="password"
                    class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <x-button type="regular" :withGradient=false text="Register" class="w-full">
            </x-button>
            {{-- Alpine Js Component  --}}
            {{--  <x-forms wire:model.prevent="username" for="regular" id="username" text="Username" type="text"
                placeholder="Username" :key="1"></x-forms>
            <x-forms for="regular" id="email" text="Email" type="email" placeholder="Email"></x-forms>
            <x-forms for="regular" id="password" text="Password" type="password" placeholder="Password">
            </x-forms>
            <x-button type="regular" :withGradient=false text="Register" class="w-full">
            </x-button> --}}
            {{-- <div class="relative flex items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">OR</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <x-button type="regular" :withGradient=true text="Continue with Google" class="w-full !bg-transparent">
                <x-slot:icon>
                    <svg class="w-6 h-6 basis-6" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M19.76 10.77L19.67 10.42H12.23V13.58H16.68C16.4317 14.5443 15.8672 15.3974 15.0767 16.0029C14.2863 16.6084 13.3156 16.9313 12.32 16.92C11.0208 16.9093 9.77254 16.4135 8.81999 15.53C8.35174 15.0685 7.97912 14.5191 7.72344 13.9134C7.46777 13.3077 7.33407 12.6575 7.33 12C7.34511 10.6795 7.86792 9.41544 8.79 8.47002C9.7291 7.58038 10.9764 7.08932 12.27 7.10002C13.3779 7.10855 14.4446 7.52101 15.27 8.26002L17.47 6.00002C16.02 4.70638 14.1432 3.9941 12.2 4.00002C11.131 3.99367 10.0713 4.19793 9.08127 4.60115C8.09125 5.00436 7.19034 5.59863 6.43 6.35002C4.98369 7.8523 4.16827 9.85182 4.15152 11.9371C4.13478 14.0224 4.918 16.0347 6.34 17.56C7.12784 18.3449 8.06422 18.965 9.09441 19.3839C10.1246 19.8029 11.2279 20.0123 12.34 20C13.3484 20.0075 14.3479 19.8102 15.2779 19.42C16.2078 19.0298 17.0488 18.4549 17.75 17.73C19.1259 16.2171 19.8702 14.2347 19.83 12.19C19.8408 11.7156 19.8174 11.2411 19.76 10.77Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                </x-slot:icon>
            </x-button> --}}
            <p class="!mt-2 text-center">
                Already have an account?
                <a class="text-primary font-bold text-base transition cursor-pointer hover:underline"
                    @click="ToggleModal();$store.login.ToggleModal()">Login</a>
            </p>
        </form>
    </x-modal>

    {{-- Modal Login --}}
    <x-modal name="login">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button
                class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end"
                @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo"
                class="w-40 md:w-36">
        </div>
        <form wire:submit.prevent="login" class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <x-forms wire:model.defer="username" for="regular" id="username" text="Username" type="text"
                placeholder="Username, Email">
            </x-forms>
            <x-forms wire:model.defer="password" for="regular" id="password" text="Password" type="password"
                placeholder="Password">
            </x-forms>
            <x-button type="regular" :withGradient=false text="Login" class="w-full"></x-button>
            {{-- <div class="relative flex items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">OR</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <x-button type="regular" :withGradient=true text="Continue with Google" class="w-full !bg-transparent">
                <x-slot:icon>
                    <svg class="w-6 h-6 basis-6" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M19.76 10.77L19.67 10.42H12.23V13.58H16.68C16.4317 14.5443 15.8672 15.3974 15.0767 16.0029C14.2863 16.6084 13.3156 16.9313 12.32 16.92C11.0208 16.9093 9.77254 16.4135 8.81999 15.53C8.35174 15.0685 7.97912 14.5191 7.72344 13.9134C7.46777 13.3077 7.33407 12.6575 7.33 12C7.34511 10.6795 7.86792 9.41544 8.79 8.47002C9.7291 7.58038 10.9764 7.08932 12.27 7.10002C13.3779 7.10855 14.4446 7.52101 15.27 8.26002L17.47 6.00002C16.02 4.70638 14.1432 3.9941 12.2 4.00002C11.131 3.99367 10.0713 4.19793 9.08127 4.60115C8.09125 5.00436 7.19034 5.59863 6.43 6.35002C4.98369 7.8523 4.16827 9.85182 4.15152 11.9371C4.13478 14.0224 4.918 16.0347 6.34 17.56C7.12784 18.3449 8.06422 18.965 9.09441 19.3839C10.1246 19.8029 11.2279 20.0123 12.34 20C13.3484 20.0075 14.3479 19.8102 15.2779 19.42C16.2078 19.0298 17.0488 18.4549 17.75 17.73C19.1259 16.2171 19.8702 14.2347 19.83 12.19C19.8408 11.7156 19.8174 11.2411 19.76 10.77Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                </x-slot:icon>
            </x-button> --}}
            <p class="!mt-2 text-center">
                Don't have an account?
                <a class="text-primary font-bold text-base transition cursor-pointer hover:underline"
                    @click="ToggleModal();$store.register.ToggleModal()">Register</a>
            </p>
        </form>
    </x-modal>

</div>

@push('component-script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                open: false,
                OpenDropdown() {
                    this.open = true;
                },

                /* counter: @entangle('counter').defer, */

                init() {
                    // this.$nextTick(() => 
                    // { 
                    //     this.counter = 1000 
                    // })
                },

                // Increment()
                // {
                //     this.counter++,
                //     Livewire.emit('ShowDD')
                // }
            }))
        })
    </script>
@endpush