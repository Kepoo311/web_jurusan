@extends('layouts.dash')

@section('content')
    <section class="flex flex-col h-full">
        <section class="flex items-center justify-center h-[70dvh]">
            <form class="w-96" action="/dashboard/post/banner" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <h1 class="mb-2 text-sm font-medium text-gray-900">Preview</h1>
                    <img class="w-52 h-40" src="" id="prev">
                </div>
                <div class="mb-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                        banner</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                         type="file" name="banner" id="input_banner">
                    <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG, JPEG (MAX. 2Mb).</p>
                    @error('banner')
                        {{ $message }}
                    @enderror
                </div>
                <button
                    class="w-full p-2 bg-red-500 hover:bg-red-600 focus:ring-2 focus:ring-red-800 shadow-lg rounded-lg text-white">Posting</button>
            </form>
        </section>
    </section>
    <script>
        const prevs = document.getElementById('prev');
        const banner = document.getElementById('input_banner');

        banner.addEventListener('change', (event) => {
            prevs.src = URL.createObjectURL(event.target.files[0]);
        })



        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        })

        let succes = {{ session()->has('gg') ? 1 : 0 }};
        if (succes) {
            Toast.fire({
                icon: 'success',
                title: 'Berhasil upload banner!',
            })
        }
    </script>
@endsection
