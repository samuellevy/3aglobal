<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;

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

    $this->set('affiliate', $affiliate);
    $this->set('_serialize', ['affiliate']);

    $this->loadModel('Contacts');
    $contact = $this->Contacts->newEntity();

    if ($this->request->is('post')) {
      
      $contact = $this->Contacts->patchEntity($contact, $this->request->getData());

      if ($this->Contacts->save($contact)) {
        $this->Flash->success(__('The contact has been sent.'));

        $email = new Email();
        $email
            ->emailFormat('html')
            ->subject('Message from 3aW')
            ->to('desenvolvimento@3aworldwide.com.br')
            ->addTo($affiliate->email)
            ->addTo('samuel.levy@3aworldwide.com.br')
            ->addTo('vinicius.machado@3aworldwide.com.br')
            ->addTo('affiliates@3aw.com')
            ->from('desenvolvimento@3aworldwide.com.br')
            ->send('Name: ' . $contact['name']."<br>"."E-mail: ".$contact['email']."<br>"."Message: " . $contact['message']);

        return $this->redirect(['action' => 'network',$id]);
      }
      $this->Flash->error(__('The client could not be saved. Please, try again.'));
    }

    $this->set('contact', $contact);
  }
}
