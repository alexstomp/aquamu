<?php

/* modular/form.html.twig */
class __TwigTemplate_289564a24c706e12c69b3164455d3f758f38419afcda17275449d185ddbed91f extends Twig_Template
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
        echo "<section id=\"contact\">
    <div class=\"row section-head\">
        <!-- <div class=\"two columns header-col\">
            <h1><span></span></h1>
        </div> -->
        <div class=\"twelve columns\">
            <p class=\"lead\">
                <span>Muriel</span> attended the <span>Art Academy School of Brussels, Belgium</span> and continued her education in watercolors upon her arrival in the <span>United States.</span><br />
                She loves to paint scenes from places she visited while traveling (<span>Paris</span>, <span>Provence</span>, <span>Italy</span>, <span>Tahiti</span>) and from her current hometown of <span>Chicago</span>.  She paints with great spontaneity in <span>vibrant</span>, <span>bright colors</span>.<br />
                <span style=\"color: #858585; font-size: 14px;line-height: 25px; padding-top: 10px;display: block;\">
                    Her work has been featured at several galleries, exhibits and art shows: <br />
                    St Charles Country Club, Deep Creek Art Gallerie in Hinsdale, Rush Presbyterian Hospital, Naperville Art League, Hinsdale Fine Arts Show, Graue Mill Fine Arts Festival, Mayslake Peabody Estate, Downers Grove Art Festival, etc.
                </span>
            </p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <span style=\"text-align: center; padding-bottom: 20px;color: #cacaca;display: block;\">";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</span>
            ";
        // line 20
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"contact\">
    <div class=\"row section-head\">
        <!-- <div class=\"two columns header-col\">
            <h1><span></span></h1>
        </div> -->
        <div class=\"twelve columns\">
            <p class=\"lead\">
                <span>Muriel</span> attended the <span>Art Academy School of Brussels, Belgium</span> and continued her education in watercolors upon her arrival in the <span>United States.</span><br />
                She loves to paint scenes from places she visited while traveling (<span>Paris</span>, <span>Provence</span>, <span>Italy</span>, <span>Tahiti</span>) and from her current hometown of <span>Chicago</span>.  She paints with great spontaneity in <span>vibrant</span>, <span>bright colors</span>.<br />
                <span style=\"color: #858585; font-size: 14px;line-height: 25px; padding-top: 10px;display: block;\">
                    Her work has been featured at several galleries, exhibits and art shows: <br />
                    St Charles Country Club, Deep Creek Art Gallerie in Hinsdale, Rush Presbyterian Hospital, Naperville Art League, Hinsdale Fine Arts Show, Graue Mill Fine Arts Festival, Mayslake Peabody Estate, Downers Grove Art Festival, etc.
                </span>
            </p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <span style=\"text-align: center; padding-bottom: 20px;color: #cacaca;display: block;\">{{ page.content }}</span>
            {% include \"forms/form.html.twig\" %}
        </div>
    </div>
</section>
";
    }
}
