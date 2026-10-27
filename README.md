# Conversor de Moedas — Real para Dólar

Aplicação web desenvolvida em PHP, HTML e CSS para converter valores em reais (BRL) para dólares americanos (USD), utilizando a cotação atual obtida por meio de uma API do Banco do Brasil.

O projeto foi desenvolvido inicialmente como um desafio prático de programação e posteriormente organizado como um projeto independente.

## Tecnologias utilizadas

- **PHP:** processamento e lógica da aplicação.
- **HTML5:** estrutura da interface.
- **CSS3:** estilização da página.
- **API do Banco do Brasil:** obtenção da cotação utilizada na conversão de moedas.

## Funcionalidades

- Conversão de valores em reais (BRL) para dólares americanos (USD).
- Utilização da cotação atual do dólar obtida por meio de uma API externa.
- Formatação de valores monetários para apresentação do resultado.

## Pré-requisitos

Antes de executar o projeto, é necessário ter:

- PHP instalado e configurado no ambiente.
- Extensão `intl` habilitada no PHP.

## Como executar

1. Clone este repositório:

   ```bash
   git clone https://github.com/ErickSerique/Conversor-Real-Dolar.git
   ```

2. Entre no diretório do projeto:

   ```bash
   cd conversor-dolar-real
   ```

3. Habilite a extensão `intl` no arquivo `php.ini`, conforme as instruções da seção [Configuração do PHP](#configuração-do-php).

4. Inicie o servidor de desenvolvimento na pasta do projeto:

   ```bash
   php -S localhost:8000
   ```

5. Acesse `http://localhost:8000/` no navegador.

## Configuração do PHP

A aplicação utiliza a função `numfmt_create()`, disponibilizada pela extensão `intl` do PHP, para a formatação de valores.

Para habilitá-la:

1. Localize o arquivo `php.ini` utilizado pela sua instalação do PHP.
2. Procure pela seguinte linha:

   ```ini
   ;extension=intl
   ```

3. Remova o ponto e vírgula inicial:

   ```ini
   extension=intl
   ```

4. Salve o arquivo e reinicie o servidor PHP.
5. Verifique se a extensão está habilitada executando:

   ```bash
   php -m
   ```

   Confirme se `intl` aparece na lista de extensões carregadas.

> **Importante:** caso a linha não exista, a configuração pode variar conforme o sistema operacional e a instalação do PHP. Utilize `php --ini` para identificar o arquivo de configuração carregado pelo PHP na linha de comando.

## Estrutura do projeto

A aplicação utiliza arquivos PHP, HTML e CSS para organizar a lógica de conversão, a estrutura da página e a apresentação visual.

## Objetivo do projeto

Este projeto faz parte do meu portfólio de estudos em desenvolvimento de software e demonstra a aplicação prática de conceitos de programação web, consumo de APIs externas e manipulação de valores monetários.

## Licença

Este projeto está licenciado sob a licença [MIT](LICENSE).