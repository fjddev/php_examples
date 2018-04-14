<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search User</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">

  <script>
     function showSuggestion(str){
 
       if(str.length == 0){
         document.getElementById('output').innerHTML= '';
       }else{
          //AJAX REQ
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML= this.responseText;
              } //state status  
          }  //onreadystatechange
          xmlhttp.open("GET", "suggest.php?q="+str, true);
          xmlhttp.send();           
       } //if str length
    } //showSuggestion
  </script>
</head>
<body>
    <div class="container">
     <h1>Search Users</h1>
     <form> 
        Search User: <input type="text" name="" class="form-control"  onkeyup="showSuggestion(this.value)">
     </form>
     <p><span id="output"  style="font-weight:bold"></span></p>
    </div>
  
</body>
</html>