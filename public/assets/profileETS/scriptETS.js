function sendMessage() {
    var nama = document.getElementById("name").value;
    var NRP = document.getElementById("nrp").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("numphone").value;
    var message = document.getElementById("message").value;

    if (nama === "" || NRP === "" || email === "" || phone === "" || message === "") {
        alert("Semua Harus diisi");
        return false;
    }
    if (isNaN(NRP)) {
        alert("NRP is invalid");
        return false;
    }
    if (isNaN(phone)) {
        alert("Phone Number is invalid");
        return false;
    }

    alert("Pesanan telah dikirim")
    return true;
}