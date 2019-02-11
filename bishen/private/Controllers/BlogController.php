<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.01.2019
 * Time: 19:27
 */
namespace Vlad\Bishen\Controllers;
use Vlad\Bishen\Base\Controller;
use Vlad\Bishen\Models\ArticleModel;

class BlogController extends Controller
{
    protected $MapsModel;
    public function __construct()
    {
        $this->ArticleModel = new ArticleModel();
    }
    public function aboutprintAction()
    {
        $blog = $this->ArticleModel->getBlog();
        $title = 'Все о печати';
        $view = 'aboutprint_view.php';
        $data = [
            'blog'=>$blog,
            'title' => $title
        ];
        return parent::generateResponse($view, $data);

    }

    public function aboutusAction()
    {
        $title = 'О нас';
        $view = 'aboutus_view.php';
        $data = [
            'title' => $title,
        ];
        return parent::generateResponse($view, $data);

    }



}