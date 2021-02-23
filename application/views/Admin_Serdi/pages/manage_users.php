
<script>
    function checkDelete() {

        var chk = confirm(" veut tu vraiment suprimmer ce contenu???")
        if (chk)
            return true;
        else
            return false;

    }</script>
<section class="content">
    <div class="callout callout-info">
        <h4>BLOCK DE Slide</h4>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">GESTION DES UTILISATEURS</h3>
                </div>
                <div class="box-body">


                    <p style="color: green">

                        <?php $message = $this->session->userdata('message');
                        if ($message){
                            echo "$message";
                            $this->session->unset_userdata('message');
                        }?>


                    </p>

                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box">
                <p style="color: green">

                    <?php $message = $this->session->userdata('message');
                    if ($message){
                        echo "$message";
                        $this->session->unset_userdata('message');
                    }?>


                </p>
                   <button class="active" class="btn btn-default"><a href="<?php echo base_url('users/add_users' )?>">ajouter un utilisateur</a></button>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>nom utilsateur</th>
                            
                        <th>operation</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $users_data = $this->Users_Model->manage_users_info();?>
                        <?php foreach ($users_data as $key => $value_users):?>

                            
                                <td><?php echo $value_users->snom; ?></td>
                               
                               
                                



                                <td> <a class="btn btn-info" href="<?php echo base_url();?>edit-users/<?php echo $value_users->sid; ?>">modifier mes infos</a>
                                    
                            </tr>
                        <?php endforeach;?>
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>




        <!-- /.modal -->

        <!-- /.modal -->
        <!-- /.modal -->
    </section>






















    <!-- /.row -->