<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class EntreeDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getEntree($idE)
        {
            $sql = "SELECT *
                     FROM entree
                     WHERE entree.idE = ".$idE;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addEntree($qtE, $puE,$idP){
			$sql = "INSERT INTO entree VALUES(null, '$qtE', '$puE',$idP)";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteEntree($idE){
			$sql = "DELETE FROM entree WHERE IDE = $idE";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateEntree($idE, $qtE, $puE,$idP){
			$sql = "UPDATE entree SET qtE = '$qtE',
						puE = '$puE'
						WHERE idE = $idE";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeEntree(){
			$sql = "SELECT * FROM entree";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}