@extends('master')
@section('content')

<h1>Login page</h1>

<div class="container login-container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group ">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>

</div>

@endsection
