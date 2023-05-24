<div x-data="$store.alert" x-show="open" x-cloak x-transition>
    <div id="insertToast" role="alert" class="mx-8  rounded-xl border fixed border-[#c8f7c5] bg-white mt-4 p-4 shadow-xl right-0 z-50">
        <div class="flex items-start gap-4">
            <span class="text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>

            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Perubahan Disimpan </strong>

                <p class="mt-1 text-sm text-gray-700" x-text='pesan'>

                </p>
            </div>

            <button wire:click="hideAlert" class="text-gray-500 transition hover:text-gray-600">
                <span class="sr-only">Dismiss popup</span>

                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg> --}}
            </button>
        </div>
    </div>
</div>

@push('component-script')
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('alert', {
            open: false,
            pesan: '',

            init() {
                window.addEventListener('closemodal', (e) => {
                    Alpine.store('alert').pesan = e.detail.pesan
                    // console.log(e.detail.pesan)
                })
            },
            ToggleAlert() {
                setTimeout(() => {
                    this.open = false
                }, 5000);
            },

        })
    })

    
</script>
@endpush