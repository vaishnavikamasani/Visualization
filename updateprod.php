<html>
<head>
	<title>select </title>
</head>
<body>
<script type="text/javascript">
	var PopupImageContainer = new Image();
	var PopupImageCaption = new String();
	var PopupImageSRC = new String();
	function PopImage(imagesrc,caption)
	{
		if( length.imagesrc < 1 ) { return; }
		var loadDelay = PopupImageSRC.length ? 1 : 750;
		PopupImageSRC = imagesrc;
		PopupImageCaption = caption ? caption : '';
		PopupImageContainer.src = PopupImageSRC;
		setTimeout("PopupImageDisplay()",loadDelay);
	}
	function PopupImageDisplay() 
	{
		var iw = 700;
		var ih = 400;
		var ww = iw + 10;
		var hh = ih + 10;
		var properties = 'height=' + hh + ',width=' + ww + ',resizable=yes,location=no';
		var picture = window.open('','',properties);
		picture.document.writeln('<html><head><title>' + PopupImageCaption + '</title>');
		picture.document.writeln('<script language="JavaScript"> function CloseMe() { self.close(); } <'+'/script>');
		picture.document.write('<'+'/head><body onBlur="CloseMe()"><center>');
		picture.document.write('<img src="' + PopupImageSRC + '" width="' + iw + '" height="' + ih + '" border="0">');
		picture.document.write('<p>' + PopupImageCaption + '<'+'/p>');
		picture.document.writeln('<'+'/center><'+'/body><'+'/html>');
	}
	function changegender()
	{
		document.getElementById("gender").style.backgroundColor = "red";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changeretailvalue()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "red";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changecareerstatus()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "red";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changepopulation()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "red";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changesoldalbums()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "red";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changehits()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "red";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changeranking()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "red";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changeorigin()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "red";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changesoldsingles()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "red";
		document.getElementById("market").style.backgroundColor = "white";
	}
	function changemarket()
	{
		document.getElementById("gender").style.backgroundColor = "white";
		document.getElementById("retailvalue").style.backgroundColor = "white";
		document.getElementById("careerstatus").style.backgroundColor = "white";
		document.getElementById("population").style.backgroundColor = "white";
		document.getElementById("soldalbums").style.backgroundColor = "white";
		document.getElementById("hits").style.backgroundColor = "white";
		document.getElementById("ranking").style.backgroundColor = "white";
		document.getElementById("origin").style.backgroundColor = "white";
		document.getElementById("soldsingles").style.backgroundColor = "white";
		document.getElementById("market").style.backgroundColor = "red";
	}
	</script>
	<div id='attributes'>
		<form name='attributes' method='post' action='update.php' target="_blank">
			<table border="1">
				<tr>
					<th colspan='6' align='center'>Select Attributes</th>
				</tr>
				<tr>
					<td><input type='checkbox' name='attributes[]' value='gender' /></td>
					<td bgcolor="orange">Gender</td>
					<td id="gender" onclick="changegender()">
						<img src="gender.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/gender.png','')"/>
					</td>
					<td><input type='checkbox' name='attributes[]' value='retailvalue' /></td>
					<td bgcolor="lightyellow">Retail Value</td>
					<td id="retailvalue" onclick="changeretailvalue()">
						<img src="retailvalue.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/retailvalue.png','')"/>
					</td>
				</tr>
				<tr>
					<td><input type='checkbox' name='attributes[]' value='careerstatus' /></td>
					<td bgcolor="orange">Career Status</td>
					<td id="careerstatus" onclick="changecareerstatus()">
						<img src="careerstatus.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/careerstatus.png','')"/>
					</td>
					<td><input type='checkbox' name='attributes[]' value='population' /></td>
					<td bgcolor="orange">Population</td>
					<td id="population" onclick="changepopulation()">
						<img src="population.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/population.png','')"/>
					</td>
				</tr>
				<tr>
					<td><input type='checkbox' name='attributes[]' value='soldalbums' /></td>
					<td bgcolor="lightyellow">Sold Albums</td>
					<td id="soldalbums" onclick="changesoldalbums()">
						<img src="soldalbums.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/soldalbums.png','')"/>
					</td>
					<td><input type='checkbox' name='attributes[]' value='hits' /></td>
					<td bgcolor="orange">Hits</td>
					<td id="hits" onclick="changehits()">
						<img src="hits.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/hits.png','')"/>
					</td>
				</tr>
				<tr>
					<td><input type='checkbox' name='attributes[]' value='ranking' /></td>
					<td bgcolor="lightyellow">Ranking</td>
					<td id="ranking" onclick="changeranking()">
						<img src="ranking.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/ranking.png','')"/>
					</td>
					<td><input type='checkbox' name='attributes[]' value='origin' /></td>
					<td bgcolor="orange">Origin</td>
					<td id="origin" onclick="changeorigin()">
						<img src="origin.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/origin.png','')"/>
					</td>
				</tr>
				<tr>
					<td><input type='checkbox' name='attributes[]' value='soldsingles' /></td>
					<td bgcolor="orange">Sold Singles</td>
					<td id="soldsingles" onclick="changesoldsingles()">
						<img src="soldsingles.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/soldsingles.png','')"/>
					</td>
					<td><input type='checkbox' name='attributes[]' value='marketcontinent' /></td>
					<td bgcolor="orange">Market</td>
					<td id="market" onclick="changemarket()">
						<img src="market.png" width="150px" height="50px" style="cursor:pointer;" onclick="PopImage('http://cs.okstate.edu/~kamasan/market.png','')"/>
   					</td>
				<tr>
					<td colspan='6' align='center'><button type="submit" formtarget="frame2">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>