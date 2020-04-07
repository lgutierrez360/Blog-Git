<?php

/* @AppBundle/Resources/views/table_post/table_post_filter.html.twig */
class __TwigTemplate_b0f7d45a6df3bf6744f19af507d4f3720f0c10c5c04ac396afb2251a79c2d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", 3);
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
        $__internal_2bf02f450a2b119e18180117d5cbbc992cc8fc8f49364cefeb62eb97ed659f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf02f450a2b119e18180117d5cbbc992cc8fc8f49364cefeb62eb97ed659f2b->enter($__internal_2bf02f450a2b119e18180117d5cbbc992cc8fc8f49364cefeb62eb97ed659f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $__internal_2b52a97123acfdb2710a9efd503332544e24c28a46aa2a99eebc932f5d7d5836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b52a97123acfdb2710a9efd503332544e24c28a46aa2a99eebc932f5d7d5836->enter($__internal_2b52a97123acfdb2710a9efd503332544e24c28a46aa2a99eebc932f5d7d5836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf02f450a2b119e18180117d5cbbc992cc8fc8f49364cefeb62eb97ed659f2b->leave($__internal_2bf02f450a2b119e18180117d5cbbc992cc8fc8f49364cefeb62eb97ed659f2b_prof);

        
        $__internal_2b52a97123acfdb2710a9efd503332544e24c28a46aa2a99eebc932f5d7d5836->leave($__internal_2b52a97123acfdb2710a9efd503332544e24c28a46aa2a99eebc932f5d7d5836_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f671acccd53f240da83f6cbc4aeba75f4cba50688f9b935a27c059cdd2a0e4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f671acccd53f240da83f6cbc4aeba75f4cba50688f9b935a27c059cdd2a0e4ea->enter($__internal_f671acccd53f240da83f6cbc4aeba75f4cba50688f9b935a27c059cdd2a0e4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14779224aac218e557430e21c2730b4088b79460b750ead8e6accb541836828a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14779224aac218e557430e21c2730b4088b79460b750ead8e6accb541836828a->enter($__internal_14779224aac218e557430e21c2730b4088b79460b750ead8e6accb541836828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"sm-12\">
                ";
        // line 9
        $this->loadTemplate("@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", 9, "1582737451")->display(array_merge($context, array("table" =>         // line 10
($context["table"] ?? $this->getContext($context, "table")))));
        // line 25
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_14779224aac218e557430e21c2730b4088b79460b750ead8e6accb541836828a->leave($__internal_14779224aac218e557430e21c2730b4088b79460b750ead8e6accb541836828a_prof);

        
        $__internal_f671acccd53f240da83f6cbc4aeba75f4cba50688f9b935a27c059cdd2a0e4ea->leave($__internal_f671acccd53f240da83f6cbc4aeba75f4cba50688f9b935a27c059cdd2a0e4ea_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08f6b389c57c50d20388febd445a7f5101810d9861bd7d8eb85a9e322bc5afd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f6b389c57c50d20388febd445a7f5101810d9861bd7d8eb85a9e322bc5afd2->enter($__internal_08f6b389c57c50d20388febd445a7f5101810d9861bd7d8eb85a9e322bc5afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_18981b262e6e9ad325a39abbd51cac71a231868138922da8a977582c38b10b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18981b262e6e9ad325a39abbd51cac71a231868138922da8a977582c38b10b0a->enter($__internal_18981b262e6e9ad325a39abbd51cac71a231868138922da8a977582c38b10b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/kiliktable/js/KilikTable.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$(document).ready(function () {

            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "path", array()), "html", null, true);
        echo "\",
                JSON.parse('";
        // line 58
        echo twig_jsonencode_filter($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "options", array()));
        echo "'));

            table.init();
        });
    </script>
";
        
        $__internal_18981b262e6e9ad325a39abbd51cac71a231868138922da8a977582c38b10b0a->leave($__internal_18981b262e6e9ad325a39abbd51cac71a231868138922da8a977582c38b10b0a_prof);

        
        $__internal_08f6b389c57c50d20388febd445a7f5101810d9861bd7d8eb85a9e322bc5afd2->leave($__internal_08f6b389c57c50d20388febd445a7f5101810d9861bd7d8eb85a9e322bc5afd2_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8df446afb84c2da21ca5abbcf85c0414e1e2e1c142d2f74f76b0f8a6d9d0d777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df446afb84c2da21ca5abbcf85c0414e1e2e1c142d2f74f76b0f8a6d9d0d777->enter($__internal_8df446afb84c2da21ca5abbcf85c0414e1e2e1c142d2f74f76b0f8a6d9d0d777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b91535f1b575e6d3fe5ac455d496114acf37446c7844bedb82c9da4703b6247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b91535f1b575e6d3fe5ac455d496114acf37446c7844bedb82c9da4703b6247->enter($__internal_0b91535f1b575e6d3fe5ac455d496114acf37446c7844bedb82c9da4703b6247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
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
        
        $__internal_0b91535f1b575e6d3fe5ac455d496114acf37446c7844bedb82c9da4703b6247->leave($__internal_0b91535f1b575e6d3fe5ac455d496114acf37446c7844bedb82c9da4703b6247_prof);

        
        $__internal_8df446afb84c2da21ca5abbcf85c0414e1e2e1c142d2f74f76b0f8a6d9d0d777->leave($__internal_8df446afb84c2da21ca5abbcf85c0414e1e2e1c142d2f74f76b0f8a6d9d0d777_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/table_post_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 66,  137 => 65,  121 => 58,  115 => 57,  104 => 49,  82 => 31,  73 => 30,  60 => 25,  58 => 10,  57 => 9,  51 => 5,  42 => 4,  11 => 3,);
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
{% extends 'base.html.twig' %}
{% block body %}
   
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"sm-12\">
                {% embed \"@AppBundle/Resources/views/table_post/table_post_table.html.twig\"
                    with {\"table\": table}
                %}
                    {% block tableTitle %}
                        <b>Blog Posteados</b> 
                        <!-- Solo para usuarios logueados   -->
                        {% if app.user %}
                            <a href=\"{{ 'create_post' }}\">
                                <i class=\"glyphicon glyphicon-plus\" title=\"Nuevo Post\"></i>
                            </a>                       
                        
                        {% endif %}
                        
                    {% endblock tableTitle %}

                {% endembed %}
            </div>
        </div>
    </div>
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
{% endblock %}", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/table_post_filter.html.twig");
    }
}


/* @AppBundle/Resources/views/table_post/table_post_filter.html.twig */
class __TwigTemplate_b0f7d45a6df3bf6744f19af507d4f3720f0c10c5c04ac396afb2251a79c2d32d_1582737451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@AppBundle/Resources/views/table_post/table_post_table.html.twig", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", 9);
        $this->blocks = array(
            'tableTitle' => array($this, 'block_tableTitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Resources/views/table_post/table_post_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4881e1d77d1b6acb1b3583f06368743b5fa4eb7a1e39d2fa4905aa5cd68f4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4881e1d77d1b6acb1b3583f06368743b5fa4eb7a1e39d2fa4905aa5cd68f4c4->enter($__internal_c4881e1d77d1b6acb1b3583f06368743b5fa4eb7a1e39d2fa4905aa5cd68f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $__internal_867365db01f0e2c6e575d2e8980ddf5beed8319ac29b4feaa0b9fd3e2fea59e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867365db01f0e2c6e575d2e8980ddf5beed8319ac29b4feaa0b9fd3e2fea59e0->enter($__internal_867365db01f0e2c6e575d2e8980ddf5beed8319ac29b4feaa0b9fd3e2fea59e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4881e1d77d1b6acb1b3583f06368743b5fa4eb7a1e39d2fa4905aa5cd68f4c4->leave($__internal_c4881e1d77d1b6acb1b3583f06368743b5fa4eb7a1e39d2fa4905aa5cd68f4c4_prof);

        
        $__internal_867365db01f0e2c6e575d2e8980ddf5beed8319ac29b4feaa0b9fd3e2fea59e0->leave($__internal_867365db01f0e2c6e575d2e8980ddf5beed8319ac29b4feaa0b9fd3e2fea59e0_prof);

    }

    // line 12
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_0c99f027a3742e3df075e8fdbecf1b363988d340e66888612ed600e422cf4200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c99f027a3742e3df075e8fdbecf1b363988d340e66888612ed600e422cf4200->enter($__internal_0c99f027a3742e3df075e8fdbecf1b363988d340e66888612ed600e422cf4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_161aaf5a46fbb502668d9f51130e814431b2096be799b0ec7e1d36a7274da646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161aaf5a46fbb502668d9f51130e814431b2096be799b0ec7e1d36a7274da646->enter($__internal_161aaf5a46fbb502668d9f51130e814431b2096be799b0ec7e1d36a7274da646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 13
        echo "                        <b>Blog Posteados</b> 
                        <!-- Solo para usuarios logueados   -->
                        ";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "                            <a href=\"";
            echo "create_post";
            echo "\">
                                <i class=\"glyphicon glyphicon-plus\" title=\"Nuevo Post\"></i>
                            </a>                       
                        
                        ";
        }
        // line 21
        echo "                        
                    ";
        
        $__internal_161aaf5a46fbb502668d9f51130e814431b2096be799b0ec7e1d36a7274da646->leave($__internal_161aaf5a46fbb502668d9f51130e814431b2096be799b0ec7e1d36a7274da646_prof);

        
        $__internal_0c99f027a3742e3df075e8fdbecf1b363988d340e66888612ed600e422cf4200->leave($__internal_0c99f027a3742e3df075e8fdbecf1b363988d340e66888612ed600e422cf4200_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/table_post_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 21,  354 => 16,  352 => 15,  348 => 13,  339 => 12,  310 => 9,  146 => 66,  137 => 65,  121 => 58,  115 => 57,  104 => 49,  82 => 31,  73 => 30,  60 => 25,  58 => 10,  57 => 9,  51 => 5,  42 => 4,  11 => 3,);
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
{% extends 'base.html.twig' %}
{% block body %}
   
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"sm-12\">
                {% embed \"@AppBundle/Resources/views/table_post/table_post_table.html.twig\"
                    with {\"table\": table}
                %}
                    {% block tableTitle %}
                        <b>Blog Posteados</b> 
                        <!-- Solo para usuarios logueados   -->
                        {% if app.user %}
                            <a href=\"{{ 'create_post' }}\">
                                <i class=\"glyphicon glyphicon-plus\" title=\"Nuevo Post\"></i>
                            </a>                       
                        
                        {% endif %}
                        
                    {% endblock tableTitle %}

                {% endembed %}
            </div>
        </div>
    </div>
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
{% endblock %}", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/table_post_filter.html.twig");
    }
}
