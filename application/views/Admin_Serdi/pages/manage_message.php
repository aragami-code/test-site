<script>
    function checkDelete() {

    var chk = confirm(" veut tu vraiment supprimer ce message?")
         if (chk)
             return true;
        else
            return false;

    }</script>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="card">

<div class="card-block email-card">
  <div class="row">
    <div class="col-lg-12 col-xl-3">
      <div class="user-head row">
      <div class="user-face">
      </div>
      </div>
    </div>
    <div class="col-lg-12 col-xl-9">
        <div class="mail-box-head row justify-content-end">
        <div class="col-auto">
        <form class="form-material">
        <div class="material-group">
        <div class="form-group form-default">
        
        </div>
        <div class="material-addone">
        <i class="icofont icofont-search"></i>
        </div>
        </div>
        </form>
        </div>
        </div>
    </div>
  </div>



  <div class="row">

      <div class="col-lg-12 col-xl-3">
          <div class="user-body">
          <div class="p-20 text-center">

           </div>
          <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
          <li class="nav-item mail-section">
            <?php $all_data = $this->Message_Model->all_message();?>
          <a class="nav-link waves-effect d-block active btn btn-info" data-toggle="pill" href="#e-inbox" role="tab">
          <i class="icofont icofont-inbox"></i> Inbox
          <span class="label label-primary float-right"><?php echo $all_data?></span>
          </a>
          </li>
          
         
          
          </ul>
          <ul class="p-20 label-list">
          

          </ul>
          </div>
      </div>


      <div class="col-lg-12 col-xl-9">
          <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
          <div class="mail-body-content">
              <div class="table-responsive">
                    <table class="table">
                   

                   
                      <?php $message_data = $this->Message_Model->manage_message_info();?>
                              
                            <?php foreach ($message_data as $key => $message_contenu):?>
                              
                             <tr class="unread">
                        <td>
                        <div class="check-star">
                        <div class="checkbox-fade fade-in-primary checkbox">
                        <label>
                        <?php echo $message_contenu->expediteur; ?>
                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                        </label>
                        </div>
                        <i class="icofont icofont-star text-warning"></i>
                        </div>
                        </td>
                        <td><a href="email-read.html" class="email-name waves-effect"><?php echo $message_contenu->expediteur; ?></a></td>
                        <td><a href="email-read.html" class="email-name waves-effect"> <?php echo $message_contenu->objet; ?> </a></td>
                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                        <td class="email-time"><?php echo $message_contenu->heure; ?></td>

                      <td>
                       
                    <div class="btn-group dropdown-split-primary">
                    <a class="btn btn-info" href="<?php echo base_url();?>read-message/<?php echo $message_contenu->id; ?>">
                    <i class="icofont icofont-ui-folder"> lire</i>
                    </a>
                  </div> 
                  <a class="btn btn-danger" href="<?php echo base_url();?>delete-message/<?php echo $message_contenu->id; ?>" onclick="return checkDelete();"> <i>supprimer</i></a>

                  </td>
                    </tr>  
                            <?php endforeach;?>     
                    </table>
              </div>




               




          </div>
          </div>
          </div>

          </div>
      </div>
  </div>

</div>

</div>
</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
