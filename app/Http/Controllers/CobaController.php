<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;

class CobaController extends Controller
{
    //
    public function test ()
    {
    	$a=coba::all();
    	return $a;
    }

    public function test2 ($id)
    {
    	$b=coba::find($id);
    	return $b;
    }

    public function index ()
    {
    	$tampilan=coba::all();
    	return view('coba', compact('tampilan'));
    }

    public function test3 ()
    {
    	$buah=['mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah', compact('buah'));
    }

    public function test4 ()
    {
    	$nm=['Adi','Tatang','Jajang','Asep','Icih'];
    	return view('nama', compact('nm'));
    }

    public function binatang ($id)
    {
    	$data=['binatang'=>['Monyet','Harimau','Singa','Kucing','Kambing'], 'kendaraan'=>['Mobil','Motor','Sepedah','Bajai','Beca'], 'laptop'=>['Asus','Samsung','HP','Apple','Lenovo']];
        $ahaha=$data[$id];
    	return view('binatang', compact('ahaha'));
    }

}
