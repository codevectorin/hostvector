<?php

/* home/tos.html */
class __TwigTemplate_86ac37c4179d88818647d6478c0b1184eb2a0659a847f994d8f1d9e30120074c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/layouts/main.tpl", "home/tos.html", 1);
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
        echo "
<section class=\"container\">
  <div class=\"content\">
    <h1>HostVector Terms of Service and Privacy Policy</h1>

<h2>1. Terms</h2>

  <p>By accessing the website at <a href=\"http://hostvector.in\">http://hostvector.in</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>

<h2>2. Use License</h2>

  <ol type=\"a\">
    <li>
      Permission is granted to temporarily download one copy of the materials (information or software) on HostVector's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:

      <ol type=\"i\">
        <li>modify or copy the materials;</li>
        <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
        <li>attempt to decompile or reverse engineer any software contained on HostVector's website;</li>
        <li>remove any copyright or other proprietary notations from the materials; or</li>
        <li>transfer the materials to another person or \"mirror\" the materials on any other server.</li>
      </ol>
    </li>
    <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by HostVector at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
  </ol>

<h2>3. Disclaimer</h2>

  <ol type=\"a\">
    <li>The materials on HostVector's website are provided on an 'as is' basis. HostVector makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
    <li>Further, HostVector does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
  </ol>

<h2>4. Limitations</h2>

  <p>In no event shall HostVector or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on HostVector's website, even if HostVector or a HostVector authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

<h2>5. Accuracy of materials</h2>

  <p>The materials appearing on HostVector's website could include technical, typographical, or photographic errors. HostVector does not warrant that any of the materials on its website are accurate, complete or current. HostVector may make changes to the materials contained on its website at any time without notice. However HostVector does not make any commitment to update the materials.</p>

<h2>6. Links</h2>

  <p>HostVector has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by HostVector of the site. Use of any such linked website is at the user's own risk.</p>

<h2>7. Modifications</h2>

  <p>HostVector may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>

<h2>8. Governing Law</h2>

  <p>These terms and conditions are governed by and construed in accordance with the laws of Kerala and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "home/tos.html";
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
        return new Twig_Source("", "home/tos.html", "/var/www/html/Projects/hv/vendor/app/views/home/tos.html");
    }
}