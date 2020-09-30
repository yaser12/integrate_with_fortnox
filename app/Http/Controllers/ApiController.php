<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class ApiController extends Controller
{
    use ApiResponser;

public function  showListAllInvoices()
{
    $client = new Client(['base_uri' => 'https://api.fortnox.se']);
    $headers = [
        'Access-Token' => 'e382604f-3d93-4e17-8e90-fe7c452a9fbd',
        'Client-Secret' => 'BBnKANEYTj',
        'Accept'        => 'application/json',
        'Content-Type'        => 'application/json'
    ];
    $res = $client->request('GET', '/2/invoices', [
        'headers' => $headers,'verify' => false
    ]);
    try {
      //  echo $res->getStatusCode();// "200"
      //  echo $res->getHeader('content-type')[0];// 'application/json; charset=utf8'
        print("<pre>".print_r(json_decode( $res->getBody()), JSON_PRETTY_PRINT)."</pre>");
    }
    catch (RequestException $e) {
        echo "HTTP Request failed\n";
    }
}

public function create_invoice()
{
        $client = new Client(['base_uri' => 'https://api.fortnox.se']);
            $headers = [
                'Access-Token' => 'e382604f-3d93-4e17-8e90-fe7c452a9fbd',
                'Client-Secret' => 'BBnKANEYTj',
                'Accept'        => 'application/json',
                'Content-Type'        => 'application/json'
            ];
        $res = $client->request('POST', '/2/invoices', [
            'headers' => $headers,'verify' => false,
            'body' => '{
                          "Invoice": {
                            "CustomerNumber": "3",
                            "InvoiceRows": [
                              {
                                "ArticleNumber": "",
                                "DeliveredQuantity": "10.00"
                              }
                            ]
                          }
                        }',
        ]);
        try {
            echo $res->getStatusCode();// "200"
            echo $res->getHeader('content-type')[0];// 'application/json; charset=utf8'
            print("<pre>".print_r(json_decode( $res->getBody()), JSON_PRETTY_PRINT)."</pre>");
        }
        catch (RequestException $e) {
            echo "HTTP Request failed\n";
        }
}


    public function __construct()
    {
    }
}
