<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Services\WhmcsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $bodyClass = '';
        return view('Frontend.Homes.indexOne', compact('bodyClass'));
    }
    // Home Two 
    public function indexTwo(){
        $bodyClass = 'page-template template-two';
        return view('Frontend.Homes.indexTwo', compact('bodyClass'));
    }
    // Home Three 
    public function indexThree(){
        $bodyClass = 'home-three';
        return view('Frontend.Homes.indexThree', compact('bodyClass'));
    }
    // Home Four 
    public function indexFour(){
        $bodyClass = '';
        return view('Frontend.Homes.indexFour', compact('bodyClass'));
    }
    // Home Five 
    public function indexFive(){
        $bodyClass = '';
        return view('Frontend.Homes.indexFive', compact('bodyClass'));
    }
    // Home Six 
    public function indexSix(){
        $bodyClass = '';
        return view('Frontend.Homes.indexSix', compact('bodyClass'));
    }
    // Home Seven
    public function indexSeven(WhmcsService $whmcs){
        $bodyClass = 'template-game';
        $prices = $whmcs->getPrices();
        return view('Frontend.Homes.indexSeven', compact('bodyClass', 'prices'));
    }
    // Home Eight 
    public function indexEight(){
        $bodyClass = 'cloud__hosting';
        return view('Frontend.Homes.indexEight', compact('bodyClass'));
    }
    // Home Nine 
    public function indexNine(){
        $bodyClass = '';
        return view('Frontend.Homes.indexNine', compact('bodyClass'));
    }
    // Home Ten 
    public function indexTen(){
        $bodyClass = '';
        return view('Frontend.Homes.indexTen', compact('bodyClass'));
    }
    // Home Eleven 
    public function indexEleven(){
        $bodyClass = 'style__eleven';
        return view('Frontend.Homes.indexEleven', compact('bodyClass'));
    }
}
