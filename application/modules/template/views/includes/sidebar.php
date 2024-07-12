<div class="sidebar">



    <!-- sidebar menu -->
    <ul class="sidebar-menu">

        <li class="treeview <?php echo (($this->uri->segment(1)=="home")?"active":null) ?>">
            <a href="<?php echo base_url('home') ?>"> <i class="ti-blackboard"></i>
                <span><?php echo display('dashboard')?></span>
            </a>
        </li>

        <!-- Invoice menu start -->
        <?php if($this->permission1->method('new_invoice','create')->access() || $this->permission1->method('manage_invoice','read')->access() || $this->permission1->method('pos_invoice','create')->access() || $this->permission1->method('gui_pos','create')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_invoice") || $this->uri->segment('1') == ("invoice_list") || $this->uri->segment('1') == ("pos_invoice") || $this->uri->segment('1') == ("gui_pos") || $this->uri->segment('1') == ("invoice_details") || $this->uri->segment('1') == ("invoice_pad_print") || $this->uri->segment('1') == ("pos_print") || $this->uri->segment('1') == ("invoice_edit")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="ti-stats-up"></i><span><?php echo display('invoice') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('new_invoice','create')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_invoice') ?>"><?php echo display('new_invoice') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_invoice','read')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("invoice_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('invoice_list') ?>"><?php echo display('manage_invoice') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('pos_invoice','create')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("gui_pos")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('gui_pos') ?>"><?php echo display('pos_invoice') ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <?php if($this->permission1->method('add_customer','create')->access() || $this->permission1->method('manage_customer','read')->access()|| $this->permission1->method('credit_customer','read')->access() || $this->permission1->method('paid_customer','read')->access() || $this->permission1->method('customer_ledger','read')->access() || $this->permission1->method('customer_advance','create')->access()){?>
        <li
            class="treeview <?php echo (($this->uri->segment(1)=="add_customer" || $this->uri->segment(1)=="customer_list" || $this->uri->segment(1)=="credit_customer" || $this->uri->segment(1)=="paid_customer" || $this->uri->segment(1)=="edit_customer" || $this->uri->segment(1)=="customer_ledgerdata" || $this->uri->segment(1)=="customer_ledger" || $this->uri->segment(1)=="advance_receipt" || $this->uri->segment(1)=="customer_advance")?"active":'') ?>">

            <a href="javascript:void(0)">

                <i class="metismenu-icon pe-7s-user"></i> <span><?php echo display('customer') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">

                <?php if($this->permission1->method('add_customer','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="add_customer")?"active":'') ?>">
                    <a href="<?php echo base_url('add_customer') ?>"
                        class="<?php echo (($this->uri->segment(1)=="add_customer")?"active":null) ?>">
                        <?php echo display('add_customer')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_customer','read')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="customer_list")?"active":'') ?>">
                    <a href="<?php echo base_url('customer_list') ?>">

                        <?php echo display('customer_list')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('credit_customer','read')->access()){ ?>

                <li class="<?php echo (($this->uri->segment(1)=="credit_customer")?"active":'') ?>">
                    <a href="<?php echo base_url('credit_customer') ?>">

                        <?php echo display('credit_customer')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('paid_customer','read')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="paid_customer")?"active":'') ?>">
                    <a href="<?php echo base_url('paid_customer') ?>">

                        <?php echo display('paid_customer')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('customer_ledger','read')->access()){ ?>
                <li
                    class="<?php echo (($this->uri->segment(1)=="customer_ledger" || $this->uri->segment(1)=="customer_ledgerdata")?"active":'') ?>">
                    <a href="<?php echo base_url('customer_ledger') ?>">

                        <?php echo display('customer_ledger')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('customer_advance','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="customer_advance")?"active":'') ?>">
                    <a href="<?php echo base_url('customer_advance') ?>">

                        <?php echo display('customer_advance')?>

                    </a>

                </li>
                <?php }?>
            </ul>

        </li>
        <?php }?>
        <!-- supplier menu part -->
        <?php if($this->permission1->method('add_supplier','create')->access() || $this->permission1->method('manage_supplier','read')->access() || $this->permission1->method('supplier_ledger','read')->access() || $this->permission1->method('supplier_advance','create')->access()){?>
        <li
            class="treeview <?php echo (($this->uri->segment(1)=="add_supplier" || $this->uri->segment(1)=="supplier_list" || $this->uri->segment(1)=="edit_supplier" || $this->uri->segment(1)=="supplier_ledgerdata" || $this->uri->segment(1)=="supplier_ledger" || $this->uri->segment(1)=="supplier_advance")?"active":'') ?>">

            <a href="javascript:void(0)">

                <i class="metismenu-icon fa fa-truck"></i> <span><?php echo display('supplier') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">

                <?php if($this->permission1->method('add_supplier','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="add_supplier")?"active":'') ?>">
                    <a href="<?php echo base_url('add_supplier') ?>"
                        class="<?php echo (($this->uri->segment(1)=="add_supplier")?"active":null) ?>">
                        <?php echo display('add_supplier')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_supplier','read')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="supplier_list")?"active":'') ?>">
                    <a href="<?php echo base_url('supplier_list') ?>">

                        <?php echo display('supplier_list')?>

                    </a>

                </li>
                <?php }?>

                <?php if($this->permission1->method('supplier_ledger','read')->access()){ ?>
                <li
                    class="<?php echo (($this->uri->segment(1)=="supplier_ledger" || $this->uri->segment(1)=="supplier_ledgerdata")?"active":'') ?>">
                    <a href="<?php echo base_url('supplier_ledger') ?>">

                        <?php echo display('supplier_ledger')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('supplier_advance','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="supplier_advance")?"active":'') ?>">
                    <a href="<?php echo base_url('supplier_advance') ?>">

                        <?php echo display('supplier_advance')?>

                    </a>

                </li>
                <?php }?>
            </ul>

        </li>
        <?php }?>

        <!-- product menu part -->
        <?php if($this->permission1->method('create_product','create')->access() || $this->permission1->method('add_product_csv','create')->access() || $this->permission1->method('manage_product','read')->access() || $this->permission1->method('create_category','create')->access() || $this->permission1->method('manage_category','read')->access() || $this->permission1->method('add_unit','create')->access() || $this->permission1->method('manage_unit','read')->access()){?>
        <li
            class="treeview <?php echo (($this->uri->segment(1)=="category_form" || $this->uri->segment(1)=="category_list" || $this->uri->segment(1)=="unit_form" || $this->uri->segment(1)=="unit_list" || $this->uri->segment(1)=="product_form" || $this->uri->segment(1)=="product_list" || $this->uri->segment(1)=="barcode" || $this->uri->segment(1)=="qrcode" || $this->uri->segment(1)=="bulk_products" || $this->uri->segment(1)=="product_details")?"active":'') ?>">

            <a href="javascript:void(0)">

                <i class="metismenu-icon fa fa-gift"></i> <span><?php echo display('product') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">

                <?php if($this->permission1->method('category','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="category_form")?"active":'') ?>">
                    <a href="<?php echo base_url('category_form') ?>"> <?php echo display('add_category')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_category','read')->access()|| $this->permission1->method('manage_category','update')->access()|| $this->permission1->method('manage_category','delete')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="category_list")?"active":'') ?>">
                    <a href="<?php echo base_url('category_list') ?>">

                        <?php echo display('category_list')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('unit','create')->access() || $this->permission1->method('unit','update')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="unit_form")?"active":'') ?>">
                    <a href="<?php echo base_url('unit_form') ?>"> <?php echo display('add_unit')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_unit','create')->access() || $this->permission1->method('manage_unit','read')->access() || $this->permission1->method('manage_unit','delete')->access() || $this->permission1->method('manage_unit','update')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="unit_list")?"active":'') ?>">
                    <a href="<?php echo base_url('unit_list') ?>">

                        <?php echo display('unit_list')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('create_product','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="product_form")?"active":'') ?>">
                    <a href="<?php echo base_url('product_form') ?>">

                        <?php echo display('add_product')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('add_product_csv','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="bulk_products")?"active":'') ?>">
                    <a href="<?php echo base_url('bulk_products') ?>">

                        <?php echo display('add_product_csv')?>

                    </a>

                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_product','read')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="product_list")?"active":'') ?>">
                    <a href="<?php echo base_url('product_list') ?>">

                        <?php echo display('manage_product')?>

                    </a>

                </li>
                <?php }?>

            </ul>

        </li>
        <?php }?>



        <!-- Purchase menu start -->
        <?php if($this->permission1->method('add_purchase','create')->access() || $this->permission1->method('manage_purchase','read')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_purchase") || $this->uri->segment('1') == ("purchase_edit") || $this->uri->segment('1') == ("purchase_list") || $this->uri->segment('1') == ("purchase_details")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="ti-shopping-cart"></i><span><?php echo display('purchase') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('add_purchase','create')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_purchase")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_purchase') ?>"><?php echo display('add_purchase') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_purchase','read')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("purchase_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('purchase_list') ?>"><?php echo display('manage_purchase') ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <!-- Purchase menu end -->



        <!-- Stock menu start -->
        <?php if($this->permission1->method('stock','read')->access()){?>
        <li class="treeview <?php
        if ($this->uri->segment('1') == ("stock")) {
            echo "active";
        } else {
            echo " ";
        }
        ?>">
            <a href="#">
                <i class="fa fa-line-chart"></i><span><?php echo display('stock') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('stock_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("stock")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('stock') ?>"><?php echo display('stock_report') ?></a></li>
                <?php }?>

            </ul>
        </li>
        <?php }?>
        <!-- Stock menu end -->

        <!-- Report menu start -->
        <?php if($this->permission1->method('add_closing','create')->access() || $this->permission1->method('closing_report','read')->access() || $this->permission1->method('todays_report','read')->access() || $this->permission1->method('todays_customer_receipt','read')->access() || $this->permission1->method('todays_sales_report','read')->access() || $this->permission1->method('due_report','read')->access() || $this->permission1->method('todays_purchase_report','read')->access() || $this->permission1->method('purchase_report_category_wise','read')->access() || $this->permission1->method('product_sales_reports_date_wise','read')->access() || $this->permission1->method('sales_report_category_wise','read')->access() || $this->permission1->method('shipping_cost_report','read')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("closing_form") || $this->uri->segment('1') == ("closing_report") || $this->uri->segment('1') == ("closing_report_search") || $this->uri->segment('1') == ("todays_report")|| $this->uri->segment('1') == ("todays_customer_received") || $this->uri->segment('1') == ("todays_customerwise_received") || $this->uri->segment('1') == ("sales_report") || $this->uri->segment('1') == ("datewise_sales_report") || $this->uri->segment('1') == ("userwise_sales_report") || $this->uri->segment('1') == ("invoice_wise_due_report") || $this->uri->segment('1') == ("shipping_cost_report") || $this->uri->segment('1') == ("purchase_report") || $this->uri->segment('1') == ("purchase_report_categorywise")|| $this->uri->segment('1') == ("product_wise_sales_report") || $this->uri->segment('1') == ("category_sales_report") || $this->uri->segment('1') == ("sales_return") || $this->uri->segment('1') == ("supplier_returns") || $this->uri->segment('1') == ("tax_report") || $this->uri->segment('1') == ("profit_report")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="ti-book"></i><span><?php echo display('report') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('add_closing','create')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("closing_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('closing_form') ?>"><?php echo display('closing') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('closing_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("closing_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('closing_report') ?>"><?php echo display('closing_report') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('todays_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("todays_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('todays_report') ?>"><?php echo display('todays_report') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('todays_customer_receipt','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("todays_customer_received")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('todays_customer_received') ?>"><?php echo display('todays_customer_receipt') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('todays_sales_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('sales_report') ?>"><?php echo display('sales_report') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('user_wise_sales_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("userwise_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('userwise_sales_report') ?>"><?php echo display('user_wise_sales_report') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('due_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("invoice_wise_due_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('invoice_wise_due_report') ?>"><?php echo display('due_report'); ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('shipping_cost_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("shipping_cost_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('shipping_cost_report') ?>"><?php echo display('shipping_cost_report'); ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('purchase_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("purchase_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('purchase_report') ?>"><?php echo display('purchase_report') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('purchase_report_category_wise','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("purchase_report_categorywise")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('purchase_report_categorywise') ?>"><?php echo display('purchase_report_category_wise') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('sales_report_product_wise','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("product_wise_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('product_wise_sales_report') ?>"><?php echo display('sales_report_product_wise') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('sales_report_category_wise','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("category_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('category_sales_report') ?>"><?php echo display('sales_report_category_wise') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('invoice_return','read')->access()){ ?>

                <?php } ?>
                <?php if($this->permission1->method('supplier_return','read')->access()){ ?>

                <?php } ?>
                <?php if($this->permission1->method('tax_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("tax_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_report') ?>"><?php echo display('tax_report') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('profit_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("profit_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('profit_report') ?>"><?php echo display('profit_report') ?></a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
        <!-- Report menu end -->

        <!-- service menu start -->
        <?php if($this->permission1->method('create_service','create')->access() || $this->permission1->method('manage_service','read')->access() || $this->permission1->method('service_invoice','create')->access() || $this->permission1->method('manage_service_invoice','read')->access()){?>

        <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_service") || $this->uri->segment('1') == ("manage_service") || $this->uri->segment('1') == ("edit_service") || $this->uri->segment('1') == ("add_service_invoice") || $this->uri->segment('1') == ("service_details") || $this->uri->segment('1') == ("manage_service_invoice") || $this->uri->segment('1') == ("edit_service_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="fa fa-handshake-o"></i><span><?php echo display('service') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('create_service','create')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_service")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_service') ?>"><?php echo display('add_service') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_service','read')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("manage_service")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('manage_service') ?>"><?php echo display('manage_service') ?></a></li>
                <?php } ?>

                <?php if($this->permission1->method('manage_service_invoice','read')->access()){ ?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("manage_service_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('manage_service_invoice') ?>"><?php echo display('manage_service_invoice') ?></a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>


        <!-- Quotation Menu Start -->
        <?php if($this->permission1->method('add_quotation','create')->access() || $this->permission1->method('manage_quotation','read')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_quotation") || $this->uri->segment('1') == ("manage_quotation")|| $this->uri->segment('1') == ("quotation_to_sales")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="fa fa-quote-left"></i><span><?php echo display('quotation') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('add_quotation','create')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("add_quotation")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_quotation') ?>"><?php echo display('add_quotation') ?></a>
                </li>
                <?php }?>
                <?php if($this->permission1->method('manage_quotation','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("manage_quotation")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('manage_quotation') ?>"><?php echo display('manage_quotation') ?></a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
        <!-- quotation Menu end -->
        <!-- Tax menu start -->
        <?php if($this->permission1->method('add_incometax','create')->access() || $this->permission1->method('manage_income_tax','read')->access()|| $this->permission1->method('tax_settings','create')->access() || $this->permission1->method('tax_report','read')->access() || $this->permission1->method('invoice_wise_tax_report','read')->access() || $this->permission1->method('tax_settings','read')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("invoice_wise_tax_report") || $this->uri->segment('1') == ("tax_setting") || $this->uri->segment('1') == ("income_tax") || $this->uri->segment('1') == ("manage_income_tax") || $this->uri->segment('1') == ("tax_reports") || $this->uri->segment('1') == ("update_tax_setting")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="fa fa-money"></i><span><?php echo display('tax') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if($this->permission1->method('tax_settings','create')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("tax_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_setting') ?>"><?php echo display('tax_settings') ?></a></li>
                <?php } ?>

                <?php if($this->permission1->method('add_incometax','create')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("income_tax")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('income_tax') ?>"><?php echo display('add_incometax') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_income_tax','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("manage_income_tax")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('manage_income_tax') ?>"><?php echo display('manage_income_tax') ?></a>
                </li>
                <?php } ?>
                <?php if($this->permission1->method('tax_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("tax_reports")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_reports') ?>"><?php echo display('tax_report') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('invoice_wise_tax_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("invoice_wise_tax_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a
                        href="<?php echo base_url('invoice_wise_tax_report') ?>"><?php echo display('invoice_wise_tax_report') ?></a>
                </li>
                <?php } ?>
            </ul>



        </li>
        <?php } ?>


        <!-- Software Settings menu start -->
        <?php if($this->permission1->method('manage_company','read')->access() ||$this->permission1->method('manage_company','create')->access() || $this->permission1->method('add_user','create')->access() || $this->permission1->method('add_user','read')->access() || $this->permission1->method('add_language','create')->access() || $this->permission1->method('add_currency','create')->access() || $this->permission1->method('soft_setting','create')->access() || $this->permission1->method('add_role','create')->access() ||$this->permission1->method('role_list','read')->access() || $this->permission1->method('user_assign','create')->access() || $this->permission1->method('sms_configure','create')->access()){?>
        <li class="treeview <?php
            if ($this->uri->segment('1') == ("company_list") || $this->uri->segment('1') == ("edit_company") || $this->uri->segment('1') == ("add_user") || $this->uri->segment('1') == ("user_list") || $this->uri->segment('1') == ("language") || $this->uri->segment('1') == ("currency_form") || $this->uri->segment('1') == ("currency_list") || $this->uri->segment('1') == ("settings")|| $this->uri->segment('1') == ("mail_setting") || $this->uri->segment('1') == ("app_setting") || $this->uri->segment('1') == ("add_role") || $this->uri->segment('1') == ("role_list") || $this->uri->segment('1') == ("edit_role") || $this->uri->segment('1') == ("assign_role") || $this->uri->segment('1') == ("sms_setting") || $this->uri->segment('1') == ("restore") || $this->uri->segment('1') == ("db_import") || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
            <a href="#">
                <i class="ti-settings"></i><span><?php echo display('settings') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <!-- Software Settings menu start -->
                <?php if($this->permission1->method('manage_company','read')->access() ||$this->permission1->method('manage_company','create')->access() || $this->permission1->method('add_user','create')->access() || $this->permission1->method('manage_user','read')->access() || $this->permission1->method('add_language','create')->access() || $this->permission1->method('add_currency','create')->access() || $this->permission1->method('soft_setting','create')->access() || $this->permission1->method('back_up','create')->access() || $this->permission1->method('back_up','read')->access() || $this->permission1->method('restore','create')->access() || $this->permission1->method('sql_import','create')->access()){?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("company_list") || $this->uri->segment('1') == ("edit_company") || $this->uri->segment('1') == ("add_user") || $this->uri->segment('1') == ("user_list") || $this->uri->segment('1') == ("language") || $this->uri->segment('1') == ("currency_form") || $this->uri->segment('1') == ("currency_list") || $this->uri->segment('1') == ("settings")|| $this->uri->segment('1') == ("mail_setting") || $this->uri->segment('1') == ("app_setting") || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                    <a href="#">
                        <i class="ti-settings"></i> <span><?php echo display('web_settings') ?></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php if($this->permission1->method('manage_company','read')->access() || $this->permission1->method('manage_company','update')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("company_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('company_list') ?>"><?php echo display('manage_company') ?></a>
                        </li>
                        <?php }?>
                        <?php if($this->permission1->method('add_user','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("add_user")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_user') ?>"><?php echo display('add_user') ?></a></li>
                        <?php }?>
                        <?php if($this->permission1->method('manage_user','read')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("user_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('user_list') ?>"><?php echo display('manage_users') ?> </a></li>
                        <?php }?>
                        <?php if($this->permission1->method('add_language','create')->access() || $this->permission1->method('add_language','update')->access()){?>
                        <li
                            class="<?php echo (($this->uri->segment(1)=="language" || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases"))?"active":'') ?>">
                            <a href="<?php echo base_url('language') ?>">

                                <?php echo display('language')?>

                            </a>

                        </li>
                        <?php }?>
                        <?php if($this->permission1->method('add_currency','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("currency_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('currency_form') ?>"><?php echo display('currency') ?> </a></li>
                        <?php }?>
                        <?php if($this->permission1->method('soft_setting','create')->access() || $this->permission1->method('soft_setting','update')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("settings")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>">
                            <a href="<?php echo base_url('settings') ?>"
                                class="<?php echo (($this->uri->segment(1)=="settings")?"active":null) ?>">

                                <?php echo display('settings')?>

                            </a>

                        </li>
                        <?php }?>
                        <?php if($this->permission1->method('print_setting','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("print_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('print_setting') ?>"><?php echo display('print_setting') ?> </a>
                        </li>
                        <?php }?>

                </li>
                <?php }?>
                <!-- Role permission start -->
                <?php if($this->permission1->method('add_role','create')->access() ||$this->permission1->method('role_list','read')->access() || $this->permission1->method('edit_role','create')->access() || $this->permission1->method('assign_role','create')->access()){?>
                <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_role") || $this->uri->segment('1') == ("role_list") || $this->uri->segment('1') == ("edit_role") || $this->uri->segment('1') == ("assign_role")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                    <a href="#">
                        <i class="ti-key"></i> <span><?php echo display('role_permission') ?></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        <?php if($this->permission1->method('add_role','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("add_role")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_role')?>"><?php echo display('add_role') ?></a></li>
                        <?php }?>
                        <?php if($this->permission1->method('role_list','read')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("role_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('role_list')?>"><?php echo display('role_list') ?></a></li>
                        <?php }?>
                        <?php if($this->permission1->method('user_assign','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("assign_role")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('assign_role')?>"><?php echo display('user_assign_role')?></a>
                        </li>
                        <?php }?>


                    </ul>
                </li>
                <?php }?>
                <!-- Role permission End -->
                <?php if($this->permission1->method('sms_configure','create')->access()){?>
                <!-- sms menu start -->

                <?php }?>




            </ul>
        </li>
        <?php }?>
        <!-- Software Settings menu end -->






    </ul>
</div> <!-- /.sidebar -->