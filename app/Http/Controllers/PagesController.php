<?php
namespace  App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller{

  public function res(){
    return view('res');
   }

  public function com(){
     return view('com');
    }

  public function deck(){
      return view('deck');
     }

  public function flooring(){
       return view('flooring');
      }

  public function kitchen(){
        return view('kitchen');
       }



}
