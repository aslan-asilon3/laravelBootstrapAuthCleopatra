@extends('layouts.appAdmin')

@section('title','Yajra Datatable Implementation in Laravel 8 ')
@section('content')
    
  <div class="container">
  <div class="pull-right mb-2 ">
    <a class="btn btn-success" href="{{ route('useryajra.create') }}"> Create New User</a>
  </div>
    <table class="table table-bordered " id="usersTable">
        <thead>
            <th> No </th>
            <th> Name </th>
            <th> Email </th>
            <th> Status </th>
            <th> Photo_Profile </th>
            <th> Action </th>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>


@endsection