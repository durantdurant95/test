@extends('layouts.app')

@section('content')
    <section class="text-center mb-10">
        <h2 class="text-4xl font-bold">Contact Us</h2>
        <p class="mt-2">Have questions or feedback? Reach out to us!</p>
    </section>

    <section class="p-6 rounded-lg shadow-md max-w-lg mx-auto">
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-center mb-3">
                <span class="text-xl text-gray-600 mr-3">📞</span>
                <span class="text-lg">+1 (123) 456-7890</span>
            </div>
            <div class="flex items-center justify-center">
                <span class="text-xl text-gray-600 mr-3">✉️</span>
                <span class="text-lg">contact@example.com</span>
            </div>
        </div>
    </section>
@endsection
