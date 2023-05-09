<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="artikel1">
        Seorang bocah <span>ditemukan</span> memakan permen yang dibelinya 
    </div>

    <div class="artikel2">
        bocah tersebut sakit gigi setelah memakan perrmen tersebut
    </div>
    <script>
        document.getElementById("artikel1").style.color = "red";
        "<br>"
        const obj = document.getElementsByClassName("artikel2");
        obj[0].style.color = "blue";
    </script>
</body>
</html>