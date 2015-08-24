<h1>FREE Oil Changes - Leads</h1>
<p>
 <a href="/leads/add" class="btn btn-md btn-success">Add New</a>
 
       <div class="alert alert-success" role="alert">
        <?php echo $this->Session->flash(); ?>
      </div>
</p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Rep</th>
        <th>Status</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($leads as $lead): ?>
      <tr>
        <td><?php echo $lead['Lead']['id']; ?></td>
        <td><?php echo $lead['Lead']['name']; ?></td>
        <td><?php echo $lead['Lead']['phone']; ?></td>        
        <td><?php echo $lead['Lead']['laf_rep_code']; ?></td>                
        <td><?php echo $lead['Lead']['status']; ?></td>
        <td>
            <?php echo $this->Html->link($lead['Lead']['name'],
array('controller' => 'leads', 'action' => 'view', $lead['Lead']['id'])); ?>
        </td>
        <td><?php echo $lead['Lead']['created']; ?></td>
      </tr>
    <?php endforeach; ?>
    <?php unset($lead); ?>
    </tbody>
  </table>
      
