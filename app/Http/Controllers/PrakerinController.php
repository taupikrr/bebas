<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan(){
    	$aa="Taupik Ramadhan";
    	$bb="Eneng Koswara";
    	$cc="Icih Berlina";
    	$dd="Asep jhon";
    	$ee="Ujang aw";
    	return view ('percobaan', compact('aa','bb','cc','dd','ee')
    		);
    
    }

    public function percobaan2(){
    	$f="Suci";
    	$g="Koswara";
    	$h="Manohara";
    	$i="Steven";
    	$j="neneng";
    	return view ('percobaan2', compact('f','g','h','i','j')
    		);

    }
    
        public function percobaan3(){
    	$k="Suci";
    	$l="Koswara";
    	$m="Manohara";
    	$n="Steven";
    	$o="neneng";
    	return view ('percobaan3', compact('k','l','m','n','o')
    		);

    }

        public function percobaan4(){
    	$p="Suci";
    	$q="Koswara";
    	$r="Manohara";
    	$s="Steven";
    	$t="neneng";
    	return view ('percobaan4', compact('p','q','r','s','t')
    		);

    }
    
        public function percobaan5(){
    	$u="Suci";
    	$v="Koswara";
    	$w="Manohara";
    	$x="Steven";
    	$y="neneng";
    	return view ('percobaan5', compact('u','v','w','x','y')
    		);					
	
	}

	public function param($id)
	{
		return view ('welcome');
	}

	public function parameter($ad)
	{
		return view ('welcome2', compact('ad'));
	}
}