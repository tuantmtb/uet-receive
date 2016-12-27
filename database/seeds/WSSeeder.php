<?php

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Database\Seeder;

class WSSeeder extends Seeder
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


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->soapWrapper->add('Currency', function (Service $service) {
            $service
                ->wsdl('http://112.137.129.98/qlgd/MainManagement.asmx?WSDL')
                ->trace(true);
        });

        // Without classmap
        $response = $this->soapWrapper->call('GetAllTermInfo', []);

        var_dump($response);

    }
}
