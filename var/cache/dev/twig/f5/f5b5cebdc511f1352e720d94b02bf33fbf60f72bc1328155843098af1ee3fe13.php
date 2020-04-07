<?php

/* @AppBundle/Resources/views/table_post/create_post.html.twig */
class __TwigTemplate_6806cae9de7bab3091aaad3749385fe98eeccd0dd6eb774b00f939ebda4e3351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/table_post/create_post.html.twig", 2);
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
        $__internal_481f8f4bf0f88cebfad576e144fc2695550fec9fb6e61bdc8ea0237ffb1c498a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481f8f4bf0f88cebfad576e144fc2695550fec9fb6e61bdc8ea0237ffb1c498a->enter($__internal_481f8f4bf0f88cebfad576e144fc2695550fec9fb6e61bdc8ea0237ffb1c498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/create_post.html.twig"));

        $__internal_a5b5cca294731c65ee8a4d40bf068b0ea682fd9a1407034e122b1506ac40f2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b5cca294731c65ee8a4d40bf068b0ea682fd9a1407034e122b1506ac40f2b1->enter($__internal_a5b5cca294731c65ee8a4d40bf068b0ea682fd9a1407034e122b1506ac40f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/create_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481f8f4bf0f88cebfad576e144fc2695550fec9fb6e61bdc8ea0237ffb1c498a->leave($__internal_481f8f4bf0f88cebfad576e144fc2695550fec9fb6e61bdc8ea0237ffb1c498a_prof);

        
        $__internal_a5b5cca294731c65ee8a4d40bf068b0ea682fd9a1407034e122b1506ac40f2b1->leave($__internal_a5b5cca294731c65ee8a4d40bf068b0ea682fd9a1407034e122b1506ac40f2b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22fb75cce1f0bdfa78242d252cf56c28db074f5f8a773cf15e842b06c4d1a11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fb75cce1f0bdfa78242d252cf56c28db074f5f8a773cf15e842b06c4d1a11c->enter($__internal_22fb75cce1f0bdfa78242d252cf56c28db074f5f8a773cf15e842b06c4d1a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b624ce4eff96a7f70b965bfcc4e18c8ad06f9115b16febaa9e2cecae0c1d2f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b624ce4eff96a7f70b965bfcc4e18c8ad06f9115b16febaa9e2cecae0c1d2f60->enter($__internal_b624ce4eff96a7f70b965bfcc4e18c8ad06f9115b16febaa9e2cecae0c1d2f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container\">
\t\t<div class=\"row mt-5\">
\t\t\t<div class=\"col-lg-9 col-md-12\">
\t           
\t           ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t           ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t           ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_b624ce4eff96a7f70b965bfcc4e18c8ad06f9115b16febaa9e2cecae0c1d2f60->leave($__internal_b624ce4eff96a7f70b965bfcc4e18c8ad06f9115b16febaa9e2cecae0c1d2f60_prof);

        
        $__internal_22fb75cce1f0bdfa78242d252cf56c28db074f5f8a773cf15e842b06c4d1a11c->leave($__internal_22fb75cce1f0bdfa78242d252cf56c28db074f5f8a773cf15e842b06c4d1a11c_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/create_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}

\t<div class=\"container\">
\t\t<div class=\"row mt-5\">
\t\t\t<div class=\"col-lg-9 col-md-12\">
\t           
\t           {{ form_start( form ) }}
\t           {{ form_widget(form) }}
\t           {{ form_end(form) }}
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

", "@AppBundle/Resources/views/table_post/create_post.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/create_post.html.twig");
    }
}
