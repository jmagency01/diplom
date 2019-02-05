<?php

class GoodsController extends Controller
{
    private $goodsModel;

    public function __construct()
    {
        $this->goodsModel = new GoodsModel();
    }

    public function indexAction(){
        $title = 'Товары';
        $view = 'goods_view.php';
        $goods = $this->goodsModel->getAllGoods();
        $data = [
            'title'=>$title,
            'goods'=> $goods
        ];
        parent::generateResponse($view, $data);
    }

    public function generateResponse($view, array $data,
                                     $template='template_view.php')
    {
        $data = [
            'title'=>'Товары',
            'goods'=> 'Данные с товарами'
        ];
        extract($data);

        $title = 'Товары';
        $goods = 'Данные с товарами';

        require_once __DIR__ . '/../Views/' . $template;
    }
}
?>


