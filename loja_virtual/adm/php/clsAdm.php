<?php

if(file_exists('../conexao/conexao.php'))
    include_once '../conexao/conexao.php';
else
    include_once '../../adm/conexao/conexao.php';

class clsAdm{
    private $cpf, $nome, $email, $senha, $id, $nome_prod, $preco, $desc, $foto, $foto_tmp;

    public function getCPF(){
        return $this->cpf;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
//------------------------------------
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
//------------------------------------
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
//------------------------------------
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
//------------------------------------
    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }
//------------------------------------
    public function getNome_prod(){
        return $this->nome_prod;
    }
    public function setNome_prod($nome_prod){
        $this->nome_prod = $nome_prod;
    }
//------------------------------------
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
//------------------------------------
    public function getDesc(){
        return $this->desc;
    }
    public function setDesc($desc){
        $this->desc = $desc;
    }
//------------------------------------
    public function getFoto(){
        return $this->foto;
    }
    public function setFoto($foto){
        $this->foto = $foto;
    }
//------------------------------------
    public function getFotoTmp(){
        return $this->foto_tmp;
    }
    public function setFotoTmp($fototmp){
        $this->foto_tmp = $fototmp;
    }

//----------------------------------------------------

    public function cadastrarCliente(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        if($this->cpf == null || $this->nome == null || $this->email == null || $this->senha == null){
            $Retorno = "Preencha o formulário inteiro, seu oreiudo.";
        }
        else{
            $insert = $conexao->prepare('insert into cliente (cpf, nome, email, senha) values (?,?,?,?)');
            $insert->bindParam(1,$this->cpf);
            $insert->bindParam(2,$this->nome);
            $insert->bindParam(3,$this->email);
            $insert->bindParam(4,$this->senha);
            $insert->execute();
    
            if($insert){
                $Retorno =  "Cadastrado!";
            }
            else{
                $Retorno = "Explodido!";
            }
        }
    echo $Retorno;
    }

    public function deletarCliente(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        if($this->cpf == null){
            $Retorno = 'Como é que vou deletar sem a porcaria do cpf? Seu cabeçudo.';
        }
        else{
            $delete = $conexao->prepare('delete from cliente where cpf = ?');
            $delete->bindParam(1,$this->cpf);
            $delete->execute();
    
            if($delete){
                $Retorno =  "Deletado!";
            }
            else{
                $Retorno = "Explodido!";
            }
        }
    echo $Retorno;
    }

    public function consultarCliente(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select * from cliente');
        $select->execute();

        if($select->rowCount()>0){
            $resultado = json_encode($select->fetchAll());
         }
        else{
            $resultado = "Pelo amor cara, vc tá tentando consultar sem dados? Aí não né!";
        }
    echo $resultado;
    }

//-------------------------------------------------

    public function cadastrarProduto(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        if($this->id == null|| $this->nome_prod == null || $this->preco == null ||
        $this->desc == null || $this->foto == null){
            $Retorno = "Preencha o formulário inteiro, seu oreiudo.";
        }
        else{
            $destino = '../../imagens/' . $this->foto;

            move_uploaded_file($this->foto_tmp, $destino);
    
            $insert = $conexao->prepare('insert into produto (id, nome_prod, preco, descricao, foto) values (?,?,?,?,?)');
            $insert->bindParam(1,$this->id);
            $insert->bindParam(2,$this->nome_prod);
            $insert->bindParam(3,$this->preco);
            $insert->bindParam(4,$this->desc);
            $insert->bindParam(5,$this->foto);
            $insert->execute();
    
            if($insert){
                $Retorno =  "Cadastrado!";
            }
            else{
                $Retorno = "Explodido!";
            }
        }
    echo $Retorno;
    }

    public function deletarProduto(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        if($this->id == null){
            $Retorno = 'Como é que vou deletar sem a porcaria do id? Seu cabeçudo.';
        }
        else{
            $delete = $conexao->prepare('select foto from produto where id = ?');
            $delete->bindParam(1,$this->id);
            $delete->execute();
            $fetch = $delete->fetch();
            $nome_arquivo = $fetch['foto'];

            unlink("../../imagens/" . $nome_arquivo . "");


            $delete = $conexao->prepare('delete from produto where id = ?');
            $delete->bindParam(1,$this->id);
            $delete->execute();

            if($delete){
                $Retorno =  "Deletado!";
            }
            else{
                $Retorno = "Explodido!";
            }
        }
    echo $Retorno;
    }

    public function consultarProduto(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select * from produto');
        $select->execute();

        if($select->rowCount()>0){
            $resultado = json_encode($select->fetchAll());
         }
        else{
            $resultado = "Pelo amor cara, vc tá tentando consultar sem dados? Aí não né!";
        }
    echo $resultado;
    }

    public function entrarCliente(){
        $bd = new Conexao();
		$conexao = $bd->getConexao();

        $select = $conexao->prepare('select * from cliente where email = ? and senha = ?');
        $select->bindParam(1,$this->email);
        $select->bindParam(2,$this->senha);
        $select->execute();

        if($select->rowCount()>0){
            $resultado = 'Logado!';
         }
        else{
            $resultado = "Botou algo errado aí.";
        }
    echo $resultado;
    }
}
?>