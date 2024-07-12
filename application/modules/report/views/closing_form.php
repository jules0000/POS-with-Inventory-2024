<div class="row">
    <div class="col-sm-12">


        <a href="<?php echo base_url('closing_report') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                class="ti-align-justify"> </i> <?php echo display('closing_report') ?> </a>


    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo display('closing_account') ?></h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="text-center">

                    <h3> <?php echo $company_info[0]['company_name']?> </h3>
                    <h4><?php echo $company_info[0]['address']?> </h4>
                    <h4><?php echo display('cash_closing') ?> </h4>

                    <h4> <?php echo display('date') ?>:<?php echo date("d/m/Y"); ?> </h4>
                </div>

                <?php echo form_open_multipart('report/report/add_daily_closing', array('class' => 'form-vertical', 'id' => 'daily_closing')) ?>
                <div class="form-group row">
                    <label for="last_day_closing"
                        class="col-sm-3 col-form-label"><?php echo display('last_day_closing') ?></label>
                    <div class="col-sm-6">
                        <input type="text" name="last_day_closing" class="form-control" id="last_day_closing"
                            value="<?php echo $info['last_day_closing']?>" readonly="readonly" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cash_in" class="col-sm-3 col-form-label"><?php echo display('receive') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cash_in" name="cash_in"
                            value="<?php echo $info['cash_in'];?>" readonly="readonly" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cash_out" class="col-sm-3 col-form-label"><?php echo display('payment') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cash_out" name="cash_out"
                            value="<?php echo $info['cash_out']?>" readonly="readonly" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cash_in_hand" class="col-sm-3 col-form-label"><?php echo display('balance') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cash_in_hand" name="cash_in_hand"
                            value="<?php echo $info['cash_in_hand']?>" readonly="readonly" required />
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-6">
                        <input type="submit" id="add-deposit" class="btn btn-primary" name="add-deposit"
                            value="<?php echo display('day_closing') ?>" required />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>