<div {{ $attributes->merge(['class' => 'fixed inset-0 overflow-y-auto p-4 z-50 ' . $name]) }} x-cloak x-data="$store.{{ $name }}" x-show="open">
    <div class="modal-backdrop"></div>
    <div class="modal-container">
        <div class="modal">
            {{ $slot }}
        </div>
    </div>
</div>

@push('component-script')
    <script>
        document.addEventListener('alpine:init', () => 
        {
            console.log(`{{ $attributes['counter'] }}`)

            Alpine.store(`{{ $name }}`,
            {
                open: false,
                model: "Some Text",

                init()
                {
                },
                ToggleModal()
                {
                    this.open = !this.open
                },
                SetModel()
                {
                    Livewire.emit('ShowDD')
                }
            })
        })
    </script>
@endpush