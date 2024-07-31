<button type="button" {!! $attributes->merge([
    'class' =>
        'w-full inline-flex justify-center items-center focus:outline-none px-3 py-2 bg-white border-2 border-custom-ube focus:ring focus:ring-indigo-500 rounded-lg focus:ring-opacity-50 active:bg-white active:border-white',
]) !!}>
    <div class="flex items-center gap-2 text-custom-ube">
        {{ $slot }}
    </div>
</button>
