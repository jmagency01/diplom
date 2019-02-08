<div class="flex-6 justify padding">

<div id="map"></div>




<div class="cart"> <!--class="flex-2 tab-flex"-->
    <ul>
        <?php foreach ($companies as $company): ?>
            <li>
                <div class="bold"><?php echo $company['name_c']?></div>
                <div><?php echo $company['disc_c']?></div>
                <div><?php echo $company['check_c[flag[]]']?></div>
                <div><a href="http://<?php echo $company['site_c']?>" rel="external"> <?php echo $company['site_c']?></a></div>

            </li><hr>
        <?php endforeach; ?>
    </ul>
</div>



<script src="js/map.js"></script></div>

