@extends('layouts/appAdmin')

@section('content')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 


    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

    <!-- update section -->
    <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
        <div class="card-body flex flex-row">
            
            <!-- image -->
            <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                <img src="{{asset('assets/img/happy.svg')}}" alt="img title">
            </div>
            <!-- end image -->

            <!-- info -->
            <div class="py-2 ml-10 text-4xl font-medium leading-tight text-gray-800">
                <h1 class="h6">Halo, {{ Auth::user()->name }} ! <br>
                
                Anda login Sebagai 
                <span class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded">User !</span>
              
              </h1>

            </div>
            <!-- end info -->

        </div>
    </div>
    <!-- end update section -->


</div>
    <!-- end quick Info -->
        

  </div>
  <!-- end content -->
  
@endsection
