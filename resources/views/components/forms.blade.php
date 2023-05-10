<div>

    <div x-data="forms">
        @if ($for == 'input')
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
            <input type="{{ $type }}" id=" {{ $id }} "
                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ $placeholder }}" required>
        @elseif($for == 'file')
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
            <input type="file"
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300   text-sm text-neutral-700 transition duration-300 ease-in-out 
                file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-primary file:px-8 file:py-[1rem] file:text-white file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                type="file" id="formFile" />
        @elseif ($for == 'textarea')
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $text }}</label>
            <textarea rows="4" id=" {{ $id }} "
                class="bg-gray border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ $placeholder }}" required></textarea>


    </div>
    @endif
    {{-- x-data @click="Alpine.store('modal').ToggleModal()" x-text="@js($text)" --}}
    {{-- <x-test-blade wire:model="text" :message="$text">
            <span class="font-light">Default Slot is injected here</span>
    
            <x-slot :name="$type">
                <p class="italic">
                    Dynamic Named Slot : {{ $text }}
                </p>
            </x-slot>
        </x-test-blade> --}}
</div>

{{-- <form>
        <div class="mb-6 flex flex-wrap">
            <div class="w-full md:w-1/2 p-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required>
            </div>

            <div class="w-full md:w-1/2 p-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                    File</label>
                <input
                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                    type="file" id="formFile" />
            </div>
        </div> --}}
</div>
