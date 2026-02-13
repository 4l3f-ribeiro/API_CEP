<?php
$cep = filter_input(INPUT_POST,'cep');
$url = "http://viacep.com.br/ws/" . $cep . "/json/";
$resultado = json_decode(file_get_contents($url));

// UF → Nome do estado
$estados = [
  "AC"=>"Acre","AL"=>"Alagoas","AP"=>"Amapá","AM"=>"Amazonas",
  "BA"=>"Bahia","CE"=>"Ceará","DF"=>"Distrito Federal","ES"=>"Espírito Santo",
  "GO"=>"Goiás","MA"=>"Maranhão","MT"=>"Mato Grosso","MS"=>"Mato Grosso do Sul",
  "MG"=>"Minas Gerais","PA"=>"Pará","PB"=>"Paraíba","PR"=>"Paraná",
  "PE"=>"Pernambuco","PI"=>"Piauí","RJ"=>"Rio de Janeiro","RN"=>"Rio Grande do Norte",
  "RS"=>"Rio Grande do Sul","RO"=>"Rondônia","RR"=>"Roraima","SC"=>"Santa Catarina",
  "SP"=>"São Paulo","SE"=>"Sergipe","TO"=>"Tocantins"
];

// UF → Região
$regioes = [
  "AC"=>"Norte","AP"=>"Norte","AM"=>"Norte","PA"=>"Norte","RO"=>"Norte","RR"=>"Norte","TO"=>"Norte",
  "AL"=>"Nordeste","BA"=>"Nordeste","CE"=>"Nordeste","MA"=>"Nordeste","PB"=>"Nordeste",
  "PE"=>"Nordeste","PI"=>"Nordeste","RN"=>"Nordeste","SE"=>"Nordeste",
  "DF"=>"Centro-Oeste","GO"=>"Centro-Oeste","MT"=>"Centro-Oeste","MS"=>"Centro-Oeste",
  "ES"=>"Sudeste","MG"=>"Sudeste","RJ"=>"Sudeste","SP"=>"Sudeste",
  "PR"=>"Sul","RS"=>"Sul","SC"=>"Sul"
];

$estadoNome = $estados[$resultado->uf] ?? '';
$regiaoNome = $regioes[$resultado->uf] ?? '';

// Retorno separado por vírgula
$dadosRetorno = 
    ($resultado->localidade ?? '') . "," .   // cidade
    ($resultado->uf ?? '') . "," .           // UF
    ($resultado->ibge ?? '') . "," .         // IBGE
    ($resultado->ddd ?? '') . "," .          // DDD
    ($resultado->gia ?? '') . "," .          // GIA
    ($resultado->siafi ?? '') . "," .        // SIAFI
    ($resultado->bairro ?? '') . "," .       // bairro
    ($resultado->logradouro ?? '') . "," .   // endereço
    ($resultado->complemento ?? '') . "," .  // complemento
    $estadoNome . "," .                      // estado por extenso
    $regiaoNome;                             // região

echo $dadosRetorno;
?>
