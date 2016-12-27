<?php

namespace App\Http\Controllers;

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


        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $json_path = $storagePath . "dump/example.json";
//        $json_data = File::get($json_path);
        $results = json_decode(file_get_contents($json_path), true);
//        dd($results);
        foreach ($results as $result) {

        }
    }

}

class GetAllClassInfo
{
    protected $ClsId;
    protected $ClsName;
}

