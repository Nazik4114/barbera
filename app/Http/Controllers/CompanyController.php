<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Master;
use App\Models\Service;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        return view('welcome',[
            'company'=>Company::all()->first(),
            'masters'=> Master::all(),
            'services'=>Service::all(),
        ]);
    }

}
