<title> SIRIKATHA | Loan Payment </title>

<h1 class="page-header">Loan Details
    <small> Make Payment...</small>
</h1>

<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">

        <div class="panel panel-inverse" data-sortable-id="form-plugins-4">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                </div>
                <h4 class="panel-title">Make Payment</h4>
            </div>
            <?php
            $loan = $loan_details->row(); ?>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <?php
                        if ($_GET['type'] = "paid") { ?>
                            <div class="alert alert-success" role="alert">
                                <?php
                                echo "Payment Added Successfully"; ?>
                            </div>

                            <?php
                        } ?>
                    </div>
                </div>

                <form id="payment_data" action="" method="post" class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Loan ID</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="id_loan" placeholder="Loan ID" value="<?php
                            echo $loan->loan_id ?>" readonly/>
                            <input type="hidden" class="form-control" id="loan_id" name="loan_id_pk"
                                   placeholder="Loan ID"
                                   value="<?php
                                   echo $loan->pk_loan_id ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Client ID</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="client_id" placeholder="Client ID" value="<?php
                            echo $loan->client_id ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Client Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="client_name" placeholder="Client Name"
                                   value="<?php
                                   echo $loan->client_name ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Loan Amount</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="loan_amount" placeholder="loan_type"
                                   value="<?php
                                   echo 'Rs. ' . number_format($loan->loan_amount, 2, '.', ',') . ' (' . $loan->loan_name . ' Loan)' ?>"
                                   readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Loan Date</label>
                        <div class="col-md-8">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Date Start" value="<?php
                                echo $loan->loan_date ?>" readonly/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" placeholder="Date End" value="<?php
                                echo $loan->loan_end_date ?>" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Installments</label>
                        <div class="col-md-8">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Amount" value="<?php
                                echo 'Rs. ' . number_format($loan->instalment_amount, 2, '.', ',') ?>" readonly/>
                                <input type="hidden" class="form-control" placeholder="Amount" name="instalment_amount"
                                       value="<?php
                                       echo $loan->instalment_amount ?>" readonly/>
                                <span class="input-group-addon">X</span>
                                <input type="text" class="form-control" placeholder="Installments" value="<?php
                                echo $loan->numbe_of_installments ?> Installments" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Paid Amount</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="paid_amount" placeholder="paid Amount"
                                   value="<?php
                                   echo 'Rs. ' . number_format($loan->total_paid_amount, 2, '.', ',') ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Balance Amount</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="balance_amount" placeholder="Balance Amount"
                                   value="<?php
                                   echo 'Rs. ' . number_format($loan->payable_amount - $loan->total_paid_amount, 2, '.', ',') ?>"
                                   readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Next Installment Date</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="next_date" placeholder="Next Date" value="<?php
                            echo $loan->next_installment_date ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Amount Paid</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="amount_paid" name="amount_paid"
                                   placeholder="Paid Amount"/>
                            <span id="amount_paid_span"></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Date Paid</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="datepicker-autoClose" name="date_paid"
                                   placeholder="Date Paid"/>
                            <span id="date_paid_span"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-8">
                            <button type="submit" id="btn_update" class="btn btn-sm btn-success pull-right">Add
                                Payment
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- end panel -->
<!-- begin panel -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="<?php
echo base_url() ?>assets/js/src/jquery-key-restrictions.js"></script>
<script type="text/javascript" src="<?php
echo base_url() ?>js/make_payment.js"></script>

<script>
    $(document).ready(function () {
        App.init();
        FormPlugins.init();
    });

</script>