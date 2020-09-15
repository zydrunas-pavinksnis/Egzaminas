@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new company:</div>
                <div class="card-body">
                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Company name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address: </label>
                            <input type="text" name="address" class="form-control">
                        </div>                      
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection