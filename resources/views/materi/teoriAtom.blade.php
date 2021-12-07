<?php
    $title = "Teori Tentang Atom";
    $subtitle = "Penjelasan mendasar mengenai atom";
    $coverUrl = asset('storage/assets/rm373batch15-bg-05.jpg');
    $coverDescription = "Ilustrasi atom (sumber: <u><a href='https://www.freepik.com/vectors/design'>Freepik</a></u>)";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$title}}</title>

    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    @stack('styles')
</head>
<body class="roboto tw-bg-gray-100">

    {{-- header --}}
    <div class="tw-flex tw-justify-between tw-items-center tw-px-4 tw-mt-4">

        <span>
            @if(Auth::user()->hasRole('guru'))
                <a href="/dashboard" class="bi bi-house-fill tw-text-2xl"></a>
            @endif
        </span>
        
        <span class="tw-flex tw-items-center tw-gap-2">
            {{-- name --}}
            <span class="tw-hidden lg:tw-inline tw-font-bold">{{Auth::user()->name}}</span>
            {{-- profile --}}
            <a href="/profil" class="bi bi-person-circle tw-text-2xl"></a>
        </span>
    </div>

    {{-- title section --}}
    <div class="tw-px-4 tw-mt-8 tw-text-center tw-max-w-screen-md tw-mx-auto">
        <h1 class="tw-text-3xl tw-font-bold">{{$title}}</h1>
        <h2 class="tw-text-xl tw-font-medium tw-text-gray-600 tw-mt-2">{{$subtitle}}</h2>

        {{-- card --}}
        <div class="tw-w-full tw-rounded-lg tw-bg-coolGray-200 tw-p-4 tw-flex tw-flex-col tw-mt-4">

            {{-- profile --}}
            <div class="tw-flex tw-gap-2 tw-flex-col tw-items-center tw-justify-center">
                
                {{-- avatar --}}
                <img src="https://picsum.photos/200/200" alt="avatar" class="tw-w-12 tw-h-12 tw-rounded-full">

                {{-- name --}}
                <div class="tw-w-full tw-flex tw-flex-col tw-items-center">
                    <p>Diketik dengan &#10084;&#65039; oleh <strong>Firda Amalia</strong></p>
                    <p>Dibuat pada tanggal 7 Desember 2021</p>
                </div>
            </div>

            {{-- image --}}
            <img src="{{$coverUrl}}" alt="image" class="tw-w-full tw-mt-4">
            <p class="tw-text-sm tw-font-light tw-mt-2">{!!$coverDescription!!}</p>

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        {{-- <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left">What is Room Database?</h1> --}}

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 md:tw-flex-row md:tw-justify-between">
            {{-- democritus image --}}
            <div>
                <img src="{{asset('/storage/assets/democritus.jpg')}}" alt="democritus" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">Democritus (460 - 370 BC)</p>
            </div>

            {{-- dalton image --}}
            <div>
                <img src="{{asset('/storage/assets/dalton.jpg')}}" alt="John Dalton" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">John Dalton (1766 - 1844)</p>
            </div>
        </div>
        <p class="tw-mt-4">Lima abad sebelum masehi, filsuf dari Yunani yang bernama <strong>Democritus</strong> menjelaskan dan percaya bahwa <strong>semua materi (zat) tersusun dari partikel yang sangat kecil dan tidak dapat dibagi lagi yang disebut dengan</strong> <strong class="highlight tw-bg-gray-300 tw-text-red-700">atomos</strong> <strong>(tidak dapat dibagi).</strong> Pada tahun 1803, <strong>John Dalton</strong> (1766 - 1844), seorang guru sekaligus ilmuwan inggris, mendefinisikan bahwa <strong>benda terkecil penyusun materi yang tidak dapat dibagi lagi sebagai <span class="highlight tw-bg-gray-300 tw-text-sky-700">atom</span></strong>. Di dalam teorinya tentang atom, John Dalton membuat hipotesis yang menjadi dasar berkembangnya kimia modern. Hipotesis dalton tentang atom secara ringkas adalah sebagai berikut:</p>

        <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-mt-4">
            <li>Unsur tersusun atas partikel yang sangat kecil dan tidak dapat dibagi lagi yang disebut dengan <span class="highlight tw-bg-gray-300 tw-text-sky-700">atom</span></li>
            <li>Atom-atom yang menyusun suatu unsur adalah identik, baik massa, ukuran, dan sifatnya, sedangkan atom dari unsur yang berbeda mempunyai ukuran, massa, dan sifat yang berbeda.</li>
            <li>Senyawa tersusun dari atom-atom yang terdiri dari dua unsur atau lebih dengan perbandingan tetap dan tertentu.</li>
            <li><span class="highlight tw-bg-yellow-200">Atom tidak dapat diciptakan dan dimusnahkan.</span> Pada reaksi kimia, terjadi penataan ulang atom-atom atau berpisahnya atom-atom penyusun senyawa dan kemudian bergabung kembali dengan komposisi yang berbeda.</li>
        </ol>
        
        <p class="tw-mt-4">Konsep tentang atom yang dikemukakan oleh John Dalton lebih rinci dan lebih jelas dibanding yang dikemukakan oleh Democritus. Dari hipotesis yang pertama, sebenarnya John Dalton juga tidak bisa menjelaskan secara rinci seperti apakah bentuk atom.</p>
        <p class="tw-mt-4">Akan tetapi, Dalton lebih realistis dengan menunjukkan bahwa atom dari unsur yang berbeda mempunyai ukuran dan sifat yang berbeda, misalnya ditunjukkan oleh perbedaan sifat antara unsur hidrogen dan oksigen karena keduanya disusun dari atom yang berbeda. Hipotesis yang kedua lebih menjelaskan bahwa bila dua atom yang berbeda bergabung dengan perbandingan jumlah atom yang berbeda, akan menghasilkan senyawa yang berbeda pula.</p>
        <p class="tw-mt-4">Gagasan tersebut memberikan penjelasan kepada Hukum Perbandingan Tetap atau <span class="highlight tw-bg-gray-300 tw-text-green-700">Hukum Proust</span> yang dikemukakan oleh Joseph Proust (1754 - 1826) pada tahun 1799. Hipotesis Dalton ini mendorong para ilmuwan pada waktu itu untuk terus bereksperimen tentang atom.</p>
    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.pendahuluan')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Pendahuluan</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.teoriAtom')}}">
            <p>Teori Tentang Atom</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    {{-- footer --}}
    <footer class="tw-max-w-sm tw-mx-auto tw-flex tw-flex-col tw-text-center tw-font-light tw-mt-16 tw-text-sm tw-py-8 tw-px-4">
        <hr class="tw-border-black tw-mb-2">
        <p>Copyright &copy; 2021 Firda Amalia</p>
        <p>Web ini dibuat dengan sepenuh &#10084;&#65039; oleh</p>
        <p class="tw-font-medium">Firda Amalia</p>

    </footer>
    
    @stack('scripts')
</body>
</html>