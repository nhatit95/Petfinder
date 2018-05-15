<?php
  use Illuminate\Support\Facades\DB;
  use App\Http\Model\Admin\Pet;

  $breed  = $_POST["abreed"];
  $age    = $_POST["aage"];
  $gender = $_POST["agender"];
  $city   = $_POST["acity"];
  


?>

<div id="postRequestData">
  @foreach($arOtherPets as $arPet)
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


            <script type="text/javascript" src="public/bower_components/jquery/dist/jquery.js"></script>
            <script type="text/javascript">
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
              });

              $(document).ready(function(){
                $('#getRequest').click(function(){

                  // $.get('getRequest', function(data){
                  //   $('#getRequestData').append(data);
                  // });
                  $.ajax({
                    type: "POST",
                    url: "getRequest",
                    success: function(data){
                      console.log(data);
                      $('#getRequestData').html(data);
                    }
                  });

                });

                $('#register').submit(function(){
                  var breed  = $('#breed').val();
                  var age    = $('#age').val();
                  var gender = $('#gender').val();
                  var city   = $('#city').val();

                  // $.post('register', {firstname:fname, lastname:lname}, function(data){
                  //   console.log(data);
                  //   $('#postRequestData').html(data);
                  // });
                  
                  $.ajax({
                    url: "/resources/views/petfinder/petfinder/result_ajax.php",
                    // url: '/rooms/ajax/'+breed,
                    type: 'POST',
                    // dataType: 'json',
                    data: {abreed: breed, aage: age, agender: gender, acity: city},
                    success: function(html){
                      $('#postRequestData').html(html);
                    },
                    error: function (){
                        alert('Có lỗi xảy ra');
                    }
                  });

                });

              });
            </script>
