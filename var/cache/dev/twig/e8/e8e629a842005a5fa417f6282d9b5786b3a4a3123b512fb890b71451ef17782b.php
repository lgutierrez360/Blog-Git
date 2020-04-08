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
        $__internal_270b4f5b2507ac4fa7ee234ac82e4cc8db7b16567a4c0022cf4570fab4bcf44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270b4f5b2507ac4fa7ee234ac82e4cc8db7b16567a4c0022cf4570fab4bcf44b->enter($__internal_270b4f5b2507ac4fa7ee234ac82e4cc8db7b16567a4c0022cf4570fab4bcf44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $__internal_6c803030d1ceab7067a28c1a9c1b49bc1d11238a4e816638b80c34ee90f73f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c803030d1ceab7067a28c1a9c1b49bc1d11238a4e816638b80c34ee90f73f8f->enter($__internal_6c803030d1ceab7067a28c1a9c1b49bc1d11238a4e816638b80c34ee90f73f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270b4f5b2507ac4fa7ee234ac82e4cc8db7b16567a4c0022cf4570fab4bcf44b->leave($__internal_270b4f5b2507ac4fa7ee234ac82e4cc8db7b16567a4c0022cf4570fab4bcf44b_prof);

        
        $__internal_6c803030d1ceab7067a28c1a9c1b49bc1d11238a4e816638b80c34ee90f73f8f->leave($__internal_6c803030d1ceab7067a28c1a9c1b49bc1d11238a4e816638b80c34ee90f73f8f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_546a5d8b382d0a8ea61bef69781b40e050679cf13f95aeb8649efd610b970f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546a5d8b382d0a8ea61bef69781b40e050679cf13f95aeb8649efd610b970f19->enter($__internal_546a5d8b382d0a8ea61bef69781b40e050679cf13f95aeb8649efd610b970f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6255ff2d49f3c50329b27b2d51504cd93f8eb96e8a9f6068c45b53b0a544fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6255ff2d49f3c50329b27b2d51504cd93f8eb96e8a9f6068c45b53b0a544fab->enter($__internal_e6255ff2d49f3c50329b27b2d51504cd93f8eb96e8a9f6068c45b53b0a544fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"sm-12\">
                ";
        // line 9
        $this->loadTemplate("@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", 9, "89491230")->display(array_merge($context, array("table" =>         // line 10
($context["table"] ?? $this->getContext($context, "table")))));
        // line 25
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_e6255ff2d49f3c50329b27b2d51504cd93f8eb96e8a9f6068c45b53b0a544fab->leave($__internal_e6255ff2d49f3c50329b27b2d51504cd93f8eb96e8a9f6068c45b53b0a544fab_prof);

        
        $__internal_546a5d8b382d0a8ea61bef69781b40e050679cf13f95aeb8649efd610b970f19->leave($__internal_546a5d8b382d0a8ea61bef69781b40e050679cf13f95aeb8649efd610b970f19_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4d8e3c3e38814b924749b2280a62cdede1c9304970848ca19bbb7547723b024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d8e3c3e38814b924749b2280a62cdede1c9304970848ca19bbb7547723b024->enter($__internal_c4d8e3c3e38814b924749b2280a62cdede1c9304970848ca19bbb7547723b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e0f74f73922818783a7c5dc01595dcf2d84e721cfb95fc0089252ffd560b058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f74f73922818783a7c5dc01595dcf2d84e721cfb95fc0089252ffd560b058->enter($__internal_0e0f74f73922818783a7c5dc01595dcf2d84e721cfb95fc0089252ffd560b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/kiliktable/js/KilikTable.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$(document).ready(function () {

            \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
            \$(\".lista\").addClass(\"active\");

            var table = new KilikTable(\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "path", array()), "html", null, true);
        echo "\",
                JSON.parse('";
        // line 59
        echo twig_jsonencode_filter($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "options", array()));
        echo "'));

            table.init();
        });
    </script>
";
        
        $__internal_0e0f74f73922818783a7c5dc01595dcf2d84e721cfb95fc0089252ffd560b058->leave($__internal_0e0f74f73922818783a7c5dc01595dcf2d84e721cfb95fc0089252ffd560b058_prof);

        
        $__internal_c4d8e3c3e38814b924749b2280a62cdede1c9304970848ca19bbb7547723b024->leave($__internal_c4d8e3c3e38814b924749b2280a62cdede1c9304970848ca19bbb7547723b024_prof);

    }

    // line 66
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_365667513c66870baee75ff9bc6eb8cf2daf6ee15083161caeb616c87b2f3ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365667513c66870baee75ff9bc6eb8cf2daf6ee15083161caeb616c87b2f3ab7->enter($__internal_365667513c66870baee75ff9bc6eb8cf2daf6ee15083161caeb616c87b2f3ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cfc0346ae5be18d1718745b3e7271b9e79bcb1f6ddcb5203efa729cd97afbc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc0346ae5be18d1718745b3e7271b9e79bcb1f6ddcb5203efa729cd97afbc32->enter($__internal_cfc0346ae5be18d1718745b3e7271b9e79bcb1f6ddcb5203efa729cd97afbc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 67
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
        
        $__internal_cfc0346ae5be18d1718745b3e7271b9e79bcb1f6ddcb5203efa729cd97afbc32->leave($__internal_cfc0346ae5be18d1718745b3e7271b9e79bcb1f6ddcb5203efa729cd97afbc32_prof);

        
        $__internal_365667513c66870baee75ff9bc6eb8cf2daf6ee15083161caeb616c87b2f3ab7->leave($__internal_365667513c66870baee75ff9bc6eb8cf2daf6ee15083161caeb616c87b2f3ab7_prof);

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
        return array (  147 => 67,  138 => 66,  122 => 59,  116 => 58,  105 => 50,  82 => 31,  73 => 30,  60 => 25,  58 => 10,  57 => 9,  51 => 5,  42 => 4,  11 => 3,);
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
   
    <div class=\"container\">
        <div class=\"row mt-5\">
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
{% endblock %}", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_post/table_post_filter.html.twig");
    }
}


/* @AppBundle/Resources/views/table_post/table_post_filter.html.twig */
class __TwigTemplate_b0f7d45a6df3bf6744f19af507d4f3720f0c10c5c04ac396afb2251a79c2d32d_89491230 extends Twig_Template
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
        $__internal_d5a2d42e9a28113c4d973dc8b15fd6eb884c9a14eeceec8f033ebaaf6bc317ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a2d42e9a28113c4d973dc8b15fd6eb884c9a14eeceec8f033ebaaf6bc317ac->enter($__internal_d5a2d42e9a28113c4d973dc8b15fd6eb884c9a14eeceec8f033ebaaf6bc317ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $__internal_90a117cd25999dbe3ffc92fae2ecbf2081631a34fc0c4d0d037642d050955a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a117cd25999dbe3ffc92fae2ecbf2081631a34fc0c4d0d037642d050955a53->enter($__internal_90a117cd25999dbe3ffc92fae2ecbf2081631a34fc0c4d0d037642d050955a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a2d42e9a28113c4d973dc8b15fd6eb884c9a14eeceec8f033ebaaf6bc317ac->leave($__internal_d5a2d42e9a28113c4d973dc8b15fd6eb884c9a14eeceec8f033ebaaf6bc317ac_prof);

        
        $__internal_90a117cd25999dbe3ffc92fae2ecbf2081631a34fc0c4d0d037642d050955a53->leave($__internal_90a117cd25999dbe3ffc92fae2ecbf2081631a34fc0c4d0d037642d050955a53_prof);

    }

    // line 12
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_19750205ea1c3408b33d0812b4f91d9bdff5a4c408fa419236e94a5b47575681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19750205ea1c3408b33d0812b4f91d9bdff5a4c408fa419236e94a5b47575681->enter($__internal_19750205ea1c3408b33d0812b4f91d9bdff5a4c408fa419236e94a5b47575681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_d73dc1457304f0f57d99e689c07d7fb7592fab7df8999f8ff2f2b8394b543cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73dc1457304f0f57d99e689c07d7fb7592fab7df8999f8ff2f2b8394b543cea->enter($__internal_d73dc1457304f0f57d99e689c07d7fb7592fab7df8999f8ff2f2b8394b543cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

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
        
        $__internal_d73dc1457304f0f57d99e689c07d7fb7592fab7df8999f8ff2f2b8394b543cea->leave($__internal_d73dc1457304f0f57d99e689c07d7fb7592fab7df8999f8ff2f2b8394b543cea_prof);

        
        $__internal_19750205ea1c3408b33d0812b4f91d9bdff5a4c408fa419236e94a5b47575681->leave($__internal_19750205ea1c3408b33d0812b4f91d9bdff5a4c408fa419236e94a5b47575681_prof);

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
        return array (  365 => 21,  356 => 16,  354 => 15,  350 => 13,  341 => 12,  312 => 9,  147 => 67,  138 => 66,  122 => 59,  116 => 58,  105 => 50,  82 => 31,  73 => 30,  60 => 25,  58 => 10,  57 => 9,  51 => 5,  42 => 4,  11 => 3,);
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
   
    <div class=\"container\">
        <div class=\"row mt-5\">
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
{% endblock %}", "@AppBundle/Resources/views/table_post/table_post_filter.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_post/table_post_filter.html.twig");
    }
}
