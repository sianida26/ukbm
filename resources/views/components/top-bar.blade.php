<?php
use Illuminate\Support\Facades\Auth;
?>
<div class="tw-sticky tw-top-0 tw-bg-sky-500 tw-px-4 lg:tw-px-8 tw-py-2 tw-flex tw-justify-between tw-text-white">

    {{-- left side --}}
    <div>
        {{-- home --}}
        @if(Auth::user()->hasRole('guru'))
            <a href="/dashboard" class="bi bi-house-fill tw-text-2xl"></a>
        @else
            <a href="/cara-penggunaan" class="bi bi-info-fill tw-text-2xl"></a>
        @endif
    </div>

    {{-- right side --}}
    <div class="tw-flex tw-items-center tw-gap-2">
        {{-- name --}}
        <span class="tw-hidden lg:tw-inline tw-font-bold">{{Auth::user()->name}}</span>
        {{-- profile --}}
        <a href="/profil" class="bi bi-person-circle tw-text-2xl"></a>
    </div>
</div>