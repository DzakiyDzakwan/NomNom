<div x-data="button">
    @if($type == "rounded" && $withGradient)
        <button class="bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 hover:bg-cyan-500 rounded-full ">
            {{ $text }}
        </button>
    @elseif($type == "rounded" && !$withGradient)
        <div class="group relative block h-full w-fit mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-primary">
            <button class="p-4 rounded-full text-md font-bold text-main group-hover:shadow-xl border-none bg-primary group-hover:-translate-x-1 group-hover:-translate-y-1 transition">
                {{ $text }}
            </button>
        </div>
    @elseif($type == "regular" && !$withGradient)
        <div class="group relative block h-full w-fit mx-auto before:absolute before:inset-0 before:rounded before:border-4 before:border-dotted before:border-primary">
            <button class="p-4 rounded text-md font-bold text-main border-none bg-primary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition" x-text="text">
                
            </button>
        </div>
    @elseif($type = "regular" && $withGradient)
        <button class="bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 hover:bg-cyan-500 rounded ">
            {{ $text }}
        </button>
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

@push('component-script')
<script>
    document.addEventListener('alpine:init', () => 
    {
        Alpine.data('button', () => (
        {
            init() 
            {
                console.log('I will get evaluated when initializing each "dropdown" component.')
            },

            text: `{{ $text }}`
        }))
    })
</script>
@endpush