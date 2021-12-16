<?php
    use Illuminate\Support\Facades\Auth;
    $soalSejarah = App\Models\Soal::where('subbab', 'sejarah spu')->get();
    $soalSifat = App\Models\Soal::where('subbab', 'sifat keperiodikan')->get();
    $title = "Sistem Periodik Unsur";
    $subtitle = "Sejarah dan sifat-sifat keperiodikan";
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
                    <p>Dibuat pada tanggal 16 April 2001</p>
                </div>
            </div>

            {{-- image --}}
            <img src="{{$coverUrl}}" alt="image" class="tw-w-full tw-mt-4">
            <p class="tw-text-sm tw-font-light tw-mt-2">{!!$coverDescription!!}</p>

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        <p class="tw-mt-4">Untuk mempelajari unsur yang begitu banyak, diperlukan suatu cara agar mudah untuk mengenali sifat-sifatnya. Salah satunya adalah dengan menggunakan <span class="highlight tw-bg-blue-300 tw-text-blue-800">sistem periodik unsur</span>. Sistem periodik unsur merupakan suatu sistem yang sangat baik untuk mempelajari kecenderungan sifat-sifat suatu unsur. Bahkan dapat digunakan untuk "meramal" sifat-sifat unsur yang belum ditemukan.</p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Perkembangan Sistem Periodik</h1>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Triade Döbereiner</h2>
        <p class="tw-mt-4">Pada tahun 1829, Johann Wolfgang Döbereiner mempelajari sifat-sifat beberapa unsur yang sudah dikenal saat itu. Dari unsur-unsur yang dipelajari, didapatkan suatu pola tertentu. yaitu bila unsur-unsur dikelompokkkan berdasarkan kesamaan sifat dan diurutkan massa atomnya, maka di setiap kelompok terdapat tiga unsru di mana massa unsur yang di tengah merupakan rata-rata dari massa unsur yang di tepi. Tiga unsur yang sifatnya mirip ini disebut dengan <span class="highlight tw-bg-blue-300 tw-text-blue-800">Triade Döbereiner</span>.</p>

        <table class="tw-mt-4 tw-mx-auto tw-w-full tw-max-w-screen-sm tw-text-center tw-border tw-border-collapse tw-border-black">
            <thead>
                <tr class="tw-font-semibold">
                    <td class="tw-w-1/5 tw-border tw-border-black">Triade 1</td>
                    <td class="tw-w-1/5 tw-border tw-border-black">Triade 2</td>
                    <td class="tw-w-1/5 tw-border tw-border-black">Triade 3</td>
                    <td class="tw-w-1/5 tw-border tw-border-black">Triade 4</td>
                    <td class="tw-w-1/5 tw-border tw-border-black">Triade 5</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="tw-border tw-border-black">Li</td>
                    <td class="tw-border tw-border-black">Ca</td>
                    <td class="tw-border tw-border-black">S</td>
                    <td class="tw-border tw-border-black">Cl</td>
                    <td class="tw-border tw-border-black">Mn</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">Na</td>
                    <td class="tw-border tw-border-black">Sr</td>
                    <td class="tw-border tw-border-black">Se</td>
                    <td class="tw-border tw-border-black">Br</td>
                    <td class="tw-border tw-border-black">Cr</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">K</td>
                    <td class="tw-border tw-border-black">Ba</td>
                    <td class="tw-border tw-border-black">Te</td>
                    <td class="tw-border tw-border-black">I</td>
                    <td class="tw-border tw-border-black">Fe</td>
                </tr>
            </tbody>
        </table>
        <p class="tw-text-center tw-text-sm tw-text-gray-700 tw-mt-2">Daftar unsur Triade Döbereiner</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Teori Oktaf Newlands</h2>
        <p class="tw-mt-4">Susunan tabel periodik yang dikemukakan oleh Oktaf Newlands didasarkan pada kenaikan massa atomnya dan setelah atom ke delapan, akan didapatkan sifat unsur yang mirip dengan sifat unsur pertama, unsur ke sembilan mirip dengan unsur ke dua, dan seterusnya.</p>

        <table class="tw-border tw-border-collapse tw-text-center tw-border-black tw-w-full tw-mt-4">
            <tbody>
                <tr>
                    <td class="tw-border tw-border-black">H 1</td>
                    <td class="tw-border tw-border-black">F 8</td>
                    <td class="tw-border tw-border-black">Cl 15</td>
                    <td class="tw-border tw-border-black">Co & Ni 22</td>
                    <td class="tw-border tw-border-black">Br 29</td>
                    <td class="tw-border tw-border-black">Pd 36</td>
                    <td class="tw-border tw-border-black">I 42</td>
                    <td class="tw-border tw-border-black">Pt & Ir 50</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">Li 2</td>
                    <td class="tw-border tw-border-black">Na 9</td>
                    <td class="tw-border tw-border-black">K 16</td>
                    <td class="tw-border tw-border-black">Cu 23</td>
                    <td class="tw-border tw-border-black">Rb 30</td>
                    <td class="tw-border tw-border-black">Ag 37</td>
                    <td class="tw-border tw-border-black">Cs 44</td>
                    <td class="tw-border tw-border-black">Os 51</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">Be 3</td>
                    <td class="tw-border tw-border-black">Mg 10</td>
                    <td class="tw-border tw-border-black">Ca 17</td>
                    <td class="tw-border tw-border-black">Zn 24</td>
                    <td class="tw-border tw-border-black">Sr 31</td>
                    <td class="tw-border tw-border-black">Cd 38</td>
                    <td class="tw-border tw-border-black">Ba & V 45</td>
                    <td class="tw-border tw-border-black">Hg 52</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">B 4</td>
                    <td class="tw-border tw-border-black">Al 11</td>
                    <td class="tw-border tw-border-black">Cr 19</td>
                    <td class="tw-border tw-border-black">Y 25</td>
                    <td class="tw-border tw-border-black">Ce & La 33</td>
                    <td class="tw-border tw-border-black">U 40</td>
                    <td class="tw-border tw-border-black">Ta 46</td>
                    <td class="tw-border tw-border-black">Ti 53</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">C 5</td>
                    <td class="tw-border tw-border-black">Si 12</td>
                    <td class="tw-border tw-border-black">Ti 18</td>
                    <td class="tw-border tw-border-black">In 26</td>
                    <td class="tw-border tw-border-black">Zr 32</td>
                    <td class="tw-border tw-border-black">Sn 39</td>
                    <td class="tw-border tw-border-black">W 47</td>
                    <td class="tw-border tw-border-black">Pb 54</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">N 6</td>
                    <td class="tw-border tw-border-black">P 13</td>
                    <td class="tw-border tw-border-black">Mn 20</td>
                    <td class="tw-border tw-border-black">As 27</td>
                    <td class="tw-border tw-border-black">Di & Mo 34</td>
                    <td class="tw-border tw-border-black">Sb 41</td>
                    <td class="tw-border tw-border-black">Nb 48</td>
                    <td class="tw-border tw-border-black">Bi 55</td>
                </tr>
                <tr>
                    <td class="tw-border tw-border-black">O 7</td>
                    <td class="tw-border tw-border-black">S 14</td>
                    <td class="tw-border tw-border-black">Fe 21</td>
                    <td class="tw-border tw-border-black">Se 28</td>
                    <td class="tw-border tw-border-black">Rh & Ru 35</td>
                    <td class="tw-border tw-border-black">Te 43</td>
                    <td class="tw-border tw-border-black">Au 49</td>
                    <td class="tw-border tw-border-black">Th 56</td>
                </tr>
            </tbody>
        </table>
        <p class="tw-text-center tw-text-sm tw-text-gray-700 tw-mt-2">Daftar unsur Oktaf Newlands</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Sistem Periodik Mendeleev</h2>
        <p class="tw-mt-4">Sistem periodik Mendeleev atau sistem periodik bentuk pendek dibuat oleh ilmuwan asal Rusia, Dmitri Ivanovich Mendeleev. Sistem periodik Mendeleev didasarkan atas kenaikan massa atom dan kemiripan sifat. </p>
        <p class="tw-mt-4">Sistem periodik Mendeleev disusun berdasarkan kenaikan massa atom dan kemiripan sifat. Dari susunan tersebut, didapatkan <span class="highlight tw-bg-blue-300 tw-text-blue-800">hukum periodik</span>, di mana sifat unsur merupakan fungsi periodik dari massa atom. Artinya, bila unsur-unsur tersebut disusun berdasarkan kenaikan massa atomnya, mkaa sifat unsur akan berulang secara periodik.</p>

        <img src="{{asset('/storage/assets/mendeleev-periodic-table.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-text-sm tw-text-center tw-text-gray-700">Sistem Periodik Unsur Mendeleev</p>

        <p class="tw-mt-4">Pada tabel periodik, lajur tegak dinamakan <span class="highlight tw-bg-blue-300 tw-text-blue-800">golongan</span>, sedangkan lajur mendatar disebut dengan <span class="highlight tw-bg-blue-300 tw-text-blue-800">periode</span>. Pada tabel periodik tersebut, dicantumkan pula sifat kimianya. Sebagai contoh: pada golongan I atau <em>Gruppe I</em>, terdapat rumus R<sup>2</sup>O yang menunjukkan bahwa golongan 1 tersebut bila membentuk oksida akan mempunyai rumus H<sub>2</sub>O, Li<sub>2</sub>O, dan Na<sub>2</sub>O.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Sistem Periodik Unsur Modern</h2>
        <p class="tw-mt-4">Pada sebelum perang dunia I, Henry Moseley berhasil menemukan kesalahan pada tabel periodik yang dibuat oleh Dmitri Mendeleev, yaitu terdapat unsur yang letaknya terbalik. Moseley menemukan bahwa keperiodikan sifat tidak berdasarkan massa atom, tetapi didasarkan oleh nomor atom atau muatan inti. Susunan tabel periodik yang Ia susun akhirnya berkembang lebih baik sampai yang kita gunakan sekarang. </p>

        <img src="{{asset('/storage/assets/tabel-periodik.svg')}}" alt="" class="tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-text-sm tw-text-center tw-text-gray-700 tw-mt-4">Sistem Periodik Unsur. Untuk mode interaktif, <span class="tw-text-blue-500 tw-underline"><a href="https://www.rsc.org/periodic-table">klik di sini</a></span></p>

        {{-- soal sejarah spu --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soalSejarah as $soal)
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

            <div class="tw-w-full tw-flex tw-justify-end tw-px-8 tw-text-base tw-pt-8">
                <button type="submit" class="tw-rounded-md tw-bg-orange-700 tw-text-white tw-px-4 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-orange-600 tw-shadow-md">Simpan Jawaban</button>
            </div>

        </form>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Sifat-Sifat Keperiodikan</h1>
        <p class="tw-mt-4">Dengan melihat sistem periodik, kita dapat melihat sifat-sifat yang dimiliki suatu unsur. Beberapa di antaranya adalah:</p>
        <ul>
            <li>Unsur-unsur yang terdapat pada golongan yang sama mempunyai kemiripan konfigurasi elektron sehingga unsur yang segolongan mempunyai sifat yang mirip.</li>
            <li>Unsur-unsur yang terdapat dalam satu periode dari kiri ke kanan konfigurasi elektronnya berubah secara teratur. Hal ini berakibat pada perubahan sifat unsur secara teratur sehingga unsur-unsur dalam satu periode dari kiri ke kanan mempunyai sifat yang berubah secara teratur.</li>
        </ul>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Sifat kelogaman</h2>
        <img src="{{asset('/storage/assets/sifat-logam.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Dalam sistem periodik unsur, sifat logam dari kiri ke kanan semakin menurun, sedangkan dari atas ke bawah sifat kelogamannya semakin besar.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Titik leleh dan Titik didih</h2>
        <img src="{{asset('/storage/assets/BoilingPoint.gif')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <img src="{{asset('/storage/assets/MeltingPoint.gif')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Dalam sistem periodik unsur, dari atas ke bawah, Untuk unsur-unsur logam, titik leleh dan titik didihnya cenderung menurun, untuk unsur non logam cenderung meningkat.</p>
        <p class="tw-mt-4">Sedangkan dari kiri ke kanan, titik lelehnya naik sampai maksimum pada golongan 15, kemudain turun seara teratur, sedangkan titik didih akan naik sampai maksimum pada golongan IIIA kemudian turun secara teratur.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Jari-Jari atom</h2>
        <img src="{{asset('/storage/assets/jari-jari-atom.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Dalam sistem periodik unsur, jari-jari atom dalam satu periode dari kiri ke kanan cenderung semakin pendek. Hal ini dikarenakan muatan inti efektif semakin meningkat dari kiri ke kanan.</p>
        <p class="tw-mt-4">Sedangkan dari atas ke bawah, jari-jari atom dalam satu golongan cenderung semakin meningkat dikarenakan bertambahnya kulit atom.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Energi Ionisasi</h2>
        <img src="{{asset('/storage/assets/ionisasi.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Energi Ionsisi Energi ionisasi adalah energi yang diperlukan oleh suatu atom untuk melepaskan elektron yang terikat paling lemah oleh suatu atom-atom atau ion dalam fase gas.</p>
        <p class="tw-mt-4">Pada sistem periodik unsur, energi ionisasi unsur-unsur dalam satu periode dari kiri ke kanan cenderung semakin besar, dan energi ionisasi unsur-unsur segolongan dari atas ke bawah semakin kecil</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Afinitas elektron</h2>
        <img src="{{asset('/storage/assets/afinitas-elektron.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Afinitas elektron adalah Besarnya energi yang dihasilkan apabila suatu atom menangkap sebuah elektron pada fase gas. Afinitas elektron dapat diartikan sebagai mudah atau tidaknya suatu atom untuk menerima elektron. Semakin besar afinitas elektronnya, maka atom tersebut lebih cenderung untuk menerima elektron menjadi ion negatif.</p>
        <p class="tw-mt-4">Sifat keperiodikan afinitas elektron menyerupai dengan sifat keperiodikan energi ionsiasi.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Keelektronegatifan</h2>
        <img src="{{asset('/storage/assets/electronegativity_trends.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto tw-mt-4">
        <p class="tw-mt-4">Keelektronegatifan adalah kecenderungan suatu atom dalam menarik pasangan elektron yang digunakan bersama dalam membentuk ikatan. Semakin besar nilai keelektronegatifan suatu atom, maka semakin mudah bagi atom tersebut untuk menarik pasangan elektron ikatan.</p>
        <p class="tw-mt-4"><p class="tw-mt-4">Pada sistem periodik unsur, keelektronegatifan unsur-unsur dalam satu periode dari kiri ke kanan cenderung semakin besar, dan keelektronegatifan unsur-unsur segolongan dari atas ke bawah semakin kecil</p></p>

        {{-- soal sifat keperiodikan --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soalSifat as $soal)
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

            <div class="tw-w-full tw-flex tw-justify-end tw-px-8 tw-text-base tw-pt-8">
                <button type="submit" class="tw-rounded-md tw-bg-orange-700 tw-text-white tw-px-4 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-orange-600 tw-shadow-md">Simpan Jawaban</button>
            </div>

        </form>
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

    @include('materi.footer')
    
    @stack('scripts')

    
</body>
</html>