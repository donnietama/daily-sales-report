<?php

namespace App\Http\Controllers;

use Excel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Report;
use App\Export;

class ReportController extends Controller
{
    public function index()
    {
        $userdata = \DB::table('m_user')->get()->all();

        $data = \DB::table('t_report')->orderBy('report_id', 'desc')->paginate(10);        
        
        return view('show.report', compact('data', 'userdata'));
    }
    

    public function search(Request $request)
    {
        $userdata = \DB::table('m_user')->get()->all();      

        $data = Report::where('store_name', '=', $request->store_name ?: 0 )
                        ->whereBetween('input_date', [$request->first_date ?: 0, $request->second_date ?: 0])
                        ->orderBy('report_id', 'desc')
                        ->paginate(10);      

        return view('show.report', compact('data', 'userdata'));
    }

    
    public function create()
    {
        return view('create.report');
    }


    public function store(Request $request)
    {
        Report::create([
            'store_name' => $request->store_name,
            'tanggal' => $request->tanggal,
            'gross_sales' => $request->gross_sales ?: 0,
            'nett_sales' => $request->nett_sales ?: 0,
            'cash' => $request->cash ?: 0,
            'card' => $request->card ?: 0,
            'voucher' => $request->voucher ?: 0,
            'ticket' => $request->ticket ?: 0,
            'avg_ticket' => $request->avg_ticket ?: 0,
            'avg_batch' => $request->avg_batch ?: 0,
            'pip_gtj_batch' => $request->pip_gtj_batch ?: 0,
            'pip_bt_batch' => $request->pip_bt_batch ?: 0,
            'pip_qy_batch' => $request->pip_qy_batch ?: 0,
            'pip_mc_batch' => $request->pip_mc_batch ?: 0,
            'pip_rmt_batch' => $request->pip_rmt_batch ?: 0,
            'pip_cof_batch' => $request->pip_cof_batch ?: 0,
            'pip_choc_batch' => $request->pip_choc_batch ?: 0,
            'pip_chs_batch' => $request->pip_chs_batch ?: 0,
            'pip_gtj_wasted' => $request->pip_gtj_wasted ?: 0,
            'pip_bw_wasted' => $request->pip_bt_wasted ?: 0,
            'pip_qy_wasted' => $request->pip_qy_wasted ?: 0,
            'pip_mc_wasted' => $request->pip_mc_wasted ?: 0,
            'pip_rmt_wasted' => $request->pip_rmt_wasted ?: 0,
            'pip_cof_wasted' => $request->pip_cof_wasted ?: 0,
            'pip_choc_wasted' => $request->pip_choc_wasted ?: 0,
            'pip_chs_wasted' => $request->pip_chs_wasted ?: 0,
            'gtj_regular' => $request->gtj_regular ?: 0,
            'gtj_large' => $request->gtj_large ?: 0,
            'gtj_hot' => $request->gtj_hot ?: 0,
            'bt_regular' => $request->bt_regular ?: 0,
            'bt_large' => $request->bt_large ?: 0,
            'bt_hot' => $request->bt_hot ?: 0,
            'qy_regular' => $request->qy_regular ?: 0,
            'qy_large' => $request->qy_large ?: 0,
            'qy_hot' => $request->qy_hot ?: 0,
            'mc_regular' => $request->mc_regular ?: 0,
            'mc_large' => $request->mc_large ?: 0,
            'mc_hot' => $request->mc_hot ?: 0,
            'rmt_regular' => $request->rmt_regular ?: 0,
            'rmt_large' => $request->rmt_large ?: 0,
            'rmt_hot' => $request->rmt_hot ?: 0,
            'cof_regular' => $request->cof_regular ?: 0,
            'cof_large' => $request->cof_large ?: 0,
            'cof_hot' => $request->cof_hot ?: 0,
            'choc_regular' => $request->choc_regular ?: 0,
            'choc_large' => $request->choc_large ?: 0,
            'choc_hot' => $request->choc_hot ?: 0,
            'chs_regular' => $request->chs_regular ?: 0,
            'chs_large' => $request->chs_large ?: 0,
            'chs_hot' => $request->chs_hot ?: 0,
            'add_cheese' => $request->add_cheese ?: 0,
            'add_stick' => $request->add_stick ?: 0
        ]);

        return redirect('/report/view');
    }


    public function showExcelForm()
    {
        $userdata = \DB::table('m_user')->get()->all();      
        
        return view('show.export-excel', compact('userdata'));
    }


    public function export(Request $request)
    {
        return (new Export($request))->download('Gulugulu_sales_'. Carbon::Now(+7) .'.xlsx');
    }


    public function showPdfForm()
    {
        $userdata = \DB::table('m_user')->get()->all();       
        
        return view('show.export-pdf', compact('userdata'));
    }

    public function exportPDF(Request $request)
    {
        return (new Export($request))->download('Gulugulu_sales_'. Carbon::Now(+7) .'.pdf');
    }
}
