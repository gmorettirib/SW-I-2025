<?php
    include_once 'carro.class.php';

    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro1->Marca = "Honda";
    $carro1->Modelo = "civic";
    $carro1->Combustivel = "Gasolina";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = 50;

    $carro2->Marca = "Hyundai";
    $carro2->Modelo = "Veloster";
    $carro2->Combustivel = "Gasolina";
    $carro2->Portas = 3;
    $carro2->Capacidade_tanque = 45;

    $carro3->Marca = "Chevrolet";
    $carro3->Modelo = "S10";
    $carro3->Combustivel = "Diesel";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = 65;

    $carro4->Marca = "Fiat";
    $carro4->Modelo = "Nivus";
    $carro4->Combustivel = "Flex";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = 55;

    $carro5->Marca = "volkswagen";
    $carro5->Modelo = "Gol";
    $carro5->Combustivel = "Etanol";
    $carro5->Portas = 4;
    $carro5->Capacidade_tanque = 40;
    
    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();

?>