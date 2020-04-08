<?php

/* @AppBundle/Resources/views/table_user/view_user.html.twig */
class __TwigTemplate_c158a8b89b81f6eeb8ca3ba3b458296af609b1ea1f6c56f05d8eb7a021efe237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/table_user/view_user.html.twig", 1);
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
        $__internal_5986b5aaeb5bf5c2df282d0d304cafdbc1651afb6c9ad845191358d78d5eb4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5986b5aaeb5bf5c2df282d0d304cafdbc1651afb6c9ad845191358d78d5eb4fd->enter($__internal_5986b5aaeb5bf5c2df282d0d304cafdbc1651afb6c9ad845191358d78d5eb4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/view_user.html.twig"));

        $__internal_d9cffa24c1736074975917bdca3c3dfb7bc061361d98e86466b5c00acd5e27d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cffa24c1736074975917bdca3c3dfb7bc061361d98e86466b5c00acd5e27d6->enter($__internal_d9cffa24c1736074975917bdca3c3dfb7bc061361d98e86466b5c00acd5e27d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_user/view_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5986b5aaeb5bf5c2df282d0d304cafdbc1651afb6c9ad845191358d78d5eb4fd->leave($__internal_5986b5aaeb5bf5c2df282d0d304cafdbc1651afb6c9ad845191358d78d5eb4fd_prof);

        
        $__internal_d9cffa24c1736074975917bdca3c3dfb7bc061361d98e86466b5c00acd5e27d6->leave($__internal_d9cffa24c1736074975917bdca3c3dfb7bc061361d98e86466b5c00acd5e27d6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_09b0d23dfdc97d2ebeb0bf67843d544ca34591ba5770873ae15723d98c7c5a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b0d23dfdc97d2ebeb0bf67843d544ca34591ba5770873ae15723d98c7c5a41->enter($__internal_09b0d23dfdc97d2ebeb0bf67843d544ca34591ba5770873ae15723d98c7c5a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10ee200f6da5b366454cc5225bb818fc76c4d20df9ffeaa817ba9456b52b4b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ee200f6da5b366454cc5225bb818fc76c4d20df9ffeaa817ba9456b52b4b8f->enter($__internal_10ee200f6da5b366454cc5225bb818fc76c4d20df9ffeaa817ba9456b52b4b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"user\">
\t\t\t\t<h4 class=\"fullname\">";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "surname", array())), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array())), "html", null, true);
        echo "</h4>
\t\t\t\t<p class=\"email\"><b>e-mail :</b> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"active\"><b>Activo :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "active", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"Administrador\"><b>Administrador :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "administrator", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"date_post\"><b>Solicitud de alta :</b>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "create_at", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_10ee200f6da5b366454cc5225bb818fc76c4d20df9ffeaa817ba9456b52b4b8f->leave($__internal_10ee200f6da5b366454cc5225bb818fc76c4d20df9ffeaa817ba9456b52b4b8f_prof);

        
        $__internal_09b0d23dfdc97d2ebeb0bf67843d544ca34591ba5770873ae15723d98c7c5a41->leave($__internal_09b0d23dfdc97d2ebeb0bf67843d544ca34591ba5770873ae15723d98c7c5a41_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_user/view_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  69 => 10,  65 => 9,  61 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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

\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"user\">
\t\t\t\t<h4 class=\"fullname\">{{ user.surname|upper }} , {{ user.name|upper }}</h4>
\t\t\t\t<p class=\"email\"><b>e-mail :</b> {{ user.email }}</p>
\t\t\t\t<p class=\"active\"><b>Activo :</b>{{ user.active }}</p>
\t\t\t\t<p class=\"Administrador\"><b>Administrador :</b>{{ user.administrator }}</p>
\t\t\t\t<p class=\"date_post\"><b>Solicitud de alta :</b>{{ user.create_at|date('F j, Y, g:i a') }}</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock %}", "@AppBundle/Resources/views/table_user/view_user.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table_user/view_user.html.twig");
    }
}
