<div x-data="navbar">
    <nav class="fixed inset-0 z-20 p-5 bg-white shadow-xl md:flex md:items-center md:justify-between h-[72px]">
        <div class="flex justify-between items-center ">
            <span class="text-2xl cursor-pointer">
                <img class="h-10 inline md:w-[121px] md:h-[46px]" src="{{ asset('assets/images/logo/logo3.png') }}">
            </span>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <button id="dropdownOffsetButton" data-dropdown-toggle="dropdownOffset" data-dropdown-offset-distance="10" data-dropdown-offset-skidding="100" data-dropdown-placement="left" class="font-semibold text-base text-[#252525] duration-500" @click="OpenDropdown" >Kategori</button>
                <div id="dropdownOffset" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute mt-6 " x-show="open" @click.outside="open = false" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
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
                                <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-plain border border-main text-black text-sm focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5 rounded-lg" placeholder="Cari resep..." required x-model="counter">
                        </div>
                    </form>
                </a>
            </li>
            <button class="bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 mx-2 hover:bg-cyan-500 rounded-[50px] w-[102px] h-[40px] " @click="$store.register.ToggleModal()">
                Masuk
            </button>
        </ul>
    </nav>
</div>

@push('component-script')
<script>
    // function Menu(e){
    //     let list = document.querySelector('ul');
    //     e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    // }

    // window.addEventListener('DOMContentLoaded', () => 
    // {
    //     const menuBtn = document.querySelector('#dropdownOffsetButton')
    //     const dropdown = document.querySelector('#dropdownOffset')
        
    //     menuBtn.addEventListener('click', () => {
    //         /* if(dropdown.classList.contains('hidden')){
    //             dropdown.classList.remove('hidden');
    //             dropdown.classList.add('flex');
    //         }else{
    //             dropdown.classList.remove('flex')
    //             dropdown.classList.add('hidden')
    //         } */
    //         dropdown.classList.toggle('hidden')
    //         // dropdown.classList.toggle('flex')
    //     })
    // })

    document.addEventListener('alpine:init', () =>
    {
        Alpine.data('navbar', () => (
        {
            open: false,
            OpenDropdown()
            {
                this.open = true;
            },

            counter: @entangle('counter').defer,

            init()
            {
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