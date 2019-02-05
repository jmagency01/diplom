<?php
namespace Vlad\Bishen\Controllers;
use Vlad\Bishen\Base\Controller;

class IndexController extends Controller
{

    public function indexAction(){
        $title = 'Главная';
        $view = 'index_view.php';

        $data = [
            'title'=>$title,
            'auth'=>isset($_SESSION['auth']),
            'login'=>$_SESSION['login']
        ];
        return parent::generateResponse($view, $data);
    }
}

?>
