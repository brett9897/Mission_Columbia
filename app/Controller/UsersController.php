<?PHP
class UsersController extends AppController
{
  public $components = array('Auth');
  public $helpers = array('Form');
  
  public function login()
  {
    if($this->request->is('post'))
    {
      if($this->Auth->login())
      {
        return $this->redirect($this->Auth->redirect());
      }
      else
      {
        $this->Session->setFlash(__('Username or password is incorrect'),
            'default', array(), 'auth');
      }
    }
  }

  public function logout()
  {
    $this->redirect($this->Auth->logout());
  }
}
?>
