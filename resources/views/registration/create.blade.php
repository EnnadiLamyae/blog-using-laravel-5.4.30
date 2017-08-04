@extends('layouts.master')


@section('content')

    <div class="col-sm-8 ">
        <h1> Register</h1>
        <hr>


        <form method="POST" action="/register">
            {{csrf_field()}}
            <div class="form-group">

                <label for="name"> Name :</label>
                <input type="text" name="name" id="name" class="form-control" required>


                <label for="email"> Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>

                <label for="password"> Password :</label>
                <input type="password" name="password" id="password" class="form-control" required>

                <label for="password_confirmation"> Password Confirmation :</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>


                <button type="submit" class="btn btn-primary">Register</button>

            </div>
        </form>
        @include('layouts.error')
    </div>

@endsection