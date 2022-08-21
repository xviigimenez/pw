<?php
class clsBoletim{
    private $nome;
    private $matricula;
    private $nota1;
    private $nota2;
    private $nota3;
    private $situacao;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nom){
        $this->nome = $nom;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matri){
        $this->matricula = $matri;
    }
    public function getNota1(){
        return $this->nota1;
    }
    public function setNota1($n1){
        $this->nota1 = $n1;
    }
    public function getNota2(){
        return $this->nota2;
    }
    public function setNota2($n2){
        $this->nota2 = $n2;
    }
    public function getNota3(){
        return $this->nota3;
    }
    public function setNota3($n3){
        $this->nota3 = $n3;
    }
    public function getSituacao(){
        return $this->situacao;
    }

    public function gerarBoletim(){
        $media = 0;

        $media = ($this->nota1 + $this->nota2 + $this->nota3)/3;

        if($media <= 3.99){
            $this->situacao = "Retido";
        }
        if($media >= 4 && $media <= 6.99){
            $this->situacao = "Recuperação";
        }
        else{
            $this->situacao = "Aprovado";
        }

        return $media;
    }

    public function incluir(){
        include 'conexao.php';

		$insert = $conexao->prepare("insert into aluno(matricula, nome, nota_1, nota_2, nota_3) values (?, ?, ?, ?, ?)");
		$insert->bindValue(1, $this->matricula);
		$insert->bindValue(2, $this->nome);
		$insert->bindValue(3, $this->nota1);
		$insert->bindValue(4, $this->nota2);
        $insert->bindValue(5, $this->nota3);

		$resultado = $insert->execute();

		if($resultado){
			$retorno = "cadastrou";
		}else{
			$retorno = "não cadastrou";
		}

        return $retorno;
    }

    public function excluir(){
        include 'conexao.php';

		$delete = $conexao->prepare("delete from aluno where matricula = ?");
		$delete->bindValue(1, $this->matricula);

		$resultado = $delete->execute();

		if($resultado){
			$retorno = "excluido";
		}else{
			$retorno = "não excluido";
		}

        return $retorno;
    }

    public function pesquisa(){
        include 'conexao.php';

        $pesquisa = $conexao->prepare("select * from aluno");
        $pesquisa->execute();

        if($pesquisa->rowCount() > 0){
            $resultado = $pesquisa->fetchAll();
         }
        else{
            $resultado = "não funcionou";
        }
        return $resultado;
    }
}
?>