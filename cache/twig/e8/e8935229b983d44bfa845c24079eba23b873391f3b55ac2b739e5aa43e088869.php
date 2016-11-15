<?php

/* modular/work.html.twig */
class __TwigTemplate_2c28bb1d8146687927cac52ee0ec7e3aabdc8e50a547ca6f4e3071b0bc08d530 extends Twig_Template
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
        echo "<section id=\"gallery\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            <ul class=\"work-filters\">
                <li class=\"work-filter\"><a class=\"filter selected\" data-rel=\"\">All</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"commission\">Commissions</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"chicago\">Chicago</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"flowers\">Flowers</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"med\">Mediterranean</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"misc\">misc</a></li>
            </ul>
            <div id=\"portfolio-wrapper\" class=\"bgrid-thirds s-bgrid-thirds cf\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                <div class=\"columns portfolio-item\" data-rel=\"";
            echo $this->getAttribute($context["item"], "tags", array());
            echo "\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-";
            // line 17
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" title=\"\">
                            ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "cropZoom", array(0 => 350, 1 => 350), "method"), "html", array(), "method");
            echo "
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>";
            // line 21
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h5>
                                    <p>";
            // line 22
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "        <div id=\"modal-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"";
            // line 34
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" />
            <div class=\"description-box\">
                <h4>";
            // line 36
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h4>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>";
            // line 37
            echo $this->getAttribute($context["item"], "tags", array());
            echo "</span>
            </div>
            <div class=\"link-box\">
                <a class=\"popup-modal-dismiss\" style=\"float: right;\">Close</a>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  131 => 37,  127 => 36,  122 => 34,  117 => 33,  100 => 32,  96 => 30,  74 => 22,  70 => 21,  64 => 18,  60 => 17,  54 => 15,  37 => 14,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"gallery\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            {{ page.content }}
            <ul class=\"work-filters\">
                <li class=\"work-filter\"><a class=\"filter selected\" data-rel=\"\">All</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"commission\">Commissions</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"chicago\">Chicago</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"flowers\">Flowers</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"med\">Mediterranean</a></li>
                <li class=\"work-filter\"><a class=\"filter\" data-rel=\"misc\">misc</a></li>
            </ul>
            <div id=\"portfolio-wrapper\" class=\"bgrid-thirds s-bgrid-thirds cf\">
                {% for item in page.header.portfolio %}
                <div class=\"columns portfolio-item\" data-rel=\"{{ item.tags }}\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-{{ loop.index }}\" title=\"\">
                            {{ page.media[item.img].cropZoom(350, 350).html() }}
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>{{ item.title }}</h5>
                                    <p>{{ item.description }}</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
        {% for item in page.header.portfolio %}
        <div id=\"modal-{{ loop.index }}\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"{{ page.media[item.img].url }}\" alt=\"\" />
            <div class=\"description-box\">
                <h4>{{ item.title }}</h4>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>{{ item.tags }}</span>
            </div>
            <div class=\"link-box\">
                <a class=\"popup-modal-dismiss\" style=\"float: right;\">Close</a>
            </div>
        </div>
        {% endfor %}
    </div>
</section>
";
    }
}
