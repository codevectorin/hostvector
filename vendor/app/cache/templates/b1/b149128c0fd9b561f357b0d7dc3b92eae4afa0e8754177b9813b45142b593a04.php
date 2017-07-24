<?php

/* home/layouts/includes/footer.tpl */
class __TwigTemplate_be61236858c7fae051229678d3f62150da21a5dd6b7e06b60f1798dc937abf3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   <footer class=\"footer invisible\" data-animate data-animation-classes=\"animated fadeInUp\" data-animation-delay=\"300\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"columns\">
                    <div class=\"column\">
                        <h5>
                                HostVector
                            </h5>
                        <a href=\"/index.html\" title=\"Home\">Home</a>
                        <a href=\"/plans.html\" title=\"Plans\">Plans</a>
                        <a href=\"/features.html\" title=\"Features\">Features</a>
                    </div>
                    <div class=\"column\">
                        <h5>
                                Company
                            </h5>
                        <a href=\"/about.html\" title=\"About Us\">
                                About Us
                            </a>
                        <a href=\"/contact.html\" title=\"Contact Us\">
                                Contact Us
                            </a>
                        <a href=\"tos.html\" title=\"Terms of Service\">Terms of Service</a>
                        <a href=\"privacy.html\" title=\"Privacy Policy\">Privacy Policy</a>
                    </div>
                    <div class=\"column\">
                        <h5>
                                Help
                            </h5>
                        <a href=\"/support.html\" title=\"Support\">
                                Support
                            </a>
                        <a href=\"/faq.html\" title=\"FAQ\">
                                FAQ
                            </a>
                    </div>
                    <div class=\"column\">
                        <h5>
                                Connect
                            </h5>
                        <a href=\"//facebook.com/hostvector.in\" target=\"__blank\">
                            <span class=\"icon is-small\"><i class=\"fa fa-facebook\">
                                </i></span> Facebook
                        </a>
                        <a href=\"//twitter.com/@hostvectorin\" target=\"__blank\">
                            <span class=\"icon is-small\"><i class=\"fa fa-twitter\">
                                </i></span> Twitter
                        </a>
                    </div>
                    <div class=\"column is-one-third\">
                        <a class=\"twitter-timeline\" data-dnt=\"true\" data-height=\"200\" data-link-color=\"3273dc\" href=\"https://twitter.com/hostvectorin\">Tweets by HostVectorIn</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottomPart\">
            <div class=\"container\">&copy; HostVector. All Rights Reserved! 2014 - 2017</div></div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "home/layouts/includes/footer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/layouts/includes/footer.tpl", "/var/www/html/Projects/hostvector/vendor/app/views/home/layouts/includes/footer.tpl");
    }
}
