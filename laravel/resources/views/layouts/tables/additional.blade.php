<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-light">
            <thead>
                <th>Tanggal</th>
                <th>Store Name</th>
                <th>Cheese</th>
                <th>Stick</th>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->tanggal }}</td>
                    <td>{{ $datas->store_name }}</td>
                    <td>{{ $datas->add_cheese }}</td>
                    <td>{{ $datas->add_stick }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>