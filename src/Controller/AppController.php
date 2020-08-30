<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Inertia\Controller\InertiaResponseTrait;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 */
class AppController extends Controller
{
    use InertiaResponseTrait;

    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
    }
}
