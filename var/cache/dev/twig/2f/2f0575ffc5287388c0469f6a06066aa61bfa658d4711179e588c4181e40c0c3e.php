<?php

/* @AppBundle/Resources/views/table/_blocks.html.twig */
class __TwigTemplate_86f8454b5445d3881c5789f04e8ec6e6076a7b1d4a3533d60d8bac1d55e81c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tableHeadMassActionsColumn' => array($this, 'block_tableHeadMassActionsColumn'),
            'tableFilterMassActionsColumn' => array($this, 'block_tableFilterMassActionsColumn'),
            'tableBodyMassActionsColumn' => array($this, 'block_tableBodyMassActionsColumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6712dc43e848e2996b15d4b86271bf3d824c607ce8b6e49a17193ca4c30d6aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6712dc43e848e2996b15d4b86271bf3d824c607ce8b6e49a17193ca4c30d6aef->enter($__internal_6712dc43e848e2996b15d4b86271bf3d824c607ce8b6e49a17193ca4c30d6aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_blocks.html.twig"));

        $__internal_2e181c8557d4eacbc3d5f61c8965672537099ce1719e9f833ea2f611ab09bd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e181c8557d4eacbc3d5f61c8965672537099ce1719e9f833ea2f611ab09bd69->enter($__internal_2e181c8557d4eacbc3d5f61c8965672537099ce1719e9f833ea2f611ab09bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_blocks.html.twig"));

        // line 1
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('tableFilterMassActionsColumn', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
        // line 52
        echo "



";
        
        $__internal_6712dc43e848e2996b15d4b86271bf3d824c607ce8b6e49a17193ca4c30d6aef->leave($__internal_6712dc43e848e2996b15d4b86271bf3d824c607ce8b6e49a17193ca4c30d6aef_prof);

        
        $__internal_2e181c8557d4eacbc3d5f61c8965672537099ce1719e9f833ea2f611ab09bd69->leave($__internal_2e181c8557d4eacbc3d5f61c8965672537099ce1719e9f833ea2f611ab09bd69_prof);

    }

    // line 1
    public function block_tableHeadMassActionsColumn($context, array $blocks = array())
    {
        $__internal_48230ab46ecd136748f82d64336c2a1a87fb581cef253c41f02dd891537c475a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48230ab46ecd136748f82d64336c2a1a87fb581cef253c41f02dd891537c475a->enter($__internal_48230ab46ecd136748f82d64336c2a1a87fb581cef253c41f02dd891537c475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_be312ea1114a600d99bc44912db35a2961c244876a2708c0a5e8ca44894d140d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be312ea1114a600d99bc44912db35a2961c244876a2708c0a5e8ca44894d140d->enter($__internal_be312ea1114a600d99bc44912db35a2961c244876a2708c0a5e8ca44894d140d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 2
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", array())) {
            // line 3
            echo "        <th class=\"mass-action\">

        </th>
    ";
        }
        
        $__internal_be312ea1114a600d99bc44912db35a2961c244876a2708c0a5e8ca44894d140d->leave($__internal_be312ea1114a600d99bc44912db35a2961c244876a2708c0a5e8ca44894d140d_prof);

        
        $__internal_48230ab46ecd136748f82d64336c2a1a87fb581cef253c41f02dd891537c475a->leave($__internal_48230ab46ecd136748f82d64336c2a1a87fb581cef253c41f02dd891537c475a_prof);

    }

    // line 9
    public function block_tableFilterMassActionsColumn($context, array $blocks = array())
    {
        $__internal_6e34da4c3a21fe733be95456288678ed5db11b151b480856815b48353d022ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e34da4c3a21fe733be95456288678ed5db11b151b480856815b48353d022ff8->enter($__internal_6e34da4c3a21fe733be95456288678ed5db11b151b480856815b48353d022ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_371ceacb5f6e0f234ef17b9afe392cc766cd8ae907b02b0327110cc2a0badf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371ceacb5f6e0f234ef17b9afe392cc766cd8ae907b02b0327110cc2a0badf85->enter($__internal_371ceacb5f6e0f234ef17b9afe392cc766cd8ae907b02b0327110cc2a0badf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 10
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", array())) {
            // line 11
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.mass_select")), "html", null, true);
            echo "\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
            echo "_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["massAction"]) {
                // line 21
                echo "                        <li>
                            <a href=\"#\" id=\"kilik_";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
                echo "_btn_mass_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "name", array()), "html", null, true);
                echo "_selected\"
                               data-mass-action=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "action", array()), "html", null, true);
                echo "\"
                               data-name=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "name", array()), "html", null, true);
                echo "\"
                               class=\"btn-border-success checkbox-action\"
                            >
                                <b class=\"success\"><i class=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["massAction"], "class", array()), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["massAction"], "label", array())), "html", null, true);
                echo "</b>
                            </a>
                        </li>
                        ";
                // line 30
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 31
                    echo "                            <li role=\"separator\" class=\"divider\"></li>
                        ";
                }
                // line 33
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['massAction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </ul>
            </div>
        </td>
    ";
        }
        
        $__internal_371ceacb5f6e0f234ef17b9afe392cc766cd8ae907b02b0327110cc2a0badf85->leave($__internal_371ceacb5f6e0f234ef17b9afe392cc766cd8ae907b02b0327110cc2a0badf85_prof);

        
        $__internal_6e34da4c3a21fe733be95456288678ed5db11b151b480856815b48353d022ff8->leave($__internal_6e34da4c3a21fe733be95456288678ed5db11b151b480856815b48353d022ff8_prof);

    }

    // line 40
    public function block_tableBodyMassActionsColumn($context, array $blocks = array())
    {
        $__internal_ce57300a8233b761091c4c21a2fca2413a509e3e2065414573b8355f88ea4e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce57300a8233b761091c4c21a2fca2413a509e3e2065414573b8355f88ea4e43->enter($__internal_ce57300a8233b761091c4c21a2fca2413a509e3e2065414573b8355f88ea4e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_85f5d46203832405a45ee47a6f9284cb973935f72510c834603e54dbc836a43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f5d46203832405a45ee47a6f9284cb973935f72510c834603e54dbc836a43b->enter($__internal_85f5d46203832405a45ee47a6f9284cb973935f72510c834603e54dbc836a43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 41
        echo "    ";
        if ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "massActions", array())) {
            // line 42
            echo "        <td class=\"mass-action\" data-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("kiliktable.select")), "html", null, true);
            echo "\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", array()), "id", array()), "html", null, true);
            echo "\" name=\"kilik_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
            echo "_selected[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", array()), "id", array()), "html", null, true);
            echo "\"/>
                    <label for=\"checkbox-";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["row"] ?? $this->getContext($context, "row")), "object", array()), "id", array()), "html", null, true);
            echo "\"></label>
                </span>
            </div>
        </td>
    ";
        }
        
        $__internal_85f5d46203832405a45ee47a6f9284cb973935f72510c834603e54dbc836a43b->leave($__internal_85f5d46203832405a45ee47a6f9284cb973935f72510c834603e54dbc836a43b_prof);

        
        $__internal_ce57300a8233b761091c4c21a2fca2413a509e3e2065414573b8355f88ea4e43->leave($__internal_ce57300a8233b761091c4c21a2fca2413a509e3e2065414573b8355f88ea4e43_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 46,  205 => 45,  198 => 42,  195 => 41,  186 => 40,  172 => 34,  158 => 33,  154 => 31,  152 => 30,  144 => 27,  138 => 24,  134 => 23,  128 => 22,  125 => 21,  108 => 20,  99 => 14,  92 => 11,  89 => 10,  80 => 9,  66 => 3,  63 => 2,  54 => 1,  40 => 52,  38 => 40,  35 => 39,  33 => 9,  30 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tableHeadMassActionsColumn %}
    {% if table.massActions %}
        <th class=\"mass-action\">

        </th>
    {% endif %}
{% endblock tableHeadMassActionsColumn %}

{% block tableFilterMassActionsColumn %}
    {% if table.massActions %}
        <td class=\"mass-action\" data-label=\"{{ 'kiliktable.mass_select'|trans|capitalize }}\">
            <div class=\"input-group btn-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"kilik_{{ table.id }}_mass_check\"/>
                </span>
                <button type=\"button\" class=\"btn dropdown-toggle table-action-hide\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    {% for massAction in table.massActions %}
                        <li>
                            <a href=\"#\" id=\"kilik_{{ table.id }}_btn_mass_{{ massAction.name }}_selected\"
                               data-mass-action=\"{{ massAction.action }}\"
                               data-name=\"{{ massAction.name }}\"
                               class=\"btn-border-success checkbox-action\"
                            >
                                <b class=\"success\"><i class=\"{{ massAction.class }}\"></i> {{ massAction.label|capitalize }}</b>
                            </a>
                        </li>
                        {% if loop.last == false %}
                            <li role=\"separator\" class=\"divider\"></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </td>
    {% endif %}
{% endblock tableFilterMassActionsColumn %}

{% block tableBodyMassActionsColumn %}
    {% if table.massActions %}
        <td class=\"mass-action\" data-label=\"{{ 'kiliktable.select'|trans|capitalize }}\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"checkbox-{{ row.object.id }}\" name=\"kilik_{{ table.id }}_selected[]\" value=\"{{ row.object.id }}\"/>
                    <label for=\"checkbox-{{ row.object.id }}\"></label>
                </span>
            </div>
        </td>
    {% endif %}
{% endblock tableBodyMassActionsColumn %}




", "@AppBundle/Resources/views/table/_blocks.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table/_blocks.html.twig");
    }
}
