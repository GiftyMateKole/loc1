<?php
include_once "../loc1/func.php";
    $obj= new func();
    $result=$obj->getUsers();
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		
		while($row){
			echo "</br>";
			echo "<input type='hidden' value={$row['ID']} name='ID'></input>";
			echo "<label for='des'>Name: </label>";
			echo "<input type='text' value={$row['Name']} name='name' id='des'></input>";
			echo "</br>";
			echo "<label for='seat'>Email: </label>";
			echo "<input type='text' value={$row['Email']} name='email' id='email'></input>";
			echo "</br>";
			echo "<label for='time'>Phone: </label>";
			echo "<input type='text' value={$row['Phone']} name='phone' id='phone'></input>";
			echo "</br>";
			echo "<label for='price'>Organisation: </label>";
			echo "<input type='text' value={$row['Organisation']} name='org' id='org'></input>";
			echo "</br>";
			echo "<button id='createContact'>Save Contact</button>";
			echo "</br>";
			$row=$obj->fetch();
		}
	}
	?>
	<script>
	 $(document).ready(function() {
 $("#createContact").click(function(){
 var name= document.getElementsByName('name')[0].value;
 var email= document.getElementsByName('email')[0].value;
 var phone= document.getElementsByName('phone')[0].value;
 var org= document.getElementsByName('org')[0].value;
 var myContact = navigator.contacts.create(
 {
 "displayName":null,
 "name":{
 "givenName":name,
 "formatted":"",
 "middleName":null,
 "familyName":"",
 "honorificPrefix":null,
 "honorificSuffix":null
 },
 "nickname":null,
 "phoneNumbers":[
 {"type":"mobile","value":phone,"id":0,"pref":false},
 {"type":"other","value":"","id":1,"pref":false}
 ],
 "emails":[
 {"type":"home","value":email,"id":0,"pref":false}
 ],
 "addresses":[
 {
 "postalCode":"",
 "type":"work",
 "id":0,
 "locality":"",
 "pref":"false",
 "streetAddress":" ",
 "region":"",
 "country":"Ghana"
 }],
 "ims":null,
 "organizations":[
 {
 "name":org,
 "title":"",
 "type":null,
 "pref":"false",
 "department":""
 }],
 "birthday":null,
 "note":"My Notes",
 "categories":null,
 "urls":[
 {
 "type":"other",
 "value":"www.phonegap.co.in",
 "id":0,
 "pref":false
 }]
 }
 );
 myContact.save();
 alert("The contact, " + myContact.name.givenName + ", has been created");
 });
 });
 </script>