@extends('templates.petfinder.master')
@section('content')
<hr />
<hr />
<div class="wrapper1">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper1">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center; ">
        
      </h1><!-- 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div style="text-align: center;">
                <a href="#" id="no-active-btn-shopping">
                   <img style="width: 200px; height: 200px;" src="{{$PIC_URL}}{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
                </a>
              </div>

              <h3 class="profile-username text-center" style="font-size: 22px; "><strong>{{Auth::user()->username}}</strong></h3>

              <p class="text-muted text-center">{{Auth::user()->fullname}}</p>

              <ul class="list-group list-group-unbordered" id="profile_content">
                <li class="list-group-item">
                  <b>{{Auth::user()->email}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->birthday}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->phone_number}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->gender}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->status}}</b> <a class="pull-right"></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <hr />
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#message" data-toggle="tab">Notifications</a></li>
              <li ><a  href="#yourpet" data-toggle="tab">Your Pets</a></li>
              <li ><a href="#post" data-toggle="tab">Your Posts</a></li>
              <li ><a href="#event" data-toggle="tab">Your Events</a></li>
              <li ><a  href="#settings" data-toggle="tab">Update Informations</a></li>
            </ul>
            <div class="tab-content">
              
              <div class="active tab-pane" id="message">
                <div class="">
                  <div class="">
                      <div class="">
                        <h3 class="">List of Notifications</h3>
                        <hr>
                            @if(Session::has('msg'))
                              <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('msg') }}
                              </div>
                            @endif
                            <p style="text-align: center;">
                              <a href="{{route('petfinder.profile.messageadd')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                                <button type="button" class="btn bg-green1 margin">Creat a new item</button>
                              </a>
                            </p>

                      </div>
                          <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Title</th>
                        <th>Activity</th>
                        <th>From</th>
                        <th>To</th>
                        <th >Content</th>
                        <th style="width: 10%">Time</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($arMessages as $arMessage)
                          @php
                            $mess_id      = $arMessage->mess_id;
                            $from_id      = $arMessage->from_id;
                            $to_id        = $arMessage->to_id;
                            $activity     = $arMessage->activity;
                            $mess_title   = $arMessage->mess_title;
                            $mess_content = $arMessage->mess_content;
                            $create_at    = $arMessage->create_at;
                            $urlDel       = route('petfinder.profile.messagedel', [$mess_id]);
                          @endphp
                        <tr>
                          <td>{{$mess_title}}</td>
                          <td><?php echo $activity;  ?></td>
                          @foreach($arUsers as $arUser)
                            @if($from_id  == $arUser->id)
                                @if($arUser->fullname == Auth::user()->fullname)
                                  <td >
                                      <strong style="color: #black">{{$arUser->fullname}}</strong>
                                  </td>
                                @else 
                                  <td >
                                    <a href="{{route('petfinder.profile.guestprofile', ['id' => $arUser->id])}}">
                                      <strong style="color: red">{{$arUser->fullname}}</strong>
                                    </a>
                                    <i class="fa fa-reply" style="padding-left: 11px;"></i>
                                  </td>
                                @endif

                            @endif
                          @endforeach

                          @foreach($arUsers as $arUser)
                            @if($to_id  == $arUser->id)
                                @if($arUser->fullname == Auth::user()->fullname)
                                  <td >
                                      <strong style="color: #black">{{$arUser->fullname}}</strong>
                                  </td>
                                @else 
                                  <td>
                                    <a href="{{route('petfinder.profile.guestprofile', ['id' => $arUser->id])}}">
                                      <i class="fa fa-reply" style="padding-right: 11px;"></i>
                                      <strong style="color: red">{{$arUser->fullname}}</strong>
                                    </a>
                                  </td>
                                @endif
                            @endif
                          @endforeach

                          
                           
                          <td>
                            <a href="#" data-toggle="modal" data-target="#{{$mess_id}}">
                              <i class="fa fa-folder-open-o" style="padding-top: 7px; float: left;    padding-right: 11px;"></i>
                              <?php echo (str_limit($mess_content, 15)); ?>
                            </a>

                          </td>
                            
                          <div class="modal fade" id="{{$mess_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Contents</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <?php echo (($mess_content)); ?>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <td>{{$create_at}}</td>
                          <td>
                            <a href="{{$urlDel}}"> <button type="button" class="btn bg-red margin">Del</button> </a>
                          </td>
                        </tr>
                        @endforeach
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              </div>

              <div class="tab-pane" id="event">
                  <div class="">
                    <div class="">
                        <div class="">
                          <h3 class="box-title">List of Events</h3>
                          <hr />
                              @if(Session::has('msg'))
                                  <p class="alert alert-success">{{ Session::get('msg') }}</p>
                              @endif                              
                        </div>
                            <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Event ID</th>
                          <th>Event name</th>
                          <th>Category</th>
                          <th>Host</th>
                          <th>Time</th>
                          <th>Avatar</th>
                          <th>Location</th>
                          <th>Price</th>
                          <!-- <th>Content</th> -->
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($arEvents as $arEvent)
                            @php
                              $event_id   = $arEvent->event_id;
                              $event_name = $arEvent->event_name;
                              $cat_id     = $arEvent->cat_id;
                              $user_id    = $arEvent->user_id;
                              $time       = $arEvent->time;
                              $avatar     = $arEvent->avatar;
                              $location   = $arEvent->location;
                              $price      = $arEvent->price;
                              $content    = $arEvent->content;
                              $status     = $arEvent->status;
                              $picUrl     = asset('/storage/app/files/'.$avatar);
                              $nopicUrl   = asset('/storage/app/files/nopic.jpg');
                              $urlEdit    = route('admin.event.edit', [$event_id]);
                              $urlDel     = route('admin.event.del', [$event_id]);
                            @endphp
                          <tr>
                            <td>{{$event_id}}</td>
                            <td>{{$event_name}}</td>
                            @foreach($arEventCats as $arEventCat)
                              @if($cat_id  == $arEventCat->cat_id)
                                  <td >{{$arEventCat->cat_name}}</td>
                              @endif
                            @endforeach
                            @foreach($arUsers as $arUser)
                              @if($user_id  == $arUser->id)
                                  <td >{{$arUser->username}}</td>
                              @endif
                            @endforeach

                            <td>{{$time}}</td>
                            <td>
                                @if($avatar == '')
                                    <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                                @else
                                    <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                                @endif
                            </td>
                            <td>{{$location}}</td>
                            <td>{{$price}}</td>
                            <!-- <td>{{$content}}</td> -->
                            <td>{{$status}}</td>

                            <td>
                              <a href="{{$urlEdit}}"> <button type="button" class="btn bg-green1 margin">Edit</button> </a>              
                            </td>
                            <td>
                              <a href="{{$urlDel}}"> <button type="button" class="btn bg-red margin">Del</button> </a>
                            </td>
                          </tr>
                          @endforeach
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
              </div>


              <div class="tab-pane" id="post">
                <div class="">
                  <div class="">
                      <div class="">
                        <h3 class="box-title">List of Your Posts</h3>
                        <hr>
                            @if(Session::has('msg'))
                                <p class="alert alert-success">{{ Session::get('msg') }}</p>
                            @endif
                            <p style="text-align: center;">
                              <a href="{{ route('petfinder.profile.postadd') }}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                                <button type="button" class="btn bg-green1 margin">Creat a new item</button>
                              </a>
                            </p>

                      </div>
                          <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Post ID</th>
                        <th>Post Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Discription</th>
                        <th>Avatar</th>
                        <th>Create at</th>
                        <th>Update at</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($arPosts as $Post)
                          @php
                            $post_id     = $Post->post_id;
                            $post_name   = $Post->post_name;
                            $cat_id      = $Post->cat_id;
                            $user_id     = $Post->user_id;
                            $discription = $Post->discription;
                            $avatar      = $Post->avatar;
                            $create_at   = $Post->create_at;
                            $update_at   = $Post->update_at;              
                            $status      = $Post->status;
                            $picUrl      = asset('/storage/app/files/'.$avatar);
                            $nopicUrl    = asset('/storage/app/files/nopic.jpg');
                            $urlEdit     = route('petfinder.profile.postedit', [$post_id]);
                            $urlDel      = route('petfinder.profile.postdel', [$post_id]);
                          @endphp
                        <tr>
                          <td>{{$post_id}}</td>
                          <td>{{$post_name}}</td>
                          @foreach($arPostCats as $arPostCat)
                            @if($cat_id  == $arPostCat->cat_id)
                                <td >{{$arPostCat->cat_name}}</td>
                            @endif
                          @endforeach
                          @foreach($arUsers as $arUser)
                            @if($user_id  == $arUser->id)
                                <td >{{$arUser->username}}</td>
                            @endif
                          @endforeach

                          <!-- <td>
                            <p><?php echo str_limit($discription,50); ?></p>
                          </td> -->

                          <td>
                              @if($avatar == '')
                                  <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                              @else
                                  <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                              @endif
                          </td>
                          <td>{{$create_at}}</td>
                          <td>{{$update_at}}</td>
                          <td>{{$status}}</td>

                          <td >
                            <a href="{{$urlEdit}}"> <button type="button" class="btn bg-green1 margin">Edit</button> </a>              
                          </td>
                          <td>
                            <a href="{{$urlDel}}"> <button type="button" class="btn bg-red margin">Del</button> </a>
                          </td>
                        </tr>
                        @endforeach
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="yourpet">

                <div class="">
                  <div class="">
                      <div class="">
                        <h3 class="">List of Your Pets</h3>
                        <hr>
                            @if(Session::has('msg'))
                                <p class="alert alert-success">{{ Session::get('msg') }}</p>
                            @endif
                            <p style="text-align: center;">
                              <a href="{{route('petfinder.profile.petadd')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                                <button type="button" class="btn bg-green11 margin">Creat a new item</button>
                              </a>
                            </p>

                      </div>
                          <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Pet ID</th>
                        <th>Pet Name</th>
                        <th>Breed</th>
                        <th>Owner</th>
                        <th>Age</th>
                        <th>Avatar</th>
                        <th>Gender</th>
                        <th>City</th>
                        <!-- <th>Addres</th>
                        <th>Map_coordinates</th>
                        <th>Status</th> -->
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($arPets as $Pet)
                          @php
                            $pet_id          = $Pet->pet_id;
                            $pet_name        = $Pet->pet_name;
                            $cat_id          = $Pet->cat_id;
                            $user_id         = $Pet->user_id;
                            $age             = $Pet->age;
                            $avatar          = $Pet->avatar;
                            $gender          = $Pet->gender;
                            $city            = $Pet->city;
                            $address         = $Pet->address;
                            $map_coordinates = $Pet->map_coordinates;
                            $discription     = $Pet->discription;
                            $status          = $Pet->status;
                            $picUrl          = asset('/storage/app/files/'.$avatar);
                            $nopicUrl        = asset('/storage/app/files/nopic.jpg');
                            $urlEdit         = route('petfinder.profile.petedit', [$pet_id]);
                            $urlDel          = route('petfinder.profile.petdel', [$pet_id]);
                          @endphp
                        <tr>
                          <td>{{$pet_id}}</td>
                          <td>{{$pet_name}}</td>
                          @foreach($arPetCats as $arPetCat)
                            @if($cat_id  == $arPetCat->cat_id)
                                <td >{{$arPetCat->cat_name}}</td>
                            @endif
                          @endforeach
                          @foreach($arUsers as $arUser)
                            @if($user_id  == $arUser->id)
                                <td >{{$arUser->username}}</td>
                            @endif
                          @endforeach

                          <td>{{$age}}</td>
                          <td>
                              @if($avatar == '')
                                  <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                              @else
                                  <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                              @endif
                          </td>
                          <td>{{$gender}}</td>
                          <td>{{$city}}</td>
                        <!--   <td>{{$address}}</td>
                          <td>{{$map_coordinates}}</td>
                          <td>{{$status}}</td> -->

                          <td>
                            <a href="{{$urlEdit}}"> <button type="button" class="btn bg-green11 margin">Edit</button> </a>              
                          </td>
                          <td>
                            <a href="{{$urlDel}}"> <button type="button" class="btn bg-red margin">Del</button> </a>
                          </td>
                        </tr>
                        @endforeach
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <?php 
                  $id = Auth::user()->id; 
                  $avatar =  Auth::user()->avatar;
                ?>
                <div class="">
                  <h3 class="" >Update yout information</h3>
                  <hr>
                      @if(Session::has('msg'))
                          <p class="alert alert-success">{{ Session::get('msg') }}</p>
                      @endif
                      <p style="text-align: center;">
                        <a href="{{route('petfinder.profile.petadd')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                        </a>
                      </p>

                </div>
                <form role="form" action="{{ route('admin.user.edit', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" class="form-control" required="true" name="username" id="username" value="{{Auth::user()->username}}">
                            </div>

                            <div class="form-group">
                              <label for="">Full of name</label>
                              <input type="text" class="form-control" required="true" name="fullname" id="fullname" value="{{Auth::user()->fullname}}">
                            </div>

                            <div class="form-group">
                              <label for="">New Password</label>
                              <input type="password" class="form-control"  name="new_password" id="new_password" placeholder="Enter password">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" required="true" name="email" id="email" value="{{Auth::user()->email}}"/>
                            </div>

                            <div class="form-group">
                                <label>Phone number</label>

                                <input type="tel" required="true" pattern="^[0-9-+s()]*$" name="phone_number" id="phone_number" style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important height: 36px !important; padding: 10px; margin-left: 10px;" value="{{Auth::user()->phone_number}}">
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender" required="true" style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important; height: 40px !important; margin-left: 10px;">
                                  <option selected="selected">Man</option>
                                  <option>Woman</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Birthday</label>

                                <div class="form-group">                                
                                  <input style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important; height: 36px !important; padding: 10px; margin-left: 10px;" type="date" id="birthday" name="birthday" class="form-control" value="{{Auth::user()->birthday}}">
                                </div>
                                <!-- /.input group -->
                              </div>
                                             
                            <div class="form-group">
                                <label>Choose a new picture</label>
                                <input type="file" name="newPicture" placeholder="Choose your picture" value="Choose your picture" />
                            </div>
                            <div class="form-group">
                                <label>Your current picture</label> <br />
                                <img src="{{ asset('storage/app/files/'.$avatar) }}" name="oldPicture" width="30%" height="30%">
                            </div>

                            </div>
                          <!-- /.box-body -->

                          <div class="box-footer" style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>

                          <input  type="hidden" class="form-control"  name="role" id="role" value="2">
                          <input  type="hidden" class="form-control"  name="status" id="status" value="Actived">
                          <input  type="hidden" class="form-control"  name="check" id="check" value="member">

                        <div class="clearfix"></div>
                    </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green11"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop