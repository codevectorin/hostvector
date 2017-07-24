<?php

/* home/plans.html */
class __TwigTemplate_ca06108fa541754f310e34761af1fe167a6d4c44599a30d1062f82b8bc2531f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/plans.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/layouts/main.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<style type=\"text/css\">
.plans-pricing {
\toverflow:hidden;
\tbackground:#f7f7f7
}
.plans-pricing .head {
\tpadding:0 0 45px;
\tfont-weight:400;
\tfont-size:18px;
\tfont-size:1.125em;
\tline-height:28px;
\tline-height:1.5555555556em
}
.plans-pricing .head h1 {
\tmargin:0 0 18px;
\ttext-transform:capitalize
}
.plans-pricing .container {
\tpadding-top:85px;
\tpadding-bottom:63px
}
@media only screen and (max-width:767px) {
\t.smooth-links .anchor-nav a:after {
\t\tdisplay:none!important
\t}
\t.plans-pricing .container {
\t\tpadding-top:30px;
\t\tpadding-bottom:30px
\t}
}
.plans-pricing.web .head {
\tpadding:0 0 72px
}
.plans-pricing.web .container {
\tpadding-top:92px
}
@media only screen and (max-width:767px) {
\t.plans-pricing.web .container {
\t\tpadding-top:30px
\t}
}
.plans-pricing.web h1 {
\tmargin:0 0 16px;
\tpadding:0 0 33px
}
.plans-pricing #hosting-tables {
\tmargin:0 0 21px;
\tborder-bottom:1px solid #e9e9e9
}
.plans-pricing #hosting-tables .panel {
\tborder:0;
\tbox-shadow:none;
\tborder-radius:0
}
.plans-pricing #hosting-tables .panel-heading {
\tpadding:0;
\tborder-radius:0;
\tborder-width:0 1px;
\tborder-style:solid;
\tborder-color:#e9e9e9
}
.plans-pricing #hosting-tables .panel-title {
\tmargin:0;
\tpadding:0;
\tcolor:#000;
\tfont-size:22px;
\tfont-weight:600;
\tline-height:30px;
\ttext-transform:uppercase
}
.plans-pricing #hosting-tables .panel-title a {
\tdisplay:block;
\ttext-decoration:none;
\tpadding:15px 28px 19px
}
@media only screen and (max-width:1199px) {
\t.plans-pricing #hosting-tables .panel-title {
\t\tfont-size:20px;
\t\tline-height:28px
\t}
\t.plans-pricing #hosting-tables .panel-title a {
\t\tpadding:18px 20px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing #hosting-tables .panel-title {
\t\tfont-size:16px;
\t\tline-height:22px
\t}
\t.plans-pricing #hosting-tables .panel-title a {
\t\tpadding:10px 15px
\t}
}
.plans-pricing #hosting-tables .panel-title:after {
\tdisplay:none
}
.plans-pricing .btn-primary {
\tfont-size:15px;
\tmin-width:106px;
\ttext-align:left;
\tline-height:20px;
\tpadding:10px 40px 10px 16px
}
@media only screen and (max-width:991px) {
\t.plans-pricing .btn-primary {
\t\tfont-size:12px;
\t\tmin-width:inherit;
\t\tline-height:16px;
\t\tpadding:7px 25px 7px 5px
\t}
}

/*.plans-pricing .btn-primary:after {
\ttop:11px;
\tright:13px;
\twidth:20px;
\theight:20px;
\tcolor:#fff;
\tdisplay:block;
\tcontent:\"\\e60e\";
\tborder-radius:50%;
\tposition:absolute;
\ttext-align:center;
\tfont:10px/16px icomoon;
\tborder:2px solid #fff
}*/
@media only screen and (max-width:991px) {
\t.plans-pricing .btn-primary:after {
\t\ttop:7px;
\t\tright:5px;
\t\twidth:16px;
\t\theight:16px;
\t\tfont-size:9px;
\t\tborder-width:1px;
\t\tline-height:14px
\t}
}
.plans-pricing .powered-by {
\twidth:97px;
\tdisplay:block;
\tmargin:0 auto;
\tpadding:8px 0 0
}
.plans-pricing .powered-by img {
\tdisplay:block
}
.plans-pricing .table {
\tmargin:0;
\tborder:0;
\twidth:100%;
\ttext-align:center;
\ttable-layout:fixed;
\tborder-collapse:collapse
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table {
\t\tdisplay:block;
\t\toverflow:hidden;
\t\ttable-layout:inherit
\t}
\t.plans-pricing .table thead {
\t\tdisplay:none
\t}
\t.plans-pricing .table tbody {
\t\tfloat:left;
\t\twidth:100%;
\t\tdisplay:block;
\t\t-moz-box-sizing:border-box;
\t\t-webkit-box-sizing:border-box;
\t\tbox-sizing:border-box
\t}
\t.plans-pricing .table tr {
\t\tfloat:left;
\t\twidth:100%;
\t\tclear:both;
\t\tdisplay:block;
\t\tbackground:#fff
\t}
}
.plans-pricing .table tr.odd {
\tbackground:#fff
}
.plans-pricing .table tr.even {
\tbackground:#f7f7f7
}
.plans-pricing .table th {
\tpadding:0;
\tcolor:#fff;
\tborder-style:solid;
\tborder-color:#b66fcd;
\tborder-width:0 0 0 1px
}
.plans-pricing .table th.col1 {
\tborder-left:0;
\tborder-style:solid;
\tborder-width:0 0 1px;
\tborder-color:#f7f7f7 #f7f7f7 #e9e9e9
}
.plans-pricing .table td,.plans-pricing .table th {
\tvertical-align:top
}
.plans-pricing .table td>div {
\tpadding:10px
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td>div {
\t\tpadding:8px 5px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table tr.even {
\t\tbackground:0 0
\t}
\t.plans-pricing .table td,.plans-pricing .table th {
\t\tdisplay:block
\t}
\t.plans-pricing .table td>div {
\t\twidth:54%;
\t\tpadding:0 10px;
\t\tdisplay:inline-block;
\t\tvertical-align:middle
\t}
}
.plans-pricing .table td>div.btn-holder {
\tpadding:30px 10px 40px
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td>div.btn-holder {
\t\tpadding:20px 5px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table td>div.btn-holder {
\t\tpadding:0 10px
\t}
}
.plans-pricing .table td.col1>div {
\tborder-style:solid;
\tborder-width:0 1px;
\tborder-color:#e9e9e9;
\twhite-space:nowrap;
\tmax-width:100%;
\toverflow:hidden;
\ttext-overflow:ellipsis;
\tpadding:10px 10px 10px 52px
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table td.col1>div {
\t\tpadding:10px 5px 10px 35px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td.col1>div {
\t\tpadding:8px 5px 8px 25px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table td.col1>div {
\t\tborder:0;
\t\tpadding:0 10px;
\t\tborder-width:1px 1px 0
\t}
}
.plans-pricing .table td.col1>div.btn-holder {
\tpadding:30px 10px 40px
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td.col1>div.btn-holder {
\t\tpadding:20px 5px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table td.col1>div.btn-holder {
\t\tpadding:0 10px
\t}
}
.plans-pricing .table td.col1 .btn-primary {
\tvisibility:hidden
}
.plans-pricing .table td {
\tborder:0;
\tpadding:0;
\tcolor:#000;
\tfont:400 15px/28px 'Open Sans',Arial,sans-serif
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td {
\t\tfont-size:13px;
\t\tline-height:20px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table td {
\t\twidth:100%!important;
\t\tclear:both;
\t\tfloat:left;
\t\tdisplay:block;
\t\tfont-size:11px;
\t\ttext-align:left;
\t\tborder-style:solid;
\t\tborder-color:#e2e2e2;
\t\tborder-width:1px 1px 0
\t}
\t.plans-pricing .table td:before {
\t\twidth:120px;
\t\tfont-size:11px;
\t\tbackground:#ccc;
\t\tpadding:10px 5px;
\t\tcontent:attr(title);
\t\tdisplay:inline-block;
\t\tvertical-align:middle;
\t\ttext-transform:uppercase
\t}
}
.plans-pricing .table td .price {
\tdisplay:block
}
.plans-pricing .table td.last-child>div {
\tborder-right:1px solid #e9e9e9
}
.plans-pricing .table td .icon-check {
\tcolor:#712095;
\tfont-size:22px;
\tline-height:24px;
\tdisplay:inline-block;
\tvertical-align:top
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table td .icon-check {
\t\tfont-size:18px;
\t\tline-height:20px
\t}
}
.plans-pricing .table .col1 {
\twidth:22.2%;
\tfont-size:16px;
\ttext-align:left;
\tposition:relative
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .col1 {
\t\twidth:21%;
\t\tfont-size:14px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .col1 {
\t\tfont-size:12px;
\t\tfont-weight:600;
\t\tline-height:20px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table td.last-child>div {
\t\tborder:0
\t}
\t.plans-pricing .table .col1 {
\t\twidth:100%;
\t\tfont-size:11px;
\t\ttext-align:left
\t}
}
.plans-pricing .table .img-holder {
\tmargin:0 auto;
\tmax-width:178px;
\tpadding:4px 5px 0 0
}
.plans-pricing .table .img-holder img {
\tdisplay:block;
\tmax-width:100%;
\theight:auto
}
.plans-pricing .table .tooltip {
\topacity:1;
\twidth:20px;
\theight:19px;
\tcursor:pointer;
\twhite-space:normal;
\ttop:15px;
\tright:auto;
\tbottom:auto;
\tleft:20px;
\tposition:absolute
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .tooltip {
\t\tleft:7px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .tooltip {
\t\ttop:10px;
\t\tleft:5px;
\t\twidth:16px;
\t\theight:16px
\t}
}
@media only screen and (max-width:767px) {
\t.plans-pricing .table .tooltip {
\t\tdisplay:none
\t}
}
.plans-pricing .table .tooltip:after {
\ttop:0;
\tleft:2px;
\tcolor:#965ab0;
\tdisplay:block;
\tcontent:'\\e607';
\tposition:absolute;
\tfont:18px/19px icomoon
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .tooltip:after {
\t\tleft:0;
\t\tfont-size:14px;
\t\tline-height:16px
\t}
}
.plans-pricing .table .tooltip:hover:after {
\tcolor:#e64e4e;
\tcontent:'\\e606'
}
.plans-pricing .table .tooltip:hover .caption {
\tbottom:29px;
\tdisplay:block
}
.plans-pricing .table .tooltip .caption {
\twidth:213px;
\theight:auto;
\tcolor:#fff;
\tcursor:text;
\tdisplay:none;
\tfont-size:14px;
\tline-height:20px;
\tborder-radius:5px;
\tbackground:#e64e4e;
\tletter-spacing:-.3px;
\tpadding:12px 5px 12px 11px;
\ttransition:all .3s ease-in-out;
\ttop:auto;
\tright:auto;
\tbottom:10px;
\tleft:-10px;
\tposition:absolute
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .tooltip .caption {
\t\tfont-size:13px;
\t\tletter-spacing:0
\t}
}
.plans-pricing .table .tooltip .caption:after {
\tleft:7px;
\tbottom:-16px;
\tcolor:#e64e4e;
\tcontent:'\\e610';
\tposition:absolute;
\tfont:28px/30px icomoon
}
.plans-pricing .table .heading {
\tcolor:#fff;
\tdisplay:block;
\tfont-size:20px;
\tfont-weight:600;
\tline-height:27px;
\ttext-align:center;
\tbackground:#4C8DF6;
\tpadding:14px 10px 16px;
\ttext-transform:capitalize
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .heading {
\t\tfont-size:16px;
\t\tpadding:15px 0;
\t\tline-height:22px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .heading {
\t\tpadding:10px;
\t\tfont-size:14px;
\t\tline-height:20px
\t}
}
.plans-pricing .table .heading span {
\tfont-weight:700;
\ttext-transform:uppercase
}
.plans-pricing .table .price-box {
\theight:99px;
\ttext-align:center;
\tposition:relative;
\tbackground:#3273DC;
\tpadding:10px 0 15px;
\tcolor: white;
}
/*.plans-pricing .table .price-box:after {
\tleft:50%;
\ttop:-20px;
\tcolor:#712095;
\tmargin-left:-15px;
\tcontent:\"\\e612\";
\tposition:absolute;
\tfont:30px/34px icomoon
}*/
@media only screen and (max-width:991px) {
\t.plans-pricing .table .price-box {
\t\theight:80px
\t}
\t.plans-pricing .table .price-box:after {
\t\ttop:-20px
\t}
}
.plans-pricing .table .price-box .price-holder {
\twidth:100%;
\theight:100%;
\tdisplay:table;
\tcolor: white;
}
.plans-pricing .table .price-box .price-frame {
\tdisplay:table-cell;
\tvertical-align:bottom;
\tcolor: white;
}
.plans-pricing .table .price-box .since {
\tfont-size:18px;
\tline-height:24px;
\tfont-weight:400;
\tmargin-bottom:3px;
\tdisplay:inline-block;
\tvertical-align:bottom
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .price-box .since {
\t\tfont-size:16px;
\t\tline-height:20px
\t}
}
.plans-pricing .table .price-box .since sup {
\tmargin-left:7px
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .price-box .since {
\t\tfont-size:14px;
\t\tline-height:20px
\t}
\t.plans-pricing .table .price-box .since sup {
\t\tmargin-left:2px
\t}
}
.plans-pricing .table .price-box .price-block {
\tdisplay:inline-block;
\tvertical-align:middle
}
.plans-pricing .table .price-box .less {
\tdisplay:block;
\tfont-size:18px;
\tmargin:0 0 9px;
\tfont-weight:400;
\tline-height:22px;
\ttext-align:center
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .price-box .less {
\t\tfont-size:16px;
\t\tmargin:0 0 4px;
\t\tline-height:20px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .price-box .less {
\t\tfont-size:14px;
\t\tline-height:20px
\t}
}
.plans-pricing .table .price-box .less span {
\tfont-size:16px;
\tline-height:20px;
\tfont-weight:400
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .price-box .less span {
\t\tfont-size:14px;
\t\tline-height:18px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .price-box .less span {
\t\tfont-size:12px;
\t\tline-height:16px
\t}
}
.plans-pricing .table .price-box .price {
\tdisplay:block;
\tcolor:#3273DC;
\tfont-size:20px;
\tfont-weight:600;
\tpadding:2px 5px;
\tline-height:24px;
\tborder-radius:17px;
\tbackground:#DB9B32
}
.plans-pricing .table .price-box .price.fixed {
\tcolor:#fff;
\tbackground:0 0;
\tfont-weight:400
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .price-box .price {
\t\tfont-size:18px;
\t\tline-height:22px
\t}
}
@media only screen and (max-width:991px) {
\t.plans-pricing .table .price-box .price {
\t\tfont-size:14px;
\t\tline-height:18px
\t}
}
.plans-pricing .table .price-box .price span {
\tfont-size:20px
}
@media only screen and (max-width:1199px) {
\t.plans-pricing .table .price-box .price span {
\t\tfont-size:14px
\t}
}
.heading-block .resource{
\tbackground-color: grey;
\tpadding:15px 10px;
\tmargin-top: -10px;
\ttext-align: center;
}
tr td{
\ttext-align: center;
}
.panel-heading{
\tbackground-color: #3273dc;
\tcolor: white
}
tr td .icon{
\tcolor: #3273dc;
}
</style>

<section class=\"plans-pricing web section\" id=\"plans-pricing\">
   <div class=\"container\" name=\"hosting\" id=\"hosting\">
      <div class=\"row\">
         <div class=\"col-xs-12\">
            <header class=\"head\">
            \t<h1 class=\"title is-2\" style=\"color: #3273dc\">HostVector Shared Plans</h1>
               <span class=\"subtitle is-4\">All The Best Features, at <span> The Best Price!</span></span>
               <p>Cloud web hosting features with unlimited specs and premium dedicated support team is the right start for your website. Fast, reliable and strongly secure website hosting for a super low price!</p>
            </header>
            <div id=\"hosting-tables1\" class=\"panel-group\">
               <table class=\"table1 table is-bordered is-striped is-narrow\">
                  <thead>
                     <tr>
                        <th class=\"col1\">
                           <div class=\"img-holder\"><img src=\"//www.hostinger.in/static/default.hostinger.co.uk/images/img13.png\" alt=\"image description\"></div>
                        </th>
                        <th class=\"col2\">
                           <div class=\"heading-block\">
                              <strong class=\"heading free\">FREE</strong>
                              <div class=\"resource free\">1x Resources</div>
                              <div class=\"price-box free\">
                                 <div class=\"price-holder\">
                                    <div class=\"price-frame\"><strong>Rs. 0.00</strong></div>
                                 </div>
                              </div>
                           </div>
                        </th>
                        <th class=\"col3 popular\">
                           <div class=\"heading-block\">
                              <strong class=\"heading\">Premium</strong>
                              <div class=\"resource\">5x Resources</div>
                              <div class=\"price-box\">
                                 <div class=\"price-holder\">
                                    <div class=\"price-frame\">
                                       <div class=\"price-block\"><del class=\"less\">Rs. 569.00/mo</del></div>
                                       <div class=\"since\">Starting at\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"//www.hostinger.in/cart/add/hosting-hostinger-premium?p=12\"><strong class=\"price\">Rs. 179.00/<span>mo</span></strong></a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </th>
                        <th class=\"col4\">
                           <div class=\"heading-block\">
                              <strong class=\"heading\">Business</strong>
                              <div class=\"resource\">20x Resources</div>
                              <div class=\"price-box\">
                                 <div class=\"price-holder\">
                                    <div class=\"price-frame\">
                                       <div class=\"price-block\"><del class=\"less\">Rs. 999.00/mo</del></div>
                                       <div class=\"since\">Starting at\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"//www.hostinger.in/cart/add/hosting-hostinger-business?p=12\"><strong class=\"price\">Rs. 399.00/<span>mo</span></strong></a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody class=\"last-child\">
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Free Domain Registration</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                     </tr>
                     <tr class=\"odd\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Disk Space</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>2000 MB</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>Unlimited</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>Unlimited</div>
                        </td>
                     </tr>
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Bandwidth</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>100 GB</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>Unlimited</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>Unlimited</div>
                        </td>
                     </tr>
                     <tr class=\"odd\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Number of Websites</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>1</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>Unlimited</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>Unlimited</div>
                        </td>
                     </tr>
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Website Builder</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                     </tr>
                     <tr class=\"odd\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Software Auto Installer</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>90 + scripts</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>90 + scripts</div>
                        </td>
                     </tr>
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Private SSL certificate</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                        </td>
                     </tr>
                     <tr class=\"odd\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Data Backups</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>Limited</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>Weekly</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>Daily</div>
                        </td>
                     </tr>
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Uptime Guarantee</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>99%</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>99.9%</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>99.9%</div>
                        </td>
                     </tr>
                     <tr class=\"odd\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>Money Back Guarantee</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div>It's Free</div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div>30 Days</div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div>30 Days</div>
                        </td>
                     </tr>
                     <tr class=\"even\">
                        <td class=\"col1\" title=\"CHARACTERISTICS\">
                           <div>&nbsp;</div>
                        </td>
                        <td class=\"col2\" title=\"Free\">
                           <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-free?p=12\" class=\"button is-info\">Order</a></div>
                        </td>
                        <td class=\"col3\" title=\"Premium\">
                           <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-premium?p=12\" class=\"button is-info\">Order</a></div>
                        </td>
                        <td class=\"col4 last-child\" title=\"Business\">
                           <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-business?p=12\" class=\"button is-info\">Order</a></div>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                     <div class=\"col1\">
                        <h2 class=\"panel-title\">TECHNICAL FEATURES</h2>
                     </div>
                     <div class=\"col4 last-child\"><a href=\"#supported-features\"></a></div>
                  </div>
                  <div id=\"supported-features\">
                     <div class=\"panel-body\">
                        <table class=\"table1 table is-bordered is-striped is-narrow\">
                           <tbody class=\"last-child\">
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>PHP Support</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>MySQL Databases</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div>2</div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div>Unlimited</div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div>Unlimited</div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>InnoDB Database</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Remote MySQL connections</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>PHPMyAdmin tool</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>FTP access</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>FTP over SSL</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>FTP Users</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div>2</div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div>Unlimited</div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div>Unlimited</div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Full SSH access</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Cron Jobs</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Advanced Cron Jobs</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Curl and Curl SSL</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Audio/Video Streaming</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Domain Parking</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div>0</div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div>Unlimited</div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div>Unlimited</div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Subdomains</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div>0</div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div>Unlimited</div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div>Unlimited</div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class=\"panel panel-default\">
                  <div class=\"panel-heading email\">
                     <div class=\"col1\">
                        <h2 class=\"panel-title\">EMAIL FEATURES</h2>
                     </div>
                  </div>
                  <div id=\"email-features\">
                     <div class=\"panel-body\">
                        <table class=\"table1 table is-bordered is-striped is-narrow\">
                           <tbody class=\"last-child\">
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Email Accounts</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div>Unlimited</div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div>Unlimited</div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Webmail Access</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>POP3/IMAP Access</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>SMTP access</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Spam Filters</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Mail Forwarding</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Email autoresponders</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class=\"panel panel-default\">
                  <div class=\"panel-heading support\">
                     <div class=\"col1\">
                        <h2 class=\"panel-title\">CLIENT SUPPORT OPTIONS</h2>
                     </div>
                  </div>
                  <div id=\"client-support\">
                     <div class=\"panel-body\">
                        <table class=\"table1 table is-bordered is-striped is-narrow\">
                           <tbody class=\"last-child\">
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>24/7 Support</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Priority Support</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Support via Ticket</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class=\"panel panel-default\">
                  <div class=\"panel-heading control\">
                     <div class=\"col1\">
                        <h2 class=\"panel-title\">Control Panel Tools</h2>
                     </div>
                  </div>
                  <div id=\"control-panel\">
                     <div class=\"panel-body\">
                        <table class=\"table1 table is-bordered is-striped is-narrow\">
                           <tbody class=\"last-child\">
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Email Accounts Manager</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Database Backup/Restore</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Website Backup/Restore</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>DNS Zone Editor</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>2 File Managers</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Parked Domains</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Addon Domains</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-remove\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Domain Redirects</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Custom Error Pages</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>Password Protected Directories</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"odd\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>IP Deny Manager</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><span class=\"icon\"><i class=\"fa fa-check\"></i></span></div>
                                 </td>
                              </tr>
                              <tr class=\"even\">
                                 <td class=\"col1\" title=\"CHARACTERISTICS\">
                                    <div>&nbsp; &nbsp; &nbsp;</div>
                                 </td>
                                 <td class=\"col2\" title=\"Free\">
                                    <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-free?p=12\" class=\"button is-info\">Order</a></div>
                                 </td>
                                 <td class=\"col3\" title=\"Premium\">
                                    <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-premium?p=12\" class=\"button is-info\">Order</a></div>
                                 </td>
                                 <td class=\"col4 last-child\" title=\"Business\">
                                    <div><a href=\"//www.hostinger.in/cart/add/hosting-hostinger-business?p=12\" class=\"button is-info\">Order</a></div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/plans.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/plans.html", "/var/www/html/Projects/hostvector/vendor/app/views/home/plans.html");
    }
}
