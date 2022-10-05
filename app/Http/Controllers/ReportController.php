<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class ReportController extends Controller
{
    public $status = "INIT"; // INIT, SUCCESS, ERROR, LOADING
    public $status_message = "Initializing the application...";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayReport(Request $request)
    {
        $seo_title = "Demo Report";

        SEOMeta::setTitle($seo_title);
        OpenGraph::setTitle($seo_title);
        TwitterCard::setTitle($seo_title);
        JsonLd::setTitle($seo_title);

        $input = $request->input;
        $language = isset($request->lang) ? $request->lang : NULL;
        $location = isset($request->geo) ? $request->geo : NULL;
        $platform = isset($request->platform) ? $request->platform : "google";

        // Process the input and generate data for the report
        // then change the status to SUCCESS

        $this->status = "SUCCESS";

        return view('report')->with([
            'status' => $this->status,
            'status_message' => $this->status_message,
            'input' => $input
        ]);
    }
}
