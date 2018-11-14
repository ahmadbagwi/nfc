<html>
<head>
   <script type="text/javascript" src="js/jquery.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("dataPeserta").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dataPeserta").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?idpeserta="+str,true);
        xmlhttp.send();
    }
}

function updateUser(str) {
    if (str == "") {
        document.getElementById("updatePeserta").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("updatePeserta").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","update.php?nokartu="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body style="margin-top: 10%; margin-left: 30%">

<form>
<h1>Id Peserta<input type="text" id="idpeserta" name="idpeserta" onchange="showUser(this.value)"><br></h1>
</form>
<!-- Menampilkan data peserta sesuai input nomor id peserta, hasil dari getuser.php -->
<!-- Input nomor kartu dari nfc reader, ketika kartu di tap nomor otomatis muncul di input nokartu -->
<div id="dataPeserta"></div><br>  

<!-- Menampilkan informasi bahwa data peserta sudah diperbaharui dengan menambahkan nomor kartu, hasil update.php -->
<div id="updatePeserta"></div>

</body>

</html>