<?php

/* home/features.html */
class __TwigTemplate_16ccb2c2de007bfbe842b1029251ce56be5ffbb8a1b301c515ccdb11f1fa4cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/features.html", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"section\" id=\"features\">
    <div class=\"container invisible\" data-animate=\"\" data-animation-classes=\"animated fadeIn\" data-animation-delay=\"500\">
        <h1 class=\"title is-1\" style=\"color: #3273dc; font-weight: bold;\">
            A powerful and innovative feature set
        </h1>
        <span class=\"subtitle is-2\" style=\"color: grey\">
            Built for developers, by developers.
        </span>
        <br><br>
            <div class=\"columns list is-multiline is-mobile invisible\" data-animate=\"\" data-animation-classes=\"animated fadeInUp\" data-animation-delay=\"500\">
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/performance_edit.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        High Performance
                    </h3>
                    <p>
                        Load balanced by multiple servers will ensure that your site will get consistant performance and stabilty.
                    </p>
                </div>
                <!--<div class=\"column has-icon\">
                       <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/hard_disk.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">Flexible space configuration</h3>
                        <p>Never run out of space with the ability to attach multiple highly available volumes.</p>
                    </div>-->
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/time.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Deploy in minutes
                    </h3>
                    <p>
                        Thanks to automatic billing and an easy to use dashboard, you can easily deploy your new site online in minutes.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/deploy.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Deploy Apps Easily
                    </h3>
                    <p>
                        Deploy and run more than 420 apps and 1115 PHP classes easily with industry standard app installer: Softaculous!
                    </p>
                </div>
                <!--<div class=\"column has-icon\">
                        <figure class=\"image is-32x32\">
                            <img src=\"./assets/img/logs.svg\"/>
                        </figure>
                        <h3 class=\"title is-4\">Monitoring and logs</h3>
                        <p>Collect metrics, monitor performance, and check logs to optimize your application and server performance.</p>
                    </div>-->
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/cloudflare.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Cloudflare
                    </h3>
                    <p>
                        Use Cloudflare to secure your site against attacks, improve performance, get rich analytics, and much more for your site.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/database.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Database
                    </h3>
                    <p>
                        Use databasing capabilities using Mysql. phpmyadmin is also available for your modifications
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/antivirus.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        ClamAV® Antivirus
                    </h3>
                    <p>
                        Use ClamAV® antivirus engine to detect trojans, viruses, malware & other malicious threats.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/backup.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Backup
                    </h3>
                    <p>
                        Backup and Restore your site safely with easy to use backup tools.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/php.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        PHP
                    </h3>
                    <p>
                        PHP interpreters with multiple version manager and INI editor.
                        <b>
                            maybechange
                        </b>
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/perl.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        PERL
                    </h3>
                    <p>
                        PERL 5 for both rapid prototyping and large scale development projects.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/seo.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        SEO Tools
                    </h3>
                    <p>
                        Use our free SEO Tools for better SERP Ranking and more visitors.
                        <b>
                            change
                        </b>
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/ssh.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        SSH Access
                    </h3>
                    <p>
                        Secure SSH Access with key based login for secure file transfer and remote logins over the internet.
                    </p>
                </div>
                <div class=\"column has-icon\">
                    <figure class=\"image is-32x32\">
                        <img src=\"./assets/img/uptime.svg\"/>
                    </figure>
                    <h3 class=\"title is-4\">
                        Uptime
                    </h3>
                    <p>
                        99.9% uptime guarantee lol text.
                        <b>
                            change
                        </b>
                    </p>
                </div>
            </div>
        </br>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/features.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/features.html", "/var/www/html/Projects/hostvector/vendor/app/views/home/features.html");
    }
}