@extends('Dashboard.layouts.master2')
@section('css')

<style>
    .loginform{
        display: none;
    }
</style>
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('assets/dashboard/img/media/hospital.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/dashboard/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Es<span>la</span>m</h1></div>
										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>مرحبا بعودتك !</h2>

                                                <div class="form-group">
                                                    <label>حدد طريقة الدخول</label>
                                                    <select class="form-control" aria-label="Default select example" id="secsionShooser">
                                                        <option selected disabled>اختر</option>
                                                        <option value="user">التسجيل كمريض</option>
                                                        <option value="admin">التسجيل كادمن</option>
                                                    </select>
                                                </div>
                                                {{-- User Login --}}
                                                <div class="loginform" id="user">
                                                    <h5 class="font-weight-semibold mb-4">الدخول كمستخدم</h5>
                                                    <form method="POST" action="{{ route('login.user') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control" placeholder="Enter your email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password"
                                                            name="password"
                                                            required autocomplete="current-password">
                                                        </div><button class="btn btn-main-primary btn-block">Sign In</button>
                                                        {{-- <div class="form-group">
                                                            <div class="col-sm-6">
                                                                <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
                                                            </div>
                                                            <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                                <button type="submit" class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
                                                            </div>
                                                        </div> --}}
                                                    </form>
                                                    {{-- <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>
                                                        <p>Don't have an account? <a href="{{ url('/' . $page='signup') }}">Create an Account</a></p>
                                                    </div> --}}
                                                </div>
                                                 {{-- Admin Login --}}
                                                 <div class="loginform" id="admin">
                                                    <h5 class="font-weight-semibold mb-4">الدخول كادمن</h5>
                                                    <form method="POST" action="{{ route('login.admin') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control" placeholder="Enter your email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password"
                                                            name="password"
                                                            required autocomplete="current-password">
                                                        </div><button class="btn btn-main-primary btn-block">Sign In</button>
                                                        {{-- <div class="form-group">
                                                            <div class="col-sm-6">
                                                                <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
                                                            </div>
                                                            <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                                <button type="submit" class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
                                                            </div>
                                                        </div> --}}
                                                    </form>
                                                    {{-- <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>
                                                        <p>Don't have an account? <a href="{{ url('/' . $page='signup') }}">Create an Account</a></p>
                                                    </div> --}}
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')

<script>
    $('#secsionShooser').change(function(){
        var myID = $(this).val();
        $('.loginform').each(function(){
            myID === $(this).attr('id') ? $(this).show() : $(this).hide()
        });
    });
</script>
@endsection