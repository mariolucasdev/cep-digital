<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mariolucas\CepDigital\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTest
     */
    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $expect)
    {
        $result = new Search();
        $result = $result->getAddressFromZipCode($input);

        $this->assertEquals($expect, $result);
    }

    public static function dadosTest()
    {
        return [
            "Araripina" => [
                "56280000",
                [
                    "cep" => "56280-000",
                    "logradouro" => "",
                    "complemento" => "",
                    "bairro" => "",
                    "localidade" => "Araripina",
                    "uf" => "PE",
                    "ibge" => "2601102",
                    "gia" => "",
                    "ddd" => "87",
                    "siafi" => "2321"
                ]
            ],
            "Endereço Qualquer" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}
