<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireusController extends Controller
{
    
    // Graphic Designers
    public function uiuxdesign(){
        return view('hireUs.graphicsDesign.uiuxdesign');
    }

    public function webdesigner(){
        return view('hireUs.graphicsDesign.webdesigner');
    }

    // FrontEnd Developer
    public function reactdeveloper(){
        return view('hireUs.frontenddeveloper.reactdeveloper');
    }

    public function angulardeveloper(){
        return view('hireUs.frontenddeveloper.angulardeveloper');
    }

    public function vuedeveloper(){
        return view('hireUs.frontenddeveloper.vuedeveloper');
    }

    // BackEnd Developer
    public function phpdeveloper(){
        return view('hireUs.backenddeveloper.phpdeveloper');
    }

    public function laraveldeveloper(){
        return view('hireUs.backenddeveloper.laraveldeveloper');
    }

    public function netdeveloper(){
        return view('hireUs.backenddeveloper.netdeveloper');
    }

    public function nodedeveloper(){
        return view('hireUs.backenddeveloper.nodedeveloper');
    }

    public function pythondeveloper(){
        return view('hireUs.backenddeveloper.pythondeveloper');
    }

    // Mobile Developer

    public function iosdeveloper(){
        return view('hireUs.Mobiledeveloper.iosdeveloper');
    }

    public function androiddeveloper(){
        return view('hireUs.Mobiledeveloper.androiddeveloper');
    }

    public function ionicdeveloper(){
        return view('hireUs.Mobiledeveloper.ionicdeveloper');
    }

    public function flutterdeveloper(){
        return view('hireUs.Mobiledeveloper.flutterdeveloper');
    }

    public function reactnativedeveloper(){
        return view('hireUs.Mobiledeveloper.reactnativedeveloper');
    }

    // Cms Developer
    public function wordpressdeveloper(){
        return view('hireUs.cmsdeveloper.wordpressdeveloper');
    }

    public function shopifydeveloper(){
        return view('hireUs.cmsdeveloper.shopifydeveloper');
    }
    
    public function magentodeveloper(){
        return view('hireUs.cmsdeveloper.magentodeveloper');
    }
    
    public function drupaldeveloper(){
        return view('hireUs.cmsdeveloper.drupaldeveloper');
    }

    // Hireus Services
    public function hiredevelopers(){
        return view('services.hireservices.hiredevelopers');
    }

    // Development Services
    public function graphicsdesigners(){
        return view('services.developmentservices.graphicsdesigners');
    }
    public function webapp(){
        return view('services.developmentservices.webapp');
    }

    public function webportal(){
        return view('services.developmentservices.webportal');
    }
    public function mobileapp(){
        return view('services.developmentservices.mobileapp');
    }
    public function frontenddevelopment(){
        return view('services.developmentservices.frontenddevelopment');
    }
    public function enterprisesoftware(){
        return view('services.developmentservices.enterprisesoftware');
    }
    public function offshoresoftwarer(){
        return view('services.developmentservices.offshoresoftware');
    }
    public function aisoftwaredevelopment(){
        return view('services.developmentservices.aisoftwaredevelopment');
    }

    // Support Services
    public function digitalmarketing(){
        return view('services.supportservices.digitalmarketing');
    }

    public function virtualsassistant(){
        return view('services.supportservices.virtualsassistant');
    }

    public function dataanalytics(){
        return view('services.supportservices.dataanalytics');
    }


    // Testing Services
    public function qasoftware(){
        return view('services.testingservices.qasoftware');
    }

    // Devops Services
    public function devops(){
        return view('services.devopsservices.devops');
    }

    // Resource
    public function zerotrust(){
        return view('resource.casestudies.zerotrust');
    }

    public function mustad(){
        return view('resource.casestudies.mustad');
    }

    public function icam(){
        return view('resource.casestudies.icam');
    }

    public function testimonial(){
        return view('resource.testimonial');
    }

    public function blog(){
        return view('resource.blog');
    }

    // About Us
    public function aboutus(){
        return view('aboutus.aboutus');
    }

    // Career
    public function career(){
        return view('career.career');
    }

    // Contact Us
    public function contactus(){
        return view('contactus.contactus');
    }
    
}
