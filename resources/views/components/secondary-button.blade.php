<button type="button" {!! $attributes->merge([
    'class' =>
        'w-full inline-flex justify-center items-center px-3 py-2 bg-white border-2 border-custom-ube focus:ring focus:ring focus:ring-custom-ube focus:ring-opacity-50 rounded-lg focus:border-transparent',
]) !!}>
    <div class="flex items-center gap-2 text-custom-ube">
        {{ $slot }}
    </div>
</button>
