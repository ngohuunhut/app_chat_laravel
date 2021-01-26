<div class="flex flex-row items-center p-4 relative">
    <div class="absolute text-xs text-gray-500 right-0 top-0 mr-4 mt-3">
        2 hours ago
    </div>
    <div
        class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
        NHN
    </div>
    <div class="flex flex-col flex-grow ml-3">
        <div class="flex items-center">
            <div class="text-sm font-medium">
                {{ $name ?? 'SOME NAME' }}
            </div>
            <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
        </div>
        <div class="text-xs truncate w-40">
            {{ $message ?? 'SOME TEXT' }}
        </div>
    </div>
</div>
