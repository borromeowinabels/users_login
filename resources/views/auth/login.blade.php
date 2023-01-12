@extends('layouts.auth-master')

@section('content')
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6" style="min-height: 500px;">
              @guest
                <div class="p-5">
                    <div class="text-center">
                    <h1 class="h4 text-gray-900 m-5">Welcome Back!</h1>
                    </div>
                    <form method="post" action="{{ route('login.perform') }}" clas="user">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    @include('layouts.partials.messages')
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif 
                    </div>
                
                    <div class="form-group">
                        <input
                        type="password"
                        class="form-control form-control-user"
                        value="{{ old('password') }}"
                        name="password"
                        placeholder="Password"
                        />
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif  
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary btn-user btn-block"
                    >
                        Login
                    </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ url('register') }}">Create an Account!</a>
                    </div>
                </div>
              @endguest
              @auth
                <div class="p-5" >
                    <div class="text-center">
                    <h1 class="h4 text-gray-900 m-5">Lost?</h1>
                    </div>
                    <form action="" class="user mt-5 pt-5">
                    <a
                        class="button btn btn-primary btn-user btn-block"
                        href="{{ url('/home') }}"
                    >
                        Back to Home
                    </a>
                    </form>
                </div> 
              @endauth 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
