<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        nunito: ['Nunito', 'sans-serif'],
                        quicksand: ['Quicksand', 'sans-serif'],
                        monts: ['Montserrat', 'sans-serif']
                    },
                }
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@300&family=Nunito&family=Poppins:ital,wght@0,200;1,300&family=Quicksand&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>{{ $title }}</title>
</head>

<body class="overflow-x-hidden">

    <main class="flex flex-col h-min-screen">
        @include('layouts.navbar')
        <section class="bg-white overflow-hidden">
            <div id="default-carousel" class="relative w-full overflow-hidden mb-2 mt-2 md:mb-5 md:mt-5"
                data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 rounded-lg md:h-[30rem]">
                    @foreach ($banners as $banner)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/banners/' . $banner->name) }}"
                                class="absolute block lg:max-w-[1700px] lg:max-h-[500px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    @endforeach

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($banners as $item)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                            aria-label="{{ $loop->index + 1 }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>

        <section class="h-fit bg-white flex flex-row gap-5 items-center justify-center w-full mt-5 mb-2">
            <div data-aos="flip-up" data-aos-duration="700" data-modal-target="visi-modal"
                data-modal-toggle="visi-modal" id="visi"
                class="cursor-pointer bg-white w-48 h-20 rounded-lg shadow-lg border border-[#cacaca5e] flex justify-center items-center hover:bg-blue-500 hover:text-white">
                <p class="font-poppins font-bold text-3xl cursor-pointer">VISI</p>
            </div>
            <div data-aos="flip-up" data-aos-duration="700" data-modal-target="misi-modal"
                data-modal-toggle="misi-modal" id="misi"
                class="cursor-pointer bg-white w-48 h-20 rounded-lg shadow-lg border border-[#cacaca5e] flex justify-center items-center hover:bg-blue-500 hover:text-white">
                <p class="font-poppins font-bold text-3xl cursor-pointer">MISI</p>
            </div>
            <div data-aos="flip-up" data-aos-duration="700" data-modal-target="tujuan-modal"
                data-modal-toggle="tujuan-modal" id="tujuan"
                class="cursor-pointer bg-white w-48 h-20 rounded-lg shadow-lg border border-[#cacaca5e] flex justify-center items-center hover:bg-blue-500 hover:text-white">
                <p class="font-poppins font-bold text-3xl cursor-pointer">TUJUAN</p>
            </div>

            <div id="visi-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-lg max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-medium text-gray-900">
                                VISI
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="visi-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 overflow-y-auto">
                            <p class="font-poppins font-semibold p-2 text-base leading-relaxed text-gray-500">
                                Mengarah pada keunggulan ilmu dan teknologi di era globalisasi, Program Keahlian
                                Pengembangan Perangkat Lunak dan Gim bertekad menjadi pionir dalam merangkul dinamika
                                perkembangan informasi dan komunikasi dengan kearifan Pancasila sebagai fondasi utama.
                            </p>
                            <p class="font-poppins font-semibold p-2 text-base leading-relaxed text-gray-500">
                                Visi kami adalah menciptakan lingkungan pembelajaran yang mempromosikan kolaborasi,
                                kreativitas,
                                dan inovasi dalam mengembangkan solusi teknologi yang berkelanjutan dan bermartabat.
                                Kami
                                berkomitmen untuk melatih generasi yang tidak hanya mahir secara teknis, tetapi juga
                                berintegritas, bertanggung jawab, dan memiliki kesadaran akan dampak sosial dari
                                teknologi
                                yang mereka ciptakan.
                            </p>
                            <p class="font-poppins font-semibold p-2 text-base leading-relaxed text-gray-500">
                                Dengan memadukan pengetahuan teknis yang mendalam dengan nilai-nilai
                                kemanusiaan, kami yakin bahwa lulusan kami akan menjadi agen perubahan yang mampu
                                membawa
                                manfaat bagi masyarakat, bangsa, dan negara, sesuai dengan semangat Pancasila sebagai
                                panduan utama dalam setiap langkah yang kami ambil.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="misi-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-lg max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-medium text-gray-900">
                                MISI
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="misi-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 overflow-y-auto">
                            <ol class="p-2">
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">1. Mengembangkan
                                    Sumber Daya Manusia yang mempunyai keunggulan dalam
                                    bidang teknologi
                                    informasi dan komunikasi yang dilandasi keimanan dan ketakwaan.</li>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">2.
                                    Menyelenggarakan kegiatan pembelajaran yang berpusat pada peserta
                                    didik yang
                                    berkarakter Pancasila dengan menerapkan Teaching Factory dan berbasis industry
                                    melalui
                                    pendekatan teknologi informatika dan komunikasi serta mencetak jiwa
                                    wirausaha/enterpreunership</li>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">3. Menyiapkan
                                    tenaga kerja tingkat menengah untuk mengisi kebutuhan dunia
                                    usaha dan
                                    industri keunggulan dalam bidang teknologi informasi dan komunikasi.</li>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">4. Menyiapkan
                                    peserta didik untuk memasuki dunia kerja, serta
                                    mengembangkan sikap
                                    professional.</li>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">5. Menyiapkan
                                    tamatan untuk membuka usaha sendiri atau berwirausaha.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tujuan-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-lg max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-medium text-gray-900">
                                TUJUAN
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="tujuan-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 overflow-y-auto">
                            <ul>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">
                                    A. Membekali peserta didik dengan pengetahuan, keterampilan, dan sikap agar kompeten
                                    dalam:
                                    <ul>
                                        <li>Menggunakan berbagai Bahasa Pemrograman Komputer, termasuk:
                                            <ul>
                                                <li>Informatika</li>
                                                <li>C</li>
                                                <li>C++</li>
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>JavaScript</li>
                                                <li>Database</li>
                                                <li>PHP</li>
                                            </ul>
                                        </li>
                                        <li>Merancang, membuat, dan mengelola aplikasi untuk:
                                            <ul>
                                                <li>Dekstop</li>
                                                <li>Web</li>
                                                <li>Mobile</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">
                                    B. Mendidik peserta didik dengan keahlian dan keterampilan dalam Program Keahlian
                                    Rekayasa Perangkat Lunak agar dapat:
                                    <ul>
                                        <li class="mb-2">Bekerja baik secara mandiri maupun dalam tim.</li>
                                        <li>Mengisi pekerjaan yang ada di Dunia Usaha/Dunia Industri (DU/DI) sebagai
                                            tenaga
                                            kerja tingkat menengah.</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li class="mb-2 font-semibold text-base leading-relaxed text-gray-500">
                                    C. Mendidik peserta didik agar mampu:
                                    <ul>
                                        <li>Memilih karir yang sesuai dengan minat dan bakatnya di bidang Rekayasa
                                            Perangkat
                                            Lunak.</li>
                                        <li class="mb-2">Bersaing secara sehat dalam dunia kerja dengan
                                            mempertimbangkan
                                            nilai-nilai profesionalisme.</li>
                                        <li>Mengembangkan sikap profesional yang mencakup etika kerja, integritas,
                                            tanggung
                                            jawab, dan keterampilan komunikasi yang baik.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section data-aos="zoom-in-down" data-aos-duration="1000" class="h-fit bg-white flex flex-col">

            <head>
                <p class="text-xl xl:text-3xl text-black font-poppins font-semibold p-5">Murid Berprestasi</p>
            </head>

            <div id="slide-penghargaan" class="card p-5 flex justify-center items-center gap-2 w-full">
                @foreach ($prestasis as $prestasi)
                    <div class="w-w-80 h-96 bg-[#3a85ff] shadow-lg rounded-lg flex flex-col">
                        <div class="header flex flex-col w-full justify-center items-center text-center pt-5">
                            <img class="w-32 h-32 rounded-full"
                                src="{{ asset('img/foto_murid/' . $prestasi->foto_murid) }}" alt="">
                            <h1 class="font-monts font-bold text-2xl text-white pt-2">{{ $prestasi->nama }}</h1>
                            <h2 class="font-monts font-bold text-md text-white pt-2">{{ $prestasi->kelas }}</h2>
                        </div>
                        <div class="info flex flex-col w-full justify-center items-center text-center pt-3">
                            <h1 class="font-monts font-bold text-sm text-white pt-2">{{ $prestasi->perolehan }}</h1>
                            <h2 class="font-monts font-bold text-sm text-white">{{ $prestasi->bidang }}</h2>
                        </div>
                        <div class="footer flex flex-col w-full justify-center items-center text-center pt-3">
                            <h1 class="font-monts font-bold text-sm text-white pt-2">{{ $prestasi->perlombaan }}</h1>
                            <h2 class="font-monts font-bold text-sm text-white">{{ $prestasi->tingkat }}</h2>
                            <h2 class="font-monts font-bold text-sm text-white">{{ $prestasi->periode }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section data-aos="flip-up" data-aos-duration="1000" class="h-fit bg-white flex flex-col py-5">

            <head>
                <p class="text-3xl text-black font-poppins font-semibold p-5">Artikel</p>
            </head>

            <div id="slide-info" class="card p-5">
                @foreach ($post as $item)
                    <div>
                        <a href="/post/{{ $item->judul }}"
                            class="flex flex-col h-fit w-fit rounded-2xl shadow-xl overflow-hidden">
                            <header class="h-[150px] w-[300px] overflow-hidden rounded-t-lg">
                                <img src="{{ asset('img/thumbnail/' . $item->thumbnail) }}" alt="">
                            </header>
                            <section class="w-full h-fit bg-white rounded-b-lg overflow-hidden">
                                <header>
                                    <p
                                        class="text-black font-monts font-bold text-md p-2 hover:text-gray-300 w-72 hover:underline">
                                        {{ $item->judul }}</p>
                                </header>
                                <section>
                                    <p class="w-72 text-sm p-2 font-monts text-gray-50000">{{ $item->excerpt }}</p>
                                </section>
                            </section>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <footer data-aos="fade-up" data-aos-duration="1000" class="bg-[#FFFD8C] text-black h-fit flex flex-col">
            <section class="grid grid-cols-1 xl:grid-cols-4">
                <div class="flex flex-col xl:p-3 justify-self-center xl:justify-self-end">
                    <img class="h-36 w-36" src="{{ asset('img/logo.png') }}" alt="">
                    <p class="font-poppins text-md w-72">PPLG adalah sebuah jurusan yang diperuntukan untuk mempelajari
                        bahasa pemrograman.</p>
                </div>
                <section class="grid grid-cols-2 justify-items-center">
                    <div class="xl:p-3 flex flex-col">
                        <h1 class="font-poppins font-semibold">Follow us</h1>
                        <p class="font-poppins">
                            <a href="#" class="block hover:underline"><i class="fab fa-instagram"></i>
                                Instagram</a>
                            <a href="#" class="block hover:underline"><i class="fab fa-tiktok"></i> Tiktok</a>
                        </p>
                    </div>
                    <div class="xl:p-3 flex flex-col">
                        <h1 class="font-poppins font-semibold">Contact us</h1>
                        <p class="font-poppins">
                            <a href="#" class="block hover:underline"><i class="fab fa-whatsapp"></i>
                                Whatsapp</a>
                            <a href="#" class="block hover:underline"><i class="fas fa-envelope"></i> Email</a>
                        </p>
                    </div>


                </section>
            </section>

            <p class="font-poppins text-center">RIANDRA 2024, All Rights Reserved.</p>
        </footer>
        {{-- Back to top --}}
        <div id="btt" data-dial-init class="fixed right-6 bottom-6 group">
            <button type="button" aria-expanded="false" onclick="topFunction()"
                class="flex items-center justify-center ml-auto text-white bg-blue-700 rounded-lg w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v13m0-13 4 4m-4-4-4 4" />
                </svg>
            </button>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="{{ asset('aos/aos.js') }}"></script>

    <script>
        AOS.init();

        var slider = tns({
            "container": "#slide-penghargaan",
            "loop": true,
            "gutter": 10,
            "responsive": {
                "576": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                }
            },
            "swipeAngle": false,
            "speed": 400,
            "autoplay": true,
            "mouseDrag": true,
            "controls": false,
            "autoplayButtonOutput": false,
            "autoplayTimeout": 2000,
            "center": true,
            "navPosition": "bottom",
        });

        var slideINFO = tns({
            "container": "#slide-info",
            "loop": true,
            "gutter": 10,
            "responsive": {
                "576": {
                    "items": 2,
                },
                "768": {
                    "items": 3,
                },
                "992": {
                    "items": 4,
                }
            },
            "swipeAngle": false,
            "speed": 400,
            "autoplay": true,
            "mouseDrag": true,
            "controls": false,
            "autoplayButtonOutput": false,
            "autoplayTimeout": 5000,
            "center": true,
            "autoWidth": true,
            "navPosition": "bottom",
            "navAsThumbnails": true
        });

        // Get the button:
        let backtotop = document.getElementById("btt");
        scrollFunction()
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backtotop.style.display = "block";
                backtotop.style.opacity = "1";
            } else {
                backtotop.style.opacity = "0";
                backtotop.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <style>
        html, body{
            scroll-behavior: smooth;
        }
    </style>
</body>

</html>
