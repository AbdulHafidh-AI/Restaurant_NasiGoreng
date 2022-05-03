@extends('layouts.app')

@section('content')
<!-- Header -->

    <!--form pesanan-->
   <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Silahkan Memesan pesanan kami</h1>
            <p class="lead fw-normal text-white-50 mb-0">Ayo Buruan!</p>
        </div>
    </div>
</header>

    <div class="container mb-5"> 
         <!-- Make Form to order nasi goreng -->
    <form action="pesan" method="POST">
        @csrf
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Nasi Goreng Special</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Pilih Menu Yang anda inginkan </label>
          </div>
      </form>
    </div>
   




      <!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Restaurant Nasi Goreng</p></div>
</footer>
      
@endsection