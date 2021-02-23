

        <div class="blog_sidebar_wrapper clv_section blog_single_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="blog_left_section">
                            <div class="blog_section">
                                <div class="agri_blog_image">
                                   <img src="<?php echo base_url( $contenu_info->imageproduit)  ?>" alt="image" class="img-fluid" />
                                    <span class="agri_blog_date" style="color: green"></span>
                                </div>
                                <div class="agri_blog_content">
										<input type="hidden" placeholder="entrer le block"  name="idproduit" class="col-xs-12" value="<?php echo $contenu_info->idproduit;?>">
       




                                    <h3><a href="#"><?php echo $contenu_info->titreproduit;?></a></h3>
                                    <div class="blog_user">
                                        <div class="user_name">
                                           <span>
     										</span>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <div class="blog_message">
                                        <p><?php echo $contenu_info->descriptionproduit;?></p>
                                        
                                    </div>
                                    <p><p><?php echo $contenu_info->textproduit;?></p>
                                    </p>
                                </div>
                                
                                
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="blog_sidebar">
                            <div class="sidebar_block"> 
                                
                            </div>
                            <div class="sidebar_block">
                                <div class="sidebar_heading">
                                    <h3>Nos Produits</h3>
                                     </div>
                                <div class="sidebar_category">
                                    <ul>



                             <?php $contenu_data = $this->Contenu_Model->active_contenu_info2();?>


                            <?php foreach ($contenu_data as $key => $value_contenu):?>

                               
                            				 <li><a href="javascript:;"><h4 class="blog_title"><a href="<?php echo base_url();?>vue-contenu/<?php echo $value_contenu->idproduit; ?>"><?php echo $value_contenu->titreproduit; ?></a></h4></span></a></li>
                           
                       		 <?php endforeach;?>

                                    </ul>
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>