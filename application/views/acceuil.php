
<!DOCTYPE html>
<html lang="fr">
<head>
    

    <title>SERDI</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/range.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/images/log2.png">
</head>
</head>
<body id="haut">
<div class="preloader_wrapper">
    <div class="preloader_inner">
        <img src="<?php echo base_url()?>assets/images/preloader.gif" alt="image" />
    </div>
</div>
<div class="clv_main_wrapper index_v4">
    <div class="header3_wrapper">
        <div class="clv_header3">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="clv_left_header">
                        <div class="clv_logo">
                            <a href="<?php echo base_url('index');?>"><img src="<?php echo base_url()?>assets/images/log3.png" alt="SERDI" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="clv_right_header">
                        <div class="clv_menu">
                            <div class="clv_menu_nav">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('index');?>">Accueil</a>
                                    </li>
                                    <li><a href="#produits">Produits</a></li>
                                    <li><a href="#propos">A propos</a>
                                       
                                    </li>
                                    <li><a href="#service">services</a></li>
                                  
                                
                                    <li><a href="#contact">contacts</a></li>
                                     <li><a href="#propos">Language</a>
                                        <ul>
                                            <li><a href="<?php echo base_url('En/home');?>"><img src="<?php echo base_url()?>assets/images/flags/anglaisdrapaux.jpg" width="20%">_Anglais</a></li>
                                            <li><a href="<?php echo base_url('Es/bienvenida');?>"><img src="<?php echo base_url()?>assets/images/flags/espagnoldrapaux.jpg" width="30%">Espagnole</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner Slider-->
    <div class="clv_banner_slider">
        <!-- Swiper -->

                               
        <div class="swiper-container">

        <?php $slide_data = $this->Slide_Model->active_slide_info1();?>


                            

            <div class="swiper-wrapper">
			<?php foreach ($slide_data as $key => $value_slide):?>
                <div class="swiper-slide">
                    <div class="clv_slide" style="background: url(<?php echo base_url( $value_slide->imageslide)?>) no-repeat center;
   ">
                        <div class="container">
                            <div class="clv_slide_inner">

                                <h1><?php echo $value_slide->titre_slide;?></h1>
                                <h2><?php echo $value_slide->description_slide;?></h2>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>  
            </div>
             
        </div>
    </div>
    <!--About-->
    <div class="garden_about_wrapper clv_section">
        <div class="container">
            <!--Service-->
            <div class="garden_service_wrapper" id="propos">
                <div class="row">
                    
                   



                         <?php $contenu_info = $this->Contenu_Model->top3_produit_contenu_info();?>


                            <?php foreach ($contenu_info as $key => $value_info):?>

                    <div class="col-lg-4 col-md-4">
                        <div class="garden_service_block">
                          

                            <div class="service_image">
                                <span><img src="<?php echo base_url()?>assets/images/log1.png" alt="image" /></span>
                            </div>
                            <h3><?php echo $value_info->titreproduit;?></h3>
                            <p><?php echo $value_info->descriptionproduit;?></p>
                               
                        </div>
                    </div>
                    <?php endforeach;?>




                   
                    </div>
                </div>
            </div>
            <div class="garden_about_section">
                <div class="row">
                    <div class="col-ld-6 col-md-6">
                        <div class="garden_about_image">
                            <img src="<?php echo base_url()?>assets/images/siva.png" alt="image"  class="mb-5"/>
                            <div class="garden_ofc_block">
                                <h3>Siège Social</h3>
                                <p>PK 10, Route de l'aéroport international de Yaoundé Nsimalen lieu dit Odza</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-ld-6 col-md-6">
                        <div class="garden_about_content">
                            <h2>La solution logicielle  <br />pour gérer les activités de:</h2>
                            <h6>transport - logistique - messagerie </h6>
                            <p>SERDI CAMEROUN est un éditeur de logiciel qui développe des applications de billetterie
                                 et de gestion commmerciale pour le transport des biens et des personnes par autocars et la géolocalisation de tous les véhicules.</p>
                                      <br>
                            <p>► Un système intégré et modulaires en version mono-poste, multi-agence, multi-site et multi-activité</p>
                            <p>► Un système de gestion dédié au monde du tansport efficace et simple d'utilisation.</p>
                            <p>► Répond aux contraintes légales et à votre façon de travailler, permettent ainsi d'économiser du temps et de l'argent.</p>

                            
                            <div class="garden_about_blog">
                                <div class="about_blog_inner col-md-6">
                                    <div class="about_blog_image"><img src="<?php echo base_url()?>assets/images/reso.png" alt="image" /></div>
                                    <h4>SERDI CAMEROUN</h4>
                                    <p>dispose d'un réseau de distribution qui vous permet de bénéficier d'un service rapide et efficace.</p>
                                </div>
                                <div class="about_blog_inner col-md-6">
                                    <div class="about_blog_image"><img src="<?php echo base_url()?>assets/images/telecon.png" alt="image" /></div>
                                    <h4>SERDI CAMEROUN</h4>
                                    <p>prend en compte rapidement toutes vos demandes, à tout instant et à toute les étapes afin de répondre de manière optimale 
                                        à tous vos problèmes avec votre collaboration.</p>
                                </div>
                            </div>
                            <div class="garden_contact_section">
                                <a href="javascript:;" class="clv_btn">A Propos</a>
                                <div class="contact_number">
                                
                                    <h4>(+237) 670 311 614</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Produits-->
<div class="clv_blog_wrapper clv_section" id="produits">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="clv_heading">
                    <h3>Nos Produits</h3>
                    <div class="clv_underline"><img src="<?php echo base_url()?>assets/images/trait.png" alt="image" /></div>
                    <p>Nous vous offrons des produits de qualité et normalisé.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog_slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                             <?php $contenu_data = $this->Contenu_Model->active_contenu_info2();?>


                            <?php foreach ($contenu_data as $key => $value_contenu):?>

                               

                            

                            <div class="swiper-slide">
                                <div class="blog_slide">
                                    <div class="blog_image">
                                        <img width="390px" height="255px" src="<?php echo base_url( $value_contenu->imageproduit)  ?>" alt="image" class="img-fluid" />
                                    </div>
                                    <div class="blog_content">
                                        <h4 class="blog_title"><a href="blog_single.html"><?php echo $value_contenu->titreproduit; ?></a></h4>
                                        
                                      <!--  <p><?php// echo $value_contenu->descriptionproduit; ?></p>-->
                                        <div class="breadcrumb_block" style="background-color: rgba(3,168,17,0.9);">
                                                <ul>
                                                 <li><a href="<?php echo base_url();?>vue-contenu/<?php echo $value_contenu->idproduit; ?>">Description</a></li>
                                             </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>


                            
                        </div>
                    </div>
                    <span class="slider_arrow blog_left left_arrow">
                        <svg 
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="10px" height="20px">
                        <path fill-rule="evenodd"  fill="rgb(226, 226, 226)"/>
                        </svg>
                    </span>
                    <span class="slider_arrow blog_right right_arrow">
                        <svg 
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="10px" height="20px">
                        <path fill-rule="evenodd"  fill="rgb(226, 226, 226)"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--Service-->
    <div class="garden_team_wrapper clv_section" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="team_heading" >





                        <h3>Nos Services</h3>
                        <img src="<?php echo base_url()?>assets/images/trait-bl.png" alt="image" />
                        <p>Nos services répondent aux besoins digitals qui sont d'actualités. L'innovation est notre priorité lors de l'implémentation des solutions </p>
                    </div>
                </div>
                
                    <?php $category_data = $this->Category_Model->active_category_info();?>


                            <?php foreach ($category_data as $key => $value_category):?>

                                
                      <div class="col-md-3 col-lg-3">          

                            

                    <div class="garden_team_block">
                      
                        <img src="<?php echo base_url()?>assets/images/soft.png" alt="image" />
                        <div class="garden_team_overlay">
                            <h3>  <?php echo $value_category->nomservice; ?></h3>
                            <p><?php echo $value_category->descriptionservice; ?></p>
                        </div>
                    </div>

                </div>
               <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="clv_footer_wrapper clv_section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="footer_block">
                        <div class="footer_heading">
                            <h4>Contactar</h4>
                
                        </div>
                        <div class="footer_logo"><a href="javascript:;"><img width="20%" src="<?php echo base_url()?>assets/images/log2.png" alt="image"  /></a></div>
                        <p><span><svg 
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="16px" height="16px">
                                <defs>
                                <filter id="Filter_0">
                                    <feFlood flood-color="rgb(31, 161, 46)" flood-opacity="1" result="floodOut" />
                                    <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                                    <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
                                </filter>

                                </defs>
                                <g filter="url(#Filter_0)">
                                <path fill-rule="evenodd"  fill="rgb(81, 176, 30)"
                                 d="M14.873,0.856 C14.815,0.856 14.700,0.856 14.643,0.913 L0.850,6.660 C0.620,6.776 0.505,6.948 0.505,7.176 C0.505,7.465 0.677,7.695 0.965,7.752 L6.942,9.189 C7.057,9.189 7.114,9.305 7.172,9.419 L8.608,15.396 C8.666,15.626 8.896,15.855 9.183,15.855 C9.413,15.855 9.643,15.683 9.700,15.511 L15.447,1.718 C15.447,1.660 15.505,1.603 15.505,1.488 C15.447,1.085 15.217,0.856 14.873,0.856 ZM9.355,8.902 L9.068,7.695 C9.011,7.465 8.838,7.350 8.666,7.292 L7.459,7.005 C7.172,6.948 7.172,6.545 7.401,6.487 L11.022,4.993 C11.252,4.878 11.482,5.109 11.424,5.395 L9.930,9.017 C9.758,9.189 9.413,9.131 9.355,8.902 Z"/>
                                </g>
                                </svg></span> PK 10, Yaoundé-Odza</p>
                        <p><span><svg 
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="16px" height="15px">
                                
                                <g filter="url(#Filter_0)">
                                <path fill-rule="evenodd"  fill="rgb(81, 176, 30)"
                                 d="M13.866,7.235 C13.607,5.721 12.892,4.344 11.802,3.254 C10.653,2.108 9.197,1.381 7.592,1.156 L7.755,-0.002 C9.613,0.257 11.296,1.096 12.626,2.427 C13.888,3.692 14.716,5.284 15.019,7.039 L13.866,7.235 ZM10.537,4.459 C11.296,5.222 11.796,6.181 11.977,7.238 L10.824,7.436 C10.684,6.617 10.300,5.874 9.713,5.287 C9.091,4.666 8.304,4.276 7.439,4.155 L7.601,2.996 C8.719,3.151 9.734,3.657 10.537,4.459 ZM4.909,8.182 C5.709,9.162 6.611,10.033 7.689,10.711 C7.920,10.854 8.176,10.960 8.417,11.092 C8.538,11.160 8.623,11.139 8.723,11.035 C9.088,10.661 9.460,10.293 9.831,9.924 C10.318,9.440 10.931,9.440 11.421,9.924 C12.017,10.516 12.614,11.110 13.207,11.707 C13.704,12.207 13.701,12.818 13.201,13.324 C12.864,13.665 12.505,13.989 12.186,14.345 C11.721,14.866 11.140,15.035 10.472,14.997 C9.500,14.944 8.607,14.623 7.745,14.205 C5.831,13.275 4.194,11.985 2.823,10.355 C1.808,9.150 0.971,7.834 0.422,6.355 C0.153,5.639 -0.038,4.906 0.022,4.129 C0.059,3.651 0.237,3.242 0.590,2.907 C0.971,2.546 1.330,2.168 1.705,1.800 C2.192,1.319 2.804,1.319 3.295,1.797 C3.598,2.093 3.894,2.396 4.194,2.696 C4.485,2.988 4.775,3.277 5.065,3.570 C5.578,4.085 5.578,4.684 5.069,5.197 C4.703,5.565 4.341,5.933 3.969,6.293 C3.873,6.390 3.863,6.468 3.913,6.586 C4.160,7.173 4.513,7.694 4.909,8.182 Z"/>
                                </g>
                                </svg></span> ( +237 ) 676 862 919</p>
                        <p><span><svg 
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="16px" height="16px">
                            
                            <g filter="url(#Filter_0)">
                            <path fill-rule="evenodd"  fill="rgb(81, 176, 30)"
                             d="M16.000,5.535 C16.000,4.982 15.680,4.507 15.280,4.191 L8.000,-0.002 L0.720,4.191 C0.320,4.507 0.000,4.982 0.000,5.535 L0.000,13.447 C0.000,14.317 0.720,15.028 1.600,15.028 L14.400,15.028 C15.280,15.028 16.000,14.317 16.000,13.447 L16.000,5.535 ZM8.000,9.491 L1.360,5.376 L8.000,1.579 L14.640,5.376 L8.000,9.491 Z"/>
                            </g>
                            </svg></span>info-serdi@serdi-cm.com</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="footer_block">
                        <div class="footer_heading">
                            <h4>Horario de apertura</h4>
                            <img src="<?php echo base_url()?>assets/images/trait-d.png" alt="image" />
                        </div>
                        <ul class="time_table">
                            <li>
                                <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Lund - Mard</p>
                                <p>8h30min  - 18h00min</p>
                            </li>
                            <li>
                                <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Merc - Jeud</p>
                                <p>8h30min  - 18h00min</p>
                            </li>
                            <li>
                                <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Vend - Same</p>
                                <p>8h30min  - 18h00min</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-4">
                    <div class="footer_block">
                        <div class="footer_heading" align="center">
                            <h4>Nuestras redes sociales</h4>
                            <img src="<?php echo base_url()?>assets/images/trait-d.png" alt="image" />
                            <ul class="agri_social_links">
                            <li><a href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                            <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                            <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                            <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                        </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Copyright-->
    <div class="clv_copyright_wrapper">
        <p>copyright &copy; 2020 <a href="javascript:;">SERDI CAMEROUN.</a> all right reserved.</p>
    </div>

    <!--Popup-->
  
    <!--Payment Success Popup-->
    
    <!--Thank You Popup-->
   
    <!--SignUp Popup-->
    <div class="signup_wrapper">
        <div class="signup_inner">
            <div class="signup_details">
                <div class="site_logo">
                    <a href="index.html"> <img src="<?php echo base_url()?>assets/images/log1.png" alt="image"></a>
                </div>
                <h3>Bienvenue à SERDI</h3>
                <p> Société d'Etude de Recherche et Développement Informatique</p>
                <ul>
                  
                </ul>
            </div>
            <div class="signup_form_section">
				<h4>ecrivez nous pour  plus d'information</h4>
				
				<form action="<?php echo base_url('Sendmail/send' )?>" method="post">
                <div class="form_block">
					
				
					<input type="text" class="form_field" placeholder="votre nom" name="expediteur" required="on">
					<br/><br/>
					<input type="num" class="form_field" placeholder="votre numero de telephone" name="telephone" required="on">
					<br/><br/>
					<input type="mail" class="form_field" placeholder="votre Email" name="email" required="on">
					<br/><br/>
                    <input type="text" class="form_field" placeholder="objet du message" name="objet" required="on">
                    <br/><br/>
					<textarea class="form_field" placeholder="entrez votre message" name="descriptionmail" required="on">


					</textarea>
					
                
				<input type="submit" class="btn btn-success" name="submit"  value="envoyer">
				</form>
            </div>
                <div class="social_button_section">
                  
                </div>
                <span class="success_close">
                    
                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                    <g>
                        <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd; " d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                        c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                        l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                        c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z" />
                    </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <!--SignIn Popup-->
 
    <!--Profile Toggle-->
    <div class="profile_toggle"><a href="javascript:;"><img src="<?php echo base_url()?>assets/images/login.gif" alt="" width="50%" style="border-radius: 50%;"></a></div>
</div>


<!--Main js file Style-->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/swiper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
<script src="<?php echo base_url()?>assets/js/nice-select.min.js"></script>
<script src="<?php echo base_url()?>assets/js/range.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="<?php echo base_url()?>assets/js/revolution.extension.actions.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.kenburn.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.layeranimation.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.migration.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.parallax.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.slideanims.min.js"></script>
<script  src="<?php echo base_url()?>assets/js/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>
</html>
