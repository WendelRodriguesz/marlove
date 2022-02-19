<?php 
  header('Access-Control-Allow-Origin: *');
  
  //Variáveis do formulário.
  $nome = $_POST['txtNome'];
  $datadenasc = $_POST['txtDataNascimento'];
  $cep = $_POST['numberCEP'];
  $endereco = $_POST['txtEndereco'];
  $bairro = $_POST['txtBairro'];
  $cidade = $_POST['txtCidade'];
  $contato = $_POST['txtContato'];
  $seuemail = $_POST['txtEmail'];
  $profissao = $_POST['txtProfissao'];
  $empresa = $_POST['txtEmpresa'];
  $qntfilhos = $_POST['txtFilhos'];
  $qntpessoas = $_POST['txtPessoasResidencia'];
  $contatoprox = $_POST['txtContatoProximo'];
  $nomeanimal = $_POST['txtNomeAnimal'];
  $verificacao = $_POST['txtRespVerificacao'];
  $facebook = $_POST['txtLinkFacebook'];
  $instagram = $_POST['txtLinkInstagram'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

    //Pegando o e-mail e senha de forma segura.
  $json = file_get_contents("../credentials.json");
  $data = json_decode($json);
  
  $myemail = $data->EMAIL;
  $mysenha =  $data->EMAIL_PASSWORD;

  //Chamando a função PHPMailer.
  require_once('PHPMailer/PHPMailerAutoload.php');

  $email = new PHPMailer();
  $email->isSMTP();

  $email->Host = 'smtp.gmail.com';
  $email->Port = '587';
  $email->SMTPSecure = 'tls';
  $email->SMTPAuth = 'true';
  $email->Username = $myemail; //E-mail que vai enviar.
  $email->Password = $mysenha; //Senha do e-mail.

  $email->setFrom($email->Username, $nome);
  $email->AddAddress('alimenteumpetdw@gmail.com'); //E-mail do destino.
  $email->Subject = "Inscricao de adocao."; //Assunto do e-mail.

  $email->Body = "
    <html>
      <p><b>Nome: </b> $nome </p>
      <p><b>Data de nascimento: </b> $datadenasc </p>
      <p><b>CEP: </b> $cep </p>
      <p><b>Endereço: </b> $endereco </p>
      <p><b>Bairro: </b> $bairro </p>
      <p><b>Cidade: </b> $cidade </p>
      <p><b>Contato: </b> $contato </p>
      <p><b>E-mail: </b> $seuemail </p>
      <p><b>Profissão: </b> $profissao </p>
      <p><b>Empresa: </b> $empresa </p>
      <p><b>Quantidade de filhos: </b> $qntfilhos </p>
      <p><b>Quantidade de pessoas na casa: </b> $qntpessoas </p>
      <p><b>Contatos próximos: </b> $contatoprox </p>
      <p><b>Nome do animal: </b> $nomeanimal </p>
      <p><b>Verificação: </b> $verificacao </p>
      <p><b>Facebook: </b> $facebook </p>
      <p><b>Instagram: </b> $instagram </p>

      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>"; //Corpo de mensagem do -email.
  $email->IsHtml(true); //Transforma o texto acima em tipo HTML.

  if ($email->Send()){ //Testa o envio do e-mail.
    echo 'E-mail enviado!';
  } else{
    echo 'Falha ao enviar: ' . $email->ErrorInfo;
  }

  echo "<meta http-equiv='refresh' content='1;URL=../../../src/pages/structure/adocao.html'>"; //Redireciona a página de contato.
?>
