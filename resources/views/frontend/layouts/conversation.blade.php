<div class="flex flex-col w-full h-full pl-4 pr-4 py-4 -mr-4">
    {{--Component Conversation - Header--}}
    <div class="flex flex-row items-center">
        <div class="flex flex-row items-center">
            <div class="text-xl font-semibold">Messages</div>
            @include('frontend.components.partials.number_unseen')
        </div>
        <div class="ml-auto">
            @include('frontend.components.partials.search_button')
        </div>
    </div>
    {{--End Component Conversation - Header--}}
    {{--Component Conversation - TypeOfMessage--}}
    <div class="mt-5">
        <ul class="flex flex-row items-center justify-between">
            <li>
                <a href="#" class="flex items-center pb-3 text-xs font-semibold relative text-indigo-800">
                    <span>All Conversations</span>
                    <span class="absolute left-0 bottom-0 h-1 w-6 bg-indigo-800 rounded-full"></span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center pb-3 text-xs text-gray-700 font-semibold">
                    <span>Archived</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center pb-3 text-xs text-gray-700 font-semibold">
                    <span>Starred</span>
                </a>
            </li>
        </ul>
    </div>
    {{--End Component Conversation - TypeOfMessage--}}
    <div class="mt-5">
        <div class="text-xs text-gray-400 font-semibold uppercase">Team</div>
    </div>
    {{-- Component Conversation-Component Team --}}
    <div class="mt-2">
        <div class="flex flex-col -mx-4">
            {{--Component-Conversation-Component-Team-Message--}}
            @include('frontend.components.messages.active')
            @include('frontend.components.messages.non_active')
            {{--Component-Conversation-Component-Team-Message--}}
        </div>
    </div>
    {{--End Component Conversation-Component Team --}}
    {{-- Component-Conversation-Component-Person--}}
    <div class="mt-5">
        <div class="text-xs text-gray-400 font-semibold uppercase">Personal</div>
    </div>
    <div class="h-full overflow-hidden relative pt-2">
        <div class="flex flex-col divide-y h-full overflow-y-auto -mx-4">
            @include('frontend.components.messages.non_active')
            @include('frontend.components.messages.non_active')
        </div>
        <div class="absolute bottom-0 right-0 mr-2">
            <button class="flex items-center justify-center shadow-sm h-10 w-10 bg-red-500 text-white rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>
    </div>
    {{--End-Component-Conversation-Component-Person--}}
</div>
