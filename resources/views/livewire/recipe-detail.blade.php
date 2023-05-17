<div>
    @livewire('navbar', ['counter' => $counter])

    <section class="text-gray-600 mt-[72px] px-8 pt-8 mb-4">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="flex items-center gap-1 text-sm text-gray-600">
                <li>
                    <a href="#" class="block transition hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                </li>

                <li class="rtl:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>

                <li>
                    <a href="#" class="block transition hover:text-gray-700"> Recipe Detail </a>
                </li>
            </ol>
        </nav>
    </section>

    <div class="container flex flex-col md:flex-row gap-8 mx-auto bg-primary opacity-100 h-screen md:h-[32rem] rounded">
        <div class="container h-3/4 md:basis-2/5 md:ml-4 md:pl-6 md:py-8">
            <img alt="gallery" class="h-full w-full rounded-md" src="{{ asset('assets/images/sarapan.jpg') }}">
        </div>

        <div class="py-6 basis-3/5 pr-6 mr-4">
            <h3 class="text-2xl font-bold">CATEGORY</h3>
            <h1 class="text-5xl font-serif text-plain">Ikan Gulai Kukus</h1>

            <div class="flex justify-between mt-4">
                <h4 class="text-sm font-semibold text-plain">Recipe by: Bu Ida</h4>

                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>First star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Second star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Third star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Fourth star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Fifth star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">4.95 out of 5</p>
                </div>
            </div>

            <div class="flex gap-x-8 justify-around border-y border-main px-6 py-4 mt-6">
                <span>
                    Course : Dinner
                </span>
                <hr class="h-auto border-main border -skew-x-12">
                <span>
                    Cuisine : French
                </span>
                <hr class="h-auto border-main border -skew-x-12">
                <span>
                    Difficulty : Easy
                </span>
            </div>

            <div class="flex mt-6 space-x-4 items-center">
                <svg fill="#000000" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path d="M314.801,290.806l-34.999-34.998l25.837-25.837c14.577,9.805,31.487,14.722,48.404,14.722 c22.222,0,44.444-8.458,61.36-25.375l96.599-96.599l-23.609-23.609l-74.721,74.721l-9.428-9.428l74.721-74.721l-23.609-23.61 l-74.721,74.721l-9.429-9.429l74.721-74.721l-23.609-23.609l-74.721,74.721l-9.429-9.429l74.721-74.721L389.282,0l-96.599,96.598 c-16.39,16.39-25.416,38.181-25.416,61.36c0,12.172,2.512,23.952,7.251,34.779l-89.307-89.307 c-35.535-35.535-86.43-52.353-136.136-44.984c-11.936,1.768-21.702,9.984-25.487,21.441c-3.785,11.456-0.837,23.875,7.695,32.406 l172.408,172.408l-6.53,6.53l-28.805-28.806L0.001,430.781l81.221,81.221l168.354-168.354l-28.806-28.806l35.423-35.423 l34.999,34.999l-28.806,28.806L430.74,511.577l81.219-81.221L343.607,262.001L314.801,290.806z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="font-bold">Servings</span>
                <span class="inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
                    <button class="inline-block px-6 py-2 text-sm font-bold text-gray-700 hover:bg-gray-50 focus:relative">
                        -
                    </button>

                    <input class="inline-block px-6 py-2 text-sm font-bold text-gray-700 hover:bg-gray-50 focus:relative">
                        2
                    </input>

                    <button class="inline-block px-6 py-2 text-sm font-bold text-gray-700 hover:bg-gray-50 focus:relative">
                        =
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>