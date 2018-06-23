@extends('layouts.master')
@section('content')
    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 class="mt-5"><i class="fa fa-key"></i>Available Permissions
                
                <div class="float-right">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary ml-auto">Users</a>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary ml-auto">Roles</a>
                </div>
                </h1>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td> 
                                <td>
                                <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info float-left" style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

            </div>
        </div>
    </div>
@endsection