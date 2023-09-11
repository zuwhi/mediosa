<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MediOsa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- === CDN Jquery === --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;700;900&display=swap');
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;700;900&family=Quicksand&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
    </style>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
</style>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');
</style>
    

</head>