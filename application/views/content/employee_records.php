<div class="col-sm-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <section class="content-header">
        <h1>Employees Records</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Dashboard</a></li>
          <li class="active"><a href="#">Employees</a></li>
        </ol>
      </section>
      <br>
    </div><!-- box-body -->
    <div ><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-sm-12">
          
              <br />
              <br />
              <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Employee ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Shift</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
          </div><!-- end of container -->
        </div>
      </div><!-- box-body -->
    </div>
  </div>
</div>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

//datatables
table = $('#table').DataTable({

    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "order": [], //Initial no order.

    // Load data for the table's content from an Ajax source
    "ajax": {
        "url": "<?php echo site_url('employee/ajax_list')?>",
        "type": "POST"
    },
});
});

</script>
