<div>
    <div class="bg-[url('../../public/assets/images/bg-hero.jpg')] bg-no-repeat bg-top">
        @livewire('navbar', ['counter' => $counter])
        @livewire('inline.hero-section')
    </div>

    <section class="container px-10 mx-auto text-gray-600 body-font mt-12">
        @livewire('inline.category-card')
    </section>

    <div class="text-center mt-9">
        <x-button type="rounded" :with-gradient=true text="Lihat Lainnya"></x-button>
    </div>

    <div class="flex flex-col text-center w-full mt-12">
        <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900">Rekomendasi Resep</h1>
    </div>

    <section class="container px-10 mt-6 mx-auto">
        <div class="flex flex-wrap -m-4">
            @for ($i = 0; $i < 8; $i++) 
                @livewire('inline.card') 
            @endfor 
        </div>
    </section>

    <div class="text-center mt-9">
        <x-button type="regular" :with-gradient=false text="Lihat Lainnya"></x-button>
    </div>

    @livewire('inline.faq')

    @livewire('footer')

    {{-- <x-modal name="register">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 py-5 md:px-4 text-center">
            <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-model="model" x-on:keyup="$wire.ShowDD().then(result => console.log(result))">
            <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-on:keyup="SetModel()">
        </form>
    </x-modal> --}}

    <x-modal name="login" :counter="$counter">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 py-5 md:px-4 text-center">
            {{-- <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-model="model" x-on:keyup="$wire.ShowDD().then(result => console.log(result))"> --}}
            <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-on:keyup="SetModel()">
        </form>
    </x-modal>
</div>