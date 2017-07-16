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
        echo " <section class=\"section\">
            <div class=\"container invisible\" data-animate data-animation-classes=\"animated fadeIn\" data-animation-delay=\"500\">
            <h1 class=\"title is-1\" style=\"color: #3273dc; font-weight: bold;\">
                    Contact Us
                </h1>
                <p class=\"subtitle is-4\" style=\"color: grey\">
                    Clarifications? Ask us, we are happy to help you!
                </p>
                <hr>
                <form action=\"\" method=\"post\" onsubmit=\"return validateForm();\">
                <div class=\"field is-horizontal\">
                  <div class=\"field-label is-normal\">
                    <label class=\"label\">From</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field is-grouped\">
                      <p class=\"control is-expanded has-icons-left has-icons-right\">
                        <input class=\"input\" type=\"text\" placeholder=\"Name\">
                        <span class=\"icon is-small is-left\">
                          <i class=\"fa fa-user\"></i>
                        </span>
                        <label class=\"response\"></label>
                      </p>
                    </div>
                    <div class=\"field\">
                      <p class=\"control is-expanded has-icons-left has-icons-right\">
                        <input class=\"input\" type=\"text\" placeholder=\"Email\">
                        <span class=\"icon is-small is-left\">
                          <i class=\"fa fa-envelope\"></i>
                        </span>
                        <label class=\"response\"></label>
                        </p>
                    </div>
                  </div>
                </div>

                <div class=\"field is-horizontal\">
                  <div class=\"field-label is-normal\">
                    <label class=\"label\">Department</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field is-narrow\">
                      <div class=\"control\">
                        <div class=\"select is-fullwidth\">
                          <select name=\"hv-department\">
                            <option>Sales</option>
                            <option>Marketing</option>
                            <option>Services</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"field is-horizontal\">
                  <div class=\"field-label\">
                    <label class=\"label\">Already a client?</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field is-narrow\">
                      <div class=\"control\">
                        <label class=\"radio\">
                          <input type=\"radio\" name=\"member\">
                          Yes
                        </label>
                        <label class=\"radio\">
                          <input type=\"radio\" name=\"member\" checked>
                          No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"field is-horizontal\">
                  <div class=\"field-label is-normal\">
                    <label class=\"label\">Subject</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field\">
                      <p class=\"control is-expanded has-icons-left has-icons-right\">
                        <input class=\"input\" type=\"text\" placeholder=\"e.g. Do you have 1 year subscription?\">
                          <span class=\"icon is-small is-left\">
                          <i class=\"fa fa-sticky-note\"></i>
                        </span>
                        <label class=\"response\"></label>
                      </p>
                    </div>
                  </div>
                </div>

                <div class=\"field is-horizontal\">
                  <div class=\"field-label is-normal\">
                    <label class=\"label\">Question</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field\">
                      <p class=\"control is-expanded has-icons-left has-icons-right\">
                        <textarea class=\"textarea\" placeholder=\"Explain how we can help you\" id=\"msgbox\"></textarea>
                        <label class=\"response\"></label>
                      </p>
                    </div>
                  </div>
                </div>
                <script src='https://www.google.com/recaptcha/api.js'></script>


                <div class=\"field is-horizontal\">
                  <div class=\"field-label is-normal\">
                  <label class=\"label\">Captcha</label>
                  </div>
                  <div class=\"field-body\">
                    <div class=\"field\">
                      <div class=\"control\">
                        <div class=\"g-recaptcha\" data-sitekey=\"6LfMMSkUAAAAAAh_iPmJ2Lqp9ceUaK9EeBdC6Uth\"></div>
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
                        <input type=\"submit\" class=\"button is-primary\" value=\"Send Message\">
                      </div>
                    </div>
                  </div>
                </div>
                </form>
            </div>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js\"></script>
            <script type=\"text/javascript\">
              //validate section
function reFormat(e,s,a){return'<span class=\"icon is-small is-right\"><i class=\"fa fa-'+a+'\"></i></span></p><p class=\"help is-'+s+'\">'+e+\"</p>\"}function validateForm(){var e=document.getElementsByTagName(\"input\"),s=document.getElementsByClassName(\"response\"),a=1;return\"\"==e[0].value?(e[0].className=\"input is-danger\",s[0].innerHTML=reFormat(\"Please enter your name\",\"danger\",\"close\"),a=0):(e[0].className=\"input is-success\",s[0].innerHTML=reFormat(\"\",\"success\",\"check\")),\"\"==e[1].value?(e[1].className=\"input is-danger\",s[1].innerHTML=reFormat(\"Please enter your email id\",\"danger\",\"close\"),a=0):mailReg.test(e[1].value)?(e[1].className=\"input is-danger\",s[1].innerHTML=reFormat(\"Please enter a valid mail id\",\"danger\",\"close\"),a=0):(e[1].className=\"input is-success\",s[1].innerHTML=reFormat(\"\",\"success\",\"check\")),\"\"==e[4].value?(e[4].className=\"input is-danger\",s[2].innerHTML=reFormat(\"Please enter a subject\",\"danger\",\"close\"),a=0):(e[4].className=\"input is-success\",s[2].innerHTML=reFormat(\"\",\"success\",\"check\")),\"\"==document.getElementById(\"msgbox\").value?(document.getElementById(\"msgbox\").className=\"textarea is-danger\",s[3].innerHTML=reFormat(\"Please enter a message!\",\"danger\",\"close\"),a=0):(document.getElementById(\"msgbox\").className=\"textarea is-success\",s[3].innerHTML=reFormat(\"\",\"success\",\"check\")),0==a?!1:!0}var mailReg=/^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
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
        return new Twig_Source("", "home/contact.html", "/var/www/html/Projects/hostvector/vendor/app/views/home/contact.html");
    }
}
