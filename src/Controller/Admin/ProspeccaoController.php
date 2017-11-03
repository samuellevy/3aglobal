<?php
namespace App\Controller\Admin;


/**
 * Prospeccao Controller
 *
 * @property \App\Model\Table\ProspeccaoTable $Prospeccao
 */
class ProspeccaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clientes']
        ];
        $prospeccoes = $this->paginate($this->Prospeccao);

        $this->set(compact('prospeccoes'));
        $this->set('_serialize', ['prospeccoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Prospeccao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospeccao = $this->Prospeccao->get($id, [
            'contain' => ['Users', 'Clientes', 'Mensagem', 'Mensagem.Users']
        ]);

        $this->set('prospeccao', $prospeccao);
        $this->set('_serialize', ['prospeccao']);

        //die(debug($prospeccao->mensagem));
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospeccao = $this->Prospeccao->newEntity();
        if ($this->request->is('post')) {

            $prospeccao = $this->Prospeccao->patchEntity($prospeccao, $this->request->getData());
            $prospeccao->user_id = $this->Auth->user('id');
            $prospeccao->status = "iniciou_captacao";

            if ($this->Prospeccao->save($prospeccao)) {

              $mensagem = $this->Prospeccao->Mensagem->newEntity();

              $mensagem->user_id = $this->Auth->user('id');
              $mensagem->prospeccao_id = $prospeccao->id;
              $mensagem->direcao = "out";
              $mensagem->body = $prospeccao->description;
              $mensagem->action = "iniciou_captacao";

              if ($this->Prospeccao->Mensagem->save($mensagem)){
                $this->Flash->success(__('The prospeccao has been saved.'));
                return $this->redirect(['action' => 'view', $prospeccao->id]);
              }




            }
            $this->Flash->error(__('The prospeccao could not be saved. Please, try again.'));
        }
        $users = $this->Prospeccao->Users->find('list', ['limit' => 200]);
        $clientes = $this->Prospeccao->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('prospeccao', 'users', 'clientes'));
        $this->set('_serialize', ['prospeccao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospeccao id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospeccao = $this->Prospeccao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospeccao = $this->Prospeccao->patchEntity($prospeccao, $this->request->getData());
            if ($this->Prospeccao->save($prospeccao)) {
                $this->Flash->success(__('The prospeccao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospeccao could not be saved. Please, try again.'));
        }
        $users = $this->Prospeccao->Users->find('list', ['limit' => 200]);
        $clientes = $this->Prospeccao->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('prospeccao', 'users', 'clientes'));
        $this->set('_serialize', ['prospeccao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospeccao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospeccao = $this->Prospeccao->get($id);
        if ($this->Prospeccao->delete($prospeccao)) {
            $this->Flash->success(__('The prospeccao has been deleted.'));
        } else {
            $this->Flash->error(__('The prospeccao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /* Response method by Samuel Levy */
    public function response(){
      $mensagem = $this->Prospeccao->Mensagem->newEntity();
      if ($this->request->is('post')) {
          $mensagem = $this->Prospeccao->Mensagem->patchEntity($mensagem, $this->request->getData());
          $mensagem->user_id = $this->Auth->user('id');
          $mensagem->prospeccao_id = $mensagem->data['Data']['prospeccao_id'];
          $mensagem->body = $mensagem->data['Data']['body'];
          $mensagem->direcao = $mensagem->data['Data']['direcao'];
          $mensagem->action = $mensagem->data['Data']['action'];

          $prospeccao = $this->Prospeccao->get($mensagem->prospeccao_id, [
              'contain' => []
          ]);

          if ($this->Prospeccao->Mensagem->save($mensagem)) {
            $prospeccao = $this->Prospeccao->patchEntity($prospeccao, $this->request->getData());
            $prospeccao->id = $prospeccao->data['Data']['prospeccao_id'];
            $prospeccao->status = $prospeccao->data['Data']['action'];

            if ($this->Prospeccao->save($prospeccao)) {
              $this->Flash->success(__('The prospeccao has been saved.'));

              return $this->redirect(['action' => 'view',$mensagem->prospeccao_id]);
            }
          }
          $this->Flash->error(__('The prospeccao could not be saved. Please, try again.'));
      }
    }
}
