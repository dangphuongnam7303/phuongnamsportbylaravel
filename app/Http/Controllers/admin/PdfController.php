<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PdfController extends Controller
{
    public function exportPdf()
    {
        $data = []; // Dữ liệu bạn muốn truyền vào file PDF

        $pdf = PDF::loadView('admin.pdf.template', $data);

        return $pdf->stream('document.pdf'); // Xuất ra file PDF có tên 'document.pdf'
    }
}
