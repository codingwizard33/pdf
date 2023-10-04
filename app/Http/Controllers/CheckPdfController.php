<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Services\CheckPdfService;
use App\Services\PdfParseService;
use Illuminate\Http\Request;
use DateTime;

class CheckPdfController extends Controller
{
    public function checkFile(Request $request)
    {
        CheckPdfService::checkPdf($request->job_id);

        return redirect()->route('make-job');
    }
}
