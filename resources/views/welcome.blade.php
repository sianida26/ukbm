<?php
    use Illuminate\Support\Facades\Auth;

    $navs = collect([
        ['Pendahuluan', route('materi.pendahuluan')],
        ['A. Teori Tentang Atom', route('materi.teoriAtom')],
        ['B. Perkembangan Model Atom', route('materi.perkembanganModel')],
        ['C. Struktur Atom', route('materi.strukturAtom')],
        ['D. Tanda Atom', route('materi.tandaAtom')],
        ['E. Teori Atom Mekanika Kuantum', route('materi.mekanikaKuantum')],
        ['F. Sistem Periodik Unsur', route('materi.spu')],
        ['Ujian AKhir', '#'],
    ]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>

    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    @stack('styles')
    <style>
        ol.pengetahuan{
            counter-reset: pengetahuan;
        }

        ol.pengetahuan li::before{
            /* list-style: none; */
            counter-increment: pengetahuan;
            content: "3." counter(pengetahuan) " ";
            /* margin-bottom: 1em; */
        }

        ol.pengetahuan li{
            margin-bottom: 1em;
            text-indent: -1.5em;
            padding-left: 1.5em;
            list-style-position: outside;
            /* text-indent: -1em; */
        }

        ol.keterampilan{
            counter-reset: keterampilan;
        }

        ol.keterampilan li::before{
            /* list-style: none; */
            counter-increment: keterampilan;
            content: "4." counter(keterampilan) " ";
            /* margin-bottom: 1em; */
        }

        ol.keterampilan li{
            margin-bottom: 1em;
            text-indent: -1.5em;
            padding-left: 1.5em;
            list-style-position: outside;
            /* text-indent: -1em; */
        }
    </style>
</head>
<body class="tw-w-screen tw-min-h-screen tw-flex tw-flex-col montserrat tw-bg-gray-50">

    {{-- cover --}}
    <section class="tw-w-full tw-min-h-screen tw-relative tw-bg-cover tw-bg-center tw-flex tw-flex-col">
        
        <img src="{{asset('storage/assets/bg-welcome.png')}}" alt="" class="tw-object-cover tw-w-full tw-h-full tw-object-center tw-absolute tw-z-0">
        <div class="tw-bg-sky-500 tw-w-full tw-h-full tw-absolute tw-bg-opacity-60 tw-z-10"></div>

        {{-- content --}}
        <div class="tw-px-4 tw-z-20 tw-w-full tw-h-full tw-relative tw-mt-4 tw-text-white tw-flex tw-flex-col tw-flex-grow" style="">

            {{-- header --}}
            <div class="tw-flex tw-justify-between tw-items-center">

                <span>
                    @if(Auth::user()->hasRole('guru'))
                        <a href="/dashboard" class="bi bi-house-fill tw-text-white tw-text-2xl"></a>
                    @endif
                </span>
                
                <span class="tw-flex tw-items-center tw-gap-2">
                    {{-- name --}}
                    <span class="tw-hidden lg:tw-inline tw-font-bold">{{Auth::user()->name}}</span>
                    {{-- profile --}}
                    <a href="/profil" class="bi bi-person-circle tw-text-2xl"></a>
                </span>
            </div>

            {{-- title --}}
            <div class="tw-flex tw-flex-col tw-flex-grow tw-flex-1 tw-justify-center tw-items-center tw-px-4 tw-gap-2 tw-max-w-screen-lg tw-self-center lg:tw-text-left lg:tw-items-start">
                <h2 class="tw-text-2xl lg:tw-text-4xl tw-font-semibold">UKBM (Unit Kegiatan Belajar Mandiri)</h2>
                <h1 class="tw-text-4xl lg:tw-text-6xl tw-font-bold">Struktur Atom dan Sistem Periodik Unsur</h1>
                <span class="tw-self-start">Oleh: Firda Amalia</span>

                <button class="tw-mt-4 tw-bg-orange-500 lg:tw-text-lg tw-text-white tw-rounded-md tw-px-3 tw-py-2 tw-self-end">Ayo Mulai Belajar ^_^</button>
            </div>
        </div>

    </section>
    
    {{-- kompetensi dasar --}}
    <section class="tw-text-gray-700 tw-pt-8 tw-pb-4 tw-px-6">
        <div class="tw-max-w-screen-lg tw-mx-auto">
            <h1 class="tw-text-2xl tw-font-bold">Kompetensi Dasar</h1>

            <p class="tw-text-justify tw-mt-4 tw-text-sm tw-leading-relaxed">
                KOMPETENSI INTI DAN KOMPETENSI DASAR KIMIA SMA/MA KELAS X KURIKULUM 2013 BERDASARKAN KEPUTUSAN MENTERI PENDIDIKAN DAN KEBUDAYAAN <strong class="tw-text-sky-500">NOMOR 719/P/2020</strong> TENTANG PEDOMAN PELAKSANAAN KURIKULUM PADA SATUAN PENDIDIKAN DALAM KONDISI KHUSUS DAN DITETAPKAN KEPUTUSAN KEPALA BADAN PENELITIAN  DAN PENGEMBANGAN DAN PERBUKUAN <strong class="tw-text-sky-500">NOMOR 018/H/KR/2020</strong> TENTANG KOMPETENSI INTI DAN KOMPETENSI  DASAR PELAJARAN PADA KURIKULUM  2013  PADA PENDIDIKAN ANAK USIA DINI,  PENDIDIKAN DASAR, DAN PENDIDIKAN MENENGAH BERBENTUK SEKOLAH  MENENGAH ATAS UNTUK KONDISI  KHUSUS
            </p>
    
            <table class="tw-border-orange-500 tw-border-2 tw-border-collapse tw-mt-4 tw-text-sm">
                <thead class="tw-font-semibold tw-text-center">
                    <tr>
                        <td class="tw-border-2 tw-border-orange-500 tw-py-1" style="width: 50%">KOMPETENSI DASAR (PENGETAHUAN)</td>
                        <td class="tw-border-2 tw-border-orange-500 tw-py-1" style="width: 50%">KOMPETENSI DASAR (KETERAMPILAN)</td>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <td class="tw-border-2 tw-border-orange-500 tw-pl-2 tw-pr-1">
                            <ol class="pengetahuan">
                                <li>Menganalisis   perkembangan model atom   dari   model   atom   Bohr   dan Mekanika Gelombang</li>
                                <li>Menjelaskan konfigurasi elektron dan pola    konfigurasi    elektron    terluar untuk  setiap  golongan  dalam  tabel periodik</li>
                                <li>Menganalisis  kemiripan  sifat  unsur dalam golongan dan keperiodikannya</li>
                            </ol>
                        </td>
                        <td class="tw-border-2 tw-border-orange-500 tw-pl-2 tw-pr-1">
                            <ol class="keterampilan">
                                <li>Menjelaskan   fenomena   alam   atau hasil  percobaan  menggunakan  model atom</li>
                                <li>Menentukan letak suatu unsur dalam tabel periodik berdasarkan konfigurasi elektron</li>
                                <li>Menyajikan  hasil  analisis  data-data unsur    dalam    kaitannya    dengan kemiripan   dan   sifat   keperiodikan unsur</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Tujuan Pembelajaran --}}
    <section class="tw-px-6 tw-bg-sky-200 tw-text-gray-700 tw-py-8">

        <div class="tw-max-w-screen-lg tw-mx-auto">
            <h1 class="tw-text-2xl tw-font-bold">Tujuan Pembelajaran</h1>

            <div class="tw-mt-4">
                <p>Setelah mempelajari materi ini, siswa diharapkan mampu:</p>
                <ul class="tw-list-disc tw-px-4">
                    <li>Menjelaskan partikel dasar penyusun atom, konfigurasi elektron, serta perkembangan teori atom,</li>
                    <li>Menjelaskan perkembangan sistem periodik unsur dan dasar-dasar pengelompokan unsur,</li>
                    <li>Menjelaskan hubungan konfigurasi elektron dengan sistem periodik unsur.</li>
                </ul>
            </div>
    
            <hr class="tw-border-gray-500 tw-my-8" />
    
            <h1 class="tw-text-2xl tw-font-bold">Karakter yang Dikembangkan</h1>
    
            <div class="tw-mt-4">
                <ul class="tw-list-disc tw-px-4">
                    <li>Menyadari keteraturan dan kompleksitas konfigurasi elektron dalam atom sebagai wujud kebesaran Tuhan Yang Maha Esa.</li>
                    <li>Menunjukkan rasa ingin tahu yang tinggi dalam memahami struktur atom dan sistem periodik unsur.</li>
                    <li>Berperilaku jujur, disiplin, bertanggung jawab, santun, bekerja sama, dan proaktif dalam melakukan percobaan dan berdiskusi.</li>
                </ul>
            </div>
        </div>

    </section>

    {{-- PETA KONSEP --}}
    <section class="tw-px-6 tw-text-gray-700 tw-py-8">
        <h1 class="tw-text-2xl tw-font-bold tw-text-center">PETA KONSEP</h1>

        <a href="{{asset('storage/assets/petakonsep.png')}}" class="tw-w-full tw-pt-4">
            <img src="{{asset('storage/assets/petakonsep.png')}}" alt="peta konsep" class="tw-w-full tw-mt-4">
        </a>

        <hr class="tw-border-gray-500 tw-mt-8" />
        
    </section>

    {{-- MATERI PEMBELAJARAN --}}
    <section class="tw-px-6 tw-text-gray-700 tw-pb-8">

        <div class="tw-max-w-screen-lg tw-mx-auto">
            <h1 class="tw-text-2xl tw-font-bold">Materi Pembelajaran</h1>

            <div class="tw-flex tw-flex-col tw-mt-4 tw-text-sm tw-gap-4 lg:tw-gap-6">
    
                @foreach($navs as $nav)
                    <a href="{{$nav[1]}}" class="tw-flex tw-justify-between tw-items-center tw-py-4 tw-px-4 tw-bg-white tw-rounded-md" style="box-shadow: 2px 4px 4px 4px rgba(0, 0, 0, 0.25);">
                        <span class="tw-tracking-wider tw-font-semibold">{{$nav[0]}}</span>
                        <i class="bi bi-send tw-text-sky-500 tw-text-lg"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <p class="tw-text-center tw-text-sm tw-py-4">&copy; Chesa & Firda 2021</p>
</body>
</html>