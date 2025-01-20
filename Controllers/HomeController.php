<?php

require_once 'Models/Course.php';

class HomeController {
    public function index() {
        $courses = Course::getAllCourses();
        require 'Views/home.php';
    }
}
