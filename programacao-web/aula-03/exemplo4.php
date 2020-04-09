<?php
    $cursos = array(
        "TADS" => array(
            "descricao" => "Tec. Em análise e desenv e Sistemas",
            "disciplina" => "Programação Web"
        ),
        "TSIN" => array(
            "descricao" => "Tec. Em Sist para Internet",
            "disciplina" => "Programação Frontend"
        )
    );
    
    echo (
      "Curso 01".
      "<br /> " . $cursos["TADS"]["descricao"] . " - ". $cursos["TADS"]["disciplina"] .
      "<br /> Curso 02".
      "<br /> " . $cursos["TSIN"]["descricao"]. " - ". $cursos["TSIN"]["disciplina"]
    )
    
    //$cursos["SI"] = array( /* código aqui */ );
    
?>
