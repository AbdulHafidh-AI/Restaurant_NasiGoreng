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
    <form action="/pesan" method="POST">
        @csrf
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="nama_pesanan">
              <option selected>Nasi Goreng Special</option>
              @foreach ($menu as $m)
              <option>{{ $m->nama }}</option>
              @endforeach
             
            </select>
            <label for="floatingSelect">Pilih Menu Yang anda inginkan </label>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah" name="total" required>
            <!--Button-->
            <div class="text-end">
                <button type="submit" class="btn btn-dark btn-lg btn-block">Pesan</button>
            </div>
        </div>
      </form>
    </div>

    <!-- Tabel Pesanan -->
    <div class="container mb-5">
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pesanan</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $row = 1;
                  @endphp

                
                    @foreach ($pesanan as $pesan)
                        
                    <!-- Menampilkan pesanan sesuai dengan user yang login -->
                    @if ($pesan->user_id == Auth::user()->id)
                    <tr>
                        <th scope="row">{{ $row }}</th>
                        <td>{{ $pesan->nama_pesanan }}</td>
                        <td>{{ $pesan->total }}</td>
                        @if ($pesan->status == 0)
                            <td>Belum Siap</td>
                            
                        @else
                        <td>Sudah siap</td>
                        @endif
                        
                    </tr>
                    @endif

                    @php
                        $row++;
                    @endphp
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>


      <!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; FRECE</p></div>
</footer>
      
@endsection