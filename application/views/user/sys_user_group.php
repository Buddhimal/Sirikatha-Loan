<h1 class="page-header">User Group
    <small>Group List...</small>
</h1>

<div id="main-wrapper" class="container">
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                <div class="panel-heading">

                    <h4 class="panel-title">User Group List</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">

                        <!--           <div class="col-md-6">-->
                        <?php if (isset($message) && $message != "") { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $message; ?>
                            </div>

                        <?php } ?>
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <!--                                <a href="-->
                                <?php //echo base_url() ?><!--index.php/user/user/add_new_group">-->
                                <button id="add_new_group" type="button" class="btn btn-primary m-r-5 m-b-5"><i
                                            class="fa fa-plus"></i> New User Group
                                </button>
                                <!--                                </a>-->
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Group</th>
                                            <th>Users</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $row_count = 1;
                                        foreach ($user_groups->result() as $groups) { ?>
                                            <tr style="text-align: ">
                                                <th scope="row">
                                                    <?php echo $row_count ?>
                                                </th>
                                                <td>
                                                    <a
                                                            href="<?php echo base_url() ?>index.php/user/user/user_group?group_id=<?php echo base64_encode($groups->user_group_id) ?>">
                                                        <?php echo $groups->user_group ?> </a>
                                                </td>
                                                <td>
                                                    <?php echo $groups->user_count ?>
                                                </td>
                                                <td>
<!--                                                    <a href="--><?php //echo base_url() ?><!--index.php/user/user/delete_user_group?group_id=--><?php //echo base64_encode($groups->user_group_id) ?><!--">-->
<!--                                                        <i title="Delete" class="fa fa-trash fa-lg"-->
<!--                                                           style="color: red"></i></a> -->


                                                        <i title="Delete" onclick="confirm(<?php echo ($groups->user_group_id) ?>)" class="fa fa-trash fa-lg"
                                                           style="color: red"></i>
                                                </td>

                                            </tr>
                                            <?php $row_count++;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--	</div>-->
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title">Add New User Group</h4>
            </div>

            <form method="post" action="<?php echo base_url()?>index.php/user/user/add_new_group"/>
            <div class="modal-body">
                <div class="form-group">
                    <li class="fa fa-users">&nbsp;&nbsp;</li>
                    <label>New User Group</label>
                    <input class="form-control input-rounded" name="user_group"
                           placeholder="Enter User Group" required="" type="text">
                </div>
                <div class="modal-footer">
                    <div class="col-md-4 pull-right">
                        <button type="submit" class="btn btn-primary m-r-5 m-b-5">
                            <i class="fa fa-user"></i>
                            Submit
                        </button>

                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script>

    function confirm(id) {
        // var id = atob(id);
        swal({
                title: "Are you sure?",
                text: "Your will not be able to recover this Group!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                // swal("Deleted!", "Your imaginary file has been deleted.", "success");

                location.replace("<?php echo base_url() ?>index.php/user/user/delete_user_group?group_id=" + btoa(id));

            });

        // swal({
        //     title: "Are you sure?",
        //     // text: "Your will not be able to recover this imaginary file!",
        //     type: "warning",
        //     showCancelButton: true,
        //     confirmButtonClass: "btn-danger",
        //     confirmButtonText: "Yes, delete it!",
        //     closeOnConfirm: false
        // }).then(() => {
        //     if (result.value) {
        //         // handle Confirm button click
        //         alert("yes");
        //     } else {
        //         alert("No");
        //         // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
        //     }
        // });
    }

    // swal("Here's a message!")
    $('#add_new_user').click(function (e) {


        $('#modal-dialog').modal({backdrop: 'static', keyboard: false})

    });
</script>


<?php require_once('loader.php'); ?>
<script>
    $(window).load(function () {
        $(".se-pre-con").fadeOut("slow");
        ;
    });

    $('#add_new_group').click(function (e) {
        $('#modal-dialog').modal({backdrop: 'static', keyboard: false})
    });
</script>

<script>
    $(document).ready(function () {
        App.init();
        // TableManageButtons.init();
    });

</script>