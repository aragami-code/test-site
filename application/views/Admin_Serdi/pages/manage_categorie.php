
<script>
    function checkDelete() {

    var chk = confirm(" veut tu vraiment supprimer cette prestation?")
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
                            <th width=5%>numero</th>
                            <th>nom de la prestation</th>
                            <th><center>affichage actuelle</center></th>
                            <th width=10%>changer l'affichage</th>
                            <th width=13%><center>operation</center></th>

                        </tr>
</thead>
<tbody>
<?php $category_data = $this->Category_Model->manage_category_info();?>
                        <?php foreach ($category_data as $key => $value_category):?>
                            <tr>
                                <td><?php echo $value_category->idservice; ?></td>
                                <td><?php echo $value_category->nomservice; ?></td>


                                <td>


                                    <?php  if($value_category->optionservice == 1):?>

                                        <h6 style="color: red"><b>block desactiver</b></h6>
                                    <?php  else:?>
                                        <h6 style="color: green"><b>block publier</b></h6>


                                    <?php  endif;?>


                                </td>



                                <td>

                                    <?php  if($value_category->optionservice== 1):?>

                                        <a class="btn btn-success" href="<?php echo base_url();?>unpublish-category/<?php echo $value_category->idservice;?>">activer</a>
                                    <?php  else:?>
                                        <a class="btn btn-warning" href="<?php echo base_url();?>publish-category/<?php echo $value_category->idservice;?>">desactive</a>

                                    <?php  endif;?>



                                </td>



                                <td> 
                                  <a  class="btn btn-primary" href="<?php echo base_url();?>edit-category/<?php echo $value_category->idservice; ?>">modifier</a>
                                   
                                    <a class="btn btn-danger" href="<?php echo base_url();?>delete-category/<?php echo $value_category->idservice; ?>" onclick="return checkDelete();">supprimer</a></td>

                            </tr>
                        <?php endforeach;?>
                        













</tbody>
</table>
</div>
</div>
</div>

