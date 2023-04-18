<div x-data="{username: 'Fabrizio', type: 'Normal'}" class="container mx-auto border border-cyan-300">
    Hello World From Livewire

    <input type="text" x-model="type">
    <x-input label="Name" placeholder="your name" />
    <span x-text="username"></span>
</div>
