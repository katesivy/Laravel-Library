<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" />
<link href="css/fonts.css" rel="stylesheet"  />

@yield('head')


</head>



<body>
<div id="header-wrapper">
<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Laravel Library</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/#" accesskey="1" title="">Homepage</a></li>
				<li class="{{Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="/Books" accesskey="2" title="">Books</a></li>
				<li class="{{Request::is('about') ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">Users</a></li>
				<li class="{{Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">Sign Up</a></li>
				<li class="{{Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
    </div>
    
    @yield ('header')

</div>
    @yield ('content')

    

</div>
</body>
</html>
