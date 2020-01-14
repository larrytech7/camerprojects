<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- FOOTER -->
<footer class="directify_fn_footer_wrap">
    <div class="directify_fn_footer">
        <div class="footer_wrap">
            <div class="footer_location_wrap">
                <div class="container">
                    <div class="footer_location">
                        <div class="footer_location_rows">
                            <div class="footer_location_row">
                                <div class="footer_logo">
                                    <a href="">
                                        <img class="dark" src="<?= base_url('assets/') ?>img/logo-dark.png" alt="LOGO" />
                                    </a>
                                </div>
                            </div>
                            <div class="footer_location_row">
                                <span><?= $this->lang->line('address') ?></span>
                            </div>
                            <div class="footer_location_row">
                                <span><?= $this->lang->line('app_name') ?> &amp; Powered by Photoshop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_nav_list_wrap">
                <div class="container">
                    <div class="footer_nav_list">
                        <ul class="social_icons">
                            <li><a href="#"><i class="xcon-facebook"></i></a></li>
                            <li><a href="#"><i class="xcon-twitter"></i></a></li>
                        </ul>
                        <ul class="menu_list">
                            <li><?= $this->lang->line('app_name') ?> 2020 &strns; Designed by <a href="#">A Team</a></li>
                            <li><a href="<?= site_url('home/privacy')?>"><?= $this->lang->line('menu_privacy') ?></a></li>
                            <li><a href="<?= site_url('home/terms')?>"><?= $this->lang->line('menu_terms') ?></a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

<a class="totop" href="#"><i class="xcon-angle-up"></i></a>
<a class="listed" href="<?= site_url('project/add')?>">
    <img class="svg" src="<?= base_url('assets/') ?>img/svg/pencil.svg" alt="" />
</a>

</div>
<!-- /WRAPPER ALL -->

<!-- SCRIPTS -->
<script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.js"></script>
<!--[if lt IE 11]> <script type="text/javascript" src="<?= base_url('assets/') ?>js/ie8.js"></script> <![endif]-->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/plugins.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/carousel.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/MarkerClusterGroup.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/markers.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/map.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/init.js"></script>

</body>

<!-- Mirrored from frenify.com/envato/frenify/html/directify/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 17:43:32 GMT -->
</html>