<!DOCTYPE html>
<html>
<head>
    <!-- <title><th>penjadwalan Learning Activity</th></title> -->
    <meta name="csrf-token" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body>

<div class="container">
    <h1>Penjadwalan Learning Activity</h1>
    <a class="btn btn-success"  data-target="#ajaxModel" data-toggle="modal" id="createNew"> Create New </a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Metode</th>
                <th>Januari</th>
                <th>Febuari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
      <td colspan="1">Workshop/Self learning</td>
    </tr>
    <tr>
      <td colspan="1">Sharing Praction/Profesionnal Talk</td>
    </tr>  <tr>
      <td colspan="1">Discussion Room</td>
    </tr>  <tr>
      <td colspan="1">Coaching</td>
    </tr>  <tr>
      <td colspan="1">Mentoring</td>
    </tr>  <tr>
      <td colspan="1">Job Assigment</td>
      <tr>
      <td colspan="8" aligment='center'>Sesuai Penugasan</td>
    </tr>
    </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="CustomerForm" name="CustomerForm" class="form-horizontal">
                   <input type="hidden" name="Customer_id" id="Customer_id">
                    <div class="form-group">
                        <label for="metode" class="col-sm-2 control-label">metode</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="metode" name="metode" placeholder="metode" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity" class="col-sm-2 control-label">activity</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="activity" name="activity" placeholder="activity" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">start_from:</label>
                    <div class="col-sm-4">
                     <input class="datepicker form-control" data-date-format="mm/dd/yyyy" name="start_from" id="start_from">
                    </div>
                    </div>      
                    <div class="form-group">
                    <div class="col-sm-4">
                    <label class="col-sm-2 control-label">start_end:</label>
                     <input class="datepicker form-control" data-date-format="mm/dd/yyyy" name="start_end" id="start_end">
                    </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="button" class="btn btn-primary" id="saveBtn" onclick="submit(this)">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<script type="text/javascript">

$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
   
});
  
 function submit(e){
     e.prevenDefault();
     alert('ok')
 }
</script>
</html>