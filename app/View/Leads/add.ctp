<h1>Add Lead</h1>
<?php
echo $this->Form->create('Lead');
echo $this->Form->input('name');
echo $this->Form->input('phone');
echo $this->Form->input('address');
echo $this->Form->input('city');
echo $this->Form->input('state');
echo $this->Form->input('zipcode');
echo $this->Form->input('email');
echo $this->Form->input('laf_rep_code');
echo $this->Form->input('join_date');
echo $this->Form->input('vehicle_year');
echo $this->Form->input('vehicle_make');
echo $this->Form->input('vehicle_model');
echo $this->Form->input('vehicle_vin');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Lead');
?>
