<?php

//Aqui é criada a pasta 'images' se
//ela não for ainda um diretório, se 
//ela não existir:
//Função nativa 'is_dir()', verifica a existência:
if(!is_dir("images")) mkdir("images");

//Função nativa 'scandir()': Lê um diretório e transforma num array.
foreach(scandir("images") as $item){
	//'in_array()': Função nativa que varre um array.
    //No parâmetro: 1º)'onde' você tá procurando e
    //              2º)'O quê tá procurando'. É um array, pois é possível
	//                  vários itens a serem procurados.
	//o 'if': Se não forem '.' e nem '..', então é 'true', e deleta os arquivos:
	if(!in_array($item, array(".", ".."))){
		
		unlink("images/" . $item);
	}
}

echo "OK";



?>