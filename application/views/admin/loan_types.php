<title> SIRIKATHA | Loan Types </title>

<h1 class="page-header">Loan Types
    <small>Loans...</small>
</h1>

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
                <form id="frm_loan_type" class="form-horizontal" action="" method="POST">
                    <h4 class="m-t-0">Loan Type Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="loan_name" name="loan_name" class="form-control"
                                           placeholder="Loan Name"/>
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
                                           placeholder="Loan Amount"/>
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
                                        <option value="1"> Active</option>
                                        <option value="0"> Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btn_save"> Save</button>
                            <!--                            <button type="submit" class="btn btn-primary pull-right" id="btn_update"> Update</button>-->
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

                <table id="data-table-list" class="table table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th>Loan Name</th>
                        <th>Loan Amount</th>
                        <th>Instalment Amount</th>
                        <th>Number of Instalments</th>
                        <th>Color Theme</th>
                        <th>Status</th>
                        <th>Action</th>
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
                            <td><?php echo $type->active_status ?></td>
                            <td><?php echo $type->loan_name ?></td>
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
        $('select[name="color_theme"]').simplecolorpicker("selectColor", "<?php echo isset($active_color) ? $active_color : '#7bd148'  ?>");
    });

</script>