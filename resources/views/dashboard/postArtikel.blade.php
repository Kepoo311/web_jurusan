@extends('layouts.dash')

@section('content')
    <section class="flex flex-col h-full">
        <section class="flex items-center justify-center h-full">

            @if (session()->has('gg'))
                <h1 class="text-3xl">{{ session('gg') }}</h1>
            @endif
            <form action="/dashboard/posting" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                        gambar</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        aria-describedby="file_input_help" id="file_input" type="file" name="thumbnail">
                    <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG, JPEG (MAX. 2Mb).</p>
                    @error('thumbnail')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="judul">Nama kegiatan</label>
                    <input id="judul" name="judul" value="{{ old('judul') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text">
                    @error('judul')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="body">Body</label>
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        {{ $message }}
                    @enderror
                </div>
                <button
                    class="w-full p-2 bg-red-500 hover:bg-red-600 focus:ring-2 focus:ring-red-800 shadow-lg rounded-lg text-white">Posting</button>
            </form>
        </section>
    </section>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
@endsection
