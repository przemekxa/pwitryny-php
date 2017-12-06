var checkBtn = document.getElementById("check");
var passwordField = document.getElementById("password");
var resultDiv = document.getElementById("result");

checkBtn.onclick = function() {
    var password = passwordField.value;

    var regDobre = /.{7,}/;
    var regCyfry = /[0-9]/;
    var regSrednie = /.{4,6}/;

    if(password.length == 0) {
        resultDiv.textContent = "HASŁO JEST PUSTE";
        resultDiv.style.color = "red";
    } else if(regDobre.test(password) && regCyfry.test(password)) {
        resultDiv.textContent = "HASŁO JEST DOBRE";
        resultDiv.style.color = "green";
    } else if (regSrednie.test(password) && regCyfry.test(password)) {
        resultDiv.textContent = "HASŁO JEST ŚREDNIE";
        resultDiv.style.color = "blue";
    } else {
        resultDiv.textContent = "HASŁO JEST SŁABE";
        resultDiv.style.color = "yellow";
    }

}
