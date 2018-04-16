<?php 
  require_once $_SERVER['DOCUMENT_ROOT'].'/function/dbconnect.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/function/defines.php';
 ?>
<?php
	//Lay du lieu nguoi dung
    $username = $_POST["ausername"];
    $queryUser = "SELECT * FROM users WHERE username = '{$username}' ";
     $resultUser = $connect->query($queryUser);
     if ($arUser = mysqli_fetch_assoc($resultUser)) {
         $idUser = $arUser['id_user'];
     }
     

    $email = $_POST["aemail"];
    $website = $_POST["awebsite"];
    $content = $_POST["acontent"];
    $date_create = date("Y-m-d H:i:s");
	$idnew = $_POST["aidnew"];
	$queryAddComment = "INSERT INTO comments(content,id_user,date_create,parent_id,id_new,status)
                        VALUES ('{$content}','{$idUser}','{$date_create}','0',{$idnew},'0') ";
	 $resultAddComment = $connect->query($queryAddComment);

?>

 <div class="result_comment row" id="result_comment" >
            <div class="col-md-2 col-sm-2 hidden-xs" >
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg">
                <figcaption class="text-center"><?php echo $username; ?></figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10" >
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> <?php echo $username; ?></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo $date_create; ?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                      <?php echo $content; ?>
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </div>