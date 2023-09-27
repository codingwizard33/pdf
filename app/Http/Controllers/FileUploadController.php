<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Services\FileUploadService;
use App\Services\PdfParseService;
use App\Services\SaveJobService;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadPdf(FileUploadRequest $request)
    {
        $fileUploadService = new FileUploadService($request->file('pdf'));
        $file = $fileUploadService->fileUpload();

        $data = new PdfParseService($file->path);
        $pdfMetadata = $data->parser();

        $saveJob = new SaveJobService($file, $pdfMetadata);
        $saveJob->saveJob();

        return redirect()->route('make-job');
    }
}
