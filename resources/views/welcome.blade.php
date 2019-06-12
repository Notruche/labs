<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="{{asset('img/logo.png')}}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li><a href="{{route('blog')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				@can("Editor")
				<li><a href="{{route('change')}}">Add content</a></li>
				@endcan
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if($logo[0]->img == "storage/img/big-logo.png")
				<img src="{{asset($logo[0]->img)}}">
				@else
				<img src="{{Storage::disk('image')->url($logo[0]->img)}}">
				@endif
								<p>{{$content[0]->title}}</p>
								@can('Admin')
                <a href="{{route('editContent',['id'=> $content[0]->id])}}" class="btn btn-success">Edit text</a>
								<a href="{{route('mainImage')}}" class="btn btn-primary">Edit carousel images</a>
								<a href="{{route('editLogo')}}" class="btn btn-success">Edit logo</a>
								@endcan
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
            @foreach($mainImage as $item)
            @if($item->image == "storage/img/01.jpg" || $item->image == "storage/img/02.jpg")
            <div class="item  hero-item" data-bg="{{asset($item->image)}}"></div>
            @else
            <div class="item  hero-item" data-bg="{{Storage::disk('image')->url($item->image)}}"></div>
            @endif
            @endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
						@foreach($randomserv as $item)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$item->icon}}"></i>
								</div>
								<h2>{{$item->title}}</h2>
								<p style="height: 60px">{{$item->desc}}</p>
							</div>
						</div>
						@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$content[1]->title}}</h2>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[1]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
				</div>
				<div class="row">
					<div class="col-md-6">
					<p>{{$content[2]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[2]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					</div>
					<div class="col-md-6">
						<p>{{$content[3]->title}}</p>
						@can('Admin')
						<a href="{{route('editContent',['id'=> $content[3]->id])}}" class="btn btn-success">Edit text</a>
						@endcan
						</div>
				</div>
				<div class="text-center mt60">
					<a href="{{route('blog')}}" class="site-btn">{{$content[4]->title}}</a>
					<br>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[4]->id])}}" class="btn btn-success">Edit button</a>
					@endcan
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset('img/video.jpg')}}" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$content[5]->title}}</h2>
						@can('Admin')
						<a href="{{route('editContent',['id'=> $content[5]->id])}}" class="btn btn-success">Edit text</a>
						@endcan
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach($testimonials as $item)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$item->comment}}</p>
							<div class="client-info">
								<div class="avatar">
									@if($item->image == "storage/img/avatar/02.jpg" || $item->image == "storage/img/avatar/01.jpg"|| $item->image == "storage/img/avatar/03.jpg")
									<img class="item  hero-item" data-bg="{{asset($item->image)}}">
									@else
									<img class="item  hero-item" data-bg="{{Storage::disk('image')->url($item->image)}}">
									@endif
								</div>
								<div class="client-name">
									<h2>{{$item->name}}</h2>
									<p>{{$item->rank}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					@can('Admin')
					<a href="{{route('testimonials')}}" class="btn btn-primary">Update Testimonials</a>
					@endcan
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$content[6]->title}}</h2>
				@can('Admin')
				<a href="{{route('editContent',['id'=> $content[6]->id])}}" class="btn btn-success">Edit text</a>
				@endcan
			</div>
			<div class="row">
				@foreach($services as $item)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$item->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->title}}</h2>
							<p>{{$item->desc}}</p>
						</div>
					</div>
				</div>
				@endforeach
				<?php echo $services->appends(['sort' => 'votes'])->render(); ?>
			</div>
			@can('Admin')
			<a href="{{route('changeServices')}}" class="btn btn-primary">Update Services</a>
			@endcan
			<div class="text-center">
				<a href="{{route('services')}}" class="site-btn">{{$content[7]->title}}</a>
				<br>
				@can('Admin')
				<a href="{{route('editContent',['id'=> $content[7]->id])}}" class="btn btn-success">Edit button</a>
				@endcan
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$content[8]->title}}</h2>
				@can('Admin')
				<a href="{{route('editContent',['id'=> $content[8]->id])}}" class="btn btn-success">Edit text</a>
				@endcan
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
							@if($user1[0]->portrait == "storage/img/team/1.jpg" || $user1[0]->portrait == "storage/img/team/2.jpg" || $user1[0]->portrait == "storage/img/team/3.jpg")
							<img src="{{asset($user1[0]->portrait)}}">
							@else
							<img src="{{Storage::disk('image')->url($user1[0]->portrait)}}">
							@endif
						<h2>{{$user1[0]->name}}</h2>
						<h3>{{$user1[0]->role->name}}</h3>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="member">
							@if($user2[0]->portrait == "storage/img/team/1.jpg" || $user2[0]->portrait == "storage/img/team/2.jpg" || $user2[0]->portrait == "storage/img/team/3.jpg")
							<img src="{{asset($user2[0]->portrait)}}">
							@else
							<img src="{{Storage::disk('image')->url($user2[0]->portrait)}}">
							@endif
						<h2>{{$user2[0]->name}}</h2>
						<h3>{{$user2[0]->role->name}}</h3>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="member">
							@if($user3[0]->portrait == "storage/img/team/1.jpg" || $user3[0]->portrait == "storage/img/team/2.jpg" || $user3[0]->portrait == "storage/img/team/3.jpg")
							<img src="{{asset($user3[0]->portrait)}}">
							@else
							<img src="{{Storage::disk('image')->url($user3[0]->portrait)}}">
							@endif
						<h2>{{$user3[0]->name}}</h2>
						<h3>{{$user3[0]->role->name}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$content[9]->title}}</h2>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[9]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					<p>{{$content[10]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[10]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">{{$content[11]->title}}</a>
						@can('Admin')
						<a href="{{route('editContent',['id'=> $content[11]->id])}}" class="btn btn-success">Edit button</a>
						@endcan
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$content[12]->title}}</h2>
						@can('Admin')
						<a href="{{route('editContent',['id'=> $content[12]->id])}}" class="btn btn-success">Edit text</a>
						@endcan
					</div>
					<p>{{$content[13]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[13]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					<h3 class="mt60">{{$content[14]->title}}</h3>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[14]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					<p class="con-item">{{$content[15]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[15]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					<p class="con-item">{{$content[16]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[16]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
					<p class="con-item">{{$content[17]->title}}</p>
					@can('Admin')
					<a href="{{route('editContent',['id'=> $content[17]->id])}}" class="btn btn-success">Edit text</a>
					@endcan
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<a href="{{route('sendMail').'#test'}}" class="site-btn">send</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
