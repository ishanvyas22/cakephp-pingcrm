<?php
namespace App\Controller;

use Exception;
use App\Controller\AppController;

/**
 * Dashboard Controller
 */
class DashboardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
    }

    /**
     * Internal Server Error method
     *
     * @return \Cake\Http\Response|null
     */
    public function internalServerError()
    {
        throw new Exception('500 error!');
    }
}
