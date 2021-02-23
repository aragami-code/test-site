
<script>
    function checkDelete() {

    var chk = confirm(" veut tu vraiment supprimer ce slide?")
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
                            <th>id slide</th>
                            <th>titre slide</th>
                            <th width="5%">image slide</th>
                            <th>operation</th>

                        </tr>
</thead>
<tbody>
                        <?php $slide_data = $this->Slide_Model->manage_slide_info();?>
                        <?php foreach ($slide_data as $key => $value_slide):?>

                            <td><?php echo $value_slide->id_slide; ?></td>
                                <td><?php echo $value_slide->nom_slide; ?></td>
                                 
                                <td><img src="<?php echo base_url( $value_slide->imageslide)  ?>" width="60%"></td>
                                



                                <td> <!-- <button class="active"><a href="<?php echo base_url('category/add_category' )?>"   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">
                                        AJOUTER UN BLOCK
                                    </button>>modifier</a></button>-->
                                   <a class="btn btn-success" href="<?php echo base_url();?>edit-slide/<?php echo $value_slide->id_slide; ?>">modifier</a>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>delete-slide/<?php echo $value_slide->id_slide; ?>" onclick="return checkDelete();">supprimer</a></td>


                            </tr>
                        <?php endforeach;?>
                        </tbody>
</table>
</div>
</div>
</div>

