<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;

class PortalController extends Controller
{

    public function TugasTable(){
        return view('table');
    }
}