<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function dashboardPDFGenerate()
    {
        $dashboards = Dashboard::all();

        $fileName = 'dashboards.pdf';

        $html = view('backend.dashboards.dashboard_pdf', compact('dashboards'))->render();

        $mpdf = new Mpdf();

        $mpdf->SetWatermarkText('Bangla Centre');
        $mpdf->showWatermarkText = true;

        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName,'I');
    }
}
