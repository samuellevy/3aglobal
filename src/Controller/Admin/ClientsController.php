<?php
namespace App\Controller\Admin;

use App\Controller\AppControllerAdmin;

/**
* Clients Controller
*
* @property \App\Model\Table\ClientsTable $Clients
*/
class ClientsController extends AppController
{

  /**
  * Index method
  *
  * @return \Cake\Network\Response|null
  */
  public function index()
  {
    $this->paginate = [
      'contain' => ['Affiliates']
    ];
    $clients = $this->paginate($this->Clients);


    //die(debug($clients));
    $this->set(compact('clients'));
    $this->set('_serialize', ['clients', 'affiliates']);
  }

  /**
  * View method
  *
  * @param string|null $id Client id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function view($id = null)
  {
    $client = $this->Clients->get($id, [
      'contain' => []
    ]);

    $this->set('client', $client);
    $this->set('_serialize', ['client']);
  }

  /**
  * Add method
  *
  * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
  */
  public function add()
  {
    $client = $this->Clients->newEntity();
    $affiliates = $this->Clients->Affiliates->find('list', ['limit' => 200]);

    if ($this->request->is('post')) {
      $client = $this->Clients->patchEntity($client, $this->request->getData());
      if ($this->Clients->save($client)) {
        $this->Flash->success(__('The client has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The client could not be saved. Please, try again.'));
    }
    $this->set(compact('client', 'affiliates'));
    $this->set('_serialize', ['client']);
  }

  /**
  * Edit method
  *
  * @param string|null $id Client id.
  * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
  public function edit($id = null)
  {
    $client = $this->Clients->get($id, [
      'contain' => ['Marcas', 'Offices']
    ]);
    $affiliates = $this->Clients->Affiliates->find('list', ['limit' => 200]);
    //die(debug($client));
    if ($this->request->is(['patch', 'post', 'put'])) {
      $client = $this->Clients->patchEntity($client, $this->request->getData());
      if ($this->Clients->save($client)) {
        $this->Flash->success(__('The client has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The client could not be saved. Please, try again.'));
    }
    $this->set(compact('client', 'affiliates'));
    $this->set('_serialize', ['client']);
  }

  /**
  * Delete method
  *
  * @param string|null $id Client id.
  * @return \Cake\Network\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $client = $this->Clients->get($id);
    if ($this->Clients->delete($client)) {
      $this->Flash->success(__('The client has been deleted.'));
    } else {
      $this->Flash->error(__('The client could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  public function funcao($nome){

  }
}
