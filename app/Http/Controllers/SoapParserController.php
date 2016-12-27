<?php

namespace App\Http\Controllers;

use App\Clazz;
use App\Course;
use App\Student;
use App\Term;
use Artisaninweb\SoapWrapper\SoapWrapper;
use DateTime;
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

    }

}

class GetAllClassInfo
{
    protected $ClsId;
    protected $ClsName;
}

