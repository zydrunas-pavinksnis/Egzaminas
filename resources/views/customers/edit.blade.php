@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="c   ard">
                <div class="card-header">Change customer information:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('customer.update', $customer->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Surname: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $customer->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone: </label>
                            <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="text" name="email" class="form-control" value="{{ $customer->email }}">
                        </div>                        
                        <div class="form-group">
                            <label>Company: </label>
                            <select name="company_id" id="" class="form-control">
                            @foreach ($companies as $company)
                            <option value="{{ $company->id }}" @if($company->id == $customer->company_id) selected="selected" @endif>{{ $company->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Comment: </label>
                            <textarea id="mce" name="comment" rows=5 cols=100 class="form-control">{{ $customer->comment }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection