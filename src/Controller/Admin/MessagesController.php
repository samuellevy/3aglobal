<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class MessagesController extends AppController
{
  public function index(){
    $messages = $this->paginate($this->Messages, [
      'contain'=>['Affiliates'],
      'order'=>['created'=>'DESC']]);
    $this->set(compact('messages'));
    $this->set('_serialize', ['messages']);
    $this->loadModel('Institutes');
    //die(debug($messages));
    // $institutes = $this->Institutes->find('all');
    // $institutes = $institutes->all();
    // $this->set(compact('institutes'));
    // $this->set('_serialize', ['']);
  }

  public function delete($id = null){
    $this->request->allowMethod(['post', 'delete']);
    $message = $this->Messages->get($id);
    if ($this->Messages->delete($message)) {
      $this->Flash->success(__('The message has been deleted.'));
    } else {
      $this->Flash->error(__('The message could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  public function read($id = null)
  {
    $message = $this->Messages->get($id, ['contain'=>['Affiliates']]);
    $lida=1;
    $message->status=$lida;
    $this->set('message', $message);
    $this->set('_serialize', ['message']);
    // die(debug($message));
    // $this->loadModel('Institutes');
    // $institutes = $this->Institutes->find('all');
    // $institutes = $institutes->all();
    // $this->set(compact('institutes'));
    // $this->set('_serialize', ['institutes']);
  }

  public function return(){
    return $this->redirect(['action' => 'index']);
  }
}
