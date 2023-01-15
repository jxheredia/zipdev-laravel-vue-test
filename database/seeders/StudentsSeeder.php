<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Course, Student, StudentsPerCourse};

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the data from the document to the string
        $studentsList = "Student ID,First Name,Last Name,Email
        1605092601799,Melvin,Levine,libero@ultricessitamet.co.uk
        1627060401499,Elaine,Donaldson,Morbi.vehicula@imperdiet.ca
        1699112687399,Roth,Hinton,lorem@Nullamscelerisque.net
        1651061329999,Evelyn,Atkinson,tempus.eu@dolorelitpellentesque.com
        1669031424299,Jackson,Gould,lorem@orci.com
        1610122466699,Amena,Winters,eu.lacus@Uttincidunt.org
        1660020239499,Giacomo,James,Duis.mi.enim@mi.com
        1664110352499,Nathan,Moran,eget.lacus@erosNam.net
        1683092555899,Vivian,Workman,fringilla@sagittis.net
        1607102510699,Amal,Cervantes,aliquet@in.co.uk
        1656061966999,Octavius,Wade,pede@mus.ca
        1667081298699,Kenneth,Fletcher,in.consequat@dignissimtemporarcu.org
        1697062419499,Malik,Silva,Suspendisse@commodo.com
        1656081805699,Xanthus,Mcgowan,ridiculus.mus.Proin@Maurisvestibulum.org
        1638092980799,Kay,Marquez,In@blanditviverraDonec.co.uk
        1691091750799,Oleg,Koch,natoque.penatibus.et@Quisqueporttitor.com
        1611010296699,Cathleen,Greene,semper@facilisisfacilisismagna.ca
        1605031215599,Naomi,Ferguson,euismod.mauris@vulputateeu.net
        1651092040799,Chadwick,Allen,enim@semper.co.uk
        1611112931699,Jennifer,Stevenson,sollicitudin.adipiscing@Aenean.com
        1688110873699,Brent,Mcneil,ac.arcu@Nuncsollicitudincommodo.net
        1665101843499,Otto,Hart,elementum@Maurisvestibulum.org
        1653062608899,Victor,Mcconnell,sem.Nulla@Quisque.co.uk
        1695092204299,Branden,Morgan,Nulla.facilisis.Suspendisse@vitae.ca
        1641010876399,Caryn,Reid,Aliquam.ornare.libero@adlitoratorquent.com
        1609062069499,Wayne,Pennington,bibendum@metus.com
        1687072131299,Xanthus,Massey,semper@odio.net
        1611102284199,Ahmed,Galloway,eget.ipsum.Donec@laoreetlectusquis.co.uk
        1691060523599,Willa,Wagner,at@interdumNuncsollicitudin.edu
        1643020941699,Joy,Carey,scelerisque.lorem@dolordolortempus.ca";

        // Explode the array looking for the end line char
        $studentsList = preg_split('/\r\n|\r|\n/', $studentsList);
        
        // Remove the first position of the array (Header)
        array_shift($studentsList);

        $course = Course::create([
            "name" => "Example Course"
        ]);

        // Iterate elements to explode into an array with the properties to insert in the table
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
    }
}
