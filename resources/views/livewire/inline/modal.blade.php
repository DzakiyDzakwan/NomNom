<div x-data="modal">
</div>

@push('component-script')
<script>
        document.addEventListener('alpine:init', () => 
        {
            Alpine.data('modal', () => (
            {
                open: false,

                ToggleModal() 
                {
                    $openModal('simpleModal') 
                }
            }))
        })
</script>
@endpush