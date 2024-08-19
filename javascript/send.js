function Message() {
    var name = document.getElementById("n").value;
    var email = document.getElementById("e").value;

    if (name == "" || email == "") {
        alert("error please filled");
        return false;
    }

    alert(" sent successfully!");
    return true;
}
