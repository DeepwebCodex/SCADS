<!-- START CONTENT -->

<div id="content">

<ul class="page-nav fl">

<li ><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
<li ><?=$html->link('ADD LINKS',array('action'=>'add')); ?></li>
<li class="active"><?=$html->link('ADD DOMENS',array('action'=>'add_domens')); ?></li>
<li><?=$html->link('ADD SHELLS',array('action'=>'add_shells')); ?></li>
<li ><?=$html->link('SINGLE BREAKING',array('action'=>'add_one')); ?></li>
<li><?=$html->link('SINGLE DUMP',array('action'=>'dumping_all')); ?></li>

</ul>

<div class="clear"></div>
<table class="table">
<thead>
<th>ADD DOMENS</th>
</thead>
<tbody>
<tr>
<td>
<!--
<label for="hash">Укажите путь к файлу ссылок(добавить сразу):</label>
-->
<?=$form->create('Post',array('type'=>'file'))?>
<?=$form->input('file',array('type'=>'file', 'class'=>'input','div'=>false,'label'=>false))?>

<?=$form->input('link',array('type'=>'text', 'class'=>'input','div'=>false,'label'=>'	URL TO FILE '))?>

<?=$form->submit('ADD', array('name'=>'hash','class'=>'btn btn_green','div'=>false))?>
<?=$form->end()?>
<br/>
<br/>

<span class="comment red">	FILE TXT FORMAT UTF-8</span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- STOP CONTENT -->