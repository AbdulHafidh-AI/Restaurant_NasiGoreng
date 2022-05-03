@extends('layouts.admin')

@section('content')
<!-- Email -->
<div class="container">
    <form action="register-admin" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
        </div>
        <!-- Button -->
        <div class="text-end">
            <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
        </div>
    </form>
    
</div>

@endsection