
<script>
    function checkDelete() {

    var chk = confirm(" veut tu vraiment supprimer ce produit?")
         if (chk)
             return true;
        else
            return false;

    }</script>
<div class="card">
<div class="card-header">
<h5>liste des prestations</h5>
<span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">

 <h4 style="color: green">

                    <?php $message = $this->session->userdata('message');
                    if ($message){
                        echo "$message";
                        $this->session->unset_userdata('message');
                    }?>


                </h4>

<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>

                        <tr>
                            <th>id produit</th>
                            <th>titre produit</th>
                            <th width="5%">image produit</th>
                            <th>statut actuel</th>

                            <th>status</th>
                            <th>operation</th>

                        </tr>
</thead>
<tbody>  <?php $category_data = $this->Contenu_Model->manage_contenu_info();?>
                        <?php foreach ($category_data as $key => $value_contenu):?>

                            <td><?php echo $value_contenu->idproduit; ?></td>
                                <td><?php echo $value_contenu->titreproduit; ?></td>
                                <td><img src="<?php echo base_url( $value_contenu->imageproduit)  ?>" width="80%"></td>
                                



                                <td>


                                    <?php  if($value_contenu->optionproduit == 1):?>

                                        <h6 style="color: red"><b>contenu desactiver</b></h6>
                                    <?php  else:?>
                                        <h6 style="color: green"><b>contenu activé</b></h6>


                                    <?php  endif;?>

                                </td>
                            <td>


                                    <?php  if($value_contenu->optionproduit == 1):?>

                                        <a class="btn btn-success" href="<?php echo base_url();?>unpublish-contenu/<?php echo $value_contenu->idproduit;?>">activer</a>
                                    <?php  else:?>
                                        <a class="btn btn-danger" href="<?php echo base_url();?>publish-contenu/<?php echo $value_contenu->idproduit;?>">desactive</a>

                                    <?php  endif;?>



                                </td>



                                <td> <!-- <button class="active"><a href="<?php echo base_url('category/add_category' )?>"   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">
                                        AJOUTER UN BLOCK
                                    </button>>modifier</a></button>-->
                                    <a class="btn btn-primary" href="<?php echo base_url();?>edit-contenu/<?php echo $value_contenu->idproduit; ?>">modifier</a>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>delete-contenu/<?php echo $value_contenu->idproduit; ?>" onclick="return checkDelete();">supprimer</a></td>


                            </tr>
                        <?php endforeach;?>
                      

</tbody>
</table>
</div>
</div>
</div>

