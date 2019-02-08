<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.02.2019
 * Time: 12:18
 */

namespace Vlad\Bishen\Models;


use Doctrine\DBAL\Driver\PDOException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Vlad\Bishen\Base\DBConnection;

class MapsModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function Mapslist()
    {
        $sql = "SELECT name_c, disc_c, site_c, check_c, phone_con FROM company";
        $statement = $this->DBConnection->execute($sql, true);
        $blocks = [];
        foreach ($statement as $block) {
            array_push($blocks, $block);
        }
        return $blocks;
    }

    public function getCompanies(){
        $sql = "SELECT * FROM company";
        return $this->db->queryAll($sql);

    }
}

/*


<div class="row-container">
    <div class="flex-4 map justify padding">
        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=29.77981567382813%2C59.69685622023513%2C30.83175659179688%2C60.13740224199459&amp;layer=mapnik" style="border: 1px solid black"></iframe>

    </div>
    <div class="flex-2 column-container list-base dis">
        <div class=""><h3>Типография "Синэл"</h3></div>
        <div ><img class="imgloco size" src="IMG/logo_mini.jpg">
            <p class=" p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
        <div class="justify cool-list"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
        <div class=""><h3>Типография "Синэл"</h3></div>
        <div ><img class="imgloco size" src="IMG/logo_mini.jpg">
            <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
        <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>
        <div class=""><h3>Типография "Синэл"</h3></div>
        <div ><img class="imgloco size" src="IMG/logo_mini.jpg">
            <p class="p">Перечень выполняемых работ: офсетная печать, цифровая печать, сувенирная продукция, широкоформатная печать</p></div>
        <div class="justify"><div>Рейтинг: 4/5</div><div class="margin butchoice2">Подробнее</div></div>

    </div>
</div>*/