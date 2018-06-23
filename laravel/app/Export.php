<?php

namespace App;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithMapping;

class Export implements FromQuery, WithHeadings, ShouldAutoSize, WithStrictNullComparison
{
    use Exportable;

    public function __construct($request)
    {
        $this->store_name = $request->store_name;
        $this->first_date = $request->first_date;
        $this->second_date = $request->second_date;
    }


    public function headings() : array
    {
        return [
            'Report ID',
            'Tanggal Input',
            'Outlet',
            'Report Tanggal',
            'Gross',
            'Nett',
            'Cash',
            'Card',
            'Voucher',
            'Ticket',
            'Average Ticket',
            'Average Batch',
            'PIP Green Tea Jasmine Batch',
            'PIP Black Tea Batch',
            'PIP Quan Yin Batch',
            'PIP Matcha Batch',
            'PIP Royal Milk Tea Batch',
            'PIP Coffee Batch',
            'PIP Choco Batch',
            'PIP Cheese Batch',
            'Green Tea Jasmine Waste',
            'Black Tea Waste',
            'Quan Yin Waste',
            'Matcha Waste',
            'Royal Milk Tea Waste',
            'Coffee Waste',
            'Choco Waste',
            'Cheese Waste',
            'Green Tea Jasmine Regular',
            'Green Tea Jasmine Large',
            'Green Tea Jasmine Hot',
            'Black Tea Regular',
            'Black Tea Large',
            'Black Tea Hot',
            'Quan Yin Regular',
            'Quan Yin Large',
            'Quan Yin Hot',
            'Matcha Regular',
            'Matcha Large',
            'Matcha Hot',
            'Royal Milk Tea Regular',
            'Royal Milk Tea Large',
            'Royal Milk Tea Hot',
            'Coffee Regular',
            'Coffee Large',
            'Coffee Hot',
            'Choco Regular',
            'Choco Large',
            'Choco Hot',
            'Cheese Regular',
            'Cheese Large',
            'Cheese Hot',
            'Add Cheese',
            'Add Stick'
        ];
    }


    public function query()
    {
        return Report::query()->where('store_name', '=', $this->store_name )
            ->whereBetween('input_date', [$this->first_date, $this->second_date])
            ->orderBy('report_id', 'desc');
    }
}
