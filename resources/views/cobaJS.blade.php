<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>coba coba js</title>
    <script>
        function changeText() {
        var span = document.getElementById("output"); //Mendapatkan object tulisan
        var textBox = document.getElementById("textbox");//Mendapatkan object textbox

        textBox.style
        textBox.style.color = "red";//mengubah DOM CSS, color text
        span.innerHTML = textBox.value;//Membaca isi textbox dan mengubah tulisan non input
        }
    </script>
</head>
<body>
    <div class="container">
        <script>
            function showAlert(){
                alert("pinjem dulu 100");
            }
        </script>
        <button class="btn btn-primary" onclick="showAlert();" >
            Klik di Sini
        </button>
        <br>
        <button onclick="changeText();" class="btn btn-warning">
            Click me!
        </button>
        <span id="output">
            replace me
        </span>
        <input id="textbox" type="text" class="form-control"/>

    </div>
</body>
</html>
