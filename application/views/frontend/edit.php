<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Employee edit page</h5>
                        <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger fload-right">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employee/updateData/' . $employee->id); ?>" method = "POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text"  name = "first_name" value = "<?php echo $employee -> first_name ?>" class="form-controll">
                                <small>
                                    <?php echo form_error('first_name') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name = "last_name" value = "<?php echo $employee -> last_name ?>"  class="form-controll">
                                <small>
                                    <?php echo form_error('last_name') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name = "phone" value = "<?php echo $employee -> phone ?>"  class="form-controll">
                                <small>
                                    <?php echo form_error('phone') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name = "email" value = "<?php echo $employee -> email ?>"  class="form-controll">
                                <small>
                                    <?php echo form_error('email') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <button type = "submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
