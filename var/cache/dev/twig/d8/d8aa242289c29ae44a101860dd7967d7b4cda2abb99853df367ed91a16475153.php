<?php

/* base.html.twig */
class __TwigTemplate_0766de702cd9569f21db16b9b6aa1a36b3df221758ce9b87632445c0613ddd90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce1a6186f060f6bef120dfe7dad8952fedd0c61bc4005fc5956cd16f76443167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1a6186f060f6bef120dfe7dad8952fedd0c61bc4005fc5956cd16f76443167->enter($__internal_ce1a6186f060f6bef120dfe7dad8952fedd0c61bc4005fc5956cd16f76443167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d0ede0307c91915f357941de7eeb1b57405e73049ef9be6dffd1578eadf585c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ede0307c91915f357941de7eeb1b57405e73049ef9be6dffd1578eadf585c8->enter($__internal_d0ede0307c91915f357941de7eeb1b57405e73049ef9be6dffd1578eadf585c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <div class=\"container\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">MI BLOG</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuNavegacion\" aria-controls=\"menuNavegacion\" aria-expanded=\"false\" aria-label=\"Alternar Menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"row\">
                        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"menuNavegacion\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link\">Inicio</a>
                                </li>

                                ";
        // line 25
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 26
            echo "                                    <!--Usuario Logueado-->
                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post");
            echo "\" class=\"nav-link\">Blog</a>
                                    </li>
                                    
                                    ";
            // line 31
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "administrator", array()) == "SI")) {
                // line 32
                echo "                                        <!--Usuario Administrador-->
                                        <li class=\"nav-item\">
                                            <a href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
                echo "\" class=\"nav-link\">List User</a>
                                        </li>
                                    ";
            }
            // line 37
            echo "                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"nav-link\">Cerrar Session</a>
                                    </li>
                                ";
        } else {
            // line 41
            echo "                                    <!--Usuario no Logueado-->
                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"nav-link\">Login</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"nav-link\">register</a>
                                    </li>

                                ";
        }
        // line 50
        echo "                                ";
        // line 53
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>            
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_ce1a6186f060f6bef120dfe7dad8952fedd0c61bc4005fc5956cd16f76443167->leave($__internal_ce1a6186f060f6bef120dfe7dad8952fedd0c61bc4005fc5956cd16f76443167_prof);

        
        $__internal_d0ede0307c91915f357941de7eeb1b57405e73049ef9be6dffd1578eadf585c8->leave($__internal_d0ede0307c91915f357941de7eeb1b57405e73049ef9be6dffd1578eadf585c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc686c9520a5db51ea3dd8dbb91cc638e39e716493de85a19d73784ab3bea5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc686c9520a5db51ea3dd8dbb91cc638e39e716493de85a19d73784ab3bea5fc->enter($__internal_fc686c9520a5db51ea3dd8dbb91cc638e39e716493de85a19d73784ab3bea5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_631deaa6ac7b7f5086e8b074a1f813b6ab3b759b1baa7240565adbc38573ea00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631deaa6ac7b7f5086e8b074a1f813b6ab3b759b1baa7240565adbc38573ea00->enter($__internal_631deaa6ac7b7f5086e8b074a1f813b6ab3b759b1baa7240565adbc38573ea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog!";
        
        $__internal_631deaa6ac7b7f5086e8b074a1f813b6ab3b759b1baa7240565adbc38573ea00->leave($__internal_631deaa6ac7b7f5086e8b074a1f813b6ab3b759b1baa7240565adbc38573ea00_prof);

        
        $__internal_fc686c9520a5db51ea3dd8dbb91cc638e39e716493de85a19d73784ab3bea5fc->leave($__internal_fc686c9520a5db51ea3dd8dbb91cc638e39e716493de85a19d73784ab3bea5fc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cf554dbc1a7c3f280357afa04b5fc41c0ec258258600a05c1c1c56fbca24a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf554dbc1a7c3f280357afa04b5fc41c0ec258258600a05c1c1c56fbca24a82->enter($__internal_1cf554dbc1a7c3f280357afa04b5fc41c0ec258258600a05c1c1c56fbca24a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_755ab96ca37d6c786f02165ba5c6bd48163580006415f7a9e55631c595ec4a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755ab96ca37d6c786f02165ba5c6bd48163580006415f7a9e55631c595ec4a6a->enter($__internal_755ab96ca37d6c786f02165ba5c6bd48163580006415f7a9e55631c595ec4a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_755ab96ca37d6c786f02165ba5c6bd48163580006415f7a9e55631c595ec4a6a->leave($__internal_755ab96ca37d6c786f02165ba5c6bd48163580006415f7a9e55631c595ec4a6a_prof);

        
        $__internal_1cf554dbc1a7c3f280357afa04b5fc41c0ec258258600a05c1c1c56fbca24a82->leave($__internal_1cf554dbc1a7c3f280357afa04b5fc41c0ec258258600a05c1c1c56fbca24a82_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a9e5a74b39da4f823280f97166c558822289846d6762c8145622295d18ec4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9e5a74b39da4f823280f97166c558822289846d6762c8145622295d18ec4f6->enter($__internal_8a9e5a74b39da4f823280f97166c558822289846d6762c8145622295d18ec4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba400436c81e75838aaf5657c82c108f56a07d73c3f8872ee6f06daaa76b951f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba400436c81e75838aaf5657c82c108f56a07d73c3f8872ee6f06daaa76b951f->enter($__internal_ba400436c81e75838aaf5657c82c108f56a07d73c3f8872ee6f06daaa76b951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba400436c81e75838aaf5657c82c108f56a07d73c3f8872ee6f06daaa76b951f->leave($__internal_ba400436c81e75838aaf5657c82c108f56a07d73c3f8872ee6f06daaa76b951f_prof);

        
        $__internal_8a9e5a74b39da4f823280f97166c558822289846d6762c8145622295d18ec4f6->leave($__internal_8a9e5a74b39da4f823280f97166c558822289846d6762c8145622295d18ec4f6_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ceee382b6f4f2c425380a814ee19e7810aebaae4980b34f312d05a33f238661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ceee382b6f4f2c425380a814ee19e7810aebaae4980b34f312d05a33f238661->enter($__internal_6ceee382b6f4f2c425380a814ee19e7810aebaae4980b34f312d05a33f238661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec413e7e3079be3dbef2dd657f8f8f3eeb782a0d66d8cb890a906db3d777242b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec413e7e3079be3dbef2dd657f8f8f3eeb782a0d66d8cb890a906db3d777242b->enter($__internal_ec413e7e3079be3dbef2dd657f8f8f3eeb782a0d66d8cb890a906db3d777242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec413e7e3079be3dbef2dd657f8f8f3eeb782a0d66d8cb890a906db3d777242b->leave($__internal_ec413e7e3079be3dbef2dd657f8f8f3eeb782a0d66d8cb890a906db3d777242b_prof);

        
        $__internal_6ceee382b6f4f2c425380a814ee19e7810aebaae4980b34f312d05a33f238661->leave($__internal_6ceee382b6f4f2c425380a814ee19e7810aebaae4980b34f312d05a33f238661_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 61,  188 => 59,  171 => 7,  153 => 5,  141 => 62,  139 => 61,  134 => 60,  132 => 59,  124 => 53,  122 => 50,  115 => 46,  109 => 43,  105 => 41,  99 => 38,  96 => 37,  90 => 34,  86 => 32,  84 => 31,  78 => 28,  74 => 26,  72 => 25,  66 => 22,  55 => 14,  45 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Blog!{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <div class=\"container\">
                    <a href=\"{{path('homepage')}}\" class=\"navbar-brand\">MI BLOG</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuNavegacion\" aria-controls=\"menuNavegacion\" aria-expanded=\"false\" aria-label=\"Alternar Menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"row\">
                        <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"menuNavegacion\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"{{path('homepage')}}\" class=\"nav-link\">Inicio</a>
                                </li>

                                {% if app.user%}
                                    <!--Usuario Logueado-->
                                    <li class=\"nav-item\">
                                        <a href=\"{{path('post')}}\" class=\"nav-link\">Blog</a>
                                    </li>
                                    
                                    {% if app.user.administrator == 'SI' %}
                                        <!--Usuario Administrador-->
                                        <li class=\"nav-item\">
                                            <a href=\"{{path('profile')}}\" class=\"nav-link\">List User</a>
                                        </li>
                                    {% endif %}
                                    <li class=\"nav-item\">
                                        <a href=\"{{path('logout')}}\" class=\"nav-link\">Cerrar Session</a>
                                    </li>
                                {% else %}
                                    <!--Usuario no Logueado-->
                                    <li class=\"nav-item\">
                                        <a href=\"{{path('login')}}\" class=\"nav-link\">Login</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{path('register')}}\" class=\"nav-link\">register</a>
                                    </li>

                                {% endif %}
                                {#% if session->get('user',loginUser) %}

                                {% endif  %#}
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {% block body %}{% endblock %}
            <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>            
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/leandro/my_project_name/app/Resources/views/base.html.twig");
    }
}
