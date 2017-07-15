<?php

/* home/layouts/includes/nav.tpl */
class __TwigTemplate_fefe385e02e43014009a5025ead18dd606c60f17ab91f20e3e2e16c03b86d754 extends Twig_Template
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
        echo "          <nav class=\"navbar container\">
  <div class=\"navbar-brand\">
    <a class=\"nav-item\" href=\"../index.html\">
        <img src=\"assets/hv.png\">
    </a>

    <div class=\"navbar-burger burger\" data-target=\"navMenuExample\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id=\"navMenuExample\" class=\"navbar-menu\">
    <div class=\"navbar-start\">
      <a class=\"navbar-item \" href=\"/\">
        Home
      </a>
      <a class=\"navbar-item \" href=\"/plans.html\">
        Plans
      </a>
      <a class=\"navbar-item \" href=\"/features.html\">
        Features
      </a>
      <a class=\"navbar-item \" href=\"/business.html\">
        Business
      </a>
      <a class=\"navbar-item \" href=\"https://rockitech.net\">
        Blog
      </a>
      
    </div>

    <div class=\"navbar-end\">
      <a class=\"navbar-item\" href=\"/about.html\">
        About
      </a>
      <a class=\"navbar-item\" href=\"/contact.html\">
        Contact Us
      </a>
      <div class=\"navbar-item\">
        <div class=\"field is-grouped\">
          <p class=\"control\">
            <a class=\"button is-success\" href=\"https://www.hostvector.in/clients/register.php\">
              <span>Register</span>
            </a>
          </p>
          <p class=\"control\">
            <a class=\"button is-info\" href=\"https://www.hostvector.in/clients/clientarea.php\">
              <span class=\"icon\">
                <i class=\"fa fa-lock fa-fw\"></i>
              </span>
              <span>Login</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "home/layouts/includes/nav.tpl";
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
        return new Twig_Source("", "home/layouts/includes/nav.tpl", "/var/www/html/Projects/hv/vendor/app/views/home/layouts/includes/nav.tpl");
    }
}
