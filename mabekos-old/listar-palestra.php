<?php 
  session_start();
  include_once '../conexao.php';
  include_once './header.php';
 ?>
 
    <div class="container p-5 bg-light">
    <h1>Listar palestra mais próximas</h1>
    <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

      // data atual
      $now = (date('d/m/Y'));
      //SQL para selecionar os registros
      $result_cad_palestra = "SELECT * FROM cadastro_palestra ORDER BY data desc";

      //seleciona os registros
      $resultado_cad_palestra = $conn->prepare($result_cad_palestra);
      $resultado_cad_palestra->execute();

      while ($row_cad_palestra = $resultado_cad_palestra->fetch(PDO::FETCH_ASSOC)){
         $data = $row_cad_palestra['data'];
         
      echo "Data de hoje: " . $now;
       echo "ID: " . $row_cad_palestra['id'] . "<br>";
        
      echo "Tema: " . $row_cad_palestra['tema'] . "<br>";
      echo "Palestrante: " . $row_cad_palestra['palestrante'] . "<br>";
      echo "Dia: " . date('d/m/Y',strtotime($data)) . "<br>";
      echo "<a href='editar-palestra.php?id=".$row_cad_palestra['id']."'>Editar</a><br><hr>";
    }

    ?>

  </div>
 <?php include_once './footer.php' ?>