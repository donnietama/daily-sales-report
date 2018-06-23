<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-light">
            <thead>
                <th>Tanggal</th>
                <th>Store Name</th>
                <th>Ticket</th>
                <th>Batch</th>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->tanggal }}</td>
                    <td>{{ $datas->store_name }}</td>
                    <td>{{ $datas->avg_ticket }}</td>
                    <td>{{ $datas->avg_batch }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>