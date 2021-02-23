
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
<h5>AJOUTER UNE PRESTATION</h5>
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
<h4 class="sub-title">Ajouter une prestation</h4>
<form action="<?php echo base_url('Category/save_category')?>" method="post">
<div class="form-group row">
<label class="col-sm-2 col-form-label">ajouter une prestation</label>
<div class="col-sm-10">
	<input type="text" placeholder="entrer le nom du service"  name="nomservice" class="col-xs-12 form-control"  required="on">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">ajouter une description de la prestation</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" placeholder="inserer un description du service"  name="descriptionservice" required="on"></textarea>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">option de postage</label>
<div class="col-sm-10">
<select id="select" name="optionservice" class="form-control">
<option value="0">activé</option>
<option value="1">desactivé</option></select>
</div>
</div>


<center>
<button type="submit" class="btn btn-primary">Save changes</button>
</center>
</div>
</form>

</div>



