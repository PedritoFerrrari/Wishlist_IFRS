function excluirRegistro(id, link) {
    var resposta = confirm ("Tem certeza que quer excluir este registro?");
    if (resposta) {
      window.location.href = link + "?op=exc&id=" + id;
    } else {
      preventDefault();
    }
  }
  

  function validar() {
    var nomep = document.getElementById("nomep");



    if (nomep.value == "") {
        alert('Preencha o campo com o nome');
        nomep.focus();
        return false;
    } else if (nomep.value.length < 4) {
        alert('Digite o nome completo');
        nomep.focus();
        return false;
    }
  }
