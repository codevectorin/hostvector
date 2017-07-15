<?php

/* home/contact.html */
class __TwigTemplate_eecf36a6bfb52f38c0cc28a1b2a3f99037605ece232021ececb88fe789ad7f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/contact.html", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<section class=\"section\">
    <div class=\"container invisible\" data-animate=\"\" data-animation-classes=\"animated fadeIn\" data-animation-delay=\"500\">
        <h1 class=\"title is-1\" style=\"color: #3273dc; font-weight: bold;\">
            Contact Us
        </h1>
        <p class=\"subtitle is-4\" style=\"color: grey\">
            Juts another subtitle message
        </p>
        <hr>
            <div class=\"field is-horizontal\">
                <div class=\"field-label is-normal\">
                    <label class=\"label\">
                        From
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field is-grouped\">
                        <p class=\"control is-expanded has-icons-left\">
                            <input class=\"input\" placeholder=\"Name\" type=\"text\">
                                <span class=\"icon is-small is-left\">
                                    <i class=\"fa fa-user\">
                                    </i>
                                </span>
                            </input>
                        </p>
                    </div>
                    <div class=\"field\">
                        <p class=\"control is-expanded has-icons-left has-icons-right\">
                            <input class=\"input is-success\" placeholder=\"Email\" type=\"email\" value=\"alex@smith.com\">
                                <span class=\"icon is-small is-left\">
                                    <i class=\"fa fa-envelope\">
                                    </i>
                                </span>
                                <span class=\"icon is-small is-right\">
                                    <i class=\"fa fa-check\">
                                    </i>
                                </span>
                            </input>
                        </p>
                        <p class=\"help is-success\">
                            This email is correct
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"field is-horizontal\">
                <div class=\"field-label is-normal\">
                    <label class=\"label\">
                        Department
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field is-narrow\">
                        <div class=\"control\">
                            <div class=\"select is-fullwidth\">
                                <select name=\"hv-department\">
                                    <option>
                                        Sales
                                    </option>
                                    <option>
                                        Marketing
                                    </option>
                                    <option>
                                        Services
                                    </option>
                                    <option>
                                        Others
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field is-horizontal\">
                <div class=\"field-label\">
                    <label class=\"label\">
                        Already a client?
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field is-narrow\">
                        <div class=\"control\">
                            <label class=\"radio\">
                                <input name=\"member\" type=\"radio\">
                                    Yes
                                </input>
                            </label>
                            <label class=\"radio\">
                                <input name=\"member\" type=\"radio\">
                                    No
                                </input>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field is-horizontal\">
                <div class=\"field-label is-normal\">
                    <label class=\"label\">
                        Subject
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field\">
                        <div class=\"control\">
                            <input class=\"input is-danger\" placeholder=\"e.g. Partnership opportunity\" type=\"text\">
                            </input>
                        </div>
                        <p class=\"help is-danger\">
                            This field is required
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"field is-horizontal\">
                <div class=\"field-label is-normal\">
                    <label class=\"label\">
                        Question
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field\">
                        <div class=\"control\">
                            <textarea class=\"textarea\" placeholder=\"Explain how we can help you\">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <script src=\"https://www.google.com/recaptcha/api.js\">
            </script>
            <div class=\"field is-horizontal\">
                <div class=\"field-label is-normal\">
                    <label class=\"label\">
                        Captcha
                    </label>
                </div>
                <div class=\"field-body\">
                    <div class=\"field\">
                        <div class=\"control\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LfMMSkUAAAAAAh_iPmJ2Lqp9ceUaK9EeBdC6Uth\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field is-horizontal\">
                <div class=\"field-label\">
                    <!-- Left empty for spacing -->
                </div>
                <div class=\"field-body\">
                    <div class=\"field\">
                        <div class=\"control\">
                            <button class=\"button is-primary\">
                                Send message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </hr>
    </div>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js\">
    </script>
    <script type=\"text/javascript\">
        //add validator
    </script>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/contact.html", "/var/www/html/Projects/hv/vendor/app/views/home/contact.html");
    }
}
