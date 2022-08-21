<?php
class clsBoletim{
    private $nota1;
    private $nota2;
    private $nota3;
    private $situacao;

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
}
?>