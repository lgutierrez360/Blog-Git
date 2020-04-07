<?php

/* @AppBundle/Resources/views/table_post/view_post.html.twig */
class __TwigTemplate_5c58f9e09d9c178e508da61edf00f5f31cfd8a18f56acae942e11813c638823a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/table_post/view_post.html.twig", 1);
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
        $__internal_962034d1f0de033745cfc6f884cc8c565b0cad63a8e8430a7efc410161771696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962034d1f0de033745cfc6f884cc8c565b0cad63a8e8430a7efc410161771696->enter($__internal_962034d1f0de033745cfc6f884cc8c565b0cad63a8e8430a7efc410161771696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/view_post.html.twig"));

        $__internal_ced2ef4928929a4e91dc1e55e8001b5cc161428226a1b7b824a4a778262a04aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced2ef4928929a4e91dc1e55e8001b5cc161428226a1b7b824a4a778262a04aa->enter($__internal_ced2ef4928929a4e91dc1e55e8001b5cc161428226a1b7b824a4a778262a04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/view_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962034d1f0de033745cfc6f884cc8c565b0cad63a8e8430a7efc410161771696->leave($__internal_962034d1f0de033745cfc6f884cc8c565b0cad63a8e8430a7efc410161771696_prof);

        
        $__internal_ced2ef4928929a4e91dc1e55e8001b5cc161428226a1b7b824a4a778262a04aa->leave($__internal_ced2ef4928929a4e91dc1e55e8001b5cc161428226a1b7b824a4a778262a04aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_042a84eca6f692d5676146af6bbb66517837bb868518b077d41cb3bb54a0d753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042a84eca6f692d5676146af6bbb66517837bb868518b077d41cb3bb54a0d753->enter($__internal_042a84eca6f692d5676146af6bbb66517837bb868518b077d41cb3bb54a0d753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_851bae84cebb1fa5febb6fc93d74bc3db37e6352694bc0d09947e23d2edc7936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851bae84cebb1fa5febb6fc93d74bc3db37e6352694bc0d09947e23d2edc7936->enter($__internal_851bae84cebb1fa5febb6fc93d74bc3db37e6352694bc0d09947e23d2edc7936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"post\">
\t\t\t\t<h4 class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array())), "html", null, true);
        echo "</h4>
\t\t\t\t<p class=\"date_post\"><b>Publicado :</b>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "create_at", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"body\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "</p>

\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_851bae84cebb1fa5febb6fc93d74bc3db37e6352694bc0d09947e23d2edc7936->leave($__internal_851bae84cebb1fa5febb6fc93d74bc3db37e6352694bc0d09947e23d2edc7936_prof);

        
        $__internal_042a84eca6f692d5676146af6bbb66517837bb868518b077d41cb3bb54a0d753->leave($__internal_042a84eca6f692d5676146af6bbb66517837bb868518b077d41cb3bb54a0d753_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/view_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
\t\t\t<div class=\"post\">
\t\t\t\t<h4 class=\"title\">{{ post.title|upper }}</h4>
\t\t\t\t<p class=\"date_post\"><b>Publicado :</b>{{ post.create_at|date('F j, Y, g:i a') }}</p>
\t\t\t\t<p class=\"body\">{{ post.body }}</p>

\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock %}", "@AppBundle/Resources/views/table_post/view_post.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/view_post.html.twig");
    }
}
