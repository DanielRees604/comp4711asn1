<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Moves
 *
 * @author rjgodia
 */
class Moves extends MY_Model
{
    //put your code here
    function __construct()
    {
        parent::__construct('movements','Datetime');
    }
}