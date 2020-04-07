<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b0718acc30ca6197bc8c384956f818e1249d09e7c1b75592639dbed99f0487d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09baf7221ebfafc99db3b3fff4f7484899e82ba33466c690370b383919a82661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09baf7221ebfafc99db3b3fff4f7484899e82ba33466c690370b383919a82661->enter($__internal_09baf7221ebfafc99db3b3fff4f7484899e82ba33466c690370b383919a82661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_34167363b6bf20c69c5cf65bdcf46c532fc50dbbc876d37994084273af70b579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34167363b6bf20c69c5cf65bdcf46c532fc50dbbc876d37994084273af70b579->enter($__internal_34167363b6bf20c69c5cf65bdcf46c532fc50dbbc876d37994084273af70b579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09baf7221ebfafc99db3b3fff4f7484899e82ba33466c690370b383919a82661->leave($__internal_09baf7221ebfafc99db3b3fff4f7484899e82ba33466c690370b383919a82661_prof);

        
        $__internal_34167363b6bf20c69c5cf65bdcf46c532fc50dbbc876d37994084273af70b579->leave($__internal_34167363b6bf20c69c5cf65bdcf46c532fc50dbbc876d37994084273af70b579_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4327fdd68f5631db484a159ad8432f9917ebd6130759f59147cd06504b7d989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4327fdd68f5631db484a159ad8432f9917ebd6130759f59147cd06504b7d989->enter($__internal_d4327fdd68f5631db484a159ad8432f9917ebd6130759f59147cd06504b7d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1f1c5bc90085c94b8431b01be574564411b43ccd3f9ff6d7c2a7b7fcff07ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f1c5bc90085c94b8431b01be574564411b43ccd3f9ff6d7c2a7b7fcff07ce8->enter($__internal_d1f1c5bc90085c94b8431b01be574564411b43ccd3f9ff6d7c2a7b7fcff07ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d1f1c5bc90085c94b8431b01be574564411b43ccd3f9ff6d7c2a7b7fcff07ce8->leave($__internal_d1f1c5bc90085c94b8431b01be574564411b43ccd3f9ff6d7c2a7b7fcff07ce8_prof);

        
        $__internal_d4327fdd68f5631db484a159ad8432f9917ebd6130759f59147cd06504b7d989->leave($__internal_d4327fdd68f5631db484a159ad8432f9917ebd6130759f59147cd06504b7d989_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6c27ee2fdf5bd740ca17e102debbb5ff143f55e08eb67ee3075d7f2009f4ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c27ee2fdf5bd740ca17e102debbb5ff143f55e08eb67ee3075d7f2009f4ec3->enter($__internal_e6c27ee2fdf5bd740ca17e102debbb5ff143f55e08eb67ee3075d7f2009f4ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cd9318f6cd15014926ac870df523cc557286bff95fdf711912cf3119ed8598f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd9318f6cd15014926ac870df523cc557286bff95fdf711912cf3119ed8598f->enter($__internal_3cd9318f6cd15014926ac870df523cc557286bff95fdf711912cf3119ed8598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3cd9318f6cd15014926ac870df523cc557286bff95fdf711912cf3119ed8598f->leave($__internal_3cd9318f6cd15014926ac870df523cc557286bff95fdf711912cf3119ed8598f_prof);

        
        $__internal_e6c27ee2fdf5bd740ca17e102debbb5ff143f55e08eb67ee3075d7f2009f4ec3->leave($__internal_e6c27ee2fdf5bd740ca17e102debbb5ff143f55e08eb67ee3075d7f2009f4ec3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_33d2d476d1c2a999038b99e4dc9c7894b03a097618e8ca3d4f54259d96a71f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d2d476d1c2a999038b99e4dc9c7894b03a097618e8ca3d4f54259d96a71f7d->enter($__internal_33d2d476d1c2a999038b99e4dc9c7894b03a097618e8ca3d4f54259d96a71f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3fa93bde70bd408a7a25dd20988882631788c02e85a7da51d0743ad6bab7503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fa93bde70bd408a7a25dd20988882631788c02e85a7da51d0743ad6bab7503->enter($__internal_a3fa93bde70bd408a7a25dd20988882631788c02e85a7da51d0743ad6bab7503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a3fa93bde70bd408a7a25dd20988882631788c02e85a7da51d0743ad6bab7503->leave($__internal_a3fa93bde70bd408a7a25dd20988882631788c02e85a7da51d0743ad6bab7503_prof);

        
        $__internal_33d2d476d1c2a999038b99e4dc9c7894b03a097618e8ca3d4f54259d96a71f7d->leave($__internal_33d2d476d1c2a999038b99e4dc9c7894b03a097618e8ca3d4f54259d96a71f7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/leandro/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
