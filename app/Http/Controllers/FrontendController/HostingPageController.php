<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostingPageController extends Controller
{
    /**
     * All Hosting Pages Function Include
     * 
     */

    // sharedHosting 
    public function sharedHosting(){
        $bodyClass = 'shared-page page-template';
        return view('Frontend.Hosting.sharedHosting', compact('bodyClass'));
    }
    // WordPressHosting 
    public function WordPressHosting(){
        $bodyClass = 'wordpress-hosting page-template';
        return view('Frontend.Hosting.WordPressHosting', compact('bodyClass'));
    }
    // vpsHosting 
    public function vpsHosting(){
        $bodyClass = 'vps-hosting page-template';
        return view('Frontend.Hosting.vpsHosting', compact('bodyClass'));
    }
    // resellerHosting 
    public function resellerHosting(){
        $bodyClass = 'template-resell page-template';
        return view('Frontend.Hosting.resellerHosting', compact('bodyClass'));
    }
    // dedicatedHosting 
    public function dedicatedHosting(){
        $bodyClass = 'template-dedicated page-template';
        return view('Frontend.Hosting.dedicatedHosting', compact('bodyClass'));
    }
    // cloudHosting 
    public function cloudHosting(){
        $bodyClass = 'template-cloud page-template';
        return view('Frontend.Hosting.cloudHosting', compact('bodyClass'));
    }
}
