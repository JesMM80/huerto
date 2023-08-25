@if (session('message'))
    <div class="p-2 border border-red-600 bg-red-300 text-white font-bold mt-2 mb-2">
        <p class="mt-1 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
            {{ session('message') }}
        </p>
    </div>
@endif