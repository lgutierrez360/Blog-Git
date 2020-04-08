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
        $__internal_db9a8faf6000f816b3f24d2307edeb533271661df871c52534c617b539570f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9a8faf6000f816b3f24d2307edeb533271661df871c52534c617b539570f18->enter($__internal_db9a8faf6000f816b3f24d2307edeb533271661df871c52534c617b539570f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e2bc8901baa0e5d6050fd21b0799c5dd6b06ddeecc0677d2b5ce12f060572ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bc8901baa0e5d6050fd21b0799c5dd6b06ddeecc0677d2b5ce12f060572ba0->enter($__internal_e2bc8901baa0e5d6050fd21b0799c5dd6b06ddeecc0677d2b5ce12f060572ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_db9a8faf6000f816b3f24d2307edeb533271661df871c52534c617b539570f18->leave($__internal_db9a8faf6000f816b3f24d2307edeb533271661df871c52534c617b539570f18_prof);

        
        $__internal_e2bc8901baa0e5d6050fd21b0799c5dd6b06ddeecc0677d2b5ce12f060572ba0->leave($__internal_e2bc8901baa0e5d6050fd21b0799c5dd6b06ddeecc0677d2b5ce12f060572ba0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be589d8470d0aef6a93e00fd07ad87bd572179f8a6515047f8631ad01deff521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be589d8470d0aef6a93e00fd07ad87bd572179f8a6515047f8631ad01deff521->enter($__internal_be589d8470d0aef6a93e00fd07ad87bd572179f8a6515047f8631ad01deff521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64586b224003ff940cf2d2fd79552d8a9e39c8585ef4dd3f4ac71984c15becb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64586b224003ff940cf2d2fd79552d8a9e39c8585ef4dd3f4ac71984c15becb0->enter($__internal_64586b224003ff940cf2d2fd79552d8a9e39c8585ef4dd3f4ac71984c15becb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog!";
        
        $__internal_64586b224003ff940cf2d2fd79552d8a9e39c8585ef4dd3f4ac71984c15becb0->leave($__internal_64586b224003ff940cf2d2fd79552d8a9e39c8585ef4dd3f4ac71984c15becb0_prof);

        
        $__internal_be589d8470d0aef6a93e00fd07ad87bd572179f8a6515047f8631ad01deff521->leave($__internal_be589d8470d0aef6a93e00fd07ad87bd572179f8a6515047f8631ad01deff521_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d96a2047f8de2c2eaf88bb95a708b73c7c1ab66d9b13e1176eb4dd949d32f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d96a2047f8de2c2eaf88bb95a708b73c7c1ab66d9b13e1176eb4dd949d32f72->enter($__internal_3d96a2047f8de2c2eaf88bb95a708b73c7c1ab66d9b13e1176eb4dd949d32f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7e21efcd6ebb7c0df72a3b711b0d23326535f4b601b6ab6d26c8bb0ee0eeacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e21efcd6ebb7c0df72a3b711b0d23326535f4b601b6ab6d26c8bb0ee0eeacc->enter($__internal_b7e21efcd6ebb7c0df72a3b711b0d23326535f4b601b6ab6d26c8bb0ee0eeacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7e21efcd6ebb7c0df72a3b711b0d23326535f4b601b6ab6d26c8bb0ee0eeacc->leave($__internal_b7e21efcd6ebb7c0df72a3b711b0d23326535f4b601b6ab6d26c8bb0ee0eeacc_prof);

        
        $__internal_3d96a2047f8de2c2eaf88bb95a708b73c7c1ab66d9b13e1176eb4dd949d32f72->leave($__internal_3d96a2047f8de2c2eaf88bb95a708b73c7c1ab66d9b13e1176eb4dd949d32f72_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_d30703b8b4a9b930465f046de029c2c51b233d4a98f8289c4f11748c3b5fd9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30703b8b4a9b930465f046de029c2c51b233d4a98f8289c4f11748c3b5fd9ee->enter($__internal_d30703b8b4a9b930465f046de029c2c51b233d4a98f8289c4f11748c3b5fd9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11b137d0d80e7438c16211def7f1d39eb5227daca60af1e26f02137b065edd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b137d0d80e7438c16211def7f1d39eb5227daca60af1e26f02137b065edd4a->enter($__internal_11b137d0d80e7438c16211def7f1d39eb5227daca60af1e26f02137b065edd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_11b137d0d80e7438c16211def7f1d39eb5227daca60af1e26f02137b065edd4a->leave($__internal_11b137d0d80e7438c16211def7f1d39eb5227daca60af1e26f02137b065edd4a_prof);

        
        $__internal_d30703b8b4a9b930465f046de029c2c51b233d4a98f8289c4f11748c3b5fd9ee->leave($__internal_d30703b8b4a9b930465f046de029c2c51b233d4a98f8289c4f11748c3b5fd9ee_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_034795fce74d3864b29038667599d7024e1b8de32a45b03bdfed73ba182e06ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034795fce74d3864b29038667599d7024e1b8de32a45b03bdfed73ba182e06ba->enter($__internal_034795fce74d3864b29038667599d7024e1b8de32a45b03bdfed73ba182e06ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_967713ccc26cba4de29573444284d14dedf62099c211c91c5708553a2acf5a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967713ccc26cba4de29573444284d14dedf62099c211c91c5708553a2acf5a7d->enter($__internal_967713ccc26cba4de29573444284d14dedf62099c211c91c5708553a2acf5a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_967713ccc26cba4de29573444284d14dedf62099c211c91c5708553a2acf5a7d->leave($__internal_967713ccc26cba4de29573444284d14dedf62099c211c91c5708553a2acf5a7d_prof);

        
        $__internal_034795fce74d3864b29038667599d7024e1b8de32a45b03bdfed73ba182e06ba->leave($__internal_034795fce74d3864b29038667599d7024e1b8de32a45b03bdfed73ba182e06ba_prof);

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
", "base.html.twig", "/home/leandro/blog/app/Resources/views/base.html.twig");
    }
}
