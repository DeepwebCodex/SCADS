
<div id="content">
<ul class="page-nav fl">
			
			<li class="active"><?=$html->link('������� SSN. ����� ������� ���������� ������� � ������� ������ 50',array('action'=>'ssn_count')); ?></li>
		
			
			
</ul>
<div class="clear"></div>		
<?php

$i = 0;
 echo "<br>";
 echo "<br>";

echo " ||". $html->link(' id ',array('action'=>'ssn_count/id'));
echo " ||". $html->link(' date ',array('action'=>'ssn_count/date'));
echo " ||". $html->link(' count ',array('action'=>'ssn_count/count'));
echo " ||". $html->link(' count_new ',array('action'=>'ssn_count/new'));
echo " ||". $html->link(' count_new2 ',array('action'=>'ssn_count/new2'));

echo "<br>";
echo "<br>";
echo "<br>"; 
 
$all =  $this->params['pass'][10];


$count_p = $all/500;

$count_p = ceil($count_p);

for($i=1;$i <=$count_p;$i++){
	
	echo " ||". $html->link($i,array('action'=>'ssn_count/'.$this->params['pass'][0].'/'.$i));
	
}


 
//exit;


echo '<table class="table no-nowrap" border="1">';

echo " 
<thead>
<TH class='center' style='font-weight:700'>DOMEN</TH>
<TH class='center' style='font-weight:700'>ALEXA</TH>
<TH class='center' style='font-weight:700'>PR</TH>
<TH class='center' style='font-weight:700'>COUNTRY</TH>
<TH class='center' style='font-weight:700'>BD</TH>
<TH class='center' style='font-weight:700'>TABLE</TH>
<TH class='center' style='font-weight:700'>COLUMN</TH>
<TH class='center' style='font-weight:700'>COUNT</TH>
<TH class='center' style='font-weight:700'>COUNT2</TH>
<TH class='center' style='font-weight:700'>COUNT3</TH>
<TH class='center' style='font-weight:700'>CHECK</TH>
<TH class='center' style='font-weight:700'>DATE</TH>
<TH class='center' style='font-weight:700'>DATE2</TH>
<TH class='center' style='font-weight:700'>SHEMA</TH>
<TH class='center' style='font-weight:700'>ACT</TH>
<TH class='center' style='font-weight:700'>ONE</TH>
<thead>";

$i = 1;



foreach($data as $key =>$d):

//print_r($d);
//echo '<br>';
			$url =  		$d['url'][0];
			$url =  		"http://".$url;
			$id =  		 $d['id'][0];
			$bd = 		 $d['bd'][0];
			$table = 	 $d['table'][0];
			$column = 	 $d['column'][0];
			$shema = 	 $d['shema'][0];
			$count = 	 $d['count'][0];
			$count_new = 	 $d['count_new'][0];
			$count_new2 = 	 $d['count_new2'][0];
			$domen =  	 $d['domen'][0];
			$column_16 = $d['column_16'][0];
			$count_n =   $d['count_n'][0];
			$date =  	 $d['date'][0];
			$date_new =  	 $d['date_new'][0];
			$color =  	 $d['color'][0];
			$post_id =   $d['post_id'][0];
			
			$alexa =  	 $d['alexa'][0];
			$pr =  	   	 $d['pr'][0];
			$country =   $d['country'][0];
			
			
			
			
	
	

	$cc = count($orders_card);
	
	echo "<tbody>";
	
	
	if($color =='white')
	{
		echo '<tr style="background-color:white; color:black;" id="data'.$id.'">';
		
	}elseif($color =='CCCC00'){
		
		echo '<tr style="background-color:#CCCC00;color:black;" id="data'.$id.'">';
	}elseif($color =='CC0099'){
		
		echo '<tr style="background-color:#CC0099; color:black;" id="data'.$id.'">';
	}else
	{
		echo '<tr style="background-color:white; color:black;" id="data'.$id.'">';
	}
	
	
	
	
	//echo "<tr style=''>";
	
	if(count($orders_card)>0)
		{
	echo "<td>{$domen} <span style='color:blue;font-weight:700'>({$cc})</span><a href=\"#\" onclick=\"ShowDiv({$id}); return false\">�������/</a><a href=\"#\" onclick=\"ShowDiv2({$id}); return false\">�������</a>/ <a target='_blank' href=\"{$url}\">URL</a></td>";
	//echo "<td>{$domen} <span style='color:blue;font-weight:700'>({$cc})</span><a href=\"#\" onclick=\"ShowDiv(); return false\">�������/</a></td>";
	
		}else
		{
			echo "<td>{$domen} / <a target='_blank' href=\"{$url}\">URL</a></td>";
			
			
		}
		
	if($count_new !='' AND $count_new !=0){
		
		$new = $count_new-$count;
		$new = "+$new";
	}else{
		
		$new='check';
	}
		
	echo "<td>{$alexa}</td>";	
	echo "<td>{$pr}</td>";	
	echo "<td>{$country}</td>";	
	echo "<td>{$bd}</td>";
	echo "<td>{$table}</td>";
	echo "<td>{$column}</td>";
	echo "<td>{$count}</td>";
	echo "<td>{$count_new}</td>";
	echo "<td>{$count_new2}</td>";
	echo "<td>{$count_n}</td>";
	echo "<td><span style='font-size:10px;'>{$date}</span></td>";
	echo "<td><span style='font-size:10px;'>{$date_new}</span></td>";
	if(strlen($shema)>4)
	{
		$link = "<a style='color:blue;' href='/posts/view_order/{$id}' target='_blank;'>shema</a>";
		echo "<td>{$link}</td>";
		
	}else
	{
		echo "<td>����</td>";
		
	}
	
	
	 echo '<td width="60">'.$ajax->link("DEL||", '/posts/shlak_card/'.$id,array('class'=>'icon','title'=>'����������� � ����','escape' => false,'update'=>'data'.$id));
	
	 
	 echo $ajax->link('+||', '/posts/colorOrders/'.$id.'/CCCC00',array('class'=>'icon','title'=>'��������','escape' => false));
	 
	 echo $ajax->link('-', '/posts/colorOrders/'.$id.'/white',array('class'=>'icon','title'=>'��������','escape' => false));
	
	
	echo "</td>";
	
	$link = "<a style='color:blue;' href='/posts/view_order_one/{$post_id}' target='_blank;'>>>></a>";
	echo "<td>{$link}</td>";
	
	echo "</tr>";
	
		
			
	
	
	echo "</tr></tbody>";
	
	
$i++;
endforeach;

echo '</table>';
?>
</div>


