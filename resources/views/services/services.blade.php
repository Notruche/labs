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
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="{{route('home')}}">Home</a></li>
				<li class="active"><a href="{{route('services')}}">Services</a></li>
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


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="{{route('home')}}">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


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


	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$content[1]->title}}</h2>
				@can('Admin')
				<a href="{{route('editContent',['id'=> $content[1]->id])}}" class="btn btn-success">Edit button</a>
				@endcan
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($projets as $item)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$item->title}}</h2>
								<p>{{$item->desc}}</p>
							</div>
							<div class="icon">
								<i class="{{$item->icon}}"></i>
							</div>
						</div>
						@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($projets2 as $item)
						<div class="icon-box light">
							<div class="service-text">
								<h2>{{$item->title}}</h2>
								<p>{{$item->desc}}</p>
							</div>
							<div class="icon">
								<i class="{{$item->icon}}"></i>
							</div>
						</div>
						@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#cs" class="site-btn">Browse</a> <br>
				@can('Admin')
				<a href="{{route('projets')}}" class="btn btn-primary">Update Projets</a>
				@endcan
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad" id="cs">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach($projets as $item)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							@if($item->image == "storage/img/card-1.jpg" || $item->image == "storage/img/card-2.jpg"|| $item->image == "storage/img/card-3.jpg")
							<img src="{{asset($item->image)}}">
							@else
							<img src="{{Storage::disk('image')->url($item->image)}}">
							@endif
						</div>
						<div class="card-text">
							<h2>{{$item->title}}</h2>
							<p>{{$item->desc}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad" id="test">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="{{route('newsMail').'#test'}}" method="POST" enctype="multipart/form-data">
						@csrf
							<input type="text"
							  class="form-control" placeholder="Your e-mail here" name="email" id="email" aria-describedby="helpId" value="">
						<button class="site-btn btn-2" type="submit">Newsletter</button>
					</form>
					@isset($validation)
				<div class="test-success">E-mail ajouté à la newsletter !</div>
				@endisset
					@if($errors->has('email'))
					@foreach($errors->get('email') as $error)
					<div class="text-danger">{{$error}}</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$content[12]->title}}</h2>
						@can('Admin')
						<a href="{{route('editContent',['id'=> $content[12]->id])}}" class="btn btn-success">Ed
							@endcanit text</a>
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
					<form class="form-class" id="con_form" action="{{route('sendMail').'#test'}}" method="POST" enctype="multipart/form-data">
						@csrf
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
							</div>
						</div>
						@if($errors->has('name'))
						@foreach($errors->get('name') as $error)
						<div class="text-danger">{{$error}}</div>
						@endforeach
						@endif
						@if($errors->has('email'))
						@foreach($errors->get('email') as $error)
						<div class="text-danger">{{$error}}</div>
						@endforeach
						@endif
						@if($errors->has('subject'))
						@foreach($errors->get('subject') as $error)
						<div class="text-danger">{{$error}}</div>
						@endforeach
						@endif
						<button class="site-btn" type="submit">send</button>
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
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
