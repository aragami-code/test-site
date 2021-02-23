
        <div class="col-xs-12">



                        <?php $message = $this->session->userdata('message');
                        if ($message){
                            echo "$message";
                            $this->session->unset_userdata('message');
                        }?>


</div>



    <section class="content">
        <div class="callout callout-info">
            <h4>AJOUTER UN UTILISATEUR</h4>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">


                        <p style="color: green">

                            <?php $message = $this->session->userdata('message');
                            if ($message){
                                echo "$message";
                                $this->session->unset_userdata('message');
                            }?>


                        </p>

                    </div>
                </div>
            </div>

        <form action="<?php echo base_url('Users/save_users')?>" method="post" enctype="multipart/form-data">


            <label>entrez votre nom(ce nom servira aussi de login)</label>
                <input type="text" placeholder="votre nom"  name="snom" class="col-xs-12" required="on">
                <br>
            <label>entrez votre mail</label>
                <input type="email" placeholder="entrez votre mail"  name="smail" class="col-xs-12" required="on">
                <br>
                 <label>entrez votre mot de passe</label>
                <input type="password" placeholder="votre mot de passe"  name="spass" class="col-xs-12" required="on">

           <br><br><br><br>
            <div>
            <br><br>
        <div><label>niveau de propriété</label></div>    
            <select id="select" class="col-xs-3" name="slevel" style="color: #0b97c4">
                <option value="1" style="color: green">admin</option>
                <option value="2">redacteur</option>

            </select>
 <div><label>activer le profil</label></div>    
            <select id="select" class="col-xs-3" name="sstatut" style="color: #0b97c4">
                <option value="1" style="color: green">oui</option>
                <option value="0">non</option>

            </select>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </div>
        </form>
        <!-- /.modal -->


        <!-- /.modal -->
    </section>


    <!-- Content Wrapper. Contains page content -->


