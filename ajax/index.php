<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--    <script-->
<!--        src="https://code.jquery.com/jquery-3.3.1.js"-->
<!--        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="-->
<!--        crossorigin="anonymous"></script>-->
    <title>Document</title>
</head>
<body>
    <h1>Ajax example</h1>
    <p>Your name</p>
    <input type="text" id="intup1" >
    <br><br>
    <p id="hello"></p>
    <br>
    <button id="send">asing query</button>
    <script>
        $("#send").click(function () {
            var params = {
                text: $("#intup1").val(),
            }
            $.post("ajax.php", params, function (data) {
                $("#hello").html(data);
            });
        });
    </script>
</body>
</html>