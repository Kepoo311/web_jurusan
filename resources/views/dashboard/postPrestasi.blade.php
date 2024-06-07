@extends('layouts.dash')

@section('content')
    <section class="flex flex-col h-full">
        <section class="flex items-center justify-center h-full">
            <form class="w-96" action="/dashboard/post/prestasi" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <h1 class="mb-2 text-sm font-medium text-gray-900">Preview gambar</h1>
                    <img class="w-52 h-40" src="" id="prev">
                </div>
                <div class="mb-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                        foto murid</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        aria-describedby="file_input_help" id="input_thumb" type="file" name="foto_murid">
                    <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG, JPEG (MAX. 2Mb).</p>
                    @error('foto_murid')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="nama">Nama murid</label>
                    <input id="nama" name="nama" value="{{ old('nama') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. Joe Biden">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="kelas">Kelas</label>
                    <input id="kelas" name="kelas" value="{{ old('kelas') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. XI PPLG 1">
                    @error('kelas')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="perolehan">Perolehan</label>
                    <input id="perolehan" name="perolehan" value="{{ old('perolehan') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. Juara 1">
                    @error('perolehan')
                        {{ $message }}
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="bidang">Bidang</label>
                    <input id="bidang" name="bidang" value="{{ old('bidang') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. Cyber Security">
                    @error('bidang')
                        {{ $message }}
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="perlombaan">Nama perlombaan</label>
                    <input id="perlombaan" name="perlombaan" value="{{ old('perlombaan') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. Lks Nasional">
                    @error('perlombaan')
                        {{ $message }}
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="tingkat">Tingkat</label>
                    <input id="tingkat" name="tingkat" value="{{ old('tingkat') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. Nasional">
                    @error('tingkat')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-md font-poppins block" for="periode">Periode</label>
                    <input id="periode" name="periode" value="{{ old('periode') }}"
                        class="block w-full bg-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 border-gray-300 "
                        type="text" placeholder="Ex. 2024 - 2025">
                    @error('periode')
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

    <script>
          const prevs = document.getElementById('prev');
        const thumbs = document.getElementById('input_thumb');

        thumbs.addEventListener('change', (event) => {
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

        let succes = {{ session()->has('gg') ? 1:0 }}
        if (succes) {
            Toast.fire({
                icon: 'success',
                title: 'Berhasil menambah prestasi!',
            })
        }
    </script>
@endsection
