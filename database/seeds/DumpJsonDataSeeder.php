<?php

use Illuminate\Database\Seeder;

use App\Clazz;
use App\Course;
use App\Student;
use App\Term;

class DumpJsonDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /**
         *
         *
         * {
         * "no": "1",
         * "code": "12020001", XXX
         * "fullname": "Chu Tâm Anh", XXX
         * "date": "25/3/1994", TODO: update time
         * "class": "QH-2012-I/CQ-C-A-C", XXX
         * "course_code": "INT3307 1", XXX
         * "course_name": "An toàn và an ninh mạng", XXX
         * "group": "CL",
         * "Credit": "3", XXX
         * "note": "ĐK lần đầu",
         * "term": "021" XXXX
         * }
         *
         */

        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $json_path = $storagePath . "dump/raw_data.json";
//        $json_data = File::get($json_path);
        $results = json_decode(file_get_contents($json_path), true);
//        dd($results);
        $term_ky1 = Term::firstOrCreate(['name' => "Học kỳ 1 năm 2016-2017", 'termID' => '021']);
        foreach ($results as $result) {
            $clazz = Clazz::firstOrCreate(['name' => $result["class"]]);


            $course = new Course();
            $courseFind = Course::where('code', '=', $result["course_code"])->get();
            if ($courseFind->count()) {
                //found
                $course = $courseFind->first();
            } else {
                // not found -> create new
                $course = Course::create([
                    'code' => $result["course_code"],
                    'name' => $result["course_name"],
                    'credit' => $result["Credit"],
                    'term_id' => $term_ky1->id
                ]);
            }


            $student = new Student();
            $studentFind = Student::where('code', '=', $result["code"])->get();
            if ($studentFind->count()) {
                //found
                $student = $studentFind->first();
            } else {
                $student = Student::create([
                    'code' => $result["code"],
                    'name' => $result["fullname"],
//                    'date' => $date,
                    'clazz_id' => $clazz->id
                ]);
            }
//            if ($course) {
//                $student->assignCourse($course);
//            }
            if ($student) {
                $course->assignStudent($student);
            }
        }
    }
}
