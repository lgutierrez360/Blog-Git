<?php

/* @AppBundle/Resources/views/table/_stats.html.twig */
class __TwigTemplate_2d72b041bc5c11fa96b3a51bd748d84738d09b54f1b8246d173c3d04149620ec extends Twig_Template
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
        $__internal_cb36486ecd1df558554fcdc8f881ad3f98e4d475a9137fb9862a7d301cb5078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb36486ecd1df558554fcdc8f881ad3f98e4d475a9137fb9862a7d301cb5078e->enter($__internal_cb36486ecd1df558554fcdc8f881ad3f98e4d475a9137fb9862a7d301cb5078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_stats.html.twig"));

        $__internal_aef9d4622851da63ac3fbc0ebfe3e427299bea5e065ba1abe7a9393b6c0b2977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef9d4622851da63ac3fbc0ebfe3e427299bea5e065ba1abe7a9393b6c0b2977->enter($__internal_aef9d4622851da63ac3fbc0ebfe3e427299bea5e065ba1abe7a9393b6c0b2977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_stats.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (array_key_exists("tableRenderStats", $context)) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("kiliktable.showing_entries", $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", array()), array("%firstRow%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "firstRow", array()), "%lastRow%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastRow", array()), "%filteredRows%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", array())))), "html", null, true);
            echo "
    ";
            // line 5
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", array()) != $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", array())) && ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", array()) > 0))) {
                // line 6
                echo "        (";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("kiliktable.filtered_from", $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", array()), array("%totalRows%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", array())))), "html", null, true);
                echo ")
    ";
            }
        }
        
        $__internal_cb36486ecd1df558554fcdc8f881ad3f98e4d475a9137fb9862a7d301cb5078e->leave($__internal_cb36486ecd1df558554fcdc8f881ad3f98e4d475a9137fb9862a7d301cb5078e_prof);

        
        $__internal_aef9d4622851da63ac3fbc0ebfe3e427299bea5e065ba1abe7a9393b6c0b2977->leave($__internal_aef9d4622851da63ac3fbc0ebfe3e427299bea5e065ba1abe7a9393b6c0b2977_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @KilikTable/_stats.html.twig #}

{% if tableRenderStats is defined %}
    {{ \"kiliktable.showing_entries\"|transchoice(table.filteredRows,{\"%firstRow%\": table.firstRow,\"%lastRow%\": table.lastRow,\"%filteredRows%\":table.filteredRows})|capitalize }}
    {% if table.filteredRows != table.totalRows and table.totalRows > 0%}
        ({{ \"kiliktable.filtered_from\"|transchoice(table.totalRows,{\"%totalRows%\":table.totalRows})|capitalize }})
    {% endif %}
{% endif %}
", "@AppBundle/Resources/views/table/_stats.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table/_stats.html.twig");
    }
}
