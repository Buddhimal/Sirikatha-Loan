<title> SIRIKATHA | Loan Types </title>

<h1 class="page-header">Loan Types
    <small>Loans...</small>
</h1>

<?php
//
//var_dump($edit_data->loan_name);
//die();
//?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">New Loan Type</h4>
            </div>
            <div class="panel-body">
                <?php if (isset($msg) && $msg != "") { ?>
                    <div class="alert <?php echo $class; ?>" role="alert">
                        <?php echo $msg; ?>
                    </div>

                <?php } ?>
                <form id="frm_loan_type" class="form-horizontal" action="/loan_types" method="POST">
                    <h4 class="m-t-0">Loan Type Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Name</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="type_id"
                                           value="<?php echo $type == "edit" ? $edit_data->id : "" ?>">
                                    <input type="text" id="loan_name" name="loan_name" class="form-control"
                                           placeholder="Loan Name"
                                           value="<?php echo $type == "edit" ? $edit_data->loan_name : "" ?>"
                                        <?php echo $type == "edit" ? "readonly" : "" ?>
                                    />
                                    <span id="loan_name_span"></span>
                                    <span id="loan_name_span2"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Amount</label>
                                <div class="col-md-9">
                                    <input type="number" id="loan_amount" name="loan_amount" class="form-control"
                                           placeholder="Loan Amount"
                                           value="<?php echo $type == "edit" ? $edit_data->loan_amount : "" ?>"/>
                                    <span id="loan_amount_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Instalment Amount</label>
                                <div class="col-md-9">
                                    <input type="number" id="installment_amount" name="installment_amount"
                                           class="form-control"
                                           value="<?php echo $type == "edit" ? $edit_data->instalment_amount : "" ?>"
                                           placeholder="Instalment Amount"/>
                                    <span id="installment_amount_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Number of Instalments</label>
                                <div class="col-md-9">
                                    <input type="number" id="numbe_of_installments" name="numbe_of_installments"
                                           class="form-control"
                                           value="<?php echo $type == "edit" ? $edit_data->numbe_of_installments : "" ?>"
                                           placeholder="Number of Instalments"/>
                                    <span id="numbe_of_installments_span"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Color Theme</label>
                                <div class="col-md-9">
                                    <select name="color_theme" id="color_theme">
                                        <option value="#4CD964">Green</option>
                                        <option value="#FF9500">Orange</option>
                                        <option value="#ff887c">Red</option>
                                        <option value="#007aff">Dark Blue</option>
                                        <option value="#5AC8FA">Light Blue</option>
                                        <option value="#83d6fb">Aqua Light</option>
                                        <option value="#8280e0">Purple</option>
                                        <option value="#ffd940">Yellow</option>
                                    </select>
                                    <span id="color_theme_span"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="status" id="status">
                                        <option value="1" <?php echo $type == "edit" ? $edit_data->active_status == 1 ? "selected" : "" : ""; ?>>
                                            Active
                                        </option>
                                        <option value="0" <?php echo $type == "edit" ? $edit_data->active_status == 0 ? "selected" : "" : ""; ?>>
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?php if ($type == "edit") { ?>
                                <button type="submit" class="btn btn-primary pull-right" id="btn_update"> Update
                                </button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-primary pull-right" id="btn_save"> Save</button>
                            <?php } ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Loan Types</h4>
            </div>
            <div class="panel-body">

                <table id="data-table-list" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">Loan Name</th>
                        <th style="text-align: center">Loan Amount</th>
                        <th style="text-align: center">Instalment Amount</th>
                        <th style="text-align: center">Number of Instalments</th>
                        <th style="text-align: center">Color Theme</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($loan_types->result() as $type) { ?>
                        <tr>
                            <td><?php echo $type->loan_name ?></td>
                            <td><?php echo $type->loan_amount ?></td>
                            <td><?php echo $type->instalment_amount ?></td>
                            <td><?php echo $type->numbe_of_installments ?></td>
                            <td style="text-align: center;">
                                <button class="btn" style="background-color: <?php echo $type->color ?>"></button>
                            </td>
                            <td style="text-align: center"><?php
                                echo (string)$type->active_status == "1" ? "<span class='label label-success'>Active</span>" : "";
                                echo (string)$type->active_status == "0" ? "<span class='label label-danger'>Inactive</span>" : "";
                                ?></td>
                            <td style="text-align: center">
                                <a href="<?php echo base_url() ?>loan_types?type_id=<?php echo base64_encode($type->id) ?>"><i
                                            style="color: dodgerblue; font-size: 20px;" title="Edit"
                                            class="fa fa-pencil"> </i></a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var baseUrl = "<?php echo base_url() ?>"

</script>

<script type="text/javascript" src="<?php echo base_url() ?>js/loan_types.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/src/jquery-key-restrictions.js"></script>

<script>
    $(document).ready(function () {
        App.init();

        //init color picker
        $('select[name="color_theme"]').simplecolorpicker("selectColor", "<?php echo isset($edit_data->color) ? $edit_data->color : '#7bd148'  ?>");
    });

</script>