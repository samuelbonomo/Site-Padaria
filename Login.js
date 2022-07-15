function cadastro() {
    
    var dados = $('#Login').serialize();

    $.ajax({
        method: 'GET',
        url:'login.php',
        data: dados,
    })

    .done(function(msg){
        if(msg == 1){
            alert("valido");
            window.location.href = "menu.html";
        }
        else if(msg == 0){
            alert("Login invalido");
        }
    })

    return false;

}