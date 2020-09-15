@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new customer:</div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name:">
                        </div>
                        <div class="form-group">
                            <input type="text" name="surname" class="form-control" placeholder="Surname:">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone:">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email:">
                        </div>
                        <div class="form-group">
                            <select name="company_id" id="" class="form-control">
                            <option value="" selected disabled>Company (choose from list) </option>
                            @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Comment: </label>
                            <textarea id="mce" name="comment" rows=5 cols=100 class="form-control"></textarea>
                        </div>                        
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection