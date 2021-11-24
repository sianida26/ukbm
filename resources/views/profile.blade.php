<?php 
    use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    @include('styles.tailwind')
    @include('styles.bootstrapicons')
    @include('styles.bubbles')
</head>
<body class="tw-w-screen tw-min-h-screen montserrat tw-bg-gray-50">
    <x-top-bar />

    <x-bubbles />

    <main class="tw-px-4 lg:tw-px-8">
        <div class="tw-font-bold tw-tracking-wide tw-text-gray-700 tw-mt-8 tw-text-xl lg:tw-text-2xl tw-flex tw-flex-col tw-gap-1">
            <p>PROFIL</p>
        </div>

        <div class="tw-px-4 tw-mt-8">
            {{-- card --}}
            <div class="tw-relative tw-w-full tw-rounded-xl tw-bg-white" style="box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.25);">
                <span class="tw-absolute tw-left-0 tw-h-full tw-w-2 tw-rounded-l-xl tw-bg-sky-500"></span>

                {{-- content --}}
                <div class="tw-pl-8 tw-py-4 tw-font-medium">
                    <p class="tw-font-bold">Nama:</p>
                    <p>{{Auth::user()->name}}</p>
                    <p class="tw-mt-2 tw-font-bold">Username:</p>
                    <p>{{Auth::user()->username}}</p>
                </div>
            </div>

            <div class="tw-flex tw-justify-end tw-mt-6">
                <a href="/logout" type="button" class="tw-px-4 tw-py-2 tw-bg-rose-500 tw-text-white tw-font-bold tw-rounded-md tw-tracking-widest" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);">Logout</a>
            </div>
        </div>
    </main>
</body>
</html>