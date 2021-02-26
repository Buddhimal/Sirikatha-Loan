<title> SIRIKATHA | Loan List </title>

<h1 class="page-header">Loan List
    <small>All Loans...</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Loans</h4>
            </div>
            <div class="panel-body">

                <div class="row">
                    <form class="form-inline" id="form_filter" action="" method="GET">
                        <div class="form-group m-r-10">
                            <input type="text" class="form-control" id="loan_number" name="loan_number"
                                   value="<?php echo isset($_GET['loan_number']) ? $_GET['loan_number'] : '' ?>"
                                   placeholder="Loan Number"/>
                        </div>
                        <div class="form-group m-r-10">
                            <input type="text" class="form-control" id="client_number" name="client_number"
                                   value="<?php echo isset($_GET['client_number']) ? $_GET['client_number'] : '' ?>"
                                   placeholder="Client Number"/>
                        </div>
                        <div class="form-group m-r-10">
                            <input type="text" class="form-control" id="client_name" name="client_name"
                                   value="<?php echo isset($_GET['client_name']) ? $_GET['client_name'] : '' ?>"
                                   placeholder="Client Name"/>
                        </div>
                        <div class="form-group m-r-10">
                            <select class="form-control" name="loan_type_id" id="loan_type_id">
                                <option selected value="">Select Loan Type</option>
                                <?php foreach ($loan_types->result() as $loan_types) { ?>
                                    <?php $type = isset($_GET['loan_type_id']) ? $_GET['loan_type_id'] : ''; ?>

                                    <option value="<?php echo $loan_types->id ?>" <?php echo $type == $loan_types->id ? "selected" : "" ?> ><?php echo $loan_types->loan_name . " (" . $loan_types->amount . ")" ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group m-r-10">
                            <select class="form-control" id="loan_status" name="loan_status">
                                <?php $status = isset($_GET['loan_status']) ? $_GET['loan_status'] : '9'; ?>

                                <option selected value="">Select Loan status</option>
                                <option value="<?php echo LoanStatus::PENDING ?>"<?php echo (string)$status == (string)LoanStatus::PENDING ? "selected" : "" ?>>
                                    Pending
                                </option>
                                <option value="<?php echo LoanStatus::ACTIVE ?>"<?php echo $status == LoanStatus::ACTIVE ? "selected" : "" ?>>
                                    Active
                                </option>
                                <option value="<?php echo LoanStatus::FINISHED ?>"<?php echo $status == LoanStatus::FINISHED ? "selected" : "" ?>>
                                    Finished
                                </option>
                                <option value="<?php echo LoanStatus::REJECTED ?>"<?php echo $status == LoanStatus::REJECTED ? "selected" : "" ?>>
                                    Rejected
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Filter</button>
                        <button type="button" id="clear_form" class="btn btn-sm btn-default">Clear</button>
                    </form>
                </div>
            </div>
            <div class="panel-body">

                <table id="data-table-list" class="table table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th>Loan Number</th>
                        <th>Client ID</th>
                        <th width="120">Client Name</th>
                        <th>Client Group</th>
                        <th>Loan Name</th>
                        <th>Loan Amount</th>
                        <th>Status</th>
                        <th>Installment Amount</th>
                        <th>Number Of Installments</th>
                        <th>LoanStartDate</th>
                        <th>LoanEndDate</th>
                        <th>Total payable Amount</th>
                        <th>Paid Amount</th>
                        <th>Paid Installments</th>
                        <th>LastPaidDate</th>
                        <th>Pending Installments</th>
                        <th style="width: 55px; text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($loan_details->result() as $loan) { ?>

                        <tr class="odd gradeX">
                            <td><?php echo $loan->loan_id; ?></td>
                            <td><?php echo $loan->client_id; ?></td>
                            <td title="<?php echo $loan->client_name ?>">
                                <h8><?php echo $loan->client_name ?></h8>
                            </td>
                            <td><?php echo $loan->group_id; ?></td>
                            <td><?php echo $loan->loan_name; ?></td>
                            <td><?php echo number_format($loan->loan_amount, 2, '.', ','); ?></td>
                            <td>

                                <?php
                                echo (string)$loan->loan_status == (string)LoanStatus::ACTIVE ? "<span class='label label-primary'>Active</span>" : "";
                                echo (string)$loan->loan_status == (string)LoanStatus::PENDING ? "<span class='label label-warning'>Pending</span>" : "";
                                echo (string)$loan->loan_status == (string)LoanStatus::REJECTED ? "<span class='label label-danger'>Rejected</span>" : "";
                                echo (string)$loan->loan_status == (string)LoanStatus::BLACKLISTED ? "<span class='label label-danger'>Blacklisted</span>" : "";
                                echo (string)$loan->loan_status == (string)LoanStatus::FINISHED ? "<span class='label label-success'>Finished</span>" : "";
                                ?>
                            </td>
                            <td><?php echo number_format($loan->instalment_amount, 2, '.', ','); ?></td>
                            <td><?php echo $loan->numbe_of_installments; ?></td>
                            <td><?php echo $loan->loan_date; ?></td>
                            <td><?php echo $loan->loan_end_date; ?></td>
                            <td><?php echo number_format($loan->payable_amount, 2, '.', ','); ?></td>
                            <td><?php echo number_format($loan->total_paid_amount, 2, '.', ','); ?></td>
                            <td><?php echo $loan->total_paid_amount / $loan->instalment_amount; ?></td>
                            <td><?php echo $loan->last_installment_paid_date; ?></td>
                            <td>

                                <?php if ($loan->pending_installments <= 0) echo "0"; else echo $loan->pending_installments; ?>

                            </td>
                            <td style="text-align: center">
                                <a href="<?php echo base_url() ?>loan_profile?client_id=<?php echo base64_encode($loan->pk_client_id) ?>">
                                    <i style="color: green; font-size: 20px;" title="Approve"
                                       class="fa fa-user">
                                    </i>
                                </a> &nbsp &nbsp

                                <?php if ((string)$loan->loan_status != (string)LoanStatus::PENDING && (string)$loan->loan_status != (string)LoanStatus::FINISHED && (string)$loan->loan_status != (string)LoanStatus::REJECTED) { ?>
                                    <a href="<?php echo base_url() ?>make_payment?loan_id=<?php echo base64_encode($loan->pk_loan_id) ?>"><i
                                                style="color: orangered; font-size: 20px;" title="Make Payment"
                                                class="fa fa-money"> </i></a> &nbsp &nbsp
                                <?php } ?>

                                <!--                                <a href="#modal-blacklist" class="blacklist" data-toggle="modal"-->
                                <!--                                   data-client_pk="-->
                                <?php //echo $loan->pk_client_id ?><!--"-->
                                <!--                                   data-loan_pk="-->
                                <?php //echo $loan->pk_loan_id ?><!--"-->
                                <!--                                   data-client_id="-->
                                <?php //echo $loan->client_id ?><!--"-->
                                <!--                                   data-client_name="-->
                                <?php //echo $loan->client_name ?><!--">-->
                                <!--                                    <i title="Add to Blacklist" style="font-size: 20px; color: red"-->
                                <!--                                       class="fa fa-ban"></i></a>-->
                            </td>

                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-blacklist">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="frm_blacklist" action="<?php echo base_url() ?>/add_to_blacklist"
                  method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Blacklist Client : <label id="lbl_name"></label> (<label
                                id="lbl_id"> </label>)</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="client_pk" id="client_pk">
                    <input type="hidden" name="loan_pk" id="loan_pk">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Reason</label>
                        <div class="col-md-10">
                            <textarea name="reason" id="reason" class="form-control"
                                      placeholder="Enter Reason"> </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-sm btn-danger" id="btn_block">Block</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/loan_list.js"></script>


<script>
    $(document).ready(function () {
        App.init();
        TableManageButtons.init();
    });

</script>