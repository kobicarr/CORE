<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function show()
    {
        $companies = Company::all();
        return view('companies.companies',['companies' => $companies]);
    }

    public function company($comSlug)
    {
        $company = Company::where('slug', $comSlug)->first();

        return view('companies.company',['company' => $company]);
    }
}
