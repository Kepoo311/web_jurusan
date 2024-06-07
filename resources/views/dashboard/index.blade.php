@extends('layouts.dash')

@section('content')
    <div class="w-full h-full flex flex-col justify-center items-center">
        <p class="text-5xl font-poppins font-bold" id="clock"></p>
        <div class="h-[70dvh] flex justify-center items-center">
            <p id="lirik_brain_rot" class="font-poppins font-bold text-6xl text-red-500"></p>
        </div>
    </div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#lirik_brain_rot', {
            strings: ['LETS GO BRAINROT!', 'Ampar ampar sigma🤪','Mewing ku belum crypto😔','Gyat sebiji🤪','Diurung skibidi🚽','Mangga gyat Mangga gyat👀','Patah kayu ohayo🤣','Bengkok di makan sigma😏','Sigma For Ohio🗣️🔥🔥🔥','GYATTTTTTTTTTTTTTTTT🔥🔥🔥🤤🤤🤤'],
            typeSpeed: 30,
            loop: true
        });


        function updateClock() {
            const clock = document.getElementById('clock');
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            clock.textContent = `${hours}:${minutes}:${seconds}`;
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>
    <style>
        .typed-cursor{
            font-size: 60px;
        }
    </style>
@endsection
