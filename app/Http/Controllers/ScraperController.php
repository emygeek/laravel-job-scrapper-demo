<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ScraperService;

class ScraperController extends Controller
{
    /**
     * Get all the jobs openings at a specified url
     */
    public function index(ScraperService $scraperService)
    {
        $url = 'https://stackoverflow.com/jobs?l=South+Africa&d=20&u=Km';
        
        $data = $scraperService->scrap($url);
        
        return view('welcome', $data);
    }
}
