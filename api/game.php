<?php

header("Access-Controla-Allow-Origin: *");
header("Content-tipe: application/json; charset=utf-8");    

    $rr2 = "http://localhost/joao/";

        $game[1] = array (
            "id"=>1,
            "banner"=>"http://localhost/joao/fotos/jogo1.jpg",
            "nome"=>"Survivor",
            "descricao"=>"Esse jogo se passa em apocalipse zombie em 2050, o apocalipse conteceu, por conta de uma empresa de pesquesas...",
            
            "jogar"=>"{$rr2}jogos/Survivor/index.html",
        );
        $game[2] = array (
            "id"=>2,
            "banner"=>"http://localhost/joao/fotos/jogo2.jpg",
            "nome"=>"Parabellum",
            "descricao"=>"Desculpe mas não há descrição sobre este jogo",

            
            "jogar"=>"{$rr2}jogos/Parabellum/index.html",
        );
        $game[3] = array (
            "id"=>3,
            "banner"=>"http://localhost/joao/fotos/jogo3.jpg",
            "nome"=>"jogothiago",
            "descricao"=>"Desculpe mas não há descrição sobre este jogo",

            
            "jogar"=>"{$rr2}jogos/jogothiago/index.html",
        );
        $game[4] = array (
            "id"=>4,
            "banner"=>"http://localhost/joao/fotos/jogo1.jpg",
            "nome"=>"Jogo de Zumbi",
            "descricao"=>"Desculpe mas não há descrição sobre este jogo",
            
            "jogar"=>"{$rr2}jogos/Survivor/index.html",
        );
        $game[5] = array (
            "id"=>5,
            "banner"=>"http://localhost/joao/fotos/jogo1.jpg",
            "nome"=>"Bomb and pirates",
            "descricao"=>"Desculpe mas não há descrição sobre este jogo",
            
            "jogar"=>"{$rr2}jogos/Survivor/index.html",
        );


    echo json_encode($game);