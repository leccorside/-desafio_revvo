<?php

class Course {
    public static function getAllCourses() {
        $data = file_get_contents('data/courses.json');
        return json_decode($data, true);
    }
}
