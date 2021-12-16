<?php
    use Illuminate\Support\Facades\Auth;
    $soalKuantum = App\Models\Soal::where('subbab', 'kuantum')->get();
    $soalKonfigurasi = App\Models\Soal::where('subbab', 'konfigurasi')->get();
    $title = "Teori Atom Mekanika Kuantum";
    $subtitle = "";
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
    @laravelPWA
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
        <p class="tw-mt-4">Model atom mekanika kuantum didasari oleh teori mekanika kuantum, di mana teori ini mengatakan bahwa materi juga memiliki sifat gelombang. Teori tersebut dikemukakan oleh ilmuwan asal prancis, Louis de Broglie. Berdasarkan teori mekanika kuantum, kita tidak mungkin untuk mengetahui posisi pasti dan momentum dari suatu elektron pada waktu yang sama. Teori ini disebut sebagai <span class="highlight tw-bg-blue-300 tw-text-blue-900">ketidakpastian Heisenberg</span></p>
        <p class="tw-mt-4">Model atom mekanika kuantum divisualisasikan sebagai bentuk-bentuk yang kompleks yang disebut dengan <span class="highlight tw-bg-blue-300 tw-text-blue-900">orbital</span> (kadang disebut sebagai <em>awan elektron</em>). Orbital adalah ruang di mana probabilitas menemukan elektron pada daerah tersebut tinggi. Jadi, <span class="highlight tw-bg-yellow-300">model ini didasari oleh probabilitas, bukan kepastian</span></p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Bilangan Kuantum</h1>
        <p class="tw-mt-4">Bilangan kuantum memiliki 4 bilangan: Bilangan kuantum utama (n), azimut (l), magnetik (m), dan spin (s)</p>
        
        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Bilangan Kuantum Utama (n)</h2>
        <p class="tw-mt-4">Bilangan kuantum utama, yang disimbolkan sebagai <strong>n</strong>, menggambarkan kulit atom pada elektron tersebut. Dengan kata lain, bilangan kuantum utama menunjukkan jarak antara elektron dengan inti. Semakin jauh jarak elektron dengan inti, maka bilangan n akan semakin besar. n adalah bilangan positif dimulai dari 1.</p>


        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            {{-- <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div> --}}

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-mt-4">n = 1 menggambarkan kulit atom pertama</p>
                <p class="tw-mt-4">n = 2 menggambarkan kulit atom kedua</p>
                <p class="tw-mt-4">n = 3 menggambarkan kulit atom ketiga</p>
                <p class="tw-mt-4">dan seterusnya</p>
            </div>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Bilangan Kuantum Azimut (l)</h2>
        <p class="tw-mt-4">Bilangan kuantum aziumt atau disebut juga sebagai bilangan kuantum momentum sudut, yang disimbolkan sebagai <strong><em>l</em></strong>, <span class="highlight tw-bg-yellow-300">menggambarkan bentuk dari orbital.</span> nilai l dapat memiliki nilai dari 0 sampai n-1.</p>
        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            {{-- <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div> --}}

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-mt-4">jika nilai n = 1, maka nilai <em>l</em> yang mungkin adalah 0.</p>
                <p class="tw-mt-4">jika nilai n = 2, maka nilai <em>l</em> yang mungkin adalah 0 dan 1.</p>
                <p class="tw-mt-4">jika nilai n = 3, maka nilai <em>l</em> yang mungkin adalah 0, 1 dan 2.</p>
                <p class="tw-mt-4">jika nilai n = 4, maka nilai <em>l</em> yang mungkin adalah 0, 1, 2 dan 3.</p>
                <p class="tw-mt-4">dan seterusnya</p>
            </div>
        </div>

        <p class="tw-mt-4">Oribtal-orbital yang memiliki nilai n yang sama, namun nilai <em>l</em> yang berbeda, disebut juga sebagai subkulit. Subkulit tersebut masing-masing terdapat simbol tersendiri. Sebagai contoh</p>
        <table class="tw-mt-4 tw-max-w-sm tw-mx-auto tw-text-center">
            <thead>
                <tr>
                    <th class="tw-w-1/2">Nilai <em>l</em></th>
                    <th class="tw-w-1/2">Simbol</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>0</td>
                    <td><em>s</em></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><em>p</em></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><em>d</em></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><em>f</em></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><em>g</em></td>
                </tr>
            </tbody>
        </table>

        <p class="tw-mt-4">Ketika kimiawan menyebut suatu subkulit, maka biasanya menggunakan nilai n dan nilai <em>l</em>. 2<em>s</em>, 3<em>d</em>, 1<em>s</em>, dan seterusnya. Berikut adalah bentuk-bentuk orbital yang menggambarkan orbital s, p, dan d.</p>
        
        &lt;&lt;Gambar-Gambar Orbital&gt;&gt;

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Bilangan Kuantum Magnetik (m<sub>l</sub>)</h2>        
        <p class="tw-mt-4">Bilangan kuantum magnetik menunjukkan orientasi elektron dalam suatu orbital. Nilai-nilai bilangan kuantum adalah bilangan bulat mulai -l sampai dengan +l.</p>

        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-mt-4">jika nilai l = 0, maka nilai m yang mungkin adalah 0.</p>
                <p class="tw-mt-4">jika nilai l = 1, maka nilai m yang mungkin adalah -1, 0, +1.</p>
                <p class="tw-mt-4">jika nilai l = 2, maka nilai m yang mungkin adalah -2, -1, 0, +1, +2.</p>
                <p class="tw-mt-4">jika nilai l = 3, maka nilai m yang mungkin adalah -3, -2, -1, 0, +1, +2, +3.</p>
                <p class="tw-mt-4">dan seterusnya</p>
            </div>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Bilangan Kuantum Spin (s)</h2>
        <p class="tw-mt-4">Bilangan kuantum yang terakhir adalah bilangan kuantum spin. Bilangan kuantum spin mendeskripsikan arah medan magnet elektron. Dapat berupa searah jarum jam maupun berlawanan jarum jam. Bilangan kuantum spin elektron hanya boleh terisi oleh \(+\frac 1 2\) (&uarr;), dan \(-\frac 1 2\) (&darr;).</p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Orbital</h1>
        <p class="tw-mt-4">Orbital adalah daerah atau ruang di sekitar inti di mana peluang (kebolehjadian) trerbesar elektron dapat ditemukan. Setiap orbital mempun yaitu ukuran, bentuk, dan arah orientasi ruang yang ditentukan oleh bilangan kuantum n, l, dan m. Orbital-orbital tersebut bergabung membentuk suatru subkulit, dan subkulit bergabung membentuk kulit atau tingkat energi.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Subkulit <em>s</em></h2>
        <p class="tw-mt-4">Subkutlit s tersusun dari sebuah orbital dengan bilangan kuantum l = 0 dan mempunyai ukuran yang berbeda tergantung nilai bilangan kuantum n. Probabilitas untuk menemukan elektron pada orbital s adalah sama untuk ke segala arah sehingga bentuk ruang orbital s digambarkan seperti bola.</p>

        <img src="{{asset('/storage/assets/orbital-s.png')}}" alt="" class="tw-max-w-sm tw-mx-auto">
        <p class="tw-text-center tw-text-sm">Subkulit s memiliki bentuk seperti bola</p>
        
        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Subkulit <em>p</em></h2>
        <p class="tw-mt-4">Subkulit <em>p</em> tersusun dari tiga orbital dengan bilangan kuantum <em>l</em> = 1. Tiga orbital <em>p</em> tersebut adalah orbital <em>p<sub>x</sub></em>, <em>p<sub>y</sub></em>, <em>p<sub>z</sub></em>. Bentuk ruang orbital <em>p</em> digambarkan seperti dumbell dengan probabilitas untuk menemukan elektron semakin kecil bila mendekati inti.</p>

        <img src="{{asset('/storage/assets/orbital-p.png')}}" alt="" class="tw-max-w-sm tw-mx-auto">
        <p class="tw-text-center tw-text-sm">Bentuk orbital <em>p</em></p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Subkulit <em>d</em></h2>
        <p class="tw-mt-4">Subkulit <em>d</em> tersusun dari lima orbital yang mempunyai bilangan kuantum <em>l</em> = 2. Arah orientasi dari orbital <em>d</em> dapat dibedakan menjadi dua kelompok, yaitu yang berada di antara sumbu terdiri dari 3 orbital (<em>d<sub>xy</sub></em>, <em>d<sub>xz</sub></em>, <em>d<sub>yz</sub></em>) dan yang berada pada sumbu terdiri dari 2 orbital (<em>d<sub>x<sup>2</sup> - y<sup>2</sup></sub> dan <em>d<sub>z<sup>2</sup></sub></em></em>) </p>

        <img src="{{asset('/storage/assets/orbital-d.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto">
        <p class="tw-text-center tw-text-sm">Bentuk orbital <em>d</em></p>

        {{-- soal kuantum --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soalKuantum as $soal)
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

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Konfigurasi Elektron</h1>
        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Aturan Aufbau</h2>
        <p class="tw-mt-4">Subkulit dengan energi terendah adalah subkulit 1<em>s</em> yang tersusun dari 1 orbital. 1 Elektron pada atom hidrogen akan menempati orbital 1<em>s</em> ketika pada keadaan dasar. Ketika kita berlanjut ke atom berikutnya, helium, litium, dan seterusnya, maka elektron akan menempati subkulit pada tingkat energi yang lebih tinggi. 2<em>s</em>, 2<em>p</em>, 3<em>s</em> dan seterusnya. Prinsip Aufbau mengatakan bahwa <span class="highlight tw-bg-yellow-300">elektron akan menempati orbital energi rendah ke orbital energi yang lebih tinggi secara berurutan</span>. Prinsip ini kadang disebut juga sebagai prinsip membangun. (<em>Aufbau</em> dalam bahasa Jerman berarti membangun). </p>

        <img src="{{asset('/storage/assets/aufbau.png')}}" alt="" class="tw-max-w-lg tw-w-full tw-mx-auto">

        <p class="tw-mt-4">Berdasarkan diagram di atas, maka tingkat energi dari yang paling rendah adalah sebagai berikut: <strong>1<em>s</em> < 2<em>s</em> < 2<em>p</em> < 3<em>s</em> < 3<em>p</em> < 4<em>s</em> < 3<em>d</em> < 4<em>p</em> < ... dan seterusnya</strong></p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Larangan Pauli</h2>
        <p class="tw-mt-4">Larangan Pauli mengatakan bahwa <span class="highlight tw-bg-yellow-300">dalam satu atom, tidak boleh terdapat 2 elektron yang memiliki 4 bilangan kuantum yang sama.</span> Tiap orbital hanya boleh terisi maksimal sebanyak 2 elektron (spin atas dan spin bawah).</p>

        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <img src="{{asset('/storage/assets/pauli-exclusion-principle.png')}}" alt="" class="tw-max-w-sm tw-mt-4">

                <p class="tw-mt-4">Berdasarkan gambar tersebut, orbital 2<em>s</em> pada atom berilium terisi oleh 2 elektron. elektron pada orbital yang sama harus memiliki spin yang berlawanan. jika tidak berlawanan maka kedua elektron tersebut memiliki keempat bilangan kuantum yang sama sehingga melanggar larangan Pauli</p>
                
            </div>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Aturan Hund</h2>
        <p class="tw-mt-4">Pada aturan Aufbau disebutkan bahwa elektron mengisi orbital yang memiliki energi lebih rendah terlebih dahulu. Orbital 1<em>s</em> terisi sebelum orbital 2<em>s</em>. Namun bagaimana urutan mengisi elektron pada 3 orbital pada subkulit 2<em>p</em> ? Pertanyaan tersebut terjawab dalam aturan Hund.</p>
        <p class="tw-mt-4">Aturan Hund mengatakan bahwa:</p>
        <ol class="tw-list-decimal tw-list-outside tw-pl-4">
            <li>Setiap orbital pada subkulit terisi setengah terlebih dahulu sebelum terisi penuh</li>
            <li>Setiap orbital yang terisi setengah harus memiliki spin yang sama</li>
        </ol>
        
        {{-- contoh nitrogen --}}
        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh 1:</h2>
                <img src="{{asset('/storage/assets/N.svg')}}" alt="" class="tw-max-w-sm tw-mt-4 tw-mx-auto">

                <p class="tw-mt-4">Orbital-orbital p pada gambar di atas terisi setengah penuh semua terlebih dahulu sebelum elektron dipasangkan</p>
                
            </div>
        </div>

        {{-- contoh oksigen --}}
        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh 2:</h2>
                <img src="{{asset('/storage/assets/O.svg')}}" alt="" class="tw-max-w-sm tw-mt-4 tw-mx-auto">

                <p class="tw-mt-4">setelah orbital-orbital telah terisi setengah penuh, maka elektron akan berpasangan dengan elektron pada orbital setengah penuh</p>
                
            </div>
        </div>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Beberapa penyimpangan dari aturan umum</h2>
        <p class="tw-mt-4">Seperti sudah dijelaskan sebelumnya bahwa konfigurasi elektron suatu atom adalah khas sehingga terdapat beberapa atom yang konfigurasinya menyimpang dari aturan-aturan tersebut. misalnya:</p>
        <ul>
            <li><sub>24</sub>Cr: [Ar] 4<em>s</em><sup class="tw-text-red-600 tw-font-medium">2</sup> 3<em>d</em> <sup class="tw-text-red-600 tw-font-medium">4</sup> kurang stabil, maka berubah menjadi [Ar] 4<em>s</em><sup class="tw-text-red-600 tw-font-medium">1</sup> 3<em>d</em> <sup class="tw-text-red-600 tw-font-medium">5</sup></li>
            <li><sub>29</sub>Cu: [Ar] 4<em>s</em><sup class="tw-text-red-600 tw-font-medium">2</sup> 3<em>d</em> <sup class="tw-text-red-600 tw-font-medium">9</sup> kurang stabil, maka berubah menjadi [Ar] 4<em>s</em><sup class="tw-text-red-600 tw-font-medium">1</sup> 3<em>d</em> <sup class="tw-text-red-600 tw-font-medium">10</sup></li>
            <li><sub>46</sub>Pd: [Kr] 5<em>s</em><sup class="tw-text-red-600 tw-font-medium">2</sup> 4<em>d</em> <sup class="tw-text-red-600 tw-font-medium">8</sup> kurang stabil, maka berubah menjadi [Ar] 5<em>s</em><sup class="tw-text-red-600 tw-font-medium">0</sup> 4<em>d</em> <sup class="tw-text-red-600 tw-font-medium">10</sup></li>
            <li><sub>47</sub>Pd: [Kr] 5<em>s</em><sup class="tw-text-red-600 tw-font-medium">2</sup> 4<em>d</em> <sup class="tw-text-red-600 tw-font-medium">9</sup> kurang stabil, maka berubah menjadi [Ar] 5<em>s</em><sup class="tw-text-red-600 tw-font-medium">1</sup> 4<em>d</em> <sup class="tw-text-red-600 tw-font-medium">10</sup></li>
        </ul>

        <p class="tw-mt-4">Penyimpangan tersebut diketahui dari gambaran spektrumnya yang lebih cocok bila konfigurasi elektronnya digambarkan seperti yang menyimpang tersebut. Penyimpangan tersebut diperkirakan terjadi karena adanya perbedaan tingkat energi yang sangat kecil antara subkulit 3<em>d</em> dan 4<em>s</em>, serta antara subkulit 4<em>d</em> dan 5<em>s</em> pada masing-masing atom tersebut. Bahkan untuk paladium, energi subkulit 4<em>d</em> ternyata memang lebih rendah daripada 5<em>s</em>. Hal ini tidak berlaku untuk atom lainnya.</p>

        {{-- soal konfigurasi elektron --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soalKonfigurasi as $soal)
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
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.tandaAtom')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Tanda Atom</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.spu')}}">
            <p>Sistem Periodik Unsur</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')

    
    
</body>
</html>