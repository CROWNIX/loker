@extends('layouts.main')

@section('container')
		<!--menu end-->
		@if (session()->has("success"))
		<script>
			alert("Selamat akun anda berhasil dibuat")
		</script>      
    	@endif
		@if (session()->has("error"))
		<script>
			alert("Email sudah terdaftar")
		</script>      
    	@endif
		@if (session()->has("error_login"))
		<script>
			alert("Username / Password salah")
		</script>      
    	@endif
		
		<!-- header-slider-area start -->
		<section class="header-slider-area">
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide-1">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>Persiapkan diri anda untuk meraih impian! </h2>
										</div><!-- /.single-slide-item-content-->
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
					<div class="item">
						<div class="single-slide-item slide-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>
												Temukan Pekerjaan Terbaikmu
											</h2>
											
										</div><!-- /.single-slide-item-content-->
									
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="lnr lnr-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="lnr lnr-chevron-right"></span>
				</a>
			</div><!-- /.carousel-->

		</section><!-- /.header-slider-area-->
		<!-- header-slider-area end -->
		
		<!--we-do start -->
@endsection