<?php

/* home/business.html */
class __TwigTemplate_0e543e365f847d29cbd742784d8bb68c48945f2bd3aaf95b2131d0ab1ae9171c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/business.html", 1);
        $this->blocks = array(
            'heroClass' => array($this, 'block_heroClass'),
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
    public function block_heroClass($context, array $blocks = array())
    {
        echo "business-header";
    }

    // line 4
    public function block_fullscreenHeroBody($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">
    <h1 class=\"title is-1\" style=\"color: white;text-shadow: 1px 1px 1px #000;\">
        HostVector for Business!
    </h1>
    <br>
        <span class=\"subtitle is-4\" style=\"color: whitesmoke;text-shadow: 1px 1px 1px #000;\">
            Kickstart your business with the best in-class hosting from HostVector.
        </span>
    </br>
</div>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<section class=\"section\">
    <div class=\"container\">
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/business.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  53 => 17,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/business.html", "/var/www/html/Projects/hostvector/vendor/app/views/home/business.html");
    }
}
