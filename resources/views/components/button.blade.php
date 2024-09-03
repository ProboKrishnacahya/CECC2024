<button type="submit" {!! $attributes->merge([
    'class' =>
        'w-full inline-flex justify-center items-center focus:outline-none px-3 py-2 bg-custom-ube border-2 border-custom-ube rounded-md focus:ring focus:ring-custom-ube focus:ring-opacity-50',
]) !!}>
    <div class="flex items-center gap-2 text-white">
        {{ $slot }}
    </div>
</button>
