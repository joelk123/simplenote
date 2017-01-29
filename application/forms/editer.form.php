<?php
namespace Simplenote;
defined('SIMPLENOTE') or die('acces interdit');

class EditerForm extends \F3il\Form {
    
    public function __construct($action, $formId='editer-form') {
        parent::__construct($action, $formId);
        //die('ok');
            $this->addFormField(new \F3il\Field('titre','Titre',null,true)); 
            $this->addFormField(new \F3il\Field('texte','Texte',null,true));
    }
}