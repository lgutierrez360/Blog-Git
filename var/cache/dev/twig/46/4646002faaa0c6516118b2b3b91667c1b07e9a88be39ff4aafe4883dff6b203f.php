<?php

/* @AppBundle/Resources/views/table_user/table_user_table.html.twig */
class __TwigTemplate_bebbebd1ef73c1c2926ed55abb2a9334f5dfdddaf6b611112d1b690808a9f873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@AppBundle/Resources/views/table/_defaultTable.html.twig", "@AppBundle/Resources/views/table_user/table_user_table.html.twig", 2);
        $this->blocks = array(
            'tableHeadStdColumns' => array($this, 'block_tableHeadStdColumns'),
            'tableHeadStdFilters' => array($this, 'block_tableHeadStdFilters'),
            'tableBodyStdColumns' => array($this, 'block_tableBodyStdColumns'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Resources/views/table/_defaultTable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d250b5b22f28b6fd5f261164fea67152e2b27e51cb2ad128962522847c7544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d250b5b22f28b6fd5f261164fea67152e2b27e51cb2ad128962522847c7544->enter($__internal_39d250b5b22f28b6fd5f261164fea67152e2b27e51cb2ad128962522847c7544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_table.html.twig"));

        $__internal_f4c67d74bc6deaa675fb0a1efe05f8fa1132562c61c3603b774f6f016d6d31d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c67d74bc6deaa675fb0a1efe05f8fa1132562c61c3603b774f6f016d6d31d5->enter($__internal_f4c67d74bc6deaa675fb0a1efe05f8fa1132562c61c3603b774f6f016d6d31d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d250b5b22f28b6fd5f261164fea67152e2b27e51cb2ad128962522847c7544->leave($__internal_39d250b5b22f28b6fd5f261164fea67152e2b27e51cb2ad128962522847c7544_prof);

        
        $__internal_f4c67d74bc6deaa675fb0a1efe05f8fa1132562c61c3603b774f6f016d6d31d5->leave($__internal_f4c67d74bc6deaa675fb0a1efe05f8fa1132562c61c3603b774f6f016d6d31d5_prof);

    }

    // line 5
    public function block_tableHeadStdColumns($context, array $blocks = array())
    {
        $__internal_a96677e4a5121cbcefd36dc992b53223d506d9059cd9790e35fa5a780158bfbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96677e4a5121cbcefd36dc992b53223d506d9059cd9790e35fa5a780158bfbc->enter($__internal_a96677e4a5121cbcefd36dc992b53223d506d9059cd9790e35fa5a780158bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_a972ad7dab0a3a27079ba4e266a386d615e9cfe5416bcfa2cb32e2552b494623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a972ad7dab0a3a27079ba4e266a386d615e9cfe5416bcfa2cb32e2552b494623->enter($__internal_a972ad7dab0a3a27079ba4e266a386d615e9cfe5416bcfa2cb32e2552b494623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        // line 6
        echo "    <th>&nbsp;</th>
    ";
        // line 7
        $this->displayParentBlock("tableHeadStdColumns", $context, $blocks);
        echo "
";
        
        $__internal_a972ad7dab0a3a27079ba4e266a386d615e9cfe5416bcfa2cb32e2552b494623->leave($__internal_a972ad7dab0a3a27079ba4e266a386d615e9cfe5416bcfa2cb32e2552b494623_prof);

        
        $__internal_a96677e4a5121cbcefd36dc992b53223d506d9059cd9790e35fa5a780158bfbc->leave($__internal_a96677e4a5121cbcefd36dc992b53223d506d9059cd9790e35fa5a780158bfbc_prof);

    }

    // line 9
    public function block_tableHeadStdFilters($context, array $blocks = array())
    {
        $__internal_e4985dea82cd2716b0b48528a4df6e8113abd6ba1f168589c425d3b47039eea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4985dea82cd2716b0b48528a4df6e8113abd6ba1f168589c425d3b47039eea7->enter($__internal_e4985dea82cd2716b0b48528a4df6e8113abd6ba1f168589c425d3b47039eea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_7550d2a03897401f1b1178cf28e40b261cf8bcff06b99045d2f1c6cc4b6e5e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7550d2a03897401f1b1178cf28e40b261cf8bcff06b99045d2f1c6cc4b6e5e5d->enter($__internal_7550d2a03897401f1b1178cf28e40b261cf8bcff06b99045d2f1c6cc4b6e5e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        // line 10
        echo "    <td>&nbsp;</td>
    ";
        // line 11
        $this->displayParentBlock("tableHeadStdFilters", $context, $blocks);
        echo "
";
        
        $__internal_7550d2a03897401f1b1178cf28e40b261cf8bcff06b99045d2f1c6cc4b6e5e5d->leave($__internal_7550d2a03897401f1b1178cf28e40b261cf8bcff06b99045d2f1c6cc4b6e5e5d_prof);

        
        $__internal_e4985dea82cd2716b0b48528a4df6e8113abd6ba1f168589c425d3b47039eea7->leave($__internal_e4985dea82cd2716b0b48528a4df6e8113abd6ba1f168589c425d3b47039eea7_prof);

    }

    // line 13
    public function block_tableBodyStdColumns($context, array $blocks = array())
    {
        $__internal_c1c4bb39692f572d795840332b73ab1037af431becb5c46a72b89d18bd988724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c4bb39692f572d795840332b73ab1037af431becb5c46a72b89d18bd988724->enter($__internal_c1c4bb39692f572d795840332b73ab1037af431becb5c46a72b89d18bd988724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_af2e9a9d5d91b50df1af23daa3c65853f436246bdefe6b9dced8d012fcdf8c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2e9a9d5d91b50df1af23daa3c65853f436246bdefe6b9dced8d012fcdf8c9d->enter($__internal_af2e9a9d5d91b50df1af23daa3c65853f436246bdefe6b9dced8d012fcdf8c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 14
        echo "
";
        
        $__internal_af2e9a9d5d91b50df1af23daa3c65853f436246bdefe6b9dced8d012fcdf8c9d->leave($__internal_af2e9a9d5d91b50df1af23daa3c65853f436246bdefe6b9dced8d012fcdf8c9d_prof);

        
        $__internal_c1c4bb39692f572d795840332b73ab1037af431becb5c46a72b89d18bd988724->leave($__internal_c1c4bb39692f572d795840332b73ab1037af431becb5c46a72b89d18bd988724_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bce268a9b8db4ff4b3b32955bb54a725f0193fe3eb0b62cec1c550307dcac96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bce268a9b8db4ff4b3b32955bb54a725f0193fe3eb0b62cec1c550307dcac96->enter($__internal_4bce268a9b8db4ff4b3b32955bb54a725f0193fe3eb0b62cec1c550307dcac96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_644e16b00648ac03765814df92952384515e1b6428b0ef73fe89fe4029c77a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644e16b00648ac03765814df92952384515e1b6428b0ef73fe89fe4029c77a16->enter($__internal_644e16b00648ac03765814df92952384515e1b6428b0ef73fe89fe4029c77a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    <script>
        \$(document).ready(function () {
            
            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "path", array()), "html", null, true);
        echo "\",
                JSON.parse('";
        // line 25
        echo twig_jsonencode_filter($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "options", array()));
        echo "'));

            table.init();
        });
    </script>
";
        
        $__internal_644e16b00648ac03765814df92952384515e1b6428b0ef73fe89fe4029c77a16->leave($__internal_644e16b00648ac03765814df92952384515e1b6428b0ef73fe89fe4029c77a16_prof);

        
        $__internal_4bce268a9b8db4ff4b3b32955bb54a725f0193fe3eb0b62cec1c550307dcac96->leave($__internal_4bce268a9b8db4ff4b3b32955bb54a725f0193fe3eb0b62cec1c550307dcac96_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_user/table_user_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 25,  128 => 24,  111 => 17,  100 => 14,  91 => 13,  79 => 11,  76 => 10,  67 => 9,  55 => 7,  52 => 6,  43 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '@AppBundle/Resources/views/table/_defaultTable.html.twig' %}
\t                        
{# add a column to the left #}
{% block tableHeadStdColumns %}
    <th>&nbsp;</th>
    {{ parent() }}
{% endblock tableHeadStdColumns %}
{% block tableHeadStdFilters %}
    <td>&nbsp;</td>
    {{ parent() }}
{% endblock tableHeadStdFilters %}
{% block tableBodyStdColumns %}

{% endblock tableBodyStdColumns %}

{% block javascripts %}    
    <script>
        \$(document).ready(function () {
            
            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"{{ table.id }}\", \"{{ table.path }}\",
                JSON.parse('{{ table.options | json_encode | raw }}'));

            table.init();
        });
    </script>
{% endblock %}
", "@AppBundle/Resources/views/table_user/table_user_table.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_user/table_user_table.html.twig");
    }
}
