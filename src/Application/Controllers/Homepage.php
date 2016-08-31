<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Yan\Application\Controllers;

use Http\Request;
use Http\Response;

class Homepage
{
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    
    public function show() 
    {
        $this->response->setContent('Homepage');
    }
    
    public function test() 
    {
        $content = '<h1>Hello World</h1>';
        $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        echo $content;
    }
}
