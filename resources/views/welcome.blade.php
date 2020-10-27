@extends('layouts.app')
@section('content')
    <div class="container pt-10 mx-auto">
        <div class="bg-indigo-700 rounded-lg">
            <div class="max-w-2xl px-4 py-16 mx-auto text-center sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
                    <span class="block">TailwindCss</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">Is available in this project.</p>
            </div>
        </div>

        <example-component>running</example-component>
    </div>
@endsection
