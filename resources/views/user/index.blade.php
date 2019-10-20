@extends('layouts.master')

@section('content')
<div class="container mr5">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{ route('users.create') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Job</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            @forelse($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->profile->family_name }}</td>
                <td class="text-center">
                <a class='btn btn-info btn-xs' href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No data</td>
            </tr>
            @endforelse
    </table>
    </div>
</div>
@endsection