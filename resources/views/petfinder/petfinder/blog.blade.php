@extends('templates.petfinder.master')
@section('content')

        <div class="content">
          <!-- Sidebar With Content Section-->
          <div class="vc-wrapper container"></div>
          <div class="pagebuilder-wrapper">


              <div class="cp-wrapper">
                <section class="cp-inner-banner">
                  <div class="container">
                    <div class="cp-inner-banner-outer">
                      <h2>Blog</h2>
                      <ul class="breadcrumb">
                        <li>
                          <a href="{{route('petfinder.petfinder.index')}}">Home</a>
                        </li>
                        <li class="active"><a href="{{ route('petfinder.petfinder.servicedetail', ['id' => 4]) }}">Pet Adoption</a></li>
                      </ul>
                    </div>
                  </div>
                </section>
                <div class="cp-main-content">
                  <section class="cp-blog-section pd-t100">
                    <div class="container">
                      <div class="cp_portfolioGallery cp-blog-masonary isotope" style="position: relative; overflow: hidden; height: 1954px;">
                        @foreach($arPosts as $arPost)
                          <div class="cp-masonary-item isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                            <article class="cp-blog-item">                            
                              <figure class="cp-thumb">
                                <img src="{{$PIC_URL}}{{$arPost->avatar}}" alt="">
                              </figure>
                              <div class="cp-text">
                                <div style="font-size: 13px" class="cp-date-box">
                                  <span>{{$arPost->post_id}}</span>{{$arPost->create_at}}
                                 </div>
                                <div class="cp-inner">
                                  <h4>{{$arPost->post_name}}</h4>
                                  <div class="cp-top">
                                    <ul class="cp-meta-listed">
                                      <li>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        @foreach($arUsers as $arUser)
                                          @if($arPost->user_id == $arUser->id)
                                              <a href="#">{{$arUser->username}}</a>
                                          @endif
                                        @endforeach
                                      </li>

                                      <li>

                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        @foreach($arPostCats as $arPostCat)
                                          @if($arPost->cat_id  == $arPostCat->cat_id)
                                              <a href="#">{{$arPostCat->cat_name}}</a>
                                          @endif
                                        @endforeach
                                      </li>
                                      <li>
                                        <i class="fa fa-eye" aria-hidden="true"></i> 762
                                      </li>
                                    </ul>
                                  </div>
                                  <p>{{$arPost->discription}}</p>
                                  <?php $post_id = $arPost->post_id ?>
                                  <a href="{{ route('petfinder.petfinder.blogdetail', ['id' => $post_id]) }}" class="cp-btn-style3">Read More</a>
                                </div>
                              </div>
                            </article>
                          </div>
                        @endforeach
                      </div>
                      
                    </div>
                  </section>
                </div>
              </div>


          </div>
        </div>

@stop