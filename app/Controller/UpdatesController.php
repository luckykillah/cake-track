<?
class UpdatesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('updates', $this->Update->find('all'));
    }

    public function view($id) {
        $this->Update->id = $id;
        $this->set('update', $this->Update->read());

    }

    public function add() {
        $this->set('routines', $this->Update->Routine->find('all'));
        if ($this->request->is('update')) {
            $this->Update->create();
            if ($this->Update->save($this->request->data)) {
                $this->Session->setFlash('Your update has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your update.');
            }
        }
    }

    public function edit($id = null) {
	    $this->Update->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Update->read();
	    } else {
	        if ($this->Update->save($this->request->data)) {
	            $this->Session->setFlash('Your update has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your update.');
	        }
	    }
	}

    public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Update->delete($id)) {
	        $this->Session->setFlash('The update with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}
}
?>