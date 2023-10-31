<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</head>
<body>
   <h2 id="demo">
    this is heading 2
   </h2> 

<button onclick="loaddata()">change the content</button>
<script> 
function loaddata(){
    // create request
    const xhr = new XMLHttpRequest();
    // what to do when response arrives
    xhr.onload  = function(){
        const container =document.getElementById('demo');
        container.innerHTML  = xhr.responseText;
    }
    // prepare requestAnimationFrame
      xhr.open("GET", "zdata.php")
      xhr.send();
}
</script>
</body>
</html>
