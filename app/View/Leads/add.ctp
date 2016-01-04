<link  href="/css/bootstrap-datepicker3.css" rel="stylesheet">
<script src="/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready( function () {
  $('#sandbox-container .input-group.date').datepicker({
      autoclose: true,
      todayHighlight: true
  });

  $('.datepicker').datepicker({
      autoclose: true,
      todayHighlight: true
  })
});
</script>
<style>
  fieldset.scheduler-border {
      border: 1px groove #ddd !important;
      padding: 0 1.4em 1.4em 1.4em !important;
      margin: 0 0 1.5em 0 !important;
      -webkit-box-shadow:  0px 0px 0px 0px #000;
              box-shadow:  0px 0px 0px 0px #000;
  }

  legend.scheduler-border {
      font-size: 1.2em !important;
      font-weight: bold !important;
      text-align: left !important;
      width:auto;
      padding:0 10px;
      border-bottom:none;
  }
</style>
<h1>Add Lead</h1>

<?php
echo $this->Form->create('Lead', array("action" => "add", "class" => "form-horizontal", "role" => "form"));
?>
<fieldset class="scheduler-border">
  <legend class="scheduler-border">Customer Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="data[Lead][name]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone:</label>
    <div class="col-sm-10">
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="data[Lead][phone]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="data[Lead][address]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="data[Lead][city]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="state">State:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="data[Lead][state]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="zipcode">Zip Code:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="zipcode" placeholder="Enter zipcode" name="data[Lead][zipcode]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="data[Lead][email]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="laf_rep_code">Rep Code:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="laf_rep_code" placeholder="Enter LA Fitness Represnative Code" name="data[Lead][laf_rep_code]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="join_date">Join Date:</label>
    <div class="col-sm-10">
      <input type="text" class="datepicker form-control" data-date-format="mm/dd/yyyy" placeholder="Enter Join Date" name="data[Lead][join_date]">  
    </div>
  </div>
</fieldset>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">Vehicle Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="vehicle_year">Vehicle Year:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vehicle_year" placeholder="Enter vehicle year" name="data[Lead][vehicle_year]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="vehicle_make">Vehicle Make:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vehicle_make" placeholder="Enter vehicle make" name="data[Lead][vehicle_make]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="vehicle_model">Vehicle Model:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vehicle_model" placeholder="Enter vehicle model" name="data[Lead][vehicle_model]">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="vehicle_vin">Vehicle VIN:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="vehicle_vin" placeholder="Enter vehicle vin" name="data[Lead][vehicle_vin]">
    </div>
  </div>
</fieldset>

<?php
echo $this->Form->end('Save Lead');
?>
