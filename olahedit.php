<?php
	include "koneksi.php";	
	$sqlinput = mysql_query("select * from data where iddata='$_GET[idd]'");
	$rinput = mysql_fetch_array($sqlinput);
?>
<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=olaheditaksi"; ?>" enctype="multipart/form-data">
  <h3>Edit Data</h3>
  <input type="hidden" name="idd" value="<?php echo "$rinput[iddata]"; ?>" />
  <input name="kurs" type="text" id="kurs" placeholder="Kurs" value="<?php echo "$rinput[kurs]"; ?>" >
  <input name="uang" type="text" id="uang" placeholder="Jumlah Uang Beredar" value="<?php echo "$rinput[uang]"; ?>" >
   <input name="inflansi" type="text" id="inflansi" placeholder="Inflansi" value="<?php echo "$rinput[inflansi]"; ?>" >
   <input name="ihsg" type="text" id="ihsg" placeholder="IHSG" value="<?php echo "$rinput[ihsg]"; ?>" >
   <input name="target" type="text" id="target" placeholder="Target" value="<?php echo "$rinput[target]"; ?>" >
    <input type="submit" name="Submit" value="SIMPAN JASA KIRIM">
</form>
</fieldset>
</div>
