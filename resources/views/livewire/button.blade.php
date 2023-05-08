<div>
    <button id="{{ $identifier }}" class="btn text-white font-semibold bg-gradient-to-r from-[#ffb03e] to-[#f67356]">{{ $label }}</button>
</div>

@push('component-script')
    <script>
        let {{ $identifier }} = document.querySelector('#{{ $identifier }}');
        {{ $identifier }}.addEventListener('click', function() {
            alert('{{ $identifier }}');
        })
    </script>
@endpush
