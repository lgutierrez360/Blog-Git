<?php

/* @AppBundle/Resources/views/table/_columnCell.html.twig */
class __TwigTemplate_3b58d0c4908be9bf4115d396f64ac78945cc67fbc759ec1b6324b68b2ba8e29a extends Twig_Template
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
        $__internal_5f66f2680585e35c4b7da2d6b1d96885a93949f9842728fb3fb4f7125ab624be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f66f2680585e35c4b7da2d6b1d96885a93949f9842728fb3fb4f7125ab624be->enter($__internal_5f66f2680585e35c4b7da2d6b1d96885a93949f9842728fb3fb4f7125ab624be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_columnCell.html.twig"));

        $__internal_7dbfe0ce4ce59749d9e2715da108ee70ad49063e2dddd666bcf386a479ed04d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbfe0ce4ce59749d9e2715da108ee70ad49063e2dddd666bcf386a479ed04d7->enter($__internal_7dbfe0ce4ce59749d9e2715da108ee70ad49063e2dddd666bcf386a479ed04d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_columnCell.html.twig"));

        // line 1
        echo "\t
";
        // line 2
        if ( !$this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "hidden", array())) {
            // line 3
            echo "    <td ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "displayClass", array())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "displayClass", array()), "html", null, true);
                echo "\"";
            }
            echo " data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", array()), "html", null, true);
            echo "\">
        ";
            // line 4
            $context["cellHtml"] = $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "value", array(0 => ($context["column"] ?? $this->getContext($context, "column")), 1 => ($context["row"] ?? $this->getContext($context, "row"))), "method");
            // line 5
            echo "        ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "raw", array())) {
                // line 6
                echo "            ";
                echo ($context["cellHtml"] ?? $this->getContext($context, "cellHtml"));
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, ($context["cellHtml"] ?? $this->getContext($context, "cellHtml")), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    </td>
";
        }
        
        $__internal_5f66f2680585e35c4b7da2d6b1d96885a93949f9842728fb3fb4f7125ab624be->leave($__internal_5f66f2680585e35c4b7da2d6b1d96885a93949f9842728fb3fb4f7125ab624be_prof);

        
        $__internal_7dbfe0ce4ce59749d9e2715da108ee70ad49063e2dddd666bcf386a479ed04d7->leave($__internal_7dbfe0ce4ce59749d9e2715da108ee70ad49063e2dddd666bcf386a479ed04d7_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_columnCell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 8,  46 => 6,  43 => 5,  41 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @KilikTable/_columnCell.html.twig #}\t
{% if not column.hidden %}
    <td {% if column.displayClass %}class=\"{{ column.displayClass }}\"{% endif %} data-label=\"{{column.label}}\">
        {% set cellHtml=table.value(column,row) %}
        {% if column.raw %}
            {{ cellHtml | raw }}
        {% else %}
            {{ cellHtml }}
        {% endif %}
    </td>
{% endif %}
", "@AppBundle/Resources/views/table/_columnCell.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table/_columnCell.html.twig");
    }
}
