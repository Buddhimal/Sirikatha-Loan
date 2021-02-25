<title> SIRIKATHA | Group List </title>

<h1 class="page-header">Group List
    <small>All Groups...</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Clients</h4>
            </div>
            <div class="panel-body">

                <table id="data-table" class="table table-striped table-bordered ">
                    <thead>
                    <tr>
                        <th>Group Name</th>
                        <th>Group Number</th>
                        <th>Client 1</th>
                        <th>Client 2</th>
                        <th>Client 3</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($group_data->result() as $group) { ?>

                        <tr class="odd gradeX">
                            <td><?php echo $group->group_name; ?></td>
                            <td><?php echo $group->group_id; ?></td>
                            <td><?php echo $group->client1; ?></td>
                            <td><?php echo $group->client2; ?></td>
                            <td><?php echo $group->client3; ?></td>
                            <td><?php if ($group->active_status == 1) echo "<span class='label label-success'>Active</span>"; else echo "<span class='label label-danger'>Inactive</span>"; ?></td>
                            <td style="text-align: center">
                                <a href="<?php echo base_url() ?>edit_group?group_id=<?php echo base64_encode($group->group_id) ?>"><i
                                            title="Edit" style="color: dodgerblue; font-size: 20px"
                                            class="fa fa-pencil"> </i></a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/group_list.js"></script>


<script>



    $(document).ready(function () {
        App.init();
        TableManageButtons.init();
    });

</script>