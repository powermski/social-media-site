<?php
$js = 'js/';
?>


<!-- bootsrap bundle -->
<script src="<?= $js ?>vendor/bootstrap.bundle.min.js"></script>
<!-- app -->
<script src="<?= $js ?>utils/app.js"></script>
<!-- page loader -->
<script src="<?= $js ?>utils/page-loader.js"></script>
<!-- simplebar -->
<script src="<?= $js ?>vendor/simplebar.min.js"></script>
<!-- liquidify -->
<script src="<?= $js ?>utils/liquidify.js"></script>
<!-- XM_Plugins -->
<script src="<?= $js ?>vendor/xm_plugins.min.js"></script>
<!-- tiny-slider -->
<script src="<?= $js ?>vendor/tiny-slider.min.js"></script>
<!-- chartJS -->
<script src="<?= $js ?>vendor/Chart.bundle.min.js"></script>
<!-- global.hexagons -->
<script src="<?= $js ?>global/global.hexagons.js"></script>
<!-- global.tooltips -->
<script src="<?= $js ?>global/global.tooltips.js"></script>
<!-- global.popups -->
<script src="<?= $js ?>global/global.popups.js"></script>
<!-- global.charts -->
<script src="<?= $js ?>global/global.charts.js"></script>
<!-- header -->
<script src="<?= $js ?>header/header.js"></script>
<!-- sidebar -->
<script src="<?= $js ?>sidebar/sidebar.js"></script>
<!-- content -->
<script src="<?= $js ?>content/content.js"></script>
<!-- form.utils -->
<script src="<?= $js ?>form/form.utils.js"></script>
<!-- SVG icons -->
<script src="<?= $js ?>utils/svg-loader.js"></script>
<!-- Ajax -->
<script src="<?= $js ?>ajax/main.js"></script>

<?php if (isset($loginJs)) : ?>
    <script src="js/ajax/login.js"></script>
<?php endif ?>

</body>

</html>

<?php

ob_end_flush();
