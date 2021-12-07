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
    @include('styles.bubbles')
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50" style="scrollbar-width: none;">
    {{-- topbar --}}
    <x-top-bar />

    <x-bubbles />

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
                    <li>Login aplikasi UKBM dapat dilakukan melalui username yang berupa NIP dan password yang diberikan oleh admin.</li>
                    <li>Aplikasi ini memiliki beberapa fitur, yaitu profil, list kelas, list siswa, materi, dan asesmen.</li>
                    <li>Dalam fitur profil terdapat nama pengguna, username, dan tombol logout.</li>
                    <li>Dalam fitur list kelas dapat dilihat list kelas yang terdaftar menggunakan aplikasi UKBM ini. Aksi yang dapat dilakukan antara lain: edit kelas, tambah kelas, hapus kelas. Setiap kelas yang telah dihapus tidak dapat dikembalikan lagi.</li>
                    <li>Dalam fitur list siswa dapat dilihat list siswa yang terdaftar menggunakan aplikasi UKBM ini. Aksi yang dapat dilakukan antara lain: edit siswa, tambah siswa, hapus siswa. Setiap siswa yang telah dihapus tidak dapat dikembalikan lagi.</li>
                    <li>Dalam fitur materi terdapat kompetensi, tujuan pembelajaran, karakter yang dikembangkan, peta konsep, ringkasan materi mengenai Struktur Atom dan Sistem Periodik Unsur, soal latihan dan soal evaluasi akhir.</li>
                    <li>Dalam fitur asesmen terdapat list siswa yang telah mengerjakan setiap soal yang tersedia beserta jawabannya, kisi-kisi jawaban, dan kolom input nilai. Jawaban siswa dapat diubah sampai guru submit nilai.</li>
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