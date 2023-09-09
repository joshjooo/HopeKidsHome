@extends('layouts.auth-master')

@section('content')
<div class='d-flex align-items-center py-4 bg-body-tertiary'>
<main class="form-signin col-md-4 m-auto ">
 
    <form method="post" action="{{ url('/login') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src=" {{asset('images/logo1.png')}}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <label for="floatingName">Email or Username</label>
            <input type="email" class="form-control" name="username" required placeholder="Username" required="required" autofocus>
           
        </div>
        
        <div class="form-group form-floating mb-3">
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" name="password" required placeholder="Password" required="required">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
</main>
</div>
@endsection