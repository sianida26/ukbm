<?php 
 use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    <style>
        .circles{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .circles li{
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(108, 110, 255, 0.7);
            animation: animate 25s linear infinite;
            bottom: -150px;
            
        }

        .circles li:nth-child(1){
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2){
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3){
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4){
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5){
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6){
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7){
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8){
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9){
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10){
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }



        @keyframes animate {

            0%{
                transform: rotate(0deg);
                opacity: 1;
                bottom: 0%;
                border-radius: 0;
            }

            100%{
                transform: rotate(720deg);
                opacity: 0.3;
                bottom: 100%;
                border-radius: 50%;
            }

        }
    </style>
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50" style="scrollbar-width: none;">
    {{-- topbar --}}
    <x-top-bar />

    <ul class="circles">
        @for($i = 1; $i <= 10; $i++)
            <li></li>
        @endfor
    </ul>

    {{-- main content --}}
    <main class="tw-px-4 lg:tw-px-8">

        {{-- greetings --}}
        <div class="tw-font-bold tw-tracking-wide tw-text-gray-700 tw-mt-8 tw-text-md lg:tw-text-2xl tw-flex tw-flex-col tw-gap-1">
            <p>Selamat Datang,</p>
            {{-- <p class="tw-text-3xl">Fulan bin Fulanah</p> --}}
            <p class="tw-text-2xl lg:tw-text-5xl">{{Auth::user()->name}}</p>
            <p class="">di UKBM Materi Struktur Atom dan Sistem Periodik Unsur</p>
        </div>

        {{-- actions --}}
        <div class="tw-px-2 tw-flex-col tw-flex tw-gap-4 tw-text-white tw-mt-8 lg:tw-flex-row">

            <x-btn-fitur icon="people-fill" text="List Kelas" color="#F97316" link="/kelas" /> 
            <x-btn-fitur icon="person-fill" text="List Siswa" color="#22C55E" link="/siswa" /> 
            <x-btn-fitur icon="book" text="Materi" color="#8B5CF6" link="/" /> 
            <x-btn-fitur icon="journal-check" text="Jawaban" color="#F43F5E" link="/jawaban" /> 
        </div>


        {{-- cara penggunaan --}}
        <div class="tw-mt-8 tw-rounded-lg tw-pb-4 tw-bg-white" style="box-shadow: 2px 4px 5px 4px rgba(0, 0, 0, 0.25);">
            {{-- title --}}
            <p class="tw-bg-sky-500 tw-py-2 tw-rounded-t-lg tw-text-white tw-text-xl tw-font-medium tw-text-center">Cara Penggunaan</p>
            <div class="tw-px-8 tw-mt-4">
                <ul class="tw-list-disc tw-list-outside tw-font-medium tw-flex tw-gap-2 tw-flex-col">
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</li>
                    <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </li>
                    <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                </ul>
            </div>
        </div>
    </main>

    {{-- copyright --}}
    <p class="tw-text-center tw-font-medium tw-text-gray-500 tw-my-4">&copy; Firda Amalia 2021</p>

    <script>
        window.addEventListener('load', function(){
            document.scrollTo(0, 0);
        });
    </script>
</body>
</html>