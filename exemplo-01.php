<?php

//Aqui cria o arquivo 'teste.txt'
//A variável '$file' será o resource/manipulador do arquivo
//criado, e tem a referência dele.
//'w+': Cria um arquivo novo 'teste.txt', e escreve conteúdo nele, do começo.
//'a+': O ponteiro vai pro final do arquivo e acrescenta mais conteúdo.
$file = fopen("teste.txt", "w+");

//Aqui, fecha/encerra o resource/manipulador '$file':
fclose($file);

//Aqui é removido o arquivo 'teste.txt' criado acima:
unlink("teste.txt");

echo "Arquivo removido com sucesso!!!"



?>