<?php

/* home/about.html */
class __TwigTemplate_21c396acdd15bef724cab227ddb74945d12dcaca056c1fb57e5d1e502fd2f9f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/about.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"section\">
  <div class=\"container invisible\" data-animate data-animation-classes=\"animated fadeIn\" data-animation-delay=\"500\">
      <h1 class=\"title is-2\" style=\"color: #3273dc; font-weight: bold;\">
          We are HostVector Web Hosting Solutions <span class=\"icon is-large\"><i class=\"fa fa-heart\"></i></span>
      </h1>
      <p class=\"subtitle is-5\" style=\"color: grey\">
          We're passionate about simplifying web infrastructure and building a product that developers love.
      </p>
      <br>
      <div class=\"content invisible\" data-animate data-animation-classes=\"animated fadeInUp\" data-animation-delay=\"500\">
          <h2>About Us</h2>
          <p>We are actually a group of developers, fed up with Hosting Services who treat developers just for money. We started this endeavor to provide our fellow developers with affordable yet high-quality services to help them nurture to a better level themselves.</p>
          <h2>Our Core Values</h2>
          <ul>
            <li>Strive for simple and elegant solutions.</li>
            <li>Respect your peers.</li>
            <li>Speak up and listen when others do. </li>
            <li>Trust and be trustworthy.</li>
            <li>Help and contribute to the community.</li>
            <li>Love is what makes us great.</li>
          </ul>
      </div>
  </div>
</section>
  ";
    }

    public function getTemplateName()
    {
        return "home/about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/about.html", "/var/www/html/Projects/hv/vendor/app/views/home/about.html");
    }
}
