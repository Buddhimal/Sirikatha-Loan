<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->

        <ul class="nav">
            <li class="nav-profile">

                <div class="info">
                    <p class="" style="font-size: 20px">SIRIKATHA</p>
                    <small class="">Loan System V 1.2</small>
                </div>
            </li>

            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="user-image online">
								<img src="<?php echo base_url() ?>assets/images/user.jpg" alt=""/>
							</span>
                    <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="">Edit Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('welcome/logout'); ?>">Log Out &nbsp; &nbsp;<span
                                    class="fa fa-power-off"></span> </a></li>
                </ul>
            </li>

        </ul>
        <!-- <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="<?php echo base_url() ?>dashboard" class="navbar-brand">
                    <span class="navbar-logo">
                        <div class="fa fa-user fa-1x"></div>
                    </span>

                    </a>
                </div>
                <div class="info">
                    <?php echo $this->session->userdata('name'); ?>

                    <a href="<?php echo base_url('welcome/logout'); ?>">
                        <div class="fa fa-sign-out">Log Out</div>
                    </a>
                </div>

            </li>
        </ul> -->
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="<?php if (($active_tab) == 'dashboard') echo 'active' ?>">
                <a href="<?php echo base_url(); ?>dashboard">
                    <i class="icon-speedometer bg-success"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub <?php if (($active_tab) == 'add_new_client' || ($active_tab) == 'client_list') echo 'active' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-user bg-orange"></i>
                    <span>Client</span>
                </a>
                <ul class="sub-menu ">
                    <li class="<?php if (($active_tab) == 'add_new_client') echo 'active' ?>"><a href="<?php echo base_url(); ?>add_client">
                            <span>Add New Client</span></a></li>
                    <li class="<?php if (($active_tab) == 'client_list') echo 'active' ?>"><a href="<?php echo base_url(); ?>client_list">
                            <span>Client List</span></a></li>
                </ul>
            </li>
            <li class="has-sub <?php if (($active_tab) == 'client_group' || ($active_tab) == 'group_list') echo 'active' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-group bg-purple"></i>
                    <span>Client Groups</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php if (($active_tab) == 'client_group') echo 'active' ?>"><a
                                href="<?php echo base_url(); ?>client_group">
                            <span>Add New Client Group</span></a></li>
                    <li class="<?php if (($active_tab) == 'group_list') echo 'active' ?>"><a
                                href="<?php echo base_url(); ?>group_list">
                            <span>Group List</span></a></li>
                </ul>
            </li>

            <li class="has-sub <?php if (($active_tab) == 'add_new_loan' || ($active_tab) == 'loan_list' || ($active_tab) == 'loan_types') echo 'active' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-money bg-aqua"></i>
                    <span>Loans</span>
                </a>
                <ul class="sub-menu">
                    <?php if (in_array(SYS_ADD_LOAN_TYPE, $permission_list)) { ?>

                        <li class="<?php if (($active_tab) == 'loan_types') echo 'active' ?>"><a
                                    href="<?php echo base_url(); ?>loan_types">
                                <span>Loan Types</span></a></li>
                    <?php } ?>
                    <li class="<?php if (($active_tab) == 'add_new_loan') echo 'active' ?>"><a
                                href="<?php echo base_url(); ?>new_loan">
                            <span>Add New Loan</span></a></li>
                    <li class="<?php if (($active_tab) == 'loan_list') echo 'active' ?>"><a
                                href="<?php echo base_url(); ?>loan_list">
                            <span>Loan List</span></a></li>
                </ul>
            </li>


            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-gear bg-red"></i>
                    <span>Administrator</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="<?php echo base_url(); ?>user/user">
                            Users
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="<?php echo base_url(); ?>user/user/user_group_list">
                            User Groups
                        </a>
                    </li>
                </ul>
            </li>


            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                            class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>

<div class="sidebar-bg"></div>
<!-- end #sidebar -->

<div class="hidden-lg hidden-sm">
    <br>
    <br>
</div>
<div id="content" class="content">

