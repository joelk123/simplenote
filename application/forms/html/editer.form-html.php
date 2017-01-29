<?php
defined('SIMPLENOTE') or die('acces interdit');
?>
<form id="editer-form" methode="POST" action="<?php echo $this->getAction();?>">
    <label for="<?php $this->fName('titre');?>">
        <?php $this->fLabel('titre');?> :
    </label> 
    <input type="texte" 
           id="<?php $this->fName('titre');?>"
           name="<?php $this->fName('titre');?>"
           placeholder="titre"
           value="<?php $this->fValue('titre');?>"/>
    <div>
        <?php $this->fMessages('titre');?>
    </div>
    
    <label for="<?php $this->fName('texte');?>">
        <?php $this->fLabel('texte');?> :
    </label> 
    <input type="texte" 
           id="<?php $this->fName('texte');?>"
           name="<?php $this->fName('texte');?>"
           placeholder="texte de la note"
           value="<?php $this->fValue('texte');?>"/>
    <div>
        <?php $this->fMessages('texte');?>
    </div>
               
    <button type="submit">sauver</button>
    
</form>
