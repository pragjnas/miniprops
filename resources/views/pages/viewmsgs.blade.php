@extends('layouts.default')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Contact Messages</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="/bootstrapcard">Sign up issue</td>
            <td>
                <div class="card at pl-0 pl-0 pl-0" align="center">
                    <form>
                        <div class="card">
                            <div class="card-title"><h1></h1>
                            </div>
                            <div class="card-body">
                                <button type="Delete" class="btn btn-primary mb-2">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="/bootstrapcard1">Can't access my account</td>
            <td>
                <div class="card at pl-0 pl-0 pl-0" align="center">
                    <form>
                        <div class="card">
                            <div class="card-title"><h1></h1>
                            </div>
                            <div class="card-body">
                                <button type="Delete" class="btn btn-primary mb-2">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </td>
        </tr>
        <th scope="row">3</th>
        <td><a href="/bootstrapcard2">Password reset issue</td>
        <td>
            <div class="card at pl-0 pl-0 pl-0" align="center">
                <form>
                    <div class="card">
                        <div class="card-title"><h1></h1>
                        </div>
                        <div class="card-body">
                            <button type="Delete" class="btn btn-primary mb-2">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </td>
        </tr>
        </tbody>
    </table>
@endsection