<?php
  //Lay du lieu nguoi dung
  $breed  = $_POST["abreed"];
  $age    = $_POST["aage"];
  $gender = $_POST["agender"];
  $city   = $_POST["acity"];
?>

<div class="result_ajax">
  <div role="form" class="wpcf7" id="wpcf7-f633-o1" lang="en-US" dir="ltr">
    <div class="screen-reader-response"></div>
    <form action="/wp-demo/petcare/#wpcf7-f633-o1" method="post" class="wpcf7-form" novalidate="novalidate">

      <div class="kf_pet_appointment_wrap">
        <div class="row">
          <div class="col-md-2">
            <div class="kf_pet_field">
              <span class="wpcf7-form-control-wrap text-628">
                <p class="finder-title">BREED</p>
                <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
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
                <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
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
                <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
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
                <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
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
                <select class="form-control" name="gender" id="gender" required="true" style="width: 100%;">
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
              <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" />
            </div>
          </div>
        </div>
      </div>
      <div class="wpcf7-response-output wpcf7-display-none"></div>
    </form>
  </div>
</div>