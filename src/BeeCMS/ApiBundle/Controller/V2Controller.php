<?php
/**
 * Created by PhpStorm.
 * User: srinivasankumar
 * Date: 24/12/16
 * Time: 12:26 PM
 */

namespace BeeCMS\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class V2Controller extends BaseApiController
{
    public function indexAction(Request $request)
    {
        $data = [
            'api_version' => 'v2',
            'data' => [
                'message' => 'hellow world from version 2'
            ]
        ];
        $view = $this->view($data, Response::HTTP_OK);

        return $view;
    }
}