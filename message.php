<?php include 'conn.php'; ?>



<?php

session_start();

echo "<iframe width='81%' height='65%' name='messages' id='m' align='left' src='msg.html#BOTTOM'>
</iframe>";

$_SESSION["reciever"]=$_POST["bud"];

echo "Chat with" . " " . $_SESSION["reciever"];


?>



<html>

  
<head>

    
<script>

      
function textCounter(textarea, countdown, maxlimit)
      
{
        
textareaid = document.getElementById(textarea);
        
if (textareaid.value.length > maxlimit)
          
textareaid.value = textareaid.value.substring(0, maxlimit);
        
else
          
document.getElementById(countdown).value = '('+(maxlimit-textareaid.value.length)+' characters available)';
      
}

    
</script>

    
<style>
      
#tacount { border: 0; }
    
</style>

  
</head>

  
<body>

    
<form action="chat.php" target="waste" method="post">
    
<textarea id="ta" name="ta" rows=8 cols=80
      onKeyDown="textCounter('ta','tacount',140);"
      onKeyUp="textCounter('ta','tacount',140);"
    autofocus required>
</textarea>
    
<input id="tacount" readonly type="text" size="30"/>
   
<input type="submit" value="send">
  
</form>

  <script type="text/javascript">
    
textCounter('ta','tacount',140);
  
</script>

<iframe height="0px" width="0px" name="waste" align="right" seamless>
  
</body>


</html>
