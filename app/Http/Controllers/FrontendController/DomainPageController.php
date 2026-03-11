<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DomainPageController extends Controller
{
    /**
     * All Domain Pages Function Include
     * 
     */

    // domainChecker 
    public function domainChecker(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Domain.domainChecker', compact('bodyClass'));
    }
    // domainTransfer 
    public function domainTransfer(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Domain.domainTransfer', compact('bodyClass'));
    }
    // domainRegister 
    public function domainRegister(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Domain.domainRegistration', compact('bodyClass'));
    }
    // whois 
    public function whois(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Domain.whois', compact('bodyClass'));
    }
    
}
