<?php
/**
 * Created by PhpStorm.
 * User: Piyotr-K
 * Date: 2018-02-12
 * Time: 10:20 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Application
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $arr = array('Scenario' => 'Halo Customizer');

        header('Content-Type: application/json');
        echo json_encode( $arr );
    }

    public function category($key)
    {
        if (is_null($key))
        {
            // return all
        }
        else
        {
            // return $key
        }
    }

    public function catalog($key)
    {
        if (is_null($key))
        {
            // return all
        }
        else
        {
            // return $key
        }
    }

    public function bundle($key)
    {
        if (is_null($key))
        {
            // return all
        }
        else
        {
            // return $key
        }
    }

}
