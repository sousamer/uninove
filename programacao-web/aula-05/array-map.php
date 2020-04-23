<?php
    $produtos = [
        ["id" => 1, "nome" => "Leite Ninho", "valor" => 12.99],
        ["id" => 2, "nome" => "Bisnaguinha", "valor" => 7.99],
        ["id" => 3, "nome" => "Suco", "valor" => 1.99]
    ];
    
    function aumento10pc($produto) {
        // ["id" => 1, "nome" => "Leite Ninho", "valor" => 12.99],
        $produto["valor"] += $produto["valor"] * 0.10;
        return $produto;
    }
    
    $produtosMaisCaros = array_map("aumento10pc", $produtos);
    
    foreach($produtosMaisCaros as $produto) {
        echo $produto["nome"] . ": " . number_format($produto["valor"], 2) . "<br />";
    }
?>