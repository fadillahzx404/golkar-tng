<?php

namespace App\Exports;

use App\Models\Rekapitulasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class RekapExport implements FromView
{
    protected $data;

    function __construct($data)
    {
        $this->data = $data;
    }
    public function view(): View
    {
        return view('author.admin.report.export', [
            'rekaps' => $this->data
        ]);
    }
}
