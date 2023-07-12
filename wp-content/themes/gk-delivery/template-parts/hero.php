<?php 
$hero = get_field('hero');?>
<section class="section-hero">
    <div class="container-gl">
        <div class="decor">
            <svg width="1440" height="3338" viewBox="0 0 1440 3338" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.1"><path d="M659.997 2859.64L660.528 2859.7L661.06 2859.75C734.648 2867.08 783.396 2886.63 819.383 2911.47C855.841 2936.64 882.705 2969.59 909.558 3009.86C961.572 3087.86 1014.95 3200.81 1143.77 3277.32C1256.73 3344.41 1362.71 3353.26 1439.69 3316.67V3189.04C1409.5 3221.47 1318.19 3261.56 1196.08 3189.04C1093.1 3127.87 1056.03 3044.65 994.833 2952.87C965.078 2908.24 929.644 2862.9 877.578 2826.96C825.165 2790.78 759.354 2766.46 671.764 2757.66C559.7 2744.2 384.76 2746.07 219.936 2795.85C150.343 2816.87 79.0522 2873.78 0 2908.41V3026.72C82.7358 2990.04 149.794 2924.25 249.546 2894.13C398.156 2849.25 558.658 2847.4 659.997 2859.64Z" fill="#FFD400"/><path d="M462.597 589.12L462.88 589.574L463.152 590.034C500.908 653.622 539.234 689.535 576.959 711.645C615.178 734.045 656.401 744.456 704.245 751.767C796.926 765.926 973.059 784.04 1096.86 868.433C1195.5 935.672 1231.58 1039.45 1258.86 1166.27C1296.51 1341.31 1268.19 1463.41 1190.88 1625.4C1174.83 1659.04 1174.32 1695.16 1173.61 1712.34C1172.8 1732.15 1179.5 1758.73 1196.12 1791.6C1229.33 1857.27 1262.45 1926.2 1328.55 1988.11C1423.08 2076.67 1430.36 2203.52 1355.66 2283.78C1280.62 2364.41 1146.04 2375.2 999.771 2288.32C870.95 2211.81 817.572 2098.87 765.558 2020.86C738.705 1980.6 711.841 1947.64 675.383 1922.48C639.396 1897.64 590.648 1878.09 517.06 1870.76L516.528 1870.7L515.997 1870.64C414.658 1858.4 254.156 1860.25 105.546 1905.13C67.5482 1916.61 32.5288 1930.69 0.101654 1947.78V1834.94C24.6422 1824.06 49.9349 1814.7 75.9359 1806.85C240.76 1757.08 415.7 1755.2 527.764 1768.66C615.354 1777.46 681.165 1801.78 733.578 1837.96C785.644 1873.9 821.078 1919.24 850.833 1963.87C912.034 2055.65 949.099 2138.87 1052.08 2200.04C1174.19 2272.56 1250.46 2246.23 1280.65 2213.8C1311.16 2181.01 1318.06 2118.86 1258.49 2063.07C1189.16 1998.12 1145.87 1919.49 1104.64 1837.96C1084.05 1797.23 1069.35 1752.5 1071.16 1708.13C1073.09 1661.13 1085.3 1632.07 1104.64 1581.9C1167.16 1419.76 1200.11 1298.46 1142.95 1134.36C1113.53 1049.91 1105.1 1015.67 987.76 935.671C888.79 868.205 797.7 869.8 688.647 853.143C635.625 845.046 579.553 832.104 524.976 800.112C470.027 767.91 420.163 718.551 375.156 642.891C315.577 547.027 306.804 405.577 227.917 295.739C112.455 134.976 0.157349 125.054 0.157349 125.054V0C0.157349 0 177.929 53.6245 288.357 203.597C383.732 333.128 408.661 502.458 462.597 589.12Z" fill="#FFD400"/></g></svg>
        </div>
        <div class="hero-general">
            <div class="hero-general-left">
                <?php if ($hero['title']) :?>
                    <h1 class="hero-title">
                        <?php echo $hero['title'] ;?>
                    </h1>
                <?php endif;?>
                <?php if ($hero['text']) :?>
                    <div class="hero-text">
                        <?php echo $hero['text'];?>
                    </div>
                <?php endif;?>
                <div class="section-button">
                    <?php 
                    $link = get_field('btn_primary');
                        if( $link ): 
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a class="btn btn-secondary" href="<?php echo get_home_url();?>/#contacts">
                            <?php echo esc_html( $link['title'] ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="hero-general-right">
                <?php if ($hero['image']) :?>
                    <div class="hero-general-right-img">
                        <?php echo wp_get_attachment_image($hero['image']['ID'], 'full');?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>