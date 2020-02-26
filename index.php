<title>hvdtam</title>
<form action="service.php" method="GET">
<fieldset>
  <legend>Export:</legend>
<p>ID (1-4):
<input type="text" name="id" required/></p>
<p>Format:<select name="format">
  <option value="xml">XML</option>
  <option value="json">JSON</option>
</select></p>
<button type="submit">Export</button>
</fieldset>
</form>

<form action="call.php" method="GET">
<fieldset>
  <legend>Call Web Service:</legend>
<p>ID (1-4):
<input type="text" name="id" required/></p>
<p>1 - Huynh Van Dinh Tam</p>
<p>2 - Vo Hung Qui</p>
<p>3 - Tran Minh Nhut</p>
<p>4 - Nguyen Tien Dung</p>
<button type="submit">Call</button>
</fieldset>
</form>
