@extends('layouts.app')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Nasi Goreng Enak Hanya disini</h1>
            <p class="lead fw-normal text-white-50 mb-0">Buruan Silahkan Daftar untuk memesan Nasi Goreng yang anda inginkan</p>
        </div>
    </div>
</header>

<!-- Information about Nasi Goreng -->
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="display-4 fw-bolder">Nasi Goreng</h2>
                <p class="lead fw-normal mb-0">Nasi Goreng adalah makanan khas Indonesia yang terbuat dari nasi yang dipecil dan dibumbui dengan bumbu-bumbu yang beragam. Nasi goreng biasanya dibuat dengan bahan-bahan berikut:</p>
                <ul class="list-unstyled">
                    <li class="mb-2">Nasi</li>
                    <li class="mb-2">Bumbu-bumbu</li>
                    <li class="mb-2">Sayuran</li>
                    <li class="mb-2">Bahan lainnya</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/nasi.jpeg') }}" alt="Nasi Goreng" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Restaurant Nasi Goreng</p></div>
</footer>
    
@endsection


