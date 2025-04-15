<?php

class Aluno
{
    public $nome;
    public $email;
    public $curso;

    public function mostraDados()
    {
        echo $this->$nome;
    }
}
?>