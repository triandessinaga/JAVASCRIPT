<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Test Number</h1>
<label for=""> Number</label> <br>
<input id="number" type="text" name="angkat" placeholder=" please input the number">
<button type="button" onclick="myFunction()">Submit</button>
<p id="text"></p>
  



<script>
    function myFunction(){
        var x = document.getElementById('number').value;

       
        if (isNaN(x) || x < 1 || x > 10){
            text= "Input Invalid";
        }else{
            text ="This a good Number";
        }

        document.getElementById('text').innerHTML = text;
    }
</script>
</body>
</html>