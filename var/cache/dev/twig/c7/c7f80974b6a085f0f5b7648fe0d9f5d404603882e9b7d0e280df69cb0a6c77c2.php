<?php

/* @AppBundle/Resources/views/table/_columnName.html.twig */
class __TwigTemplate_43fe7ff1ec3c9eadf45cd4c2101b5c3a7e717662092a846c764b80bf8144a95a extends Twig_Template
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
        $__internal_a3c1f6d3909a404371998053bc39a11ace938144a8aa350beb5537efeb8cf61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c1f6d3909a404371998053bc39a11ace938144a8aa350beb5537efeb8cf61c->enter($__internal_a3c1f6d3909a404371998053bc39a11ace938144a8aa350beb5537efeb8cf61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_columnName.html.twig"));

        $__internal_05b6854fa531f1caf1ccf6945dc864cbdbff9cdd1a577894a5813475bc524631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b6854fa531f1caf1ccf6945dc864cbdbff9cdd1a577894a5813475bc524631->enter($__internal_05b6854fa531f1caf1ccf6945dc864cbdbff9cdd1a577894a5813475bc524631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_columnName.html.twig"));

        // line 2
        $context["label"] = $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", array());
        // line 3
        if ( !(null === $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "translateDomain", array()))) {
            // line 4
            echo "    ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", array()), array(), $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "translateDomain", array()));
            // line 5
            echo "    ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "capitalize", array())) {
                // line 6
                echo "        ";
                $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")));
                // line 7
                echo "    ";
            }
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "sortable", array())) {
            // line 11
            echo "    <th class=\"columnSortable";
            if ( !(null === $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "headerClass", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "headerClass", array()), "html", null, true);
            }
            echo "\" data-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\" data-sort-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"  data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", array()), "html", null, true);
            echo "\" scope=\"col\">
        <a href=\"#\">
            ";
            // line 13
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </th>
";
        } else {
            // line 18
            echo "    <th data-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", array()), "html", null, true);
            echo "\" scope=\"col\">
        ";
            // line 19
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
    </th>
";
        }
        // line 22
        echo "
";
        
        $__internal_a3c1f6d3909a404371998053bc39a11ace938144a8aa350beb5537efeb8cf61c->leave($__internal_a3c1f6d3909a404371998053bc39a11ace938144a8aa350beb5537efeb8cf61c_prof);

        
        $__internal_05b6854fa531f1caf1ccf6945dc864cbdbff9cdd1a577894a5813475bc524631->leave($__internal_05b6854fa531f1caf1ccf6945dc864cbdbff9cdd1a577894a5813475bc524631_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_columnName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  77 => 19,  70 => 18,  62 => 13,  47 => 11,  45 => 10,  42 => 9,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @KilikTable/_columnName.html.twig #}
{% set label = column.label %}
{% if column.translateDomain is not null %}
    {% set label = (column.label | trans({}, column.translateDomain)) %}
    {% if column.capitalize %}
        {% set label = label | capitalize %}
    {% endif %}
{% endif %}

{% if column.sortable %}
    <th class=\"columnSortable{% if column.headerClass is not null %} {{ column.headerClass }}{% endif %}\" data-column=\"{{ column.name }}\" data-sort-column=\"{{ column.name }}\"  data-label=\"{{column.label}}\" scope=\"col\">
        <a href=\"#\">
            {{ label }}
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </th>
{% else %}
    <th data-column=\"{{ column.name }}\" data-label=\"{{column.label}}\" scope=\"col\">
        {{ label }}
    </th>
{% endif %}

", "@AppBundle/Resources/views/table/_columnName.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table/_columnName.html.twig");
    }
}
