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
     * Session object.
     *
     * @var \Cake\Http\Session
     */
    protected $_session = null;

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
        $this->loadComponent('Authentication.Authentication');

        $this->_session = $this->getRequest()->getSession();
    }

    /**
     * beforeFilter hook.
     *
     * @param  \Cake\Event\Event $event The event object.
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->set('errors', []);

        $this->setAuthData();
    }

    /**
     * Sets authentication data into front-end on every request.
     *
     * @return null|void
     */
    private function setAuthData()
    {
        $identity = $this->Authentication->getIdentity();

        if ($identity === null) {
            return null;
        }

        $this->set('auth', [
            'user' => [
                'id' => $identity->get('id'),
                'first_name' => $identity->get('first_name'),
                'last_name' => $identity->get('last_name'),
                'email' => $identity->get('email'),
                'account' => [
                    // TODO: Set account name dynamically
                    'name' => 'test'
                ]
            ]
        ]);
    }
}
