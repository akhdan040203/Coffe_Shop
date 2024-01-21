
<?php

namespace App\Controllers;

use App\Models\MenuModel;

class MenuAdmin extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    // public function index()
    // {
    //     $data['menuadmin'] = $this->menuModel->findAll();

    //     return view('admin/index', $data);
    // }
    public function index()
    {
        $data['menuadmin'] = $this->menuModel->findAll();
        $this->load->view('admin/index.php', $data);
        // return view('admin/index', $data);
    }
}
