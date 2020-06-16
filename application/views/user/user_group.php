<div class="page-inner">
        <div class="page-title">
            <div class="container">
            <?php $name = $user_group_name->row(); ?>
			
                <h3>User Group (<?php echo $name->user_group; ?>)</h3>
            </div>
        </div>
	<div id="main-wrapper" class="container">
		<div class="row">       
           <div class="col-md-6">
            <?php if(isset($message) && $message!="") {?>
           			<div class="alert alert-success" role="alert">
							<?php echo $message;  ?>
         			</div>
           
           <?php } ?>
                    <div class="panel panel-white">
                              
                                <div class="panel-body">
        <form method="post" action="<?php echo base_url().'index.php/user/user/save_user_group?edit='.$name->user_group_id ?>" />             
         <input hidden="" type="text" name="user_group_name" value="<?php echo $name->user_group; ?>"/>                   
<?php	foreach ($query_parent->result() as $row_parent) { ?>
        
        <div class="panel box-default"><!-- <div class="panel >>>>>>box<<<<<< box-default"> -->
          <div class="box-header">
            <h4 class="box-title">
              <a aria-expanded="false" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row_parent->module_id; ?>">
                <?php echo $row_parent->module; ?>
              </a>
            </h4>
          </div>
          <div aria-expanded="false" id="<?php echo $row_parent->module_id; ?>" class="panel-collapse collapse">
            <div class="box-body">
                
<?php		foreach ($query_module->result() as $row_module) {
				if ($row_module->parent_module_id == $row_parent->module_id) { ?>
                
                <div class="checkbox">
                    <label>
                    <input name="<?php echo $row_module->module_id; ?>" type="checkbox" <?php
						foreach ($query_check->result() as $row_check) {
							if ($row_module->module_id == $row_check->module_id) {
								echo 'checked="checked"';
							}
						}
					?> />
                        <?php echo $row_module->module; ?>
                    </label>
                </div>
<?php			}
			} ?>

            </div>
          </div>
        </div>

<?php	} ?>
<button class="btn btn-primary m-r-5 m-b-5" type="submit" >Save</button>
</form>
                                </div>
                            </div>
                        </div>        
                   
                   
                    
                    
		</div>
	</div>
</div>
  <?php require_once('loader.php'); ?>                 
 <script>
 	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
	
 	
 </script>

<script>
    $(document).ready(function () {
        App.init();
        // TableManageButtons.init();
    });

</script>