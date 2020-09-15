@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table table-hover">
        <tr>
            <th>Company name</th>
            <th>Address</th>
            <th style="width: 15%">Actions</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->address }}</td>            
            <td>
                <form action={{ route('company.destroy', $company->id) }} method="POST">
                <a class="btn btn-info" href={{ route('company.edit', $company->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-secondary" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('company.create') }}" class="btn btn-info">Add new</a>
    </div>
</div>
@endsection