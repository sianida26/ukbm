<?php
    use App\Models\Kelas;
    use App\Models\Siswa;
    use App\Models\Soal;
    use App\Models\Jawaban;

    $siswas = Kelas::findOrFail($id)->siswa;
    $siswa = Siswa::findOrFail($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Jawaban</title>
    @laravelPWA
    @include('styles.tailwind')
    @include('styles.bootstrapicons')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/katex.min.css" integrity="sha384-ThssJ7YtjywV52Gj4JE/1SQEDoMEckXyhkFVwaf4nDSm5OBlXeedVYjuuUd0Yua+" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/katex.min.js" integrity="sha384-Bi8OWqMXO1ta+a4EPkZv7bYGIes7C3krGSZoTGNTAnAn5eYQc7IIXrJ/7ck1drAi" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/contrib/mhchem.min.js" integrity="sha384-LIgAiYlGSAdpNC9+YDjDPF6JeS/RRIumtNo0CmyQERZ/+g0h9MbuYQwf/5pQ4Y4M" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.3/dist/contrib/auto-render.min.js" integrity="sha384-vZTG03m+2yp6N6BNi5iM4rW4oIwk5DfcNdFfxkk9ZWpDriOkXX8voJBFrAO7MpVl" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>

    @stack('styles')
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50 tw-flex tw-flex-col">
    
    <x-top-bar/>
    
    <div class="tw-w-full tw-px-4 lg:tw-px-8 tw-mt-8 tw-h-full tw-flex-grow">

        <h1 class="tw-font-bold tw-text-2xl">Detail Jawaban Siswa</h1>
        <h2 class="tw-font-semibold tw-text-lg">Nama Siswa: {{$siswa->user->name}}</h2>
        <h2 class="tw-font-semibold tw-text-lg">Kelas: {{$siswa->kelas->name}}</h2>

        {{-- alert success --}}
        @if (session('alert-success'))
            <div class="tw-my-4 tw-bg-green-100 tw-border tw-border-green-400 tw-rounded tw-p-4 tw-text-green-700">
                {{ session('alert-success') }}
            </div>
        @endif
        
        {{-- tombol tambah kelas --}}
        {{-- <div class="tw-flex tw-mt-4">
            <a href="/siswa/buat" class="tw-inline-flex tw-items-center tw-bg-green-500 tw-text-white tw-font-bold tw-rounded-lg tw-px-4 tw-py-1 tw-text-sm tw-text-center tw-mr-4">
                <i class="bi bi-plus tw-text-xl"></i>
                <span class="tw-ml-2">Tambah Siswa</span>
            </a>
        </div> --}}


        {{-- card --}}
        <form action={{route('jawaban.submitnilai')}} method="POST" class="tw-w-full tw-bg-white tw-rounded-lg tw-mt-4 tw-pb-4 tw-pt-2 tw-px-2 md:tw-px-4 lg:tw-px-8" style="box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.25);">
            
            @csrf
            <input type="hidden" name="user_id" value="{{$siswa->user->id}}">
            {{-- subbab teori atom --}}
            <div class="tw-w-full tw-border tw-border-gray-800 tw-rounded-lg tw-px-4 tw-py-4">
                <h1 class="tw-font-semibold tw-text-lg">Teori Tentang Atom</h1>
                <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-flex tw-flex-col tw-gap-8">
                    @foreach(Soal::where('subbab', 'A')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            {{-- subbab perkembangan teori atom --}}
            <div class="tw-w-full tw-border tw-border-gray-800 tw-rounded-lg tw-px-4 tw-py-4 tw-mt-8">
                <h1 class="tw-font-semibold tw-text-lg">Teori Tentang Atom</h1>
                <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-flex tw-flex-col tw-gap-8">
                    @foreach(Soal::where('subbab', 'bohr')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            {{-- subbab perkembangan tanda atom --}}
            <div class="tw-w-full tw-border tw-border-gray-800 tw-rounded-lg tw-px-4 tw-py-4 tw-mt-8">
                <h1 class="tw-font-semibold tw-text-lg">Tanda Atom</h1>
                <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-flex tw-flex-col tw-gap-8">
                    @foreach(Soal::where('subbab', 'B')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            {{-- subbab Teori atom mekanika kauntum --}}
            <div class="tw-w-full tw-border tw-border-gray-800 tw-rounded-lg tw-px-4 tw-py-4 tw-mt-8">
                <h1 class="tw-font-semibold tw-text-lg">Teori Atom Mekanika Kuantum</h1>
                <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-flex tw-flex-col tw-gap-8">
                    @foreach(Soal::where('subbab', 'kuantum')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach

                    @foreach(Soal::where('subbab', 'konfigurasi')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            {{-- subbab Sistem Periodik Unsur --}}
            <div class="tw-w-full tw-border tw-border-gray-800 tw-rounded-lg tw-px-4 tw-py-4 tw-mt-8">
                <h1 class="tw-font-semibold tw-text-lg">Sistem Periodik Unsur</h1>
                <ol class="tw-list-decimal tw-list-outside tw-pl-4 tw-flex tw-flex-col tw-gap-8">
                    @foreach(Soal::where('subbab', 'sejarah spu')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach

                    @foreach(Soal::where('subbab', 'sifat keperiodikan')->get() as $soal)
                    <?php
                        $jawaban = Jawaban::firstWhere(['user_id' => $siswa->user->id, 'soal_id' => $soal->id]);
                        $nilai = $jawaban ? $jawaban->nilai : '';
                    ?>
                    <li class="">
                        <p class="">{!!$soal->soal!!}</p>
                        <p style="color: rgba(239, 68, 68, 1) !important;">{!!$soal->kunci!!}</p>
                        <p class="tw-mt-4">Jawaban siswa:</p>
                        @if ($jawaban !== null)
                            <p>{{$jawaban->jawaban}}</p>
                        @else
                            <p class="tw-italic">Belum dijawab</p>
                        @endif

                        <div class="tw-flex tw-gap-2 tw-items-center tw-mt-2">
                            <span>Nilai:</span>
                            <input name="soal_{{$soal->id}}" value="{{$nilai}}" class="tw-shrink-0 tw-w-24 tw-border tw-border-blue-500 tw-rounded-md tw-px-3 tw-py-2 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>

            <div class="tw-flex tw-justify-between tw-items-center tw-mt-8">
                <a href="{{route('jawaban.kelas')}}" class="tw-border-blue-500 tw-border tw-text-blue-500 tw-py-2 tw-px-4 tw-rounded-md tw-text-sm tw-mr-2">Kembali</a>
                <button type="submit" class="tw-bg-blue-500 tw-text-white tw-py-2 tw-px-4 tw-rounded-md tw-text-sm tw-mr-2">Simpan</button>
            </div>
        </div>

    </div>

    <div class="tw-my-4 tw-text-center">@include('copyright')</div>

    @stack('scripts')

    <script>
        function toggleDropdown(event) {
            // console.log(event.parentNode.childNodes[])
            //select sibling node
            const dropdown = event.parentNode.parentNode.querySelector('.dropdown');
            console.log(dropdown)
            dropdown.classList.toggle('tw-hidden');
        }   
    </script>
</body>
</html>