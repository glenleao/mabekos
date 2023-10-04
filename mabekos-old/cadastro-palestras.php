<?php
 session_start();
 include_once './header.php';
 ?>
  <div class="container py-5">
    <h1>Cadastrar palestras do mês</h1>
    <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="proc_cad_palestra.php">
      <label>Dia:</label>
      <input type="date" name="data" placeholder="Inserir o dia da palestra"><br><br>
      <label>Tema:</label>
      <input type="text" name="tema" placeholder="Inserir o tema da palestra"><br><br>
      <label>Palestrante:</label>
      <input type="text" name="palestrante" placeholder="Inserir o palestrante"><br><br>
      <input type="submit" name="SendCadPalestr" value="Cadastrar">   
    </form>

<?php include "footer.php" ?>