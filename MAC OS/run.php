<?php

system('clear');

class Trava_Zap {

    public function main() {

        $title = readline("Digite o nome da trava: \n"); //Titulo da trava
        $chars = readline("Digite os caracteres especiais da trava: \n"); //Caracteres para travar
        $loops = intval(readline("Digite a quantidade de vezes para repetir os caracteres \n")); //Quantidade de repetiçoes dos caracteres da trava
        
        //Limpa a tela
        system('clear');
        //Adiciona o titulo da trava
        $trava = $title."\n";
        
        //Escreve e cria a trava
        print $trava;
        for($i = 0;$i <= $loops;$i++){

            $trava .= $chars."\n";
            print $chars."\n";

        }

        print "Trava criada com sucesso! \n";
        $save = readline("Deseja salvar a trava? [s/n] \n");

        if ($save == "s" or $save == "S") {

            $archive_dir = ".txt//".$title;

            $archive = fopen($archive_dir,"w");

            if($archive == false) die("A trava não foi salva \n");
            fwrite($archive,$trava);
            fclose($archive);

        } else if ($save == "n" or $save == "N") {

            exit();

        }

    }

}

Trava_Zap::main();

?>