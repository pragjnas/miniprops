@extends('layouts.default')

@section('content')
<div class="card at-3 pl-2 pr-2">
    <div class="card">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner.</p>
        </div>
        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label name="text" for="body">Subject</label>
                    <textarea name="text" class="form-control" id="" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label name="body" for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection