<?php
namespace Simplenote;

defined('SIMPLENOTE') or die('acces interdit');

class SimplenoteController extends \F3il\Controller{
    
    public function __construct() {
        $this->setDefaultActionName('simplenote');
        
    }
    
    public function simplenoteAction() {
        $page= \F3il\Page::getInstance();
        $page->setTemplate('simplenote');
        $page->setView('vue-index');
        
        $page->uneDonneeInconnue='lolo';
        $conf= \F3il\Configuration::getInstance();
        $page->dbname=$conf->mysql_dbname;
        $model= new SimplenoteModel();
        
        $page->simplenote= $model->lister();
    }
    
    public function trucAction() {
        $note= array('titre'=>'AOO', 'texte'=>'analyse orientee objet');
        $model= new SimplenoteModel();
        $model->creer($note);
        die('OK');
        
    }
    public function saisirAction() {
        $page = \F3il\Page::getInstance();
        $page->setTemplate('simplenote')->setView('editer');
        
        $form = new EditerForm('?controller=simplenote&action=saisir');
        $page->formulaire = $form;  
        
        if(!$form->isSubmitted())            return;
        
        $form->loadData(INPUT_POST);
        if(!$form->isValid())            return;
        
        $model = new SimplenoteModel();
        $data = $form->getData();
        //$data['date']= date('Y-m-d H:m:s');
        $model->creer($data);
        \F3il\HttpHelper::redirect('controller=simplenote&action=simplenote');
        
        
    }
}
