<?php
namespace App\Controller\Admin;

use App\Controller\AppControllerAdmin;

/**
 * Affiliates Controller
 *
 * @property \App\Model\Table\AffiliatesTable $Affiliates
 */
class AffiliatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $affiliates = $this->paginate($this->Affiliates);

        $this->set(compact('affiliates'));
        $this->set('_serialize', ['affiliates']);
    }

    /**
     * View method
     *
     * @param string|null $id Affiliate id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affiliate = $this->Affiliates->get($id, [
            'contain' => []
        ]);

        $this->set('affiliate', $affiliate);
        $this->set('_serialize', ['affiliate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affiliate = $this->Affiliates->newEntity();
        if ($this->request->is('post')) {
            $affiliate = $this->Affiliates->patchEntity($affiliate, $this->request->getData());
            if ($this->Affiliates->save($affiliate)) {
                $this->Flash->success(__('The affiliate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affiliate could not be saved. Please, try again.'));
        }
        $this->set(compact('affiliate'));
        $this->set('_serialize', ['affiliate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affiliate id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affiliate = $this->Affiliates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affiliate = $this->Affiliates->patchEntity($affiliate, $this->request->getData());
            if ($this->Affiliates->save($affiliate)) {
                $this->Flash->success(__('The affiliate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The affiliate could not be saved. Please, try again.'));
        }
        $this->set(compact('affiliate'));
        $this->set('_serialize', ['affiliate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Affiliate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affiliate = $this->Affiliates->get($id);
        if ($this->Affiliates->delete($affiliate)) {
            $this->Flash->success(__('The affiliate has been deleted.'));
        } else {
            $this->Flash->error(__('The affiliate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
