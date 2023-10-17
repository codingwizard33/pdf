<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

// use Ibnuhalimm\LaravelPdfToHtml\Facades\PdfToHtml;
use Spatie\PdfToImage\Pdf;
use Intervention\Image\ImageManagerStatic as Image;

class OpenFileController extends Controller
{
    public function index($id)
    {
        $file = Job::where('id', $id)->first();

        if ($file->pdf_creation_date != $file->pdf_modified_date) {
            $pdf = new Pdf(public_path($file->path));
            $newFile = substr($file->file_name, 0, -4);
            $pdf->saveImage(public_path("storage/pdfimgs/$newFile.png"));

            $waterMarkUrl = public_path('dist/img/watermark.png');
            $image = Image::make(public_path("storage/pdfimgs/$newFile.png"));
            $image->insert($waterMarkUrl, 'bottom-top', 787, 450);
            $path = $image->save(public_path("storage/pdfimgs/$newFile.png"));
        } else {

            $pdf = new Pdf(public_path($file->path));
            $newFile = substr($file->file_name, 0, -4);
            $pdf->saveImage(public_path("storage/pdfimgs/$newFile.png"));
            $image = Image::make(public_path("storage/pdfimgs/$newFile.png"));
            $path = $image->save(public_path("storage/pdfimgs/$newFile.png"));
        }

        return view('pages.pdf', [
            'file' => $file,
            'path' => $path->basename
        ]);
    }
}
