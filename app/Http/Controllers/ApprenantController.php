<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
class ApprenantController extends Controller
{
    public function index(){
        $list = Apprenant::all(); 
        return view('listapprenant',['list'=>$list]); 
    }
}
