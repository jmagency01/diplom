
<div class="flex-6 justify padding">
   <div class="leaflet-control" id="search">
        <form id="search-form">
            <input type="search" placeholder="Search" name="query" value="улица Курчатова 10" />
            <input type="submit" value="Search">
            <div id="result"></div>
        </form>
    </div>
</div>
<div class="flex-6 justify padding">

<div id="map"></div>


<div class="flex-2 carts">
                <?php foreach ($companies as $company): ?>
                <div class="name-cart"><?php echo $company['name_c']?></div>
                <div class="disc-cart"><?php echo $company['disc_c']?></div>
                <div class="site-cart"><a href="http://<?php echo $company['site_c']?>" rel="external"> <?php echo $company['site_c']?></a></div>
        <hr>
                <?php endforeach; ?>
</div>



<script src="js/map.js"></script>
    <script type="text/javascript" src="/bundle.js"></script>
    <script type="text/javascript" src="/rollup.config.js"></script>
</div>

