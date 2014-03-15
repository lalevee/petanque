<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tournoi extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    private function tourToString($tour) {
        $texte = array(
            '1' => 'huitième de finale',
            '2' => 'quart de finale',
            '3' => 'demi-finale',
            '4' => 'finale');
        return $texte[$tour];
    }

    public function accueil() {
        $data['tournoi']           = $this->config->item('tournoi');
        $data['annee']             = $this->config->item('annee');
        $data['organisateur']      = $this->config->item('organisateur');
        $data['mail_organisateur'] = $this->config->item('mail_organisateur');
        $this->load->view('accueil', $data);
    }

    public function index() {
        $this->load->view('template/header');
        $this->accueil();
        $this->load->view('template/footer');
    }

    public function inscription() {
        $data['closed'] = $this->Configuration->inscription_closed();
        $data['etat'] = $this->Configuration->get_etat();
        $this->load->view('template/header');
        $this->load->view('inscription/joueur', $data);
        $this->load->view('template/footer');
    }

    public function valider_inscription() {
        $this->form_validation->set_rules('prenom', 'Prénom', 'required|xss_clean');
        $this->form_validation->set_rules('nom', 'Nom', 'required|xss_clean');
        $this->form_validation->set_rules('mail', 'Adresse mail', 'trim|required|valid_email|is_unique[Joueur.J_mail]');
        $this->form_validation->set_rules('tel', 'Téléphone', 'trim|required|integer');
        $this->form_validation->set_rules('bureau', 'Bureau', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['closed'] = $this->Configuration->inscription_closed();
            $this->load->view('template/header');
            $this->load->view('inscription/joueur', $data);
            $this->load->view('template/footer');
        } else {
            $this->Joueur->insert_joueur();
            $data = array('J_prenom' => $this->input->post('prenom'),
                'J_nom' => $this->input->post('nom'));
            $this->load->view('template/header');
            $this->load->view('inscription/inscrit', $data);
            $this->load->view('template/footer');
        }
    }

    public function les_joueurs() {
        $data['query'] = $this->Joueur->get_joueurs();
        $data['count'] = count($data['query']);
        $this->load->view('template/header');
        $this->load->view('listes/joueurs', $data);
        $this->load->view('template/footer');
    }

    public function les_equipes() {
        $data['equipes'] = $this->Equipe->get_vue_equipes();
        $this->load->view('template/header');
        $this->load->view('listes/equipes', $data);
        $this->load->view('template/footer');
    }

    public function les_rencontres() {
        $rencontres = $this->Rencontre->get_rencontres_a_jouer();
        $liste = array();
        foreach ($rencontres as $m) {
            $nom1 = $this->Equipe->get_nom($m->R_e1);
            $nom2 = $this->Equipe->get_nom($m->R_e2);
            $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e1);
            $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e2);
            $liste[] = array('tour' => $m->R_tour,
                'equipe1' => $m->R_e1,
                'nom1' => $nom1[0]->E_nom,
                'joueurs1' => $j_e1,
                'equipe2' => $m->R_e2,
                'nom2' => $nom2[0]->E_nom,
                'joueurs2' => $j_e2);
        }
        $data['rencontre'] = $liste;
        if (count($rencontres) > 0) {
            $tour = $rencontres[0]->R_tour;
            $tmp = $this->config->item('dates');
            $data['date_tour'] = $tmp[$tour];
        } else
            $data['date_tour'] = '20 juin';
        $rencontres = $this->Rencontre->get_rencontres_a_jouer_consol();
        $liste = array();
        foreach ($rencontres as $m) {
            $nom1 = $this->Equipe->get_nom($m->R_e1);
            $nom2 = $this->Equipe->get_nom($m->R_e2);
            $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e1);
            $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e2);
            $liste[] = array('tour' => $m->R_tour,
                'equipe1' => $m->R_e1,
                'nom1' => $nom1[0]->E_nom,
                'joueurs1' => $j_e1,
                'equipe2' => $m->R_e2,
                'nom2' => $nom2[0]->E_nom,
                'joueurs2' => $j_e2);
        }
        $data['consol'] = $liste;
        $this->load->view('template/header');
        $this->load->view('listes/rencontres', $data);
        $this->load->view('template/footer');
    }

    public function les_resultats() {
        $rencontres = $this->Rencontre->get_rencontres_jouees();
        $liste = array();
        foreach ($rencontres as $m) {
            if ($m->R_score1 > $m->R_score2) {
                $e_e1 = $m->R_e1;
                $e_e2 = $m->R_e2;
                $n_e1 = $this->Equipe->get_nom($m->R_e1);
                $n_e2 = $this->Equipe->get_nom($m->R_e2);
                $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e1);
                $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e2);
                $s_e1 = $m->R_score1;
                $s_e2 = $m->R_score2;
            } else {
                $e_e2 = $m->R_e1;
                $e_e1 = $m->R_e2;
                $n_e2 = $this->Equipe->get_nom($m->R_e1);
                $n_e1 = $this->Equipe->get_nom($m->R_e2);
                $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e1);
                $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e2);
                $s_e2 = $m->R_score1;
                $s_e1 = $m->R_score2;
            }
            $liste[] = array('tour' => $m->R_tour,
                'display' => $this->tourToString($m->R_tour),
                'equipe1' => $e_e1,
                'nom1' => $n_e1[0]->E_nom,
                'joueurs1' => $j_e1,
                'score1' => $s_e1,
                'equipe2' => $e_e2,
                'nom2' => $n_e2[0]->E_nom,
                'joueurs2' => $j_e2,
                'score2' => $s_e2
            );
        }
        $data['rencontre'] = $liste;
        $rencontres = $this->Rencontre->get_rencontres_jouees_consol();
        $liste = array();
        foreach ($rencontres as $m) {
            if ($m->R_score1 > $m->R_score2) {
                $e_e1 = $m->R_e1;
                $e_e2 = $m->R_e2;
                $n_e1 = $this->Equipe->get_nom($m->R_e1);
                $n_e2 = $this->Equipe->get_nom($m->R_e2);
                $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e1);
                $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e2);
                $s_e1 = $m->R_score1;
                $s_e2 = $m->R_score2;
            } else {
                $e_e2 = $m->R_e1;
                $e_e1 = $m->R_e2;
                $n_e2 = $this->Equipe->get_nom($m->R_e1);
                $n_e1 = $this->Equipe->get_nom($m->R_e2);
                $j_e2 = $this->Joueur->get_equipe_prenoms($m->R_e1);
                $j_e1 = $this->Joueur->get_equipe_prenoms($m->R_e2);
                $s_e2 = $m->R_score1;
                $s_e1 = $m->R_score2;
            }
            $liste[] = array('tour' => $m->R_tour,
                'display' => $this->tourToString($m->R_tour),
                'equipe1' => $e_e1,
                'nom1' => $n_e1[0]->E_nom,
                'joueurs1' => $j_e1,
                'score1' => $s_e1,
                'equipe2' => $e_e2,
                'nom2' => $n_e2[0]->E_nom,
                'joueurs2' => $j_e2,
                'score2' => $s_e2
            );
        }
        $data['consol'] = $liste;
        $this->load->view('template/header');
        $this->load->view('listes/resultats', $data);
        $this->load->view('template/footer');
    }

    public function les_rencontres_suite() {
        $data['joues'] = $this->Rencontre->get_rencontres_jouees();
        $data['joues_consol'] = $this->Rencontre->get_rencontres_jouees_consol();
        $data['ajouer'] = $this->Rencontre->get_rencontres_a_jouer();
        $data['ajouer_consol'] = $this->Rencontre->get_rencontres_a_jouer_consol();
        $this->load->view('listes/rencontres', $data);
    }

    public function le_reglement() {
        $this->load->view('template/header');
        $data['tournoi'] = $this->config->item('tournoi');
        $data['lieu'] = $this->config->item('lieu');
        $data['annee'] = $this->config->item('annee');
        $data['mail_organisateur'] = $this->config->item('mail_organisateur');
        $this->load->view('reglement', $data);
        $this->load->view('template/footer');
    }

    public function les_annees_passees() {
        $this->load->view('template/header');
        $this->load->view('annees_passees');
        $this->load->view('template/footer');
    }

    public function archive($annee) {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }

    public function les_credits() {
        $this->load->view('template/header');
        $this->load->view('credits');
        $this->load->view('template/footer');
    }

}

/* End of file tournoi.php */
/* Location: ./application/controllers/tournoi.php */
