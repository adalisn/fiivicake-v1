{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Uchen&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="height: 100%;min-height: 100%;display: flex;flex-direction: column;font-family: 'Quicksand', sans-serif">
    <div class="container mt-5">
        <div class="text-center text-white p-5 d-flex justify-content-center align-items-center" style="background-color:brown">
            <h1 class="mx-2">Fivicake</h1>
            <h5 class="fw-normal mx-2 mb-0">Error 404, Harap Kembali Ke Home, Terima Kasih!</h5>
            <a href="/" class="btn btn-secondary mx-2">Balik ke Home</a>
        </div>
    </div>
    
</body>
</html>