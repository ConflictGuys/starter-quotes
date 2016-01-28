<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 2016-01-27
 * Time: 1:18 PM
 */
class Last extends Application {

    function __construct()
    {
        parent::__construct();
    }

    /**
     * This function is associated with the 'last' link nav-bar button and loads
     * the last quote on the page, will use wild card routing
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->last();
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

}