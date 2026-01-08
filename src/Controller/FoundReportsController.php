<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FoundReports Controller
 *
 * @property \App\Model\Table\FoundReportsTable $FoundReports
 */
class FoundReportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->FoundReports->find();
        $foundReports = $this->paginate($query);

        $this->set(compact('foundReports'));
    }

    /**
     * View method
     *
     * @param string|null $id Found Report id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foundReport = $this->FoundReports->get($id, contain: []);
        $this->set(compact('foundReport'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foundReport = $this->FoundReports->newEmptyEntity();
        if ($this->request->is('post')) {
            $foundReport = $this->FoundReports->patchEntity($foundReport, $this->request->getData());
            if ($this->FoundReports->save($foundReport)) {
                $this->Flash->success(__('The found report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The found report could not be saved. Please, try again.'));
        }
        $this->set(compact('foundReport'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Found Report id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foundReport = $this->FoundReports->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foundReport = $this->FoundReports->patchEntity($foundReport, $this->request->getData());
            if ($this->FoundReports->save($foundReport)) {
                $this->Flash->success(__('The found report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The found report could not be saved. Please, try again.'));
        }
        $this->set(compact('foundReport'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Found Report id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foundReport = $this->FoundReports->get($id);
        if ($this->FoundReports->delete($foundReport)) {
            $this->Flash->success(__('The found report has been deleted.'));
        } else {
            $this->Flash->error(__('The found report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
