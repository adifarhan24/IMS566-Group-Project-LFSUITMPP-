<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LostReports Controller
 *
 * @property \App\Model\Table\LostReportsTable $LostReports
 */
class LostReportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->LostReports->find();
        $lostReports = $this->paginate($query);

        $this->set(compact('lostReports'));
    }

    /**
     * View method
     *
     * @param string|null $id Lost Report id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lostReport = $this->LostReports->get($id, contain: []);
        $this->set(compact('lostReport'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lostReport = $this->LostReports->newEmptyEntity();
        if ($this->request->is('post')) {
            $lostReport = $this->LostReports->patchEntity($lostReport, $this->request->getData());
            if ($this->LostReports->save($lostReport)) {
                $this->Flash->success(__('The lost report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lost report could not be saved. Please, try again.'));
        }
        $this->set(compact('lostReport'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lost Report id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lostReport = $this->LostReports->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lostReport = $this->LostReports->patchEntity($lostReport, $this->request->getData());
            if ($this->LostReports->save($lostReport)) {
                $this->Flash->success(__('The lost report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lost report could not be saved. Please, try again.'));
        }
        $this->set(compact('lostReport'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lost Report id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lostReport = $this->LostReports->get($id);
        if ($this->LostReports->delete($lostReport)) {
            $this->Flash->success(__('The lost report has been deleted.'));
        } else {
            $this->Flash->error(__('The lost report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
