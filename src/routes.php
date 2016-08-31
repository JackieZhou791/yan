<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    ['GET', '/', ['Yan\Application\Controllers\Homepage', 'show']],
    ['GET', '/test', ['Yan\Application\Controllers\Homepage', 'test']],
];