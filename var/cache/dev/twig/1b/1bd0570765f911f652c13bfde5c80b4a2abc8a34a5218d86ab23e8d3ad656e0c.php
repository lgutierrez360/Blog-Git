<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5fab558e3f9e9c362aca377b03fc2b32bedcde39178ddf8cf61fb9e24647f55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33295a159d9374f5877e14a5d6981f70d535b9a758b3925517a1109789a41cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33295a159d9374f5877e14a5d6981f70d535b9a758b3925517a1109789a41cdb->enter($__internal_33295a159d9374f5877e14a5d6981f70d535b9a758b3925517a1109789a41cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_09531ad12d1ab484b2936c6a48c557a8ccff0df7f35dfef7b090a4ff0edaf6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09531ad12d1ab484b2936c6a48c557a8ccff0df7f35dfef7b090a4ff0edaf6dd->enter($__internal_09531ad12d1ab484b2936c6a48c557a8ccff0df7f35dfef7b090a4ff0edaf6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33295a159d9374f5877e14a5d6981f70d535b9a758b3925517a1109789a41cdb->leave($__internal_33295a159d9374f5877e14a5d6981f70d535b9a758b3925517a1109789a41cdb_prof);

        
        $__internal_09531ad12d1ab484b2936c6a48c557a8ccff0df7f35dfef7b090a4ff0edaf6dd->leave($__internal_09531ad12d1ab484b2936c6a48c557a8ccff0df7f35dfef7b090a4ff0edaf6dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8847bebf4b5559a507282cee8c168d276266c0cc86e39e6c8f3212159b074f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8847bebf4b5559a507282cee8c168d276266c0cc86e39e6c8f3212159b074f93->enter($__internal_8847bebf4b5559a507282cee8c168d276266c0cc86e39e6c8f3212159b074f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_29a66ae7b22ed510f86efc8bdc76ddd71b2d5a808b5a39785680bf4079862e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a66ae7b22ed510f86efc8bdc76ddd71b2d5a808b5a39785680bf4079862e55->enter($__internal_29a66ae7b22ed510f86efc8bdc76ddd71b2d5a808b5a39785680bf4079862e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_29a66ae7b22ed510f86efc8bdc76ddd71b2d5a808b5a39785680bf4079862e55->leave($__internal_29a66ae7b22ed510f86efc8bdc76ddd71b2d5a808b5a39785680bf4079862e55_prof);

        
        $__internal_8847bebf4b5559a507282cee8c168d276266c0cc86e39e6c8f3212159b074f93->leave($__internal_8847bebf4b5559a507282cee8c168d276266c0cc86e39e6c8f3212159b074f93_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/leandro/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
