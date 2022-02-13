@extends('layouts.appAuth')

@section('content')
<div class="container">
<h2>Halo, {{ Auth::user()->name }} ! <br> 
Apakah Anda Yakin Ingin Logout Klik Logout ! <br> 
Jika tidak Klik Back    
<button class="btn-btn primary" onclick="history.go(-1)">
        << Back
</button>   </h2>
</div>
@endsection


