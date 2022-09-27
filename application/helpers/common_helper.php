<?php

use Carbon\Carbon;

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('send_wablas')) {
    function send_wablas($data = array(), $debug = false)
    {
        $response = false;

        if ($data) {
            $fields = $data['data'];
            $endpoint = $data['endpoint'];

            $curl = curl_init();
            $domain_api = 'https://solo.wablas.com';
            $token = '57VXytUgAlkVVAnHGoecY1RDmpxYMTLOFjQBjvBuKZX0JzZ32MyMyaM02Ho89EyJ';

            curl_setopt(
                $curl,
                CURLOPT_HTTPHEADER,
                array(
                    "Authorization: $token",
                )
            );

            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($fields));
            curl_setopt($curl, CURLOPT_URL, $domain_api . "/api/" . $endpoint);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            $result = curl_exec($curl);
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            if ($http_code == 200) {
                $response = true;
            }

            if ($debug == true) {
                $response = json_encode(array(
                    'code' => $http_code,
                    'result' => json_decode($result),
                ));
            }
        }

        return $response;
    }
}

function now_carbon(): Carbon
{
    return Carbon::now('GMT+7')->locale('id');
}