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
				<li><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li class="active"><a href="{{route('blog')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
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
				<h2>Blog</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	@can('Admin')
	<a href="{{route('article')}}" class="btn btn-primary">Display Articles</a>
	<a href="{{route('categorie')}}" class="btn btn-primary">Display Catégories</a>
	<a href="{{route('tag')}}" class="btn btn-primary">Display Tags</a>
	@endcan
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach($article as $item)
					<div class="post-item">
						<div class="post-thumbnail">
							@if($item->image == "storage/img/blog/blog-2.jpg" || $item->image == "storage/img/blog/blog-1.jpg"|| $item->image == "storage/img/blog/blog-3.jpg")
							<img src="{{asset($item->image)}}">
							@else
							<img src="{{Storage::disk('image')->url($item->image)}}">
							@endif
							<div class="post-date">
							<h2>{{$item->day}}</h2>
							<h3>{{$item->rest}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$item->title}}</h2>
							<div class="post-meta">
								<a href="">{{$item->categorie->name}}</a>
								<a href="">
										@foreach($item->tags as $tag){{$tag->name}}  @endforeach</a>
								<a href="">{{count($item->comment->where('validation','valide'))}} @if(count($item->comment->where('validation','valide'))>1)Comments @else Comment @endif</a>
							</div>
							<p>{!!$item->content!!}</p>
							<a href="{{route('showBlog',['id'=> $item->id])}}" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Pagination -->
					<?php echo $article->appends(request()->input())->links() ; ?>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="{{route('searchArticle')}}" class="search-form" method="GET" role="search">
							@csrf
							<input type="text" placeholder="Search" name="search">
							<button class="search-btn" type="submit"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach($categorie as $item)
							<li>
							<form action="{{route('searchCategorie')}}" class="search-form" method="GET" role="search">
									@csrf
							<input type="hidden" placeholder="Search" name="search" value="{{$item->id}}">
							<button type="submit">{{$item->name}}</button>
								</form>
							</li>
							
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="{{asset('img/instagram/1.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/instagram/2.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/instagram/3.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/instagram/4.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/instagram/5.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/instagram/6.jpg')}}" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
								@foreach($tags as $item)
								<li>
									<form action="{{route('searchTag')}}" class="search-form" method="GET" role="search">
											@csrf
									<input type="hidden" placeholder="Search" name="search" value="{{$item->id}}">
									<button type="submit">{{$item->name}}</button>
										</form>
								</li>
								@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="{{asset('img/add.jpg')}}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


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
