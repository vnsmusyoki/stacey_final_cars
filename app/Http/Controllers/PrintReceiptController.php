<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PrintReceiptController extends Controller
{
    public function printreceipt($slug)
    {
        $logteacherid = User::findorFail(auth()->user()->id);
        $car = Car::where([
            'id' => $slug,
        ])->firstOrFail();

        $pdf = PDF::setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
        ])->loadView(
            'receipt',
            compact(
                'car',
            )
        );
        $printrecipt =
            $car->reg_number .
            '-' .
            $car->engine_cc.
            '.pdf';
        // return $pdf->download($printrecipt);
        return $pdf->stream();
    }
}
