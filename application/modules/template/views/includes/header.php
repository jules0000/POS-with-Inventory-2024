<a href="<?php echo base_url('home') ?>" class="logo">
    <span class="logo-lg">
        <img src="<?php echo base_url((!empty($setting->logo)?$setting->logo:'assets/img/icons/logo.png')) ?>" alt="">
    </span>
    <span class="logo-mini">

        <img src="<?php echo base_url((!empty($setting->favicon)?$setting->favicon:'assets/img/icons/logo.png')) ?>"
            alt="">
    </span>
</a>
<div class="se-pre-con"></div>
<!-- Header Navbar -->
<?php $gui_p = $this->uri->segment(1);
         if($gui_p != 'gui_pos'){
         ?>
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="pe-7s-menu"></span>
    </a>


    <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
            <!-- Messages -->
            <?php if($this->permission1->method('pos_invoice','create')->access()){
           ?>
            <li>
                <a href="<?php echo base_url('gui_pos')?>" class="text-white  btn-success pos-btn"> <span
                        class="fa fa-calculator"></span> </a>
            </li>
            <?php }?>
            <?php if($max_version > $current_version){?>
            <li>
                <blink><a href="<?php echo base_url('autoupdate/Autoupdate')?>"
                        class="text-white  btn-danger update-btn"> <?php echo $max_version.' Version Available'; ?></a>
                </blink>
            </li>
            <?php }?>
            <li class="dropdown notifications-menu">
                <a href="<?php echo base_url('out_of_stock') ?>">
                    <i class="pe-7s-note2" title="<?php echo display('out_of_stock') ?>"></i>
                    <span class="label label-danger"><?php  echo html_escape($out_of_stocks) ?></span>
                </a>
            </li>

            <!-- settings -->
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="image">
                        <?php $image = $this->session->userdata('image') ?>
                        <img src="<?php echo base_url((!empty($image)?$image:'assets/img/icons/default.jpg')) ?>"
                            class="img-circle" style="width: 20px; height: 20px;" alt="User Image">
                    </i>
                </a>
                <div class="info">
                    <p style="font-size: 13px;"><?php echo $this->session->userdata('fullname') ?></p>
                </div>

                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('edit_profile') ?>"><i class="pe-7s-users"></i>
                            <?php echo display('edit_profile') ?></a></li>
                    <li><a href="<?php echo base_url('change_password') ?>"><i class="pe-7s-config"></i>
                            <?php echo display('change_password') ?></a></li>
                    <li><a href="<?php echo base_url('logout') ?>"><i class="pe-7s-key"></i>
                            <?php echo display('logout') ?></a></li>
                </ul>
            </li>

            <!-- Sidebar user panel -->




        </ul>
    </div>

</nav>
<?php }?>