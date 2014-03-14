<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Model {

    var $c_nom     = '';
    var $c_annee   = 2012;
    var $c_etat    = 'INI';
    var $c_tour    = 0;
    var $c_ieme    = 0;

/* Les états
   - INI: Mise en place du site
   - INS: Phase d'inscription
   - EXP: Phase de tournoi
   - FIN: Tournoi terminé (résultats)
   - ZZZ: Tournoi en sommeil

   Les transitions
   - ZZZ -> INI: modification configuration, initialisation de la base
   - INI -> INS: none
   - INS -> EXO: validation des équipes, initialisation du tournoi
                 (arbre)
   - EXP -> FIN:
   - FIN -> ZZZ: passage de la base en archives
*/
    public function __construct() {
      parent::__construct();
    }
    
    public function get_config() {
      $query = $this->db->get('Configuration');
      return $query->result(); 
    }
    
    public function set_config($config) {
      $this->db->update('Configuration', $config);
    }

    public function inscription_closed() {
        $query = $this->get_config();
        $conf = $query[0];
        return ($conf->c_etat != 'INS');
    }
    
    public function phase_inscription() {
        $query = $this->get_config();
        $c = $query[0];
        if ($c->c_etat == 'INI') {
            $c->c_etat = 'INS';
            $this->set_config($c);
            return 'ok';
        }
        return 'ko';
    }
    
    public function phase_tournoi() {
        $query = $this->get_config();
        $c = $query[0];
        if ($c->c_etat == 'INS') {
            $c->c_etat = 'EXP';
            $c->c_tour = 1;
            $c->c_ieme = $this->config->item('nombre');
            $this->set_config($c);
            return 'ok';
        }
        return 'ko';
    }
    
    public function tour_suivant() {
      $query = $this->get_config();
      $c = $query[0];
      if ($c->c_etat != 'EXP') {
          return 'ko';
      }
      $c->c_tour = $c->c_tour + 1;
      $c->c_ieme = $c->c_ieme / 2;
      $this->set_config($c);
    }

}

/* End of file configuration.php */
/* Location: ./application/models/configuration.php */
