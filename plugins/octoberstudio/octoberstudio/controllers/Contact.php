<?php namespace OctoberStudio\Octoberstudio\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contact extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'all' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OctoberStudio.Octoberstudio', 'content');
    }
}
