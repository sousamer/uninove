<?php     
    echo "nome do arquivo " . $_FILES["file"]["name"] . "<br />";
    echo "Tipo do arquivo " . $_FILES["file"]["type"] . "<br />";
    echo "Tamanho do arquivo " . ($_FILES["file"]["size"] / 1024 ) ."<br />";
    echo "Arquivo temporário " . $_FILES["file"]["tmp_file"] . "<br />";
    if (file_exists("tmp/".$_FILES["file"]["name"])){
        echo $_FILES["file"]["name"] . " já existe.";
    } else {
        move_uploaded_file(
          $_FILES["file"]["tmp_name"],
          "tmp/" . $_FILES["file"]["name"]);          
    }
?>
<img src="tmp/<?php echo $_FILES["file"]["name"] ;?>">