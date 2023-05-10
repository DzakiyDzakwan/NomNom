<div x-init="$nextTick(() => { console.log('I\'m being initialized!') })" {{ $attributes }}>
    <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" {{ $attributes->wire('model') }}>
    <p> Using Blade's Attribute : {{ $attributes->wire('model')->value() }} </p>
    <p> Accessing The Named Attribute : {{ $attributes['message'] }}</p>
    
    
    {{ $slot }}
    {{ $regular }}
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

    {{-- <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-model="model" x-on:keyup="$wire.ShowDD().then(result => console.log(result))"> --}}
    {{-- <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" x-on:keyup="SetModel()"> --}}