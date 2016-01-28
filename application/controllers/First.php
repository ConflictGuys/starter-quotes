<?php
/**
 * Created by PhpStorm.
 * User: Monet
 * Date: 1/27/2016
 * Time: 11:43 AM
 */

class First extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------


    /**
     * Resolves broken link on #1 that is on the menu navigation bar
     * that points to /first which use normal routing to link to the page.
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->first();
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

    /**
     * This function is used for link #3 and uses wildcard routing.
     */
    function zzz()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get(1);
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

    /** This function is associated with the top right author image, and loads
     *  their single quote view using wild card routing.
     */
    function gimme($id)
    {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get($id);
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */