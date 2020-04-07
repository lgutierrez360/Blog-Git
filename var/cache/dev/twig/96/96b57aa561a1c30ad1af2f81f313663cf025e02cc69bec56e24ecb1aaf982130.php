<?php

/* security/login.html.twig */
class __TwigTemplate_6731561210025da241d7af38cd927e5e3520916cf6fc32585c1ecc0b5b42b41d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9646dd2d3d14b0d70912a71fa9f6389692b1852bde7aece02c70be12562bd6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9646dd2d3d14b0d70912a71fa9f6389692b1852bde7aece02c70be12562bd6f5->enter($__internal_9646dd2d3d14b0d70912a71fa9f6389692b1852bde7aece02c70be12562bd6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_4c813a54e3ba9124f6f5a5652e5b0c9095c29482c1c0d3681d8a5f4943dd84f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c813a54e3ba9124f6f5a5652e5b0c9095c29482c1c0d3681d8a5f4943dd84f1->enter($__internal_4c813a54e3ba9124f6f5a5652e5b0c9095c29482c1c0d3681d8a5f4943dd84f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9646dd2d3d14b0d70912a71fa9f6389692b1852bde7aece02c70be12562bd6f5->leave($__internal_9646dd2d3d14b0d70912a71fa9f6389692b1852bde7aece02c70be12562bd6f5_prof);

        
        $__internal_4c813a54e3ba9124f6f5a5652e5b0c9095c29482c1c0d3681d8a5f4943dd84f1->leave($__internal_4c813a54e3ba9124f6f5a5652e5b0c9095c29482c1c0d3681d8a5f4943dd84f1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4273c7a78e27cb7115f81d4fb489e18c5744ffd9d94bb9eb5fb10d7ce3d09bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4273c7a78e27cb7115f81d4fb489e18c5744ffd9d94bb9eb5fb10d7ce3d09bb->enter($__internal_f4273c7a78e27cb7115f81d4fb489e18c5744ffd9d94bb9eb5fb10d7ce3d09bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e974018977be7418497bcde5155f336659df38b90e1ec3c9681c66e4354a6106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e974018977be7418497bcde5155f336659df38b90e1ec3c9681c66e4354a6106->enter($__internal_e974018977be7418497bcde5155f336659df38b90e1ec3c9681c66e4354a6106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <div class=\"container\">
        ";
        // line 7
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 8
            echo "            <div class=\"row alert alert-danger mt-3\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "        ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
            echo "
        ";
        }
        // line 13
        echo "        <div class=\"row mt-5\">
            <div class=\"col-lg-5 col-md-12\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">email</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"email\" name=\"_username\" id=\"username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Contraseña</label>
                        <input type=\"password\" class=\"form-control\" placeholder=\"password\" name=\"_password\" id=\"password\">
                    </div>

                    ";
        // line 31
        echo "                    <button class=\"btn btn-info\" type=\"submit\">Aceptar</button>

                </form>
            </div>
        
            <div class=\"col-lg-5\" style=\"background:#d5f5d6;\">
                <div class=\"p-2\">
                    <h6>Crear cuenta</h6>
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" class=\"btn btn-info\">Crear Solicitud</a>               
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e974018977be7418497bcde5155f336659df38b90e1ec3c9681c66e4354a6106->leave($__internal_e974018977be7418497bcde5155f336659df38b90e1ec3c9681c66e4354a6106_prof);

        
        $__internal_f4273c7a78e27cb7115f81d4fb489e18c5744ffd9d94bb9eb5fb10d7ce3d09bb->leave($__internal_f4273c7a78e27cb7115f81d4fb489e18c5744ffd9d94bb9eb5fb10d7ce3d09bb_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  91 => 31,  80 => 18,  74 => 15,  70 => 13,  64 => 11,  61 => 10,  55 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
   
    <div class=\"container\">
        {% if error %}
            <div class=\"row alert alert-danger mt-3\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        {% if app.user %}
            {{ dump(app.user) }}
        {% endif %}
        <div class=\"row mt-5\">
            <div class=\"col-lg-5 col-md-12\">
                <form action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">email</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"email\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Contraseña</label>
                        <input type=\"password\" class=\"form-control\" placeholder=\"password\" name=\"_password\" id=\"password\">
                    </div>

                    {#
                        If you want to control the URL the user
                        is redirected to on success (more details below)
                        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                    #}
                    <button class=\"btn btn-info\" type=\"submit\">Aceptar</button>

                </form>
            </div>
        
            <div class=\"col-lg-5\" style=\"background:#d5f5d6;\">
                <div class=\"p-2\">
                    <h6>Crear cuenta</h6>
                        <a href=\"{{ path('register') }}\" class=\"btn btn-info\">Crear Solicitud</a>               
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "security/login.html.twig", "/home/leandro/my_project_name/app/Resources/views/security/login.html.twig");
    }
}
