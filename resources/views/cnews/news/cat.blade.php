@extends('templates.cnews.master')
@section('content')
<div class="container">
   <div class="row">
     <div class="col-lg-8">
      <div class="col-md-12">
              <div class="left">
                @foreach($arItems as $arItem)

                  <?php
                    $name  = $arItem->name;
                    $id_news = $arItem->id_news;
                    $created_at = $arItem->created_at;
                    $preview_text = $arItem->preview_text;
                    $slug = str_slug($name);
                    $url = route('cnews.news.detail', ['slug' => $slug,'id' =>$id_news]);
                    $picture = $arItem->picture;
                    $picUrl         =   asset('storage/app/files/'.$picture);
                  ?>
                  <h1> <a href="{{$url}}"></a></h1>
                  <div class="entry-meta table">
                    <span>
                      Written by
                      <a href="#">Rehman Ali</a>
                      </span>
                      <span> / </span>
                      <span> Fashion </span>
                      <span> / </span>
                      <span> {{$created_at}} </span>
                  </div>
                  <div>
                    <a href="{{ $url }}">
                      <img src="{{$picUrl}}" class="img-responsive" alt="fashion">
                    </a>
                  </div>
                  <div class="media">
                    <p>{{$preview_text}}</p>
                  </div>
                  <div class="read-more padding text-center">
                        <a class="btn btn-default btn-hover" href="{{$url}}" role="button">Read More</a>
                  </div>

                @endforeach
                <div style="text-align: center;">
                  {{$arItems ->links()}}
                </div>
              </div>
      </div>
    </div>   

@stop


