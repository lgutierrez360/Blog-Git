<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_260bc5b3c9d046ef5497a5a514503544920ac7199c7462483e28b93bea02e9cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5564749e6f82a5dba61fb03cb19b57c6b85895c1ad475c0bdbbb06715e46c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5564749e6f82a5dba61fb03cb19b57c6b85895c1ad475c0bdbbb06715e46c34->enter($__internal_d5564749e6f82a5dba61fb03cb19b57c6b85895c1ad475c0bdbbb06715e46c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_10dfa5ec8b0df4a69918954549d18ad3e64cf0241e78285b209e13f9d88e0e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dfa5ec8b0df4a69918954549d18ad3e64cf0241e78285b209e13f9d88e0e10->enter($__internal_10dfa5ec8b0df4a69918954549d18ad3e64cf0241e78285b209e13f9d88e0e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d5564749e6f82a5dba61fb03cb19b57c6b85895c1ad475c0bdbbb06715e46c34->leave($__internal_d5564749e6f82a5dba61fb03cb19b57c6b85895c1ad475c0bdbbb06715e46c34_prof);

        
        $__internal_10dfa5ec8b0df4a69918954549d18ad3e64cf0241e78285b209e13f9d88e0e10->leave($__internal_10dfa5ec8b0df4a69918954549d18ad3e64cf0241e78285b209e13f9d88e0e10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/leandro/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
