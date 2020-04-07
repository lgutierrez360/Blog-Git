<?php

/* @AppBundle/Resources/views/table_post/table_post_table.html.twig */
class __TwigTemplate_20868dd1cf3466a59acf05128542ff1f1ea2e86259024724c703a31a38b07775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@AppBundle/Resources/views/table_post/table_post_publico.html.twig", "@AppBundle/Resources/views/table_post/table_post_table.html.twig", 6);
        $this->blocks = array(
            'tableHeadStdColumns' => array($this, 'block_tableHeadStdColumns'),
            'tableHeadStdFilters' => array($this, 'block_tableHeadStdFilters'),
            'tableBodyStdColumns' => array($this, 'block_tableBodyStdColumns'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Resources/views/table_post/table_post_publico.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc2044fb7303d92b1c8e48f8686f6e56e90436df5e7c5b9f2ed4ba4bc8cac9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2044fb7303d92b1c8e48f8686f6e56e90436df5e7c5b9f2ed4ba4bc8cac9f4->enter($__internal_cc2044fb7303d92b1c8e48f8686f6e56e90436df5e7c5b9f2ed4ba4bc8cac9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_table.html.twig"));

        $__internal_f93de2990745011d622a2e7db9ce987b4f76829d1202b9185005929816b201ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93de2990745011d622a2e7db9ce987b4f76829d1202b9185005929816b201ee->enter($__internal_f93de2990745011d622a2e7db9ce987b4f76829d1202b9185005929816b201ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2044fb7303d92b1c8e48f8686f6e56e90436df5e7c5b9f2ed4ba4bc8cac9f4->leave($__internal_cc2044fb7303d92b1c8e48f8686f6e56e90436df5e7c5b9f2ed4ba4bc8cac9f4_prof);

        
        $__internal_f93de2990745011d622a2e7db9ce987b4f76829d1202b9185005929816b201ee->leave($__internal_f93de2990745011d622a2e7db9ce987b4f76829d1202b9185005929816b201ee_prof);

    }

    // line 10
    public function block_tableHeadStdColumns($context, array $blocks = array())
    {
        $__internal_9c2408651b000391023388de9fbcf635a9ce3face6472dfc7696d6cda5de40ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2408651b000391023388de9fbcf635a9ce3face6472dfc7696d6cda5de40ca->enter($__internal_9c2408651b000391023388de9fbcf635a9ce3face6472dfc7696d6cda5de40ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_c26a723e53d04e1c4fd47b3b532107d0636e5479888974bc9e0840f8e1bc29fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26a723e53d04e1c4fd47b3b532107d0636e5479888974bc9e0840f8e1bc29fa->enter($__internal_c26a723e53d04e1c4fd47b3b532107d0636e5479888974bc9e0840f8e1bc29fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        // line 11
        echo "    <th>&nbsp;</th>
    
    ";
        // line 13
        $this->displayParentBlock("tableHeadStdColumns", $context, $blocks);
        echo "
";
        
        $__internal_c26a723e53d04e1c4fd47b3b532107d0636e5479888974bc9e0840f8e1bc29fa->leave($__internal_c26a723e53d04e1c4fd47b3b532107d0636e5479888974bc9e0840f8e1bc29fa_prof);

        
        $__internal_9c2408651b000391023388de9fbcf635a9ce3face6472dfc7696d6cda5de40ca->leave($__internal_9c2408651b000391023388de9fbcf635a9ce3face6472dfc7696d6cda5de40ca_prof);

    }

    // line 16
    public function block_tableHeadStdFilters($context, array $blocks = array())
    {
        $__internal_140967fb2482961c2200d87ef3ddad0d42693cfa6570a6196f2b290455c35bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140967fb2482961c2200d87ef3ddad0d42693cfa6570a6196f2b290455c35bbd->enter($__internal_140967fb2482961c2200d87ef3ddad0d42693cfa6570a6196f2b290455c35bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_348deb0202086e97d36eba1dd5d0e65dd4c4014e1d723702d9df74f661a877c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348deb0202086e97d36eba1dd5d0e65dd4c4014e1d723702d9df74f661a877c6->enter($__internal_348deb0202086e97d36eba1dd5d0e65dd4c4014e1d723702d9df74f661a877c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        // line 17
        echo "    <td>&nbsp;</td>
    
    ";
        // line 19
        $this->displayParentBlock("tableHeadStdFilters", $context, $blocks);
        echo "
";
        
        $__internal_348deb0202086e97d36eba1dd5d0e65dd4c4014e1d723702d9df74f661a877c6->leave($__internal_348deb0202086e97d36eba1dd5d0e65dd4c4014e1d723702d9df74f661a877c6_prof);

        
        $__internal_140967fb2482961c2200d87ef3ddad0d42693cfa6570a6196f2b290455c35bbd->leave($__internal_140967fb2482961c2200d87ef3ddad0d42693cfa6570a6196f2b290455c35bbd_prof);

    }

    // line 22
    public function block_tableBodyStdColumns($context, array $blocks = array())
    {
        $__internal_ec50962745aff4a83bf922039f9c4b7002b78bd54999bc4dcd4252e26a616184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec50962745aff4a83bf922039f9c4b7002b78bd54999bc4dcd4252e26a616184->enter($__internal_ec50962745aff4a83bf922039f9c4b7002b78bd54999bc4dcd4252e26a616184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_6366a2ce09f2b1db9067cd89ac95c9625cac9e9e17430455fc5fbf381d4d94f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6366a2ce09f2b1db9067cd89ac95c9625cac9e9e17430455fc5fbf381d4d94f3->enter($__internal_6366a2ce09f2b1db9067cd89ac95c9625cac9e9e17430455fc5fbf381d4d94f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 23
        echo "                  
    ";
        // line 24
        $this->displayParentBlock("tableBodyStdColumns", $context, $blocks);
        echo "    \t
";
        
        $__internal_6366a2ce09f2b1db9067cd89ac95c9625cac9e9e17430455fc5fbf381d4d94f3->leave($__internal_6366a2ce09f2b1db9067cd89ac95c9625cac9e9e17430455fc5fbf381d4d94f3_prof);

        
        $__internal_ec50962745aff4a83bf922039f9c4b7002b78bd54999bc4dcd4252e26a616184->leave($__internal_ec50962745aff4a83bf922039f9c4b7002b78bd54999bc4dcd4252e26a616184_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c070e87d674813613bfb7def11e6ac62ccf1e406bdd6c354b934d31714adde0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c070e87d674813613bfb7def11e6ac62ccf1e406bdd6c354b934d31714adde0f->enter($__internal_c070e87d674813613bfb7def11e6ac62ccf1e406bdd6c354b934d31714adde0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2bb5a064ae6f12a24af0e9cfbf91eaf5bb8187bb03b9746270887c28bd26b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bb5a064ae6f12a24af0e9cfbf91eaf5bb8187bb03b9746270887c28bd26b41->enter($__internal_b2bb5a064ae6f12a24af0e9cfbf91eaf5bb8187bb03b9746270887c28bd26b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    <script>
        \$(document).ready(function () {         

            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "path", array()), "html", null, true);
        echo "\",
                JSON.parse('";
        // line 35
        echo twig_jsonencode_filter($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "options", array()));
        echo "'));

            table.init();
        });
    </script>
";
        
        $__internal_b2bb5a064ae6f12a24af0e9cfbf91eaf5bb8187bb03b9746270887c28bd26b41->leave($__internal_b2bb5a064ae6f12a24af0e9cfbf91eaf5bb8187bb03b9746270887c28bd26b41_prof);

        
        $__internal_c070e87d674813613bfb7def11e6ac62ccf1e406bdd6c354b934d31714adde0f->leave($__internal_c070e87d674813613bfb7def11e6ac62ccf1e406bdd6c354b934d31714adde0f_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/table_post_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 35,  134 => 34,  117 => 27,  105 => 24,  102 => 23,  93 => 22,  81 => 19,  77 => 17,  68 => 16,  56 => 13,  52 => 11,  43 => 10,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/posts/posts_user.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{#% extends '_defaultTableAlt.html.twig' %#}
{#% extends '@AppBundle/Resources/views/table/_defaultTable.html.twig' %#}

{% extends '@AppBundle/Resources/views/table_post/table_post_publico.html.twig' %}

  
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
                  
    {{ parent() }}    \t
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
", "@AppBundle/Resources/views/table_post/table_post_table.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/table_post_table.html.twig");
    }
}
