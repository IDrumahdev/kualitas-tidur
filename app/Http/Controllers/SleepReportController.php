<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SleepActivity;

class SleepReportController extends Controller
{
    /**
     * Note :
     *  1. Diambil dari data progress bar di bagi 100 di kalikan 12
     *  2. Dari data tersebut untuk mengisi activity_value pada tabel sleep_activities
     *  3. Untuk menampilkan data progress bar dari database : di looping sebanyak data yang ada
     * mendapatkan value activity_value di bagi 12 di kalikan 100 sehingga mendapatkan berapa persen (mengacu dari contoh soal)
     *  4. Untuk mendapatkan nilai Speedometer : summary dari activity_value di tabel sleep_activities di bagi banyaknya jumlah activity_name
     * sehingga mendapatkan nilai rata - rata
     */
    public function index()
    {
        $resultSleepActivity = SleepActivity::select('activity_name', 'activity_value')->get();
        $sumActivity         = $resultSleepActivity->sum('activity_value');
        $result              = $sumActivity / $resultSleepActivity->count();
            return view('welcome',compact('resultSleepActivity', 'result'));
    }
}
