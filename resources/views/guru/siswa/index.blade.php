<?php
    use App\Models\Siswa;

    $siswas = Siswa::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Siswa</title>
    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    @stack('styles')
</head>
<body class="montserrat tw-relative tw-w-screen tw-min-h-screen tw-overflow-x-hidden tw-bg-gray-50 tw-flex tw-flex-col">
    
    <x-top-bar/>
    
    <div class="tw-w-full tw-px-4 lg:tw-px-8 tw-mt-8 tw-h-full tw-flex-grow">

        <h1 class="tw-font-bold tw-text-2xl">List Siswa</h1>

        {{-- alert success --}}
        @if (session('alert-success'))
            <div class="tw-my-4 tw-bg-green-100 tw-border tw-border-green-400 tw-rounded tw-p-4 tw-text-green-700">
                {{ session('alert-success') }}
            </div>
        @endif
        
        {{-- tombol tambah kelas --}}
        <div class="tw-flex tw-mt-4">
            <a href="/siswa/buat" class="tw-inline-flex tw-items-center tw-bg-green-500 tw-text-white tw-font-bold tw-rounded-lg tw-px-4 tw-py-1 tw-text-sm tw-text-center tw-mr-4">
                <i class="bi bi-plus tw-text-xl"></i>
                <span class="tw-ml-2">Tambah Siswa</span>
            </a>
        </div>


        {{-- card --}}
        <div class="tw-w-full tw-bg-white tw-rounded-lg tw-mt-4 tw-pb-4 tw-pt-2 tw-px-2" style="box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.25);">
            
            <table class="tw-w-full tw-text-center tw-border-collapse">
                <thead>
                    <tr class="tw-border-b-2 tw-border-gray-300">
                        <th class="tw-py-2">No</th>
                        <th class="tw-py-2">Nama Siswa</th>
                        <th class="tw-py-2">Kelas</th>
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
                            <tr class="tw-border-b tw-border-gray-300 ">
                                <td class="tw-py-1">{{$i+1}}</td>
                                <td class="tw-py-1">{{$siswa->user->name}}</td>
                                <td class="tw-py-1">{{$siswa->kelas->name}}</td>
                                <td>
                                    {{-- on mobile --}}
                                    <div class="tw-relative tw-inline-block tw-py-1 md:tw-hidden">
                                        <div>
                                            <button type="button" onclick="toggleDropdown(this)" class="tw-flex tw-justify-between tw-w-full tw-rounded-md tw-border tw-border-green-300 tw-shadow-sm tw-px-2 tw-py-1 tw-bg-green-300 tw-text-sm tw-font-medium tw-text-gray-700 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-offset-gray-100 focus:tw-ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                <span>Aksi&nbsp;</span>

                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                        </div>

                                        {{-- dropdown menu --}}
                                        <div class="dropdown tw-hidden tw-origin-top-right tw-absolute tw-right-0 tw-mt-2 tw-w-56 tw-rounded-md tw-shadow-lg tw-bg-white tw-ring-1 tw-ring-black tw-ring-opacity-5 focus:tw-outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

                                            <div class="tw-py-1" role="none">

                                                {{-- edit --}}
                                                <form action="{{route('siswa.editView')}}" method="POST" class="tw-block">
                                                    @csrf
                                                    <input type="hidden" name="id" class="tw-hidden" value="{{$siswa->id}}">
                                                    <button type="submit" class="tw-text-gray-700 tw-w-full tw-px-4 tw-py-2 tw-text-sm tw-text-center">Edit</button>
                                                </form>

                                                {{-- delete --}}
                                                <form action="{{route('siswa.destroy')}}" method="POST" class="tw-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" class="tw-hidden" value="{{$siswa->id}}">
                                                    <button type="submit" class="tw-text-gray-700 tw-w-full tw-px-4 tw-py-2 tw-text-sm tw-text-center">Hapus</button>
                                                </form>
                                                {{-- <a href="#" class="tw-text-gray-700 tw-block tw-px-4 tw-py-2 tw-text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Hapus</a> --}}
                                            </div>

                                        </div>
                                    </div>

                                    {{-- on tablet or on --}}
                                    <div class="md:tw-flex tw-gap-4 tw-py-1 tw-hidden tw-justify-center"> 
                                        
                                        {{-- edit --}}
                                        <form action="{{route('siswa.editView')}}" method="POST" class="tw-block">
                                            @csrf
                                            <input type="hidden" name="id" class="tw-hidden" value="{{$siswa->id}}">
                                            <button type="submit" class="tw-text-center">
                                                <i class="bi bi-pencil-square tw-text-green-500 tw-text-lg"></i>
                                            </button>
                                        </form>

                                        {{-- delete --}}
                                        <form action="{{route('siswa.destroy')}}" method="POST" class="">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" class="tw-hidden" value="{{$siswa->id}}">
                                            <button type="submit" class="tw-text-center">
                                                <i class="bi bi-trash2-fill tw-text-red-500 tw-text-lg"></i>
                                            </button>
                                        </form>
                                        
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