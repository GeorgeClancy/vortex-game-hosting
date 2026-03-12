<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Services\WhmcsService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Other Pages Controller Function Include
     * 
     */

    // signIn 
    public function signIn(){
        return view('Frontend.Pages.signIn');
    }
    // signUp 
    public function signUp(){
        return view('Frontend.Pages.signUp');
    }
    // About 
    public function about(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.about', compact('bodyClass'));
    }
    // Pricing
    public function pricing(WhmcsService $whmcs){
        $bodyClass = 'page-template template-pricing';
        $prices = $whmcs->getPrices();
        return view('Frontend.Pages.pricing', compact('bodyClass', 'prices'));
    }
    // pricingPackage 
    public function pricingPackage(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.pricingPackage', compact('bodyClass'));
    }
    // pricingComparision 
    public function pricingComparision(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.pricingComparision', compact('bodyClass'));
    }
    // paymentMethod 
    public function paymentMethod(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.paymentMethod', compact('bodyClass'));
    }
    // Affiliate 
    public function affiliate(){
        $bodyClass = 'page-template template-affiliate';
        return view('Frontend.Pages.affiliate', compact('bodyClass'));
    }
    // businessMail 
    public function businessMail(){
        $bodyClass = 'page-template business-mail';
        return view('Frontend.Pages.businessMail', compact('bodyClass'));
    }
    // sslCertificate 
    public function sslCertificate(){
        $bodyClass = 'page-template ssl-ertificates';
        return view('Frontend.Pages.sslCertificate', compact('bodyClass'));
    }
    // Partner 
    public function partner(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.partner', compact('bodyClass'));
    }
    // Maintenance 
    public function maintenance(){
        $bodyClass = 'maintenance-home';
        return view('Frontend.Pages.maintenance', compact('bodyClass'));
    }
    // blackFriday 
    public function blackFriday(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.blackFriday', compact('bodyClass'));
    }
    // Blog 
    public function blog(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.blog', compact('bodyClass'));
    }
    // blogGrid 
    public function blogGrid(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.blogGrid', compact('bodyClass'));
    }
    // blogList 
    public function blogList(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.blogList', compact('bodyClass'));
    }
    // blogDetails 
    public function blogDetails(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.blogDetails', compact('bodyClass'));
    } 
    // gameDetails 
    public function gameDetails(){
        $bodyClass = 'template-game template-game-details loaded';
        return view('Frontend.Pages.gameDetails', compact('bodyClass'));
    } 
    // Technology 
    public function technology(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.technology', compact('bodyClass'));
    } 
    // dataCenter 
    public function dataCenter(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.dataCenter', compact('bodyClass'));
    } 
    // Faq 
    public function faq(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.faq', compact('bodyClass'));
    } 
    // Support 
    public function support(){
        $bodyClass = 'page-template template-resell';
        return view('Frontend.Pages.support', compact('bodyClass'));
    } 
    // Contact 
    public function contact(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.contact', compact('bodyClass'));
    }
    // knowledgebase 
    public function knowledgebase(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.knowledgebase', compact('bodyClass'));
    } 
    // hostingOffer 
    public function hostingOffer(){
        $bodyClass = 'page-template template-pricing';
        return view('Frontend.Pages.hostingOffer', compact('bodyClass'));
    } 
    // Error 
    public function errorPage(){
        return view('Frontend.Pages.error');
    }
    
}
