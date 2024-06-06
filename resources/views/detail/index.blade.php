<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        nunito: ['Nunito', 'sans-serif'],
                        quicksand: ['Quicksand', 'sans-serif'],
                        monts: ['Montserrat', 'sans-serif'],
                        robot: ['Roboto', 'sans-serif']
                    },
                }
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@300&family=Nunito&family=Poppins:ital,wght@0,200;1,300&family=Quicksand&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>{{ $title }}</title>
</head>

<body>
    <main class="flex flex-col min-h-screen bg-gray-200">
        @include('layouts.navbar')


        <section class="grid grid-cols-4 min-h-screen">
            <div class="flex flex-col overflow-hidden col-span-3 bg-white shadow-md rounded-md">
                <header>
                    <h1 class="text-3xl font-robot font-semibold p-3">{{ $post->judul }}</h1>
                    <p class="px-3 font-robot"><small>{{ $post->created_at->diffForHumans() }}</small></p>
                    <div class="w-full flex justify-center items-center">
                    <img src="{{asset('img/thumbnail/'.$post->thumbnail)}}" alt="">
                    </div>
                </header>
                <article class="p-2 font-robot">
                    {!! $post->body !!}
                </article>
            </div>
            <div>
                <section
                    class="bg-white shadow-md rounded-lg border border-gray-50 m-2 h-[43rem] sticky top-5 space-y-2">
                    <header class="border-b-2">
                        <p class="text-2xl font-bold font-robot m-2">ARTIKEL TERKINI</p>
                    </header>
                    <div>
                        @foreach ($latestArticle as $article)
                        <div class="grid grid-cols-3 w-full h-24 mb-2 border-b-2">
                            <div><img class="h-24" src="{{ asset('img/thumbnail/'.$article->thumbnail) }}" alt="img"></div>
                            <div class="col-span-2 flex flex-col mt-2">
                                <a href="/post/{{$article->judul}}"
                                    class="font-robot text-sm text-wrap hover:text-blue-500 duration-500">{{ \Illuminate\Support\Str::limit($article->judul, 50, '...') }}</a>
                                <p class="font-robot text-xs text-gray-500 mt-2">{{$article->created_at->translatedFormat('d F Y')}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>
    </main>

    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
