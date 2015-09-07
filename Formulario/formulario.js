function validaCampos() {

    var sexom = document.getElementById("txtSexoM").checked;
    var sexof = document.getElementById("txtSexoF").checked;

    var turno0 = document.getElementById("turno[0]").checked;
    var turno1 = document.getElementById("turno[1]").checked;
    var turno2 = document.getElementById("turno[2]").checked;
    

    if (document.getElementById("txtNome").value === "") {
        alert("O campo NOME é obrigatório!");
        document.getElementById("txtNome").focus();
        return false;
    }
    if (document.getElementById("txtRg").value === "") {
        alert("O campo RG é obrigatório!");
        document.getElementById("txtRg").focus();
        return false;
    }
    if (document.getElementById("txtCpf").value === "") {
        alert("O campo CPF é obrigatório!");
        document.getElementById("txtCpf").focus();
        return false;
    }
    if (!sexom && !sexof) {
        alert("O campo SEXO é obrigatório!");
        return false;
    }    
    if (document.getElementById("txtSalario").value === "") {
        alert("O campo SALÁRIO é obrigatório!");
        document.getElementById("txtSalario").focus();
        return false;
    }
    if (document.getElementById("txtHoras").value === "") {
        alert("O campo HORAS EXTRAS é obrigatório!");
        document.getElementById("txtHoras").focus();
        return false;
    }
    if (!turno0 && !turno1 && !turno2) {
        alert("O campo TURNO DE TRABALHO é obrigatório!");
        return false;
    }
    return true;
}

