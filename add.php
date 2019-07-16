<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=addaksi"; ?>" enctype="multipart/form-data">
  <h3>INPUT DATA</h3>
  <input type="hidden" name="iddata" value="<?php echo "$rdata[iddata]"; ?>" />
  <input name="kurs" type="text" id="kurs" placeholder="Kurs Dollar (Rp)">  
  <input name="uang" type="text" id="uang" placeholder="Jumlah Uang Beredar (Milliaran)">
  <input name="inflansi" type="text" id="inflansi" placeholder="Inflansi (%)">  
  <input name="ihsg" type="text" id="ihsg" placeholder="IHSG"> 
  <input name="target" type="text" id="target" placeholder="Target BI RATE (%)">   
  <input type="submit" name="Submit" value="SIMPAN Data">
</form>
</fieldset>
</div>
