<h2>Current Ready Jobs in <?=$tube_name?></h2> 
<p>Total are <?=$jobs_count?> jobs.</p>
	<table class="table table-bordered table-striped styled">
		<?php $params = reset($jobs_stats); ?>
		<tr>
			<th>view</th>
			<?php foreach($params as $key=>$item): ?>
			<th title=""><?=$key?></th>
			<?php endforeach;?>
		</tr>
		<?php foreach($jobs_stats as $id=>$item):?>
		<tr>
			<td><a data-toggle="modal" class="btn btn-small" rel="viewJob" href="#" id="<?=$id?>">view</a></td>
			<?php foreach($item as $k => $v):?>
				<td><?=$v?></td>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>
	</table>