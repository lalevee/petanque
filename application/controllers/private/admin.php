<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->access->prompt();
    }

    public function index() {
        $this->load->view('private/admin');
    }

    /* Gestion de la configuration */

    public function initialiser() {
        $this->load->view('private/initconfig');
    }

    public function valider_initconfig() {
        $this->form_validation->set_rules('user1', 'Joueur 1', 'required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('private/initconfig');
        }
    }

    public function config() {
        $data['config'] = $this->Configuration->get_config();
        $this->load->view('private/config', $data);
    }

    /* Gestion des inscriptions */

    public function phase_inscription() {
        $data['ok'] = $this->Configuration->phase_inscription();
        $this->load->view('private/phase_inscription_ok', $data);
    }

    public function tirage_equipe() {
        $data['query'] = $this->Joueur->get_joueurs_a_equiper();
        $data['count'] = count($data['query']);
        $this->load->view('private/tirage_equipe', $data);
    }

    public function tirage_tableau() {
        $this->load->view('private/tirage_tableau');
    }

    public function inscription_equipe() {
        $this->load->view('private/inscription_equipe');
    }

    public function valider_inscription() {
        $this->form_validation->set_rules('user1', 'Joueur 1', 'required|xss_clean');
        $this->form_validation->set_rules('user2', 'Joueur 2', 'required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('private/inscription_equipe');
        } else {
            $nbjoueur = 2;
            $joueur1 = $this->input->post('user1');
            if ($this->input->post('user3') != '0') {
                $nbjoueur = 3;
                if ($this->input->post('user4') != '0')
                    $nbjoueur = 4;
            }
            $nom_team = '';
            if ($this->input->post('nom') != '-')
                $nom_team = $this->input->post('nom');
            $data = array(
                'e_rang' => 0,
                'e_nom' => $nom_team,
                'e_active' => 1,
                'e_consol' => 0,
                'e_nombre' => $nbjoueur,
                'e_j1' => $this->input->post('user1'),
                'e_j2' => $this->input->post('user2'),
                'e_j3' => $this->input->post('user3'),
                'e_j4' => $this->input->post('user4')
            );
            $this->db->insert('Equipe', $data);
            $equipe = $this->Equipe->get_equipe($joueur1);
            // mise a jour des joueurs
            $tmp = $this->Joueur->get_joueur($this->input->post('user1'));
            $joueur = $tmp[0];
            $joueur->J_equipe = $equipe;
            $this->db->where('J_id', $joueur->J_id);
            $this->db->update('Joueur', $joueur);
            $tmp = $this->Joueur->get_joueur($this->input->post('user2'));
            $joueur = $tmp[0];
            $joueur->j_equipe = $equipe;
            $this->db->where('J_id', $joueur->J_id);
            $this->db->update('Joueur', $joueur);
            if ($nbjoueur == 3) {
                $tmp = $this->Joueur->get_joueur($this->input->post('user3'));
                $joueur = $tmp[0];
                $joueur->j_equipe = $equipe;
                $this->db->where('J_id', $joueur->J_id);
                $this->db->update('Joueur', $joueur);
                if ($nbjoueur == 4) {
                    $tmp = $this->Joueur->get_joueur($this->input->post('user4'));
                    $joueur = $tmp[0];
                    $joueur->j_equipe = $equipe;
                    $this->db->where('J_id', $joueur->J_id);
                    $this->db->update('Joueur', $joueur);
                }
            }
            $this->load->view('private/inscrit_ok', $data);
        }
    }

    /* Gestion des paiements */

    public function paiement() {
        $data['erreur'] = NULL;
        $this->load->view('private/paiement', $data);
    }

    public function valider_paiement() {
        $this->form_validation->set_rules('joueur', 'Joueur', 'required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $data['erreur'] = 'Joueur non précisé';
            $this->load->view('private/paiement', $data);
        } else {
            $tmp = $this->Joueur->get_joueur($this->input->post('joueur'));
            if (count($tmp) <= 0) {
                $data['erreur'] = 'Joueur inexistant';
                $this->load->view('private/paiement', $data);
            } else {
                $payeur = $tmp[0];
                if ($payeur->J_asmin == 1) {
                    $data['erreur'] = 'Le joueur a déjà payé';
                    $this->load->view('private/paiement', $data);
                } else {
                    $payeur->J_asmin = 1;
                    $this->db->where('J_id', $payeur->J_id);
                    $this->db->update('Joueur', $payeur);
                    $this->load->view('private/paiement_ok', $payeur);
                }
            }
        }
    }

    /* Gestion des tours */

    public function phase_tournoi() {
        $data['ok'] = $this->Configuration->phase_tournoi();
        $this->_rencontres();
        $this->load->view('private/phase_inscription_ok', $data);
    }

    public function tour() {
        $this->Configuration->tour_suivant();
        $this->_rencontres();
        $this->load->view('private/tour_ok');
    }

    private function _rencontres() {
        $tmp = $this->Configuration->get_config();
        $tour = $tmp[0]->c_tour;

        $equipes = $this->Equipe->get_active_tournoi();
        $nbrencontre = count($equipes) / 2;
        for ($i = 1; $i <= $nbrencontre; $i++) {
            if ($i == 1) $e1 = current($equipes);
            else         $e1 = next($equipes);
            $e2 = next($equipes);
            $data = array('R_joue' => 0, 'R_consol' => 0, 'R_tour' => $tour,
                'R_e1' => $e1->E_id, 'R_score1' => 0,
                'R_e2' => $e2->E_id, 'R_score1' => 0);
            $this->db->insert('Rencontre', $data);
        }
        if ($tour > 1) { /* il y a la consolante */
            $equipes = $this->Equipe->get_active_consol();
            $nbrencontre = count($equipes) / 2;
            for ($i = 1; $i <= $nbrencontre; $i++) {
                if ($i == 1) $e1 = current($equipes);
                else         $e1 = next($equipes);
                $e2 = next($equipes);
                $data = array('R_joue' => 0, 'R_consol' => 1, 'R_tour' => $tour,
                    'R_e1' => $e1->E_id, 'R_score1' => 0,
                    'R_e2' => $e2->E_id, 'R_score1' => 0
                );
                $this->db->insert('Rencontre', $data);
            }
        }
        $this->load->view('private/rencontre_ok');
    }

    /* Gestion des scores des matchs */

    public function score() {
        $data['erreur'] = NULL;
        $this->load->view('private/score', $data);
    }

    public function valider_score() {
        $this->form_validation->set_rules('equ1', 'Equipe A', 'required|xss_clean');
        $this->form_validation->set_rules('scor1', 'Score équipe A', 'required|xss_clean');
        $this->form_validation->set_rules('equ2', 'Equipe B', 'required|xss_clean');
        $this->form_validation->set_rules('scor2', 'Score équipe B', 'required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $data['erreur'] = 'Valeurs manquantes';
            $this->load->view('private/score', $data);
        } else {
            $tmp = $this->Rencontre->get_rencontre($this->input->post('equ1'), $this->input->post('equ2'));
            if (count($tmp) <= 0) {
                $data['erreur'] = 'Rencontre inexistante';
                $this->load->view('private/score', $data);
            } else {
                $rencontre = $tmp[0];
                $rencontre->R_joue = 1;
                $rencontre->R_score1 = $this->input->post('scor1');
                $rencontre->R_score2 = $this->input->post('scor2');
                $this->db->where('R_id', $rencontre->R_id);
                $this->db->update('Rencontre', $rencontre);
                if ($rencontre->R_score1 > $rencontre->R_score2)
                    $equipe = $this->input->post('equ2');
                else
                    $equipe = $this->input->post('equ1');
                $this->Equipe->battue($equipe, $rencontre->R_tour);
                $this->load->view('private/score_ok', $rencontre);
            }
        }
    }

    /* Gestion des mails */

    private function _config_mail() {
        $config['charset'] = 'utf-8';
        // $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->set_newline("<br />");
        $this->email->from('noreply@emse.fr', 'Organisateur du tournoi');
    }

    public function mail_sgc() {
        $this->form_validation->set_rules('sujet', 'Sujet', 'required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('private/email_sgc'); // load the contact form
        } else {
            $subject = $this->input->post('sujet');
            $message = $this->input->post('message');

            $this->_config_mail();
            $this->email->to('sgc@emse.fr');

            $this->email->subject('[PETANQUE] ' . $subject);
            $this->email->message($message);

            if ($this->email->send()) {
                $data['mel'] = 'sgc@emse.fr';
                $data['msg'] = "your email has now been sent.";
                $data['deb'] = $this->email->print_debugger();
                $this->load->view('private/email_ok', $data);
            } else {
                echo $this->email->print_debugger();
            }
        }
    }

    public function mail_joueurs($en_rencontre = FALSE) {
        $this->form_validation->set_rules('sujet', 'Sujet', 'required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $data['en_rencontre'] = $en_rencontre;
            $this->load->view('private/email', $data); // load the contact form
        } else {
            if ($en_rencontre) {
                $data['mel'] = $this->Rencontre->get_mails();
            } else {
                $data['mel'] = $this->Joueur->get_mails();
            }
            $subject = $this->input->post('sujet');
            $message = $this->input->post('message');

            $this->_config_mail();
            $this->email->to($data['mel']);
            $this->email->cc('lalevee@emse.fr');

            $this->email->subject('[PETANQUE] ' . $subject);
            $this->email->message($message);

            if ($this->email->send()) {
                $data['msg'] = "your email has now been sent.";
                $data['deb'] = $this->email->print_debugger();
                $this->load->view('private/email_ok', $data);
            } else {
                echo $this->email->print_debugger();
            }
        }
    }

    public function mail_apayer() {
        $data['mel'] = $this->Joueur->get_apayer();
        $this->_config_mail();
        $this->email->to($data['mel']);
        $this->email->cc('lalevee@emse.fr, camilloni@emse.fr, bruno@emse.fr');
        $this->email->subject('[PETANQUE] Paiement inscription tournoi');
        $this->email->message("Bonjour,\n\nSauf erreur de notre part, vous n'avez pas réglé l'inscription du tournoi, qui est de 3 €.\n\nPour information, les sommes récoltées nous permettent d'acheter des lots pour les gagnants.\n\nVous pouvez régler cette somme auprès de Thierry Camilloni ou Barbara Bruno.\n\nMerci d'avance.\n\nLes organisateurs.\n");

        if ($this->email->send()) {
            $data['msg'] = "your email has now been sent.";
            $data['deb'] = $this->email->print_debugger();
            $this->load->view('private/email_ok', $data);
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function mail_choix_equipe() {
        $data['mel'] = $this->Joueur->get_choix_equipe();
        $this->_config_mail();
        $this->email->to($data['mel']);
//        $this->email->to('lalevee@emse.fr');
        $this->email->cc('lalevee@emse.fr');
        $this->email->subject("[PETANQUE] Constitution d'équipe");
        $this->email->message("Bonjour,\n\nLors de votre inscription, vous avez choisi de constituer votre équipe.\n\nPour inscrire cette équipe, l'un des membres doit répondre à ce message, en donnant les noms des membres et le nom de l'équipe.\n\nMerci d'avance.\n\nLes organisateurs.\n");

        if ($this->email->send()) {
            $data['msg'] = "your email has now been sent.";
            $data['deb'] = $this->email->print_debugger();
            $this->load->view('private/email_ok', $data);
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function testmail() {
        $this->_config_mail();
        $this->email->from('lalevee@emse.fr', 'Philippe Lalevée');
        $this->email->to('lalevee@emse.fr');
        $this->email->cc('philippe.lalevee@free.fr');
        $this->email->bcc('philippe.lalevee@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('<b>Testing</b> é the email class.');

        if ($this->email->send()) {
            echo 'Le message a été correctement envoyé';
        }
        echo $this->email->print_debugger();
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
