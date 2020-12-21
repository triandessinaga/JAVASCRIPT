


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script>
        function validateForm(){
            var x = documents.forms["myForm"]["fname"].value;
            if(x==""){
                alert("nama harus di isi");
                return false;
            }
        }
    </script>
</head>
<body>

<form name="myForm" action="form.php" onsubmit="return validateForm()" method="POST">

<label for="">Nama </label> <br>
<input type="text" name="fname">
<input type="submit" value="submit">


</form>






    
</body>
</html>