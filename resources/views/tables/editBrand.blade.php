<!DOCTYPE html>
<html lang="en">
  @include('components/brandHead')

  <body>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
          <span class="login100-form-title">
            Update Brand
          </span>
          @csrf @if ($errors->any()) @foreach ($errors->all() as $error)

          <div
            class="alert alert-danger alert-block text-danger text-capitalize"
          >
            {{ $error }}
          </div>
          
          @endforeach @endif

					<div class="wrap-input100 validate-input">
						<input class="input100" type="file" name="image">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" style="padding-top: 0px;" type="text" name="name" placeholder="Brand Name" value="{{ $brand->name }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" >
							Update
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</html>
