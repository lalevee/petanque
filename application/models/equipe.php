<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipe extends CI_Model {

  /* prefixe : 'E_' */
  var $E_id     = NULL;
  var $E_nom    = NULL;
  var $E_active = 0;
  var $E_consol = 0;
  var $E_nombre = 0;
  var $E_j1     = 0;
  var $E_j2     = 0;
  var $E_j3     = 0;
  var $E_j4     = 0;
  
  function __construct() {
    // Call the Model constructor
    parent::__construct();
  }
  
  function get_nom($equipe) {
    $this->db->select('E_nom');
    $this->db->where('E_id', $equipe);
    $query= $this->db->get('Equipe');
    return $query->result();
  }
  
  function get_equipe($joueur1) {
    $this->db->select('E_Id');
    $this->db->where('E_j1', $joueur1);
    $query= $this->db->get('Equipe');
    $res = $query->result();
    $id = $res[0];
    return $id->E_Id;
  }
  
  function get_equipes() {
    $query= $this->db->get('Equipe');
    return $query->result();
  }
  
  function get_vue_equipes() {
      $sql = 'SELECT E_id, E_nom, E_active, E_consol,
      		  J1.J_prenom AS J1_prenom,
      		  J1.J_nom    AS J1_nom,
      		  J2.J_prenom AS J2_prenom,
      		  J2.J_nom    AS J2_nom,
      		  J3.J_prenom AS J3_prenom,
      		  J3.J_nom    AS J3_nom,
      		  J4.J_prenom AS J4_prenom,
      		  J4.J_nom    AS J4_nom
      		  FROM Equipe
              INNER JOIN Joueur AS J1 ON E_j1 = J1.J_id
              INNER JOIN Joueur AS J2 ON E_j2 = J2.J_id
              LEFT  JOIN Joueur AS J3 ON E_j3 = J3.J_id
              LEFT  JOIN Joueur AS J4 ON E_j4 = J4.J_id';
      $query = $this->db->query($sql);
      return $query->result();
  }
  
  private function _get_actives($consol = '0') {
    $this->db->where('E_active', '1');
    $this->db->where('E_consol', $consol);
    $query= $this->db->get('Equipe');
    return $query->result();
  	
  }
  function get_active_tournoi() {
    return $this->_get_actives('0');
  }

  function get_active_consol() {
    return $this->_get_actives('1');
  }

  function battue($equipe, $tour) {
    $this->db->where('E_id', $equipe);
    $query= $this->db->get('Equipe');
    $tmp = $query->result();
    $e = $tmp[0];
    if ($e->E_active == 1) {
      if ($e->E_consol == 0) {
        if ($tour == 1) $e->E_consol = 1;
	else $e->E_active = 0;
      }
      else {
        $e->E_active = 0;
      }
      $this->db->where('E_id', $equipe);
      $this->db->update('Equipe', $e);
    }
  }

}
/* End of file equipe.php */
/* Location: ./application/models/equipe.php */
