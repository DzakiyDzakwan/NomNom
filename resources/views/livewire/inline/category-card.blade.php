<div class="">
    <div class="flex flex-col text-center w-full mb-6">
        <h1 class="sm:text-3xl text-2xl font-bold title-font text-gray-900">Kategori</h1>
    </div>
    <div class="flex flex-wrap -m-4">
        @foreach ($kategori as $item)
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 p-4 bg-base-100 px-2 py-2 ">
                <div class="flex relative">
                    <img alt="gallery" class="absolute rounded-2xl h-full w-full object-cover"
                        src="/storage/images/kategori/{{ $item->image }}">
                    <div
                        class="rounded-2xl px-8 bottom-0 left-0 right-0 py-20 relative z-10 w-full h-[200px] bg-gray-800 opacity-60 cursor-pointer">
                        <h1 class="text-xl font-semibold text-white text-center shadow-lg">{{ $item->nama_kategori }}
                        </h1>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 p-4 bg-base-100 px-2 py-2">
            <div class="flex relative">
                <img alt="gallery" class="absolute rounded-2xl h-full w-full object-cover"
                    src="{{ asset('assets/images/lunch.jpg') }}">
                <div
                    class="rounded-2xl px-8 bottom-0 left-0 right-0 py-20 relative z-10 w-full h-[200px] bg-gray-800 opacity-60">
                    <h1 class="text-xl font-semibold text-white text-center shadow-lg">Makan Siang</h1>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 p-4 bg-base-100 px-2 py-2">
            <div class="flex relative">
                <img alt="gallery" class="absolute rounded-2xl h-full w-full object-cover"
                    src="{{ asset('assets/images/dinner.jpg') }}">
                <div
                    class="rounded-2xl px-8 bottom-0 left-0 right-0 py-20 relative z-10 w-full h-[200px] bg-gray-800 opacity-60">
                    <h1 class="text-xl font-semibold text-white text-center shadow-lg">Makan Malam</h1>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 p-4 bg-base-100 px-2 py-2">
            <div class="flex relative">
                <img alt="gallery" class="absolute rounded-2xl h-full w-full object-cover"
                    src="{{ asset('assets/images/ramadhan.jpg') }}">
                <div
                    class="rounded-2xl px-8 bottom-0 left-0 right-0 py-20 relative z-10 w-full h-[200px] bg-gray-800 opacity-60">
                    <h1 class="text-xl font-semibold text-white text-center shadow-lg">Ramadhan</h1>
                </div>
            </div>
        </div> --}}
    </div>
</div>
