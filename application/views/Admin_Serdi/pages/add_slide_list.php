
<div class="card">
<div class="card-header">
<h5>Ajouter un Slide</h5>
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




<form class="wizard-form" id="example-advanced-form"   action="<?php echo base_url('Slide/save_slide')?>" method="post" enctype="multipart/form-data">
<h3>enregistrement du slide version française </h3>
<fieldset>
<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="userName-2" class="block">nom du slide(FR) *</label>
</div>
<div class="col-md-8 col-lg-10">
<input  id="userName-2" type="text" placeholder="entrer le nom du slide ex: slide1"  name="nom_slide" class="required form-control" required="on">
</div>
<br><br>
<div class="col-md-4 col-lg-2">
<label for="description_slide" class="block">Description du slide*</label>
</div>
<div class="col-sm-10">



<textarea rows="5" cols="200" class="form-control" placeholder="entrer  le contenu du slide  francais ex:Société d'Etude de Recherche et Développement Informatique"  name="description_slide" required="on">
  entrer la description du slide ex: bienvenue à SERDI            
             
</textarea>
</div>
</div>


</fieldset>
<h3>Enregistrement du slide version Anglaise</h3>
<fieldset>


<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="titre_slide_en" class="block">nom du slide(EN) *</label>
</div>
<div class="col-md-8 col-lg-10">
<input  id="titre_slide_en" type="text" placeholder="entrer le titre du produit"  name="titre_slide_en" class="required form-control" required="on">
</div>

<br><br>
<div class="col-md-4 col-lg-2">
<label for="description_slide_en" class="block">Description du slide*</label>
</div>
<div class="col-sm-10">
  
<textarea rows="5" cols="200" class="form-control"    placeholder="entrer  le contenu du slide englais ex:Société d'Etude de Recherche et Développement Informatique"  name="description_slide_en"required="on">
  entrer la description du slide  englais ex: Welcome to SERDI 
</textarea>
</div>

</div>





</fieldset>
<h3> Enregistrement du slide version Espagnole </h3>
<fieldset>


<div class="form-group row">
<div class="col-md-4 col-lg-2">
<label for="titreproduitES" class="block">nom du slide(ES) *</label>
</div>
<div class="col-md-8 col-lg-10">
<input  id="titre_slide_es" type="text" placeholder="entrer le titre du produit"  name="titre_slide_es" class="required form-control" required="on">
</div>

<br><br>
<div class="col-md-4 col-lg-2">
<label for="description_slide_es" class="block">Description du slide*</label>
</div>
<div class="col-sm-10">
<textarea rows="5" cols="200" class="form-control" placeholder="entrer  le contenu du slide espagnol ex:Société d'Etude de Recherche et Développement Informatique"  name="description_slide_es" required="on"></textarea>
</div>

</div>




</fieldset>
<h3> Ajouter photo </h3>
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
     <input id="Position-2"
class="form-control required" name="imageslide"  type="file" required="on" />

</div>
</div>

<br><br>
<br><br>
<center>
<button type="submit" class="btn btn-primary">valider</button>
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






