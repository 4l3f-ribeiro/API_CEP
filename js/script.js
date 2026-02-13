$(document).ready(function () {
	$('#inputCEP').blur(//quando o campo de cep perder o foco
		function(){
			if($('#inputCEP').val().length==0) {//se nao tiver nada digitado 
			   $('#modalMensagem').modal('show'); //exibir a modal de nada digitado
			 
			}
			else{//se tiver um cep digitado
				
				let dados;//declaracao da variavel dados
				dados={cep:$('#inputCEP').val()};//pegando o valor do que foi digitado e guardando em dados
				 console.log(dados);
                //chamando o arquivo pesquisaCep.php, passando o que foi armazenando em dados 
				//aguardando o retorno atraves das function que retornará as informacoes do cep 
				            				    
                $.post('pesquisaCep.php', dados, function(retornaCep) {
    let resultado = retornaCep.split(",");

    let cidade       = resultado[0];
    let uf           = resultado[1];
    let ibge         = resultado[2];
    let ddd          = resultado[3];
    let gia          = resultado[4];
    let siafi        = resultado[5];
    let bairro       = resultado[6];
    let endereco     = resultado[7];
    let complemento  = resultado[8];
    let estadoNome   = resultado[9];
    let regiaoNome   = resultado[10];

    $('#inputCidade').val(cidade);
    $('#inputuf').val(uf);
    $('#inputibge').val(ibge);
    $('#inputddd').val(ddd);
    $('#inputgia').val(gia);
    $('#inputsiafi').val(siafi);
    $('#inputBairro').val(bairro);
    $('#inputEndereco').val(endereco);
    $('#inputComplemento').val(complemento);
    $('#inputestado').val(estadoNome);
    $('#inputregiao').val(regiaoNome);
});



			}//fim do else*/
 
   });//fim da function()

//dá o focus na caixa de textos do cep depois de exibida a mensagem de erro, ou seja,
//o cep nao foi digitado. 
 $('#modalMensagem').on('hidden.bs.modal', function(){
   $("#inputCEP").focus();
 });



  	
});//fim da (document).ready

