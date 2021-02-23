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
<h5>Contenu du message</h5>
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
<h4 class="sub-title">lecture du message</h4>
<input type="hidden" placeholder="entrer le block"  name="id" class="col-xs-12" value="<?php echo $message_info->id;?>">
<div class="form-group row">
<label class="col-sm-2 col-form-label">Expediteur</label>
<div class="col-sm-10">
	<input type="text" placeholder="entrer le nom du service"  name="expediteur" class="col-xs-12 form-control"  value="<?php echo $message_info->expediteur;?>" readonly="on">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">addresse mail</label>
<div class="col-sm-10">
	<input type="text"   name="email" class="col-xs-12 form-control"  value="<?php echo $message_info->email;?>" readonly="on">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">numero de telephone</label>
<div class="col-sm-10">
	<input type="text"  name="telephone" class="col-xs-12 form-control"  value="<?php echo $message_info->telephone;?>" readonly=on>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Objet</label>
<div class="col-sm-10">
	<input type="text"   name="objet" class="col-xs-12 form-control"  value="<?php echo $message_info->objet;?>" readonly="on">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">contenu du message</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" name="descriptionmail" readonly="on"><?php echo $message_info->descriptionmail;?></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">date</label>
<div class="col-sm-10">
	<input type="text"   name="heure" class="col-xs-12 form-control"  value="<?php echo $message_info->heure;?>" readonly="on">
</div>
</div>

<center>
<a href="<?php echo base_url('message/manage_message' )?>" class="btn btn-primary">retour à la page des messages</a>
</center>
</div>


</div>
