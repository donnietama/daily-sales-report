<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-light">
            <thead>
                <th>Tanggal</th>
                <th>Store Name</th>
                <th>Regular</th>
                <th>Large</th>
                <th>Hot</th>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->tanggal }}</td>
                    <td>{{ $datas->store_name }}</td>
                    <td>{{ $datas->gtj_regular }}</td>
                    <td>{{ $datas->gtj_large }}</td>
                    <td>{{ $datas->gtj_hot }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>