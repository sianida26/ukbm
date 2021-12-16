<?php
    use Illuminate\Support\Facades\Auth;
    $soalBohr = App\Models\Soal::where('subbab', 'bohr')->get();
    $title = "Perkembangan Model Atom";
    $subtitle = "Sebuah perjalanan singkat perkembangan model atom";
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
                <img src="https://picsum.photos/200/200" alt="avatar" class="tw-w-12 tw-h-12 tw-rounded-full">

                {{-- name --}}
                <div class="tw-w-full tw-flex tw-flex-col tw-items-center">
                    <p>Diketik dengan &#10084;&#65039; oleh <strong>Firda Amalia</strong></p>
                    <p>Dibuat pada tanggal 7 Desember 2001</p>
                </div>
            </div>

            {{-- image --}}
            <img src="{{$coverUrl}}" alt="image" class="tw-w-full tw-mt-4">
            <p class="tw-text-sm tw-font-light tw-mt-2">{!!$coverDescription!!}</p>

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        
        <p class="tw-mt-4">Sampai saat ini, tidak ada alat yang mampu untuk melihat bagaimana bentuk dan susunan dari atom. Oleh karena itu, beberapa ahli membuat suatu model untuk menjelaskan bagaimana keadaan suatu atom yang sebenarnya berdasarkan fenomena (gejala-gejala) yang ditimbulkannya</p>
        
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Model Atom Dalton</h1>
        
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            {{-- dalton image --}}
            <div>
                <img src="{{asset('/storage/assets/dalton.jpg')}}" alt="John Dalton" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">John Dalton (1766 - 1844)</p>
            </div>
        </div>

        <p class="tw-mt-4">John Dalton (1776-1844) adalah ilmuwan yang pertama mengembangkan model atom pertama pada 1803 hingga 1808. Hipotesis Dalton digambarkan dengan model atom sebagai <span class="highlight tw-bg-yellow-300">bola pejal seperti tolak peluru</span>. Teori atom Dalton didasarkan pada anggapan bahwa:</p>

        <ol class="tw-mt-4 tw-pl-4 tw-list-decimal tw-list-outside">
            <li>Semua benda tersusun atas atom</li>
            <li>Atom-atom tidak dapat dicipta maupun dihancurkan</li>
            <li>Atom-atom dari unsur tertentu adalah indentik satu terhadap lainnya dalam ukuran, massa, dan sifat-sifat yang lain, namun mereka berbeda dari atom-atom dari unsur-unsur yang lain.</li>
            <li>Perubahan kimia merupakan penyatuan atau pemisahan dari atom-atom yang tak dapat dibagi, sehingga atom tidak dapat diciptakan atau dimusnahkan.</li>
        </ol>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            {{-- dalton interactive model --}}
            <div class="tw-flex tw-flex-col tw-items-center">
                <div id="dalton-model" class="" style="height:300px; width:400px;"></div>
                <p class="tw-text-sm tw-text-center tw-mt-2">Model atom Dalton menyerupai bola pejal</p>
            </div>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Kelemahan Teori Dalton</h2>
        <p class="tw-mt-4">Sebagai teori atom pertama, tentu tak luput dari kesalahan-kesalahan. beberapa kelemahan dari teori ini adalah</p>

        <ol class="tw-mt-4 tw-pl-4 tw-list-decimal tw-list-outside">
            <li>Tidak dapat menjelaskan tentang arus listrik</li>
            <li>Atom atom dari unsur yang sama dapat mempunyai massa yang berbeda</li>
            <li>Tidak menjelaskan partikel sub atomik (proton, neutron, dan elektron).</li>
            <li>Beberapa unsur tidak terdiri dari atom-atom melainkan molekul (contoh: O<sub>2</sub>, H<sub>2</sub>)</li>
        </ol>

        {{-- THOMSON MODEL --}}
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-8">Model Atom Thomson</h1>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            {{-- Thomson image --}}
            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/thomson.jpg')}}" alt="Sir Joseph John Thomson" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">Sir Joseph John Thomson (1856 - 1940)</p>
            </div>
        </div>
        <p class="tw-mt-4">Pada awal abad ke-20, J. J. Thomson menggambarkan atom seperti bola pejal, yaitu
            bola padat yang bermuatan positif. Di dalamnya, tersebar elektron yang
            bermuatan negatif. Thomson membuktikan adanya partikel yang bermuatan negatif
            dalam atom.
        </p>

        {{-- Gambar model atom thomson --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4 md:tw-flex-row md:tw-justify-around">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/thomson-model.png')}}" alt="Model Atom J. J. Thomson" style="height: 115px">
                {{-- <div id="thomson-model" class="" style="height:200px; width:200px;"></div> --}}
                {{-- <p class="tw-text-sm tw-text-center tw-mt-2">Model atom J. J. Thomson berbentuk seperti roti kisimis, elektron tersebar di dalam atom</p> --}}
            </div>

            <div class="tw-flex tw-flex-col tw-items-center">
                {{-- <img src="{{asset('/storage/assets/thomson-model.png')}}" alt="Model Atom J. J. Thomson" class="tw-h-64"> --}}
                <div id="thomson-model" class="" style="height:200px; width:200px;"></div>
                <p class="tw-text-sm tw-text-center tw-mt-1">Coba putar bola di atas</p>
            </div>
        </div>
        <p class="tw-text-sm tw-text-center tw-mt-2">Model atom J. J. Thomson berbentuk seperti roti kisimis, elektron tersebar di dalam atom</p>


        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Percobaan Tabung Sinar Katoda</h2>
        <p class="tw-mt-4">
            Teori atom ini didasarkan pada percobaan <span class="highlight tw-bg-yellow-300">Tabung sinar katoda</span> yang dilakukan pada tahun 1879. 
            Tabung sinar katoda terbuat dari kaca yang dialiri arus listrik searah dari kutub positif yang disebut <span class="highlight tw-bg-gray-300 tw-text-green-800">anoda</span> 
            dan dari kutub negatif yang disebut dengan <span class="highlight tw-bg-gray-300 tw-text-red-700">katoda</span>. 
            Bila tabung tersebut dialiri arus listrik yang cukup kuat, akan terjadi aliran radiasi yang tidak tampak <span class="highlight tw-bg-yellow-300">dari kutub negatif 
                menuju kutub positif</span>. Inilah yang disebut dengan sinar katoda.
        </p>

        {{-- Gambar tabung sinar katoda --}}
        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">

            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/cathode-ray-tube.jpg')}}" alt="Percobaan tabung sinar katoda" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Percobaan tabung sinar katoda</p>
            </div>
        </div>

        <p class="tw-mt-4">Dengan mengukur muatan partikel pada sinar katoda, Thomson menyimpulkan bahwa partikel tersebut 2000 kali lebih ringan daripada atom hidrogen. Dan dengan mengubah logam yang digunakan pada katoda, Thomson menemukan bahwa partikel ini terdapat pada semua jenis unsur. Sehingga Thomson memberi nama partikel ini sebagai <span class="highlight tw-bg-gray-300 tw-text-red-700">elektron</span>. Sehiungga Thomson dapat memcahkan teori Dalton sebelumnya yang mengatakan bahwa atom tidak dapat dibagi lagi namun masih terdapat partikel sub atom di dalamnya. Dari penemuannya ini, Thomson mendapatkan hadiah Nobel pada bidang fisika pada tahun 1906.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Kelemahan Model Atom Thomson</h2>
        <ol class="tw-mt-4 tw-pl-4 tw-list-decimal tw-list-outside">
            <li>Tidak adanya lintasan elektron dan tingkat energi.</li>
            <li>Tidak ada inti atom. Sehingga tidak dapat menjelaskan pengamatan pada percobaan setelahnya</li>
        </ol>

         {{-- RUTHERFORD MODEL --}}
         <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-8">Model Atom Rutherford</h1>

         <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">
 
             {{-- Rutherford image --}}
             <div class="tw-flex tw-flex-col tw-items-center">
                 <img src="{{asset('/storage/assets/rutherford.jpg')}}" alt="Ernest Rutherford" class="tw-h-64">
                 <p class="tw-text-sm tw-text-center tw-mt-2">Ernest Rutherford (1871 - 1937)</p>
             </div>
         </div>
         <p class="tw-mt-4">Ernest Rutherford adalah fisikawan asal Selandia Baru yang menempuh pendidikan di <em>Cambridge University</em> di Inggris dan berguru kepada J. J. Thomson. Ia kemudian bekerja di <em>Victoria University of Manchester</em> (sekarang <em>University of Manchester</em>) untuk meneliti bagian-bagian atom.</p>

         <h2 class="tw-text-black tw-font-semibold tw-mt-4">Eksperimen lempengan emas</h2>
         <p class="tw-mt-4">Pada tahun 1908 sampai 1913, Hans Geiger dan Ernest Marsden melakukan eksperimen lempengan emas di bawah arahan Ernest Rutherford di <em>University of Manchester</em>.
            Percobaan ini dilakukan dengan cara <span class="highlight tw-bg-yellow-300">menembakkan partikel alfa yang bermuatan positif ke lempengan emas yang sangat tipis.</span>
        </p>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 md:tw-flex-row md:tw-justify-between tw-mt-4">
            {{-- gold foil image --}}
            <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
                <img src="{{asset('/storage/assets/gold-foil-experiment.png')}}" alt="Eksperimen lempengan emas" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Diagram Eksperimen Rutherford</p>
            </div>

            {{-- gold foil animation --}}
            <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
                <img src="{{asset('/storage/assets/gold-foil-experiment.gif')}}" alt="John Dalton" class="tw-h-64">
                <p class="tw-text-sm tw-text-center tw-mt-2">Animasi partikel alfa menembus atom emas</p>
            </div>
        </div>

        <p class="tw-mt-4">Dari hasil percobaan yang dilakukan, sebagian besar partikel alfa dapat menembus lempengan tanpa terbelokkan sedikitpun dan hanya sebagian sangat kecil yang terbelokkan oleh lempengan emas. Rutherford menyimpulkan bahwa muatan postitif tidak tersebar secara merata dalam atom seperti pada model atom Thomson, melainkan <span class="highlight tw-bg-yellow-300">muatan positif pada atom terpusat pada bagian tengah atom yang disebut nukleus</span>. dan bagian atom lainnya sebagian besar berupa ruang hampa.</p>

        {{-- Rutherford image --}}
        <div class="tw-flex tw-flex-col tw-items-center">
            {{-- <img src="{{asset('/storage/assets/rutherford-model.png')}}" alt="Model Atom Rutherford" class=""> --}}
            <div id="rutherford-model" style="height: 200px; width: 200px;"></div>
            <p class="tw-text-sm tw-text-center tw-mt-2">Model atom Rutherford seperti tata surya</p>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Kelemahan model atom Rutherford</h2>
        <p class="tw-mt-4">
            Kelemahan model atom Rutherford ini adalah <span class="highlight tw-bg-yellow-300">tidak dapat menjelaskan mengapa elektron tidak dapat jatuh ke atom.</span>
        </p>


        {{-- BOHR MODEL --}}
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-8">Model Atom Bohr</h1>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">
 
             {{-- Bohr image --}}
             <div class="tw-flex tw-flex-col tw-items-center">
                 <img src="{{asset('/storage/assets/bohr.jpg')}}" alt="Niels Henrik David Bohr" class="tw-h-64">
                 <p class="tw-text-sm tw-text-center tw-mt-2">Niels Henrik David Bohr (1885 - 1962)</p>
             </div>
         </div>
         <p class="tw-mt-4">Niels Bohr adalah fisikawan asal Denmark yang mengembangkan teori atom pada tahun 1913. Teori tentang sifat atom yang didapat dari
            pengamatan Bohr:
        </p>
        <ol class="tw-mt-4 tw-pl-4 tw-list-decimal tw-list-outside">
            <li>Atom terdiri dari inti yang bermuatan positif dan dikelilingi oleh elektron yang
                bermuatan negatif di dalam suatu lintasan.</li>
            <li>Elektron bisa berpindah dari satu lintasan ke lintasan yang lain dengan
                menyerap atau memancarkan energi sehingga energi elektron atom itu tidak
                akan berkurang</li>
            <li>Jika berpindah ke lintasan yang lebih tinggi, elektron akan menyerap energi.</li>
            <li>Jika berpindah ke lintasan yang lebih rendah, elektron akan memancarkan
                energi.</li>
            <li>Maksimal elektron yang dapat ditampung oleh kulit ke-<em>n</em> adalah sebanyak 2<em>n</em><sup>2</sup>. Contoh, pada kulit ke-3, maksimal elektron yang dapat ditampung adalah 2(3)<sup>2</sup> = <strong>18</strong>.</li>
        </ol>
        <p class="tw-mt-4"> <span class="highlight tw-bg-yellow-300">Kedudukan elektron-elektron pada tingkat-tingkat energi tertentu yang disebut
            kulit-kulit elektron.</span></p>
        {{-- Bohr image --}}
        <div class="tw-flex tw-flex-col tw-items-center">
            {{-- <img src="{{asset('/storage/assets/rutherford-model.png')}}" alt="Model Atom Rutherford" class=""> --}}
            <div id="bohr-model" style="height: 200px; width: 200px;"></div>
            <p class="tw-text-sm tw-text-center tw-mt-2">Model atom Bohr memiliki kulit-kulit atom</p>
        </div>
        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Kelemahan model atom Bohr</h2>
        <p class="tw-mt-4">
            <ol class="tw-mt-4 tw-pl-4 tw-list-decimal tw-list-outside">
                <li>Adanya radius dan orbit. Ini tidak sesuai dengan Prinsip Ketidakpastian
                    Heisenberg yang menyatakan radius tidak bisa ada bersamaan dengan orbit.</li>
                <li>Selain itu, model atom Bohr juga tidak menjelaskan Efek Zeeman. Efek Zeeman
                    adalah ketika garis spektrum terbagi karena adanya medan magnet</li>
                <li>Model atom ini tidak dapat digunakan untuk atom yang lebih berat</li>
            </ol>
        </p>

        {{-- soal --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soalBohr as $soal)
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

        {{-- QUANTUM MODEL --}}
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-8">Model Atom Mekanika Kuantum</h1>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">
 
             {{-- Schrodinger image --}}
             <div class="tw-flex tw-flex-col tw-items-center">
                 <img src="{{asset('/storage/assets/schrodinger.jpg')}}" alt="Erwin Rudolf Josef Alexander Schrödinger" class="tw-h-64">
                 <p class="tw-text-sm tw-text-center tw-mt-2">Erwin Rudolf Josef Alexander Schrödinger (1887 - 1961)</p>
             </div>
        </div>

        <p class="tw-mt-4">Setelah abad ke-20, pemahaman mengenai atom makin terang benderang. Model atom modern yang kita yakini sekarang, telah disempurnakan oleh Erwin Schrödinger pada 1926. Schrödinger mengatakan bahwa elektron tidak bergerak mengelilingi inti atom pada suatu orbit, melainkan <span class="highlight tw-bg-yellow-300">elektron bersifat seperti gelombang</span>. Schrödinger mampu memecahkan masalah-masalah persamaan matematika sehingga didapatkan model distribusi elektron di dalam atom.</p>

        <div class="tw-flex tw-items-center tw-flex-col tw-gap-4 tw-justify-center tw-mt-4">
 
            {{-- Schrodinger image --}}
            <div class="tw-flex tw-flex-col tw-items-center">
                <img src="{{asset('/storage/assets/quantum-model.png')}}" alt="Model atom mekanika kuantum" class="">
                <p class="tw-text-sm tw-text-center tw-mt-2">Model atom mekanika kuantum</p>
            </div>
       </div>

       <p class="tw-mt-4">Awan elektron di sekitar inti
        menunjukkan tempat kebolehjadian ditemukannya elektron yang disebut orbital
        dimana orbital menggambarkan tingkat energi elektron. Orbital-orbital dengan
        tingkat energi yang sama atau nyaris sama akan membentuk sub-kulit. Kumpulan
        beberapa sub-kulit akan membentuk kulit. Dengan demikian, kulit terdiri dari
        beberapa sub-kulit, dan sub-kulit terdiri dari beberapa orbital. Model atom dengan orbital lintasan elektron ini disebut sebagai model atom
        modern atau model atom mekanika kuantum yang berlaku hingga saat ini</p>
    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.teoriAtom')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Teori Tentang Atom</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.strukturAtom')}}">
            <p>Struktur Atom</p>
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

    <script src="/js/perkembanganModel.js"></script>
</body>
</html>