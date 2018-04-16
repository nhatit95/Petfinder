@include('templates.cnews.header')
<div class="body_resize">
	@yield('content')
	@include('templates.cnews.right-bar')
</div>
@include('templates.cnews.footer')