@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Company</th>
            <th style="width: 15%">Actions</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{!! $customer->comment !!}</td>
            <td>{{ $customer->company['name'] }}</td>
            <td>
                <form action={{ route('customer.destroy', $customer->id) }} method="POST">
                <a class="btn btn-info" href={{ route('customer.edit', $customer->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-secondary" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('customer.create') }}" class="btn btn-info">Add new</a>
    </div>
</div>
@endsection