<?php

namespace Mariolucas\CepDigital;

class Search
{
    private const URL_VIA_CEP = 'https://viacep.com.br/ws/';

    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        $get = file_get_contents(self::URL_VIA_CEP . $zipCode . '/json');

        return (array) json_decode($get);
    }
}
