<div class="flex relative sm:items-center w-full">
    <div class="h-full w-8 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
    </div>
    <div class="flex-shrink-0 w-8 h-8 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#FFB03E] text-white relative z-10 title-font font-semibold text-lg">{{ $data->urutan }}</div>
    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
        @if ($data->image)
            <div class="flex-shrink-0 w-[250px] h-[250px] inline-flex items-center justify-center">
                <img class="object-center rounded-xl object-cover" src="{{asset('/storage/images/tahap/'.$data->image)}}" alt="blog">
            </div>
        @endif
        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            {{-- <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Shooting Stars</h2> --}}
            <p class="leading-relaxed">{{ $data->deskripsi }}</p>
            <span class="inline-flex items-center justify-center rounded-full bg-orange-100 px-3 py-1 text-[#FFB03E] mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <p class="pl-2 whitespace-nowrap text-md font-semibold">{{ $data->durasi }}</p>
            </span>
        </div>
    </div>
</div>