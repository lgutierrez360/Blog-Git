<?php

/* security/register.html.twig */
class __TwigTemplate_752fbf3e959436047af4714ac67309189f6213ef4885943a75060bae237d285f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 3);
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
        $__internal_056f4f7523db848c17b66a1d99b4f744781579c30d4135c2336763a7522cc019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056f4f7523db848c17b66a1d99b4f744781579c30d4135c2336763a7522cc019->enter($__internal_056f4f7523db848c17b66a1d99b4f744781579c30d4135c2336763a7522cc019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_bb315bcf1ba3f9fee8647519e285290a04f508f18e3154e6323ce60bf4e1682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb315bcf1ba3f9fee8647519e285290a04f508f18e3154e6323ce60bf4e1682b->enter($__internal_bb315bcf1ba3f9fee8647519e285290a04f508f18e3154e6323ce60bf4e1682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056f4f7523db848c17b66a1d99b4f744781579c30d4135c2336763a7522cc019->leave($__internal_056f4f7523db848c17b66a1d99b4f744781579c30d4135c2336763a7522cc019_prof);

        
        $__internal_bb315bcf1ba3f9fee8647519e285290a04f508f18e3154e6323ce60bf4e1682b->leave($__internal_bb315bcf1ba3f9fee8647519e285290a04f508f18e3154e6323ce60bf4e1682b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_685fc33b520992e522de03097d6d9c7ca8b162dd00649e727c2dae2830f76aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685fc33b520992e522de03097d6d9c7ca8b162dd00649e727c2dae2830f76aff->enter($__internal_685fc33b520992e522de03097d6d9c7ca8b162dd00649e727c2dae2830f76aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fac8c5037777a2dc5ad2d14f419ff5ff3329f0109ed77f3405e21ed028c8eb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac8c5037777a2dc5ad2d14f419ff5ff3329f0109ed77f3405e21ed028c8eb52->enter($__internal_fac8c5037777a2dc5ad2d14f419ff5ff3329f0109ed77f3405e21ed028c8eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-lg-9 col-md-12\">              
                
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_fac8c5037777a2dc5ad2d14f419ff5ff3329f0109ed77f3405e21ed028c8eb52->leave($__internal_fac8c5037777a2dc5ad2d14f419ff5ff3329f0109ed77f3405e21ed028c8eb52_prof);

        
        $__internal_685fc33b520992e522de03097d6d9c7ca8b162dd00649e727c2dae2830f76aff->leave($__internal_685fc33b520992e522de03097d6d9c7ca8b162dd00649e727c2dae2830f76aff_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  56 => 10,  49 => 5,  40 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/register.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
   
    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-lg-9 col-md-12\">              
                
                {{ form_start( form ) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "security/register.html.twig", "/home/leandro/blog/app/Resources/views/security/register.html.twig");
    }
}
