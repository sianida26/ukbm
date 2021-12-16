<?php

    use Illuminate\Support\Facades\Auth;

    $title = "Teori Tentang Atom";
    $subtitle = "Penjelasan mendasar mengenai atom";
    $coverUrl = asset('storage/assets/rm373batch15-bg-05.jpg');
    $coverDescription = "Ilustrasi atom (sumber: <u><a href='https://www.freepik.com/vectors/design'>Freepik</a></u>)";
    $soals = App\Models\Soal::where('subbab', 'A')->get();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/katex.min.css" integrity="sha384-ThssJ7YtjywV52Gj4JE/1SQEDoMEckXyhkFVwaf4nDSm5OBlXeedVYjuuUd0Yua+" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/katex.min.js" integrity="sha384-Bi8OWqMXO1ta+a4EPkZv7bYGIes7C3krGSZoTGNTAnAn5eYQc7IIXrJ/7ck1drAi" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/contrib/mhchem.min.js" integrity="sha384-LIgAiYlGSAdpNC9+YDjDPF6JeS/RRIumtNo0CmyQERZ/+g0h9MbuYQwf/5pQ4Y4M" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/contrib/auto-render.min.js" integrity="sha384-vZTG03m+2yp6N6BNi5iM4rW4oIwk5DfcNdFfxkk9ZWpDriOkXX8voJBFrAO7MpVl" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>
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
                <img src="{{asset('/storage/assets/firda.jpg')}}" alt="avatar" class="tw-w-12 tw-h-12 tw-rounded-full">

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
            <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
                <img src="{{asset('/storage/assets/democritus.jpg')}}" alt="democritus" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">Democritus (460 - 370 BC)</p>
            </div>

            {{-- dalton image --}}
            <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
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

        {{-- soal --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soals as $soal)
                    <div class="tw-w-full tw-mt-4">
                        <li>{!!$soal->soal!!}</li>
                        @if(Auth::user()->hasRole('siswa'))
                            <input name="soal-{{$soal->id}}" type="text" placeholder="Ketikkan jawabanmu di sini" class="tw-bg-white tw-shadow-md tw-rounded-md tw-border-orange-600 tw-border focus:tw-ring-2 focus:tw-ring-orange-600 focus:tw-outline-none tw-px-4 tw-py-2 tw-w-full tw-mt-2">
                        @else
                            <p class="tw-mt-2 tw-font-semibold">Jawaban:</p>
                            <p class="tw-font-semibold">{!!$soal->kunci!!}</p>
                        @endif
                    </div>
                @endforeach
            </ol>

            @if(Auth::user()->hasRole('siswa'))
                <div class="tw-w-full tw-flex tw-justify-end tw-px-8 tw-text-base tw-pt-8">
                    <button type="submit" class="tw-rounded-md tw-bg-orange-700 tw-text-white tw-px-4 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-orange-600 tw-shadow-md">Simpan Jawaban</button>
                </div>
            @endif

        </form>
    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.pendahuluan')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Pendahuluan</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.perkembanganModel')}}">
            <p>Perkembangan Model Atom</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')
</body>
</html>