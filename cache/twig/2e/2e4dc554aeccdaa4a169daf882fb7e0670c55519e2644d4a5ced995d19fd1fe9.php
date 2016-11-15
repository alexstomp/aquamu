<?php

/* partials/header.html.twig */
class __TwigTemplate_e5ea613d2513799a467493d59b461d5319bfcf8739a23ba8ff641bd87db747d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"home\">
  ";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        // line 5
        echo "  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\"><img src=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "logo", array());
        echo "\" style=\"text-align: center; width: 250px; margin-bottom: 30px;\"/></h1>
      <h3>";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "description", array());
        echo "</h3>
      <hr />
    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#work\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
";
    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 3)->display($context);
        // line 4
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  46 => 2,  33 => 8,  29 => 7,  25 => 5,  23 => 2,  20 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\"><img src=\"{{ site.header.logo }}\" style=\"text-align: center; width: 250px; margin-bottom: 30px;\"/></h1>
      <h3>{{ site.header.description }}</h3>
      <hr />
    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#work\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
";
    }
}
