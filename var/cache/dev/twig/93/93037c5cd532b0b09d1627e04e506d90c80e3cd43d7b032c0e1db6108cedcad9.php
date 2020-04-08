<?php

/* @AppBundle/Resources/views/table_user/table_user_filter.html.twig */
class __TwigTemplate_27b9c45f36833405749ada3f0af5280bbe8ad03508e685fb2ca302cb71b6cec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b95c76199211abd50f8b0b615e338c86e6277a7c8654112d9fa8432cb741148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b95c76199211abd50f8b0b615e338c86e6277a7c8654112d9fa8432cb741148->enter($__internal_5b95c76199211abd50f8b0b615e338c86e6277a7c8654112d9fa8432cb741148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig"));

        $__internal_f1aeb2ee1c9e4165fef8b4aeda99e9f3c1f42981c54592b6068c9bad06fcba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1aeb2ee1c9e4165fef8b4aeda99e9f3c1f42981c54592b6068c9bad06fcba9c->enter($__internal_f1aeb2ee1c9e4165fef8b4aeda99e9f3c1f42981c54592b6068c9bad06fcba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b95c76199211abd50f8b0b615e338c86e6277a7c8654112d9fa8432cb741148->leave($__internal_5b95c76199211abd50f8b0b615e338c86e6277a7c8654112d9fa8432cb741148_prof);

        
        $__internal_f1aeb2ee1c9e4165fef8b4aeda99e9f3c1f42981c54592b6068c9bad06fcba9c->leave($__internal_f1aeb2ee1c9e4165fef8b4aeda99e9f3c1f42981c54592b6068c9bad06fcba9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82794e81b5725a27290f947c329f4f50786b691d204f307c4c39e0555c3548cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82794e81b5725a27290f947c329f4f50786b691d204f307c4c39e0555c3548cb->enter($__internal_82794e81b5725a27290f947c329f4f50786b691d204f307c4c39e0555c3548cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a09146bfd15d9204b42287f27429d9ac3e950d14bb691060e8d2ca4e010e7306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09146bfd15d9204b42287f27429d9ac3e950d14bb691060e8d2ca4e010e7306->enter($__internal_a09146bfd15d9204b42287f27429d9ac3e950d14bb691060e8d2ca4e010e7306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"sm-12\">
                ";
        // line 7
        $this->loadTemplate("@AppBundle/Resources/views/table_user/table_user_filter.html.twig", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig", 7, "1683850278")->display(array_merge($context, array("table" =>         // line 8
($context["table"] ?? $this->getContext($context, "table")))));
        // line 14
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_a09146bfd15d9204b42287f27429d9ac3e950d14bb691060e8d2ca4e010e7306->leave($__internal_a09146bfd15d9204b42287f27429d9ac3e950d14bb691060e8d2ca4e010e7306_prof);

        
        $__internal_82794e81b5725a27290f947c329f4f50786b691d204f307c4c39e0555c3548cb->leave($__internal_82794e81b5725a27290f947c329f4f50786b691d204f307c4c39e0555c3548cb_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_981c9fb53d13e9042b5fdf5ffa035a085e8f66defe40221ff0ab4c4f4e46a26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981c9fb53d13e9042b5fdf5ffa035a085e8f66defe40221ff0ab4c4f4e46a26c->enter($__internal_981c9fb53d13e9042b5fdf5ffa035a085e8f66defe40221ff0ab4c4f4e46a26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_401285c3e38a386eae1decc7c057f51df1478aebe9545175fdedc193048a4de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401285c3e38a386eae1decc7c057f51df1478aebe9545175fdedc193048a4de2->enter($__internal_401285c3e38a386eae1decc7c057f51df1478aebe9545175fdedc193048a4de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    />
    <link rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\"
          integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\"
          crossorigin=\"anonymous\"
    >
    <script type=\"text/javascript\"
            src=\"https://code.jquery.com/jquery-2.2.0.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/kiliktable/js/KilikTable.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$(document).ready(function () {
            
            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "path", array()), "html", null, true);
        echo "\",
                JSON.parse('";
        // line 48
        echo twig_jsonencode_filter($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "options", array()));
        echo "'));

            table.init();
        });
    </script>
";
        
        $__internal_401285c3e38a386eae1decc7c057f51df1478aebe9545175fdedc193048a4de2->leave($__internal_401285c3e38a386eae1decc7c057f51df1478aebe9545175fdedc193048a4de2_prof);

        
        $__internal_981c9fb53d13e9042b5fdf5ffa035a085e8f66defe40221ff0ab4c4f4e46a26c->leave($__internal_981c9fb53d13e9042b5fdf5ffa035a085e8f66defe40221ff0ab4c4f4e46a26c_prof);

    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60d100ee939ba9378f4d6f78970e858444ee76acbd57f8d29ead487f3d55fdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d100ee939ba9378f4d6f78970e858444ee76acbd57f8d29ead487f3d55fdcf->enter($__internal_60d100ee939ba9378f4d6f78970e858444ee76acbd57f8d29ead487f3d55fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2a6570b65a59274d11e1f897c1b6819d66c69750b0dbac2bee48f9ee559bdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a6570b65a59274d11e1f897c1b6819d66c69750b0dbac2bee48f9ee559bdd7->enter($__internal_b2a6570b65a59274d11e1f897c1b6819d66c69750b0dbac2bee48f9ee559bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_b2a6570b65a59274d11e1f897c1b6819d66c69750b0dbac2bee48f9ee559bdd7->leave($__internal_b2a6570b65a59274d11e1f897c1b6819d66c69750b0dbac2bee48f9ee559bdd7_prof);

        
        $__internal_60d100ee939ba9378f4d6f78970e858444ee76acbd57f8d29ead487f3d55fdcf->leave($__internal_60d100ee939ba9378f4d6f78970e858444ee76acbd57f8d29ead487f3d55fdcf_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_user/table_user_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  137 => 55,  121 => 48,  115 => 47,  104 => 39,  82 => 21,  73 => 20,  59 => 14,  57 => 8,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"sm-12\">
                {% embed \"@AppBundle/Resources/views/table_user/table_user_table.html.twig\"
                    with {\"table\": table}
                %}
                    {% block tableTitle %}
                        <b>Usuarios</b>                        
                    {% endblock tableTitle %}                   
                {% endembed %}
            </div>
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    />
    <link rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\"
          integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\"
          crossorigin=\"anonymous\"
    >
    <script type=\"text/javascript\"
            src=\"https://code.jquery.com/jquery-2.2.0.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"{{ asset('/bundles/kiliktable/js/KilikTable.js') }}\">
    </script>
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

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_user/table_user_filter.html.twig");
    }
}


/* @AppBundle/Resources/views/table_user/table_user_filter.html.twig */
class __TwigTemplate_27b9c45f36833405749ada3f0af5280bbe8ad03508e685fb2ca302cb71b6cec2_1683850278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("@AppBundle/Resources/views/table_user/table_user_table.html.twig", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig", 7);
        $this->blocks = array(
            'tableTitle' => array($this, 'block_tableTitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Resources/views/table_user/table_user_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_612764d07675a59132a1130c04cc9acb9cdb5ecf6b0a8b355f93ac14423b9934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612764d07675a59132a1130c04cc9acb9cdb5ecf6b0a8b355f93ac14423b9934->enter($__internal_612764d07675a59132a1130c04cc9acb9cdb5ecf6b0a8b355f93ac14423b9934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig"));

        $__internal_dc4b7f4c20c31cb0ccbefa3cabf1e412ff29dff67ca8e096f24aa11177045da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4b7f4c20c31cb0ccbefa3cabf1e412ff29dff67ca8e096f24aa11177045da5->enter($__internal_dc4b7f4c20c31cb0ccbefa3cabf1e412ff29dff67ca8e096f24aa11177045da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612764d07675a59132a1130c04cc9acb9cdb5ecf6b0a8b355f93ac14423b9934->leave($__internal_612764d07675a59132a1130c04cc9acb9cdb5ecf6b0a8b355f93ac14423b9934_prof);

        
        $__internal_dc4b7f4c20c31cb0ccbefa3cabf1e412ff29dff67ca8e096f24aa11177045da5->leave($__internal_dc4b7f4c20c31cb0ccbefa3cabf1e412ff29dff67ca8e096f24aa11177045da5_prof);

    }

    // line 10
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_1093d137e86517ff778ae08a477097aae7b002cbeeaddf30ec906efd4fdb8914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1093d137e86517ff778ae08a477097aae7b002cbeeaddf30ec906efd4fdb8914->enter($__internal_1093d137e86517ff778ae08a477097aae7b002cbeeaddf30ec906efd4fdb8914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_c4d4e62c31e66190b27b7d1a8096e7228e3ee76eec3451caf5c3c6a0ff0e1322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d4e62c31e66190b27b7d1a8096e7228e3ee76eec3451caf5c3c6a0ff0e1322->enter($__internal_c4d4e62c31e66190b27b7d1a8096e7228e3ee76eec3451caf5c3c6a0ff0e1322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 11
        echo "                        <b>Usuarios</b>                        
                    ";
        
        $__internal_c4d4e62c31e66190b27b7d1a8096e7228e3ee76eec3451caf5c3c6a0ff0e1322->leave($__internal_c4d4e62c31e66190b27b7d1a8096e7228e3ee76eec3451caf5c3c6a0ff0e1322_prof);

        
        $__internal_1093d137e86517ff778ae08a477097aae7b002cbeeaddf30ec906efd4fdb8914->leave($__internal_1093d137e86517ff778ae08a477097aae7b002cbeeaddf30ec906efd4fdb8914_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_user/table_user_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 11,  329 => 10,  300 => 7,  146 => 56,  137 => 55,  121 => 48,  115 => 47,  104 => 39,  82 => 21,  73 => 20,  59 => 14,  57 => 8,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"sm-12\">
                {% embed \"@AppBundle/Resources/views/table_user/table_user_table.html.twig\"
                    with {\"table\": table}
                %}
                    {% block tableTitle %}
                        <b>Usuarios</b>                        
                    {% endblock tableTitle %}                   
                {% endembed %}
            </div>
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    />
    <link rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\"
          integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\"
          crossorigin=\"anonymous\"
    >
    <script type=\"text/javascript\"
            src=\"https://code.jquery.com/jquery-2.2.0.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
    >
    </script>
    <script type=\"text/javascript\"
            src=\"{{ asset('/bundles/kiliktable/js/KilikTable.js') }}\">
    </script>
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

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}", "@AppBundle/Resources/views/table_user/table_user_filter.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_user/table_user_filter.html.twig");
    }
}
