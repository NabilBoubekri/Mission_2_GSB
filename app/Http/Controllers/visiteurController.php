<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use MyDate;
use PdoGsb;

class visiteurController extends Controller
{
    function afficherVisiteurs(Request $request)
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            $lstVisiteurs = PdoGsb::getVisiteur();
            $view = view('listevisiteurs')
                ->with('lstVisiteurs', $lstVisiteurs)
                ->with('visiteur', $visiteur);
            return $view;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function modifierVisiteur(Request $request)
    {
        if (session('visiteur') != null) {
            $idVisiteur = $request['id'];
            $visiteur = session('visiteur');
            $infoVisiteur = PdoGsb::getUnVisiteur($idVisiteur);
            $view = view('modifierVisiteur')
                ->with('idVisiteur', $idVisiteur)
                ->with('infoVisiteur', $infoVisiteur)
                ->with('visiteur', $visiteur);
            return $view;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function modifierVisiteur2(Request $request)
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            $idVisiteur = $request['id'];
            $nom = $request["nom"];
            $prenom = $request["prenom"];
            $login = $request["login"];
            $mdp = $request["mdp"];
            $adresse = $request["adresse"];
            $cp = $request["cp"];
            $ville = $request["ville"];
            $dateEmbauche = $request["dateEmbauche"];
            PdoGsb::modifVisiteur($idVisiteur, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche);
            $lstVisiteurs = PdoGsb::getVisiteur();
            $view = view('listevisiteurs')
                ->with('lstVisiteurs', $lstVisiteurs)
                ->with('visiteur', $visiteur);
            return $view;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function suppVisi(Request $request)
    {
        if (session('visiteur') != null) {
            $idVisiteur = $request['id'];
            $visiteur = session('visiteur');
            PdoGsb::supprimerLigneFraisForfais($idVisiteur);
            PdoGsb::supprimerFicheFrais($idVisiteur);
            PdoGsb::supprimerVisiteur($idVisiteur);
            $lstVisiteurs = PdoGsb::getVisiteur();
            $view = view('listevisiteurs')
                ->with('idVisiteur', $idVisiteur)
                ->with('lstVisiteurs', $lstVisiteurs)
                ->with('visiteur', $visiteur);
            return $view;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function ajouterVisiteur(Request $request)
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            return view('ajouterVisiteur')->with('visiteur', $visiteur);
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function ajouterVisiteur2(Request $request)
    {
        if (session('visiteur') != null) {
            $idVisiteur = $request['id'];
            $nom = $request["nom"];
            $prenom = $request["prenom"];
            $login = $request["login"];
            $mdp = $request["mdp"];
            $adresse = $request["adresse"];
            $cp = $request["cp"];
            $ville = $request["ville"];
            $dateEmbauche = $request["dateEmbauche"];
            $visiteur = session('visiteur');
            PdoGsb::ajtVisiteur($idVisiteur, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche);
            $lstVisiteurs = PdoGsb::getVisiteur();
            $view = view('listevisiteurs')
                ->with('idVisiteur', $idVisiteur)
                ->with('lstVisiteurs', $lstVisiteurs)
                ->with('visiteur', $visiteur);
            return $view;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function pdf(Request $request)
    {
        if (session('visiteur') != null){
            $idVisiteur = $request['id'];
            $visiteur = PdoGsb::getUnVisiteur($idVisiteur);
            $pdf = PDF::loadHTML(
                "<li>Nom : $visiteur[nom]</li>
                <li>Prénom : $visiteur[prenom]</li>
                <li>Id : $visiteur[id]</li>
                <li>Adresse : $visiteur[adresse]</li>
                <li>Code Postal : $visiteur[cp]</li>
                <li>Ville : $visiteur[ville]</li>
                <li>Date d'embauche : $visiteur[dateEmbauche]</li>");
            return $pdf->download('invoice.pdf');
        }
    }
}
