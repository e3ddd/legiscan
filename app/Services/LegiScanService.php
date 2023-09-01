<?php

namespace App\Services;

use App\Repositories\LegiScanRepository;

class LegiScanService
{
    private LegiScanRepository $legiScanRepository;
    public function __construct(LegiScanRepository $legiScanRepository)
    {
        $this->legiScanRepository = $legiScanRepository;
    }

    public function getAllLegiScanInfo()
    {
        return $this->legiScanRepository->getAllLegiScanInfo();
    }

    public function getInfoBySlug($slug)
    {
        return $this->legiScanRepository->getInfoBySlug($slug);
    }
}
