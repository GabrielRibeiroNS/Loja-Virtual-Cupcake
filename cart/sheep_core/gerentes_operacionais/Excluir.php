<?php


class Excluir extends Conexao {

    private $Banco;
    private $SQL;
    private $Locais;
    private $Resultado;
    private $Excluir;
    private $Conexao;

 
    public function Remover($Banco, $SQL, $Adicionais = null) {
        $this->Banco = (string) $Banco;
        $this->SQL = (string) $SQL;
        
        parse_str($Adicionais, $this->Locais);
        $this->getSyntax();
        $this->Execute();
         
                
    }

    /** @var Retorna um Resultadoado de cadastro ou não  */
    public function getResultado() {
        return $this->Resultado;
    }

    /** @var FAZ A CONTAGEM DOS CAMPOS DA TABLEA  */
    public function getContaLinhas() {
        return $this->Excluir->rowCount();
    }

    
    public function setLocais($Adicionais) {
        parse_str($Adicionais, $this->Locais);
        $this->getSyntax();
        $this->Execute();
    }

    

    /** @var Faz  */
    private function Canectar() {

        $this->Conexao = parent::getCanectar();
        $this->Excluir = $this->Conexao->prepare($this->Excluir);
  
    }

    /** @var gera  */
    private function getSyntax() {
        $this->Excluir = "DELETE FROM {$this->Banco} {$this->SQL}";
        
    }

    /** @var Executa */
    private function Execute() {
        $this->Canectar();

        try {
           $this->Excluir->execute($this->Locais);
           $this->Resultado = true;
        } catch (Exception $wt) {
            $this->Resultado = null;
            print "<b>Erro ao Deletar: {$wt->getMessage()}</b> - {$wt->getCode()}";
        }
    }

}
