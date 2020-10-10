<title> SIRIKATHA | Client List </title>

<h1 class="page-header">Client List
    <small>All Clients...</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Clients</h4>
            </div>
            <div class="panel-body">

                <table id="data-table-list" class="table table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Sirikatha Number</th>
                        <th>Sirikatha Group</th>
                        <th width="100">NIC</th>
                        <th width="100">Mobile No</th>
                        <th>Number Of Loans</th>
                        <th>Current Loan ID</th>
                        <th width="100">Loan Date</th>
                        <th width="100">End Date</th>
                        <th>Loan Name</th>
                        <th>Loan Amount</th>
                        <th>Installment Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($client_details->result() as $client) { ?>

                        <tr class="odd gradeX">
                            <td>
                                <h8 title="<?php echo $client->client_name; ?>"><?php echo $client->client_name; ?></td>
                            </h8>

                            <td><?php echo $client->client_id; ?></td>
                            <td><?php echo $client->group_id; ?></td>
                            <td><?php echo $client->nic; ?></td>
                            <td><?php echo '+94 '. number_format($client->tp,0,'',' '); ?></td>
                            <td><?php echo $client->number_of_loans; ?></td>
                            <td><?php echo $client->loan_id; ?></td>
                            <td><?php echo $client->loan_date; ?></td>
                            <td><?php echo $client->loan_end_date; ?></td>
                            <td><?php echo $client->loan_name; ?></td>
                            <td><?php echo number_format($client->loan_amount, 2, '.', ','); ?></td>
                            <td><?php echo number_format($client->installment_amount, 2, '.', ','); ?></td>
                                <td><?php if ($client->active_status == 1) echo "<span class='label label-success'>Active</span>"; else echo "<span class='label label-danger'>In-Active</span>"; ?></td>
                            <td>
                                <div class="row">
                                    <a href="<?php echo base_url() ?>client_profile?client_id=<?php echo base64_encode($client->id) ?>"><i
                                                title="View Profile" style="font-size: 18px;"
                                                class="fa fa-eye"> </i></a>
                                    <a href="<?php echo base_url() ?>edit_client?client_id=<?php echo base64_encode($client->id) ?>">
                                        <i title="Edit" style="font-size: 18px; color: orange" class="fa fa-edit"></i></a>
                                    <a  >
                                        <i title="Inactive" style="font-size: 18px; color: red" class="fa fa-ban" id="inactive_client" onclick="inactice_client('<?php echo base64_encode($client->id) ?>')"></i></a>

                                </div>
                            </td>

                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/client_list.js"></script>




<script>

    var base_url= "<?php echo base_url() ?>"

    $(document).ready(function () {
        App.init();
        TableManageButtons.init();
    });

</script>