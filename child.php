<?php
//Pg Connection
  $pg_host = "172.23.178.145"; 
  $pg_user = "monitoring_apps"; 
  $pg_pass = "monitoring_apps"; 
  $pg_port = "7755";
  $pg_db = "mdsa_test";
  echo "before create connection </br>"; 
  $pg_con = pg_connect ("host=$pg_host port=$pg_port dbname=$pg_db user=$pg_user password=$pg_pass"); 
  echo "After connection is created </br>"; 

  $resultset=pg_query($pg_con,"SELECT subscriber_fk FROM public.tbl_decisioning2 LIMIT 2");

  while($row=pg_fetch_array($resultset,null, PGSQL_ASSOC)){

$no=$row['subscriber_fk'];
echo $no."<br>";
$data='<?xml version="1.0" encoding="utf-8"?>
<methodResponse>
<params>
<param>
<value>
<struct>
<member>
<name>accountValue1</name>
<value><string>3</string></value>
</member>
<member>
<name>creditClearanceDate</name>
<value><dateTime.iso8601>20211019T12:00:00+0000</dateTime.iso8601></value>
</member>
<member>
<name>currency1</name>
<value><string>KES</string></value>
</member>
<member>
<name>dedicatedAccountInformation</name>
<value>
<array>
<data>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>1</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>2</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>4</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>5</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>6</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>7</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>9</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>10</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>1000</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>20180328T12:00:00+0000</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>100</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>99991231T00:00:00+1200</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>229</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>20190926T12:00:00+0000</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>230</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>20190529T12:00:00+0000</dateTime.iso8601></value>
</member>
</struct>
</value>
<value>
<struct>
<member>
<name>dedicatedAccountID</name>
<value><i4>231</i4></value>
</member>
<member>
<name>dedicatedAccountValue1</name>
<value><string>0</string></value>
</member>
<member>
<name>expiryDate</name>
<value><dateTime.iso8601>20190528T12:00:00+0000</dateTime.iso8601></value>
</member>
</struct>
</value>
</data>
</array>
</value>
</member>
<member>
<name>languageIDCurrent</name>
<value><i4>1</i4></value>
</member>
<member>
<name>originTransactionID</name>
<value><string>2704750469498169163</string></value>
</member>
<member>
<name>responseCode</name>
<value><i4>0</i4></value>
</member>
<member>
<name>serviceClassCurrent</name>
<value><i4>2</i4></value>
</member>
<member>
<name>serviceFeeExpiryDate</name>
<value><dateTime.iso8601>20181231T12:00:00+0000</dateTime.iso8601></value>
</member>
<member>
<name>serviceRemovalDate</name>
<value><dateTime.iso8601>20211019T12:00:00+0000</dateTime.iso8601></value>
</member>
<member>
<name>supervisionExpiryDate</name>
<value><dateTime.iso8601>20181231T12:00:00+0000</dateTime.iso8601></value>
</member>
</struct>
</value>
</param>
</params>
</methodResponse>';

        //convert the XML result into array
        $xml=simplexml_load_string($data);


 


RecurseXML($xml);
}
 
 function RecurseXML($xml,$parent="") { 

$dataholder=[];
  // $child_count = 2;
   foreach($xml as $key=>$value)    
      if(RecurseXML($value,$parent.".".$key) ==0) { 
        $vals=((string)$value);

    for($i=0;$i<1;$i++){  
         //print( $vals . "<BR>\n"); 
         array_push($dataholder, $vals);
        print( $dataholder[$i] ." array index ".$i . "<BR>\n");

      } 

      //$child_count++;     
   } 
  // return $child_count; 
}

        ?>