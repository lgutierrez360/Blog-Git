<?php

/* @AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig */
class __TwigTemplate_5c33d79795b04f3423a32cf9c5b2699d4e2e4a31e1e6b504da82ae70964d2eb7 extends Twig_Template
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
        $__internal_0c69cd5a55251af3da1ea789ae61cabe413e67f57f21b7920ea11b9a156b0b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c69cd5a55251af3da1ea789ae61cabe413e67f57f21b7920ea11b9a156b0b17->enter($__internal_0c69cd5a55251af3da1ea789ae61cabe413e67f57f21b7920ea11b9a156b0b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig"));

        $__internal_3659cd02de98b6a2a0e4be1a2cac2a2dc2ead14238e78ba4487d964529d8fa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3659cd02de98b6a2a0e4be1a2cac2a2dc2ead14238e78ba4487d964529d8fa25->enter($__internal_3659cd02de98b6a2a0e4be1a2cac2a2dc2ead14238e78ba4487d964529d8fa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (array_key_exists("tableRenderPagination", $context)) {
            // line 4
            echo "    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 7
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()) < 2)) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "previousPage", array()), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()), "html", null, true);
            echo "\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()), "html", null, true);
            echo "
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 13
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()) > ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", array()) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "nextPage", array()), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton ";
            // line 16
            if (($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "page", array()) > ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", array()) - 1))) {
                echo "disabled";
            }
            echo "\" data-table-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastPage", array()), "html", null, true);
            echo "\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
";
        }
        
        $__internal_0c69cd5a55251af3da1ea789ae61cabe413e67f57f21b7920ea11b9a156b0b17->leave($__internal_0c69cd5a55251af3da1ea789ae61cabe413e67f57f21b7920ea11b9a156b0b17_prof);

        
        $__internal_3659cd02de98b6a2a0e4be1a2cac2a2dc2ead14238e78ba4487d964529d8fa25->leave($__internal_3659cd02de98b6a2a0e4be1a2cac2a2dc2ead14238e78ba4487d964529d8fa25_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  58 => 13,  53 => 11,  49 => 10,  39 => 7,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @KilikTable/_paginationNumbersIcons.html.twig #}

{% if tableRenderPagination is defined %}
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"1\">
        <span class=\"glyphicon glyphicon-fast-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page < 2 %}disabled{% endif %}\" data-table-page=\"{{ table.previousPage }}\">
        <span class=\"glyphicon glyphicon-backward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton\" data-table-page=\"{{ table.page }}\">
        {{ table.page }}
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page > table.lastPage-1 %}disabled{% endif %}\" data-table-page=\"{{ table.nextPage }}\">
        <span class=\"glyphicon glyphicon-forward\"></span>
    </a>
    <a href=\"#\" class=\"btn btn-default tablePaginationButton {% if table.page > table.lastPage-1 %}disabled{% endif %}\" data-table-page=\"{{ table.lastPage }}\">
        <span class=\"glyphicon glyphicon-fast-forward\"></span>
    </a>
{% endif %}
", "@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig");
    }
}
