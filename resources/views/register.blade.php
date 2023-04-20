<!DOCTYPE html>
<html lang="en">

@include('components/authHead')

<body>
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
      
        <input type="text" placeholder="Username" name="username"/>
        <input type="text" placeholder="Email" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <button type='submit'>REGISTER</button>
      
      <br> 
      <hr> 


      <a href="/" class="text-decoration-none text-success">Already Have an Account?</a>
    </form>
  </div>
</div>
</body>
</html>
