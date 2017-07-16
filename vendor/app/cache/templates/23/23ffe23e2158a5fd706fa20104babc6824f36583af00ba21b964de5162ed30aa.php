<?php

/* home/layouts/main.tpl */
class __TwigTemplate_b3e2ccccb8a0e559a2afa4fc91a0bf1765a49c20db8616f42368d1b15019f93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      ";
        // line 4
        $this->loadTemplate("home/layouts/includes/header.tpl", "home/layouts/main.tpl", 4)->display($context);
        // line 5
        echo "    </head>
    <body>
        <section class=\"hero is-light";
        // line 7
        if (        $this->hasBlock("fullscreenHeroBody", $context, $blocks)) {
            echo " is-fullheight";
        }
        echo "\" id=\"frontMatter\">
            <div class=\"hero-head\">
              ";
        // line 9
        $this->loadTemplate("home/layouts/includes/nav.tpl", "home/layouts/main.tpl", 9)->display($context);
        // line 10
        echo "            </div>

            ";
        // line 12
        if (        $this->hasBlock("fullscreenHeroBody", $context, $blocks)) {
            // line 13
            echo "              <div class=\"hero-body\">
                ";
            // line 14
            $this->displayBlock("fullscreenHeroBody", $context, $blocks);
            echo "
              </div>
            ";
        }
        // line 17
        echo "        </section>

        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("home/layouts/includes/footer.tpl", "home/layouts/main.tpl", 21)->display($context);
        // line 22
        echo "
        <script src=\"assets/js/bulma.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.9/flickity.pkgd.min.js\"></script>
        <script src=\"assets/js/animate.js\"></script>
        <script>
        var animate = new Animate({
            target: '[data-animate]',
            animatedClass: 'visible',
            offset: [0.20, 0.5],
            delay: 0,
            remove: false,
            reverse: false,
            scrolled: false,
            debug: false,
            onLoad: true,
            onScroll: true,
            onResize: false,
            callbackOnInit: function() {
                console.log('Initialised');
            },
            callbackOnAnimate: function(element) {
                console.log(element);
            }
        });

        animate.init();
    </script>

    </body>
</html>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "home/layouts/main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  66 => 22,  64 => 21,  61 => 20,  59 => 19,  55 => 17,  49 => 14,  46 => 13,  44 => 12,  40 => 10,  38 => 9,  31 => 7,  27 => 5,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/layouts/main.tpl", "/var/www/html/Projects/hostvector/vendor/app/views/home/layouts/main.tpl");
    }
}
