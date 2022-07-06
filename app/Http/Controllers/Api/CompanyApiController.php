<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\response;
use App\Http\Resources\CompanyResource;

class CompanyApiController extends Controller
{
    public function query()
    {
        $company = Company::first();
        return new CompanyResource($company);
    }
}
