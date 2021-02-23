


<div class="col-xl-12 col-md-12">
<div class="card bg-twitter soc-cont-card">
<div class="card-block">
<div class="soc-slider">
<div class="owl-carousel" id="tw-slider">


</div>
</div>

</div>
</div>
</div>







<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
 <div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>modifier les informations</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
<p style="color: green">

                        <?php $message = $this->session->userdata('message');
                        if ($message){
                            echo "$message";
                            $this->session->unset_userdata('message');
                        }?>


                        </p>

</div>
<div class="card-block">
<h4 class="sub-title">mise à jour des informations</h4>
<form action="<?php echo base_url('Serdi_Admin/users_update')?>" method="post">
          
<input type="hidden" placeholder="entrer le block"  name="sid" class="col-xs-12" value="<?php echo $users_info->sid;?>">
<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier votre nom(ce nom vous servira aussi de login pour vous authentifier)</label>

<div class="col-sm-10">
    <input type="text" placeholder="entrer le nom du service"  name="snom" class="col-xs-12 form-control"  value="<?php echo $users_info->snom;?>" required="on">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier l' addresse mail</label>
<div class="col-sm-10">
    <input type="text"   name="smail" class="col-xs-12 form-control"  value="<?php echo $users_info->smail;?>">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier le mot de passe (optionnel)</label>
<div class="col-sm-10">
    <input type="password" placeholder=""  name="spass" class="col-xs-12 form-control"  value="<?php echo $users_info->spass;?>">
            <input type="hidden" name="old_spass" value="<?php echo $users_info->spass?>">
            <input type="hidden" name="sstatut" value="<?php echo $users_info->sstatut?>">
            <input type="hidden" name="slevel" value="<?php echo $users_info->slevel?>">
</div> 
</div>


<center>
<div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">valider les modifications</button>
            </div>
</center>
 </form>
</div>


</div>











  
  <!--          
       
            <div> <label>modifier votre mot de passe</label></div>
           
<br><br>
            <div> <label>modifier le role</label></div>
            <select id="select" class="col-xs-12" name="slevel">
                <option value="1">admin</option>
                <option value="2">redacteur</option>

            </select
            br><br>
            <div> <label>modifié l'acces du compte</label></div>
            <select id="select" class="col-xs-12" name="sstatut">
                <option value="0">actif</option>
                <option value="1">desactif</option>

            </select>

            <br><br>


          -->  
       