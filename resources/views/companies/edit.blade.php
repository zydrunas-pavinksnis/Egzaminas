@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change company's data</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('company.update', $company->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Company name</label>
                            <input type="text" name="name" class="form-control" value="{{ $company->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $company->address }}">
                        </div>
                        <button type="submit" class="btn btn-info">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection