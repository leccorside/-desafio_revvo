<?php

class Course {
    public static function getAllCourses() {
        $data = file_get_contents('data/courses.json');
<<<<<<< HEAD
        $courses = json_decode($data, true);
        return is_array($courses) ? $courses : [];
=======
        return json_decode($data, true);
>>>>>>> 9ab2e4cba9df0870554b2d662d586f795552c07b
    }
}
