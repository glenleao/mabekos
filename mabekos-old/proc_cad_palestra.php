<?php
session_start();
include_once '../conexao.php';


$SendCadPalestr = filter_input(INPUT_POST, 'SendCadPalestr', FILTER_SANITIZE_STRING);
if($SendCadPalestr){
	//recebe os dados do formulario
	$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
	$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
	$palestrante = filter_input(INPUT_POST, 'palestrante', FILTER_SANITIZE_STRING);

	//inserir no BD
	$result_msg_cont = "INSERT INTO cadastro_palestra (data, tema, palestrante) VALUES (:data, :tema, :palestrante)";
	$insert_msg_cont = $conn->prepare($result_msg_cont);
	$insert_msg_cont->bindParam(':data', $data);
	$insert_msg_cont->bindParam(':tema', $tema);
	$insert_msg_cont->bindParam(':palestrante', $palestrante);

	if ($insert_msg_cont->execute()) {
		$_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Parabéns!</strong> Cadastro realizado com sucesso!.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		header("Location: cadastro-palestras.php");
	}else{
		$_SESSION ['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Ops!</strong> Não foi possível fazer o cadastro!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
	header("Location: cadastro-palestras.php");
	}

}else{
	$_SESSION ['msg'] = "<p style='color:red;'>Mensagem nao enviada</p>";
	header("Location: cadastro-palestras.php");
}
