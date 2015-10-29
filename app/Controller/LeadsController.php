<?php 

class LeadsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler','Paginator');

    public $paginate = array(
        'limit' => 10,
        // 'order' => array(
        //     'Post.title' => 'asc'
        // )
    );

    public function index() {
        $this->Paginator->settings = $this->paginate;        
        $leads = $this->Paginator->paginate('Lead');
        $this->set('leads', $leads);
    }

    public function test() {
        Configure::write('debug', 0);
    }

    public function getLeads() {
            $current        = $this->request->data['current'];
            $rowCount       = $this->request->data['rowCount'];
            $searchPhrase   = $this->request->data['searchPhrase'];

            $this->request->params['named']['page'] = $this->request->data['current'];
            $this->request->params['named']['next'] = $this->request->data['current'];

            if (!empty($this->request->data['sort'])) {
                foreach($this->request->data['sort'] as $key => $value) {
                    $this->request->params['named']['sort'] = $key;
                    $this->request->params['named']['direction'] = $value;
                }
            }

            $this->Paginator->settings = array(
                'limit' => $rowCount
            );

            if (!empty($searchPhrase)) {
                $conditions = array();
                $conditions[] = array('Lead.name' => $searchPhrase);
                $conditions[] = array("Lead.email LIKE '%{$searchPhrase}%'");
                $conditions[] = array("Lead.phone LIKE '%{$searchPhrase}%'");
                $leads = $this->Lead->find('all', array(
                    'conditions' => array('or' => $conditions),
                    'limit' => $rowCount.','.$current,
                ));
                $total = $this->Lead->find('count', array('conditions' => array('or' => $conditions)));
            } else {
                $leads = $this->Paginator->paginate('Lead');
                //$leads = $this->Lead->find('all')
                
                $total = $this->Lead->find('count');
            }
        // $leads = $this->Lead->find('all', array(
        //     condition
        // ));

        $this->set('current', $current);
        $this->set('rowCount', $rowCount);
        $this->set('searchPhrase', $searchPhrase);
        $this->set('total', $total);
        $this->set('leads', $leads);
        //$this->set('_serialize', array('leads'));
        //$this->set(compact('leads'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid lead'));
        }

        $lead = $this->Lead->findById($id);
        if (!$lead) {
            throw new NotFoundException(__('Invalid lead'));
        }
        $this->set('lead', $lead);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Lead->create();
            if ($this->Lead->save($this->request->data)) {
                $this->Session->setFlash(__('Your lead has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } 
            $this->Session->setFlash(__('Unable to add your lead.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid lead'));
        }

        $lead = $this->Lead->findById($id);
        if (!$lead) {
            throw new NotFoundException(__('Invalid lead'));
        }

        if ($this->request->is(array('lead', 'put'))) {
            $this->Lead->id = $id;
            if ($this->Lead->save($this->request->data)) {
                $this->Session->setFlash(__('Your lead has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your lead.'));
        }

        if (!$this->request->data) {
            $this->request->data = $lead;
        }
    }

/**
 * [delete a speficied lead from database]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Lead->delete($id)) {
            $this->Session->setFlash(
                __('The lead with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Session->setFlash(
                __('The lead with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}
