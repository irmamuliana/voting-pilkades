<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\EloquentPaslonRepository;
use App\Http\Requests\PaslonCreate;
use App\Models\Pemilu;
use PDF;
use App\Charts\VotingChart;

class HasilController extends Controller
{
    
    public $paslonRepo;

    public function __construct(EloquentPaslonRepository $paslonRepo)
    {
        $this->middleware('auth');
        $this->paslonRepo = $paslonRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];



        $list_paslon = [];
        $list_suara_paslon = [];

        foreach($this->paslonRepo->all() as $pasl)
        {
            array_push($list_paslon,$pasl->nama_kepala);
            array_push($list_suara_paslon,$pasl->hasil);
        }

        $votingChart = new VotingChart;
        $votingChart->labels($list_paslon);
        $votingChart->dataset('PEROLEHAN SUARA', 'pie', $list_suara_paslon)->color($borderColors)
        ->backgroundcolor($fillColors);
        $paslon= $this->paslonRepo->all();
        return view('admin.hasil.index',compact('paslon','votingChart'));
    }

        public function generatePDF()

    {
        $data['paslon'] = $this->paslonRepo->all();

        $pdf = PDF::loadView('admin.hasil.cetak_hasil', $data);
        return $pdf->stream();
    }
}
