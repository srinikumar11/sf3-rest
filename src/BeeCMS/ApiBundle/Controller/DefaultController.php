<?php

namespace BeeCMS\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseApiController
{
    public function indexAction(Request $request)
    {
        $data = [
            'api_version' => 'v1',
            'data' => [
                'message' => 'hellow world from version 1'
            ]
        ];
        $view = $this->view($data, Response::HTTP_OK);
        return $view;
    }

    public function versionAction(Request $request)
    {
        $data = ['api_version' => 'v1'];
        $view = $this->view($data, Response::HTTP_OK);
        return $view;
    }
}
