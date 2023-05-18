<div>

    <div x-data="forms">
        @if ($for == 'regular')
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
            <input type="{{ $type }}"
                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @elseif($for == 'regular-text')
            <div class="flex justify-between">
                <label for="{{ $id }}"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
                <span class="text-primary text-sm">Optional</span>
            </div>
            <div class="relative">
                <input type="{{ $type }}"
                    class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <span class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-500 text-sm">
                    {{ $satuan }}
                </span>
            </div>
        @elseif($for == 'file')
            <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ $text }}
            </label>
            <input type="file"
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300   text-sm text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-primary file:px-8 file:py-[1rem] file:text-white file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                type="file" id="formFile" />
        @elseif ($for == 'textarea')
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
            <textarea rows="4" id=" {{ $id }} "
                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ $placeholder }}" required></textarea>
        @elseif ($for == 'nomor-tahapan')
            <div class="flex justify-center items-center">
                <div class="rounded-full flex justify-center items-center">
                    <div
                        class="w-8 h-8 bg-primary rounded-full flex justify-center items-center text-white text-sm font-bold">
                        {{ $nomor }}
                    </div>
                </div>
            </div>
        @elseif ($for == 'textarea-step')
            <textarea rows="7" id=" {{ $id }} "
                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ $placeholder }}" required></textarea>
        @elseif ($for == 'upload-image')
            <div x-data="showImage()" class="flex items-center justify-center h-fit w-fit">
                <div class="bg-primary rounded-lg shadow-xl ">
                    <div class="m-4">
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col w-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                <div class="relative flex flex-col items-center justify-center pt-7">
                                    <img id="preview" class="absolute inset-0 w-full h-32">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-12 h-12 text-black group-hover:text-gray-600" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <p class="pt-1 text-sm tracking-wider text-black group-hover:text-gray-600">
                                        Select a photo</p>
                                </div>
                                <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
{{-- x-data @click="Alpine.store('modal').ToggleModal()" x-text="@js($text)" --}}
{{-- <x-test-blade wire:model="text" :message="$text">
        <span class="font-light">Default Slot is injected here</span>

        <x-slot :name="$type">
            <p class="italic">
                Dynamic Named Slot : {{ $text }}
            </p>
        </x-slot>
    </x-test-blade> --}}

{{-- <form>
    <div class="mb-6 flex flex-wrap">
        <div class="w-full md:w-1/2 p-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
        </div>

        <div class="w-full md:w-1/2 p-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                File</label>
            <input class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="formFile" />
        </div>
    </div> --}}
