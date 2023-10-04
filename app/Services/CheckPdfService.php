<?php

namespace App\Services;

use App\Models\Job;
use DateTime;

class CheckPdfService
{
    public static function checkPdf($id)
    {
        $file = Job::where('id', $id)->first()->path;
        $file = str_replace('storage/', '', $file);
        $parse = new PdfParseService($file);
        $metaData = $parse->parser();

        Job::find($id)->update(['status' => true]);

        $created = new DateTime($metaData->CreationDate);
        $createdDate = $created->format("Y-m-d H:i");
        $modified = new DateTime($metaData->ModDate);
        $modifiedDate = $modified->format("Y-m-d H:i");

        if ($createdDate != $modifiedDate) {
            Job::where('id', $id)->update(['edited' => 'edited']);
        }

        return 1;
    }
}
