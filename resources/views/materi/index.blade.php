<?php
    $title = "Страница не найдена";
    $subtitle = "Ошибка 404";
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
        <h1 class="tw-text-black tw-font-semibold tw-pb-1 tw-border-black tw-text-xl tw-border-b tw-text-left">What is Room Database?</h1>

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

        <p class="tw-mt-4">The attribute version is used to define the version of the database and entities are used to define the list of all tables this database will contain. At runtime, you can acquire an instance of Databse by calling Room.databaseBuilder() or Room.inMemoryDatabaseBuilder().</p>

        {{-- alert --}}
        <div class="tw-my-4 tw-bg-sky-200 tw-rounded-lg tw-flex">
            <div class="tw-bg-sky-700 tw-w-12 tw-flex tw-justify-center tw-items-center tw-text-white tw-flex-shrink-0 tw-rounded-l-lg">
                <i class="bi bi-info-circle-fill tw-text-2xl"></i>
            </div>

            {{-- alert content --}}
            <div class="tw-flex-grow tw-py-4 tw-px-4">
                Starting from Room 2.1.0-alpha01, DAO methods annotated with @Insert ,  @Delete  or  @Update  supports Rx return types Completable ,  Maybe<T>  and  Single<T> .
            </div>
        </div>
    </main>

    {{-- navigation --}}
    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-4 tw-justify-between tw-px-4 tw-max-w-screen-md tw-mx-auto tw-text-lg tw-font-semibold tw-text-sky-800 tw-mt-8">
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2" href="{{route('materi.pendahuluan')}}">
            <i class="bi bi-arrow-left"></i>
            <p>Pendahuluan</p>
        </a>
        <a class="tw-gap-4 tw-rounded-md tw-border tw-flex tw-border-sky-500 tw-px-3 tw-py-2 tw-justify-end" href="{{route('materi.teoriAtom')}}">
            <p>Teori Tentang Atom</p>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    @include('materi.footer')
    
    @stack('scripts')

    
</body>
</html>