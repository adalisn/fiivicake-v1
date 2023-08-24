<!doctype html>
<html lang="en" style="height: 100%;min-height: 100%;display: flex;flex-direction: column;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fivicake @yield('content')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Uchen&display=swap" rel="stylesheet">
  <link rel="icon" href="..." type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  {{-- Trix Editor --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>
<body style="height: 100%;min-height: 100%;display: flex;flex-direction: column;font-family: 'Quicksand', sans-serif;">
  {{-- header/navbar --}}
  @include('partials/navbar')
  
  {{-- content --}}
  <div class="container mt-4 mb-3">
    @yield('container')
  </div>
  
  {{-- footer --}}
  @include('partials/footer')
  
  @include('sweetalert::alert')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>