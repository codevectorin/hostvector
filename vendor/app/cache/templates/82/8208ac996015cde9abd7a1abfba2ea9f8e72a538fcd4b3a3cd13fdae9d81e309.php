<?php

/* home/index.html */
class __TwigTemplate_ebe37887c91dc783bae78d253ea9a1cac658c713240748fb8199bb6f3f2c650d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/index.html", 1);
        $this->blocks = array(
            'fullscreenHeroBody' => array($this, 'block_fullscreenHeroBody'),
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
    public function block_fullscreenHeroBody($context, array $blocks = array())
    {
        echo "            
            <div class=\"hero-body\">
            <div class=\"flickity1 carousel invisible\" data-animate data-animation-classes=\"animated fadeInDown\" data-animation-delay=\"500\" data-flickity='{ \"cellAlign\": \"left\", \"autoPlay\": true,\"wrapAround\": true }'>
  <div class=\"carousel-cell\">
      <div class=\"container\" style=\"height: 100%;display: flex;align-items: center; justify-content: center;\">
          <div class=\"columns\">
              <div class=\"column is-4\">
              <figure class=\"image is-1by1\">
                  <img src=\"https://via.placeholder.com/512x512\">
              </figure>
              </div>
              <div class=\"column is-6\">
                  <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia a est nec hendrerit. Aenean volutpat nec mi nec egestas. Maecenas vitae vestibulum ex. Etiam sagittis luctus mi, eu convallis justo fringilla vitae. Sed in maximus purus, vel ullamcorper erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras blandit felis vitae ullamcorper sagittis. Aenean bibendum mauris quis venenatis sodales. Morbi eget nisl tellus. Ut laoreet congue est, at vehicula mauris eleifend ut. Aliquam pulvinar tempor mauris vitae viverra. In vitae sodales velit.

Nam volutpat lectus sit amet dignissim varius. Quisque sodales lacinia pharetra. Aliquam venenatis ornare felis nec dapibus. Nullam nibh neque, hendrerit a facilisis eu, congue at urna. Morbi ornare, odio nec cursus hendrerit, mauris sapien placerat est, et semper lacus massa non elit. Aliquam egestas bibendum neque, vel viverra felis ullamcorper semper. In sit amet pellentesque est.</p>
              </div>
          </div>
      </div>
  </div>
  
  <div class=\"carousel-cell\">
      <div class=\"container\" style=\"height: 100%;display: flex;align-items: center; justify-content: center;\">
          <div class=\"columns\">
              <div class=\"column is-4\">
              <figure class=\"image is-1by1\">
                  <img src=\"https://via.placeholder.com/512x512\">
              </figure>
              </div>
              <div class=\"column is-6\">
                  <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia a est nec hendrerit. Aenean volutpat nec mi nec egestas. Maecenas vitae vestibulum ex. Etiam sagittis luctus mi, eu convallis justo fringilla vitae. Sed in maximus purus, vel ullamcorper erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras blandit felis vitae ullamcorper sagittis. Aenean bibendum mauris quis venenatis sodales. Morbi eget nisl tellus. Ut laoreet congue est, at vehicula mauris eleifend ut. Aliquam pulvinar tempor mauris vitae viverra. In vitae sodales velit.

Nam volutpat lectus sit amet dignissim varius. Quisque sodales lacinia pharetra. Aliquam venenatis ornare felis nec dapibus. Nullam nibh neque, hendrerit a facilisis eu, congue at urna. Morbi ornare, odio nec cursus hendrerit, mauris sapien placerat est, et semper lacus massa non elit. Aliquam egestas bibendum neque, vel viverra felis ullamcorper semper. In sit amet pellentesque est.</p>
              </div>
          </div>
      </div>
  </div>
  <div class=\"carousel-cell\">
      <div class=\"container\" style=\"height: 100%;display: flex;align-items: center; justify-content: center;\">
          <div class=\"columns\">
              <div class=\"column is-4\">
              <figure class=\"image is-1by1\">
                  <img src=\"https://via.placeholder.com/512x512\">
              </figure>
              </div>
              <div class=\"column is-6\">
                  <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia a est nec hendrerit. Aenean volutpat nec mi nec egestas. Maecenas vitae vestibulum ex. Etiam sagittis luctus mi, eu convallis justo fringilla vitae. Sed in maximus purus, vel ullamcorper erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras blandit felis vitae ullamcorper sagittis. Aenean bibendum mauris quis venenatis sodales. Morbi eget nisl tellus. Ut laoreet congue est, at vehicula mauris eleifend ut. Aliquam pulvinar tempor mauris vitae viverra. In vitae sodales velit.

Nam volutpat lectus sit amet dignissim varius. Quisque sodales lacinia pharetra. Aliquam venenatis ornare felis nec dapibus. Nullam nibh neque, hendrerit a facilisis eu, congue at urna. Morbi ornare, odio nec cursus hendrerit, mauris sapien placerat est, et semper lacus massa non elit. Aliquam egestas bibendum neque, vel viverra felis ullamcorper semper. In sit amet pellentesque est.</p>
              </div>
          </div>
      </div>
  </div>
  <div class=\"carousel-cell\">
      <div class=\"container\" style=\"height: 100%;display: flex;align-items: center; justify-content: center;\">
          <div class=\"columns\">
              <div class=\"column is-4\">
              <figure class=\"image is-1by1\">
                  <img src=\"https://via.placeholder.com/512x512\">
              </figure>
              </div>
              <div class=\"column is-6\">
                  <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia a est nec hendrerit. Aenean volutpat nec mi nec egestas. Maecenas vitae vestibulum ex. Etiam sagittis luctus mi, eu convallis justo fringilla vitae. Sed in maximus purus, vel ullamcorper erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras blandit felis vitae ullamcorper sagittis. Aenean bibendum mauris quis venenatis sodales. Morbi eget nisl tellus. Ut laoreet congue est, at vehicula mauris eleifend ut. Aliquam pulvinar tempor mauris vitae viverra. In vitae sodales velit.

Nam volutpat lectus sit amet dignissim varius. Quisque sodales lacinia pharetra. Aliquam venenatis ornare felis nec dapibus. Nullam nibh neque, hendrerit a facilisis eu, congue at urna. Morbi ornare, odio nec cursus hendrerit, mauris sapien placerat est, et semper lacus massa non elit. Aliquam egestas bibendum neque, vel viverra felis ullamcorper semper. In sit amet pellentesque est.</p>
              </div>
          </div>
      </div>
  </div>
</div>
            ";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
        echo "        <section class=\"section\" id=\"features\">
            <div class=\"container invisible\" data-animate data-animation-classes=\"animated fadeIn\" data-animation-delay=\"500\">
                <h2 class=\"title is-1\" style=\"color: #3273dc; font-weight: bold;\">
                    A powerful and innovative feature set
                </h2>
                <h3 class=\"subtitle is-2\" style=\"color: grey\">
                    Built for developers, by developers.
                </h3>
                <br>
                <div class=\"columns list is-multiline is-mobile invisible\" data-animate data-animation-classes=\"animated fadeInUp\" data-animation-delay=\"500\">
                    <div class=\"column has-icon\">
                        <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/performance_edit.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">High Performance</h3>
                        <p>Load balanced by multiple servers will ensure that your site will get consistant performance and stabilty.</p>
                    </div>
                    <div class=\"column has-icon\">
                        <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/time.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">Deploy in minutes</h3>
                        <p>Thanks to automatic billing and an easy to use dashboard, you can easily deploy your new site online in minutes.</p>
                    </div>
                    
                    <div class=\"column has-icon\">
                        <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/deploy.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">Deploy Apps Easily</h3>
                        <p>Deploy and run more than 420 apps and 1115 PHP classes easily with industry standard app installer: Softaculous!</p>
                    </div>
                    <div class=\"column has-icon\">
                        <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/uptime.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">Uptime</h3>
                        <p>99.9% uptime guarantee lol text.<b>change</b></p>
                    </div>
                </div>
                <br>
                <div class=\"has-text-centered invisible\" data-animate data-animation-classes=\"animated fadeInUp\" data-animation-delay=\"1000\"><a class=\"button is-outlined is-large is-info\">More Features &rarr;</a></div>
            </div>
        </section>
<section class=\"hero is-info is-small invisible\" data-animate data-animation-classes=\"animated fadeInRight\" id=\"promo-section\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <div class=\"columns\">
        <div class=\"column is-two-thirds\">
            <div class=\"title is-2\">Launch Promo Offer</div>
            <span class=\"subtitle is-4\" style=\"margin-bottom: 20px\">
                In celebration of our launch, we are giving away promo codes to get upto 30% off from all hosting packages!
            </span>
        </div>
        <div class=\"column\" style=\"text-align: center;\">
        <span class=\"promo-coupon\" style=\" border: 3px dashed white;padding:10px;line-height:70px; font-size: 2.4em; text-align: center; font-weight: bold;color: whitesmoke;\">PROMO143<span class=\"blinking-text\">&#124;</span></span>
        </div>
      </div>
    </div>
  </div>
</section>

        <section class=\"section invisible\" data-animate data-animation-classes=\"animated fadeInUp\">
            <div class=\"container\"> 
            <h2 class=\"title is-1\" style=\"color: #3273dc; font-weight: bold;\">
                    Web Hosting Plans
                </h2>
                <h3 class=\"subtitle is-2\" style=\"color: grey\">
                    Our awesome plans for you!
                </h3>
                <br>
                <div class=\"columns price-list-interactive invisible\" data-animate data-animation-classes=\"animated fadeIn\" data-animation-delay=\"1000\"> 
                <div class=\"column is-3\"> 
                    <div class=\"hv-pricing-wrapper\"> 
                        <div class=\"hv-pricing-box\"> 
                            
                            <div class=\"type\"> 
                            <span class=\"icon is-large\"><i class=\"fa fa-leaf\"></i></span>
                            <br>

                                BASIC PLAN 
                            </div> 
                            <div class=\"price\"> 
                                <sup>\$</sup>99 
                                <small>per month</small> 
                            </div> 
                            <ul> 

                                <li><span class=\"icon\"><i class=\"fa fa-print\"></i></span> 30+ Accounts </li> 
                                <li><span class=\"icon\"><i class=\"fa fa-clock-o\"></i></span> 150+ Projects </li> 
                                <li><span class=\"icon\"><i class=\"fa fa-trash\"></i></span> Lead Required</li> 
                            </ul> 
                            <div class=\"pricing-footer\"> 

                                <a href=\"#\" class=\"button is-info is-large\">BOOK ORDER</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class=\"column is-3\"> 
                      <div class=\"hv-pricing-wrapper\"> 
                    <div class=\"hv-pricing-box\"> 
                        <div class=\"type\">
                        <span class=\"icon is-large\"><i class=\"fa fa-modx\"></i></span>
                            <br> 
                            MEDIUM PLAN 
                        </div> 
                        <div class=\"price\"> 
                            <sup>\$</sup>199 
                                    <small>per month</small> 
                        </div> 
                        <ul> 

                            <li><span class=\"icon\"><i class=\"fa fa-print\"></i></span> 30+ Accounts </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-clock-o\"></i></span> 150+ Projects </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-trash\"></i></span> Lead Required</li> 
                        </ul> 
                        <div class=\"pricing-footer\"> 

                            <a href=\"#\" class=\"button is-info is-large\">BOOK ORDER</a> 
                        </div> 
                    </div> 
                          </div> 
                </div> 
                <div class=\"column is-3\"> 
                      <div class=\"hv-pricing-wrapper\"> 
                    <div class=\"hv-pricing-box\"> 
                        <div class=\"type\"> 
                            <span class=\"icon is-large\"><i class=\"fa fa-rocket\"></i></span>
                            <br>
                            ADVANCE PLAN 
                        </div> 
                        <div class=\"price\"> 
                            <sup>\$</sup>249 
                                    <small>per month</small> 
                        </div> 
                        <ul> 

                            <li><span class=\"icon\"><i class=\"fa fa-print\"></i></span> 30+ Accounts </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-clock-o\"></i></span> 150+ Projects </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-trash\"></i></span> Lead Required</li> 
                        </ul> 
                        <div class=\"pricing-footer\"> 

                            <a href=\"#\" class=\"button is-info is-large\">BOOK ORDER</a> 
                        </div> 
                    </div> 
                          </div> 
                </div>
                <div class=\"column is-3\"> 
                      <div class=\"hv-pricing-wrapper\"> 
                    <div class=\"hv-pricing-box\"> 
                        <div class=\"type\"> 
                            <span class=\"icon is-large\"><i class=\"fa fa-fire\"></i></span>
                            <br>
                            EXTREME PLAN 
                        </div> 
                        <div class=\"price\"> 
                            <sup>\$</sup>349 
                                    <small>per month</small> 
                        </div> 
                        <ul> 

                            <li><span class=\"icon\"><i class=\"fa fa-print\"></i></span> 30+ Accounts </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-clock-o\"></i></span> 150+ Projects </li> 
                            <li><span class=\"icon\"><i class=\"fa fa-trash\"></i></span> Lead Required</li> 
                        </ul> 
                        <div class=\"pricing-footer\"> 

                            <a href=\"#\" class=\"button is-info is-large\">BOOK ORDER</a> 
                        </div> 
                    </div> 
                          </div> 
                </div> 
            
            
            </div> 

            </div> 
        </section>
        <section class=\"section invisible\" data-animate data-animation-classes=\"animated fadeInUp\" style=\"background-color: whitesmoke;\">
            <div class=\"container\">
                <div class=\"columns\">
                    <div class=\"column is-one-third has-text-centered\">
                        <figure class=\"image is1by1\" style=\"margin-bottom: 10px\">
                            <img src=\"./assets/img/wp_logo.svg\" />
                        </figure>
                        <div class=\"title is-3\">Managed Wordpress Hosting</div>
                    </div>
                    <div class=\"column\">
                    <span class=\"subtitle is-4\" style=\"padding-bottom: 25px\">We handle the hosting setup and management dirty work with priority support so you can focus on creating an amazing website!</span>
<p>Built on our state-of-the-art web hosting, Managed WordPress Hosting is the perfect solution for anyone who wants the power and simplicity of WordPress without the hassle of constant updates and technical adjustments.

More than just a simple install, WordPress is seamlessly integrated to your hosting so the moment you log in, you’re able to build, edit and manage your site. We’ve also modified our servers specifically for WordPress, giving you a level of speed and security you can’t get from a standard web hosting plan.

And of course, our support is available 24x7 to help with any questions you may have. In short, there’s no easier way to build and manage a fast, secure, reliable WordPress website or blog.
</p>
<br>
                        <div class=\"has-text-centered\"><a class=\"button is-primary is-large is-outlined\">Know More</a></div>
                    </div>
                </div>
            </div>
        </section>

";
    }

    public function getTemplateName()
    {
        return "home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 82,  112 => 81,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/index.html", "/var/www/html/Projects/hostvector/vendor/app/views/home/index.html");
    }
}
