<?php
namespace Simplenote;
defined('SIMPLENOTE') or die('acces interdit');

class SimplenoteModel {
    
    public function lister() {
        $db= \F3il\Database::getInstance();
        $req= $db->prepare("SELECT * FROM simplenote ORDER BY date");
        try {
            $req->execute();
            $data = $req->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $exc) {
            throw new \F3il\SqlError('ERREUR SQL',$req);
        }
        return $data;     
    }
    public function creer($data) {
        $time = date('Y-m-d H:m:s');
        $db= \F3il\Database::getInstance();
        $req= $db->prepare("INSERT INTO simplenote SET titre = :titre, texte = :texte, date = :time");
        try {
            $req->bindValue(':titre', $data['titre']);
            $req->bindValue(':texte', $data['texte']);
            $req->bindValue(':time', $time);
                        $req->execute();

        } 
        catch (\PDOException $exc) {
            throw new \F3il\SqlError('ERREUR SQL',$req);
        }
        return $data; 
    }
        
}


