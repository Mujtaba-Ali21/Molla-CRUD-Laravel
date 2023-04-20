<!DOCTYPE html>
<html lang="en">
@include('components/categoryHead')

  <body>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
          <span class="login100-form-title">
            Update Category
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

          <div class="input-field">
                <textarea name="categoryText" id="categoryText" class="form-control" rows="2" cols="30">{!! $category->text !!}</textarea>
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
