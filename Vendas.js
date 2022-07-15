function Venda() {

    var dados = $('#Vendas').serialize();

    $.ajax({
        method: 'GET',
        url:'Venda.php',
        data: dados,
    })
    .done(function(valor){
        alert("Valor da compra:" + valor);
        
    })
    .fail(function(){
        alert("Falha na compra.");
    })
    return false;
}