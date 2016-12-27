<?php

namespace App\Http\Controllers;

use App\Clazz;
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
         * "code": "12020001",
         * "fullname": "Chu Tâm Anh",
         * "date": "25/3/1994",
         * "class": "QH-2012-I/CQ-C-A-C",
         * "course_code": "INT3307 1",
         * "course_name": "An toàn và an ninh mạng",
         * "group": "CL",
         * "credit": "3",
         * "note": "ĐK lần đầu",
         * "term": "021"
         * }
         *
         */

        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $json_path = $storagePath . "dump/example.json";
//        $json_data = File::get($json_path);
        $results = json_decode(file_get_contents($json_path), true);
//        dd($results);
        foreach ($results as $result) {
            Clazz::findOrNew([
                'name' => $result["class"]
            ]);
        }
    }

}

class GetAllClassInfo
{
    protected $ClsId;
    protected $ClsName;
}

