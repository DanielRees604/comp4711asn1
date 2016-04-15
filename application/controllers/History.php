<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


class History extends Application
{
    //constructor
    function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
            $this->data['pagebody'] = 'history';
            $this->data['stocks'] = $this->Stocks->getData("http://bsx.jlparry.com/data/stocks");

            $stock = $this->Moves->getData("http://bsx.jlparry.com/data/movement/1");

            $this->data['title'] = "Recent History";
            $this->data['stocktype'] = $this->Moves->getDataForName("http://bsx.jlparry.com/data/movement", $stock[0]['code']);
            $this->render();
    }
    
    public function loadStocks($stock)
    {
        $this->data['pagebody'] = 'history';
        $this->data['title'] = $stock . " History";
        $this->data['stocktype'] = $this->Moves->getDataForName("http://bsx.jlparry.com/data/movement", $stock);
        $this->data['translist'] = $this->Trans->some("Stock", $stock);
        $this->data['stocks'] = $this->Stocks->getData("http://bsx.jlparry.com/data/stocks");
        $this->data['movelist'] = $this->Moves->all();
        
        $this->render();
    }
}

?>