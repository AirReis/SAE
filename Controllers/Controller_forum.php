<?php
session_start();

class Controller_forum extends Controller {

    public function action_default()
    {
        $this->action_forum();
    }

    public function action_forum()
    {   
        $m = Model::getModel();
        $data = [];
        $data = [
        'publications' => $m->TousLesPublications(),
        ];
        $this->render("forum", $data);
    }

    public function action_publicationForum()
    {
        

        $titre = $_POST['exp_titre'];
        $description = $_POST['exp_description'];
        $utilisateurID = $_SESSION['idUtilisateur'];
        $cheminImage = '';

        if (isset($_FILES['exp_image']) && $_FILES['exp_image']['error'] == 0) {
            $dossierCible = 'uploads/';
            $nomFichierOriginal = $_FILES['exp_image']['name'];
            $nomFichierNettoye = preg_replace("/[^a-zA-Z0-9.]+/", "-", $nomFichierOriginal);
            $cheminImage = $dossierCible . uniqid() . '-' . $nomFichierNettoye;

            if (!is_dir($dossierCible)) {
                mkdir($dossierCible, 0755);
            }

            if (!move_uploaded_file($_FILES['exp_image']['tmp_name'], $cheminImage)) {
                die('Erreur lors du téléchargement de l\'image.');
            }
        }

        $m = Model::getModel();

        $insertion = $m->InsertionPublication($utilisateurID, $titre, $description,$cheminImage);
        if ($insertion) {
            $this->action_forum();
        } else {
            echo "Échec de la publication.";
        }
    }
}

?>
  