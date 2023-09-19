<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <title>Church Portal</title>
</head>
<body>
    <header>
        <p class="bg-black text-white">
            welcome to the church portal
        </p>
        @yield("head")
    </header>

    <main>
        {{-- what ever you add at this root file will reflect to any file its being
            extended to --}}
        @yield("main-content")
    </main>

    <footer>
        @yield("footer")
    </footer>

    @yield("script")
</body>
</html>
