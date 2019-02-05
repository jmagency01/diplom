<?php
namespace Vlad\Bishen\Controllers;

use Vlad\Bishen\Base\Controller;
class SearchController extends Controller
{



    public function printerAction($get){
        $view = 'find-maps_view.php';
        $title = 'Найти печатника';
//        $search = $this->searchModel->getSearchById($get);
//        $title =  $search['title'];
        $data = [
            'title' => 'title',
//            'search' => $search
        ];
        return parent::generateResponse($view, $data);

    }

    public function findorderAction($get){
        $model = 'SearchModel.php';
        $view = 'order_view.php';
        $title = 'Найти заказ';
//        $search = $this->searchModel->getSearchById($get);
//        $title =  $search['title'];
        $data = [
            'title' => 'title',
//            'search' => $search
        ];
        return parent::generateResponse($view, $data);

    }


}

