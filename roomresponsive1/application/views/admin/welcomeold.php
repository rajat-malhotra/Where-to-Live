<!DOCTYPE html>
<html>


<?php include_once('admin_header.php');?>


 <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('assets/images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('assets/images/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>


<body class="body"> 
     <div class="container" style="height: 600px; width:100%; background: url(assets/images/first.jpg) no-repeat; background-size:100% 600px;padding-bottom:0px;">
   <div class="col-lg-2 topleft ">  <a href="<?= base_url(); ?>">
   <img src="assets/images/logo2.png" width="200px" height="100px" align="left-corner" >
   </a>  
   </div>

     <div class="topright" align="right-upper-corner">  <a href="">
     <h5 align="right" style="color:white"><img src="<?=base_url()?>assets/images/login.png" width="30px" height="30px">Login </h5>
  
  </div>
   <div class="center">
     <h3 style="font-family:Harlow Solid Italic;font-decoration:italic; font-size:40px; color:#FFF; align-center;">Make the most of your spare place</h3>   
   </div>

<div class="host" >
  
  <a href="/rooms/new" class="btn btn-primary btn-sm">
    <span class="btn btn-primary btn-sm">
      Become a Host
    </span>
  </a>
</div>


<div class="seeker">
  
  <a href="/rooms/list" class="btn btn-primary btn-sm">
    <span class="btn btn-primary btn-sm">
      Find a Place
    </span>
  </a>
</div>
</div>


<div class="welcome">
     <table >
      <tr style="width:100%">
        <div class="explore" style="position:relative;" >
       <h2 style="color:Grey;font-size:30px ;text-align:center;">Explore your Dream Home</h2>
      </div> 
      </tr>       
 
       <tr style="width:100%; height:400px;">
       <td style="padding:0px; width:60% ">  

    <div id="jssor_1" style="padding-left:0px; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/images/ontario1.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/images/ontario3.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/images/ontario4.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="assets/images/ontario_2.jpeg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
      </td>
       <td style="align:left;">

             <div class="hosting">

             <h4>Hosting provide a whole new World of Oppurtunities</h4>
        <div class="btn-group btn-group-justified" style="width:300px; align:center; ">
      
  <a href="#" class="btn btn-default btn-lg">Lets see What you can Earn</a>
  </div>
</div>
</td>
</tr>
</table>
</div>
</body>
           <div class="province col-lg-10">
          <div class="mainProvinces">
                <article class="tagline">
             <h3>Alluring Provinces of Canada 
              </h3>
         </article>
         </div>
     
             <div class="ontario">
             <a href="#">
                  <img src='assets/images/ontario_2.jpeg'>
              </img>
              <h2 class="text">Ontario</h2>
             
             </a>  </div>



             <div class="Quebec">
             <a href="#">
             <img src='assets/images/Quebec.jpg'>
              </img>
               <h2 class="text">Quebec</h2>
               </a>
              </div>
         

              <div class="British">
              
              <a href="#">
               <img src='assets/images/britishcolumbia.jpg'>
              </img>
                 <h2 class="text">British Columbia</h2>
                 </a>
                 </div>
  
                <div class="Alberta" style="background: url('assets/images/alberta1.jpg') no-repeat;">
                 <a href="#">
                     <img src='assets/images/alberta1.jpg'>
              </img> 
                  <h2 class="text">Alberta</h2></a>
                 </div>
        
            <div class="NovaScotia">
            <a href="#">
              <img src='assets/images/novascotia.jpg'>
              </img>
                   <h2 class="text">Nova scotia</h2>
                </a> </div>

                
                <div class="manitoba">
                  <a href="#">
                  <img src='assets/images/manitoba.jpg'>
              </img>
                  <h2 class="text">Manitoba</h2>
               </a>  </div>
                  
                
                <div class="newfoundland">
                 <a href="#">
                  <img src='assets/images/newfoundland.jpg'>
              </img>
                  <h2 class="text">Newfoundland and Labrador</h2>
                </a> </div>

                  <div class="island">
                  
                  <a href="#"></a>
                  <img src='assets/images/island.jpg'>
              </img>
                  <h2 class="text">Edward Island</h2>
            </a>     </div>
                       
                       <div class="saskatchewan">
                       <a href="#">
                  <img src='assets/images/saskatchewan.jpg'>
              </img>
                  <h2 class="text">saskatchewan</h2>
               </a>  </div>

                 <div class="newbrunswick">
                 <a href="#">
                  <img src='assets/images/newbrunswick.jpg'>
              </img>
                  <h2 class="text">newbrunswick</h2>
                 </a></div>
        </div>
      <div>
<form id="homepage_search" method="post">
<fieldset>
<input id="homepage_location" type="text" placeholder="City, Suburb, Postcode" name="loc">
<div id="search_mode" class="rooms">
<a class="rooms" href="/">
<span>
Rooms
<span> to rent</span>
▾
</span>
</a>
<a class="roommates" href="/roommates">
<span>Flatmates ▾</span>
</a>
</div>
<input type="image" alt="Search" src="https://img.flatmates.com.au/img/interface/magnifying-glass.png?c=2">
</fieldset>
</form>
      </div>

html body.room_results.gallery div#photostrip form#homepage_search fieldset input#homepage_location
<?php include_once('admin_footer.php');?>
</html>