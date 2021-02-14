<title> SIRIKATHA | Set Loan </title>

<h1 class="page-header">New Loan
    <small> Set New Loan...</small>
</h1>
<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                </div>
                <h4 class="panel-title">Loan Details</h4>
            </div>
            <div class="panel-body">
                <form id="group_data" class="form-horizontal" action="" method="post">
                    <?php if (isset($msg) && $msg != "") { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg; ?>
                        </div>

                    <?php } ?>
                    <h4 class="m-t-0">Client Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Number</label>
                                <div class="col-md-9">
                                    <input type="text" id="loan_id" name="loan_id" class="form-control"
                                           placeholder="Client Number" value="<?php echo $loan_number ?>" readonly
                                           style="opacity: 1"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Available Groups</label>

                                <div class="col-md-9">
                                    <select class="multiple-select2 form-control" id="group_id" name="group_id"
                                            placeholder="Select Client Group">
                                        <option></option>
                                        <?php foreach ($group_names->result() as $group) { ?>

                                            <option value="<?php echo $group->id ?>"><?php echo $group->group_id . '-' . $group->group_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <span id="group_id_span"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Client List</label>

                                <div class="col-md-9">
                                    <select class="multiple-select2 form-control" id="client_id" name="client_id"
                                            placeholder="Select Client">
                                    </select>
                                    <span id="client_id_span"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Number of Loans</label>
                                <div class="col-md-9">
                                    <input type="text" id="client_level" name="client_level" class="form-control"
                                           placeholder="Number of Loans" readonly style="opacity: 1"/>
                                    <span id="client_level_span"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <h4 class="m-t-0">Loan Information</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Type</label>

                                <div class="col-md-9">
                                    <select class="multiple-select2 form-control" id="loan_type_id" name="loan_type_id"
                                            placeholder="Select Loan Type">
                                        <option></option>
                                        <?php foreach ($loan_types->result() as $loan_types) { ?>

                                            <option value="<?php echo $loan_types->id ?>"><?php echo $loan_types->loan_name . " (" . $loan_types->amount . ")" ?></option>
                                        <?php } ?>
                                    </select>
                                    <span id="loan_type_id_span"></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Start Date</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Select Loan Date" class="form-control"
                                           name="loan-date" id="loan-date">
                                    <span id="loan-date_span"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Amount</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Loan amount" class="form-control"
                                           name="loan_amount" id="loan_amount" readonly>
                                    <!--                                    <span id="loan_amount_span"></span>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Installment</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Loan amount" class="form-control"
                                           name="loan_installment" id="loan_installment" readonly>
                                    <!--                                    <span id="loan_amount_span"></span>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Number of Installments</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Loan amount" class="form-control"
                                           name="no_of_installment" id="no_of_installment" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">First Installment Date</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="First Installment Date" class="form-control"
                                           name="first_installment" id="first_installment" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Installment Date</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Last Installment Date" class="form-control"
                                           name="last_installment" id="last_installment" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Total Payable Amount</label>

                                <div class="col-md-9">
                                    <input type="text" placeholder="Total payable Amount" class="form-control"
                                           name="total_amount" id="total_amount" readonly>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button id="btn_update" type="submit" class="btn btn-success pull-right">Save Client</button>

                </form>
            </div>
        </div>
    </div>
    <!-- end panel -->
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/src/jquery-key-restrictions.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/add_new_loan.js"></script>


<script src="<?php echo base_url() ?>assets/js/table-manage-buttons.demo.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/apps.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script language="JavaScript" src="https://rhashemian.github.io/js/NumberFormat.js"></script>
<script>

    //(function ($) {
    //    "use strict";
    //
    //    $(function () {
    //
    //        const submitFilterForm = {
    //
    //            $txtGroup: $("#group_id"),
    //            $txtSearch: $("#txt-search"),
    //            $selStatus: $("#sel-status"),
    //
    //            init: function () {
    //                this.handleEvents();
    //            },
    //            handleEvents: function () {
    //                const context = this;
    //                this.$txtGroup.on("change", function () {
    //                    context.getClientListForGroup();
    //                });
    //            },
    //            getClientListForGroup: function () {
    //                const context = this;
    //
    //                $.ajax({
    //                    url: "<?php //echo base_url()?>//dashboard/select_clients_for_group",
    //                    method: 'POST',
    //                    data: {group_id: context.$txtGroup.val()},
    //                    dataType: 'json',
    //                }).done(function (data) {
    //                    console.log('done', data);
    //
    //                }).fail(function (error) {
    //                    console.log("error", error);
    //                });
    //
    //            }
    //
    //        };
    //        submitFilterForm.init();
    //
    //    });
    //
    //})(jQuery);


    var spinner = $('#loader');


    $('#group_id').on('change', function () {

        spinner.show();

        $.ajax({
            url: '<?php echo base_url()?>dashboard/select_clients_for_group',
            type: 'POST',
            dataType: 'json',
            data: {group_id: this.value},
            dataType: 'json',
            success: function (response) {

                var len = response.length;

                $("#client_id").empty();
                $("#client_id").append("<option selected></option>");

                for (var i = 0; i < len; i++) {
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    var client_id = response[i]['client_id'];

                    $("#client_id").append("<option value='" + id + "'>" + client_id + "-" + name + "</option>");

                }
                spinner.hide();
            }
        });
    });


    $('#client_id').on('change', function () {

        spinner.show();

        $.ajax({
            url: '<?php echo base_url()?>dashboard/select_client_level',
            type: 'POST',
            dataType: 'json',
            data: {client_id: this.value},
            dataType: 'json',
            success: function (response) {

                $("#client_level").val((response.loan_level));

                spinner.hide();
            }

        });
    });


    $('#loan_type_id').on('change', function () {

        spinner.show();

        var loan_date = document.getElementById('loan-date').value;
        var first_date = document.getElementById('first_installment').value;

        $.ajax({
            url: '<?php echo base_url()?>dashboard/select_loan_details',
            type: 'POST',
            dataType: 'json',
            data: {loan_type_id: this.value},
            dataType: 'json',

            success: function (response) {
                $("#loan_amount").val(numberWithCommas(response.loan_amount));
                $("#loan_installment").val(numberWithCommas(response.instalment_amount));
                $("#no_of_installment").val(numberWithCommas(response.numbe_of_installments));
                $("#total_amount").val(numberWithCommas(response.instalment_amount * response.numbe_of_installments));
                if (loan_date != '') {
                    var ld = new Date(first_date);
                    ld.setDate(ld.getDate() + response.numbe_of_installments * 7);
                    $("#last_installment").val(moment(ld).format('YYYY-MMM-DD'));
                }
                spinner.hide();

            }
        });
    });


    $('#loan-date').on('change', function () {

        var loan_date = document.getElementById('loan-date').value;
        var installments = document.getElementById('no_of_installment').value;
        var loan_type = document.getElementById('loan_type_id').value;
        if (loan_date != '') {
            spinner.show();
            var d = new Date(loan_date);
            var todat = d.getDay();

            d.setDate(d.getDate() + (3 + 7 - d.getDay()) % 7);

            if (todat == 3) {
                d.setDate(d.getDate() + 7);
            }

            $("#first_installment").val(moment(d).format('YYYY-MMM-DD'));
        } else {
            $("#d.setDate(d.getDate() + 7);").val('');
        }
        spinner.show();


        if (loan_type != '') {
            spinner.show();
            d.setDate(d.getDate() + installments * 7);
            $("#last_installment").val(moment(d).format('YYYY-MMM-DD'));
        }

        spinner.hide();


    });

    function numberWithCommas(x) {

        return FormatNumberBy3(x, ".", ",");

    }

    $(document).ready(function () {
        App.init();
        FormPlugins.init();
    });

</script>