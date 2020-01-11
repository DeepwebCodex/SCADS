	<!-- START CONTENT -->
	<div id="content">
		<ul class="page-nav fl">
			<li class="active"><?=$html->link('SHELLS',array('action'=>'shelltest2')); ?></li>
			<li><?=$html->link('TABLE Fileds',array('action'=>'squleview')); ?></li>
			<li><?=$html->link('CHECK SHELLS',array('action'=>'shelltest/yes')); ?></li>
			<li><?=$html->link('CHECK PROXY',array('action'=>'proxy_one')); ?></li>
			<li><?=$html->link('UPDATE HOME',array('action'=>'mailinfo2')); ?></li>
			
			
		</ul>

		

		<div class="clear"></div>
		<table class="table no-nowrap">
			<thead>
				<th class="center">List of active shells <?if(count($serv) > 0){?>(<?=count($serv)?> pieces.)<?}?></th>
			</thead>
			<tbody>
				<? if(count($serv)==0){ ?>
					<tr>
						<td class="center">No rows to display</td>
					</tr>
				<? }else{ ?>
					<? foreach ($serv as $ser){ ?>
					<tr>
						<td><?=$ser ?></td>
					</tr>
					<? } ?>
				<? } ?>
			</tbody>
		</table>

	</div>
	<!-- STOP CONTENT -->