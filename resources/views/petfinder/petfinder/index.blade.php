@extends('templates.petfinder.master')
@section('content')

        <div class="content">
          <!-- Sidebar With Content Section-->
          <div class="vc-wrapper container"></div>
          <div class="pagebuilder-wrapper">
            <div id="content-section-1" >
              <div class="no-padding kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-1"  style=";background:#ffffff">
                <div class="container-fluid">
                  <div class="row">
                    <div  class="simple-column  " >
                      <!-- MasterSlider -->
                      <div id="P_MS5ad6ee260f4ae" class="master-slider-parent ms-parent-id-2" style="max-width:1920px;"  >
                        <!-- MasterSlider Main -->
                        <div id="MS5ad6ee260f4ae" class="master-slider ms-skin-default" >
                          <div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
                            <img src="{{$PUBLIC_URL}}img/blank.gif" alt="" title="" data-src="{{$PUBLIC_URL}}img/bg.png" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/pattern.png" alt="" style=""     data-ease="easeOutQuint"  data-parallax="3" data-type="image" data-offset-x="501" data-offset-y="421" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape1.png" alt="" style=""     data-ease="easeOutQuint"  data-parallax="4" data-type="image" data-offset-x="737" data-offset-y="311" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape2.png" alt="" style=""     data-ease="easeOutQuint"  data-parallax="6" data-type="image" data-offset-x="1216" data-offset-y="334" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/adopt.png" alt="" style=""  data-effect="t(true,n,-150,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="-350" data-offset-y="-80" data-origin="mc" data-position="normal" />
                            <a href="{{route('petfinder.petfinder.finder')}}"> 
                              <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/btn-1.png" alt="" style=""  data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="-481" data-offset-y="46" data-origin="mc" data-position="normal" />
                            </a>
                            <a href="{{route('petfinder.petfinder.finder')}}"> 
                              <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/text-1.png" alt="" style=""  data-effect="t(true,-500,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="-344" data-offset-y="-14" data-origin="mc" data-position="normal" />
                            </a>
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/dog-1.png" alt="" style=""  data-effect="t(true,n,500,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeInOutQuint" data-type="image"         data-offset-x="496" data-offset-y="175" data-origin="mc" data-position="normal" />
                          </div>
                          <div  class="ms-slide" data-delay="3" data-fill-mode="fill" style="background-color:#e0dede;" >
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/pattern.png" alt="" style=""     data-ease="easeOutQuint" data-parallax="3" data-type="image" data-offset-x="1141" data-offset-y="431" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape1.png" alt="" style=""     data-ease="easeOutQuint" data-parallax="4" data-type="image" data-offset-x="1085" data-offset-y="328" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape2.png" alt="" style=""     data-ease="easeOutQuint" data-parallax="6" data-type="image" data-offset-x="1216" data-offset-y="334" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/dog.png" alt="" style=""  data-effect="t(true,n,n,-1500,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="-317" data-offset-y="-1" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/btn.jpg" alt="" style=""  data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"  data-type="image"         data-offset-x="155" data-offset-y="81" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/advertise.png" alt="" style=""  data-effect="t(true,n,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="198" data-offset-y="-125" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/free.png" alt="" style=""  data-effect="t(true,-500,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint" data-type="image"         data-offset-x="231" data-offset-y="-63" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/free-text.png" alt="" style=""  data-effect="t(true,n,500,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"  data-type="image"  data-offset-x="296" data-offset-y="11" data-origin="mc" data-position="normal" />
                          </div>
                          <div  class="ms-slide" data-delay="3" data-fill-mode="fill" style="background-color:#68b0f8;" >
                            <img src="{{$PUBLIC_URL}}img/blank.gif" alt="" title="" data-src="{{$PUBLIC_URL}}img/clouds.png" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/pattern.png" alt="" style=""     data-ease="easeOutQuint"       data-parallax="3" data-type="image"         data-offset-x="922" data-offset-y="423" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape1.png" alt="" style=""     data-ease="easeOutQuint"       data-parallax="4" data-type="image"         data-offset-x="900" data-offset-y="385" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/shape2.png" alt="" style=""     data-ease="easeOutQuint"       data-parallax="6" data-type="image"         data-offset-x="1005" data-offset-y="305" data-origin="tl" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/billi.png" alt="" style=""  data-effect="t(true,n,-500,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"        data-type="image"         data-offset-x="284" data-offset-y="-5" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/fly.png" alt="" style=""  data-effect="t(true,-500,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"        data-type="image"         data-offset-x="-214" data-offset-y="-55" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/btn.png" alt="" style=""  data-effect="t(true,n,500,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"        data-type="image"         data-offset-x="-392" data-offset-y="78" data-origin="mc" data-position="normal" />
                            <img  class="ms-layer" src="{{$PUBLIC_URL}}img/blank.gif" data-src="{{$PUBLIC_URL}}img/text.png" alt="" style=""  data-effect="t(true,500,n,n,n,n,n,n,n,n,n,n,n,n,n)"   data-ease="easeOutQuint"        data-type="image"         data-offset-x="-220" data-offset-y="5" data-origin="mc" data-position="normal" />
                          </div>
                        </div>
                        <!-- END MasterSlider Main -->
                      </div>
                      <!-- END MasterSlider -->
                    </div>
                    <?php
                        $arColor = array(
                          'background:#58dd00',
                          'background:#f52626',
                          'background:#f29100',
                          'background:#38cddc',

                          'background:#38cddc',
                          'background:#58dd00',
                          'background:#f52626',
                          'background:#f29100',

                          'background:#38cddc',
                          'background:#f29100',
                          'background:#f52626',
                          'background:#58dd00',
                        ); 
                        $arIcon = array(
                          'icon-horse125',
                          'icon-squirrel2',
                          'icon-animal614',
                          'icon-parrot',
                          'icon-pet25',
                          'icon-rabbit5',
                        );
                        $i = 0;
                        $j = 0;
                        $picUrl       = '/storage/app/files/';
                     ?>
                      
                    @foreach ($arServices as $arService)
                      <?php $service_id = $arService->service_id?>
                      @if($arService->cat_id == 1)
                        <div class="  col-md-3 columns" >
                          <div   class="  kode-service-type-1" >
                            <div style="{{$arColor[$i]}}" class="kf_pet_service_wrap">
                              <i class="fa fa-globe"></i>
                              <h4>{{$arService->service_name}}</h4>
                              <p style="color:#ffffff">Fun &#038; active dog walking service</p>
                              <?php 
                                  $service_id = $arService->service_id;
                                  $service_url = route('petfinder.petfinder.servicedetail', ['id' => $service_id]);
                                  if($service_id == 4){
                                      $service_url = route('petfinder.petfinder.finder');
                                  }
                              ?>
                              <a class="kf_pet_link_1 pet_sm_link" href="{{$service_url}}">Detail</a>
                             <!--  <a class="kf_pet_link_1 pet_sm_link" href="{{route('petfinder.petfinder.servicedetail', ['id' => $service_id])}}">Detail</a> -->
                            </div>
                          </div>
                        </div>
                        <?php if ($i <= 10) {
                          $i++;
                        } ?>
                      @endif
                    @endforeach


                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <div id="content-section-2" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-2"  style="padding-top: 30px; padding-bottom: 70px; ;background:#ffffff">
                <div class="container">
                  <div class="  col-md-12 columns" >
                    <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                      <style scoped> #kode-heading-5:before{background:#666666 !important;}</style>
                      <div id="kode-heading-5" class="kf_pet_heading_1">
                        <h4 style="color:#333333">Looking for a pet?</h4>
                        <p style="color:#666666">We have right pet for your need.</p>
                      </div>
                    </div>

                    <div class="kode-service kode-service-classic col-md-12 without-padding">
                      <div class="row">                        
                        @foreach ($arServices as $arService)
                          @if($arService->cat_id != 1)
                          <div class="col-md-4 columns">
                            <div class="kf_pet_looking_wrap ">
                              <figure>
                                <img width="350" height="350" src="{{$picUrl}}{{$arService->avatar}}" class="attachment-kode-team-size size-kode-team-size wp-post-image" alt="" srcset="{{$picUrl}}{{$arService->avatar}} 350w, {{$picUrl}}{{$arService->avatar}} 150w, {{$picUrl}}{{$arService->avatar}} 300w, {{$picUrl}}{{$arService->avatar}} 180w, {{$picUrl}}{{$arService->avatar}} 600w, {{$picUrl}}{{$arService->avatar}} 614w" sizes="(max-width: 350px) 100vw, 350px" />
                              </figure>

                              <div class="kf_pet_looking_des">
                                <div class="kf_looking_icon kf_pet_bg2">
                                  <i class="{{$arIcon[$j]}}"></i>
                                </div>
                                <div class="kf_pet_looking_heading">
                                  <h5>{{$arService->service_name}}</h5>
                                  <p>{{$arService->description}}</p>
                                </div>
                              </div>
                              <div class="kf_looking_hover_wrap">
                                <h5>{{$arService->service_name}}</h5>
                                  <p>{{$arService->description}}</p>
                                <a href="{{ route('petfinder.petfinder.servicedetail', ['id' => $service_id]) }}" class="kf_pet_link_1 pet_sm_link">Learn More</a>
                              </div>
                            </div>
                          </div>
                                <?php if ($j <= 5) {
                                $j++;
                              } ?>
                            @endif
                          @endforeach

                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <!-- <div id="content-section-3" >
              <div class="kf_pet_clinic_shop_bg kode-parallax-wrapper kode-background-image"  id="kode-parallax-wrapper-3" data-bgspeed="0" style=";background-image: url('{{$PUBLIC_URL}}img/pet-clinic-shop-bg.png'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat; padding-top: 50px; padding-bottom: 20px; " >
                <style scoped>#kode-parallax-wrapper-3{ position:relative;}#kode-parallax-wrapper-3 .container{ position:relative;z-index:99999;}#kode-parallax-wrapper-3:before{background-color:#d56944;opacity:0.3;content:"";position:absolute;left:0px;top:0px;height:100%;width:100%;}</style>
                <div class="container">
                  <div class="kode-service kode-service-classic col-md-12 without-padding">
                    <div class="row">
                      <div class="col-md-3 columns">
                        <div class="kf_pet_clinic_wrap">
                          <h3>RABBIT CARE</h3>
                          <i class="icon-rabbit5"></i>
                          <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-6-3/" class="kf_pet_link_1 pet_sm_link">Read More</a>
                        </div>
                      </div>
                      <div class="col-md-3 columns">
                        <div class="kf_pet_clinic_wrap">
                          <h3>PET BOUTIQUE</h3>
                          <i class="icon-pet27"></i>
                          <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3/" class="kf_pet_link_1 pet_sm_link">Read More</a>
                        </div>
                      </div>
                      <div class="col-md-3 columns">
                        <div class="kf_pet_clinic_wrap">
                          <h3>CAT FEEDING</h3>
                          <i class="icon-dog111"></i>
                          <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-2/" class="kf_pet_link_1 pet_sm_link">Read More</a>
                        </div>
                      </div>
                      <div class="col-md-3 columns">
                        <div class="kf_pet_clinic_wrap">
                          <h3>DOG WALKING</h3>
                          <i class="icon-dogs20"></i>
                          <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-4/" class="kf_pet_link_1 pet_sm_link">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div> -->
            <div id="content-section-4" >
              <div class=" kode-parallax-wrapper kode-background-image"  id="kode-parallax-wrapper-4" data-bgspeed="0" style="background-color:#ffffff;padding-top: 70px; padding-bottom: 50px; " >
                <style scoped>#kode-parallax-wrapper-4:after{background-color:#ffffff;background-image: url('{{$PUBLIC_URL}}img/pet-appointment-bg.png');background-position: center centerbackground-attachment: fixed; background-repeat: no-repeat; background-size: cover; content: ""; height: 100%; right: 0;position: absolute;top: 0;    width: 25%;}#kode-parallax-wrapper-4:before{background-color:#ffffff;z-index:1;opacity:0.0;content:"";position:absolute;right:0px;top:0px;height:100%;width:25%;}#kode-parallax-wrapper-4{ position:relative;}#kode-parallax-wrapper-4 > .container-fluid{ position:relative;z-index:99999;}#kode-parallax-wrapper-4 .container{ position:relative;z-index:99999;}</style>
                <div class="container">
                  <div class="  col-md-10 columns" >
                    <div  class="kode-simple-heading kode-align-left "  style="margin-bottom: 15px;" >
                      <style scoped>#kode-heading-7:before{background:#333333 !important;}#kode-heading-7{text-align:left;}#kode-heading-7:before{right:auto;}
                      </style>
                      <div id="kode-heading-7" class="kf_pet_heading_1">
                        <h4 style="color:#333333">GET AN APPOINTMENT</h4>
                        <p style="color:#333333">Ask us for appointment for your pet, we are just one phone call away.</p>
                      </div>
                    </div>
                    <div  class="simple-column  " >
                      <div role="form" class="wpcf7" id="wpcf7-f633-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/wp-demo/petcare/#wpcf7-f633-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                          <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="633" />
                            <input type="hidden" name="_wpcf7_version" value="4.8" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f633-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                            <input type="hidden" name="_wpcf7_nonce" value="64c28a617a" />
                          </div>
                          <div class="kf_pet_appointment_wrap">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="First Name" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Last Name" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="E-Mail" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Phone Number" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Pet Category" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Service Type" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Visiting Date" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap text-628">
                                    <input type="text" name="text-628" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Visiting Time" />
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="kf_pet_field">
                                  <span class="wpcf7-form-control-wrap textarea-182">
                                    <textarea name="textarea-182" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Anything we should know about youre pet?"></textarea>
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="kf_pet_field">
                                  <input type="submit" value="get an appointment" class="wpcf7-form-control wpcf7-submit" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script> -->
            <script>
              ( window.MSReady = window.MSReady || [] ).push( function( $ ) {

              "use strict";
              var masterslider_f4ae = new MasterSlider();
              // slider controls
              // slider setup
              masterslider_f4ae.setup("MS5ad6ee260f4ae", {
              width           : 1920,
              height          : 800,
              minHeight       : 0,
              space           : 0,
              start           : 1,
              grabCursor      : true,
              swipe           : true,
              mouse           : true,
              keyboard        : false,
              layout          : "boxed",
              wheel           : false,
              autoplay        : false,
              instantStartLayers:false,
              loop            : false,
              shuffle         : false,
              preload         : 0,
              heightLimit     : true,
              autoHeight      : false,
              smoothHeight    : true,
              endPause        : false,
              overPause       : true,
              fillMode        : "fill",
              centerControls  : true,
              startOnAppear   : false,
              layersMode      : "center",
              autofillTarget  : "",
              hideLayers      : false,
              fullscreenMargin: 0,
              speed           : 20,
              dir             : "h",
              parallaxMode    : 'mouse',
              view            : "fadeBasic"
              });

                MSScrollParallax.setup( masterslider_f4ae, 30, 50, true );
              window.masterslider_instances = window.masterslider_instances || [];
              window.masterslider_instances.push( masterslider_f4ae );
              });
            </script>
            <!-- <div id="content-section-5" >
              <div class="kode-testimonial-bg-white kode-parallax-wrapper kode-background-image"  id="kode-parallax-wrapper-5" data-bgspeed="0" style="background-color:#000000;padding-top: 50px; padding-bottom: 30px; " >
                <style scoped>#kode-parallax-wrapper-5:after{background-color:#000000;background-image: url('{{$PUBLIC_URL}}img/pet-blog-grid-04.jpg');background-position: center center;background-attachment: scroll; background-repeat: no-repeat;background-size: cover;content: "";  height: 100%;left: 0;position: absolute;top: 0; width: 33.33%;}#kode-parallax-wrapper-5:before{background-color:#000000;z-index:1;opacity:0.7;content:"";position:absolute;left:0px;top:0px;height:100%;width:33.33%;}#kode-parallax-wrapper-5{ position:relative;}#kode-parallax-wrapper-5 > .container-fluid{ position:relative;z-index:99999;}#kode-parallax-wrapper-5 .container{ position:relative;z-index:99999;}</style>
                <div class="container-fluid">
                  <div class="row">
                    <div class="  col-md-4 columns" >
                      <div  class="kode-simple-heading kode-align-center kf_pet_testi2_slider" >
                        <style scoped>#kode-heading-8:before{background:#ffffff !important;}
                        </style>
                        <div id="kode-heading-8" class="kf_pet_heading_1">
                          <h4 style="color:#ffffff">WHAT OUR CLIENTS SAYS</h4>
                          <p style="color:#ffffff">What our clients says about us</p>
                        </div>
                      </div>
                    </div>
                    <div class="  col-md-8 columns" >
                      <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                        <style scoped>#kode-heading-9:before{background:#333333 !important;}</style>
                        <div id="kode-heading-9" class="kf_pet_heading_1">
                          <h4 style="color:#333333">CLIENT TESTIMONIAL</h4>
                          <p style="color:#333333">Here are some of the feedback from our clients</p>
                        </div>
                      </div>
                      <div class="kode_gallery_wrap">
                        <div class="kf_pet_testi_3_wrap owl-carousel owl-theme" data-slide="2" >
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-6/">Micheal Doe</a>
                                </h5>
                                <span>Task Manager</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-7/">John Doe</a>
                                </h5>
                                <span>Manager</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-8/">Mia Doe</a>
                                </h5>
                                <span>Pet Care</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-3/">Frank Doe</a>
                                </h5>
                                <span>Doctor</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-4/">Jack Doe</a>
                                </h5>
                                <span>CEO</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-5/">Jacy Doe</a>
                                </h5>
                                <span>Assistant Manager</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia-2/">Roy Doe</a>
                                </h5>
                                <span>Business Manager</span>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="kf_pet_testi_3">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                            </div>
                            <div class="kf_pet_testi_3_fig">
                              <figure>
                                <img width="80" height="80" src="{{$PUBLIC_URL}}img/testi-4-150x150.jpg" class="attachment-80x80 size-80x80 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/testi-4-150x150.jpg 150w, {{$PUBLIC_URL}}img/testi-4-180x180.jpg 180w, {{$PUBLIC_URL}}img/testi-4-300x300.jpg 300w, {{$PUBLIC_URL}}img/testi-4-600x600.jpg 600w, {{$PUBLIC_URL}}img/testi-4-350x350.jpg 350w" sizes="(max-width: 80px) 100vw, 80px" />
                              </figure>
                              <div class="kf_pet_testi_3_fig_des">
                                <h5>
                                  <a href="http://kodeforest.net/wp-demo/petcare/testimonial/nancy-mia/">Nancy Mia</a>
                                </h5>
                                <span>Engineer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div> -->
            <!-- <div id="content-section-6" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-6"  style="padding-top: 70px; padding-bottom: 70px; ;background:#ffffff">
                <div class="container">
                  <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                    <style scoped>#kode-heading-10:before{background:#333333 !important;}</style>
                    <div id="kode-heading-10" class="kf_pet_heading_1">
                      <h4 style="color:#333333">FIND YOUR BEST COMPANION</h4>
                      <p style="color:#333333">We offer the best companion for you.</p>
                    </div>
                  </div>
                  <div class="kode-service kode-service-classic col-md-12 without-padding">
                    <div class="row">
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-300x300.jpg 300w, http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-150x150.jpg 150w, http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-180x180.jpg 180w, http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-600x600.jpg 600w, http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie-350x350.jpg 350w, http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/pet_service_charlie.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-5/">Duck Training</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-5/">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-5/">Duck Training</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="{{$PUBLIC_URL}}img/pet_services_new11-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_services_new11-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_services_new11-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_services_new11-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_services_new11-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_services_new11-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_services_new11.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-4/">Train Parrot</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-4/">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-4/">Train Parrot</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="{{$PUBLIC_URL}}img/pet_services_new10-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_services_new10-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_services_new10-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_services_new10-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_services_new10-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_services_new10-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_services_new10.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-3/">Rabbit Rocks</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-3/">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-3/">Rabbit Rocks</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="{{$PUBLIC_URL}}img/pet_services_new9-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_services_new9-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_services_new9-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_services_new9-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_services_new9-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_services_new9-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_services_new9.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-2/">Awesome Fishes</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-2/">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2-2/">Awesome Fishes</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="{{$PUBLIC_URL}}img/pet_services_new8-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_services_new8-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_services_new8-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_services_new8-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_services_new8-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_services_new8-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_services_new8.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/sweet-kitten/">Sweet Kitten</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/sweet-kitten/">
                              <i class="icon-cat19"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/sweet-kitten/">Sweet Kitten</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img width="300" height="300" src="{{$PUBLIC_URL}}img/pet_services_new7-300x300.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_services_new7-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_services_new7-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_services_new7-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_services_new7-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_services_new7-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_services_new7.jpg 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2/">Beautiful Puppies</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy te</p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2/">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standar</p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/services/charlie-2-3-3-2-2/">Beautiful Puppies</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div> -->
            <div id="content-section-7" >
              <div class=" kode-parallax-wrapper kode-background-image"  id="kode-parallax-wrapper-7" data-bgspeed="0" style=";background-image: url('{{$PUBLIC_URL}}img/petcare_progress_coutners_bg.jpg'); background-attachment: scroll; background-size: cover; background-repeat: no-repeat; padding-top: 74px; padding-bottom: 50px; " >
                <style scoped>#kode-parallax-wrapper-7{ position:relative;}#kode-parallax-wrapper-7 .container{ position:relative;z-index:99999;}#kode-parallax-wrapper-7:before{background-color:#0c0c0c;opacity:0.75;content:"";position:absolute;left:0px;top:0px;height:100%;width:100%;}</style>
                <div class="container">
                  <div class="  col-md-3 columns" >
                    <div  class="kode-simple-heading kode-align-left " >
                      <style scoped>#kode-heading-12 h4:before{background:#ffffff !important;}</style>
                      <div id="kode-heading-12" class="kf_pet_saved_wrap">
                        <h4 style="color:#ffffff">HOW MANY WE SAVED</h4>
                        <p style="color:#ffffff">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below....</p>
                      </div>
                    </div>
                  </div>
                  <div class="  col-md-3 columns" >
                    <div  class="simple-column  " >
                      <script type="text/javascript">
                        jQuery(document).ready(function($){
                        /* ---------------------------------------------------------------------- */
                        /*  Counter Functions
                        /* ---------------------------------------------------------------------- */
                        if($("#count-1").length){
                        $("#count-1").counterUp({
                        delay: 10,
                        time: 1000
                        });
                        }
                        });
                      </script>
                      <div class="kode-counter">
                        <span class="counter-icon thcolor">
                          <i class="fa icon-dog56"></i>
                        </span>
                        <div class="clearfix"></div>
                        <span id="count-1" class="word-count">3256</span>
                        <h6>PUPPIES</h6>
                      </div>
                    </div>
                  </div>
                  <div class="  col-md-3 columns" >
                    <div  class="simple-column  " >
                      <script type="text/javascript">
                        jQuery(document).ready(function($){
                        /* ---------------------------------------------------------------------- */
                        /*  Counter Functions
                        /* ---------------------------------------------------------------------- */
                        if($("#count-2").length){
                        $("#count-2").counterUp({
                        delay: 10,
                        time: 1000
                        });
                        }
                        });
                      </script>
                      <div class="kode-counter">
                        <span class="counter-icon thcolor">
                          <i class="fa icon-halloween242"></i>
                        </span>
                        <div class="clearfix"></div>
                        <span id="count-2" class="word-count">5000</span>
                        <h6>LITTLE CATS</h6>
                      </div>
                    </div>
                  </div>
                  <div class="  col-md-3 columns" >
                    <div  class="simple-column  " >
                      <script type="text/javascript">
                      jQuery(document).ready(function($){
                      /* ---------------------------------------------------------------------- */
                      /*  Counter Functions
                      /* ---------------------------------------------------------------------- */
                      if($("#count-3").length){
                      $("#count-3").counterUp({
                      delay: 10,
                      time: 1000
                      });
                      }
                      });
                      </script>
                      <div class="kode-counter">
                        <span class="counter-icon thcolor">
                          <i class="fa icon-duck10"></i>
                        </span>
                        <div class="clearfix"></div>
                        <span id="count-3" class="word-count">1530</span>
                        <h6>DUCKS</h6>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
           <!--  <div id="content-section-8" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-8"  style="padding-top: 70px; padding-bottom: 40px; ;background:#ffffff">
                <div class="container">
                  <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                    <style scoped>#kode-heading-16:before{background:#333333 !important;}</style>
                    <div id="kode-heading-16" class="kf_pet_heading_1">
                      <h4 style="color:#333333">OUR ONLINE SHOP</h4>
                      <p style="color:#333333">We have online shop you can purchase your favorite pet online.</p>
                    </div>
                  </div>
                  <div  class="product-listing2">
                    <ul class="row padding-none">
                      <li class="clear"></li>
                      <li class="col-md-3 columns">
                        <div class="kf_pet_shop_wrap">
                          <div class="kf_pet_product_img">
                            <figure>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-biscuits-2/">
                                <img width="350" height="350" src="{{$PUBLIC_URL}}img/pet_shop1-350x350.jpg" class="attachment-350x350 size-350x350 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_shop1-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_shop1-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_shop1-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_shop1-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_shop1-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_shop1.jpg 614w" sizes="(max-width: 350px) 100vw, 350px" />
                              </a>
                            </figure>
                            <div class="kf_pet_scl_icon">
                              <ul>
                                <li>
                                  <a href="/wp-demo/petcare/?add-to-cart=773" rel="nofollow" data-product_id="1" data-product_sku="773" class="add_to_cart cart 00001 product_type_button">
                                    <i class="fa fa-shopping-cart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-heart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-refresh"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="kf_pet_product_des">
                            <span>$55.00</span>
                            <span>$55.00</span>
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-biscuits-2/">Pet Cookies</a>
                            </h5>
                            <ul class="woo-post-meta-rating">
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-3 columns">
                        <div class="kf_pet_shop_wrap">
                          <div class="kf_pet_product_img">
                            <figure>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-belts-2/">
                                <img width="350" height="350" src="{{$PUBLIC_URL}}img/pet_shop2-350x350.jpg" class="attachment-350x350 size-350x350 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_shop2-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_shop2-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_shop2-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_shop2-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_shop2-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_shop2.jpg 614w" sizes="(max-width: 350px) 100vw, 350px" />
                              </a>
                            </figure>
                            <div class="kf_pet_scl_icon">
                              <ul>
                                <li>
                                  <a href="/wp-demo/petcare/?add-to-cart=772" rel="nofollow" data-product_id="1" data-product_sku="772" class="add_to_cart cart 00001 product_type_button">
                                    <i class="fa fa-shopping-cart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-heart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-refresh"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="kf_pet_product_des">
                            <span>$110.00</span>
                            <span>$110.00</span>
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-belts-2/">PET Necklace</a>
                            </h5>
                            <ul class="woo-post-meta-rating">
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-3 columns">
                        <div class="kf_pet_shop_wrap">
                          <div class="kf_pet_product_img">
                            <figure>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-snacks-2/">
                                <img width="350" height="350" src="{{$PUBLIC_URL}}img/pet_shop5-350x350.jpg" class="attachment-350x350 size-350x350 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_shop5-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_shop5-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_shop5-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_shop5-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_shop5-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_shop5.jpg 614w" sizes="(max-width: 350px) 100vw, 350px" />
                              </a>
                            </figure>
                            <div class="kf_pet_scl_icon">
                              <ul>
                                <li>
                                  <a href="/wp-demo/petcare/?add-to-cart=771" rel="nofollow" data-product_id="1" data-product_sku="771" class="add_to_cart cart 00001 product_type_button">
                                    <i class="fa fa-shopping-cart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-heart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-refresh"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="kf_pet_product_des">
                            <span>$55.00</span>
                            <span>$55.00</span>
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-snacks-2/">PET Feed</a>
                            </h5>
                            <ul class="woo-post-meta-rating">
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-3 columns">
                        <div class="kf_pet_shop_wrap">
                          <div class="kf_pet_product_img">
                            <figure>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-food-2/">
                                <img width="350" height="350" src="{{$PUBLIC_URL}}img/pet_shop4-350x350.jpg" class="attachment-350x350 size-350x350 wp-post-image" alt="" srcset="{{$PUBLIC_URL}}img/pet_shop4-350x350.jpg 350w, {{$PUBLIC_URL}}img/pet_shop4-150x150.jpg 150w, {{$PUBLIC_URL}}img/pet_shop4-300x300.jpg 300w, {{$PUBLIC_URL}}img/pet_shop4-180x180.jpg 180w, {{$PUBLIC_URL}}img/pet_shop4-600x600.jpg 600w, {{$PUBLIC_URL}}img/pet_shop4.jpg 614w" sizes="(max-width: 350px) 100vw, 350px" />
                              </a>
                            </figure>
                            <div class="kf_pet_scl_icon">
                              <ul>
                                <li>
                                  <a href="/wp-demo/petcare/?add-to-cart=770" rel="nofollow" data-product_id="1" data-product_sku="770" class="add_to_cart cart 00001 product_type_button">
                                    <i class="fa fa-shopping-cart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-heart"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="fa fa-refresh"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="kf_pet_product_des">
                            <span>$40.00</span>
                            <span>$40.00</span>
                            <h5>
                              <a href="http://kodeforest.net/wp-demo/petcare/product/pet-food-2/">PET Snacks</a>
                            </h5>
                            <ul class="woo-post-meta-rating">
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div> -->
            <div id="content-section-9" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-9"  style="padding-top: 70px; padding-bottom: 70px; ;background:#f9f9f9">
                <div class="container-fluid">
                  <div class="row">
                    <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                      <style scoped>#kode-heading-18:before{background:#333333 !important;}</style>
                      <div id="kode-heading-18" class="kf_pet_heading_1">
                        <h4 style="color:#333333">OUR GALLERY</h4>
                        <p style="color:#333333">Available pets gallery for you to have pets</p>
                      </div>
                    </div>
                    <div class=" kode-padding-without  kode-gallery kode-gutter-gallery bottom-spacer col-md-12">
                      <ul class="row kode-item" >
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new11-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new11.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new10-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new10.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new9-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new9.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new8-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new8.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="clear"></li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new7-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new7.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new6-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new6.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new5-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new5.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="col-md-3 columns">
                          <div class="kf_pet_gallery_wrap">
                            <figure>
                              <img src="{{$PUBLIC_URL}}img/pet_services_new4-350x350.jpg" alt="" width="350" height="350" />
                            </figure>
                            <div class="kf_pet_gallery_icon">
                              <a data-gal="prettyphoto[]" href="{{$PUBLIC_URL}}img/pet_services_new4.jpg">
                                <i class="fa fa-search"></i>
                              </a>
                              <a target="enable" href="">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                          <span class="gallery-caption"></span>
                        </li>
                        <li class="clear"></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <div id="content-section-10" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-10"  style="padding-top: 70px; padding-bottom: 70px; ;background:#ffffff">
                <div class="container">
                  <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 15px;" >
                    <style scoped>#kode-heading-20:before{background:#333333 !important;}</style>
                    <div id="kode-heading-20" class="kf_pet_heading_1">
                      <h4 style="color:#333333">OUR BLOG</h4>
                      <p style="color:#333333">Here are some of the latest blog post for the pet care.</p>
                    </div>
                  </div>
                  <div class="blog-item-wrapper"  >
                    <div class="blog-item-holder">
                      <div class="kode-blog-list-view kode-medium-blog-view row">
                        <div class="clear"></div>
                        <div class="col-md-4 columns">
                          <div class="kode-item kode-blog-medium">
                            <article id="blog-med-379" class="kode_medium kode-simple-medium post-379 post type-post status-publish format-standard has-post-thumbnail hentry category-dogs category-love category-pet tag-keeper tag-pets">
                              <div class="kf_pet_news_wrap">
                                <figure>
                                  <div class="kode-blog-thumbnail">
                                    <img src="http://kodeforest.net/wp-demo/petcare/wp-content/uploads/2015/12/blog-2-350x350.jpg" alt="" width="350" height="350" />
                                  </div>
                                  <figcaption class="kf_pet_news_link ">
                                    <a href="http://kodeforest.net/wp-demo/petcare/how-to-keep-pets-clean/">
                                      <i class="fa fa-image"></i>
                                    </a>
                                  </figcaption>
                                </figure>
                                <div class="kf_pet_news_des">
                                  <h5>
                                    <a href="http://kodeforest.net/wp-demo/petcare/how-to-keep-pets-clean/">How to Keep Pets Clean</a>
                                  </h5>
                                  <ul>
                                    <li class="blog-info blog-date">
                                      <i class="fa fa-clock-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/2015/12/15/">9:05 am</a>
                                    </li>
                                    <li class="blog-info blog-comment">
                                      <i class="fa fa-comment-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/how-to-keep-pets-clean/#respond" >1 Comment</a>
                                    </li>
                                  </ul>
                                  <div class="kode-blog-content">
                                    <p>No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Pute</p>
                                    <a class="kf-readmore" href="http://kodeforest.net/wp-demo/petcare/how-to-keep-pets-clean/">Read More</a>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                        <div class="col-md-4 columns">
                          <div class="kode-item kode-blog-medium">
                            <article id="blog-med-113" class="kode_medium kode-simple-medium post-113 post type-post status-publish format-standard has-post-thumbnail hentry category-love category-pet category-petcare tag-keeper tag-pet">
                              <div class="kf_pet_news_wrap">
                                <figure>
                                  <div class="kode-blog-thumbnail">
                                    <img src="{{$PUBLIC_URL}}img/pet_blog5-350x350.jpg" alt="" width="350" height="350" />
                                  </div>
                                  <figcaption class="kf_pet_news_link ">
                                    <a href="http://kodeforest.net/wp-demo/petcare/bringing-a-new-kitten-home/">
                                      <i class="fa fa-image"></i>
                                    </a>
                                  </figcaption>
                                </figure>
                                <div class="kf_pet_news_des">
                                  <h5>
                                    <a href="http://kodeforest.net/wp-demo/petcare/bringing-a-new-kitten-home/">Bringing a New Kitten Hom</a>
                                  </h5>
                                  <ul>
                                    <li class="blog-info blog-date">
                                      <i class="fa fa-clock-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/2015/11/22/">10:17 am</a>
                                    </li>
                                    <li class="blog-info blog-comment">
                                      <i class="fa fa-comment-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/bringing-a-new-kitten-home/#respond" >2 Comment</a>
                                    </li>
                                  </ul>
                                  <div class="kode-blog-content">
                                    <p>No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Pute</p>
                                    <a class="kf-readmore" href="http://kodeforest.net/wp-demo/petcare/bringing-a-new-kitten-home/">Read More</a>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                        <div class="col-md-4 columns">
                          <div class="kode-item kode-blog-medium">
                            <article id="blog-med-112" class="kode_medium kode-simple-medium post-112 post type-post status-publish format-standard has-post-thumbnail hentry category-cats category-dogs category-pet tag-keeper tag-pet">
                              <div class="kf_pet_news_wrap">
                                <figure>
                                  <div class="kode-blog-thumbnail">
                                    <a href="{{$PUBLIC_URL}}img/pet_blog3.jpg" data-rel="prettyphoto[]" >
                                      <img src="{{$PUBLIC_URL}}img/pet_blog3-350x350.jpg" alt="" width="350" height="350" />
                                    </a>
                                    <div class="kode-blog-thumbnail kode-audio"></div>
                                  </div>
                                  <figcaption class="kf_pet_news_link ">
                                    <a href="http://kodeforest.net/wp-demo/petcare/foods-to-avoid-feeding-your-pet/">
                                      <i class="fa fa-image"></i>
                                    </a>
                                  </figcaption>
                                </figure>
                                <div class="kf_pet_news_des">
                                  <h5>
                                    <a href="http://kodeforest.net/wp-demo/petcare/foods-to-avoid-feeding-your-pet/">Pets are like family</a>
                                  </h5>
                                  <ul>
                                    <li class="blog-info blog-date">
                                      <i class="fa fa-clock-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/2015/11/22/">10:17 am</a>
                                    </li>
                                    <li class="blog-info blog-comment">
                                      <i class="fa fa-comment-o"></i>
                                      <a href="http://kodeforest.net/wp-demo/petcare/foods-to-avoid-feeding-your-pet/#respond" >2 Comment</a>
                                    </li>
                                  </ul>
                                  <div class="kode-blog-content">
                                    <p>No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Pute</p>
                                    <a class="kf-readmore" href="http://kodeforest.net/wp-demo/petcare/foods-to-avoid-feeding-your-pet/">Read More</a>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>

@stop