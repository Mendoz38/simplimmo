<?php

namespace Simplimmo\controller;

use Simplimmo\model\Register_model;

class Register_controller
{
    public function showForm()
    {
        include __DIR__ . '/../view/register_form.php';
    }

    public function processForm()
    {
        $formModel = new Register_model();
        $formData = $_POST;

        echo "<br />Mail: " . $formData['mail'] . "<br>";

        // Hasher le mot de passe
        $formData['password'] = md5($formData['password']);

        // Vérifier si l'email existe déjà
        if ($formModel->checkEmailExists($formData['mail'])) {
            echo "Cet email est déjà utilisé. Veuillez choisir un autre.";
            $formController = new Register_controller();
            $formController->showForm();
            return;
        } else {
            $success = $formModel->insertUser($formData);
        }

        if ($success) {
            //echo "<script>window.location.href = 'success.php';</script>";
            echo "SUUUUCCCCEEEESSSSS";
            exit();
        } else {
            echo "Echec de l'enregistrement";
        }
    }


}
