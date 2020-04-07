<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b41989c9455b62af6072cd2e7c3a5966929d003938d7eb89ff9b867f01296cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a03a5e91de21a7a1ce93f0e949cd5bc6dec722d8b631895b1eb6a94dda84337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a03a5e91de21a7a1ce93f0e949cd5bc6dec722d8b631895b1eb6a94dda84337->enter($__internal_4a03a5e91de21a7a1ce93f0e949cd5bc6dec722d8b631895b1eb6a94dda84337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2c806038dff6a46a91e5f07711fd50a9d18a9903cf57f45c95f20031725f2549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c806038dff6a46a91e5f07711fd50a9d18a9903cf57f45c95f20031725f2549->enter($__internal_2c806038dff6a46a91e5f07711fd50a9d18a9903cf57f45c95f20031725f2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a03a5e91de21a7a1ce93f0e949cd5bc6dec722d8b631895b1eb6a94dda84337->leave($__internal_4a03a5e91de21a7a1ce93f0e949cd5bc6dec722d8b631895b1eb6a94dda84337_prof);

        
        $__internal_2c806038dff6a46a91e5f07711fd50a9d18a9903cf57f45c95f20031725f2549->leave($__internal_2c806038dff6a46a91e5f07711fd50a9d18a9903cf57f45c95f20031725f2549_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0df0fae5312a96ca549ca8c6af504ec8889b63055153d7a2538d9e8b132932d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df0fae5312a96ca549ca8c6af504ec8889b63055153d7a2538d9e8b132932d2->enter($__internal_0df0fae5312a96ca549ca8c6af504ec8889b63055153d7a2538d9e8b132932d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b3d28dd82336fb3e27aae09bc48f91cb156f973c401539820f2104a12c6cc699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d28dd82336fb3e27aae09bc48f91cb156f973c401539820f2104a12c6cc699->enter($__internal_b3d28dd82336fb3e27aae09bc48f91cb156f973c401539820f2104a12c6cc699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3d28dd82336fb3e27aae09bc48f91cb156f973c401539820f2104a12c6cc699->leave($__internal_b3d28dd82336fb3e27aae09bc48f91cb156f973c401539820f2104a12c6cc699_prof);

        
        $__internal_0df0fae5312a96ca549ca8c6af504ec8889b63055153d7a2538d9e8b132932d2->leave($__internal_0df0fae5312a96ca549ca8c6af504ec8889b63055153d7a2538d9e8b132932d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_716ca42b5dac6c14e90aa7868e59b1bae1bf713b2959781721d0e68c0c56d8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716ca42b5dac6c14e90aa7868e59b1bae1bf713b2959781721d0e68c0c56d8fe->enter($__internal_716ca42b5dac6c14e90aa7868e59b1bae1bf713b2959781721d0e68c0c56d8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3168c83f0876bc3d6e31e1c0e0b35165e21f5870d170823792658fc1d8951054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3168c83f0876bc3d6e31e1c0e0b35165e21f5870d170823792658fc1d8951054->enter($__internal_3168c83f0876bc3d6e31e1c0e0b35165e21f5870d170823792658fc1d8951054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3168c83f0876bc3d6e31e1c0e0b35165e21f5870d170823792658fc1d8951054->leave($__internal_3168c83f0876bc3d6e31e1c0e0b35165e21f5870d170823792658fc1d8951054_prof);

        
        $__internal_716ca42b5dac6c14e90aa7868e59b1bae1bf713b2959781721d0e68c0c56d8fe->leave($__internal_716ca42b5dac6c14e90aa7868e59b1bae1bf713b2959781721d0e68c0c56d8fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29fd621b500f7beb76048f24ec3532a4a4bb6fd0f578df871c4186859d01194b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fd621b500f7beb76048f24ec3532a4a4bb6fd0f578df871c4186859d01194b->enter($__internal_29fd621b500f7beb76048f24ec3532a4a4bb6fd0f578df871c4186859d01194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de82150a141d1e813fb5b76445ecc99a4a5bb1845b8515c382713bdf8d0a9c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82150a141d1e813fb5b76445ecc99a4a5bb1845b8515c382713bdf8d0a9c8f->enter($__internal_de82150a141d1e813fb5b76445ecc99a4a5bb1845b8515c382713bdf8d0a9c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de82150a141d1e813fb5b76445ecc99a4a5bb1845b8515c382713bdf8d0a9c8f->leave($__internal_de82150a141d1e813fb5b76445ecc99a4a5bb1845b8515c382713bdf8d0a9c8f_prof);

        
        $__internal_29fd621b500f7beb76048f24ec3532a4a4bb6fd0f578df871c4186859d01194b->leave($__internal_29fd621b500f7beb76048f24ec3532a4a4bb6fd0f578df871c4186859d01194b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/leandro/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
