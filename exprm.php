<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function add() {
    var x = parseInt(document.getElementById("a").value);
    var y = parseInt(document.getElementById("b").value)
    document.getElementById("c").value = x * y;
    }
    </script>
    <title>Document</title>
</head>
<body>
Enter 1st Number :
<input type="text" id="a">
<br>
<br>Enter 2nd Number :
<input type="text" id="b" onkeyup="add()">
<br>
<br>Result :
<input type="text" id="c">
</body>
</html>