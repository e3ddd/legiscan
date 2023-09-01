<?php

namespace App\Http\Controllers;

use App\Services\LegiScanService;
use Illuminate\Http\Request;

class LegiScanController extends Controller
{
    public function __construct()
    {
        $this->legiscanService = app(LegiScanService::class);
    }

    public function getAllLegiScanInfo()
    {
        return $this->legiscanService->getAllLegiScanInfo();
    }

    public function getInfoBySlug(Request $request)
    {
        return $this->legiscanService->getInfoBySlug($request->slug);
    }
}

