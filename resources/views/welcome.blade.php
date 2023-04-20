<!DOCTYPE html>
<html lang="en">

@include('components/authHead')

<body>
@if ($message = Session::get('success'))
    <form>
      <div class="alert alert-success alert-block text-dark alert-dismissible">
        <strong>{{ $message }}</strong>
        <button type="submit" class="btn-close"></button>
      </div>
    </form>
    @endif
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">

        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-block text-danger text-capitalize">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        @if ($error = Session::get('error'))
        <div class="alert alert-danger alert-block text-danger text-capitalize">
                    {{ $error }}
                </div>
    @endif
      
        <input type="text" placeholder="Email" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <button type='submit'>LOGIN</button>
      
      <br> 
      <hr> 


      <a href="/register" class="text-decoration-none text-success">Don't Have an Account?</a>
    </form>
  </div>
</div>
</body>
</html>
