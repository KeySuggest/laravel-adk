@extends('layouts.app')

@section('content')

@include('partials.loading-model')

<div class="px-8 mx-auto my-6 max-w-7xl xl:px-5">
    <x-input-form />
    @if (isset($input))
    <div>
        @if ($status !== "SUCCESS")
        <div class="bg-white rounded-md p-3 my-5">
            <span class="text-sm font-bold">Status:</span>
            @if ($status === "ERROR")
            <span class="text-red-500 text-sm">{{ $status_message }}</span>
            @elseif (isset($status_message))
            <span class="text-gray-500 text-sm">{{ $status_message }}</span>
            @endif
        </div>
        @else
        <p>Display your report</p>
        @endif

    </div>

    @else
    <span class="text-red-500 text-sm">Enter Keyword to search report.</span>
    @endif
</div>

@endsection