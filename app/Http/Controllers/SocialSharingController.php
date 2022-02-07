<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialSharingController extends Controller
{

    public function index(){

        // Share button 1
        $shareButtons1 = \Share::page(
              'https://makitweb.com/datatables-ajax-pagination-with-search-and-sort-in-laravel-8/'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp() 
        ->reddit();

        // Share button 2
        $shareButtons2 = \Share::page(
              'https://makitweb.com/how-to-make-autocomplete-search-using-jquery-ui-in-laravel-8/'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram();

        // Share button 3
        $shareButtons3 = \Share::page(
               'https://makitweb.com/how-to-upload-multiple-files-with-vue-js-and-php/'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp() 
        ->reddit();

        // Load index view
        return view('socialsharing')
              ->with('shareButtons1',$shareButtons1 )
              ->with('shareButtons2',$shareButtons2 )
              ->with('shareButtons3',$shareButtons3 );
  }
}
