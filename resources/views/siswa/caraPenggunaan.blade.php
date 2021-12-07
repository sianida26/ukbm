<?php 
 use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cara Penggunaan</title>
    @include('styles.tailwind')
    @include('styles.bootstrapicons')
    @include('styles.bubbles')
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50" style="scrollbar-width: none;">
    {{-- topbar --}}
    <x-top-bar />

    {{-- main content --}}
    <main class="tw-px-4 lg:tw-px-8 xl:tw-px-16">

        {{-- cara penggunaan --}}
        <div class="tw-mt-8 tw-rounded-lg tw-pb-4 tw-bg-white" style="box-shadow: 2px 4px 5px 4px rgba(0, 0, 0, 0.25);">
            {{-- title --}}
            <p class="tw-bg-sky-500 tw-py-2 tw-rounded-t-lg tw-text-white tw-text-xl tw-font-medium tw-text-center">Cara Penggunaan</p>
            <div class="tw-px-8 tw-mt-4">
                <ul class="tw-list-disc tw-list-outside tw-font-medium tw-flex tw-gap-2 tw-flex-col">
                    <li>Bacalah peta konsep dan pahami materi pada buku teks pelajaran Buku KIMIA untuk SMA/MA Kelas X Berdasarkan Kurikulum 2013 Edisi Revisi 2016 Penerbit Erlangga dan modul UKBM ini.</li>
                    <li>Setelah memahami isi materi dalam bacaan, berlatihlah melalui tugas-tugas yang terdapat pada UKBM ini, baik bekerja sendiri maupun bersama teman sebangku atau teman lainnya.</li>
                    <li>Kerjakan UKBM ini dibuku kerja atau langsung mengisikan pada bagian yang telah disediakan.</li>
                    <li>Setiap jawaban yang kalian submit akan secara otomatis terupload ke database guru dan jawaban dapat diganti sampai guru memberi nilai.</li>
                    <li>Kalian dapat belajar bertahap dan berlanjut melalui kegiatan Ayo Berlatih!!. Apabila kalian yakin sudah paham dan mampu menyelesaikan permasalahan-permasalahan dalam setiap subbab. Kalian boleh sendiri atau mengajak teman lain yang sudah siap untuk mengikuti tes evaluasi di akhir.</li>
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