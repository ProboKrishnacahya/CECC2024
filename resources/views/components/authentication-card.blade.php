<div class="flex min-h-screen flex-col items-center justify-center bg-home-hero bg-cover bg-center bg-no-repeat">
    <div class="text-center">
        {{ $logo }}
    </div>

    <div class="mt-6 w-full overflow-hidden px-6 py-4 dark:bg-gray-800 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
