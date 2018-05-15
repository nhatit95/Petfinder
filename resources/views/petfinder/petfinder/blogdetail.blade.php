@extends('templates.petfinder.master')
@section('content')

        <div class="content">
          <!-- Sidebar With Content Section-->
          <div class="vc-wrapper container"></div>
          <div class="pagebuilder-wrapper">

              <div class="cp-wrapper">
                <!-- <section class="cp-inner-banner">
                  <div class="container">
                    <div class="cp-inner-banner-outer">
                      <h2>Blog</h2>
                      <ul class="breadcrumb">
                        <li>
                          <a href="http://html.crunchpress.com/pet-care/index.html">Home</a>
                        </li>
                        <li>Pages</li>
                        <li class="active">Blog Detail</li>
                      </ul>
                    </div>
                  </div>
                </section> -->
                

                <div class="cp-main-content">
                  <section class="cp-blog-section pd-t100">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-9 col-sm-12">
                          <article class="cp-blog-item">
                            <figure class="cp-thumb">
                              <img style="width: 100%; height: 430px; object-fit: cover !important;" src="{{$PIC_URL}}{{$arBlog->avatar}}" alt="">
                              </figure>
                              <div class="cp-text">
                                <div class="cp-date-box" style="font-size: 12px !important">
                                  <span >{{$arBlog->post_id}}</span>{{$arBlog->create_at}}
                                </div>
                                <div class="cp-inner">
                                  <h3>{{$arBlog->post_name}}</h3>
                                  <div class="cp-top">
                                    <ul class="cp-meta-listed">
                                      <li>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        @foreach($arUsers as $arUser)
                                          @if($arBlog->user_id == $arUser->id)
                                              <a href="#">{{$arUser->username}}</a>
                                          @endif
                                        @endforeach
                                      </li>
                                      <li>
                                        <i class="fa fa-eye" aria-hidden="true"></i> 762
                                      </li>
                                      <li>
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        @foreach($arBlogCats as $arBlogCat)
                                          @if($arBlogCat->cat_id  == $arBlog->cat_id)
                                              <a href="#">{{$arBlogCat->cat_name}}</a>
                                          @endif
                                        @endforeach
                                      </li>
                                    </ul>
                                    <ul class="right-nav">
                                      <li>
                                        <i class="fa fa-heart" aria-hidden="true"></i> 232
                                      </li>
                                      <li class="share share-push">
                                        
                                      </li>
                                    </ul>
                                  </div>
                                  <p style="font-style: italic; font-weight: bold;"><?php echo $arBlog->description; ?></p>
                                  <p class=""><?php echo $arBlog->content; ?></p>
                                  
                                  <div class="cp-blog-testimonial">
                                    
                                    <ul class="cp-comments-holder cp-comments-holder2">
                                         
                                          
                                            </div>
                                          </div>
                                        </article>
                                      </div>
                                      <div style="border-left: 1px solid #e2d7d7" class="col-md-3 col-sm-12">
                                        <aside  class="cp-sidebar-outer">
                                          
                                            <div class="widget">
                                              <hr style="margin-top: 0px" />
                                              <h3>About Our Center</h3>
                                              <hr />
                                              <div class=" widget-author-inner">
                                                <div class="cp-round-img">
                                                  <img src="{{$PUBLIC_URL}}img/widget-about-img.jpg" alt="">
                                                  </div>
                                                  <p>Praesent odio tellus, posuere sed, dictum sed, fermentum at, orcinc enim.Nunc enim.mentum at, orcinc enim dictum sed, ferm..</p>
                                                </div>
                                              </div>
                                              <div class="widget widget-recent-post">
                                                <hr />
                                                <h3>Other Posts</h3>
                                                <hr />
                                                <ul>
                                                  @foreach($arOtherPosts as $arOtherPost)
                                                  <?php 
                                                    $post_id = $arOtherPost->post_id;
                                                    $description = str_limit($arOtherPost->discription, 30)
                                                  ?>
                                                  <li>
                                                    <div class="cp-recent-inner">
                                                      <figure class="cp-thumb">
                                                      <img src="{{$PIC_URL}}{{$arOtherPost->avatar}}" alt="">
                                                      </figure>
                                                      <div class="cp-text">
                                                          <a style="font-weight: bold;" href="{{ route('petfinder.petfinder.blogdetail', ['id' => $post_id]) }}">{{title_case($arOtherPost->post_name)}}</a>
                                                          <span class="date"><?php echo $description; ?></span>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  @endforeach
                                                  </ul>
                                                </div>
                                                      
                                                      <div class="widget widget-instagram">
                                                        <h3>Instagram </h3>
                                                        <ul>
                                                          <li>
                                                            <figure class="cp-thumb">
                                                              <a href="#">
                                                                <img src="{{$PUBLIC_URL}}img/instagram-img-01.jpg" alt="">
                                                                </a>
                                                              </figure>
                                                            </li>
                                                            <li>
                                                              <figure class="cp-thumb">
                                                                <a href="#">
                                                                  <img src="{{$PUBLIC_URL}}img/instagram-img-02.jpg" alt="">
                                                                  </a>
                                                                </figure>
                                                              </li>
                                                              <li>
                                                                <figure class="cp-thumb">
                                                                  <a href="#">
                                                                    <img src="{{$PUBLIC_URL}}img/instagram-img-03.jpg" alt="">
                                                                    </a>
                                                                  </figure>
                                                                </li>
                                                                <li>
                                                                  <figure class="cp-thumb">
                                                                    <a href="#">
                                                                      <img src="{{$PUBLIC_URL}}img/instagram-img-04.jpg" alt="">
                                                                      </a>
                                                                    </figure>
                                                                  </li>
                                                                  <li>
                                                                    <figure class="cp-thumb">
                                                                      <a href="#">
                                                                        <img src="{{$PUBLIC_URL}}img/instagram-img-05.jpg" alt="">
                                                                        </a>
                                                                      </figure>
                                                                    </li>
                                                                    <li>
                                                                      <figure class="cp-thumb">
                                                                        <a href="#">
                                                                          <img src="{{$PUBLIC_URL}}img/instagram-img-06.jpg" alt="">
                                                                          </a>
                                                                        </figure>
                                                                      </li>
                                                                      <li>
                                                                        <figure class="cp-thumb">
                                                                          <a href="#">
                                                                            <img src="{{$PUBLIC_URL}}img/instagram-img-07.jpg" alt="">
                                                                            </a>
                                                                          </figure>
                                                                        </li>
                                                                        <li>
                                                                          <figure class="cp-thumb">
                                                                            <a href="#">
                                                                              <img src="{{$PUBLIC_URL}}img/instagram-img-08.jpg" alt="">
                                                                              </a>
                                                                            </figure>
                                                                          </li>
                                                                          <li>
                                                                            <figure class="cp-thumb">
                                                                              <a href="#">
                                                                                <img src="{{$PUBLIC_URL}}img/instagram-img-09.jpg" alt="">
                                                                                </a>
                                                                              </figure>
                                                                            </li>
                                                                          </ul>
                                                                        </div>
                                                                        
                                                                        <div class="widget widget-clouds">
                                                                          <h3>POPULAR TAGS</h3>
                                                                          <div class="tagcloud">
                                                                            <a href="#">Cat Care</a>
                                                                            <a href="#">Community</a>
                                                                            <a href="#">CIBC</a>
                                                                            <a href="#">General Health</a>
                                                                            <a href="#">Behavior</a>
                                                                            <a href="#">CIBC</a>
                                                                            <a href="#">Dog Care</a>
                                                                            <a href="#">Health Care</a>
                                                                            <a href="#">Emergecy</a>
                                                                          </div>
                                                                        </div>                                                                        
                                                                    </aside>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </section>
                                                          </div>
                </div>


          </div>
        </div>

@stop