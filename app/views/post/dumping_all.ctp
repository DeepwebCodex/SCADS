	<!-- START CONTENT -->
	<div id="content">
		<ul class="page-nav fl">
			<li><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
			<li><?=$html->link('ADD LINKS',array('action'=>'add')); ?></li>
			<li><?=$html->link('ADD DOMAIN',array('action'=>'add_domens')); ?></li>
			<li><?=$html->link('ADD SHELLS',array('action'=>'add_shells')); ?></li>
			<li><?=$html->link('SINGLE BREAKING',array('action'=>'add_one')); ?></li>
			<li class="active"><?=$html->link('SINGLE DUMP',array('action'=>'dumping_all')); ?></li>
		</ul>
		<div class="clear"></div>
	
	

		
		
		
		<div class="clear"></div>
		<?	
		if(count($starts3_one)!==0)
		{
		echo '<br><h2 class="center" style="font-size:18px">Multi threaded download single site with selected columns</h2><br>';?>
		
		<table class="table">
			<thead>
				
				<th class="center" width="50">ID</th>
				<th class="center" width="50">PID</th>
				<th class="center" width="50">Domen</th>
				<th class="center" width="50">Filed_ID</th>
				<th class="center" width="50">LASTLIMIT</th>
				<th class="center" width="10%">COUNT:</th>
				<th class="center" width="5">GET</th>
				<th class="center" width="5%">POTOK</th>
				<th class="center" width="5%">SPEED</th>
				<th class="center" width="5%">DOK</th>
				<th class="center" width="5%">Actions</th>
				<th class="center" width="5%">Apply</th>
				<th class="center" width="5%">Status</th>
				<th class="center" width="5%">Cause</th>
				
				
			</thead>
			<tbody>
				<? foreach ($starts3_one as $work3){ ?>
				<tr>
					<td class="center"><?=$work3['multis_one']['id']?></td>
					<td class="center"><?=$work3['multis_one']['pid']?></td>
					<td class="center"><?=$work3['multis_one']['domen']?></td>
					<td class="center"><?=$work3['multis_one']['filed_id']?></td>
					
					<? echo "<FORM ACTION='/posts/dumping_all/' METHOD='POST'>";?>
					
					<td class="center">
					 <? echo "<input type='text' size='3' name='limit' value='".$work3['multis_one']['lastlimit']."'>"; ?>
					</td>
					<td class="center"><?=$work3['multis_one']['count']?></td>
					<td class="center"><?=$work3['multis_one']['get']?></td>
					
					
					
					
					
					<td class="center"><?=$work3['multis_one']['potok']?></td>
					<?
					if($work3['multis_one']['function']==1 ){
					
						$speed = 'slow';
					}else{
						
						$speed = 'fast';
					}
					?>
					<td class="center"><?=$speed?></td>
					
					
					
					<td class="center">
					
					
						 <? echo "<input type='text' size='2' name='dok' value='".$work3['multis_one']['dok']."'>"; ?>
					
					
					
					
					</td>
					
					
				
			
		<?	echo "<td><select name='st3_one'>";
			echo "<option value='2'>Finished</option>";
			echo "<option value='3' selected>Restart</option>";
			echo "<option value='4' >Remove</option>";
			echo "</select></td>";
			echo "<input type='hidden' name='id3' value='".$work3['multis_one']['id']."'>";
			echo "<td><input type='hidden' name='filed_id' value='".$work3['multis_one']['filed_id']."'>";
			echo "<input type='hidden' name='pid' value='".$work3['multis_one']['pid']."'>";
			echo "<input type='submit' name='update33' value='update'>";
			echo "</td>";
			echo '</FORM>';
			
			$time = time();
			
			
			
			if($work3['multis_one']['get'] == 3){
			
				$st = 'In process';
			}elseif($work3['multis_one']['get'] == 2){
				$st = 'Stopped';
			}elseif($work3['multis_one']['get'] == 1){
				
				
				
				if(($time - $work3['multis_one']['date']) > 500){
			
					$st = 'Hung';
				}else{
					$st = 'Download';
					
				}
			}
			
			
			
				echo "<td class='center'>".$st."</td>";?>
			
			<? echo "<td class='center'>".$work3['multis_one']['prich']."</td></tr>";?>

				<? } ?>
			</tbody>
		</table>
		<? } ?>
		
		
	</div>
	<!-- STOP CONTENT -->