<?php

namespace Pessoa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Model\PessoaTable;

class PessoaController extends AbstractActionController {

    private $table;

    public function __construct($table){
        $this->table = new PessoaTable();
    }

    public function indexAction() {
        return new ViewModel(['pessoas' => $this->table->getAll()]);
    }

    public function adicionarAction() {
        return new ViewModel();
    }

    public function salvarAction() {
        return new ViewModel();
    }

    public function editarAction() {
        return new ViewModel();
    }

    public function removerAction() {
        return new ViewModel();
    }

    public function confirmacaoAction() {
        return new ViewModel();
    }
}
 