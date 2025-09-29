<?php

namespace App\Http\Controllers;

use Spatie\LaravelPdf\Facades\Pdf;

class DownloadResumeController extends Controller
{
    public function __invoke()
    {
        return Pdf::view('resume-printable')
            ->margins(10, 0, 10, 0)
            ->name('karl-m-resume.pdf')
            ->download();
    }
}
