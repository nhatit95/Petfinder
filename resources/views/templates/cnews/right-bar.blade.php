<br>
    <!--Sidebar Start-->
<div class="col-md-4 top3">
  <!-- Blog Categories Well -->
  <div class="well">
        <h4>Tìm kiếm</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
            </button>
            </span>
        </div>
        <!-- /.input-group -->
    </div>
  <div class="well">
      <h2>Danh Mục</h2>
      <div class="row">
          <div class="col-lg-6">
              <ul class="list-unstyled">
                @foreach($arCats as $arCat)
                  <?php
                    $id_cat = $arCat->id_cat;
                    $name = $arCat->name;
                    $slug = str_slug($name);
                    $url = route('cnews.news.cat', ['slug' => $slug, 'id' => $id_cat]);
                  ?>
                  <li style="margin-left: 20px"><a style="font-size: 18px; font-weight: bold; line-height: 35px; " href="{{$url}}">{{ $name }}</a></li>
                @endforeach
              </ul>
          </div>
      </div>
      <!-- /.row -->
  </div>

  <div class="well">
    <div class="article">
        <h2>Bài viết mới nhất</h2>
        @foreach($arItems as $arNewItem)
        <?php
            $newsName = str_limit($arNewItem->name, 50)."...";
            $newsPic = $arNewItem->picture;
            $newsPreview = str_limit($arNewItem->preview_text, 100)."...";
            $picture = $arNewItem->picture;
            $picUrl    =   asset('storage/app/files/'.$picture);

        ?>
        <div class="clr"></div>
        <div class="row">
            <div class="comment col-md-12"> 
              <a href="{{ $url }}" >
                    <img src="{{$picUrl}}" class="img-circle col-md-4" style="margin-top: 20px" class="userpic" alt="" width="80px" height="80px" />
              </a>
              <div class="detail-content col-md-8">
                <h4><a href="{{$url}}">{{$newsName}}</a></h4>
                <p class="lq-des">{{$newsPreview}}</p>
              </div>
              <div class="clr"></div>
            </div>
        </div>
        @endforeach
      </div>
</div>

</div>

  </div>

</div>
 <!--Sidebar End-->