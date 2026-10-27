<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Real-Dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor Real -> Dólar</h1>
            <?php
                // Pega o valor digitado pelo usuário
                $real = $_GET["valor"] ?? 0;

                // Trata caso o valor seja menor que 0
                if ($real < 0) {
                    $real = 0;
                }

                // Pega a data inicial e final para usar na chamada da API
                $dataini = date("m-d-Y", strtotime("-7 days"));
                $datafim = date("m-d-Y");

                // URL da API mesclada com a data inicial e a final para buscar a cotação mais recente
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataini . '\'&@dataFinalCotacao=\'' . $datafim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                // Pega os valores da API acessando a URL
                $dados = json_decode(file_get_contents($url), true);
                $cota = $dados["value"][0]["cotacaoCompra"];

                $dolar = $real / $cota;

                // Formata o número para o padrão brasileiro
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>A cotação atual do Dólar é <strong>US\$ $cota</strong></p>";
                echo "<p>Seus <u>" . numfmt_format_currency($padrão, $real, "BRL") . "</u> equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
            ?>
        <p>
            *Cotação obtida diretamente pelo site do <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MTAwfX0=">Banco Central do Brasil</a>
        </p>
        <a href="index.html"><button>Voltar</button></a>
</main>
</body>
</html>