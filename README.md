# Exercicio-jpgraph
📒 - Gerando gráficos com a biblioteca jpgraph - php

Pré-requisito: editar o arquivo php.ini para habilitar o módulo "GD" para que a geração de gráficos pelo PHP funcione:

Pelo painel de controle do XAMPP, clique  no botão "Config" na linha do Apache, Escolha o arquivo "php.ini".

Procure a linha com "extension=gd".

Se houver o ponto e vírgula (;) no início da linha, será necessário apagá-lo. O ponto e vírgula faz a linha ser considerada como comentário.

Salve o arquivo.

Reinicie o Apache (Stop / Start) para que a alteração seja efetivada.



1. fazer o download do arquivo    "jpgraph-4.4.1.tar.gz" (ou da versão mais recente) da biblioteca jpgraph (versão comunidade que é gratuita) em https://jpgraph.net/download/

   

2. o arquivo está compactado com formato tar.gz (são dois formatos do linux: tar e gzip, isto é, o arquivo foi compactado duas vezes. A primeira usando o utilitário "tar" e a segunda usando o utilitário "gzip"). No Windows, é possível descompactar utilizando o 7zip ou WinRAR.

   Com o 7zip, será preciso descompactar duas vezes.

   A primeira vai gerar um arquivo "tar".Descompacte novamete o arquivo "tar", da segunda vez gerará uma pasta jpgraph-4.4.1

3. cria a pasta "include" dentro de "c:\xampp\php"

4. copiar a pasta descompactada "jpgraph-4.4.1"

   para 'c:\xampp\php\include'

5. renomeie a pasta "jpgraph-4.4.1" para "tmp"

6. dentro da pasta "tmp", existem as pastas "docs", "src" .
   a. renomeie a pasta "src" para "jpgraph"

   b. mova a pasta "docs" para dentro da pasta "jpgraph" (a antiga "src")

   c. dentro da pasta "jpgraph" (antiga "src") existe a pasta "Examples". Mova a pasta "Examples" para "c:\xampp\htdocs"

    d. dentro da pasta Examples, renomeie o arquivo "index.html" para "zindex.html".

    e. mova a pasta "jpgraph" para dentro da pasta "C:\xampp\php\include". A pasta "tmp" deve ficar apenas com o arquivo "VERSION". Esta pasta "tmp" pode ser excluída.

7. no painel de controle do XAMPP, na linha do Apache

   clique no botão "Config" e abra o arquivo "php.ini"

  8. procure a entrada "include_path" e acrescente

   "; c:\xampp\php\include". Observe que há duas linhas no arquivo php.ini com esta entrada. Uma para o Unix e  outra para Windows. Observe que há pequena diferença entre elas. 

No caso do Windows é necessário que o caminho esteja entre aspas (").
Se esquecer de colocar as aspas não irá funcionar.
Exemplo: include_path="C:\xampp\php\PEAR;C:\xampp\php\include"

Obs: O ponto e vírgula no início da linha, indica que ela está comentada (ou seja não será considerada pelo Apache).

ATENÇÃO: para que a alteração feita do php.ini seja considerada pelo Apache é necessário reiniciar (stop/start) o Apache caso ele já esteja ativado.

 
9.  Inicie o Apache, e acesse http://localhost/Examples

10. faça o download do arquivo 'listar.php' abaixo e o salve na pasta "c:\xampp\htdocs\Examples"

11. acesse o arquivo "listar.php", este programa vai carregar em uma única pasta todos os exemplos que estão disponíveis na pasta c:\xampp\htdocs\Examples". 


Observação: Mesmo assim, alguns dos exemplos não funcionarão porque são exemplos de funcionalidades da versão profissional (a qual é paga) da biblioteca jpgraph.

TAREFA: escolher, pelo menos, DOIS tipos de gráfico que possam ser utilizados no sistema que está sendo desenvolvido no projeto da disciplina laboratório de inovação.

Os dados para geração dos gráficos deverão ser lidos de um banco de dados.
Nos programas, para geração dos gráficos, os dados devem estar armazenados em vetores.

Cada arquivo gera uma imagem, então não é possível inserir tags HTML no arquivo que gera o gráficos.

Assim, para incluir um gráfico em uma outra página HTML/PHP é necessário usar a tag <iframe> como foi usado no arquivo listar.php. Ou usar a tag <img> no atributo src  informar o programa que gera o gráfico escolhido.
