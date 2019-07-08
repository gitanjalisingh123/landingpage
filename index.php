
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
  <meta name="google-site-verification" content="Fh_dHO98PhEAYLXUNSH2UKGJ3JHFukFWVcxCQqoZ_K4"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="msapplication-tap-highlight" content="no"/>
  <meta name="csrf-token" content="PvWShNYMMQuhTLgm0UQZp9dj52+AzIj4Ce0+Q5Q+QxYN2i8I+HfGO47cffn6dmYsEI2v+RiXazKgxhT4g5whYA==" />
  <link rel="stylesheet" media="all" href="https://socrata-crimereports-herokuapp-com.global.ssl.fastly.net/assets/landing-f59771da02a964765775b913260dc3918b4656d68e1e5269e66706baeba528e8.css" />
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic,300,300italic" rel="stylesheet" type="text/css">
  


<!-- For all other devices -->
<!-- Size should be 32 x 32 pixels -->
<link rel="shortcut icon" type="image/x-icon" href="https://www.google.com/search?q=easynirman&rlz=1C1CHBF_enIN785IN785&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiGxvjUv57jAhWIMY8KHXCIDUQQ_AUIFSgA&biw=1366&bih=625#imgrc=imdxup6RHYh5xM:" />

  <script type="text/javascript">
    // To take to map page for links from old alerts email.
    if(window.location && window.location.hash && window.location.hash.indexOf &&
        window.location.hash.indexOf('#!/dashboard') !== -1 
        && window.location.hash.indexOf('fit_to_bounds') !== -1){
      window.location = '/home/' + window.location.hash;

  		
    }	
  </script>
  <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
  <style type="text/css">
    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 2;
    left: 0;
    background:transparent;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 100px;
    margin-top: 65px;
	margin-left: 20px;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: rgb(7, 181, 181);
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    margin-top: 50px; 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.nav-bar ul li ul{

	display: none;
}

.nav-bar ul li:hover > ul{
	display: block;
}
.symbol{
	position: left;
	padding-top: 30px;
	margin-left: 0px;
	color: white;
	float: left;
}
#txt1{
  color:  black;

  display: block;
}
.searchbar{
  margin-top: 55px;
  margin-left: 70px;
  padding-left: 30px;
  width: 600px;
  height: 5px;
}
.imgg{
  margin-top: 80px;
  margin-left: 75px;
  width: 80px;
  height: 200px;
}
.VueCarousel{
  display: flex;
}
.VueCarousel-slide VueCarousel-slide-active{
  float: left;
  width: 33.33%;
  padding: 5px;
}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}

</style>


</head>

<body>
  <header class="banner ">
  <h1 class="logo header-logo">
    <a href="/">
      <img src="logo_80.png" >
      
    </a>
  </h1>

  <button id="showRight" type="button" class="collapsed visible-md visible-sm visible-xs" data-toggle="collapse" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="ui-menu__content">
        <i class="ui-menu__line ui-menu__line_1"></i>
        <i class="ui-menu__line ui-menu__line_2"></i>
        <i class="ui-menu__line ui-menu__line_3"></i>
      </span>
  </button>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="userlogin#">building materials</a>
  <a href="usersign#">doors</a>
  <a href="loginadmin#">paint materials</a>
  <a href="adminsignup#">electricals</a>
</div>



  <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right clearfix" id="side-panel" role="navigation">
    <div class="cr-bug visible-md visible-sm visible-xs"></div>
    <div class="primary-nav">
    	<div class="nav-bar">
      <ul id="menu-primary-navigation" class="menu clearfix">
        <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="new#">Wishlist</a></li>
       
        <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="#" target="_blank">cart</a></li>

        <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="pp.php">About Us</a></li>
        <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="contus.php">Contact Us</a></li>
          
      </ul>
  </div>
    </div>
    <br>
    <br>
    <span  class="symbol" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
    <div class="secondary-nav visible-md visible-sm visible-xs">
      <ul id="menu-secondary-navigation" class="menu">
        <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="/home/#!/terms-of-use">Terms</a></li>
        <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="/home/#!/privacy-policy">Privacy</a></li>
      </ul>
    </div>

    <div class="copyright visible-md visible-sm visible-xs">&copy; 2018 CrimeReports</div>
  </nav>
</header>

  <main class="main" role="main">
    <section class="section-padding hero">
      <div class="text">
       
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-md-offset-1">
            
                <div class="searchbar">
                  <ul>
                   
                    
                    <li>
                      <div role="search">
                        <input name="products" type="text" placeholder="Search desired product" autocomplete="off" aria-label="Search product" id="txt1" onkeyup="showHint(this.value)" />
                         <span id="txtHint" style="color: white;"><br></span></p> 

                         <div class="col-md-3 col-sm-3 col-xs-6 xs_width"><a href="/vendorsdetail/14" class=""></a><div class="profile_image"><div class="seller_profil_detia"><div class="seller_person_img"><img src="https://www.easynirman.com/ecadmin/uploads/service_provider_logo_image/default.png" class="img-responsive seller-img-clss"></div></div><div class="per_selling_details"><div class="sell_detailpagede"><div class="seller_link text-center"><h4>Atul glass &amp; aluminium</h4></div><div class="seller_rating text-center"><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i></div></div></div></div></div>
                         <div class="col-md-3 col-sm-3 col-xs-6 xs_width"><a href="/vendorsdetail/15" class=""></a><div class="profile_image"><div class="seller_profil_detia"><div class="seller_person_img"><img src="https://www.easynirman.com/ecadmin/uploads/service_provider_logo_image/default.png" class="img-responsive seller-img-clss"></div></div><div class="per_selling_details"><div class="sell_detailpagede"><div class="seller_link text-center"><h4>FANCY DIAMOND GLASS</h4></div><div class="seller_rating text-center"><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i></div></div></div></div></div>

                         <div class="col-md-3 col-sm-3 col-xs-6 xs_width"><a href="/vendorsdetail/22" class=""></a><div class="profile_image"><div class="seller_profil_detia"><div class="seller_person_img"><img src="https://www.easynirman.com/ecadmin/uploads/service_provider_logo_image/default.png" class="img-responsive seller-img-clss"></div></div><div class="per_selling_details"><div class="sell_detailpagede"><div class="seller_link text-center"><h4>bangal</h4></div><div class="seller_rating text-center"><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i></div></div></div></div></div>
                         <div class="col-md-3 col-sm-3 col-xs-6 xs_width"><a href="/vendorsdetail/23" class=""></a><div class="profile_image"><div class="seller_profil_detia"><div class="seller_person_img"><img src="https://www.easynirman.com/ecadmin/uploads/service_provider_logo_image/default.png" class="img-responsive seller-img-clss"></div></div><div class="per_selling_details"><div class="sell_detailpagede"><div class="seller_link text-center" style="text-decoration-color: white;"><h4>A-one modular kitchen</h4></div><div class="seller_rating text-center"><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i><i class="fa fa-star rating_star"></i></div></div></div></div></div>

                         
                      
                    </li>
                  </ul>
                </div>
                
                  
                    
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="image" style="background-image: url('0905-construction-art.jpg');"></div>
    </section>

   
    <section class="section-padding video-section">
      <div class="container">
        <div class="row no-gutters horizontal-card">
          <div class="col-sm-6 col-md-7 col-lg-8">
            <div class="col match-height">
              <div class="thumb" style="background-image: url(artwork-jw9H2FOUKhU.png)"></div>
              <button class="video-preview watch-video" data-toggle="modal" data-target="#videoModal">
                <div class="play-button" action="https://yourstory.com/video/story-easy-nirman" >

                  <em aria-role="presentation">&#9658;</em>
                  <span class="sr-only">Watch Video</span>
                </div>
              </button>
            </div>
          </div>
          <div class="modal video-modal" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="video-content modal-content">
                <div class="modal-head">
                  <span class="modal-title">Success stories</span>
                  <button type="button" class="btn video-modal-close close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div>
                    <iframe id="howToUseCrimeReports" width="100%" height="490" src="" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="col match-height">
              <div class="text">
                <h3 class="margin-bottom-15">Success stories</h3>
                
              </div>
              <div class="btn-wrapper">
                <a href="https://yourstory.com/video/story-easy-nirman" class="btn btn-primary btn-block watch-video"
                   data-toggle="modal" data-target="#videoModal">Watch Video</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="catagory_section">
        <div class="container">
          <div class="catagory_sect">
            <h2 class="service_head xl_disply_none">Our Categories</h2>
            <div class="text-center mobil_apliy">
              <span class="service_head hidden-md hidden-sm hidden-lg">Our Catagories</span>
              <span class="pull-right daily_view visible-xs"><a href="/all_categories" class="">View All</a>
              </span>
            </div>
            <section class="VueCarousel">
              <div class="VueCarousel-wrapper">
              <div role="listbox" class="VueCarousel-inner" style="transform: translate(0px, 0px); transition: transform 0.5s ease 0s; flex-basis: 159px; visibility: visible;">
                <div tabindex="-1" class="col-md-3 col-sm-3 col-xs-6 xs_width" style="width:100%;" >
                  <a href="/category/24/Building-Materials" class=""><a href="#"><p class="imge_head_catagory hidden-xs">Building Materials</p>
                    <div class="service_imag text-center catagory_imges" onclick="#">
                    <img src="https://www.easynirman.com/ecadmin/uploads/category_logo_image/category_logo_24.png" class="img-responsive catagory_images"></div>
                    <p class="imge_head_catagory visible-xs">Building Materials</p>
                  </a>
                </a></div>
                <div tabindex="0" class="col-md-3 col-sm-3 col-xs-6 xs_width" style="width:100%;  margin-top: 110.81; ">
                    <a href="/category/25/Door-and-Door-Fittings" class="">
                      <a href="#"><p class="imge_head_catagory hidden-xs ">Door and Door Fittings</p>
                        <div class="service_imag text-center catagory_imges">
                          <img src="https://www.easynirman.com/ecadmin/uploads/category_logo_image/category_logo_25.png" class="img-responsive catagory_images"></div>
                          <p class="imge_head_catagory visible-xs" style="float: right; margin-top: 150px; margin-right: 150px" >Door and Door Fittings</p></a>
                        </a></div>
                          <div tabindex="-1" class="col-md-3 col-sm-3 col-xs-6 xs_width" style="width:100%;">
                            <a href="/category/26/Electrical" class=""><a href="#">
                            <p class="imge_head_catagory hidden-xs">Electrical</p><div class="service_imag text-center catagory_imges">
                              <img src="https://www.easynirman.com/ecadmin/uploads/category_logo_image/category_logo_26.png" class="img-responsive catagory_images"></div>
                              <p class="imge_head_catagory visible-xs">Electrical</p></a></a>
                            </div>
                                   </div>
                                 </section>
                               </div>

       </div>
     </div>
   </section>


    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center section-title">Our Services</h2>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card match-height">
              <div class="thumb" style="background-image:url(125-512.png);">
                <a href="https://legacy.crimereports.com/camera_registration" target="_blank"><span class="sr-only">Timely Deliver</span></a>
              </div>
              <div class="text">
                <strong class="section-heading">timely deliver</strong>
                <p> services plays vital role in any business success. Timely delivery of goods to the desired place.</p>
              </div>
              
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card match-height">
              <div class="thumb" style="background-image:url(secure.png);">
                <a href="https://legacy.crimereports.com/camera_registration" target="_blank"><span class="sr-only">About us</span></a>
              </div>
              <div class="text">
                <strong class="section-heading">secure payment</strong>
                <p>
                  A secure payment page means that the webpage where credit card numbers are entered is secured via Secure Sockets Layer (SSL) 128 bit encryption. 
                </p>
              </div>
              
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="card match-height">
              <div class="thumb" style="background-image:url(download.jpg);">
                <a href="https://www.tipsubmit.com/webtipsstart.aspx" target="_blank"><span class="sr-only">Support Customer</span></a>
              </div>
              <div class="text">
                <strong class="section-heading">Submit a Crime Tip</strong>
                <p>Customer support is a range of customer services to assist customers in making cost effective and correct use of a product.</p>
              </div>
              
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card match-height">
              <div class="thumb" style="background-image:url(bonus1.jpg);">
                <a href="https://moto.data.socrata.com/" target="_blank"><span class="sr-only">bonus</span></a>
              </div>
              <div class="text">
                <strong class="section-heading">Bonus</strong>
                <p>A bonus payment is usually made to employees in addition to their base salary as part of their wages or salary. <a href=mailto:publicsafety@socrata.com>here</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
    	<div class="copyright-and-privicy-links hidden-xs hidden-sm">
      <b><p style="color: blue">@2018 Easy Nirman.All Rights Reserved</p></b>
    </footer>
  </main>  
  <script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php?q="+str, true);
  xhttp.send();   
}
</script>
</body>
</html>
