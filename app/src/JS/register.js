let pwField = document.getElementById("pw");
let pw2Field = document.getElementById("pw2");

let pw = "";
let pw2 = "";
let isPWSecure = false;

document.addEventListener('input', event => {
    let submit = document.getElementById("reg");
    if (isPWSecure && (pw === pw2)) {
        submit.disabled = false;
    } else {
        submit.disabled = true;
    }
})
pwField.addEventListener('input', event => {
    pw = pwField.value;
    let errors = isPWsecure(pw);
    if(errors.length == 0){
        isPWSecure = true;
    }
    let errorFields = document.getElementsByClassName("statusMSG");
    for(let fields of errorFields) {
        !errors.includes(fields.innerHTML) ? fields.classList.add("hidden") : "";
    }
})
pw2Field.addEventListener('input', event =>{
    pw2 = pw2Field.value;
    pw2 === pw ? pw2Field.classList.remove("err"):pw2Field.classList.add("err");
})
function isPWsecure(pw){
    let pwStatus = [];
    if(pw.length < 8){
        pwStatus.push("8 Zeichen");
    }
    if(pw.match(/[A-Z]/)==null){
        pwStatus.push("Großbuchstaben");
    }
    if(pw.match(/\W/)== null){
        pwStatus.push("Sonderzeichen");
    }
    return pwStatus;
}