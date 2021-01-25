@extends('user-pages.layouts.main-layout')
@section('content')
<div class="text-center">
    hello
<main class="form-signin">
  <form method="post" action="{{route('set_login')}}">
   @csrf
    <img class="mb-4" src="/assets/images/logo1.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <label for="inputEmail" class="visually-hidden">Phone number</label>
    <input type="number" 
    name="number" 
    id="inputNumber" 
    class="form-control" 
    placeholder="Phone number" 
    required="" autofocus="">
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" 
    name="password" 
    id="inputPassword" 
    class="form-control" 
    placeholder="Password" required="">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
  </form>
</main>

@endsection
    
  

</div>