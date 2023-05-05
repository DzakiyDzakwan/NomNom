<div>
    <button id="{{ $identifier }}" class="btn text-white">{{ $label }}</button>
</div>

@push('component-script')
    <script>
        let {{ $identifier }} = document.querySelector('#{{ $identifier }}');
        {{ $identifier }}.addEventListener('click', function() {
            alert('{{ $identifier }}');
        })
    </script>
@endpush
