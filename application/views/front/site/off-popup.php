
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Your Action</h4>
        </div>
        <div class="modal-body" id="modalNavs__server" style="display:flex;justify-content:center;align-items:center;">


        <div id="realestate">
           <h4 class="modal-title">Goto Eye Real Estate Website</h4>
           <p>Note: You must login here to use other website's</p>
           <div id="display">
            <?php if($this->session->userdata('user_id')){?>

            <a href="<?=base_url('home/remote_site/realestate/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as User</span></a>&nbsp;&nbsp;

            <?php } else {?>

              <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as User</span></a>&nbsp;&nbsp;

            <?php }?>
            <a href="<?=base_url('home/remote_site/realestate/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

          </div>
        </div>

         <div id="motors">
           <h4 class="modal-title">Goto Eye Motors Website</h4>
           <p>Note: You must login here to use other website's</p>
           <div id="display">

            <?php if($this->session->userdata('user_id')){?>

            <a href="<?=base_url('home/remote_site/motors/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as User</span></a>&nbsp;&nbsp;

            <?php } else {?>

            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as User</span></a>&nbsp;&nbsp;

            <?php }?>

            <a href="<?=base_url('home/remote_site/motors/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

          </div>
        </div>

        <div id="jobs">
           <h4 class="modal-title">Goto Eye Jobs Website</h4>
           <p>Note: You must login here to use other website's</p>
           <div id="display">

            <?php if($this->session->userdata('user_id')){?>

            <a href="<?=base_url('home/remote_site/jobs/')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Seeker</span></a>&nbsp;&nbsp;

            <a href="<?=base_url('home/remote_site/jobs/employer')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Employer</span></a>&nbsp;&nbsp;

            <?php } else {?>

            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Seeker</span></a>&nbsp;&nbsp;

            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Employer</span></a>&nbsp;&nbsp;

            <?php }?>

            <a href="<?=base_url('home/remote_site/jobs/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

          </div>
        </div>

        <div id="niversity">
           <h4 class="modal-title">Goto Eye Niversity Website</h4>
           <p>Note: You must login here to use other website's</p>
           <div id="display">

            <?php if($this->session->userdata('user_id')){?>

            <a href="<?=base_url('home/remote_site/niversity/2')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Student</span></a>&nbsp;&nbsp;
            <a href="<?=base_url('home/remote_site/niversity/3')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Tutor</span></a>&nbsp;&nbsp;

            <?php } else {?>

            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Student</span></a>&nbsp;&nbsp;
            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Tutor</span></a>&nbsp;&nbsp;

            <?php }?>
            <a href="<?=base_url('home/remote_site/niversity/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

          </div>
        </div>

        <div id="books">
           <h4 class="modal-title">Goto Eye Books Website</h4>
           <p>Note: You must login here to use other website's</p>
           <div id="display">

            <?php if($this->session->userdata('user_id')){?>

            <a href="<?=base_url('home/remote_site/books/2')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Buyer</span></a>&nbsp;&nbsp;
            <a href="<?=base_url('home/remote_site/books/3')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Seller</span></a>&nbsp;&nbsp;

            <?php } else {?>

            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Buyer</span></a>&nbsp;&nbsp;
            <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-success ">login as Seller</span></a>&nbsp;&nbsp;

            <?php }?>

            <a href="<?=base_url('home/remote_site/books/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

          </div>
        </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function()
  {
    $('#modalNavs__server').children().hide();
  })

  function openWebModal(title)
  {
    $('#modalNavs__server').children().hide();
    $('#modalNavs__server').find('#'+title).show();




    $('#myModal').modal('toggle');

  }


</script>
<style type="text/css">
  #display{
    display: flex;
  }
  @media only screen and (max-width: 811px) {
    #display{
    display: block;
  }
  }
</style>
