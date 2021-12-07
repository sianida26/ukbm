<?php

    use App\Models\Kelas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if($isEdit) Edit @else Buat @endif Siswa @unless($isEdit) Baru @endif</title>

    @include('styles.tailwind')
    @include('styles.bootstrapicons')

    @stack('styles')
</head>
<body>
    
    <x-top-bar/>

    <div class="tw-w-full tw-px-4 lg:tw-px-8 tw-mt-8 tw-h-full tw-flex-grow">

        <h1 class="tw-font-bold tw-text-2xl">@if($isEdit) Edit @else Buat @endif Siswa @unless($isEdit) Baru @endif </h1>

        {{-- alert success --}}
        @if (session('alert-success'))
            <div class="tw-my-4 tw-bg-green-100 tw-border tw-border-green-400 tw-rounded tw-p-4 tw-text-green-700">
                {{ session('alert-success') }}
            </div>
        @endif

        {{-- alert danger --}}
        @if (session('alert-danger'))
            <div class="tw-my-4 tw-bg-red-100 tw-border tw-border-red-400 tw-rounded tw-p-4 tw-text-red-700">
                {{ session('alert-danger') }}
            </div>
        @endif

        {{-- alert danger --}}
        @if (isset($alertDanger))
            <div class="tw-my-4 tw-bg-red-100 tw-border tw-border-red-400 tw-rounded tw-p-4 tw-text-red-700">
                {{ $alertDanger }}
            </div>
        @endif


        {{-- card --}}
        <div class="tw-w-full tw-bg-white tw-rounded-lg tw-mt-4 tw-py-4 tw-px-2" style="box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.25);">
            
            <form action="{{$isEdit ? route('siswa.edit') : route('siswa.create')}}" method="POST" class="tw-flex tw-flex-col tw-justify-center">
                @csrf

                @if ($isEdit)
                    <input type="hidden" name="id" value="{{$siswa->id}}">
                @endif

                {{-- nama siswa --}}
                <p class="tw-font-bold tw-text-lg">Nama Siswa</p>
                <input @if($isEdit) value="{{$siswa->user->name}}" @endif autofocus type="text" name="nama" class="tw-w-full tw-border tw-border-gray-400 tw-rounded-md tw-py-1 tw-px-2 tw-mt-2 tw-text-gray-700 focus:tw-outline-none focus:tw-ring focus:tw-ring-blue-500">

                {{-- NIS --}}
                <p class="tw-font-bold tw-text-lg tw-mt-4">NIS Siswa</p>
                <input @if($isEdit) value="{{$siswa->user->username}}" @endif autofocus type="number" name="nis" class="tw-w-full tw-border tw-border-gray-400 tw-rounded-md tw-py-1 tw-px-2 tw-mt-2 tw-text-gray-700 focus:tw-outline-none focus:tw-ring focus:tw-ring-blue-500">

                {{-- kelas --}}
                <p class="tw-font-bold tw-text-lg tw-mt-4">Kelas</p>
                {{-- dropdown list kelas --}}
                <select name="kelas" class="tw-w-full tw-border tw-border-gray-400 tw-rounded-md tw-py-1 tw-px-2 tw-mt-2 tw-text-gray-700 focus:tw-outline-none focus:tw-ring focus:tw-ring-blue-500">
                    @foreach (Kelas::all() as $kelas)
                        <option @if($isEdit && $siswa->kelas->id == $kelas->id) selected @endif value="{{$kelas->id}}">{{$kelas->name}}</option>
                    @endforeach
                </select>
                

                <button 
                    type="submit" 
                    class="tw-self-end tw-mt-4 tw-mr-0 tw-bg-green-500 tw-text-white tw-rounded-md tw-py-2 tw-px-3 tw-font-semibold focus:tw-outline-none focus:tw-ring focus:tw-ring-green-500 focus:tw-ring-offset-2"
                >
                    @if($isEdit) Edit @else Buat @endif Siswa @unless($isEdit) Baru @endif
                </button>
            </form>
        </div>

    </div>

    <div class="tw-my-4 tw-text-center">&copy; 2021 opo ngunu</div>

    @stack('scripts')
</body>
</html>