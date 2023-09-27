<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Object_;

class FileUploadService
{
    protected $pdf;

    public function __construct($file)
    {
        $this->pdf = $file;
    }

    public function fileUpload()
    {
        $hash = Hash::make(file_get_contents($this->pdf));

        $originalName = $this->pdf->getClientOriginalName();
        
        $path = $this->pdf->storeAs('pdfs', $originalName, 'public');

        $file = Storage::disk('public')->get($path);
        $checkSum = Hash::make($file);

        $data = array();

        if ($hash !== $checkSum) {
           $data['validated'] = 'Completed';
        }

        $data['path'] = $path;
        $data['fileName'] = $originalName;

        return (object) $data;
    }
}