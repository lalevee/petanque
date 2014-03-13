<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Joueur extends CI_Model {

	var $J_id      = NULL;
	var $J_equipe  = 0;
	var $J_prenom  = '';
	var $J_nom     = '';
	var $J_mail    = '';
	var $J_bureau  = '';
	var $J_tel     = '';
	var $J_service = '';
	var $J_asmin   = 0;
  
	function __construct() {
		// Call the Model constructor
		parent::__construct();
	}
  
	function get_joueurs() {
		$this->db->order_by('J_nom', 'asc');
		$query = $this->db->get('Joueur');
 		return $query->result();
	}
  
        function get_joueur($joueur) {
                $this->db->where('J_id', $joueur);
                $query = $this->db->get('Joueur');
                return $query->result();
        }

	function get_equipe_prenoms_noms($equipe) {
		$this->db->select('J_prenom');
		$this->db->select('J_nom');
		$this->db->where('J_equipe', $equipe);
		$this->db->order_by('J_nom', 'asc');
		$query= $this->db->get('Joueur');
		return $query->result();
	}
  
	function get_equipe_prenoms($equipe) {
		$this->db->select('J_prenom');
		$this->db->where('J_equipe', $equipe);
		$this->db->order_by('J_prenom', 'asc');
		$query= $this->db->get('Joueur');
		return $query->result();
	}
  
	function get_equipes() {
		$this->db->order_by('J_equipe', 'asc');
		$query= $this->db->get('Joueur');
		return $query->result();
	}
  
	function get_mails() {
		$this->db->select('J_mail');
	    $query = $this->db->get('Joueur');
		$joueur = $query->result();
		foreach ($joueur as $j) {
			$liste[] = $j->J_mail;
		}
		return $liste;
	}
  
	function get_apayer() {
            $this->db->select('J_mail');
	    $this->db->where('J_asmin', 0);
	    $query = $this->db->get('Joueur');
            $joueur = $query->result();
            foreach ($joueur as $j) {
                $liste[] = $j->J_mail;
	    }
	    return $liste;
	}
  
	function insert_joueur() {
    	$this->J_nom     = $this->input->post('nom');
    	$this->J_prenom  = $this->input->post('prenom'); 
    	$this->J_mail    = $this->input->post('mail'); 
    	$this->J_service = $this->input->post('service'); 
    	$this->J_bureau  = $this->input->post('bureau'); 
    	$this->J_tel     = $this->input->post('tel'); 
    	$this->db->insert('Joueur', $this);
	}
}

/* End of file joueur.php */
/* Location: ./application/models/joueur.php */
