<section class="text-gray-600 mt-[72px] mb-12">
    <div class="container mx-auto flex px-10 pt-8 md:flex-row flex-col items-center relative">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-[5rem] items-center text-center">
            <h1 class="font-bold sm:text-5xl text-5xl mb-8 text-gray-900">Masak Apa Hari Ini?</h1>
            <p class="mb-6 leading-relaxed text-base font-medium max-w-3xl">Temukan resep yang kamu inginkan berdasarkan kategori yang disediakan atau bahan yang kamu miliki serta buat resep versimu sendiri dan posting agar dapat dilihat oleh banyak orang! <br> Semua itu dapat kamu lakukan di NomNom.</p>
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="w-full bg-[#F3F3F3] text-[#616161] border border-[#C1C1C1] shadow-sm text-gray-800 text-base font-medium focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5 rounded-lg" placeholder="Cari Resep..." required>
                </div>
            </form>
            {{-- <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
            <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> --}}
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 absolute -right-[10rem]">
            <img class="object-cover object-center" alt="hero" src="{{ asset('assets/images/hero.png') }}">
        </div>
    </div>
</section>