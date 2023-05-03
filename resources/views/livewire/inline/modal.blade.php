<div x-data="modal">
    <x-button outline zinc label="Zinc" @click="ToggleModal" />

    <x-modal blur="3xl" wire:model.defer="simpleModal">
        <x-card title="Consent Terms">
            <p class="text-gray-600">
                Lorem Ipsum...
            </p>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="I Agree" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>
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