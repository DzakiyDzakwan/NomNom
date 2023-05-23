<div {{ $attributes->merge(['class' => 'fixed inset-0 overflow-y-auto p-4 z-50 ' . $name]) }} x-data="$store.{{ $name }}" @closemodal.window="open = false; " x-show="open" x-cloak x-transition:enter.duration.250ms x-transition:leave.duration.500ms>
    <div class="modal-backdrop"></div>
    <div class="modal-container" >
        <div class="modal" x-transition.duration.150ms>
            {{ $slot }}
        </div>
    </div>
</div>

@push('component-script')
    <script>
        document.addEventListener('alpine:init', () => 
        {
            // console.log(`{{ $attributes['counter'] }}`)

            Alpine.store(`{{ $name }}`,
            {
                open: false,
                // model: "Some Text",

                init()
                {
                },
                ToggleModal()
                {
                    Alpine.store('body').dim = !Alpine.store('body').dim;
                    this.open = !this.open;
                },
                // SetModel()
                // {
                //     Livewire.emit('ShowDD')
                // }
            })
        })
    </script>
@endpush