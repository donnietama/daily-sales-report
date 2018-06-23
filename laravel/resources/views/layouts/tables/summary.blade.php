<table class="table table-hover table-bordered table-light">
    <thead>
        <th>Tanggal</th>
        <th>Store Name</th>
        <th>Gross</th>
        <th>Nett</th>
        <th>Cash</th>
        <th>Card</th>
        <th>Voucher</th>
        <th>Ticket</th>
    </thead>
    <tbody>
        @foreach ($data as $datas)
        <tr>
            <td>{{ $datas->tanggal }}</td>
            <td>{{ $datas->store_name }}</td>
            <td>{{ $datas->gross_sales }}</td>
            <td>{{ $datas->nett_sales }}</td>
            <td>{{ $datas->cash }}</td>
            <td>{{ $datas->card }}</td>
            <td>{{ $datas->voucher }}</td>
            <td>{{ $datas->ticket }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
