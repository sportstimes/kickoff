<?php
$title = 'Kick Off Calendars';
if(isset($team)) $title = $team['Team']['name'] . ' - ' . $title;
$this->viewVars['title_for_layout'] = $title;
?>

<h1><?php echo $team['Team']['name']; ?></h1>

<div class="cta">
  <?php echo $this->Html->link('Subscribe',array('action'=>'export',$team['Team']['id']),array('class'=>'btn btn-large')); ?>
</div>

<?php
//_debug($events);
echo $this->element('events_grid',array('events'=>$events,'context'=>'upcoming')); 
?>

<p><small>
  <?php if(isset($team['Competition']['id'])) {
    echo $this->Html->link($team['Competition']['name'],array('controller'=>'competitions','action'=>'view',$team['Competition']['id']), array('class'=>'competition'));
    }
  ?>
  <?php echo $this->Html->link($team['Sport']['name'],array('controller'=>'sports','action'=>'view',$team['Sport']['id']), array('class'=>'sport')); ?>
</small></p>

<div class="">
  <?php echo $this->Html->adminLink('Add Event',array('controller'=>'events','action'=>'form','home_team_id'=>$team['Team']['id']),array('class'=>'btn')); ?>
  <?php echo $this->Html->adminLink('Edit',array('action'=>'edit',$team['Team']['id']),array('class'=>'btn')); ?>
  <?php echo $this->Html->link('Export',array('action'=>'export',$team['Team']['id'],'json'),array('download'=>true, 'class'=>'btn ', 'title'=>'Export to JSON')); ?>
  <?php echo $this->Html->adminLink('Sync',array('action'=>'import_events',$team['Team']['id']),array('class'=>'btn ')); ?>
  <?php echo $this->Html->adminPostLink( 'Delete',
      array('action' => 'delete', $team['Team']['id']),
      array('confirm' => 'Are you sure?', 'class'=>'btn') );
  ?>
</div>
