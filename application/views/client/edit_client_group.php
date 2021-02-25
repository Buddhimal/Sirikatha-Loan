<title> SIRIKATHA | New Client Group </title>

<h1 class="page-header">Edit Group
    <small> Edit Group...</small>
</h1>
<!-- end page-header -->
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>-->

<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                                class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                                class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                       data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                       data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Group Details</h4>
            </div>
            <div class="panel-body">
                <form id="group_data" class="form-horizontal" action="" method="post">
                    <?php if (isset($msg) && $msg != "") { ?>
                        <div class="alert <?php echo $class_alert ?>" role="alert">
                            <?php echo $msg; ?>
                        </div>

                    <?php } ?>

                    <h4 class="m-t-0">Personal Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Group Number</label>
                                <div class="col-md-9">
                                    <input type="hidden" id="id" name="id"
                                           value="<?php echo $group_data->row()->pk_group_id ?>">
                                    <input type="text" id="group_id" name="group_id" class="form-control"
                                           placeholder="Client Number"
                                           value="<?php echo $group_data->row()->group_id ?>" readonly
                                           style="opacity: 1"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Group Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="group_name" name="group_name" class="form-control"
                                           placeholder="Group Name"
                                           value="<?php echo $group_data->row()->group_name ?>"/>
                                    <span id="group_name_span"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Available Clients</label>

                                <div class="col-md-9">
                                    <select class="multiple-select2 form-control" id="client" name="client[]"
                                            multiple="multiple" placeholder="Select 3 Clients">

                                        <!-- Add existing clients to the select options -->
                                        <?php foreach ($group_data->result() as $client) { ?>

                                            <option style="color: red" selected
                                                    value="<?php echo $client->pk_client_id ?>"><?php echo $client->client_id . '-' . $client->client_name ?></option>
                                        <?php } ?>

                                        <?php foreach ($client_names->result() as $client) { ?>

                                            <option value="<?php echo $client->id ?>"><?php echo $client->client_id . '-' . $client->client_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <span id="client_span"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--                    <div class="col-md-6"></div>-->

                    <button id="btn_update" class="btn btn-success pull-right">Save Client</button>

            </div>
            </form>
        </div>
    </div>
    <!-- end panel -->
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/src/jquery-key-restrictions.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/add_new_group.js"></script>


<script src="<?php echo base_url() ?>assets/js/table-manage-buttons.demo.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/apps.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js"></script>


<style>
    .select2-results__options[id*="client"] .select2-results__option:nth-child(1) {
        color: red;
    }

    .select2-results__options[id*="client"] .select2-results__option:nth-child(2) {
        color: red;
    }

    .select2-results__options[id*="client"] .select2-results__option:nth-child(3) {
        color: red;
    }
</style>


<script>


    $(document).ready(function () {
        App.init();
        FormPlugins.init();
    });

</script>