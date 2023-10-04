<?php

namespace App\Services;

use DateTime;
use App\Models\Job;

class SaveJobService
{
    protected $path;
    protected $userName;
    protected $fileName;
    protected $validated;
    protected $pdfCreationDate;
    protected $pdfModifiedDate;

    public function __construct($file, $metadata)
    {
        $created = new DateTime($metadata->CreationDate);
        $createdDate = $created->format("Y-m-d H:i");
        $modified = new DateTime($metadata->ModDate);
        $modifiedDate = $modified->format("Y-m-d H:i");

        $this->path = $file->path;
        $this->userName = $metadata->Author;
        $this->fileName = $file->fileName;
        $this->validated = $file->validated;
        $this->pdfCreationDate = $createdDate;
        $this->pdfModifiedDate = $modifiedDate;
    }

    public function saveJob()
    {
        Job::create([
            'user_name' => $this->userName,
            'file_name' => $this->fileName,
            'validated' => $this->validated,
            'path' => 'storage/' . $this->path,
            'pdf_creation_date' => $this->pdfCreationDate,
            'pdf_modified_date' => $this->pdfModifiedDate
        ]);

        return 'Success.';
    }
}
