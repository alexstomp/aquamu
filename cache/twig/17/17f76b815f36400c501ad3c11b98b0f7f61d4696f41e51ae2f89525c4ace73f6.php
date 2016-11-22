<?php

/* formdata.html.twig */
class __TwigTemplate_90ca136a8def165c88f65b540fdfca53e91b0757586be42b4ef27182046aef8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"nine columns main-col\">
            <h2>";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
        echo "</h2>
            ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

            ";
        // line 9
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 9)->display($context);
        echo " <br />
            Back to <a href=\"";
        // line 10
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">homepage</a>.
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}
{% block content %}
<section id=\"about\">
    <div class=\"row\">
        <div class=\"nine columns main-col\">
            <h2>{{ form.message }}</h2>
            {{ content }}

            {% include \"forms/data.html.twig\" %} <br />
            Back to <a href=\"{{ base_url_absolute }}\">homepage</a>.
        </div>
    </div>
</section>
{% endblock %}
";
    }
}
