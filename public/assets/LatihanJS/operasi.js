function penjumlahan(){
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value);
}

function perkalian(){
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = parseInt(bil1.value) * parseInt(bil2.value);
}