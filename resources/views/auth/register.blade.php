@extends('layouts.auth-master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Outer Row -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-6" style="min-height: 500px;">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 m-5">Create an Account!</h1>
                                </div>
                                <form method="post" action="{{ route('register.perform') }}" class="container">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            value="{{ old('email') }}" placeholder="name@example.com" required="required"
                                            autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            value="{{ old('username') }}" placeholder="Username" required="required"
                                            autofocus>
                                        @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            value="{{ old('password') }}" placeholder="Password" required="required">

                                        @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            name="password_confirmation" value="{{ old('password_confirmation') }}"
                                            placeholder="Confirm Password" required="required">
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block" type="submit">Register</button>

                                    @include('auth.partials.copy')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
