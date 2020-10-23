<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index()
    {
        if (isset($description)) {
            echo $description;
        }

        if (!empty($info)) {
            echo $info;
        }
    }
}