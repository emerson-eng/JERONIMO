<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers;
/**
 * Class CertificateController
 * @package App\Http\Controllers
 */
class CertificateControllerPdf extends Controller
{
    // public function pdf()
    // {
    // $certificate = Certificate::find(1);
    // $pdf = PDF::loadView('layouts/certificate',[
    //     'certificate' => $certificate,
    //     ]);
    // return $pdf ->setPaper('A4','landscape')->stream('certificate.pdf');
    // }


}
