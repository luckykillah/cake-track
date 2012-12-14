<?
class RoutinesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('routines', $this->Routine->find('all'));
    }

    public function view($id) {
        $this->Routine->id = $id;
        $this->set('routine', $this->Routine->read());

    }

    public function add() {
        if ($this->request->is('routine')) {
            $this->Routine->create();
            if ($this->Routine->save($this->request->data)) {
                $this->Session->setFlash('Your routine has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your routine.');
            }
        }
    }

    public function edit($id = null) {
	    $this->Routine->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Routine->read();
	    } else {
	        if ($this->Routine->save($this->request->data)) {
	            $this->Session->setFlash('Your routine has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your routine.');
	        }
	    }
	}

    public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Routine->delete($id)) {
	        $this->Session->setFlash('The routine with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}
}
?>