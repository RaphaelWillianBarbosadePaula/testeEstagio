function saveUser() {
    var data = {
      nome: document.getElementById("nome").value,
      email: document.getElementById("email").value,
      senha: document.getElementById("senha").value,
    };
    
    fetch("../models/cadastrarUsuario.php", {
        method: "POST",
        body: JSON.stringify(data),
        headers: { "Content-type": "application/json; charset=UTF-8" },
    })
    .then((data) => {
        if (data.status === 200) {
            var modalElement = document.getElementById("modalUsuarios");
            var modalUsuarios = bootstrap.Modal.getInstance(modalElement);
            modalUsuarios.hide();
  
            var modalSuccess = new bootstrap.Modal(
              document.getElementById("modalSuccess")
            );
            modalSuccess.show();
  
            getUsuarios();
        }
    })
    .catch((err) => console.log(err));
    
}

function getUsuarios() {
    fetch("../models/listarUsuario.php")
    .then(function (response) {
        response.json().then(function (data) {
          $("#listaUsuario>tbody").html("");
  
            data.forEach((element) => {
                $("#listaUsuario>tbody").append("<tr>");
  
                $("#listaUsuario>tbody").append("<td>" + element.id + "</td>");
                $("#listaUsuario>tbody").append("<td>" + element.nome + "</td>");
                $("#listaUsuario>tbody").append("<td>" + element.email + "</td>");
                $("#listaUsuario>tbody").append("<td>" + element.senha + "</td>");
                $("#listaUsuario>tbody").append("</tr>");
            });
        });
    })
    .catch(function (err) {
        console.error("Erro", err);
    });
}

function excluir(userId) {
    var modalElementDelete = document.getElementById("modalExcluirUsuario");
    var modalExcluirUsuario = bootstrap.Modal.getInstance(modalElementDelete);
    modalExcluirUsuario.show();
  
    document.getElementById("deleteUserId").value = userId;
}
  
  function realDeleteUser() {
    var deleteUserId = document.getElementById("deleteUserId").value;
  
    fetch(`../models/excluirUsuario.php?userId=${deleteUserId}`, {
      method: "DELETE",
    })
      .then(function (response) {
        $("#modalExcluirUsuario").modal("hide");
  
        var modalSuccess = new bootstrap.Modal(
          document.getElementById("modalSuccess")
        );
        modalSuccess.show();
  
        getUsuarios();
      })
      .catch(function (err) {
        console.error("Erro", err);
      });
}

window.onload = () => {
  $("#modalUsuarios").modal("hide");
  $("#modalExcluirUsuario").modal("hide");
  getUsuarios();
};