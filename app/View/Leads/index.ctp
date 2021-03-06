<style>
#myModal .modal-dialog
{
    width: 700px; /* your width */
}
.form-group.required .control-label:after {
  content:"*";
  color:red;
}
</style>

<h1>&nbsp;</h1>
<p>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#myModal">Add New</button>
    <?php if (!empty($this->Session->flash())) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->Session->flash(); ?>
    </div>
    <?php } ?>
</p>


<table id="grid-data" class="table table-condensed table-hover table-striped">
    <thead>
        <tr>
            <th data-column-id="id" data-type="numeric" data-order="asc">ID</th>
            <th data-column-id="name">Name</th>
            <th data-column-id="cell_phone" data-order="desc">Cell Phone</th>
            <th data-column-id="home_phone" data-order="desc">Home Phone</th>
            <th data-column-id="laf_rep_code">Rep</th>
            <th data-column-id="created">Created</th>
            <th data-column-id="view" data-formatter="view" data-sortable="false">View</th>
        </tr>
    </thead>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add New Customer</h4>
            </div>

            <div class="modal-body">

                <?php
                echo $this->Form->create('Lead', array("id" => 'new_lead_form', "class" => "form-horizontal", "role" => "form"));
                ?>
                <fieldset class="scheduler-border">
                  <legend class="scheduler-border">Contact Information</legend>
                  <div class="form-group required">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" required="required" placeholder="Enter name" name="data[Lead][name]">
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label col-sm-2" for="cell_phone">Cell Phone:</label>
                    <div class="col-sm-3">
                      <input type="cell_phone" class="form-control" id="cell_phone" required="required" placeholder="Enter cell phone" name="data[Lead][cell_phone]">
                    </div>
                    <label class="control-label col-sm-3" for="home_phone">Home Phone:</label>
                    <div class="col-sm-4">
                      <input type="home_phone" class="form-control" id="home_phone" placeholder="Enter home phone" name="data[Lead][home_phone]">
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
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="data[Lead][city]">
                    </div>
                    <label class="control-label col-sm-2" for="state">State:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="state" placeholder="State" name="data[Lead][state]">
                    </div>
                    <label class="control-label col-sm-2" for="zip_code">Zip Code:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="zip_code" placeholder="Zipcode" name="data[Lead][zip_code]">
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" required="required" placeholder="Enter email" name="data[Lead][email]">
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label col-sm-2" for="laf_rep_code">Rep Code:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="laf_rep_code" required="required" placeholder="Enter LA Fitness Represnative Code" name="data[Lead][laf_rep_code]">
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="control-label col-sm-2" for="join_date">Join Date:</label>
                    <div class="col-sm-10">
                      <input type="text" class="datepicker form-control" required="required" data-date-format="mm/dd/yyyy" placeholder="Enter Join Date" name="data[Lead][join_date]">  
                    </div>
                  </div>
                </fieldset>

                <fieldset class="scheduler-border">
                  <legend class="scheduler-border">Vehicle Information</legend>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="vehicle_year">Vehicle Year:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="vehicle_year" placeholder="Enter vehicle year" name="data[Lead][vehicle_year]">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="vehicle_make">Vehicle Make:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="vehicle_make" placeholder="Enter vehicle make" name="data[Lead][vehicle_make]">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="vehicle_model">Vehicle Model:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="vehicle_model" placeholder="Enter vehicle model" name="data[Lead][vehicle_model]">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="vehicle_vin">Vehicle VIN:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="vehicle_vin" placeholder="Enter vehicle vin" name="data[Lead][vehicle_vin]">
                    </div>
                  </div>
                </fieldset>
            </div>
            
            <div class="modal-footer">
                <?php
                echo $this->Form->button('Submit Form', array(
                    'id'      => 'add_new_lead',
                    'type'    => 'submit',
                    'escape'  => true
                ));
                echo $this->Form->end();
                ?>
            </div>
        </div>
        <!-- End Modal content-->

    </div>
</div> 




<script>
$(document).ready( function () {
    $("#grid-data").bootgrid({
        ajax: true,
        post: function ()
        {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },
        url: "/leads/getLeads.json",
        formatters: {
            "view": function(column, row)
            {
                return "<a href=\"/leads/view/"+ row.id  +"\">" + column.id + ": " + row.id + "</a>";
            }
        }
    });
} );

/**
 * [Submit 'Add New Lead' form via ajax and dynamically refresh grid]
 */
$('#add_new_lead').on('click', function(e) {
  e.preventDefault();

  var url = '/leads/add.json';

  $.ajax({
    url: url,
    type: 'POST',
    data: $('#new_lead_form').serialize()
  }).done(function(data){
    if(data.result == true){
      // if lead is added to the database then refresh the datagrid else display error
      $('#grid-data').bootgrid('reload');
      $('#myModal').modal('hide');
    } else {
      alert('ERROR: '+ data.message);
    }
  })
});


  


</script>
