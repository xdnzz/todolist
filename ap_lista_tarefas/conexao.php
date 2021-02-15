<?php 


Class Conexao {

    private $host = 'localhost';
    private $dbname ='php_com_pdo';
    private $user ='root';
    private $pass ='';

    public function conectar() {
try{

$conexao = new PDO (
"mysql:host=$this->host;dbname=$this->dbname", //selecionando a variável com o localhost
"$this->user", //selecionando a variável com o usuario
"$this->pass" //selecionando a variável com a senha
);
return $conexao;


 } catch(PDOException $e) {
echo '<p>' .$e->getMessage(). '</p>';
}
    }
}



?>