<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @laravelPWA
    @include('styles.tailwind')
    @include('styles.bootstrapicons')
</head>
<body class="tw-relative tw-w-screen tw-h-screen tw-flex tw-justify-center tw-items-center tw-p-8 roboto tw-bg-cover tw-bg-center" style="background-image: url('{{ asset('storage/assets/bg-login.jpg') }}');">
    
    {{-- card --}}
    <div class="tw-max-w-sm tw-rounded-xl tw-bg-gray-200 tw-bg-opacity-90 tw-shadow-lg tw-px-6 tw-pt-9 tw-pb-12 tw-flex tw-flex-col tw-items-center tw-w-full">
        
        {{-- title --}}
        <h1 class="tw-text-center tw-text-2xl tw-font-bold tw-mb-8">L O G I N</h1>

        @error('error')
            {{-- error message --}}
            <div class="tw-text-red-500 tw-text-center tw-text-sm tw-mb-4 tw-font-semibold">
                {{ $message }}
            </div>
        @enderror

        <form action="" method="POST" class="tw-w-full tw-flex tw-flex-col tw-gap-4 tw-itemns-center tw-justify-center">
            @csrf

            {{-- username --}}
            <div class="tw-relative">
                <i class="bi bi-person-badge-fill tw-absolute tw-text-2xl tw-left-0 tw-bottom-1"></i>
                <input 
                    type="text" 
                    name="username"
                    placeholder="Username"
                    autofocus
                    class="tw-border-b tw-border-black tw-w-full tw-pl-8 focus:tw-outline-none tw-pb-1 tw-pt-2 tw-placeholder-gray-500 tw-bg-transparent"
                    {{-- style="background-color: transparent" --}}
                >
            </div>

            {{-- password --}}
            <div class="tw-relative">
                <i class="bi bi-key-fill tw-absolute tw-text-2xl tw-left-0 tw-bottom-1"></i>
                <input 
                    type="password" 
                    name="password"
                    id="password"
                    placeholder="Password"
                    class="tw-border-b tw-border-black tw-w-full tw-pl-8 focus:tw-outline-none tw-pb-1 tw-pt-2 tw-pr-6 tw-placeholder-gray-500 tw-bg-transparent"
                >
                <button class="tw-absolute tw-right-0 tw-inline tw-bottom-2 tw-text-xl tw-text-gray-600" type="button" onclick="togglevisibility()">
                    <span class="bi bi-eye-fill" id="icon-eye-fill"></span>
                    <span class="bi bi-eye-slash-fill" style="display: none" id="icon-eye-slash-fill"></span>
                </button>
            </div>

            {{-- login button --}}
            <div class="tw-flex tw-justify-center tw-items-center tw-mt-4">
                <button type="submit" class="tw-bg-blue-600 tw-text-white tw-px-6 tw-py-2 tw-rounded-lg tw-font-medium tw-mt-4" style="box-shadow: 6px 6px 8px -3px rgba(0, 0, 0, 0.25);">
                    L o g i n
                </button>
            </div>
        </form>
    </div>

    <script>
        
        //toggle visibility of password and eye icon
        function togglevisibility() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                document.getElementById("icon-eye-fill").style.display = "none";
                document.getElementById("icon-eye-slash-fill").style.display = "inline";
            } else {
                x.type = "password";
                document.getElementById("icon-eye-fill").style.display = "inline";
                document.getElementById("icon-eye-slash-fill").style.display = "none";
            }
        }
    </script>
</body>
</html>