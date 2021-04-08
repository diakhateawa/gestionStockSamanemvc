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
    class Entree extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/EntreeDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("entree/index");
        }

        public function getID($idE){
            $data['IDE'] = $idE;

            return $this->view->load("entree/get_idE", $data);
        }
        
        public function get($idE){
            //Instanciation du model
            $edb = new EntreeDB();

            $data['test'] = $edb->getEntree($idE);
			
            return $this->view->load("produit/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $edb = new EntreeDB();
			
            $data['entrees'] = $edb->listeEntree();
			
            return $this->view->load("entree/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $edb = new ProduitDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($qtE) && !empty($puE)) {
                    $ok = $edb->addEntree($qtE, $puE);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("entree/add", $data);
        }
		public function update(){
			//Instanciation du model
            $edb = new EntreeDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idE) && !empty($qtE) && !empty($puE) && !empty($idP)) {
                    $ok = $edb->updateProduit($idE, $qtE, $puE,$idP);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($idE){
            //Instanciation du model
            $edb = new EntreeDB();
			//Supression
			$edb->deleteEntree($idE);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($idE){
			
            //Instanciation du model
            $pdb = new EntreeDB();
			//Supression
			$data['entree'] = $pdb->getEntree($idE);
			//chargement de la vue edit.html
            return $this->view->load("entree/edit", $data);
        }
    }
?>