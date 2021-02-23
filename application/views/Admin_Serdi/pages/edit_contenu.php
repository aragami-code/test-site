







<div class="card">
<div class="card-header">
<h5>Modifier un produit</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-md-12">
<div id="wizard">


                        <?php $message = $this->session->userdata('message');
                        if ($message){
                            echo "$message";
                            $this->session->unset_userdata('message');
                        }?>



<section>
<form class="wizard-form" id="example-advanced-form" action="<?php echo base_url('Contenu/contenu_update')?>" method="post"  enctype="multipart/form-data">
<h3>modification du produits version française </h3>
<fieldset>
<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="userName-2" class="block">modifier le nom du produit(FR) *</label>
</div>
<div class="col-md-8 col-lg-10">
<input type="hidden" placeholder="entrer le block"  name="idproduit" class="col-xs-12" value="<?php echo $contenu_info->idproduit;?>" required="on">

 <input id="userName-2" type="text" placeholder="entrer le block"  name="titreproduit" class="col-xs-12" value="<?php echo $contenu_info->titreproduit;?>" required="on">

</div>
<br><br>
<div class="col-md-4 col-lg-2">
<label for="titreproduitEN" class="block">Description du produit*</label>
</div>
<div class="col-sm-10">
<textarea rows="5" cols="200" class="form-control" name="descriptionproduit" required="on"><?php echo $contenu_info->descriptionproduit;?></textarea>
</div>
</div>


</fieldset>
<h3>Modification du produit version Anglaise</h3>
<fieldset>


<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="titreproduitEN" class="block">nom du produit(EN) *</label>
</div>
<div class="col-md-8 col-lg-10">

        <input id="titreproduitEN" type="text" placeholder="entrer le block"  name="titreproduitEN" class="col-xs-12" value="<?php echo $contenu_info->titreproduitEN;?>" required="on">

</div>

<br><br>
<div class="col-md-4 col-lg-2">
<label for="descriptionproduitEN" class="block">Description du produit*</label>
</div>
<div class="col-sm-10">
<textarea rows="5" cols="200" class="form-control" name="descriptionproduitEN" required="on"><?php echo $contenu_info->descriptionproduitEN;?></textarea>
</div>

</div>





</fieldset>
<h3>modification du produit version Espagnole </h3>
<fieldset>


<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="titreproduitES" class="block">nom du produit(ES) *</label>
</div>
<div class="col-md-8 col-lg-10">
 <input id="titreproduitES" type="text" placeholder="entrer le block"  name="titreproduitES" class="col-xs-12" value="<?php echo $contenu_info->titreproduitES;?>" required="on">

</div>

<br><br>
<div class="col-md-4 col-lg-2">
<label for="descriptionproduitES" class="block">Description du produit*</label>
</div>
<div class="col-sm-10">
<textarea rows="5" cols="200" class="form-control" name="descriptionproduitES" required="on"><?php echo $contenu_info->descriptionproduitES;?></textarea>
</div>

</div>




</fieldset>
<h3> Modification de la photo </h3>
<fieldset>






<div class="form-group row">
<label class="col-sm-2 col-form-label">option de publication</label>
<div class="col-sm-10">
<select id="select" name="optionproduit" class="form-control">
<option value="0">publier</option>
<option value="1">non publier</option></select>
</div>
</div>


<br><br>
<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="Position-2" class="block">Image produit</label>
</div>
<div class="col-md-8 col-lg-10">

            <image src="<?php echo base_url( $contenu_info->imageproduit)?>" style="width: 200px; height: 200px;" name="test"/>
            <br>
            
            <input id="Position-2" type="file" name="imageproduit"/>
            <br> <br>
            <input type="hidden" name="old_imageproduit" value="<?php echo $contenu_info->imageproduit?>"/>
</div>
</div>

<br><br>
<br><br>
<center>
<button type="submit" class="btn btn-primary">valider les modifications</button>
</center>
</fieldset>
</form>
</section>
</div>
</div>
</div>
</div>
</div>









<script src="<?php echo base_url()?>assets2/js/pcoded.min.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/vertical-layout.min.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.mcustomscrollbar.concat.min.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="js/script.js"></script>
<script src="<?php echo base_url()?>assets2/js/rocket-loader.min.js" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>






