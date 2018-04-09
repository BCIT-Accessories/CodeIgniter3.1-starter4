<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends Application
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
        // build navbar
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
        $this->data['pagetitle'] = "Catalogue";
        $this->data['pagebody'] = 'CataloguePage';

        $subset = $this->equipment->some('categoryId','0');
        $subset2 = $this->equipment->some('categoryId','2');
        $subset3 = $this->equipment->some('categoryId','1');
        $subset4 = $this->equipment->some('categoryId','4');
        $this->data['subset'] = $subset;
        $this->data['subset2'] = $subset2;
        $this->data['subset3'] = $subset3;
        $this->data['subset4'] = $subset4;
        $this->render();
    }

}