<?php
namespace Vlad\Bishen\Controllers;
use Vlad\Bishen\Base\Controller;
use Vlad\Bishen\Models\MapsModel;

class IndexController extends Controller
{
    protected $MapsModel;
    public function __construct()
    {
        $this->MapsModel = new MapsModel();
    }
       public function indexAction(){

        $companies = $this->MapsModel->getCompanies();

        $title = 'Главная';
        $view = 'index_view.php';
        $data = [
            'title'=>$title,
            'auth'=>isset($_SESSION['auth']),
            'login'=>$_SESSION['login'],
            'companies'=>$companies

        ];
        return parent::generateResponse($view, $data);
    }


}

?>
