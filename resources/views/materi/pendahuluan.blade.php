<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pendahuluan</title>

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
    <div class="tw-mx-auto tw-px-4 tw-mt-8 tw-text-center tw-max-w-screen-md">
        <h1 class="tw-text-3xl tw-font-bold">Pendahuluan</h1>
        {{-- <h2 class="tw-text-xl tw-font-medium tw-text-gray-600 tw-mt-2">Explore room database</h2> --}}

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
            <img src={{asset('/storage/assets/pierre-marie.jpg')}} alt="image" class="tw-w-full tw-mt-4">

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        {{-- <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left">What is Room Database?</h1> --}}

        <p class="tw-mt-4">Pernahkah kalian mendengar cerita tentang ilmuwan jenius <strong>Marie Curie</strong>? Perempuan yang memiliki sejumlah gelar dengan imbuhan <strong>“pertama”</strong> dan <strong>“satu-satunya”</strong>. </p>
        <p class="tw-mt-4">Dia adalah perempuan pertama yang meraih Penghargaan Nobel, profesor pertama di Universitas Paris dan perempuan satu-satunya yang memperoleh Penghargaan Nobel untuk dua kategori.</p>
        <p class="tw-mt-4">Bersama suaminya, Pierre Curie, ia menemukan unsur polonium dan radium. Dan Setelah kematian Pierre, ia mengembangkan lebih lanjut mengenai sinar-X.</p>
        <p class="tw-mt-4">Marie Curie lahir dari keluarga yang biasa-biasa saja, ayahnya seorang guru dan ia merupakan bungsu dari 5 bersaudara, sehingga ia sudah harus menjadi seorang pengajar dan pengasuh sejak kecil untuk mencukupi kebutuhan dan pendidikannya. Namun itu tidak menurunkan semangatnya untuk terus belajar hingga dapat menempuh pendidikan di Sorbonne University. Ia memanfaatkan waktu luangnya dengan membaca buku fisika, kimia, dan matematika. Dengan kegigihan dan ketekunannya bersama Pierre dalam melakukan penelitian, Marie menerima gelar doktor ilmu pengetahuan pada Juni 1903 dan, bersama Pierre, dia dianugerahi Medali Davy dari Royal Society dan pada tahun yang sama, mereka berbagi dengan Becquerel sebagai penerima Penghargaan Nobel Fisika untuk penemuan radioaktif.</p>
        <p class="tw-mt-4">Lalu, apakah kalian pernah terbayangkan bagaimana Marie Curie dan Pierre Curie dapat menemukan unsur polonium dan radium tersebut? Nah, sebelum kalian mempelajari tentang penemuan-penemuan unsur lebih lanjut, kita akan belajar tentang atom yang merupakan bagian terkecil yang menyusun unsur yang tidak dapat dipisahkan lagi.</p>

    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <div></div>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.teoriAtom')}}">
            <p>Teori Tentang Atom</p>  <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')
</body>
</html>