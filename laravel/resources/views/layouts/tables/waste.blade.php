<table class="table table-hover table-bordered table-light">
    <thead>
        <th>Tanggal</th>
        <th>Store Name</th>
        <th>Green Tea Jasmine</th>
        <th>Black Tea</th>
        <th>MC</th>
        <th>Quan Yin</th>
        <th>Royal Milk Tea</th>
        <th>Coffee</th>
        <th>Choco</th>
        <th>Cheese</th>
    </thead>
    <tbody>
        @foreach ($data as $datas)
        <tr>
            <td>{{ $datas->tanggal }}</td>
            <td>{{ $datas->store_name }}</td>
            <td>{{ $datas->pip_gtj_wasted }}</td>
            <td>{{ $datas->pip_bw_wasted }}</td>
            <td>{{ $datas->pip_qy_wasted }}</td>
            <td>{{ $datas->pip_mc_wasted }}</td>
            <td>{{ $datas->pip_rmt_wasted }}</td>
            <td>{{ $datas->pip_cof_wasted }}</td>
            <td>{{ $datas->pip_choc_wasted }}</td>
            <td>{{ $datas->pip_chs_wasted }}</td>
        </tr>
        @endforeach
    </tbody>
</table>