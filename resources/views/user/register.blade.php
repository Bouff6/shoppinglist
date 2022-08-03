@extends('layouts.app')

@section('content')

<div class="container shadow-sm p-3 mb-3 bg-body rounded">
        <div class="panel-body">

            @include('common.errors')

            <form action="">
                @csrf 
                <div class="mb-3">
                    <label for="">Full Name <span>*</span></label>
                    <input type="text" class="form-control" name="fullname" value=" {{ old('name') }} " />
                </div>

                <div class="mb-3">
                    <label for="">Username <span>*</span></label>
                    <input type="text" class="form-control" name="username" value=" {{ old('username') }} " />
                </div>

                <div class="mb-3">
                    <label for="">Password<span>*</span></label>
                    <input type="text" class="form-control" name="password" />
                </div>

                <div class="mb-3">
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="text" class="form-control" name="confirm_password" />
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary mb-3">Register</button>
                    <a class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection