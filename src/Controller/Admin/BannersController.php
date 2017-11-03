<?php
namespace App\Controller\Admin;

class BannersController extends AppController
{

    public function initialize(){
        parent::initialize();

        $this->loadComponent('Upload');
    }
    public function index()
    {
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
        $this->set('_serialize', ['banners']);
    }

    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['files']
        ]);

        $this->set('banner', $banner);
        $this->set('_serialize', ['banner']);
    }

    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                /* Upload de arquivos */
                if(!empty($this->request->data['uploadfiles'][0]['tmp_name'])){
                    $data = $this->request->data;
                    $data['ModelName'] = "Banners";
                    $data['ModelId'] = $banner->id;
                    $this->Upload->send($data);
                }
                /* Final upload de arquivos */
                $this->Flash->success(__('O banner foi criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('O banner não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('banner'));
        $this->set('_serialize', ['banner']);
    }

    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['files']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                /* Upload de arquivos */
                if(!empty($this->request->data['uploadfiles'][0]['tmp_name'])){
                    $data = $this->request->data;
                    $data['ModelName'] = "Banners";
                    $data['ModelId'] = $banner->id;
                    $this->Upload->send($data);
                }
                /* Final upload de arquivos */
                $this->Flash->success(__('O banner foi salvo com sucesso.'));

                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('O banner não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('banner'));
        $this->set('_serialize', ['banner']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('O banner foi removido com sucesso.'));
        } else {
            $this->Flash->error(__('O banner não pôde ser salvo. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function remove($id = null, $banner_id = null)
    {
        $entity = $this->Banners->Files->get($id);
        
        if ($this->Banners->Files->delete($entity)) {
            $this->Flash->success(__('O arquivo foi removido com sucesso.'));
        } else {
            $this->Flash->error(__('O arquivo não pôde ser removido. Por favor, tente novamente.'));
        }
       
        return $this->redirect(['action' => 'edit', $banner_id]);
    }
}
