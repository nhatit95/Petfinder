
<div class="fle-xsel">
    <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
    <ul id="flexiselDemo3" class="nbs-flexisel-ul" style="left: -205.2px; display: block;">
    	@foreach($advertisements as $ads)
        <?php 
            $name = $ads->name;
            $link = $ads->link;
            $picture = $ads->picture;
         ?>
        <li class="nbs-flexisel-item" style="width: 205.2px;">
          <a href="{{$link}}" target="_blank">
              <div class="banner-1">
                  <img src="/storage/app/files/{{$picture}}" class="img-responsive" alt="Clean Code">
              </div>
          </a>
        </li>
        @endforeach
    </ul>
    <div class="nbs-flexisel-nav-left" style="top: 51.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 51.5px;"></div></div></div></div>

    <script type="text/javascript" src="{{$publicUrl}}js/jquery.flexisel.js"></script>
    <div class="clearfix"> </div>
<!--Footer Start-->
<footer>
    <div class="col-lg-12 top2 bottom2">
    	<div class="text-center">Copy Right &copy; 2015.Design By <a href="http://www.themesrefinery.net/"><i class="fa  fa-file-code">NhatIT</i></a></div>
    </div>
</footer>
<!--Footer End-->
</div>
<!--Main Body End-->
</body>
</html>