<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Factorial Recursion </title>
<head>
<body>
    <input id="number" type="number" onkeyup="call()">
    <input id="result" type="number" disabled>
    <p id="demo"></p>
</body>
</html>

<script>
    function call() {
        var fact = document.getElementById("number").value;
        document.getElementById("result").value = calfact(fact);
    }

    function calfact(num) {
        if(num > 0 && num <= 1) {
            return 1;
        } else {
            return num * calfact(num - 1);
        }
    }

</script>