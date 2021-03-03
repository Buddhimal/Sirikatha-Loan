<title> SIRIKATHA | New Client </title>

<h1 class="page-header">New Client
    <small> Add new Client...</small>
</h1>
<!-- end page-header -->

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
                <h4 class="panel-title">Client Details</h4>
            </div>
            <div class="panel-body">
                <form id="client_data" name="client_data" class="form-horizontal" action="" method="post">
                    <?php if (isset($msg) && $msg != "") { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg; ?>
                        </div>

                    <?php } ?>
                    <h4 class="m-t-0">Personal Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Client Number</label>
                                <div class="col-md-9">
                                    <input type="text" id="client_id" name="client_id" class="form-control"
                                           placeholder="Client Number" value="<?php echo $client_number ?>" readonly style="opacity: 1"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Client Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="client_name" name="client_name" class="form-control"
                                           placeholder="Client Name"/>
                                    <span id="client_name_span"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">NIC</label>
                                <div class="col-md-9">
                                    <input type="text" id="nic" name="nic" class="form-control" placeholder="NIC"/>
                                    <span id="nic_span"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Election Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="election_address" name="election_address"
                                           class="form-control" placeholder="Election Address"/>
                                    <span id="election_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Current Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="current_address" name="current_address" class="form-control"
                                           placeholder="Current Address"/>
                                    <span id="current_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Telephone Number</label>
                                <div class="col-md-9">
                                    <input type="text" id="tp" name="tp" class="form-control"
                                           placeholder="Telephone Number"/>
                                    <span id="tp_span"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-md-6"></div>-->
                    <h4 class="m-t-0">Job Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Job Title</label>
                                <div class="col-md-9">
                                    <input type="text" id="job_title" name="job_title" class="form-control"
                                           placeholder="Job Title"/>
                                    <span id="job_title_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Monthly Income</label>
                                <div class="col-md-9">
                                    <input type="text" id="monthly_income" name="monthly_income" class="form-control"
                                           placeholder="Monthly Income"/>
                                    <span id="monthly_income_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Office Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="business_address" name="business_address"
                                           class="form-control"
                                           placeholder="Office Address"/>
                                    <span id="business_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Office Telephone</label>
                                <div class="col-md-9">
                                    <input type="text" id="business_tp" name="business_tp" class="form-control"
                                           placeholder="Office Telephone"/>
                                    <span id="business_tp_span"></span>

                                </div>
                            </div>
                        </div>
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label class="col-md-3 control-label">Monthly Income</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <input type="text" id="monthly_income" name="monthly_income" class="form-control"-->
<!--                                           placeholder="Monthly Income"/>-->
<!--                                    <span id="monthly_income_span"></span>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    <h4 class="m-t-0">Steward Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_name" name="steward_name" class="form-control"
                                           placeholder="Steward Name"/>
                                    <span id="steward_name_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_address" name="steward_address"
                                           class="form-control"
                                           placeholder="Steward Address"/>
                                    <span id="steward_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward NIC</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_nic" name="steward_nic" class="form-control"
                                           placeholder="Steward NIC"/>
                                    <span id="steward_nic_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Telephone</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_tp" name="steward_tp" class="form-control"
                                           placeholder="Steward Telephone"/>
                                    <span id="steward_tp_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Job</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_job" name="steward_job" class="form-control"
                                           placeholder="Steward Job"/>
                                    <span id="steward_job_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Income</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_income" name="steward_income"
                                           class="form-control"
                                           placeholder="Steward Income"/>
                                    <span id="steward_income_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Office Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_job_address" name="steward_job_address"
                                           class="form-control"
                                           placeholder="Steward Office Address"/>
                                    <span id="steward_job_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Steward Office Telephone</label>
                                <div class="col-md-9">
                                    <input type="text" id="steward_job_tp" name="steward_job_tp"
                                           class="form-control"
                                           placeholder="Steward Office Telephone"/>
                                    <span id="steward_job_tp_span"></span>

                                </div>
                            </div>
                        </div>


                    </div>
                    <h4 class="m-t-0">Non-Relation Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Non-Relation Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="non_relation_name" name="non_relation_name"
                                           class="form-control"
                                           placeholder="Non-Relation Name"/>
                                    <span id="non_relation_name_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Non-Relation Address</label>
                                <div class="col-md-9">
                                    <input type="text" id="non_relation_address" name="non_relation_address"
                                           class="form-control"
                                           placeholder="Non-Relation Address"/>
                                    <span id="non_relation_address_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Non-Relation Telephone</label>
                                <div class="col-md-9">
                                    <input type="text" id="non_relation_tp" name="non_relation_tp" class="form-control"
                                           placeholder="Non-Relation TelephoneNIC"/>
                                    <span id="non_relation_tp_span"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="m-t-0">Other Information</h4>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">No. of Family Members</label>
                                <div class="col-md-9">
                                    <input type="text" id="number_of_family_members" name="number_of_family_members"
                                           class="form-control"
                                           placeholder="Number of Family Members"/>
                                    <span id="number_of_family_members_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Amount</label>
                                <div class="col-md-9">
                                    <input type="text" id="loan_amount" name="loan_amount" class="form-control"
                                           placeholder="Loan Amount"/>
                                    <span id="loan_amount_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Other Income Method 1</label>
                                <div class="col-md-9">
                                    <input type="text" id="other_income_01" name="other_income_01"
                                           class="form-control"
                                           placeholder="Other Income Method 1"/>
                                    <span id="other_income_01_span"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Other Income Method 2</label>
                                <div class="col-md-9">
                                    <input type="text" id="other_income_02" name="other_income_02"
                                           class="form-control"
                                           placeholder="Other Income Method 2"/>
                                    <span id="other_income_02_span"></span>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Other Income Method 3</label>
                                <div class="col-md-9">
                                    <input type="text" id="other_income_03" name="other_income_03"
                                           class="form-control"
                                           placeholder="Other Income Method 3"/>
                                    <span id="other_income_03_span"></span>

                                </div>
                            </div>
                        </div>
<!--                        <div class="col-md-6">-->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label class="col-md-3 control-label">Total Other Income </label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <input type="text" id="other_income_monthly" name="other_income_monthly"-->
<!--                                           class="form-control"-->
<!--                                           placeholder="Total Other Income "/>-->
<!--                                    <span id="other_income_monthly_span"></span>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Loan Reason </label>
                                <div class="col-md-9">
                                    <select name="loan_reason" id="loan_reason" class="form-control">
                                        <option value="Personal Loan">Personal Loan</option>
                                        <option value="Business Loan">Business Loan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="business_div">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Business Type</label>
                                    <div class="col-md-9">
                                        <input type="text" id="business_type" name="business_type"
                                               class="form-control"
                                               placeholder="Business Type"/>
                                        <span id="business_type_span"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Business Monthly Income</label>
                                    <div class="col-md-9">
                                        <input type="number" id="business_monthly_income" name="business_monthly_income"
                                               class="form-control"
                                               placeholder="Business Monthly Income"/>
                                        <span id="business_monthly_income_span"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Business Monthly Outcome</label>
                                    <div class="col-md-9">
                                        <input type="number" id="business_monthly_outcome"
                                               name="business_monthly_outcome"
                                               class="form-control"
                                               placeholder="Business Monthly Outcome"/>
                                        <span id="business_monthly_outcome_span"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Business Profit</label>
                                    <div class="col-md-9">
                                        <input type="number" id="business_profit" name="business_profit"
                                               class="form-control"
                                               placeholder="Business Profit"/>
                                        <span id="business_profit_span"></span>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <button id="btn_submit" name="btn_submit" class="btn btn-success pull-right">Save Client</button>

            </div>
            </form>
        </div>
    </div>
    <!-- end panel -->
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/src/jquery-key-restrictions.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/add_new_client.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>-->

<script>
    $(document).ready(function () {
        App.init();
    });




</script>