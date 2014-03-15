<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Classe Rencontre : gestion des matchs
 * @author Philippe Lalevée
 *
 */
class Rencontre extends CI_Model {

    var $R_id = 0;
    var $R_joue = 0;
    var $R_consol = 0;
    var $R_tour = 0;
    var $R_e1 = 0;
    var $R_score1 = 0;
    var $R_e2 = 0;
    var $R_score2 = 0;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Retourne le match opposant l'équipe e1 à l'équipe e2
     * @param Equipe $e1
     * @param Equipe $e2
     */
    public function get_rencontre($e1, $e2) {
        $this->db->where('R_e1', $e1);
        $this->db->where('R_e2', $e2);
        $query = $this->db->get('Rencontre');
        return $query->result();
    }

    /**
     * Retourne les adresses mail des joueurs encore impliqués dans un match.
     */
    public function get_mails() {
        $sql = 'SELECT J_mail FROM Rencontre
		INNER JOIN Equipe ON E_id = R_e1 or E_id = R_e2
		INNER JOIN Joueur ON J_id = E_j1 OR J_id = E_j2 OR J_id = E_j3
		WHERE R_joue = 0';
        $query = $this->db->query($sql);
        foreach ($query->result() as $j) {
            $liste[] = $j->J_mail;
        }
        return $liste;
    }

    /**
     * Retourne les matchs joués ou non (paramètre jouees) ou
     * les matchs en tournoi ou en consolante
     *
     * @param $jouees : '1' indique les matchs joués et '0' pour les matchs en cours
     * @param $consol : '1' indique les matchs en consolante et '0' pour le tournoi
     */
    private function _get_rencontres($jouees = '1', $consol = '0') {
        $this->db->where('R_joue', $jouees);
        $this->db->where('R_consol', $consol);
        $this->db->order_by('R_tour', 'desc');
        //$this->db->order_by('R_e1', 'asc');
        $query = $this->db->get('Rencontre');
        return $query->result();
    }

    public function get_rencontres_jouees() {
        return $this->_get_rencontres('1', '0');
    }

    public function get_rencontres_jouees_consol() {
        return $this->_get_rencontres('1', '1');
    }

    public function get_rencontres_a_jouer() {
        return $this->_get_rencontres('0', '0');
    }

    public function get_rencontres_a_jouer_consol() {
        return $this->_get_rencontres('0', '1');
    }

}

/* End of file rencontre.php */
/* Location: ./application/models/rencontre.php */

