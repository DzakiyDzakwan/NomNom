<div x-data="button">
    @if($type == "rounded" && $withGradient)
        <button {{ $attributes->merge(['class' => "bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 hover:bg-cyan-500 rounded-full "]) }}>
            {{-- {{ $icon }} --}}
            {{ $text }}
        </button>
    @elseif($type == "rounded" && !$withGradient)
        <div {{ $attributes->merge(['class' => 'group relative block h-full mx-auto before:absolute before:inset-0 before:rounded-full before:border-4 before:border-dotted before:border-primary']) }}>
            <button class="px-6 py-2 rounded-full text-md font-bold text-main group-hover:shadow-xl border-none bg-primary group-hover:-translate-x-1 group-hover:-translate-y-1 transition">
                {{-- {{ $icon }} --}}
                {{ $text }}
            </button>
        </div>
    @elseif($type == "regular" && !$withGradient)
        <div {{ $attributes->merge(['class' => "group relative block h-full w-fit mx-auto before:absolute before:inset-0 before:rounded before:border-4 before:border-dotted before:border-primary"]) }}>
            <button {{ $attributes->merge(['class' => "px-6 py-2 rounded text-md font-bold text-main border-none bg-primary group-hover:shadow-xl group-hover:-translate-x-1 group-hover:-translate-y-1 transition " . $innerClass ]) }}>
                {{-- {{ $icon }} --}}
                {{ $text }}
            </button>
        </div>
    @elseif($type = "regular" && $withGradient)
        <button {{ $attributes->merge(['class' => "flex bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-6 py-2 hover:bg-cyan-500 rounded"]) }} >
            {{ $icon }}
            <span class="basis-full pr-4 text-main">{{ $text }}</span>
        </button>
    @endif
</div>

@pushOnce('component-script')
<script>
    document.addEventListener('alpine:init', () => 
    {
        Alpine.data('button', () => (
        {
            init() 
            {
            },
        }))
    })
</script>
@endPushOnce