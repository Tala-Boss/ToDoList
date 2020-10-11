<!DOCTYPE html>
<html>
<head>

   <link rel="stylesheet" href="ToDOCSS.css">
   <script src="TOJS.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href = 
"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
      rel = "stylesheet"> 
  
  <script src = 
"https://code.jquery.com/jquery-1.10.2.js"> 
  </script> 
  
  <script src = 
"https://code.jquery.com/ui/1.10.4/jquery-ui.js"> 
  </script> 
<style>

</style>
 <script> 
    $(function() { 
      $( "#myUL" ).sortable({ 
      update: function(event, ui) { 
        getIdsOfImages(); 
      }//end update    
      }); 
    }); 
    
    function getIdsOfImages() { 
      var values = []; 
      $('.liclass').each(function (index) { 
        values.push($(this).attr("id") 
            .replace("li", "")); 
      }); 
      
      $('#outputvalues').val(values); 
    } 
  </script>
</head>
<body>

<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">

</ul>
 <span onclick="DeletAll()" class="Delet">Delet All</span>


</body>
</html>
