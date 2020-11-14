<?php
namespace App\Controller;

use App\Controller\AppController;
use Exception;

/**
 * Dashboard Controller
 */
class DashboardController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
    }

    /**
     * Internal Server Error method
     *
     * @return void
     */
    public function internalServerError()
    {
        throw new Exception('500 error!');
    }
}
