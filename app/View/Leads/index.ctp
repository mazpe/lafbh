<h1>Blog leads</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $leads array, printing out lead info -->

    <?php foreach ($leads as $lead): ?>
    <tr>
        <td><?php echo $lead['Lead']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($lead['Lead']['name'],
array('controller' => 'leads', 'action' => 'view', $lead['Lead']['id'])); ?>
        </td>
        <td><?php echo $lead['Lead']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($lead); ?>
</table>
