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
                
                  
                  <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal modal-danger fade" id="modal-login">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Login to register this service, please!</h4>
                        </div>
                        <div class="modal-body">
                          <p>Click on login button.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-outline"><a href="{{route('auth.auth.login')}}">Login</a></button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>

                <div class="cp-main-content">
                  <section class="cp-blog-section pd-t100">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-9 col-sm-12">
                          <article class="cp-blog-item">
                            <figure class="cp-thumb">
                              <img style="width: 100%; height: 430px; object-fit: cover !important;" src="{{$PIC_URL}}{{$arService->avatar}}" alt="">
                              </figure>
                              <div class="cp-text">
                                <div class="cp-date-box">
                                  <span style="font-size: 18px !important">Price</span>{{$arService->price}}
                                </div>
                                <div class="cp-inner">
                                  <h3>{{$arService->service_name}}</h3>
                                  <div class="cp-top">
                                    <ul class="cp-meta-listed">
                                      <li>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        @foreach($arUsers as $arUser)
                                          @if($arService->user_id == $arUser->id)
                                              <a href="#">{{$arUser->username}}</a>
                                          @endif
                                        @endforeach
                                      </li>
                                      <li>
                                        <i class="fa fa-eye" aria-hidden="true"></i> 762
                                      </li>
                                      <li>
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        @foreach($arServiceCats as $arServiceCat)
                                          @if($arService->cat_id  == $arServiceCat->cat_id)
                                              <a href="#">{{$arServiceCat->cat_name}}</a>
                                          @endif
                                        @endforeach
                                        <i style="padding-left: 10px" class="fa fa-money" aria-hidden="true"> </i>
                                        <a href="#">{{$arService->price}}</a>
                                        <i style="padding-left: 10px" class="fa fa-bullhorn" aria-hidden="true"> </i>
                                        <a href="#">{{$arService->status}}</a>
                                      </li>
                                    </ul>
                                    <ul class="right-nav">
                                      <li>
                                        <i class="fa fa-heart" aria-hidden="true"></i> 232
                                      </li>
                                      <li class="share share-push">
                                        @if(Auth::check())
                                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-register"> Register
                                          </button>
                                        @else 
                                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-login"> Register
                                          </button>
                                        @endif
                                      </li>
                                    </ul>
                                  </div>
                                  <p style="font-style: italic; font-weight: bold;"><?php echo $arService->description; ?></p>
                                  <p class=""><?php echo $arService->content; ?></p>
                                  
                                  <div class="cp-blog-testimonial">
                                    
                                    <ul class="cp-comments-holder cp-comments-holder2">
                                         
                                          <div class="cp-form-box">
                                            <h3>Leave A Reply</h3>
                                            <form action="http://html.crunchpress.com/pet-care/form3.php" method="post">
                                              <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                  <div class="inner-holder">
                                                    <input type="text" placeholder="Name" name="name2" required="" pattern="[a-zA-Z ]+">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6">
                                                    <div class="inner-holder">
                                                      <input type="text" placeholder="Email" name="email2" required="" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                      <div class="inner-holder">
                                                        <textarea placeholder="Message" name="comment2" required=""></textarea>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                      <div class="inner-holder cp-btn-holder">
                                                        <button type="submit" class="cp-btn-style3 btn-submit" value="Submit" name="submit2">Submit Now</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </form>
                                              </div>
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
                                                <h3>Other Services</h3>
                                                <hr />
                                                <ul>
                                                  @foreach($arOtherServices as $arOtherService)
                                                  <?php 
                                                    $service_id = $arOtherService->service_id;
                                                    $description = str_limit($arOtherService->description, 30);
                                                    $service_url = route('petfinder.petfinder.servicedetail', ['id' => $service_id]);
                                                    if($service_id == 4){
                                                        $service_url = route('petfinder.petfinder.finder');
                                                    }
                                                  ?>
                                                  <li>
                                                    <div class="cp-recent-inner">
                                                      <figure class="cp-thumb">
                                                      <img src="{{$PIC_URL}}{{$arOtherService->avatar}}" alt="">
                                                      </figure>
                                                      <div class="cp-text">
                                                          <a style="font-weight: bold;" href="{{$service_url}}">{{title_case($arOtherService->service_name)}}</a>
                                                          <span class="date">{{$description}}</span>
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