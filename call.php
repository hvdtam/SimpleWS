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
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
	$curl = "https://hvdtam.000webhostapp.com/ws/".$id;
	//Call a Web Service with cURL
	$songs = curl_init($curl);
	curl_setopt($songs,CURLOPT_RETURNTRANSFER,true);
	$call = curl_exec($songs);
	
	$result = json_decode($call);
	
	echo "<table border='1'>";
	echo "<tr><th>ID:</th><td>$result->id</td></tr>";
	echo "<tr><th>Name:</th><td>$result->name</td></tr>";
	echo "<tr><th>Group:</th><td>$result->group</td></tr>";
	echo "</table>";
}
    ?>