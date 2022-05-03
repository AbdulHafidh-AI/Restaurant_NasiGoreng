@extends('layouts.admin')

@section('content')

<!--Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Restaurant FRECE</h1>
            <p class="lead fw-normal text-white-50 mb-0">Sumber nasi goreng yang terenak</p>
        </div>
    </div>
</header>

<br>
 <!-- Tabel Pesanan -->
 <div class="container mb-5">
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Total</th>
                    <th scope="col">Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $row = 1;
              @endphp

            
                @foreach ($pesanan as $pesan)
                  
                @if ($pesan->status == false)
                <tr>
                    <th scope="row">{{ $row }}</th>
                    <td>{{ $pesan->nama_pesanan }}</td>
                    <td>{{ $pesan->total }}</td>
                    <td>
                        <!-- Button Ok -->
                        <form action="/konfirmasi/{{ $pesan->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">OK</button>
                        </form>
                    </td>
                    
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
    <footer class="py-5 bg-dark mt-auto">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; FRECE</p></div>
    </footer>
    
@endsection