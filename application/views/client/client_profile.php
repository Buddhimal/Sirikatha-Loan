<?php $client = $client_data->row();
//var_dump($client_data->row());
//die();
?>

<title> SIRIKATHA | Client Profile </title>

<link class="hidden-print" href="<?php echo base_url() ?>assets/css/invoice-print.min.css" rel="stylesheet"/>

<div class="profile-container">
    <!-- begin profile-section -->
    <div class="profile-section">
        <!-- begin profile-left -->
        <div class="profile-left">
            <!-- begin profile-image -->
            <div class="profile-image">
                <img src="<?php echo base_url() ?>assets/images/user.png"/>
                <i class="fa fa-user hide"></i>
            </div>

            <!-- end profile-image -->
<!--                        <div class="m-b-10">-->
<!--                            <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>-->
<!--                        </div>-->
<!--             begin profile-highlight -->
                        <div class="profile-highlight">
                            <h4><i class="fa fa-user"></i>  Registration Info</h4>
<!--                            <div class="checkbox m-b-5 m-t-0">-->
                                <label>Registered Date: <?php echo date('Y-M-d' , strtotime($client->created_date)) ?></label>
<!--                            </div>-->
<!--                            <div class="checkbox m-b-0">-->
<!--                                <label><input type="checkbox"/> Show i have 14 contacts</label>-->
<!--                            </div>-->
                        </div>
            <!-- end profile-highlight -->
            <div class="hidden-print">
                <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10">
                    <i class="fa fa-print m-r-5"></i>Print
                </a>
            </div>
        </div>

        <div class="profile-right">
            <!-- begin profile-info -->
            <div class="profile-info">
                <!-- begin table -->
                <div class="table-responsive">
                    <table class="table table-profile">
                        <thead>
                        <tr>
                            <th></th>
                            <th>
                                <h4><?php echo $client->client_name ?>
                                    <small><?php echo $client->client_id ?></small>
                                </h4>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="">
                            <td class="field">Full Name</td>
                            <td><?php echo $client->client_name ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">Gender</td>
                            <td><?php echo $client->gender ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">Election Address</td>
                            <td><?php echo $client->election_address ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">Current Address</td>
                            <td><?php echo $client->current_address ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">Telephone</td>
                            <td><?php echo $client->tp ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">Job Tile</td>
                            <td><?php echo $client->job_title?>  </td>
                        </tr>
                        <tr class="">
                            <td class="field">Monthly Income</td>
                            <td> <?php echo $client->monthly_income ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Business Address</td>
                            <td> <?php echo $client->business_address ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Business Telephone</td>
                            <td> <?php echo $client->business_tp ?> </td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Name</td>
                            <td> <?php echo $client->steward_name ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward NIC</td>
                            <td> <?php echo $client->steward_nic ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Address</td>
                            <td> <?php echo $client->steward_address ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Telephone</td>
                            <td> <?php echo $client->steward_tp ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Job</td>
                            <td> <?php echo $client->steward_job ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Job Address</td>
                            <td> <?php echo $client->steward_job_address?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Income</td>
                            <td> <?php echo $client->business_tp ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Job Telephone</td>
                            <td> <?php echo $client->steward_job_tp ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Number of Family Members</td>
                            <td> <?php echo $client->number_of_family_members ?> </td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                        <tr class="">
                            <td class="field">Other Incomes</td>
                            <td> <?php echo $client->other_income_01. ' '.$client->other_income_02.' '.$client->other_income_03 ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Other Income</td>
                            <td> <?php echo $client->other_income_monthly ?> </td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                        <tr class="">
                            <td class="field">Non Relation Name</td>
                            <td> <?php echo $client->non_relation_name ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Non Relation Address</td>
                            <td><?php echo $client->non_relation_address ?>  </td>
                        </tr>
                        <tr class="">
                            <td class="field">Non Relation Telephone</td>
                            <td> <?php echo $client->non_relation_tp ?> </td>
<!--                        </tr>-->
<!--                        <tr class="">-->
<!--                            <td class="field">Non Relation Address</td>-->
<!--                            <td> --><?php //echo $client->business_tp ?><!-- </td>-->
<!--                        </tr>-->
<!--                        <tr class="">-->
<!--                            <td class="field">Non Relation Address</td>-->
<!--                            <td>  </td>-->
<!--                        </tr>-->
<!--                        <tr class="">-->
<!--                            <td class="field">Non Relation Address</td>-->
<!--                            <td>  </td>-->
<!--                        </tr>-->



<!--                        <tr class="divider">-->
<!--                            <td colspan="2"></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Mobile</td>-->
<!--                            <td><i class="fa fa-mobile fa-lg m-r-5"></i> +1-(847)- 367-8924 <a href="#" class="m-l-5">Edit</a>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Home</td>-->
<!--                            <td><a href="#">Add Number</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Office</td>-->
<!--                            <td><a href="#">Add Number</a></td>-->
<!--                        </tr>-->
<!--                        <tr class="divider">-->
<!--                            <td colspan="2"></td>-->
<!--                        </tr>-->
<!--                        <tr class="highlight">-->
<!--                            <td class="field">About Me</td>-->
<!--                            <td><a href="#">Add Description</a></td>-->
<!--                        </tr>-->
<!--                        <tr class="divider">-->
<!--                            <td colspan="2"></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Country/Region</td>-->
<!--                            <td>-->
<!--                                <select class="form-control input-inline input-xs" name="region">-->
<!--                                    <option value="US" selected>United State</option>-->
<!--                                    <option value="AF">Afghanistan</option>-->
<!--                                    <option value="AL">Albania</option>-->
<!--                                    <option value="DZ">Algeria</option>-->
<!--                                    <option value="AS">American Samoa</option>-->
<!--                                    <option value="AD">Andorra</option>-->
<!--                                    <option value="AO">Angola</option>-->
<!--                                    <option value="AI">Anguilla</option>-->
<!--                                    <option value="AQ">Antarctica</option>-->
<!--                                    <option value="AG">Antigua and Barbuda</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">City</td>-->
<!--                            <td>Los Angeles</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">State</td>-->
<!--                            <td><a href="#">Add State</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Website</td>-->
<!--                            <td><a href="#">Add Webpage</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Gender</td>-->
<!--                            <td>-->
<!--                                <select class="form-control input-inline input-xs" name="gender">-->
<!--                                    <option value="male">Male</option>-->
<!--                                    <option value="female">Female</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Birthdate</td>-->
<!--                            <td>-->
<!--                                <select class="form-control input-inline input-xs" name="day">-->
<!--                                    <option value="04" selected>04</option>-->
<!--                                </select>-->
<!--                                --->
<!--                                <select class="form-control input-inline input-xs" name="month">-->
<!--                                    <option value="11" selected>11</option>-->
<!--                                </select>-->
<!--                                --->
<!--                                <select class="form-control input-inline input-xs" name="year">-->
<!--                                    <option value="1989" selected>1989</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="field">Language</td>-->
<!--                            <td>-->
<!--                                <select class="form-control input-inline input-xs" name="language">-->
<!--                                    <option value="" selected>English</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
                        </tbody>
                    </table>
                </div>
                <!-- end table -->
            </div>
            <!-- end profile-info -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        App.init();
    });
</script>