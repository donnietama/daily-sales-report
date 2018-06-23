@extends('layouts.master')
@section('content')
    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 class="mt-5"><i class="fa fa-key"></i> Roles

                <div class="float-right">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary ml-auto">Users</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-secondary ml-auto">Permissions</a>
                </div>
                </h1>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                            <tr>

                                <td>{{ $role->name }}</td>

                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                <td>
                                <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info float-left" style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>

            </div>
        </div>
    </div>
@endsection