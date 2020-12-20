@extends('base')

@section('content')

@if($info = Session::get('info'))

<div class="card">
    <div class="card-body bg-success text-white">
        {{ $info }}
    </div>
</div>

@endif

<div class="float-right">
    <a href="{{ url('users/create') }}" class="btn btn-primary">
        Add New User
    </a>
</div>

<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead style="background-color: #4747d1; color: #ffffff;">
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            <td class="text-center">
                <a href="{{ url('/users/edit', ['id'=> $u]) }}" class="btn btn-info btn-sm"> Edit </a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
