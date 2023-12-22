
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php if($this -> session -> flashData('status')) : ?>
                        <div class="alert alert-success">
                           <?= $this -> session -> flashData('status'); ?> 
                        </div>
                        <?php endif; ?>
                        <h5>How fetch data from database in codeigniter</h5>
                        <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary fload-right">Add Employee</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id = "datatable1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Confirm delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row) :?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->first_name; ?></td>
                                    <td><?php echo $row->last_name; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('employee/edit/' . $row->id)?>" class = "btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('employee/deleteData/' . $row->id)?>" class = "btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    <td>
                                        <button type = "button" class = "btn btn-danger confirm-delete" value = "<?= $row -> id ?>">Confirm delete</button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>