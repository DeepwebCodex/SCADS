<? if(!isset($z)){ ?>
	<!-- START CONTENT -->
	<div id="content">
			<ul class="page-nav fl">
			<li  ><?=$html->link('Download from sample',array('action'=>'rendview')); ?></li>
			<li class="active"><?=$html->link('Download from Base',array('action'=>'rendview')); ?></li>
			<li><?=$html->link('Downloas from files',array('action'=>'download_domens')); ?></li>
		</ul>

		<?=$form->create('Post')?>
			<?=$form->submit('clear', array('name'=>'delete','class'=>'btn_simple btn_red page_btn fr','div'=>false, 'onclick'=>'if(!confirm("Everything will be deleted. Continue ?")){return false;}'))?>
		<?=$form->end()?>

		<div class="clear"></div>
		<table class="table no-nowrap">
			<thead>
				<th>Domain</th><th class="center">Action</th>
			</thead>
			<tbody>
				<? if(count($domen) > 0){ ?>
					<? foreach ($domen as $key => $val){ ?>
					<tr>
						<td>.<?=$key?> - <?=$val?> in base</td>
						<td><?=$html->link('Download',array('action'=>'domens2/?z='. $key),array('class'=>'btn btn_green')); ?></td>
					</tr>
					<? } ?>
				<? }else{ ?>
					<tr>
						<td colspan="2" class="center">No records</td>
					</tr>
				<? } ?>
			</tbody>
		</table>

	</div>
	<!-- STOP CONTENT -->
		
<?
}else{
	ob_clean();
	header("Content-Description: File Transfer\r\n");
	header("Pragma: public\r\n");
	header("Expires: 0\r\n");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0\r\n");
	header("Cache-Control: public\r\n");
	header("Content-Type: text/plain; charset=UTF-8\r\n");
	header("Content-Disposition: attachment; filename=\"{$z}_mail.txt\"\r\n");
	ob_end_clean();
	$dd = new DATABASE_CONFIG;
	$dannie=$dd->default;
	$ddb2=mysql_connect($dannie['host'],$dannie['login'],$dannie['password']);
	mysql_select_db($dannie['database'],$ddb2);
	$result = mysql_query("SELECT * FROM `domens2` WHERE domen='$z'",$ddb2);
	while ($row = mysql_fetch_array($result)){
			if($row[0]==$z)
				echo $row[2]."\n";
	}
	
	exit;
}

?>