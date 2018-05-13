@extends('templates.petfinder.master')
@section('content')

        <div class="content">
          <!-- Sidebar With Content Section-->
          <div class="vc-wrapper container"></div>
          <div class="pagebuilder-wrapper">


            <div id="content-section-3" >
              <div class="kf_pet_clinic_shop_bg kode-parallax-wrapper kode-background-image"  id="kode-parallax-wrapper-3" data-bgspeed="0" style=";background-image: url('{{$PUBLIC_URL}}img/pet-clinic-shop-bg.png'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat; padding-top: 20px; padding-bottom: 10px; " >
                <style scoped>#kode-parallax-wrapper-3{ position:relative;}#kode-parallax-wrapper-3 .container{ position:relative;}#kode-parallax-wrapper-3:before{background-color:#ffe06f !important;opacity:0.3;content:"";position:absolute;left:0px;top:0px;height:100%;width:100%;}</style>
                <div class="container">
                  <div  class="kode-simple-heading kode-align-center "  style="margin-bottom: 0px;" >
                    <style scoped>#kode-heading-10:before{background:#333333 !important;}</style>
                    <div id="kode-heading-10" class="kf_pet_heading_1">
                      <h4 style="color:#333333; font-size: 36px">FIND YOUR BEST PETS</h4>
                      <p style="color:#333333; font-size: 16px">We offer the best PET for you.</p>
                    </div>                  
                  </div>

                  <div class="pet-finder">
                    <div class="row">
                      <div class="result_ajax">
                        <div role="form" class="wpcf7" id="wpcf7-f633-o1" lang="en-US" dir="ltr">
                          <div class="screen-reader-response"></div>
                          <form action="javascript:void(0);" method="post" class="wpcf7-form" novalidate="novalidate">

                            <div class="kf_pet_appointment_wrap">
                              <div class="row">
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <p class="finder-title">BREED</p>
                                      <select class="form-control" name="breed" id="breed" required="true" style="width: 100%;">
                                          <option selected="true">--Select--</option>
                                          @foreach($arPetCats as $arPetCat)
                                            <option  value="">{{$arPetCat->cat_name}}</option>
                                          @endforeach
                                      </select>
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <p class="finder-title">AGE</p>
                                      <select class="form-control" name="age" id="age" required="true" style="width: 100%;">
                                          <option selected="true">--Select--</option>
                                          @foreach($arPets as $arPet)
                                            <option  value="">{{$arPet->age}}</option>
                                          @endforeach
                                      </select>
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <p class="finder-title">GENDER</p>
                                      <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
                                          <option selected="true">--Select--</option>
                                          <option  value="">Male</option>
                                          <option  value="">Female</option>
                                      </select>
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <p class="finder-title">CITY</p>
                                      <select class="form-control" name="city" id="city" required="true" style="width: 100%;">
                                          <option selected="true">--Select--</option>
                                          @foreach($arPets as $arPet)
                                            <option  value="">{{$arPet->city}}</option>
                                          @endforeach
                                      </select>
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <p class="finder-title">SORT BY</p>
                                      <select class="form-control" name="no" id="no" required="true" style="width: 100%;">
                                          <option  selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                      </select>
                                    </span>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="kf_pet_field">
                                    <p class="finder-title">DISTANCE</p>
                                    <span class="wpcf7-form-control-wrap text-628">
                                      <select class="form-control" name="no" id="no" required="true" style="width: 100%;">
                                          <option  selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                          <option selected="false" value="">Test 1</option>
                                      </select>
                                    </span>
                                  </div>
                                </div>

                                <div style="text-align: center;" class="col-md-12">
                                  <div class="kf_pet_field">
                                    <input onclick="pet_finder()" type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                          </form>
                        </div>
                      </div>

                      <script type="text/javascript">
                        function pet_finder(){
                          var breed  = $('#breed').val();
                          var age    = $('#age').val();
                          var gender = $('#gender').val();
                          var city   = $('#city').val();
                          
                            $.ajax({
                              url: 'ajax.php',
                              type: 'POST',
                              //cache: false,
                              data: {abreed: breed, aage: age, agender: gender, acity: city},
                              success: function(data){
                                $(".result_ajax").html(data);
                              },
                              error: function (){
                                alert('Have some thing wrong, check again please!');
                              }
                            });
                          
                        }
                      </script>
                    </div>
                  </div>

                  

                </div>
              </div>
              <div class="clear"></div>
            </div>


            <div id="content-section-6" >
              <div class=" kode-parallax-wrapper kode-background-color"  id="kode-parallax-wrapper-6"  style="padding-top: 70px; padding-bottom: 70px; ;background:#ffffff">
                <div class="container">
                  
                  <div class="kode-service kode-service-classic col-md-12 without-padding">
                    <div class="row">
                      
                      @foreach($arPets as $arPet)
                      <?php $pet_id = $arPet->pet_id ?>
                      <div class="col-md-3 columns">
                        <div class="kf_pet_campanion">
                          <figure>
                            <img style="width: 300px; height: 300px; object-fit: cover !important;" width="300" height="300" src="{{$PIC_URL}}{{$arPet->avatar}}" class="attachment-medium size-medium wp-post-image" alt="" srcset="{{$PIC_URL}}{{$arPet->avatar}} 300w, {{$PIC_URL}}{{$arPet->avatar}} 150w, {{$PIC_URL}}{{$arPet->avatar}} 180w, {{$PIC_URL}}{{$arPet->avatar}} 600w, {{$PIC_URL}}{{$arPet->avatar}} 350w, {{$PIC_URL}}{{$arPet->avatar}} 614w" sizes="(max-width: 300px) 100vw, 300px" />
                          </figure>
                          <div class="kf_pet_cam_des">
                            <h5>
                              <a href="{{route('petfinder.petfinder.petdetail', ['id' => $pet_id])}}">{{$arPet->pet_name}}</a>
                            </h5>
                            <p><?php echo str_limit($arPet->discription,40); ?></p>
                            <span>
                              <i class="fa fa-plus"></i>
                            </span>
                          </div>
                          <div class="kf_pet_cam_hover">
                            <a href="{{route('petfinder.petfinder.petdetail', ['id' => $pet_id])}}">
                              <i class="icon-rabbit5"></i>
                            </a>
                            <p><?php echo str_limit($arPet->discription,80); ?></p>
                          </div>
                          <div class="kf_pet_cam_hover_hdg">
                            <h5>
                              <a href="{{route('petfinder.petfinder.petdetail', ['id' => $pet_id])}}">SEE MORE</a>
                            </h5>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
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