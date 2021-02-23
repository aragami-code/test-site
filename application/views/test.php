<div id="container">
    <h1>PAGE D'ACCEUIL SERDI</h1>

    <div id="body">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <!-- /.box -->

                    <div class="box">

                        <!-- /.box-header -->
                        <ul class="box-body">

                            <?php $category_data = $this->Category_Model->active_category_info();?>


                            <?php foreach ($category_data as $key => $value_category):?>

                                <br>
                                <li><?php echo $value_category->nomservice; ?><?php echo $value_category->descriptionservice; ?></li>

                            <?php endforeach;?>

                        </ul>
                        <ul class="box-body">

                            <?php $contenu_data = $this->Contenu_Model->active_contenu_info2();?>


                            <?php foreach ($contenu_data as $key => $value_contenu):?>

                                <br>
                                <li><?php echo $value_contenu->titreproduit; ?><?php echo $value_contenu->descriptionproduit; ?><button class="active" class="btn btn-default" data-toggle="modal" data-target="#modal-default1"><a href="<?php echo base_url();?>vue-contenu/<?php echo $value_contenu->idproduit; ?>">voir plus</a></button>
                                </li>

                            <?php endforeach;?>

                        </ul>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
</div>
