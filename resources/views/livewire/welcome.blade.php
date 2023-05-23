<div>
    <div class="bg-[url('../../public/assets/images/bg-hero.jpg')] bg-no-repeat bg-contain">
        @livewire('inline.navbar')

        <section class="text-gray-600 pt-[86px] mb-12">
            <div class="container mx-auto flex px-24 md:flex-row flex-col items-center relative">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-[5rem] items-center text-center mt-12">
                    <h1 class="font-bold sm:text-5xl text-5xl mb-8 text-gray-900">Masak Apa Hari Ini?</h1>
                    <p class="mb-6 leading-relaxed text-base font-medium max-w-3xl">Temukan resep yang kamu inginkan
                        berdasarkan kategori yang disediakan atau bahan yang kamu miliki serta buat resep versimu
                        sendiri dan posting agar dapat dilihat oleh banyak orang! <br> Semua itu dapat kamu lakukan di
                        NomNom.</p>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative">
                            <input type="text" id="simple-search" class="bg-transparent backdrop-blur-sm text-main border border-main shadow-sm text-base font-medium focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5 rounded-lg" placeholder="Cari Resep..." required>
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
                <div class="w-[553px] h-[550px] hover:scale-105 transition ease-in-out duration-1000 mt-[12px]">
                    <img class="object-cover object-center drop-shadow-xl" alt="hero" src="{{ asset('assets/images/hero.png') }}">
                </div>
            </div>
        </section>

        <section class="container px-24 mx-auto text-gray-600 body-font mt-12">
            @livewire('inline.category-card')
        </section>
    </div>

    <div class="text-center mt-9">
        <a href="categories">
        <x-button type="rounded" :with-gradient=true text="Lihat Lainnya"></x-button>
        </a>
    </div>

    <div class="flex flex-col text-center w-full mt-12">
        <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900">Rekomendasi Resep</h1>
    </div>

    <section class="container px-24 mt-6 mx-auto">
        {{-- <div class="mb-8">
            @livewire('inline.filter-button')
        </div> --}}

        <div class="flex flex-wrap -m-4">
            @foreach ($resep as $item)
            @livewire('inline.card', ['data' => $item], key($item->id))
            @endforeach
        </div>
    </section>

    <div class="text-center mt-9">
        <a href="ingredients">
        <x-button type="rounded" :with-gradient=true text="Lihat Lainnya"></x-button>
        </a>
    </div>

    @livewire('inline.faq')
    @guest
    <button @click="$store.login.ToggleModal()"
        class="group fixed bottom-8 right-8 z-50 inline-flex items-center overflow-hidden rounded-full bg-primary p-6 text-white focus:outline-none focus:ring active:bg-secondary">
        <span class="absolute -end-[150%] transition-all ease-in-out duration-500 group-hover:end-4">Buat Resep</span>
        <span class="text-sm font-medium group-hover:me-24 transition-all ease-in-out duration-500">
            <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g id="Edit / Add_To_Queue">
                        <path id="Vector" d="M3 9V19.4C3 19.9601 3 20.2399 3.10899 20.4538C3.20487 20.642 3.35774 20.7952 3.5459 20.8911C3.7596 21 4.0395 21 4.59846 21H15.0001M14 13V10M14 10V7M14 10H11M14 10H17M7 13.8002V6.2002C7 5.08009 7 4.51962 7.21799 4.0918C7.40973 3.71547 7.71547 3.40973 8.0918 3.21799C8.51962 3 9.08009 3 10.2002 3H17.8002C18.9203 3 19.4801 3 19.9079 3.21799C20.2842 3.40973 20.5905 3.71547 20.7822 4.0918C21.0002 4.51962 21.0002 5.07969 21.0002 6.19978L21.0002 13.7998C21.0002 14.9199 21.0002 15.48 20.7822 15.9078C20.5905 16.2841 20.2842 16.5905 19.9079 16.7822C19.4805 17 18.9215 17 17.8036 17H10.1969C9.07899 17 8.5192 17 8.0918 16.7822C7.71547 16.5905 7.40973 16.2842 7.21799 15.9079C7 15.4801 7 14.9203 7 13.8002Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </g>
            </svg>
        </span>
    </button>
    @endguest
    @auth
    <button
        class="group fixed bottom-8 right-8 z-50 inline-flex items-center overflow-hidden rounded-full bg-primary p-6 text-white focus:outline-none focus:ring active:bg-secondary">
        <span class="absolute -end-[150%] transition-all ease-in-out duration-500 group-hover:end-4">
            <a href="/create-recipe">
                Buat Resep
            </a>
        </span>
        <span class="text-sm font-medium group-hover:me-24 transition-all ease-in-out duration-500">
            <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g id="Edit / Add_To_Queue">
                        <path id="Vector" d="M3 9V19.4C3 19.9601 3 20.2399 3.10899 20.4538C3.20487 20.642 3.35774 20.7952 3.5459 20.8911C3.7596 21 4.0395 21 4.59846 21H15.0001M14 13V10M14 10V7M14 10H11M14 10H17M7 13.8002V6.2002C7 5.08009 7 4.51962 7.21799 4.0918C7.40973 3.71547 7.71547 3.40973 8.0918 3.21799C8.51962 3 9.08009 3 10.2002 3H17.8002C18.9203 3 19.4801 3 19.9079 3.21799C20.2842 3.40973 20.5905 3.71547 20.7822 4.0918C21.0002 4.51962 21.0002 5.07969 21.0002 6.19978L21.0002 13.7998C21.0002 14.9199 21.0002 15.48 20.7822 15.9078C20.5905 16.2841 20.2842 16.5905 19.9079 16.7822C19.4805 17 18.9215 17 17.8036 17H10.1969C9.07899 17 8.5192 17 8.0918 16.7822C7.71547 16.5905 7.40973 16.2842 7.21799 15.9079C7 15.4801 7 14.9203 7 13.8002Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </g>
            </svg>
        </span>
    </button>
    @endauth
</div>