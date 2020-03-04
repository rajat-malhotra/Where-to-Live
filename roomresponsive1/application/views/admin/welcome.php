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
        .jssora12r:hover { background-position: -195px -37px; }z
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>


<body> 
       <div class="col-lg-12" style="height: 600px; width:100%; background: url(assets/images/first.jpg) no-repeat; background-size:100% 600px;padding-bottom:0px;">
    
       <nav class="navbar navbar-default">
     <div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-WTL-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
         <a class="navbar-brand" href="#">
   <img src="assets/images/logo_2.png" width="150px" height="100px"> </a>
      
       
    </div>
        <div class="collapse navbar-collapse" id="bs-WTL-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right" style="float:right;" >
              <li>
              <div class="col-lg-1 col-md-4 space-top-lg-5 space-top-md-4">  
     <img src="assets/images/login.png" width="30px" height="30px">
</div> 
            </li>
             <li><div class="col-lg-1 col-md-4 col-md-pull-2 col-lg-pull-1 space-top-lg-6 space-top-md-5"> 
             <a href=""> <h5 style="color:white">Login </h5>
              </a>
                </div>
                </li>
              <li>
                 <div class="col-lg-2 col-md-4 space-top-lg-5 space-top-md-4">
                       <a href="/rooms/new">
                      <span class="btn btn-primary">
                          Become a Host
                            </span>
                         </a>
                     </div></li>
              <li><div class="col-lg-2 col-md-4 space-top-lg-5 space-top-md-4">
                    <a href="/rooms/list">
                  <span class="btn btn-primary">Find a Place </span>
  </a>
</div> </li>
         
      </ul>
        </div>
     </div>    
   </nav>
        <div class="center col-lg-12 text-center">
     <h3 style="font-family:Harlow Solid Italic;font-decoration:italic; font-size:35px; color:#FFF; vertical-align:center;">Make the most of your spare place</h3>   
   </div>
</div>


       <div class="col-lg-12">
            <div class="section-intro text-center row-space-6 row-space-top-8 col-lg-12 col-md-12 col-sm-12" >
       <h2 class="row-space-1" style="color:Grey;font-size:30px ;text-align:center;">Explore your Dream Home</h2>
      </div> 
      
     <div class="host space-sm-1 col-lg-4 col-md-5 col-sm-12 col-lg-offset-1">
             <div class="hosting col-sm-12 text-center" style="center text-center">

             <h4 style="color:grey">Hosting provide a whole New World of Oppurtunities</h4>
        
      <div>
  <div class="col-sm-12  col-md-12 col-xs-6 btn btn-primary btn-lg" type="button">
    Lets see What you can Earn <!--<span class="caret"></span>-->
  </div>
 </div>
  
</div>
</div>
          <div class="slider col-lg-7 col-md-7 col-sm-12">
          <div  id="jssor_1" style="padding-left:300px; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; visibility: hidden;">
        <!-- Loading Screen-->
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
      <!--   Arrow Navigator  -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
     </div>  
        
</div>
 
      <div class="panel panel-dark no-border-top">
<div id="discovery-container">
<div id="discovery-saved-searches" class="discovery-section hide page-container-responsive page-container-no-padding"> </div>
<div id="weekend-recommendations" class="discovery-section hide page-container-responsive page-container-no-padding"> </div>
<div id="discover-recommendations" class="discovery-section page-container-responsive page-container-no-padding row-space-6">

<div class="section-intro text-center row-space-1 row-space-top-8">
<h2 class="row-space-1">
<strong>Alluring Provinces of Canada</strong>
</h2>
<p class="text-lead"> Have an access to wonderful places in canada. </p>
</div>
<div class="discovery-tiles">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/ontario_2.jpeg');">
<a class="link-reset" data-id="New York" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Ontario</strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/Quebec.jpg');">
<a class="link-reset" data-id="New York" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Quebec</strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/saskatchewan.jpg');">
<a class="link-reset" data-id="New York" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Saskatchewan</strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/novascotia.jpg');">
<a class="link-reset" data-id="" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Nova Scotia</strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/Alberta.jpg');">
<a class="link-reset" data-id="Paris" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Alberta </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm row-space-4">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/manitoba.jpg');">
<a class="link-reset" data-id="Barcelona" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> manitoba </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm row-space-4">
<div class="">
<div class="darken-on-hover-container">
<a class="text-normal link-reset" href="/rooms/492596">
<div class="discovery-card darken-on-hover discovery-listing" style="background-image:url('assets/images/housing1.jpg')">
<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
<sup class="h6 text-contrast"></sup>
<span class="h3 price-amount"> </span>
<sup class="h6 text-contrast"> </sup>
</div>
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="media-photo media-round row-space-2 card-profile-picture">
<img src="assets/images/rajat1.jpg" width="50" height="50" src="#" alt="Original">
</div>
<div class="h3 strong">Hosted by Rajat Malhotra</div>
<div>Canada</div>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/britishcolumbia.jpg');">
<a class="link-reset" data-id="London" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> British Columbia </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/newfoundland.jpg');">
<a class="link-reset" data-id="San Francisco" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> New FoundLand </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm ">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/island.jpg');">
<a class="link-reset" data-id="Berlin" data-hook="discovery-card" href="/s/Berlin-Germany?source=ds">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Edward Island </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm ">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/newbrunswick2.jpg');">
<a class="link-reset" data-id="Budapest" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Fall in love in Newbrunswick </strong>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm ">
<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " data-sm-img-url="#" style="background-image:url('assets/images/otherterritories.jpg');">
<a class="link-reset" data-id="Budapest" data-hook="discovery-card" href="#">
<div class="va-container va-container-v va-container-h">
<div class="va-middle text-center text-contrast">
<div class="h2">
<strong> Other Territories</strong>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer" style="height: 400px; width:100%; background-image:url('assets/images/footerback1.jpg'); background-size:100% 400px; position:absolute; margin-left:auto; margin-right:auto; no-repeat; width:100%;">
<div class="upper">
<div class="col-lg-push-0 col-md-push-0 col-lg-3 col-md-3 col-sm-3  hide-sm row-space-top-5">
<h3>Company</h3>
<ul class="WTL">
<li><a href="#">About Where To Live</a></li>
<li><a href="#">WTL Blog </a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Press</a></li>
<li><a href="#">Help</a></li>
<li><a href="#">WTL Scam Security Center</a></li>
<li><a href="#">Contact Us </a></li>
</ul>
</div>

<div class="col-lg-3 col-md-push-0 col-lg-push-0 col-md-3 col-sm-3 hide-sm row-space-top-5">
<h3>Legal bits</h3>
<ul class="WTL1">
<li><a href="#">  Terms of Use</a></li>
<li><a href="#"> Privacy Policy </a></li>
<li><a href="#">Posting Policy </a></li>
<li><a href="#">Cookie Policy </a></li>
<li><a href="#">Money Policy </a></li>
<li><a href="#">Withdraw/Deposit </a></li>
</ul>
</div>

<div class="col-lg-3 col-md-push-0 col-lg-push-0 col-md-3 col-sm-3 hide-sm row-space-top-5">
<h3>Business</h3>
<ul class="WTL2">
<li><a href="#"> Land Dealers</a></li>
<li><a href="#">House Dealers </a></li>
<li><a href="#">LandLords</a></li>
<li><a href="#">Tenants</a></li>
<li><a href="#">How To Buy </a></li>
<li><a href="#">How To Sell </a></li>
<li><a href="#">How to send Money </a></li>
<li><a href="#">How to withdraw money </a></li>
<li><a href="#">Help</a></li>
</ul>
</div>

<div class="col-lg-push-0 col-md-push-0 col-lg-3 col-md-3 col-sm-3 hide-sm row-space-top-5">
<h3>Lending </h3>
<ul class="WTL3">
<li><a href="#"> Why to Lend</a></li>
<li><a href="#"> Oppurtunities </a></li>
<li><a href="#"> Make Money </a></li>
<li><a href="#">Home Safety </a></li>
<li><a href="#">Hospitality </a></li>
<li><a href="#"> Instant Book</a></li>

</ul>
</div>

</div>
<div class="lower text-center space-sm-top-8 col-lg-12 col-md-12 space-lg-top-5 col-xs-12 row-space-top-2">
<div class="hide-lg hide-md col-sm-12">
<ul id="my-list">
<li><a href="#">About WTL</a></li>
<li><a href="#">WTL Blog </a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Press</a></li>
<li><a href="#">Help</a></li>
<li><a href="#">Contact Us </a></li>
</ul>
</div>

<div class="follow">
<h3>Follow Us On</h3>
</div> 

<div class="col-lg-8 col-md-6 col-sm-12 col-md-offset-3 col-lg-offset-4">
<div class="col-lg-1 col-md-2 col-sm-2 "><a href="#"><img src="assets/images/facebook1.png" style="width:35px; height:35px;"></a></div>
<div class="col-lg-1 col-md-2 col-sm-2 "><a href="#"><img src="assets/images/twitter1.png" style="width:35px; height:35px;"></a></div>
<div class="col-lg-1 col-md-2 col-sm-2 "><a href="#"><img src="assets/images/linkedin1.png" style="width:35px; height:35px;"></a></div>
<div class="col-lg-1 col-md-2 col-sm-2"><a href="#"><img src="assets/images/googlefinal.png" style="width:35px; height:35px;"></a></div>
<div class="col-lg-1 col-md-2 col-sm-2"><a href="#"><img src="assets/images/youtube.png" style="width:35px; height:35px;"></a></div>
<div class="col-lg-1 col-md-2 col-sm-2"><a href="#"><img src="assets/images/instagram1.png" style="width:35px; height:35px;"></a></div>
</div>
<div> 
</div>
</div>
<div class="trademark text-center">
<h6> © WhereToLive, Inc. </h6>
</div>
</div>
</body>
 
<?php include_once('admin_footer.php');?>
</html>
