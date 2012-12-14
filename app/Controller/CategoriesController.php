<?
class CategoriesController extends AppController {
    public $helpers = array('Html');

    public function index() {
        $this->set('categories', $this->Category->find('all'));
    }

    public function view($id) {
        $this->Category->id = $id;
        $this->set('category', $this->Category->read());

    }
}
?>