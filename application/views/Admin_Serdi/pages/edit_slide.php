
<section class="content">
    <div class="callout callout-info">
        <h4>MODIFIER</h4>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    
                </div>
                <div class="box-body">



                </div>
            </div>
        </div>
    </div>


    <!-- /.modal -->











    <form action="<?php echo base_url('Slide/slide_update')?>" method="post" enctype="multipart/form-data">


        <input type="hidden" placeholder="entrer le block"  name="id_slide" class="col-xs-12" value="<?php echo $slide_info->id_slide;?>" required="on">
        <div><label>Modifier le nom pour le slide</label></div>
        <input type="text" placeholder="entrer le block"  name="nom_slide" class="col-xs-12" value="<?php echo $slide_info->nom_slide;?>" required="on">

       <br><br>
       <div><label>modifier le titre pour le slide en Français</label></div>
        <textarea   name="titre_slide" value="" required="on">
            <?php echo $slide_info->titre_slide;?>

        </textarea> <br><br>
        <div><label>modifier le titre pour le slide en Anglais</label></div>
       

        <textarea   name="titre_slide_en" required="on">
            <?php echo $slide_info->titre_slide_en;?>

        </textarea>
        <br>

         <br><br>
<div><label>modifier le titre pour le slide en Espagnol</label></div>
       
        <textarea   name="titre_slide_es" required="on">
            <?php echo $slide_info->titre_slide_es;?>

        </textarea>
        <br>

<div><label>modifier la description pour le slide en Français</label></div>
       
        <textarea id="editor1"  rows="10" cols="80" placeholder="entrer  le contenu"  name="description_slide" class="col-xs-12" value="" required="on">
            <?php echo $slide_info->description_slide;?>

        </textarea>
        <br>
<div><label>modifier la description pour le slide en Anglais</label></div>
       
        <textarea id="editor1"  rows="10" cols="80" placeholder="entrer  le contenu englais"  name="description_slide_en" class="col-xs-12" value="" required="on">
            <?php echo $slide_info->description_slide_en;?>

        </textarea>
        <br><br>
<div><label>modifier la description pour le slide en Espagnol</label></div>
       
        <textarea id="editor1"  rows="10" cols="80" placeholder="entrer  le contenu espagnole"  name="description_slide_es" class="col-xs-12" value="" required="on">
            <?php echo $slide_info->description_slide_es;?>

        </textarea>
        <br>

        <div>

        <br>

        <br><br>

         <div>
             
            <image src="<?php echo base_url($slide_info->imageslide)  ?>" style="width: 200px; height: 200px;" name="test"/>
            <br>
            
            <input type="file" name="imageslide"/>
            <input type="hidden" name="old_imageslide" value="<?php echo $slide_info->imageslide?>"/>
       


        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">enregistrer</button>
        </div>
    </form>

   
     
 
    </div>
    <!-- /.modal -->

























    <!-- /.modal -->
</section>
