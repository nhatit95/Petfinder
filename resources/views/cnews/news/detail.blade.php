@extends('templates.cnews.master')
@section('content')

<div class="container">
   <div class="row">
     <div class="col-lg-8">
      <div class="col-md-12">
    	<h1>{{$arItem->name}}</h1>
        <div class="entry-meta table">
        	<span>
            Written by
            <a href="#">Rehman Ali</a>
            </span>
            <span> / </span>
            <span> Fashion </span>
            <span> / </span>
            <span> {{$arItem->created_at}} </span>
        </div>
        <div>
        	<img src="images/post/1.jpg" class="img-responsive" alt="fashion">
        </div>
        <div class="media">
        	<p>{!! $arItem->detail_text !!}</p>
        </div>
	</div>
</div>   
      
@stop



