<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f19711f0f065e0c6e65d270aa02e6c33745c1da7f4bd5372cd67a8947c235e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c1a2cb103aa641d27b1a5f15e2549fea5dfdf376c39ad8030055967d35946bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a2cb103aa641d27b1a5f15e2549fea5dfdf376c39ad8030055967d35946bd2->enter($__internal_c1a2cb103aa641d27b1a5f15e2549fea5dfdf376c39ad8030055967d35946bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0cf151dc294b424a62f998fda49c8ba8098ba7ec86407f9ef3470a68c69c3b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf151dc294b424a62f998fda49c8ba8098ba7ec86407f9ef3470a68c69c3b60->enter($__internal_0cf151dc294b424a62f998fda49c8ba8098ba7ec86407f9ef3470a68c69c3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a2cb103aa641d27b1a5f15e2549fea5dfdf376c39ad8030055967d35946bd2->leave($__internal_c1a2cb103aa641d27b1a5f15e2549fea5dfdf376c39ad8030055967d35946bd2_prof);

        
        $__internal_0cf151dc294b424a62f998fda49c8ba8098ba7ec86407f9ef3470a68c69c3b60->leave($__internal_0cf151dc294b424a62f998fda49c8ba8098ba7ec86407f9ef3470a68c69c3b60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c6f4e1dfa7e5df47c2aa6ff7a1e40f62d8ffb3605f9bf7bae231c37d45155ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6f4e1dfa7e5df47c2aa6ff7a1e40f62d8ffb3605f9bf7bae231c37d45155ac->enter($__internal_8c6f4e1dfa7e5df47c2aa6ff7a1e40f62d8ffb3605f9bf7bae231c37d45155ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce67e50ac98939d60b941871b2bb7c8ec8d618ceb082ca8124e6a06c0f34b60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce67e50ac98939d60b941871b2bb7c8ec8d618ceb082ca8124e6a06c0f34b60c->enter($__internal_ce67e50ac98939d60b941871b2bb7c8ec8d618ceb082ca8124e6a06c0f34b60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ce67e50ac98939d60b941871b2bb7c8ec8d618ceb082ca8124e6a06c0f34b60c->leave($__internal_ce67e50ac98939d60b941871b2bb7c8ec8d618ceb082ca8124e6a06c0f34b60c_prof);

        
        $__internal_8c6f4e1dfa7e5df47c2aa6ff7a1e40f62d8ffb3605f9bf7bae231c37d45155ac->leave($__internal_8c6f4e1dfa7e5df47c2aa6ff7a1e40f62d8ffb3605f9bf7bae231c37d45155ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf257ca186162156efd7db769fe6cfdd0086e0ccf8221efa87e70f82fb9f63f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf257ca186162156efd7db769fe6cfdd0086e0ccf8221efa87e70f82fb9f63f4->enter($__internal_bf257ca186162156efd7db769fe6cfdd0086e0ccf8221efa87e70f82fb9f63f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1a5b94d1b933563b4380526b5b98e09a6cf4ef567b42aa101d54a65d39afca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a5b94d1b933563b4380526b5b98e09a6cf4ef567b42aa101d54a65d39afca9->enter($__internal_f1a5b94d1b933563b4380526b5b98e09a6cf4ef567b42aa101d54a65d39afca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f1a5b94d1b933563b4380526b5b98e09a6cf4ef567b42aa101d54a65d39afca9->leave($__internal_f1a5b94d1b933563b4380526b5b98e09a6cf4ef567b42aa101d54a65d39afca9_prof);

        
        $__internal_bf257ca186162156efd7db769fe6cfdd0086e0ccf8221efa87e70f82fb9f63f4->leave($__internal_bf257ca186162156efd7db769fe6cfdd0086e0ccf8221efa87e70f82fb9f63f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c3011b34af37a2f883b96390302a0e013e3aff363916ac9e6a09fe3877c5bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3011b34af37a2f883b96390302a0e013e3aff363916ac9e6a09fe3877c5bcb->enter($__internal_9c3011b34af37a2f883b96390302a0e013e3aff363916ac9e6a09fe3877c5bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94d0bfd38561f57fe1c06a7f7758e6f2a0e1bbed7eb3dc946cc076204d29cda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d0bfd38561f57fe1c06a7f7758e6f2a0e1bbed7eb3dc946cc076204d29cda9->enter($__internal_94d0bfd38561f57fe1c06a7f7758e6f2a0e1bbed7eb3dc946cc076204d29cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_94d0bfd38561f57fe1c06a7f7758e6f2a0e1bbed7eb3dc946cc076204d29cda9->leave($__internal_94d0bfd38561f57fe1c06a7f7758e6f2a0e1bbed7eb3dc946cc076204d29cda9_prof);

        
        $__internal_9c3011b34af37a2f883b96390302a0e013e3aff363916ac9e6a09fe3877c5bcb->leave($__internal_9c3011b34af37a2f883b96390302a0e013e3aff363916ac9e6a09fe3877c5bcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/leandro/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
