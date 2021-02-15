<title> SIRIKATHA | Loan Profile </title>

<h1 class="page-header">Client Profile
    <small>Loan History</small>
</h1>

<?php

//var_dump(count($loan_list['pending_loans']));
//die();

?>

<div class="col-md-12">
    <div class="panel-group" id="accordion">
        <!--  Pending Loan list -->
        <?php $row = 0;
        foreach ($loan_list['pending_loans'] as $loan) {

            $loan_details = $loan['loan_details'];
            $client_details = $loan['client_details'];
            ?>
            <div class="panel panel-warning overflow-hidden">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse"
                           data-parent="#accordion"
                           href="#collapseOne_<?php echo $loan_details->id ?>">
                            <i style="font-size:20px" class="fa fa-plus-circle pull-right"></i>
                            <?php echo $loan_details->loan_id . ' (' . date("d/M/Y", strtotime($loan_details->loan_date)) . ' to ' . date("d/M/Y", strtotime($loan_details->loan_end_date)) . ')' ?> <?php
                            echo (string)$loan_details->loan_status == (string)LoanStatus::ACTIVE ? "<span class='label label-primary'>Active</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::PENDING ? "<span class='label label-warning'>Pending</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::REJECTED ? "<span class='label label-danger'>Rejected</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::BLACKLISTED ? "<span class='label label-danger'>Blacklisted</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::FINISHED ? "<span class='label label-success'>Finished</span>" : "";
                            ?>
                        </a>
                    </h3>
                </div>
                <div id="collapseOne_<?php echo $loan_details->id ?>" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#default-tab-0_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Loan</span>
                                        <span class="hidden-xs">Loan Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-1_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Personal</span>
                                        <span class="hidden-xs">Personal Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-2_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Job</span>
                                        <span class="hidden-xs">Job Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-3_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Steward</span>
                                        <span class="hidden-xs">Steward Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-4_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Non-Relation</span>
                                        <span class="hidden-xs">Non-Relation Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-5_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Other</span>
                                        <span class="hidden-xs">Other Information</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="default-tab-0_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-money"></i> Loan Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Group Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->group_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Amount</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_amount ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Status</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title">
                                                            <?php
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::ACTIVE ? "<span class='label label-primary'>Active</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::PENDING ? "<span class='label label-warning'>Pending</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::REJECTED ? "<span class='label label-danger'>Rejected</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::BLACKLISTED ? "<span class='label label-danger'>Blacklisted</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::FINISHED ? "<span class='label label-success'>Finished</span>" : "";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Installment Amount</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo number_format($loan_details->installment_amount, 2, '.', ',') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Number of Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->number_of_installments ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Start Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo date("d/M/Y", strtotime($loan_details->loan_date)) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">End Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo date("d/M/Y", strtotime($loan_details->loan_end_date)) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Paid Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Pending Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Last Paid Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->last_paid_date != '' ? date("d/M/Y", strtotime($loan_details->last_paid_date)) : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="invoice-price">
                                                <div class="invoice-price-left">
                                                    <div class="invoice-price-row">
                                                        <div class="sub-price">
                                                            <small>SUBTOTAL</small>
                                                            <?php echo "RS " . number_format($loan_details->payable_amount, 2, '.', ',') ?>
                                                        </div>
                                                        <div class="sub-price">
                                                            <i class="fa fa-minus"></i>
                                                        </div>
                                                        <div class="sub-price">
                                                            <small>PAID Amount</small>
                                                            <?php echo "RS " . number_format($loan_details->total_paid_amount, 2, '.', ',') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="invoice-price-right">
                                                    <small>BALANCE</small>
                                                    <?php echo number_format($loan_details->payable_amount - $loan_details->total_paid_amount, 2, '.', ',') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-1_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-user"></i> Personal Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Client Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->client_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Client Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->client_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gender</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->gender == "male" ? "Male" : $client_details->gender == "female" ? "Female" : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">NIC</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->nic ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Election Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->election_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Current Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->current_address != "" ? $client_details->current_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Telephone Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-2_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-tasks"></i> Job Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Job Title</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->job_title ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Monthly Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->monthly_income ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Office Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_address != '' ? $client_details->business_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Office Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_tp != '' ? $client_details->business_tp : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-3_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-users"></i> Steward Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward NIC</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_nic ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Job</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_job != '' ? $client_details->steward_job : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Office Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_job_address != '' ? $client_details->steward_job_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_income != '' ? $client_details->steward_income : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-4_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-users"></i> Non-Relation Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-5_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-info-circle"></i> Other Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. of Family Members</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->number_of_family_members . ' Members' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 1</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_01 != '' ? $client_details->other_income_01 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 2</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_02 != '' ? $client_details->other_income_02 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 3</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_03 != '' ? $client_details->other_income_03 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Type</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->loan_reason ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Type</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_type ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Monthly
                                                        Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_monthly_income != '' ? number_format($client_details->business_monthly_income, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Monthly
                                                        Outcome</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_monthly_outcome != '' ? number_format($client_details->business_monthly_outcome, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Profit</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_profit != '' ? number_format($client_details->business_profit, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if (in_array(SYS_APPROVE_LOANS, $permission_list)) { ?>
                                <div class="row">
                                    <button class="btn btn-primary pull-right"
                                            onclick="approve_loan('<?php echo base64_encode($loan_details->id) ?>')">
                                        Approve
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ++$row;
        } ?>

        <!-- Finished Loan List-->
        <?php foreach ($loan_list['finished_loans'] as $loan) {
            $loan_details = $loan['loan_details'];
            $client_details = $loan['client_details'];
            ?>
            <div class="panel panel-inverse overflow-hidden">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                           data-parent="#accordion"
                           href="#collapseOne_<?php echo $loan_details->id ?>">
                            <i style="font-size:20px" class="fa fa-plus-circle pull-right"></i>
                            <?php echo $loan_details->loan_id . ' (' . date("d/M/Y", strtotime($loan_details->loan_date)) . ' to ' . date("d/M/Y", strtotime($loan_details->loan_end_date)) . ')' ?> <?php
                            echo (string)$loan_details->loan_status == (string)LoanStatus::ACTIVE ? "<span class='label label-primary'>Active</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::PENDING ? "<span class='label label-warning'>Pending</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::REJECTED ? "<span class='label label-danger'>Rejected</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::BLACKLISTED ? "<span class='label label-danger'>Blacklisted</span>" : "";
                            echo (string)$loan_details->loan_status == (string)LoanStatus::FINISHED ? "<span class='label label-success'>Finished</span>" : "";
                            ?>
                        </a>
                    </h3>
                </div>
                <div id="collapseOne_<?php echo $loan_details->id ?>"
                     class="panel-collapse collapse <?php echo $row == 0 ? "in" : "" ?>">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#default-tab-0_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Loan</span>
                                        <span class="hidden-xs">Loan Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-1_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Personal</span>
                                        <span class="hidden-xs">Personal Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-2_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Job</span>
                                        <span class="hidden-xs">Job Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-3_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Steward</span>
                                        <span class="hidden-xs">Steward Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-4_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Non-Relation</span>
                                        <span class="hidden-xs">Non-Relation Information</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#default-tab-5_<?php echo $loan_details->id ?>" data-toggle="tab">
                                        <span class="visible-xs">Other</span>
                                        <span class="hidden-xs">Other Information</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="default-tab-0_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-money"></i> Loan Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Group Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->group_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Amount</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->loan_amount ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Status</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title">
                                                            <?php
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::ACTIVE ? "<span class='label label-primary'>Active</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::PENDING ? "<span class='label label-warning'>Pending</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::REJECTED ? "<span class='label label-danger'>Rejected</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::BLACKLISTED ? "<span class='label label-danger'>Blacklisted</span>" : "";
                                                            echo (string)$loan_details->loan_status == (string)LoanStatus::FINISHED ? "<span class='label label-success'>Finished</span>" : "";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Installment Amount</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo number_format($loan_details->installment_amount, 2, '.', ',') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Number of Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->number_of_installments ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Start Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo date("d/M/Y", strtotime($loan_details->loan_date)) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">End Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo date("d/M/Y", strtotime($loan_details->loan_end_date)) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                            <div class="col-md-6">-->
                                            <!--                                                <div class="form-group">-->
                                            <!--                                                    <label class="col-md-4 control-label">Total Payable Amount</label>-->
                                            <!--                                                    <div class="col-md-8">-->
                                            <!--                                                        <div class="control-label todolist-title">-->
                                            <?php //echo number_format($loan_details->payable_amount, 2, '.', ',') ?><!--</div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                            <div class="col-md-6">-->
                                            <!--                                                <div class="form-group">-->
                                            <!--                                                    <label class="col-md-4 control-label">Paid Amount</label>-->
                                            <!--                                                    <div class="col-md-8">-->
                                            <!--                                                        <div class="control-label todolist-title">-->
                                            <?php //echo number_format($loan_details->total_paid_amount, 2, '.', ',') ?><!--</div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Paid Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo floor($loan_details->total_paid_amount / $loan_details->installment_amount) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Pending Installments</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo ceil($loan_details->pending_installments) ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Last Paid Date</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $loan_details->last_paid_date != '' ? date("d/M/Y", strtotime($loan_details->last_paid_date)) : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="invoice-price">
                                                <div class="invoice-price-left">
                                                    <div class="invoice-price-row">
                                                        <div class="sub-price">
                                                            <small>SUBTOTAL</small>
                                                            <?php echo "RS " . number_format($loan_details->payable_amount, 2, '.', ',') ?>
                                                        </div>
                                                        <div class="sub-price">
                                                            <i class="fa fa-minus"></i>
                                                        </div>
                                                        <div class="sub-price">
                                                            <small>PAID Amount</small>
                                                            <?php echo "RS " . number_format($loan_details->total_paid_amount, 2, '.', ',') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="invoice-price-right">
                                                    <small>BALANCE</small>
                                                    <?php echo number_format($loan_details->payable_amount - $loan_details->total_paid_amount, 2, '.', ',') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-1_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-user"></i> Personal Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Client Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->client_sys_id ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Client Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->client_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gender</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->gender == "male" ? "Male" : $client_details->gender == "female" ? "Female" : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">NIC</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->nic ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Election Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->election_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Current Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->current_address != "" ? $client_details->current_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Telephone Number</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-2_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-tasks"></i> Job Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Job Title</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->job_title ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Monthly Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->monthly_income ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Office Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_address != '' ? $client_details->business_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Office Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_tp != '' ? $client_details->business_tp : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-3_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-users"></i> Steward Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward NIC</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_nic ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Job</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_job != '' ? $client_details->steward_job : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Office Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_job_address != '' ? $client_details->steward_job_address : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Steward Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->steward_income != '' ? $client_details->steward_income : "-" ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-4_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-users"></i> Non-Relation Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Name</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_name ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Address</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_address ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Non-Relation Telephone</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->non_relation_tp ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="default-tab-5_<?php echo $loan_details->id ?>">
                                    <div class="form-horizontal">
                                        <h3 class="m-t-10"><i class="fa fa-info-circle"></i> Other Information</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. of Family Members</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->number_of_family_members . ' Members' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 1</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_01 != '' ? $client_details->other_income_01 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 2</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_02 != '' ? $client_details->other_income_02 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Other Income Method 3</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->other_income_03 != '' ? $client_details->other_income_03 : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Loan Type</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->loan_reason ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Type</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_type ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Monthly
                                                        Income</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_monthly_income != '' ? number_format($client_details->business_monthly_income, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Monthly
                                                        Outcome</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_monthly_outcome != '' ? number_format($client_details->business_monthly_outcome, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Business Profit</label>
                                                    <div class="col-md-8">
                                                        <div class="control-label todolist-title"><?php echo $client_details->business_profit != '' ? number_format($client_details->business_profit, 2, '.', ',') : '-' ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php ++$row;
        } ?>

    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/loan_profile.js"></script>


<script>
    $(document).ready(function () {
        App.init();
    });

</script>