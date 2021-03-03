<?php $client = $client_data->row();
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

            <div class="profile-highlight">
                <h4><i class="fa fa-user"></i>  Registration Info</h4>
                <label>Registered Date: <?php echo date('Y-M-d' , strtotime($client->created_date)) ?></label>
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
                            <td><?php if ($client->gender == 'male') echo "Male"; else echo "Female" ?></td>
                        </tr>
                        <tr class="">
                            <td class="field">NIC</td>
                            <td><?php echo $client->nic ?></td>
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
                            <td> <?php echo "Rs.". $client->monthly_income ?> </td>
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
                            <td> <?php echo "Rs. ".$client->steward_income ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Steward Job Telephone</td>
                            <td> <?php echo $client->steward_job_tp ?> </td>
                        </tr>
                        <tr class="">
                            <td class="field">Number of Family Members</td>
                            <td> <?php echo $client->number_of_family_members. " Members" ?> </td>
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