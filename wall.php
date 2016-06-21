<?php

require('data.php');

$currentIndex = 0;

function loadData(){
	global $currentIndex;
	global $data;
	$object = $data[$currentIndex];	
	$currentIndex++;
	return $object;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Material News</title>

    <!-- Materialize CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
  
    <!-- Custom Css -->
    <link href="css/style-material.css" type="text/css" rel="stylesheet">
    
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="./bower_components/components-font-awesome/css/font-awesome.min.css" />
    
    <!-- Slider Css -->
    <link href="css/pgwslider.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
    <link rel="stylesheet" href="css/liquid-slider.css">      
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
        <!-- Header -->
        <header class="header-fix">
            <!-- Header Top Display In large and Tablet Device -->
            <div class="header-top hide-on-small-only">
                <div class="container">
                    <div class="row">
                        <div class="col l4 col m5 col s12">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                            <!-- Dropdown -->

                        </div>
                        <div class="col l4 col m3 col s12">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col l4 col m4 col s12 pull-right">
                            <!-- Search Button -->
                            <form class="searchbox">
                                <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                                <input type="submit" class="searchbox-submit">
                                <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                            </form>
                            <!-- LogIn Link -->
                            <a href="javascript:" class="right login"><img src="https://avatars1.githubusercontent.com/u/5296748?v=3&amp;s=460" style="
    border-radius: 8px;
    height: 50px;
    margin: 5px 0;
    /* border: 1px solid blue; */
    -webkit-box-shadow: 0px 0px 8px 0px rgba(255,255,255,1);
    -moz-box-shadow: 0px 0px 8px 0px rgba(255,255,255,1);
    box-shadow: 0px 0px 8px 0px rgba(255,255,255,1);
"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Header top Display On Mobile -->
            <div class="header hide-on-med-and-up">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col l4 col m5 col s2">
                                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                            </div>
                            <div class="col l4 col m4 col s5">    
                                <!-- Dropdown -->
                            </div>
                            <div class="col l4 col m4 col s3">
                                <!-- LogIn Link -->
                                <a href="login.html" class="login">Login</a>
                            </div>
                            <div class="col l4 col m4 col s2">
                            <!-- Search Button -->
                                <form class="searchbox">
                                    <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                                    <input type="submit" class="searchbox-submit">
                                    <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-header">
                    <div class="container">
                        <div class="row">
                            <div class="col l4 col m4 col s12">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Navigation -->
            <nav role="navigation"  class="hide-on-small-only">
                <div class="nav-wrapper menu-category" style="color:black;text-transform:uppercase;font-weight: bold;">
					Digital content that matters only to you
                </div>
            </nav>
        </header>
        
        <!-- Sidebar Navigation -->
        <ul id="slide-out" class="side-nav full">
            <li class="logo-title"><a href="javascript:void(0);">Material News</a></li>
            <!-- Dropdown Menu -->
            <li class="dropdown-menu">
                <ul class="collapsible" data-collapsible="expandable">
                    <li class="">
                        <div class="collapsible-header waves-effect waves active"><i class="fa fa-file"></i> Home Page <i class="fa fa-angle-right"></i></div>
                        <div style="display: block;" class="collapsible-body">
                            <ul>
                                <li class="waves-effect"><a href="index.html"><i class="fa fa-angle-right"></i> Home Page 1</a></li>
                                <li class="waves-effect active"><a href="index2.html"><i class="fa fa-angle-right"></i> Home Page 2</a></li>
                                <li class="waves-effect"><a href="index3.html"><i class="fa fa-angle-right"></i> Home Page 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="">
                        <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> News Detail<i class="fa fa-angle-right"></i></div>
                        <div style="display: none;" class="collapsible-body">
                            <ul>
                                <li class="waves-effect"><a href="news-single1.html"><i class="fa fa-angle-right"></i> News Detail 1</a></li>
                                <li class="waves-effect"><a href="news-single2.html"><i class="fa fa-angle-right"></i> News Detail 2</a></li>
                                <li class="waves-effect"><a href="news-single3.html"><i class="fa fa-angle-right"></i> News Detail 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="">
                        <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Category <i class="fa fa-angle-right"></i></div>
                        <div style="display: none;" class="collapsible-body">
                            <ul>
                                <li class="waves-effect"><a href="index-sport.html"><i class="fa fa-angle-right"></i> Sport </a></li>
                                <li class="waves-effect"><a href="index-life.html"><i class="fa fa-angle-right"></i> Life </a></li>
                                <li class="waves-effect"><a href="index-travel.html"><i class="fa fa-angle-right"></i> Travel </a></li>
                                <li class="waves-effect"><a href="index-money.html"><i class="fa fa-angle-right"></i> Money </a></li>
                                <li class="waves-effect"><a href="index-tech.html"><i class="fa fa-angle-right"></i> Tech  </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="waves-effect"><a href="shop.html"><i class="fa fa-tag"></i>Shop</a></li>
            <li class="waves-effect"><a href="catalog.html"><i class="fa fa-briefcase"></i>Catalog</a></li>
            <li class="waves-effect"><a href="product-detail.html"><i class="fa fa-plus-square"></i>product Detail</a></li>
            <li class="waves-effect"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
            <li class="waves-effect"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
            <li class="waves-effect"><a href="brand1.html"><i class="fa fa-rocket"></i>Brand Style 1</a></li>
            <li class="waves-effect"><a href="brand2.html"><i class="fa fa-plane"></i>Brand Style 2</a></li>
            <li class="waves-effect"><a href="about.html"><i class="fa fa-users"></i>About</a></li>
            <li class="waves-effect"><a href="contact1.html"><i class="fa fa-phone"></i>Contact Style 1</a></li>
            <li class="waves-effect"><a href="contact2.html"><i class="fa fa-map-marker"></i>Contact Style 2</a></li>
            <li class="waves-effect"><a href="login.html"><i class="fa fa-lock"></i>Login</a></li>
        </ul>
      
        <!-- Main Wrapper -->
        <div class="wrapper">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <div class="col l6 col m12 col s12">
                            <div class="z-depth-1">
                                <!-- Horizontal News Box -->
                                <div class="news horizontal">
									<?php $obj = loadData(); ?>
                                    <div class="col l4 col m4 col s12 no-padding">
                                        <!-- Horizontal News Image -->
                                        <div class="news-image">
                                            <img class="responsive-img" src="<?php echo $obj['thumbnail']; ?>" alt="news Image">
                                        </div>
                                    </div>
                                    <div class="col l8 col m8 col s12 no-padding">
                                        <!-- Horizontal News Description -->
                                        <div class="news-description">
                                            <div class="news-time">
                                                <i class="fa fa-clock-o"></i> <?php echo $obj['time']; ?>
                                            </div>
                                            <div class="news-title"><a href="<?php echo $obj['link']; ?>"><?php echo $obj['title']; ?></a></div>
                                            <div class="news-content"><p><?php echo $obj['description']; ?></p></div>
                                        </div>
                                    </div>									
                                </div>
                              
                                <!-- Horizontal News Box -->
                                <div class="news horizontal no-border">
									<?php $obj = loadData(); ?>
                                    <div class="col l4 col m4 col s12 no-padding">
                                        <!-- Horizontal News Image -->
                                        <div class="news-image">
                                            <img class="responsive-img" src="<?php echo $obj['thumbnail']; ?>" alt="news Image">
                                        </div>
                                    </div>
                                    <div class="col l8 col m8 col s12 no-padding">
                                        <!-- Horizontal News Description -->
                                        <div class="news-description">
                                            <div class="news-time">
                                                <i class="fa fa-clock-o"></i> <?php echo $obj['time']; ?>
                                            </div>
                                            <div class="news-title"><a href="<?php echo $obj['link']; ?>"><?php echo $obj['title']; ?></a></div>
                                            <div class="news-content"><p><?php echo $obj['description']; ?></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l3 col m6 col s12">
                            <!-- Horizontal News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- Horizontal News Image -->  
								<?php $obj = loadData(); ?>								
                                <div class="news-image">
                                    <img class="responsive-img" src="<?php echo $obj['thumbnail']; ?>" alt="news Image">
                                </div>
                                <!-- Horizontal News Description -->
								  <div class="news-description">
										<div class="news-time">
											<i class="fa fa-clock-o"></i> <?php echo $obj['time']; ?>
										</div>
										<div class="news-title"><a href="<?php echo $obj['link']; ?>"><?php echo $obj['title']; ?></a></div>
										<div class="news-content"><p><?php echo $obj['description']; ?></p></div>
									</div>
                            </div>
                        </div>
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
							<?php $obj = loadData(); ?>
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img class="responsive-img" src="<?php echo $obj['thumbnail']; ?>" alt="news Image">
                                </div>
                                <!-- vertical News Description -->
								  <div class="news-description">
										<div class="news-time">
											<i class="fa fa-clock-o"></i> <?php echo $obj['time']; ?>
										</div>
										<div class="news-title"><a href="<?php echo $obj['link']; ?>"><?php echo $obj['title']; ?></a></div>
										<div class="news-content"><p><?php echo $obj['description']; ?></p></div>
									</div>
                            </div>
                        </div>
                    </div>
                </section>
                  
                <div class="row">
                    <div class="col l3 col m6 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago 
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 col m6 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago 
                                </div>
                                <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 col m6 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago 
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur.</a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 col m6 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago 
                                </div>
                                <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col l6 col m6 col s12">
                        <!-- News Blog Solid Box -->
                        <div class="news-blog solid z-depth-1">
                            <!-- News Blog Category -->
                            <div class="news-category">
                                <span class="pink">More</span>
                                <!-- Dropdown -->
                                <div class="news-dropdown">
                                    <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown1"><i class="fa fa-ellipsis-v "></i></a>
                                    <ul id="dropdown1" class="dropdown-content">
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- News Blog Description -->
                            <div class="news-description center-align">
                                <div class="quote"><i class="fa fa-quote-left"></i></div>
                                <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna et bibendum leo metus vel magna.  </a></div>
                                <div class="news-content"><p>President of ThemeLeague <br> Dark Waider</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 col m6 col s12">
                        <!-- News Blog Box -->
                        <div class="news-blog z-depth-1">
                            <!-- News Blog Image -->
                            <div class="image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- News Blog Category -->
                            <div class="news-category">
                                <span class="green">Money</span>
                                <!-- Dropdown -->
                                <div class="news-dropdown">
                                    <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown2"><i class="fa fa-ellipsis-v "></i></a>
                                    <ul id="dropdown2" class="dropdown-content">
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- News Blog Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    21 min ago 
                                </div>
                                <div class="news-title"> <a href="javascript:void(0);">Party Sweepsto Israel <br> election Victory</a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <section class="section">
                    <div class="row">
                        <div class="col l12 col m12 col s12">
                            <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img z-depth-1">
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="row">
                        <div class="col l6 col m12 col s12">
                            <div class="z-depth-1">
                                <!-- Horizontal News Box -->
                                <div class="news horizontal">
                                    <div class="col l4 col m4 col s12 no-padding">
                                        <!-- Horizontal News Image -->
                                        <div class="news-image">
                                            <img src="http://placehold.it/350x360?text=News Image" class="responsive-img" alt="news Image">
                                        </div>
                                    </div>
                                    <div class="col l8 col m8 col s12 no-padding">
                                        <!-- Horizontal News  Description -->
                                        <div class="news-description">
                                            <div class="news-time">
                                                <i class="fa fa-clock-o"></i> 9 min ago 
                                            </div>
                                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- Horizontal News Box -->
                                <div class="news horizontal no-border">
                                    <div class="col l4 col m4 col s12 no-padding">
                                        <!-- Horizontal News Image -->
                                        <div class="news-image">
                                            <img src="http://placehold.it/350x360/f5f5f5?text=News Image" class="responsive-img" alt="news Image">
                                        </div>
                                    </div>
                                    <div class="col l8 col m8 col s12 no-padding">
                                        <!-- Horizontal News Description -->
                                        <div class="news-description">
                                            <div class="news-time">
                                                <i class="fa fa-clock-o"></i> 9 min ago
                                            </div>
                                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                    <div class="row">
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum tellus non rutrum.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col l3 col m6 col s12">
                            <!-- vertical News Box -->
                            <div class="news vertical z-depth-1">
                                <!-- vertical News Image -->
                                <div class="news-image">
                                    <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                                </div>
                                <!-- vertical News Description -->
                                <div class="news-description">
                                    <div class="news-time">
                                        <i class="fa fa-clock-o"></i> 9 min ago 
                                    </div>
                                    <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                    <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum tellus non rutrum.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l12 col m12 col s12">
                        <!-- Footer Button -->
                        <div class="footer-button center-align">
                            <span class="mdi-action-history"></span>
                        </div>
                    </div>
  
                    <div class="col l12 col m12 col s12">
                        <!-- Footer Column 1 -->
                        
                    </div>
                </div>
                <!-- Footer Logo -->
                <div class="logo">
                    <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a>
                </div>
                <div class="row">
                    <div class="col l12 col m12 col s12">
                        <!-- Footer Button -->
     
                    </div>
  
                    <div class="col l12 col m12 col s12">
                        <!-- Footer Column 1 -->
                        
                    </div>
                </div>				
            </div>
            <!-- Footer Bottom -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                    <!-- Copyright Text -->
                    <div class="col l4 col m12 col s12">
                        &copy; Copyright 2016 Hackaday Axel Springer
                    </div>
                    <div class="col l4 col m12 col s12">
                        <!-- Social Icon -->
                        <div class="social-icon">
                            <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-youtube"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-vine"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-tumblr"></i></a>
                        </div>
                    </div>
                    <div class="col l4 col m12 col s12">
                        <!-- Footer Menu -->
                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Privacy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Advertisement</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
            
  
    <!-- Jquery -->
    <script src="js/jquery-min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script>
    <!-- Plugin js -->
    <script src="js/pgwslider.js"></script>  
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.liquid-slider.js"></script>
    <script type='text/javascript' src='js/camera.js'></script>
    <!-- Custom Js -->
    <script src="js/init.js"></script>
  
  </body>
</html>