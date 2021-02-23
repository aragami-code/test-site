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
<h5>Modifier une prestation</h5>
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
<h4 class="sub-title">Prestation à modifier</h4>
<form action="<?php echo base_url('Category/category_update')?>" method="post">
	<input type="hidden" placeholder="entrer le block"  name="idservice" class="col-xs-12" value="<?php echo $category_info->idservice;?>">
<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier une prestation</label>
<div class="col-sm-10">
	<input type="text" placeholder="entrer le nom du service"  name="nomservice" class="col-xs-12 form-control"  value="<?php echo $category_info->nomservice;?>" required="on">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier la description de la prestation</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" name="descriptionservice" required="on"><?php echo $category_info->descriptionservice;?></textarea>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">modifier les options de postage</label>
<div class="col-sm-10">
<select id="select" name="optionservice" class="form-control">
<option value="0">activé</option>
<option value="1">desactivé</option></select>
</div>
</div>


<center>
<button type="submit" class="btn btn-primary">valider les modifications</button>
</center>
</div>
</form>

</div>
