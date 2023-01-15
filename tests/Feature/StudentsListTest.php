<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\{Course, Student, StudentsPerCourse};

class StudentsListTest extends TestCase
{

    use RefreshDatabase;

    public function test_students_lists_can_be_fetched()
    {

        // Preparation / Prepare
        // Let's use some data data from the document for test purposes
        $studentsList = "1605092601799,Melvin,Levine,libero@ultricessitamet.co.uk
        1627060401499,Elaine,Donaldson,Morbi.vehicula@imperdiet.ca
        1643020941699,Joy,Carey,scelerisque.lorem@dolordolortempus.ca";

        // Explode the array looking for the EOL char
        $studentsList = preg_split('/\r\n|\r|\n/', $studentsList);

        // Create an example course
        $course = Course::create([
            "name" => "Example Course"
        ]);

        // Iterate elements so we can convert into an array with the properties to insert in the table
        foreach ($studentsList as $element) {
            $element = explode(',', $element);
            $student = Student::create([
                'id'            => intval($element[0]),
                'first_name'    => $element[1],
                'last_name'     => $element[2],
                'email'         => $element[3]
            ]);

            $studentCourse = StudentsPerCourse::create([
                "student_id" => $student->id,
                "course_id" => $course->id,
            ]);
        }

        // Action / Perform
        $response = $this->getJson(route('students.list', 1));

        // Assertion / predict
        $this->assertEquals(3, count($response->json()));
    }
}
