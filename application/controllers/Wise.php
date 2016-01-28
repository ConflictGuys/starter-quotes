<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-01-28
 * Time: 1:33 AM
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * This function is used for link #8 and uses regular routing.
     */
    function bingo()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get(6);
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }
}