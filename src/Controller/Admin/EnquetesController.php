<?php
namespace App\Controller\Admin;

class EnquetesController extends AppController
{

    public function initialize(){
        parent::initialize();

        $this->loadComponent('Upload');
    }
    public function index()
    {
        $enquetes = $this->paginate($this->Enquetes);

        $this->set(compact('enquetes'));
        $this->set('_serialize', ['enquetes']);
    }

    public function view($id = null)
    {
        $enquete = $this->Enquetes->get($id, [
            'contain' => ['files']
        ]);

        $this->set('enquete', $enquete);
        $this->set('_serialize', ['enquete']);
    }

    public function add()
    {
        $enquete = $this->Enquetes->newEntity();
        if ($this->request->is('post')) {
            $enquete = $this->Enquetes->patchEntity($enquete, $this->request->getData());
            if ($this->Enquetes->save($enquete)) {
                /* Upload de arquivos */
                if(!empty($this->request->data['uploadfiles'][0]['tmp_name'])){
                    $data = $this->request->data;
                    $data['ModelName'] = "Enquetes";
                    $data['ModelId'] = $enquete->id;
                    $this->Upload->send($data);
                }
                /* Final upload de arquivos */
                $this->Flash->success(__('A enquete foi criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('A enquete não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('enquete'));
        $this->set('_serialize', ['enquete']);
    }

    public function edit($id = null)
    {
        $enquete = $this->Enquetes->get($id, [
            'contain' => ['files']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquete = $this->Enquetes->patchEntity($enquete, $this->request->getData());
            if ($this->Enquetes->save($enquete)) {
                /* Upload de arquivos */
                if(!empty($this->request->data['uploadfiles'][0]['tmp_name'])){
                    $data = $this->request->data;
                    $data['ModelName'] = "Enquetes";
                    $data['ModelId'] = $enquete->id;
                    $this->Upload->send($data);
                }
                /* Final upload de arquivos */
                $this->Flash->success(__('O enquete foi salvo com sucesso.'));

                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('O enquete não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('enquete'));
        $this->set('_serialize', ['enquete']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquete = $this->Enquetes->get($id);
        if ($this->Enquetes->delete($enquete)) {
            $this->Flash->success(__('O enquete foi removido com sucesso.'));
        } else {
            $this->Flash->error(__('O enquete não pôde ser salvo. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function remove($id = null, $enquete_id = null)
    {
        $entity = $this->Enquetes->Files->get($id);
        
        if ($this->Enquetes->Files->delete($entity)) {
            $this->Flash->success(__('O arquivo foi removido com sucesso.'));
        } else {
            $this->Flash->error(__('O arquivo não pôde ser removido. Por favor, tente novamente.'));
        }
       
        return $this->redirect(['action' => 'edit', $enquete_id]);
    }
}
