function verificarSenha() {
    const senha = document.getElementById("senha").value;
    const confirma = document.getElementById("confirma_senha").value;
    const validated = document.getElementById("validated");



    if(senha === confirma) {
        validated.value = 1;
        return true;

    }

    alert("senhas diferentes");
    
    return false;
}