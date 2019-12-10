<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/FaspayXMLResponse.php';
require_once __DIR__ . '/FaspayTraceSuccessXMLResponse.php';

/**
 * Description of NotifyHandler
 *
 * @author hilmananwarsah
 */
class NotifyHandler {

    function handle() {


        $raw = file_get_contents('php://input');

        $service = new Sabre\Xml\Service();
        $service->elementMap = [
            "faspay" => FaspayXMLResponse::class
        ];

        $d = $service->parse($raw);
        $r = new FaspayTraceSuccessXMLResponse($d->trx_id, $d->merchant_id, $d->bill_no);
        $service->classMap = [
            "faspay" => FaspayTraceSuccessXMLResponse::class
        ];


        return $service->write("faspay", $r);
    }

}

class Q implements Sabre\Xml\XmlSerializable, Sabre\Xml\XmlDeserializable {

    public $title;
    public $link;
    public $id;
    public $updated;
    public $summary;

    function xmlSerialize(Sabre\Xml\Writer $writer) {
        $ns = '';

        $writer->write([
            $ns . 'title' => $this->title,
                [
                'name' => $ns . 'link',
                'attributes' => ['href' => $this->link]
            ],
            $ns . 'updated' => $this->updated,
            $ns . 'id' => 'urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344efa6a',
            $ns . 'summary' => 'Some text.'
        ]);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader) {
        echo "deser";
        $object = new Q();
        $keyValue = \Sabre\Xml\Deserializer\keyValue($reader);
        if (isset($keyValue['a'])) {
            $object->a = $keyValue['a'];
        }
        return $object;
    }

//    static function xmlDeserialize(Reader $reader) {
//    }
}
