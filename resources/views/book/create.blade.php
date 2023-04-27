@extends('book.layout')

@section('content')
<br><br><br>
<div class="row">
        <div class="col-lg-12 margin-tb  d-flex justify-content-between">
            <div class="pull-left">
                <h2>Add New Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('book.index')}}">Back</a>
            </div>
            
        </div>
</div>

<form action="{{ route('book.store') }}" method="post">
    @csrf
    <div class="row p-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Book Name">
            </div>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Description</strong>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Book Description"></textarea>
            </div>
        </div>
    </div>

    <div class="row p-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection