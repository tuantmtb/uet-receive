<?php

namespace App\Http\Controllers;

use App\Clazz;
use App\Course;
use App\Student;
use App\Term;
use Artisaninweb\SoapWrapper\SoapWrapper;
use File;
use Illuminate\Http\Request;
use Storage;

class SoapParserController extends Controller
{

    /**
     * @var SoapWrapper
     */
    protected $soapWrapper;

    /**
     * SoapController constructor.
     *
     * @param SoapWrapper $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    public function parse()
    {
//        $this->soapWrapper->add('MainManagementSoap', function ($service) {
//            $service
//                ->wsdl('http://112.137.129.98/qlgd/MainManagement.asmx?WSDL')
//                ->trace(true)
//                ->classmap([
//                    GetAllClassInfo::class
//                ]);
//        });
//
//        // Without classmap
//        $response = $this->soapWrapper->call('MainManagementSoap.GetAllClassInfo', []);
//
//
//        $result = $response->GetAllClassInfoResult;
//        var_dump($response);
////        dd(gettype($result));
////        dd($result);
//        foreach ($result as $clazz) {
//            dd($clazz);
//
//        }


        /**
         *
         *
         * {
         * "no": "1",
         * "code": "12020001", XXX
         * "fullname": "Chu Tâm Anh", XXX
         * "date": "25/3/1994", XXX
         * "class": "QH-2012-I/CQ-C-A-C", XXX
         * "course_code": "INT3307 1", XXX
         * "course_name": "An toàn và an ninh mạng", XXX
         * "group": "CL",
         * "credit": "3", XXX
         * "note": "ĐK lần đầu",
         * "term": "021" XXXX
         * }
         *
         */

        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $json_path = $storagePath . "dump/example.json";
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
                $course = $courseFind;
            } else {
                // not found -> create new
                $course = Course::create([
                    'code' => $result["course_code"],
                    'name' => $result["course_name"],
                    'credit' => $result["credit"],
                    'term_id' => $term_ky1->id
                ]);
            }

            $student = new Student();
            $studentFind = Student::where('code', '=', $result["code"])->get();
            if ($studentFind->count()) {
                //found
                $student = $studentFind;
            } else {
                $student = Student::create([
                    'code' => $result["code"],
                    'name' => $result["fullname"],
                    'date' => $result["date"],
                    'clazz_id' => $clazz->id
                ]);
            }


        }
    }

}

class GetAllClassInfo
{
    protected $ClsId;
    protected $ClsName;
}

