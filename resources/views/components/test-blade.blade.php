<div x-init="$nextTick(() => { console.log('I\'m being initialized!') })" {{ $attributes }}>
    <input type="text" class="rounded w-[80%] border-secondary focus:ring focus:ring-offset-2 focus:ring-secondary focus:border-secondary" {{ $attributes->wire('model') }}>
    <p> Using Blade's Attribute : {{ $attributes->wire('model')->value() }} </p>
    <p> Accessing The Named Attribute : {{ $attributes['message'] }}</p>
    
    
    {{ $slot }}
    {{ $regular }}
</div>