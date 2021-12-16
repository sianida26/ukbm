<?php
    use Illuminate\Support\Facades\Auth;
    $title = "Tanda Atom";
    $subtitle = "Sekilas materi mengenai notasi atom";
    $coverUrl = asset('/storage/assets/inti-atom.svg');
    $coverDescription = "Atom memiliki inti berupa proton dan neutron";

    $soals = App\Models\Soal::where('subbab', 'B')->get();
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
                    <p>Dibuat pada tanggal 11 Desember 2021</p>
                </div>
            </div>

            {{-- image --}}
            <img src="{{$coverUrl}}" alt="image" class="tw-w-full tw-max-w-sm tw-mt-4 tw-mx-auto">
            <p class="tw-text-sm tw-font-light tw-mt-2">{!!$coverDescription!!}</p>

        </div>
    </div>
    
    {{-- content --}}
    <main class="tw-px-4 tw-mt-8 tw-text-gray-700 tw-text-lg tw-text-justify tw-max-w-screen-md tw-mx-auto">
        <img src="{{asset('/storage/assets/atomic-notation.svg')}}" alt="" class="tw-w-full tw-max-w-sm tw-mx-auto">

        <p class="tw-mt-4">Di mana:</p>
        <ul>
            <li>A: Nomor massa (\(\Sigma\) proton + \(\Sigma\) neutron)</li>           
            <li>Z: Nomor atom (\(\Sigma\) proton)</li>
            <li>X: Lambang unsur</li>
        </ul>

        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            {{-- <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div> --}}

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-text-xl tw-mt-4">\(\ce{^13_6C}\)</p>
                <p>\(\Sigma\) proton = Z = <strong>6</strong></p>
                <p>\(\Sigma\) neutron = A - Z = 13 - 6 = <strong>7</strong> </p>

                <p class="tw-text-xl tw-mt-4">\(\ce{^252_99Es}\)</p>
                <p>\(\Sigma\) proton = Z = <strong>99</strong></p>
                <p>\(\Sigma\) neutron = A - Z = 252 - 99 = <strong>153</strong> </p>
            </div>
        </div>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Isotop</h1>
        <p class="tw-mt-4">Isotop adalah atom-atom yang memiliki <span class="tw-bg-yellow-300 highlight">nomor atom yang sama namun
            memiliki nomor massa yang berbeda.</span> Dengan kata lain sebuah unsur yang
            memiliki jumlah proton dan elektron sama dapat memiliki jumlah neutron yang
            berbeda, itulah yang dinamakan dengan isotop.</p>
        
        <div class="tw-grid tw-grid-cols-3 tw-gap-4">
            <div>
                <img src="{{asset('/storage/assets/Hydrogen.svg')}}" class="tw-w-40 tw-mx-auto" alt="Hidrogen memiliki 1 proton dan 0 neutron">
                <p class="tw-text-center tw-text-sm tw-text-gray-700 tw-mt-2">Hidrogen memiliki 1 proton dan 0 neutron (\(\ce{^1_1H}\))</p>
            </div>

            <div>
                <img src="{{asset('/storage/assets/Deuterium.svg')}}" class="tw-w-40 tw-mx-auto" alt="Deuterium memiliki 1 proton dan 1 neutron">
                <p class="tw-text-center tw-text-sm tw-text-gray-700 tw-mt-2">Deuterium memiliki 1 proton dan 1 neutron (\(\ce{^2_1H}\))</p>
            </div>

            <div>
                <img src="{{asset('/storage/assets/Tritium.svg')}}" class="tw-w-40 tw-mx-auto" alt="Tritium memiliki 1 proton dan 2 neutron">
                <p class="tw-text-center tw-text-sm tw-text-gray-700 tw-mt-2">Tritium memiliki 1 proton dan 2 neutron (\(\ce{^3_1H}\))</p>
            </div>
        </div>
        <p class="tw-text-center tw-mt-2">Unsur hidrogen memiliki 3 isotop, yaitu \(\ce{^1_1H}\), \(\ce{^2_1H}\), dan \(\ce{^3_1H}\)</p>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Isobar</h1>
        <p class="tw-mt-4">Isobar adalah <span class="highlight tw-bg-yellow-300">unsur atomnya berbeda namun memiliki nomor massa (A) yang sama.</span></p>

        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            {{-- <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div> --}}

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-mt-4">\(\ce{^24_11Na}\) dan \(\ce{^24_12Mg}\)</p>
                <p class="tw-mt-4">\(\ce{^11_5B}\) dan \(\ce{^11_6C}\)</p>

                <p class="tw-mt-2 tw-font-medium">Kedua contoh pasangan di atas memiliki nomor massa yang sama</p>
            </div>
        </div>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Isoton</h1>
        <p class="tw-mt-4">Isoton adalah <span class="highlight tw-bg-yellow-300">unsur atomnya berbeda namun memiliki jumlah neutron (A - Z) yang sama.</span></p>

        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            {{-- <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div> --}}

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                <h2 class="tw-text-black tw-font-semibold tw-bg-text-sky-800">Contoh:</h2>
                <p class="tw-mt-4">\(\ce{^93_42Mo}\) dan \(\ce{^94_43Tc}\)</p>
                <p class="tw-mt-4">\(\ce{^132_56Ba}\) dan \(\ce{^131_55Cs}\)</p>

                <p class="tw-mt-2 tw-font-medium">Kedua contoh pasangan di atas memiliki jumlah neutron (nomor massa - nomor atom) yang sama</p>
            </div>
        </div>        
        {{-- <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Nomor massa</h1>

        <p class="tw-mt-4">While developing some applications like chat apps, we need a local database to store the data to handle cases like decrease frequent loading or offline handling, etc. If you are a developer from ages back, you might have used the SQLite database with an SQLiteOpenHelper class to perform database operations. As time passed, many libraries flourished to make developer's life easier. One such library is Room.</p>
        <p class="tw-mt-4">Room provides an abstraction layer over SQLite to allow for more robust database access while harnessing the full power of SQLite. Simply saying Room is an abstract layer over SQLite to provide simplified coding. Nowadays we can see many applications using Room because of the benefits it’s providing. If you are using SQLite in your apps, please migrate to Room. The Room persistence library is very handy and easy to use.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Why use Room?</h2>
        <ol class="tw-list-decimal tw-list-outside tw-pl-4">
            <li>We can eliminate most of the boilerplate code related to SQLite database</li>
            <li>In the case of SQLite, There is no compile-time verification of raw SQLite queries. But in Room, there is a compile-time verification of SQL queries.  <strong class="tw-py-1 tw-px-2 tw-bg-gray-300 tw-text-sky-700 tw-font-medium tw-rounded-lg">@Query</strong>  and  <strong class="tw-py-1 tw-px-2 tw-bg-gray-300 tw-text-sky-700 tw-font-medium tw-rounded-lg">@Entity</strong>  are checked at the compile time to eliminate issues at runtime. It not only checks for the syntax but also the missing tables.</li>
            <li>Easier to implement and maintain.</li>
            <li>The Room is built to work with LiveData and RxJava for data observation, while SQLite does not.</li>

        </ol>

        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left tw-mt-4">Components of Room</h1>
        
        <p class="tw-mt-4">Before digging into code, let's understand the fundamentals of Room. There are mainly three components we need to know. They are:</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Entity</h2>
        <p class="">An <strong class="tw-text-black">entity</strong> represents a table within the database. The Room creates a table for each class that has @Entity annotation. Each field in the class is a column in the table and we can give a specific name to that column by annotating that field with @ColumnInfo (name = “column_name”). There should be at least one primary key field for each table which we specify using annotation @PrimaryKey.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">DAO</h2>
        <p class=""> <strong class="tw-text-black">Data Access Object (DAO)</strong> is an interface with annotation @Dao, which contains the methods used for accessing the database. We will create abstract methods in Dao to perform CRUD operations. The room supports the following annotations in Dao @Insert, @Update, @Delete, @Query. Previously we worked with Cursor objects in SQLite, but with Dao we simply define the respective queries with annotations. Everything is simplified.</p>

        <h2 class="tw-text-black tw-font-semibold tw-mt-4">Database</h2>
        <p>The <strong class="tw-text-black">database</strong> contains the database holder and serves as the main access point for the underlying connection to your app’s persisted, relational data. The class that’s annotated with @Database and should satisfy the following conditions:</p>
        <ul class="tw-list-disc tw-list-outside tw-pl-4 tw-mt-4">
            <li>Be an abstract class that extends RoomDatabase.</li>
            <li>Include the list of all entities and database version associated with the database.</li>
            <li>Contain an abstract method that has zero arguments and returns the class that is annotated with @Dao.</li>
        </ul>

        <p class="tw-mt-4">The attribute version is used to define the version of the database and entities are used to define the list of all tables this database will contain. At runtime, you can acquire an instance of Databse by calling Room.databaseBuilder() or Room.inMemoryDatabaseBuilder().</p> --}}
        {{-- soal --}}
        <form class="tw-bg-orange-300 tw-rounded-lg tw-w-full tw-flex tw-flex-col tw-mt-4 tw-shadow-md tw-pb-4">

            <div class="tw-w-full tw-py-2 tw-rounded-t-lg tw-bg-orange-700 tw-text-white tw-text-center">
                <h2 class="tw-text-white tw-font-semibold tw-text-lg">Soal</h2>
            </div>

            <ol class="tw-w-full tw-px-4 lg:tw-pl-12 lg:tw-pr-8 tw-flex tw-flex-col tw-text-black tw-text-base tw-list-outside tw-list-decimal">
                
                @foreach($soals as $soal)
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
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.strukturAtom')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Struktur Atom</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.mekanikaKuantum')}}">
            <p>Teori Atom Mekanika Kuantum</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')

    <script>

        renderMathInElement(
          document.body,
          {
              delimiters: [
                  {left: "$$", right: "$$", display: true},
                  {left: "\\[", right: "\\]", display: true},
                  {left: "$", right: "$", display: false},
                  {left: "\\(", right: "\\)", display: false}
              ]
          }
      );
    </script>
    {{-- <script src="mathjax-config.js" defer></script> --}}
    <script type="text/javascript" id="MathJax-script" defer
      src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>
    
</body>
</html>