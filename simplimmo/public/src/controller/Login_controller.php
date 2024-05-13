<?php

namespace Simplimmo\controller;

use Simplimmo\model\Register_model;

class Login_controller
{
    public function showForm()
    {
        include __DIR__ . '/../view/login_form.php';
    }


}
