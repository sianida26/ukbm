<?php
    use App\Models\Kelas;

    $siswas = Kelas::findOrFail($id)->siswa;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilih Siswa</title>
    @laravelPWA
    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    @stack('styles')
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50 tw-flex tw-flex-col">
    
    <x-top-bar/>
    
    <div class="tw-w-full tw-px-4 lg:tw-px-8 tw-mt-8 tw-h-full tw-flex-grow">

        <h1 class="tw-font-bold tw-text-2xl">Pilih Siswa</h1>

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
        <div class="tw-w-full tw-bg-white tw-rounded-lg tw-mt-4 tw-pb-4 tw-pt-2 tw-px-2" style="box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.25);">
            
            <table class="tw-w-full tw-text-center tw-border-collapse">
                <thead>
                    <tr class="tw-border-b-2 tw-border-gray-300">
                        <th class="tw-py-2">No</th>
                        <th class="tw-py-2">Nama Siswa</th>
                        <th class="tw-py-2">Nilai Rata-rata</th>
                        <th class="tw-py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @if($siswas->isEmpty())
                        <tr class="tw-border-b tw-border-gray-300">
                            <td colspan="4" class="tw-text-center tw-py-1 ">
                                - Tidak ada data -
                            </td>
                        </tr>
                    @else

                        @foreach($siswas as $i => $siswa)
                            <?php
                            $jawabans =  $siswa->user->jawabans;
                            //average from column nilai
                            $nilai = $jawabans->avg('nilai');
                            ?>
                            <tr class="tw-border-b tw-border-gray-300 ">
                                <td class="tw-py-2">{{$i+1}}</td>
                                <td class="tw-py-2">{{$siswa->user->name}}</td>
                                <td class="tw-py-2">{{number_format((float)$nilai, 2, ',', '')}}</td>
                                <td class="tw-py-2">
                                    <div class="tw-flex tw-justify-center">
                                        <a href="/jawaban/siswa/{{$siswa->id}}" class="tw-flex tw-justify-center tw-items-center tw-bg-green-600 tw-text-white tw-rounded-md tw-shadow-md tw-px-4 tw-py-1 tw-text-sm tw-gap-3">
                                            <i class="bi bi-eye-fill"></i>
                                            Lihat
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    
                    @endif
                </tbody>
            </table>
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