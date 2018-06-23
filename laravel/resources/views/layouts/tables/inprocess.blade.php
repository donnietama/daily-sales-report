<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-light">
            <thead>
                <th>Tanggal</th>
                <th>Store Name</th>
                <th>GTJ</th>
                <th>BTE</th>
                <th>MCA</th>
                <th>QYN</th>
                <th>RMT</th>
                <th>COF</th>
                <th>CHO</th>
                <th>CHS</th>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->tanggal }}</td>
                    <td>{{ $datas->store_name }}</td>
                    <td>{{ $datas->pip_gtj_batch }}</td>
                    <td>{{ $datas->pip_bt_batch }}</td>
                    <td>{{ $datas->pip_qy_batch }}</td>
                    <td>{{ $datas->pip_mc_batch }}</td>
                    <td>{{ $datas->pip_rmt_batch }}</td>
                    <td>{{ $datas->pip_cof_batch }}</td>
                    <td>{{ $datas->pip_choc_batch }}</td>
                    <td>{{ $datas->pip_chs_batch }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>