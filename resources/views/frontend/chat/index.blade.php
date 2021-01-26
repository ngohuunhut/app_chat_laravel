@extends('frontend.layouts.app')

@section('content')
    {{-- Show messages --}}
    <div class="flex flex-col h-full w-full bg-white px-4 py-6">
        {{-- Title component --}}
        @include('frontend.components.messages.title')
        {{-- End Title component --}}
        <div class="h-full overflow-hidden py-4">
            <div class="h-full overflow-y-auto">
                <div class="grid grid-cols-12 gap-y-2">
                    @include('frontend.components.messages.type.text.receiver')
                    @include('frontend.components.messages.type.text.sender')
                </div>
            </div>
        </div>
        {{-- Input message component --}}
        @include('frontend.components.messages.input_message')
        {{-- End Input message component --}}
    </div>
    {{-- End Show messages --}}
@endsection
