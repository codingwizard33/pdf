<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadPdf(FileUploadRequest $request)
    {
        $data = $request->validated();

        dd($data);

        return 'ok';
    }
}
