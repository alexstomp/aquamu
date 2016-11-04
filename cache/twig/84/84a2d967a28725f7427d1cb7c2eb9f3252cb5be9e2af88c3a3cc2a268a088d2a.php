<?php

/* forms/fields/formname/formname.html.twig */
class __TwigTemplate_ba1a61f6c0114ae1900985afeb53128de2558fe2399d32d8f2ffbad31c9d5305 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__form-name__\" value=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/formname/formname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"hidden\" name=\"__form-name__\" value=\"{{ form.name }}\" />";
    }
}
