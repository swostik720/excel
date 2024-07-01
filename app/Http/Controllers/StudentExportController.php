<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
