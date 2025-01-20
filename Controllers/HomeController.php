<?php

require_once 'Models/Course.php';

class HomeController {
    public function index() {
<<<<<<< HEAD
        // Obter todos os cursos
        $allCourses = Course::getAllCourses();

        // Obter os 3 últimos cursos cadastrados
        $latestCourses = array_slice($allCourses, -3);

        // Passar as variáveis necessárias para a view
        $courses = $allCourses; // Todos os cursos
=======
        $courses = Course::getAllCourses();
>>>>>>> 9ab2e4cba9df0870554b2d662d586f795552c07b
        require 'Views/home.php';
    }
}
