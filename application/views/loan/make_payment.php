<title> SIRIKATHA | Loan Payment </title>

<h1 class="page-header">Loan Details
    <small> Make Payment...</small>
</h1>
<div class="panel panel-inverse" data-sortable-id="form-plugins-4">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Make Payment</h4>
    </div>
    <?php $loan=$loan_details->row(); ?>

    <div class="panel-body panel-form">
        <form class="form-horizontal form-bordered">
            <div class="form-group">
                <label class="col-md-4 control-label">Loan ID</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Loan ID" value="<?php echo $loan->loan_id ?>" readonly/>
                    <input type="hidden" class="form-control" id="loan_id" name="loan_id" placeholder="Loan ID" value="<?php echo $loan->pk_loan_id ?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Client ID</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Client ID" value="<?php echo $loan->client_id ?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Client Name</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Client Name" value="<?php echo $loan->client_name ?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Loan Amount</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="loan_type" value="<?php echo 'Rs. '. number_format($loan->loan_amount,2,'.',',') .' ('. $loan->loan_name.' Loan)' ?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Loan Date</label>
                <div class="col-md-8">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="start" placeholder="Date Start" value="<?php echo $loan->loan_date ?>" readonly />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="form-control" name="end" placeholder="Date End" value="<?php echo $loan->loan_end_date ?>" readonly />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Installments</label>
                <div class="col-md-8">
                    <div class="input-group ">
                        <input type="text" class="form-control" name="start" placeholder="Amount" value="<?php echo 'Rs. '. number_format($loan->instalment_amount,2,'.',',') ?>" readonly />
                        <span class="input-group-addon">X</span>
                        <input type="text" class="form-control" name="end" placeholder="By" value="<?php echo $loan->numbe_of_installments ?> Installments" readonly />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Paid Amount</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Client ID" value="<?php  echo 'Rs. '. number_format( $loan->total_paid_amount ,2,'.',',')?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Balance Amount Amount</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Client ID" value="<?php  echo 'Rs. '. number_format( $loan->payable_amount-$loan->total_paid_amount ,2,'.',',')?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Next Installment Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="" placeholder="Client ID" value="<?php  echo $loan->next_installment_date?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Amount Paid</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="amount_paid" placeholder="Amount"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Date Paid</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="datepicker-autoClose" placeholder="Date Paid" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-sm btn-success pull-right">Add Payment</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- end panel -->
<!-- begin panel -->


<script>
    $(document).ready(function () {
        App.init();
        FormPlugins.init();
    });

</script>