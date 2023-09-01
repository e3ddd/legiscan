<?php

namespace App\Repositories;

use App\Models\Committe;
use App\Models\LegiScanInfo;

class LegiScanRepository
{
    public function __construct()
    {
        $this->logiScanInfo = new LegiScanInfo();
    }

    public function getAllLegiScanInfo()
    {
        return $this->logiScanInfo->all();

    }

    public function getInfoBySlug($slug)
    {
        return $this->logiScanInfo->where('query', $slug)->get();
    }
}
