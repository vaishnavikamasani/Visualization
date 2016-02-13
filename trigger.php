<html>
	<head>
		<script src='https://cdn.zingchart.com/zingchart.min.js'></script>
	</head>
	<body>
		<div id='myChart'></div>
		<?php
		$host="cs.okstate.edu"; 
		$username="kamasan";
		$password="klYv5O7";
		$db_name="kamasan"; 
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		$query1="select @x:=avg(gender),@y:=avg(origin),@div:=(stddev_samp(gender)*stddev_samp(origin)) from attributes;";
		$result1=mysql_query($query1);
		$query2="select ((sum((gender-@x)*(origin-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(origin-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result2=mysql_query($query2);
		while($row = mysql_fetch_array($result2))
		{
			$value1=$row['p'];
			
		}
		$query3="select @x:=avg(origin),@y:=avg(careerstatus),@div:=(stddev_samp(origin)*stddev_samp(careerstatus)) from attributes;";
		$result3=mysql_query($query3);
		$query4="select ((sum((origin-@x)*(careerstatus-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(careerstatus-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result4=mysql_query($query4);
		while($row = mysql_fetch_array($result4))
		{
			$value2=$row['p'];
			
		}
		$query5="select @x:=avg(origin),@y:=avg(soldalbums),@div:=(stddev_samp(origin)*stddev_samp(soldalbums)) from attributes;";
		$result5=mysql_query($query5);
		$query6="select ((sum((origin-@x)*(soldalbums-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(soldalbums-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result6=mysql_query($query6);
		while($row = mysql_fetch_array($result6))
		{
			$value3=$row['p'];
			
		}
		$query7="select @x:=avg(origin),@y:=avg(ranking),@div:=(stddev_samp(origin)*stddev_samp(ranking)) from attributes;";
		$result7=mysql_query($query7);
		$query8="select abs((sum((origin-@x)*(ranking-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(ranking-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result8=mysql_query($query8);
		while($row = mysql_fetch_array($result8))
		{
			$value4=$row['p'];
			
		}
		$query9="select @x:=avg(origin),@y:=avg(marketcontinent),@div:=(stddev_samp(origin)*stddev_samp(marketcontinent)) from attributes;";
		$result9=mysql_query($query9);
		$query10="select abs((sum((origin-@x)*(marketcontinent-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(marketcontinent-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result10=mysql_query($query10);
		while($row = mysql_fetch_array($result10))
		{
			$value5=$row['p'];
			                                5;
		}
		$query11="select @x:=avg(origin),@y:=avg(soldsingles),@div:=(stddev_samp(origin)*stddev_samp(soldsingles)) from attributes;";
		$result11=mysql_query($query11);
		$query12="select abs((sum((origin-@x)*(soldsingles-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(soldsingles-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result12=mysql_query($query12);
		while($row = mysql_fetch_array($result12))
		{
			$value6=$row['p'];
			                                
		}
		$query13="select @x:=avg(origin),@y:=avg(retailvalue),@div:=(stddev_samp(origin)*stddev_samp(retailvalue)) from attributes;";
		$result13=mysql_query($query13);
		$query14="select ((sum((origin-@x)*(retailvalue-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(retailvalue-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result14=mysql_query($query14);
		while($row = mysql_fetch_array($result14))
		{
			$value7=$row['p'];
			                                
		}
		$query15="select @x:=avg(origin),@y:=avg(population),@div:=(stddev_samp(origin)*stddev_samp(population)) from attributes;";
		$result15=mysql_query($query15);
		$query16="select ((sum((origin-@x)*(population-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(population-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result16=mysql_query($query16);
		while($row = mysql_fetch_array($result16))
		{
			$value8=$row['p'];
			                               
		}
		$query17="select @x:=avg(origin),@y:=avg(hits),@div:=(stddev_samp(origin)*stddev_samp(hits)) from attributes;";
		$result17=mysql_query($query17);
		$query18="select abs((sum((origin-@x)*(population-@y))/((count(origin)-1)*@div))*(sum((origin-@x)*(population-@y))/((count(origin)-1)*@div))) as p from attributes;";
        $result18=mysql_query($query18);
		while($row = mysql_fetch_array($result18))
		{
			$value9=$row['p'];
			                                
		}
		$query19="select @x:=avg(careerstatus),@y:=avg(gender),@div:=(stddev_samp(careerstatus)*stddev_samp(gender)) from attributes;";
		$result19=mysql_query($query19);
		$query20="select abs((sum((careerstatus-@x)*(gender-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(gender-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result20=mysql_query($query20);
		while($row = mysql_fetch_array($result20))
		{
			$value10=$row['p'];
			                               
		}
		$query21="select @x:=avg(gender),@y:=avg(soldalbums),@div:=(stddev_samp(gender)*stddev_samp(soldalbums)) from attributes;";
		$result21=mysql_query($query21);
		$query22="select abs((sum((gender-@x)*(soldalbums-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(soldalbums-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result22=mysql_query($query22);
		while($row = mysql_fetch_array($result22))
		{
			$value11=$row['p'];
			                               
		}
		$query23="select @x:=avg(gender),@y:=avg(ranking),@div:=(stddev_samp(gender)*stddev_samp(ranking)) from attributes;";
		$result23=mysql_query($query23);
		$query24="select abs((sum((gender-@x)*(ranking-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(ranking-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result24=mysql_query($query24);
		while($row = mysql_fetch_array($result24))
		{
			$value12=$row['p'];
			                               
		}
		$query25="select @x:=avg(gender),@y:=avg(marketcontinent),@div:=(stddev_samp(gender)*stddev_samp(marketcontinent)) from attributes;";
		$result25=mysql_query($query25);
		$query26="select abs((sum((gender-@x)*(marketcontinent-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(marketcontinent-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result26=mysql_query($query26);
		while($row = mysql_fetch_array($result26))
		{
			$value13=$row['p'];
			                               
		}
		$query27="select @x:=avg(gender),@y:=avg(soldsingles),@div:=(stddev_samp(gender)*stddev_samp(soldsingles)) from attributes;";
		$result27=mysql_query($query27);
		$query28="select abs((sum((gender-@x)*(soldsingles-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(soldsingles-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result28=mysql_query($query28);
		while($row = mysql_fetch_array($result28))
		{
			$value14=$row['p'];
			                               
		}
		$query29="select @x:=avg(gender),@y:=avg(retailvalue),@div:=(stddev_samp(gender)*stddev_samp(retailvalue)) from attributes;";
		$result29=mysql_query($query29);
		$query30="select abs((sum((gender-@x)*(retailvalue-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(retailvalue-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result30=mysql_query($query30);
		while($row = mysql_fetch_array($result30))
		{
			$value15=$row['p'];
			                              
		}
		$query31="select @x:=avg(gender),@y:=avg(population),@div:=(stddev_samp(gender)*stddev_samp(population)) from attributes;";
		$result31=mysql_query($query31);
		$query32="select abs((sum((gender-@x)*(population-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(population-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result32=mysql_query($query32);
		while($row = mysql_fetch_array($result32))
		{
			$value16=$row['p'];
			                               
		}
		$query33="select @x:=avg(gender),@y:=avg(hits),@div:=(stddev_samp(gender)*stddev_samp(hits)) from attributes;";
		$result33=mysql_query($query33);
		$query34="select abs((sum((gender-@x)*(hits-@y))/((count(gender)-1)*@div))*(sum((gender-@x)*(hits-@y))/((count(gender)-1)*@div))) as p from attributes;";
        $result34=mysql_query($query34);
		while($row = mysql_fetch_array($result34))
		{
			$value17=$row['p'];
			                                
		}
		$query35="select @x:=avg(careerstatus),@y:=avg(soldalbums),@div:=(stddev_samp(careerstatus)*stddev_samp(soldalbums)) from attributes;";
		$result35=mysql_query($query35);
		$query36="select abs((sum((careerstatus-@x)*(soldalbums-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(soldalbums-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result36=mysql_query($query36);
		while($row = mysql_fetch_array($result36))
		{
			$value18=$row['p'];
			                              
		}
		$query37="select @x:=avg(careerstatus),@y:=avg(ranking),@div:=(stddev_samp(careerstatus)*stddev_samp(ranking)) from attributes;";
		$result37=mysql_query($query37);
		$query38="select abs((sum((careerstatus-@x)*(ranking-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(ranking-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result38=mysql_query($query38);
		while($row = mysql_fetch_array($result38))
		{
			$value19=$row['p'];
			                               
		}
		$query39="select @x:=avg(careerstatus),@y:=avg(marketcontinent),@div:=(stddev_samp(careerstatus)*stddev_samp(marketcontinent)) from attributes;";
		$result39=mysql_query($query39);
		$query40="select abs((sum((careerstatus-@x)*(marketcontinent-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(marketcontinent-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result40=mysql_query($query40);
		while($row = mysql_fetch_array($result40))
		{
			$value20=$row['p'];
			                               
		}
		$query41="select @x:=avg(careerstatus),@y:=avg(soldsingles),@div:=(stddev_samp(careerstatus)*stddev_samp(soldsingles)) from attributes;";
		$result41=mysql_query($query41);
		$query42="select abs((sum((careerstatus-@x)*(soldsingles-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(soldsingles-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result42=mysql_query($query42);
		while($row = mysql_fetch_array($result42))
		{
			$value21=$row['p'];
			                                
		}
		$query43="select @x:=avg(careerstatus),@y:=avg(retailvalue),@div:=(stddev_samp(careerstatus)*stddev_samp(retailvalue)) from attributes;";
		$result43=mysql_query($query43);
		$query44="select abs((sum((careerstatus-@x)*(retailvalue-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(retailvalue-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result44=mysql_query($query44);
		while($row = mysql_fetch_array($result44))
		{
			$value22=$row['p'];
			                               
		}
		$query45="select @x:=avg(careerstatus),@y:=avg(population),@div:=(stddev_samp(careerstatus)*stddev_samp(population)) from attributes;";
		$result45=mysql_query($query45);
		$query46="select abs((sum((careerstatus-@x)*(population-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(population-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result46=mysql_query($query46);
		while($row = mysql_fetch_array($result46))
		{
			$value23=$row['p'];
			                               
		}
		$query45="select @x:=avg(careerstatus),@y:=avg(population),@div:=(stddev_samp(careerstatus)*stddev_samp(population)) from attributes;";
		$result45=mysql_query($query45);
		$query46="select abs((sum((careerstatus-@x)*(population-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(population-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result46=mysql_query($query46);
		while($row = mysql_fetch_array($result46))
		{
			$value23=$row['p'];
			                                
		}
		$query47="select @x:=avg(careerstatus),@y:=avg(hits),@div:=(stddev_samp(careerstatus)*stddev_samp(hits)) from attributes;";
		$result47=mysql_query($query47);
		$query48="select abs((sum((careerstatus-@x)*(hits-@y))/((count(careerstatus)-1)*@div))*(sum((careerstatus-@x)*(hits-@y))/((count(careerstatus)-1)*@div))) as p from attributes;";
        $result48=mysql_query($query48);
		while($row = mysql_fetch_array($result48))
		{
			$value24=$row['p'];
			                               
		}
		$query49="select @x:=avg(soldalbums),@y:=avg(ranking),@div:=(stddev_samp(soldalbums)*stddev_samp(ranking)) from attributes;";
		$result49=mysql_query($query49);
		$query50="select abs((sum((soldalbums-@x)*(ranking-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(ranking-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result50=mysql_query($query50);
		while($row = mysql_fetch_array($result50))
		{
			$value25=$row['p'];
			                                
		}
		$query51="select @x:=avg(soldalbums),@y:=avg(marketcontinent),@div:=(stddev_samp(soldalbums)*stddev_samp(marketcontinent)) from attributes;";
		$result51=mysql_query($query51);
		$query52="select abs((sum((soldalbums-@x)*(marketcontinent-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(marketcontinent-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result52=mysql_query($query52);
		while($row = mysql_fetch_array($result52))
		{
			$value26=$row['p'];
			                               
		}
		$query53="select @x:=avg(soldalbums),@y:=avg(soldsingles),@div:=(stddev_samp(soldalbums)*stddev_samp(soldsingles)) from attributes;";
		$result53=mysql_query($query53);
		$query54="select abs((sum((soldalbums-@x)*(soldsingles-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(soldsingles-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result54=mysql_query($query54);
		while($row = mysql_fetch_array($result54))
		{
			$value27=$row['p'];
			                                
		}
		$query55="select @x:=avg(soldalbums),@y:=avg(retailvalue),@div:=(stddev_samp(soldalbums)*stddev_samp(retailvalue)) from attributes;";
		$result55=mysql_query($query55);
		$query56="select abs((sum((soldalbums-@x)*(retailvalue-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(retailvalue-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result56=mysql_query($query56);
		while($row = mysql_fetch_array($result56))
		{
			$value28=$row['p'];
			                               
		}
		$query57="select @x:=avg(soldalbums),@y:=avg(population),@div:=(stddev_samp(soldalbums)*stddev_samp(population)) from attributes;";
		$result57=mysql_query($query57);
		$query58="select abs((sum((soldalbums-@x)*(population-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(population-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result58=mysql_query($query58);
		while($row = mysql_fetch_array($result58))
		{
			$value29=$row['p'];
			                               
		}
		$query59="select @x:=avg(soldalbums),@y:=avg(hits),@div:=(stddev_samp(soldalbums)*stddev_samp(hits)) from attributes;";
		$result59=mysql_query($query59);
		$query60="select abs((sum((soldalbums-@x)*(hits-@y))/((count(soldalbums)-1)*@div))*(sum((soldalbums-@x)*(hits-@y))/((count(soldalbums)-1)*@div))) as p from attributes;";
        $result60=mysql_query($query60);
		while($row = mysql_fetch_array($result60))
		{
			$value30=$row['p'];
			                               
		}
		$query61="select @x:=avg(ranking),@y:=avg(marketcontinent),@div:=(stddev_samp(ranking)*stddev_samp(marketcontinent)) from attributes;";
		$result61=mysql_query($query61);
		$query62="select abs((sum((ranking-@x)*(marketcontinent-@y))/((count(ranking)-1)*@div))*(sum((ranking-@x)*(marketcontinent-@y))/((count(ranking)-1)*@div))) as p from attributes;";
        $result62=mysql_query($query62);
		while($row = mysql_fetch_array($result62))
		{
			$value31=$row['p'];
			                                
		}
		$query63="select @x:=avg(ranking),@y:=avg(soldsingles),@div:=(stddev_samp(ranking)*stddev_samp(soldsingles)) from attributes;";
		$result63=mysql_query($query63);
		$query64="select abs((sum((ranking-@x)*(soldsingles-@y))/((count(ranking)-1)*@div))*(sum((ranking-@x)*(soldsingles-@y))/((count(ranking)-1)*@div))) as p from attributes;";
        $result64=mysql_query($query64);
		while($row = mysql_fetch_array($result64))
		{
			$value32=$row['p'];
			                                
		}
		$query65="select @x:=avg(ranking),@y:=avg(retailvalue),@div:=(stddev_samp(ranking)*stddev_samp(retailvalue)) from attributes;";
		$result65=mysql_query($query65);
		$query66="select abs((sum((ranking-@x)*(retailvalue-@y))/((count(ranking)-1)*@div))*(sum((ranking-@x)*(retailvalue-@y))/((count(ranking)-1)*@div))) as p from attributes;";
        $result66=mysql_query($query66);
		while($row = mysql_fetch_array($result66))
		{
			$value33=$row['p'];
			                                
		}
		$query67="select @x:=avg(ranking),@y:=avg(population),@div:=(stddev_samp(ranking)*stddev_samp(population)) from attributes;";
		$result67=mysql_query($query67);
		$query68="select abs((sum((ranking-@x)*(population-@y))/((count(ranking)-1)*@div))*(sum((ranking-@x)*(population-@y))/((count(ranking)-1)*@div))) as p from attributes;";
        $result68=mysql_query($query68);
		while($row = mysql_fetch_array($result68))
		{
			$value34=$row['p'];
			                                
		}
		$query69="select @x:=avg(ranking),@y:=avg(hits),@div:=(stddev_samp(ranking)*stddev_samp(hits)) from attributes;";
		$result69=mysql_query($query69);
		$query70="select abs((sum((ranking-@x)*(hits-@y))/((count(ranking)-1)*@div))*(sum((ranking-@x)*(hits-@y))/((count(ranking)-1)*@div))) as p from attributes;";
        $result70=mysql_query($query70);
		while($row = mysql_fetch_array($result70))
		{
			$value35=$row['p'];
			                                
		}
		$query71="select @x:=avg(marketcontinent),@y:=avg(soldsingles),@div:=(stddev_samp(marketcontinent)*stddev_samp(soldsingles)) from attributes;";
		$result71=mysql_query($query71);
		$query72="select abs((sum((marketcontinent-@x)*(soldsingles-@y))/((count(marketcontinent)-1)*@div))*(sum((marketcontinent-@x)*(soldsingles-@y))/((count(marketcontinent)-1)*@div))) as p from attributes;";
        $result72=mysql_query($query72);
		while($row = mysql_fetch_array($result72))
		{
			$value36=$row['p'];
			                                
		}
		$query73="select @x:=avg(marketcontinent),@y:=avg(retailvalue),@div:=(stddev_samp(marketcontinent)*stddev_samp(retailvalue)) from attributes;";
		$result73=mysql_query($query73);
		$query74="select abs((sum((marketcontinent-@x)*(retailvalue-@y))/((count(marketcontinent)-1)*@div))*(sum((marketcontinent-@x)*(retailvalue-@y))/((count(marketcontinent)-1)*@div))) as p from attributes;";
        $result74=mysql_query($query74);
		while($row = mysql_fetch_array($result74))
		{
			$value37=$row['p'];
			                                
		}
		$query75="select @x:=avg(marketcontinent),@y:=avg(population),@div:=(stddev_samp(marketcontinent)*stddev_samp(population)) from attributes;";
		$result75=mysql_query($query75);
		$query76="select abs((sum((marketcontinent-@x)*(population-@y))/((count(marketcontinent)-1)*@div))*(sum((marketcontinent-@x)*(population-@y))/((count(marketcontinent)-1)*@div))) as p from attributes;";
        $result76=mysql_query($query76);
		while($row = mysql_fetch_array($result76))
		{
			$value38=$row['p'];
			                                
		}
		$query77="select @x:=avg(marketcontinent),@y:=avg(hits),@div:=(stddev_samp(marketcontinent)*stddev_samp(hits)) from attributes;";
		$result77=mysql_query($query77);
		$query78="select abs((sum((marketcontinent-@x)*(hits-@y))/((count(marketcontinent)-1)*@div))*(sum((marketcontinent-@x)*(hits-@y))/((count(marketcontinent)-1)*@div))) as p from attributes;";
        $result78=mysql_query($query78);
		while($row = mysql_fetch_array($result78))
		{
			$value39=$row['p'];
			                                
		}
		$query79="select @x:=avg(soldsingles),@y:=avg(retailvalue),@div:=(stddev_samp(soldsingles)*stddev_samp(retailvalue)) from attributes;";
		$result79=mysql_query($query79);
		$query80="select abs((sum((soldsingles-@x)*(retailvalue-@y))/((count(soldsingles)-1)*@div))*(sum((soldsingles-@x)*(retailvalue-@y))/((count(soldsingles)-1)*@div))) as p from attributes;";
        $result80=mysql_query($query80);
		while($row = mysql_fetch_array($result80))
		{
			$value40=$row['p'];
			                                
		}
		$query81="select @x:=avg(soldsingles),@y:=avg(population),@div:=(stddev_samp(soldsingles)*stddev_samp(population)) from attributes;";
		$result81=mysql_query($query81);
		$query82="select abs((sum((soldsingles-@x)*(population-@y))/((count(soldsingles)-1)*@div))*(sum((soldsingles-@x)*(population-@y))/((count(soldsingles)-1)*@div))) as p from attributes;";
        $result82=mysql_query($query82);
		while($row = mysql_fetch_array($result82))
		{
			$value41=$row['p'];
			                                
		}
		$query83="select @x:=avg(soldsingles),@y:=avg(hits),@div:=(stddev_samp(soldsingles)*stddev_samp(hits)) from attributes;";
		$result83=mysql_query($query83);
		$query84="select abs((sum((soldsingles-@x)*(hits-@y))/((count(soldsingles)-1)*@div))*(sum((soldsingles-@x)*(hits-@y))/((count(soldsingles)-1)*@div))) as p from attributes;";
        $result84=mysql_query($query84);
		while($row = mysql_fetch_array($result84))
		{
			$value42=$row['p'];
			                                
		}
		$query85="select @x:=avg(retailvalue),@y:=avg(population),@div:=(stddev_samp(retailvalue)*stddev_samp(population)) from attributes;";
		$result85=mysql_query($query85);
		$query86="select abs((sum((retailvalue-@x)*(population-@y))/((count(retailvalue)-1)*@div))*(sum((retailvalue-@x)*(population-@y))/((count(retailvalue)-1)*@div))) as p from attributes;";
        $result86=mysql_query($query86);
		while($row = mysql_fetch_array($result86))
		{
			$value43=$row['p'];
			                                
		}
		$query87="select @x:=avg(retailvalue),@y:=avg(hits),@div:=(stddev_samp(retailvalue)*stddev_samp(hits)) from attributes;";
		$result87=mysql_query($query87);
		$query88="select abs((sum((retailvalue-@x)*(hits-@y))/((count(retailvalue)-1)*@div))*(sum((retailvalue-@x)*(hits-@y))/((count(retailvalue)-1)*@div))) as p from attributes;";
        $result88=mysql_query($query88);
		while($row = mysql_fetch_array($result88))
		{
			$value44=$row['p'];
			                                
		}
		$query89="select @x:=avg(population),@y:=avg(hits),@div:=(stddev_samp(population)*stddev_samp(hits)) from attributes;";
		$result89=mysql_query($query89);
		$query90="select abs((sum((population-@x)*(hits-@y))/((count(population)-1)*@div))*(sum((population-@x)*(hits-@y))/((count(population)-1)*@div))) as p from attributes;";
        $result90=mysql_query($query90);
		while($row = mysql_fetch_array($result90))
		{
			$value45=$row['p'];
		}
		echo "
	<script>
	var myConfig = 
			{
      			'globals': {'font-family': 'Roboto',},
      			'graphset': [{
        						'type': 'piano',
        						'backgroundColor': '#fff',
        						'plotarea': {'margin': '65 0 75 75'},
        						'scaleX': 
								{
									'placement': 'opposite','lineWidth': 0,'item': {
            																		'border-color': 'none',
           																			'size': '50px',
            																		'font-color': '#05636c'
         																		  },
          							'guide': {'visible': false},
          							'tick': {'visible': false},
									'item':{
        									'font-angle':90,
        									'auto-align':true
    								   	   },
          							'values': ['gender', 'career status', 'sold albums', 'ranking', 'market','sold singles','retail value','population','hits']
        						},
        						'scaleY': 
								{
          							'lineWidth': 0,
          							'mirrored': true,
          							'tick': {'visible': false},
          							'guide': {'visible': false},
          							'item': {
            									'border-color': 'none',
            									'size': '13px',
            									'font-color': '#05636c'
          									},
          							'values': ['origin','gender', 'career status', 'sold albums', 'ranking', 'market','sold singles','retail value','population']
        						},
        						'legend': {
          									'layout': 'x6',
          									'y': '83.5%',
          									'x': '15%',
          									'width': '80%',
          									'shadow': false,
          									'border-width': 0,
          									'toggle-action': 'none',
          									'item': {
            											'border-color': 'none',
            											'size': '13px',
            											'font-color': '#05636c'
          											},
          									'marker': {
            											'type': 'square',
            											'border-radius': '8',
            											'border-color': 'none',
            											'size': '13px'
          								  		  	  },
          									'footer': {
            											'border-color': 'none',
            											'background-color': 'none',
            											'text-align': 'center',
            											'font-size': '14px',
            											'font-color': '#05636c'
          								  		  	  }
        							},
        							'plot': {
          										'aspect': 'none',
          										'borderWidth': 2,
          										'borderColor': '#eeeeee',
          										'borderRadius': 7,
          										'tooltip': {
            												'font-size': '14px',
            												'font-color': 'white',
            												'text': ' Correlation is %v.',
            												'text-align': 'left'
          											   	   },
          										'rules': [{
            												'rule': '%node-value < 1 && %node-value >= 0.8',
            												'backgroundColor': '#081D58',
            												'font-color': '#05636c'
          							  				   	  }, 
									  				   	  {
            												'rule': '%node-value < 0.8 && %node-value >= 0.6',
            												'backgroundColor': '#253494',
            												'font-color': '#05636c'
          							  				   	  }, 
									  				   	  {
            												'rule': '%node-value < 0.6 && %node-value >= 0.4',
            												'backgroundColor': '#225EA8',
            												'font-color': '#05636c'
          							  				   	  }, 
									  				   	  {
            												'rule': '%node-value < 0.4 && %node-value >= 0.2',
            												'backgroundColor': '#1D91C0',
            												'font-color': '#05636c'
          							  				   	  }, 
									  				   	  {
            												'rule': '%node-value < 0.2 && %node-value >= 0.0001',
            												'backgroundColor': '#41B6C4',
            												'font-color': '#05636c'
          							  				   	  }, 
									  				   	  {
            												'rule': '%node-value <0.0001 && %node-value >= 0',
            												'backgroundColor': '#ffffff',
            												'font-color': '#05636c'
          							  	}]
        				},
        				'series': [{
          							'values': [$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9],
          							'text': '0',
          							'legend-marker': 
									{
            								'backgroundColor': '#7FCDBB'
          							},
									'legend-item': 
									{
            								'visible': false
          							}
        			   			   }, 
					   			   {
          							'values': [0,$value10,$value11,$value12,$value13,$value14,$value15,$value16,$value17],
          							'text': '0.0001-0.19',
          							'legend-marker': 
									{
            								'backgroundColor': '#41B6C4'
          			   			    }
        			   			   }, 
					   			   {
          							'values': [0,0,$value18,$value19,$value20,$value21,$value22,$value23,$value24],
          							'text': '0.2-0.39',
          							'legend-marker': 
									{
            								'backgroundColor': '#1D91C0'
          							}
        			   			   },  
					   			   {
          							'values': [0,0,0,$value25,$value26,$value27,$value28,$value29,$value30],
          							'text': '0.4-0.59',
          							'legend-marker': 
									{
            								'backgroundColor': '#225EA8'      								
								    }
        			   			   }, 
					   			   {
          							'values': [0,0,0,0,$value31,$value32,$value33,$value34,$value35],
          							'text': '0.6-0.79',
          							'legend-marker': 
									{
            								'backgroundColor': '#253494'
          							},
        			   			   }, 
					   			   {
          							'values': [0,0,0,0,0,$value36,$value37,$value38,$value39],
          							'text': '0.8-1',
          							'legend-marker': 
									{
            								'backgroundColor': '#081D58'
          							},
        			   			   },
					   			   {
          							'values': [0,0,0,0,0,0,$value40,$value41,$value42],
          							'text': '1-2 Ft',
          							'legend-marker': 
									{
            								'backgroundColor': '#fff'
          							},
          							'legend-item': 
									{
            								'visible': false
          							}
        			   			   },
					   			   {
          							'values': [0,0,0,0,0,0,0,$value43,$value44],
          							'text': '1-2 Ft',
          							'legend-marker': 
									{
            								'backgroundColor': '#fff'
          							},
          							'legend-item': 
									{
            								'visible': false
          							}
        			   },{
          							'values': [0,0,0,0,0,0,0,0,$value45],
          							'text': '1-2 Ft',
          							'legend-marker': 
									{
            								'backgroundColor': '#fff'
          							},
          							'legend-item': 
									{
            								'visible': false
          							}
        			   }]
      			}]
    	};
		zingchart.render({
      						id: 'myChart',
      						data: myConfig,
      						height: 375,
      						width: 625
    					});
</script>";
?>
	</body>
</html>