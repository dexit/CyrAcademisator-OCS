<h4><?php echo $erw_einst_output ?>: <?php echo $ausw_isor9; ?></h4>
<?php if ($_POST['quelltext'] != "alalc") { ?>
<select class="form-control" style="width: auto;float:left;" name="titlo" size="4">
	<optgroup label="<?php echo $titlo;?>">
     		<option value="2"<?php if ($_POST['titlo'] == "2" OR ($_POST['titlo'] == NULL)) {echo" selected";} ?>><?php echo $titlo_2;?> </option>
		<option value="1"<?php if ($_POST['titlo'] == "1") {echo" selected";} ?>><?php echo $titlo_1;?> </option>
     		<option value="0"<?php if ($_POST['titlo'] == "0") {echo" selected";} ?>><?php echo $titlo_0;?> </option>
	</optgroup>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="akzente_entfernen" size="4">
	<optgroup label="<?php echo $diakritika;?>">
     		<option value="1"<?php if ($_POST['akzente_entfernen'] == "1") {echo" selected";} ?>><?php echo $diakritika_1;?> </option>
		<option value="2"<?php if (($_POST['akzente_entfernen'] == "2") OR ($_POST['akzente_entfernen'] == NULL)) {echo" selected";} ?>><?php echo $diakritika_2;?> </option>
     		<option value="0"<?php if ($_POST['akzente_entfernen'] == "0") {echo" selected";} ?>><?php echo $diakritika_0;?> </option>
	</optgroup>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="interpunktion" size="3">
	<optgroup label="<?php echo $interpunktion;?>">
		<option value="1"<?php if ($_POST['interpunktion'] == "1") {echo" selected";} ?>><?php echo $interpunktion_1;?> </option>
		<option value="0"<?php if (($_POST['interpunktion'] == "0")  OR ($_POST['interpunktion'] == NULL)) {echo" selected";} ?>><?php echo $interpunktion_0;?> </option>
	</optgroup>
</select><div style="clear:both;"></div>   <?php } ?>
    <select class="form-control" style="width: auto;float:left;" name="theta" size="4">
      <option value="1"<?php if ((($_POST['theta'] != "2") AND ($_POST['theta'] != "3")) OR ($_POST['theta'] == NULL)) {echo" selected";} ?>>ѳ = ḟ</option>
      <option value="2"<?php if ($_POST['theta'] == "2") {echo" selected";} ?>>ѳ = θ</option>
      <option value="3"<?php if ($_POST['theta'] == "3") {echo" selected";} ?>>ѳ = th</option>
      <option value="4"<?php if ($_POST['theta'] == "4") {echo" selected";} ?>>ѳ = t</option>
    </select>&nbsp;
    <select class="form-control" style="width: auto;float:left;" name="cu_isor9_omega" size="3">
      <option value="1"<?php if ((($_POST['cu_isor9_omega'] != "2") AND ($_POST['cu_isor9_omega'] != "3")) OR ($_POST['cu_isor9_omega'] == NULL)) {echo" selected";} ?>>ѡ = ô</option>
      <option value="2"<?php if ($_POST['cu_isor9_omega'] == "2") {echo" selected";} ?>>ѡ = o</option>
      <option value="3"<?php if ($_POST['cu_isor9_omega'] == "3") {echo" selected";} ?>>ѡ = w</option>
    </select>&nbsp;
    <select class="form-control" style="width: auto;float:left;" name="cu_isor9_jer" size="3">
      <option value="1"<?php if ((($_POST['cu_isor9_jer'] != "2") AND ($_POST['cu_isor9_jer'] != "3")) OR ($_POST['cu_isor9_jer'] == NULL)) {echo" selected";} ?>>ь = ь / ъ = ъ</option>
      <option value="2"<?php if ($_POST['cu_isor9_jer'] == "2") {echo" selected";} ?>>ь = ʹ/ ъ = ʺ</option>
      <option value="3"<?php if ($_POST['cu_isor9_jer'] == "3") {echo" selected";} ?>>ь = ĭ / ъ = ŭ</option>
    </select>&nbsp;
    <select class="form-control" style="width: auto;float:left;" name="cu_isor9_x" size="2">
      <option value="1"<?php if (($_POST['cu_isor9_x'] == "1") OR ($_POST['cu_isor9_x'] == NULL)) {echo" selected";} ?>>х = ch</option>
      <option value="2"<?php if ($_POST['cu_isor9_x'] == "2") {echo" selected";} ?>>х = x</option>
    </select>&nbsp;
<?php if ($_POST['quelltext'] != "alalc") { ?>
    <select class="form-control" style="width: auto;float:left;" name="schtsch" size="2">
      <option value="1"<?php if (($_POST['schtsch'] == "1") OR ($_POST['schtsch'] == NULL)) {echo" selected";} ?>>щ = št</option>
      <option value="2"<?php if ($_POST['schtsch'] == "2") {echo" selected";} ?>>щ = šč</option>
    </select>&nbsp; 
<select class="form-control" style="width: auto;float:left;" name="ikratkoe" size="2">
	<option value="1"<?php if ($_POST['ikratkoe'] == "1" OR ($_POST['ikratkoe'] == NULL)) {echo" selected";} ?>>й = и краткое</option>
	<option value="0"<?php if (($_POST['ikratkoe'] == "0")) {echo" selected";} ?>>й = и +&nbsp;&nbsp; ̆</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="ou" size="2">
	<option value="2"<?php if ($_POST['ou'] == "2") {echo" selected";} ?>>"о-у" & ѹ = u</option>
	<option value="1"<?php if (($_POST['ou'] == "1") OR ($_POST['ou'] == NULL)) {echo" selected";} ?>>"о-у"= ou / ѹ = u</option>
</select>    <?php } ?>
<div style="clear:both;"></div>
<input class="btn" name="transliteration" type="submit" value="<?php echo $anwenden;?>" >

