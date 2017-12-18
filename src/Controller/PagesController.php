<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PagesController extends AppController
{
    public function beforeFilter(Event $event){
      parent::beforeFilter($event);
    }

    public function home(){

    }
    public function network($id=null){
      $this->viewBuilder()->setLayout('Site.network');

      $this->loadModel('Affiliates');
      $affiliate = $this->Affiliates->get($id, [
          'contain' => ['Files', 'Marcas', 'Offices', 'Clients', 'Clients.Files']
      ]);

      // die(debug($affiliate));
      $this->set('affiliate', $affiliate);
      $this->set('_serialize', ['affiliate']);
    }
}
