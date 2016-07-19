<html>
<head>
<style>
.Large
{
    font-size: 24pt;
    height: 50px;
    width: 50px;
}
</style>
</head>
<body>

<script type="text/javascript" language="javascript" >

function autoTab()
{   
   if (document.getElementById("Textbox1").value.length==1){
	  var x=document.getElementById("Textbox1");
      if (x.value != "a")
         window.alert('=]');
	  document.getElementById("Textbox2").focus();
   }   
   if (document.getElementById("Textbox2").value.length==1){
	  var x=document.getElementById("Textbox2");
      if (x.value != "a")
         window.alert('=]');
      document.getElementById("Textbox3").focus();
   }   
   if (document.getElementById("Textbox3").value.length==1){
	  var x=document.getElementById("Textbox3");
      if (x.value != "a")
         window.alert('=]');	  
      document.getElementById("Textbox4").focus();
   }   
   if (document.getElementById("Textbox4").value.length==1){
	  var x=document.getElementById("Textbox4");
      if (x.value != "a")
         window.alert('worng ans');	  
	  else window.alert('correct ans');
   }
}

</script>

<form>
<input class="Large" type="text" id="Textbox1" onkeyUp="autoTab()" maxlength="1"/>
<input class="Large" type="text" id="Textbox2" onkeyUp="autoTab()" maxlength="1"/>
<input class="Large" type="text" id="Textbox3" onkeyUp="autoTab()" maxlength="1"/>
<input class="Large" type="text" id="Textbox4" onKeyUp="autoTab()" maxlength="1"/>

</form>

</body>
</html>