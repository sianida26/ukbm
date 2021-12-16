<?php
    $title = "Struktur Atom";
    $subtitle = "Membahas tentang atom dan isinya";
    $coverUrl = "https://picsum.photos/800/400";
    $coverDescription = "";
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
                <img src="{{asset('/storage/assets/firda.jpg')}}" alt="avatar" class="tw-w-12 tw-h-12 tw-rounded-full">

                {{-- name --}}
                <div class="tw-w-full tw-flex tw-flex-col tw-items-center">
                    <p>Diketik dengan &#10084;&#65039; oleh <strong>Firda Amalia</strong></p>
                    <p>Dibuat pada tanggal 8 Desember 2021</p>
                </div>
            </div>

            {{-- image --}}
            <img src="{{$coverUrl}}" alt="image" class="tw-w-full tw-mt-4">
            <p class="tw-text-sm tw-font-light tw-mt-2">{!!$coverDescription!!}</p>

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        <p class="tw-mt-4">Berdasarkan perkembangan teori atom yang sudah kalian pelajari sebelumnya,dapat
            disimpulkan bahwa di dalam atom terdapat inti atom dan partikel-partikel yang
            menyusunnya. Partikel – partikel tersebut antara lain; <span class="highlight">elektron,proton dan neutron.</span></p>
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Elektron</h1>

        <p class="tw-mt-4">Pernahkah kalian memperhatikan tabung televisi? Tabung televisi merupakan
            tabung sinar katode. Percobaan tabung sinar katode pertama kali dilakukan oleh
            William Crookes (1875). Hasil eksperimennya yaitu ditemukannya seberkas sinar
            yang muncul dari arah katode menuju ke anode yang disebut sinar katode. George
            Johnstone Stoney (1891) yang mengusulkan nama sinar katode disebut “elektron“.
            Kelemahan dari Stoney tidak dapat menjelaskan pengaruh elektron terhadap
            perbedaan sifat antara atom suatu unsur dengan atom dalam unsur lainnya.
            
            Antoine Henri Becquerel (1896) menentukan sinar yang dipancarkan dari unsur-
            unsur radioaktif yang sifatnya mirip dengan elektron. Joseph John Thomson
            
            (1897) melanjutkan eksperimen William Crookes. yaitu pengaruh medan listrik
            dan medan magnet dalam tabung sinar katode.</p>

            {{-- Gambar tabung sinar katoda --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/cathode-ray-tube-renamed.jpg')}}" alt="Percobaan tabung sinar katoda" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Percobaan tabung sinar katoda</p>
            </div>
        </div>

        <p class="tw-mt-4">Hasil percobaan J.J. Thomson menunjukkan bahwa sinar katode dapat dibelokkan
            ke arah kutub positif medan listrik. Hal ini membuktikan terdapat partikel
            bermuatan negatif dalam suatu atom.Besarnya muatan dalam elektron ditemukan
            oleh Robert Andrew Milikan (1908) melalui percobaan tetes minyak Milikan
            seperti gambar berikut.</p>

        {{-- Gambar tetes minyak milikan --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/millikan_result.jpg')}}" alt="Percobaan tetes minyak millikan" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Percobaan tetes minyak Millikan</p>
            </div>
        </div>

        <p class="tw-mt-4">Minyak disemprotkan ke dalam tabung yang bermuatan listrik. Akibat gaya tarik
            gravitasi akan mengendapkan tetesan minyak yang turun. Apabila tetesan minyak
            diberi muatan negatif maka akan tertarik ke kutub positif medan listrik. Dari hasil
            percobaan Milikan dan Thomson diperoleh muatan elektron –1 dan massa elektron
            0</p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Proton</h1>
        
        <p class="tw-mt-4">Jika massa elektron 0 berarti suatu partikel tidak mempunyai massa. Namun pada
            kenyataannya partikel materi mempunyai massa yang dapat diukur dan atom
            bersifat atom itu netral. Bagaimana mungkin atom itu bersifat netral dan
            mempunyai massa, jika hanya ada elektron saja dalam atom?
            Eugene Goldstein (1886) melakukan eksperimen dari tabung gas yang memiliki
            katode, yang diberi lubang - lubang dan diberi muatan listrik.</p>

        {{-- Gambar percobaan goldstein --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/goldstein_experiment.jpg')}}" alt="Percobaan Goldstein" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Percobaan Goldstein</p>
            </div>
        </div>

        <p class="tw-mt-4">
            Hasil eksprerimen tersebut membuktikan bahwa pada saat terbentuk elektron
            yang menuju anode, terbentuk pula sinar positif yang menuju arah berlawanan
            melewati lubang pada katode. Setelah berbagai gas dicoba dalam tabung ini,
            ternyata gas hidrogenlah yang menghasilkan sinar muatan positif yang paling kecil
            baik massa maupun muatannya, sehingga partikel inidisebut dengan proton.
            Massa proton = 1 sma (satuan massa atom) dan muatan proton = +1.
        </p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Neutron</h1>
        <p class="tw-mt-4">Prediksi dari Rutherford memacu W. Bothe dan H. Becker (1930) melakukan
            eksperimen penembakan partikel alfa pada inti atom berilium (Be) dan dihasilkan
            radiasi partikel berdaya tembus tinggi. Eksperimen ini dilanjutkan oleh James
            Chadwick (1932).</p>

        {{-- Gambar percobaan Chadwick --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/chadwick_experiment.png')}}" alt="Percobaan Chadwick" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Percobaan Chadwick</p>
            </div>
        </div>

        <p class="tw-mt-4">Chadwick mengamati bahwa berilium yang ditembak dengan partikel &alpha;
            memancarkan suatu partikel yang mempunyai daya tembus yang sangat tinggi dan
            tidak dipengaruhi oleh medan magnet maupun medan listrik. Partikel ini bersifat
            netral atau tidak bermuatan.</p>
    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.perkembanganModel')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Perkembangan Model Atom</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.tandaAtom')}}">
            <p>Tanda Atom</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')
</body>
</html>