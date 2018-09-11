<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="home">Home</a></li>
			@if(empty(Auth::user()))
				<li><a href="admin/login">Login</a></li>
				<li><a href="register">Register</a></li>
			@else
				<li><a href="">{{Auth::user()->name}}</a></li>
				<li><a href="member/book/add">Viết bài</a></li>
				<li><a href="admin/logout">Logout</a></li>
			@endif
		</ul>
	</div>
</nav>