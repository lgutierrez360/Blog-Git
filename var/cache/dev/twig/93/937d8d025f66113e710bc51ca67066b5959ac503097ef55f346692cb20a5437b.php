<?php

/* @AppBundle/Resources/views/table/_defaultTable.html.twig */
class __TwigTemplate_5713665a1e2ba7a39e09225c4dadb1a6e0ae293408dcc08847de05d97d55d153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@AppBundle/Resources/views/table/_blocks.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@AppBundle/Resources/views/table/_blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["tableHeadMassActionsColumn"])) {
            throw new Twig_Error_Runtime(sprintf('Block "tableHeadMassActionsColumn" is not defined in trait "@AppBundle/Resources/views/table/_blocks.html.twig".'));
        }

        $_trait_0_blocks["parent_tableHeadMassActionsColumn"] = $_trait_0_blocks["tableHeadMassActionsColumn"]; unset($_trait_0_blocks["tableHeadMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableFilterMassActionsColumn"])) {
            throw new Twig_Error_Runtime(sprintf('Block "tableFilterMassActionsColumn" is not defined in trait "@AppBundle/Resources/views/table/_blocks.html.twig".'));
        }

        $_trait_0_blocks["parent_tableFilterMassActionsColumn"] = $_trait_0_blocks["tableFilterMassActionsColumn"]; unset($_trait_0_blocks["tableFilterMassActionsColumn"]);

        if (!isset($_trait_0_blocks["tableBodyMassActionsColumn"])) {
            throw new Twig_Error_Runtime(sprintf('Block "tableBodyMassActionsColumn" is not defined in trait "@AppBundle/Resources/views/table/_blocks.html.twig".'));
        }

        $_trait_0_blocks["parent_tableBodyMassActionsColumn"] = $_trait_0_blocks["tableBodyMassActionsColumn"]; unset($_trait_0_blocks["tableBodyMassActionsColumn"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'tableBeforePanel' => array($this, 'block_tableBeforePanel'),
                'tablePagination' => array($this, 'block_tablePagination'),
                'tablePaginationAjax' => array($this, 'block_tablePaginationAjax'),
                'tableTitle' => array($this, 'block_tableTitle'),
                'tableHead' => array($this, 'block_tableHead'),
                'tableHeadMassActionsColumn' => array($this, 'block_tableHeadMassActionsColumn'),
                'tableHeadStdColumns' => array($this, 'block_tableHeadStdColumns'),
                'tableFilterMassActionsColumn' => array($this, 'block_tableFilterMassActionsColumn'),
                'tableHeadStdFilters' => array($this, 'block_tableHeadStdFilters'),
                'tableBody' => array($this, 'block_tableBody'),
                'tableBodyMassActionsColumn' => array($this, 'block_tableBodyMassActionsColumn'),
                'tableBodyStdColumns' => array($this, 'block_tableBodyStdColumns'),
                'tableStats' => array($this, 'block_tableStats'),
                'tableStatsAjax' => array($this, 'block_tableStatsAjax'),
                'tableAfterPanel' => array($this, 'block_tableAfterPanel'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69051722ccfbfb90f29e421028a640c8381c3326dc861c187fcdc6289b5a276b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69051722ccfbfb90f29e421028a640c8381c3326dc861c187fcdc6289b5a276b->enter($__internal_69051722ccfbfb90f29e421028a640c8381c3326dc861c187fcdc6289b5a276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_defaultTable.html.twig"));

        $__internal_6e69aba835505607057df50218e621eed13a257d383708dcaceb843d86b5a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e69aba835505607057df50218e621eed13a257d383708dcaceb843d86b5a4c9->enter($__internal_6e69aba835505607057df50218e621eed13a257d383708dcaceb843d86b5a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table/_defaultTable.html.twig"));

        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", array()), 'form_start');
        echo "
";
        // line 9
        $this->displayBlock('tableBeforePanel', $context, $blocks);
        // line 11
        echo "<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">
            ";
        // line 14
        $this->displayBlock('tablePagination', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('tableTitle', $context, $blocks);
        // line 24
        echo "        </div>
    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "\">
            <thead>
                ";
        // line 29
        $this->displayBlock('tableHead', $context, $blocks);
        // line 53
        echo "            </thead>
            <tbody id=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "bodyId", array()), "html", null, true);
        echo "\">
                ";
        // line 55
        $this->displayBlock('tableBody', $context, $blocks);
        // line 91
        echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
        // line 95
        $this->displayBlock('tableStats', $context, $blocks);
        // line 102
        echo "    </div>
</div>
";
        // line 104
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", array()), 'form_end');
        echo "
";
        
        $__internal_69051722ccfbfb90f29e421028a640c8381c3326dc861c187fcdc6289b5a276b->leave($__internal_69051722ccfbfb90f29e421028a640c8381c3326dc861c187fcdc6289b5a276b_prof);

        
        $__internal_6e69aba835505607057df50218e621eed13a257d383708dcaceb843d86b5a4c9->leave($__internal_6e69aba835505607057df50218e621eed13a257d383708dcaceb843d86b5a4c9_prof);

    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = array())
    {
        $__internal_7175eab5971edc4de5dc3c833d6384e2fdab69235238ca51c78514ea6626e397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7175eab5971edc4de5dc3c833d6384e2fdab69235238ca51c78514ea6626e397->enter($__internal_7175eab5971edc4de5dc3c833d6384e2fdab69235238ca51c78514ea6626e397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        $__internal_e14135b4eda43a7ff55ab9c4f72fc6b1cd059c225f9d850c3a6ab894502e86bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14135b4eda43a7ff55ab9c4f72fc6b1cd059c225f9d850c3a6ab894502e86bf->enter($__internal_e14135b4eda43a7ff55ab9c4f72fc6b1cd059c225f9d850c3a6ab894502e86bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        
        $__internal_e14135b4eda43a7ff55ab9c4f72fc6b1cd059c225f9d850c3a6ab894502e86bf->leave($__internal_e14135b4eda43a7ff55ab9c4f72fc6b1cd059c225f9d850c3a6ab894502e86bf_prof);

        
        $__internal_7175eab5971edc4de5dc3c833d6384e2fdab69235238ca51c78514ea6626e397->leave($__internal_7175eab5971edc4de5dc3c833d6384e2fdab69235238ca51c78514ea6626e397_prof);

    }

    // line 14
    public function block_tablePagination($context, array $blocks = array())
    {
        $__internal_52b74d53054c66c1b84380700adafae0b993b6b7bed41b4a55eeb5280d1c48ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b74d53054c66c1b84380700adafae0b993b6b7bed41b4a55eeb5280d1c48ec->enter($__internal_52b74d53054c66c1b84380700adafae0b993b6b7bed41b4a55eeb5280d1c48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

        $__internal_d0ce31f2db75685c1ac01983c176d9db6b21244cc0a51396ab34281cfdc7ddba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ce31f2db75685c1ac01983c176d9db6b21244cc0a51396ab34281cfdc7ddba->enter($__internal_d0ce31f2db75685c1ac01983c176d9db6b21244cc0a51396ab34281cfdc7ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

        // line 15
        echo "                <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "_pagination\" class=\"btn-group\">
                    ";
        // line 16
        $this->displayBlock('tablePaginationAjax', $context, $blocks);
        // line 19
        echo "                </div>
            ";
        
        $__internal_d0ce31f2db75685c1ac01983c176d9db6b21244cc0a51396ab34281cfdc7ddba->leave($__internal_d0ce31f2db75685c1ac01983c176d9db6b21244cc0a51396ab34281cfdc7ddba_prof);

        
        $__internal_52b74d53054c66c1b84380700adafae0b993b6b7bed41b4a55eeb5280d1c48ec->leave($__internal_52b74d53054c66c1b84380700adafae0b993b6b7bed41b4a55eeb5280d1c48ec_prof);

    }

    // line 16
    public function block_tablePaginationAjax($context, array $blocks = array())
    {
        $__internal_09e02e88622425f7812ef6b49a03453b1e9813e545460661c5ac49c5bb42d171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e02e88622425f7812ef6b49a03453b1e9813e545460661c5ac49c5bb42d171->enter($__internal_09e02e88622425f7812ef6b49a03453b1e9813e545460661c5ac49c5bb42d171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        $__internal_d6d86c75d043dd0cf31ff8f76bcfb151ce91874d44056dceb15fd037e4b1cbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d86c75d043dd0cf31ff8f76bcfb151ce91874d44056dceb15fd037e4b1cbb4->enter($__internal_d6d86c75d043dd0cf31ff8f76bcfb151ce91874d44056dceb15fd037e4b1cbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        // line 17
        echo "                        ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
        
        $__internal_d6d86c75d043dd0cf31ff8f76bcfb151ce91874d44056dceb15fd037e4b1cbb4->leave($__internal_d6d86c75d043dd0cf31ff8f76bcfb151ce91874d44056dceb15fd037e4b1cbb4_prof);

        
        $__internal_09e02e88622425f7812ef6b49a03453b1e9813e545460661c5ac49c5bb42d171->leave($__internal_09e02e88622425f7812ef6b49a03453b1e9813e545460661c5ac49c5bb42d171_prof);

    }

    // line 21
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_e0f7480d10015fd05e3d75d9253aaa8f7dffb0b4974f31582f1a531322200dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f7480d10015fd05e3d75d9253aaa8f7dffb0b4974f31582f1a531322200dc2->enter($__internal_e0f7480d10015fd05e3d75d9253aaa8f7dffb0b4974f31582f1a531322200dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_132d6272e7e0722ed6d6236f57ef18714f3551313e8c2d049445a865cea63934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132d6272e7e0722ed6d6236f57ef18714f3551313e8c2d049445a865cea63934->enter($__internal_132d6272e7e0722ed6d6236f57ef18714f3551313e8c2d049445a865cea63934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 22
        echo "                Default title
            ";
        
        $__internal_132d6272e7e0722ed6d6236f57ef18714f3551313e8c2d049445a865cea63934->leave($__internal_132d6272e7e0722ed6d6236f57ef18714f3551313e8c2d049445a865cea63934_prof);

        
        $__internal_e0f7480d10015fd05e3d75d9253aaa8f7dffb0b4974f31582f1a531322200dc2->leave($__internal_e0f7480d10015fd05e3d75d9253aaa8f7dffb0b4974f31582f1a531322200dc2_prof);

    }

    // line 29
    public function block_tableHead($context, array $blocks = array())
    {
        $__internal_c47e2db0027ce9a2c45359c1dbd030904160df4b0521b71334861ce8947eb4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47e2db0027ce9a2c45359c1dbd030904160df4b0521b71334861ce8947eb4ad->enter($__internal_c47e2db0027ce9a2c45359c1dbd030904160df4b0521b71334861ce8947eb4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

        $__internal_1b01b7c539d3d9f24e93fa1a2f7dacf2651efe7194fe751238d2c9024965e7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b01b7c539d3d9f24e93fa1a2f7dacf2651efe7194fe751238d2c9024965e7f9->enter($__internal_1b01b7c539d3d9f24e93fa1a2f7dacf2651efe7194fe751238d2c9024965e7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

        // line 30
        echo "                    <tr>
                        ";
        // line 31
        $this->displayBlock('tableHeadMassActionsColumn', $context, $blocks);
        // line 34
        echo "                        ";
        $this->displayBlock('tableHeadStdColumns', $context, $blocks);
        // line 39
        echo "                    </tr>
                    ";
        // line 40
        if ((twig_length_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", array())) > 0)) {
            // line 41
            echo "                        <tr>
                            ";
            // line 42
            $this->displayBlock('tableFilterMassActionsColumn', $context, $blocks);
            // line 45
            echo "                            ";
            $this->displayBlock('tableHeadStdFilters', $context, $blocks);
            // line 50
            echo "                        </tr>
                    ";
        }
        // line 52
        echo "                ";
        
        $__internal_1b01b7c539d3d9f24e93fa1a2f7dacf2651efe7194fe751238d2c9024965e7f9->leave($__internal_1b01b7c539d3d9f24e93fa1a2f7dacf2651efe7194fe751238d2c9024965e7f9_prof);

        
        $__internal_c47e2db0027ce9a2c45359c1dbd030904160df4b0521b71334861ce8947eb4ad->leave($__internal_c47e2db0027ce9a2c45359c1dbd030904160df4b0521b71334861ce8947eb4ad_prof);

    }

    // line 31
    public function block_tableHeadMassActionsColumn($context, array $blocks = array())
    {
        $__internal_2b62a768c2cfe7aaa637c9e8628ae170444f05f15176922938a86b43d43d2731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b62a768c2cfe7aaa637c9e8628ae170444f05f15176922938a86b43d43d2731->enter($__internal_2b62a768c2cfe7aaa637c9e8628ae170444f05f15176922938a86b43d43d2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_7ca5467266a5820dcc1c027e955bab0bbc2867e4ab070f11da1ed5231e296ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca5467266a5820dcc1c027e955bab0bbc2867e4ab070f11da1ed5231e296ef5->enter($__internal_7ca5467266a5820dcc1c027e955bab0bbc2867e4ab070f11da1ed5231e296ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 32
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
        
        $__internal_7ca5467266a5820dcc1c027e955bab0bbc2867e4ab070f11da1ed5231e296ef5->leave($__internal_7ca5467266a5820dcc1c027e955bab0bbc2867e4ab070f11da1ed5231e296ef5_prof);

        
        $__internal_2b62a768c2cfe7aaa637c9e8628ae170444f05f15176922938a86b43d43d2731->leave($__internal_2b62a768c2cfe7aaa637c9e8628ae170444f05f15176922938a86b43d43d2731_prof);

    }

    // line 34
    public function block_tableHeadStdColumns($context, array $blocks = array())
    {
        $__internal_2ec816ae4783296dd56645a8601dbc5ff979d18f42b4e592401eed837300a9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec816ae4783296dd56645a8601dbc5ff979d18f42b4e592401eed837300a9fa->enter($__internal_2ec816ae4783296dd56645a8601dbc5ff979d18f42b4e592401eed837300a9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_d88a732de6a2f7a6831e1983577703807889f16a5e4263961a9b23442a740b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a732de6a2f7a6831e1983577703807889f16a5e4263961a9b23442a740b3f->enter($__internal_d88a732de6a2f7a6831e1983577703807889f16a5e4263961a9b23442a740b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        // line 35
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 36
            echo "                                ";
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnName.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 36)->display($context);
            // line 37
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        ";
        
        $__internal_d88a732de6a2f7a6831e1983577703807889f16a5e4263961a9b23442a740b3f->leave($__internal_d88a732de6a2f7a6831e1983577703807889f16a5e4263961a9b23442a740b3f_prof);

        
        $__internal_2ec816ae4783296dd56645a8601dbc5ff979d18f42b4e592401eed837300a9fa->leave($__internal_2ec816ae4783296dd56645a8601dbc5ff979d18f42b4e592401eed837300a9fa_prof);

    }

    // line 42
    public function block_tableFilterMassActionsColumn($context, array $blocks = array())
    {
        $__internal_574bae75f0001600ca859c306f0c7186b158dea2f941f3f543f4590dcabc04f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574bae75f0001600ca859c306f0c7186b158dea2f941f3f543f4590dcabc04f1->enter($__internal_574bae75f0001600ca859c306f0c7186b158dea2f941f3f543f4590dcabc04f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_687ca10b84382f66f6fff167108a64596b4d33fff18b41502ff4c82f41f7385a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687ca10b84382f66f6fff167108a64596b4d33fff18b41502ff4c82f41f7385a->enter($__internal_687ca10b84382f66f6fff167108a64596b4d33fff18b41502ff4c82f41f7385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 43
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
        
        $__internal_687ca10b84382f66f6fff167108a64596b4d33fff18b41502ff4c82f41f7385a->leave($__internal_687ca10b84382f66f6fff167108a64596b4d33fff18b41502ff4c82f41f7385a_prof);

        
        $__internal_574bae75f0001600ca859c306f0c7186b158dea2f941f3f543f4590dcabc04f1->leave($__internal_574bae75f0001600ca859c306f0c7186b158dea2f941f3f543f4590dcabc04f1_prof);

    }

    // line 45
    public function block_tableHeadStdFilters($context, array $blocks = array())
    {
        $__internal_93c4e747362f9b28db068de7f46053a80705a34fc47c43186f428c948fbb57d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c4e747362f9b28db068de7f46053a80705a34fc47c43186f428c948fbb57d9->enter($__internal_93c4e747362f9b28db068de7f46053a80705a34fc47c43186f428c948fbb57d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_88dc0e1ca76de1b7240273674d95003196af5c56f28604ff97ff9b3d45585a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dc0e1ca76de1b7240273674d95003196af5c56f28604ff97ff9b3d45585a33->enter($__internal_88dc0e1ca76de1b7240273674d95003196af5c56f28604ff97ff9b3d45585a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        // line 46
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 47
            echo "                                    ";
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnFilter.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 47)->display($context);
            // line 48
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            ";
        
        $__internal_88dc0e1ca76de1b7240273674d95003196af5c56f28604ff97ff9b3d45585a33->leave($__internal_88dc0e1ca76de1b7240273674d95003196af5c56f28604ff97ff9b3d45585a33_prof);

        
        $__internal_93c4e747362f9b28db068de7f46053a80705a34fc47c43186f428c948fbb57d9->leave($__internal_93c4e747362f9b28db068de7f46053a80705a34fc47c43186f428c948fbb57d9_prof);

    }

    // line 55
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_8255c5b695b0323569a191c3bfc3e37f58e2e5a8e0b92b818648ecb51d018408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8255c5b695b0323569a191c3bfc3e37f58e2e5a8e0b92b818648ecb51d018408->enter($__internal_8255c5b695b0323569a191c3bfc3e37f58e2e5a8e0b92b818648ecb51d018408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        $__internal_ba698fc1f4cd2901aec688ba097eaa0e7cf1d1cfb9313196eebd7c7e4f8b1715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba698fc1f4cd2901aec688ba097eaa0e7cf1d1cfb9313196eebd7c7e4f8b1715->enter($__internal_ba698fc1f4cd2901aec688ba097eaa0e7cf1d1cfb9313196eebd7c7e4f8b1715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        // line 56
        echo "
                    ";
        // line 57
        if (array_key_exists("tableRenderBody", $context)) {
            // line 58
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? $this->getContext($context, "rows")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 59
                echo "                            <tr>
                                <!--  path(profile,{id:row.object.id})  -->
                                <td>
                                    <!--  View Post  -->
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailUser", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar User\"></i>
                                    </a>
                                    ";
                // line 66
                if (($this->getAttribute($this->getAttribute($context["row"], "object", array()), "active", array()) == "SI")) {
                    // line 67
                    echo "                                        <!--  Desactivar User -->
                                        <a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estatusUser", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                    echo "\">
                                            <i class=\"glyphicon glyphicon-hand-down\" title=\"Desactivar User\"></i>
                                        </a>                                    
                                    ";
                } else {
                    // line 72
                    echo "                                        <!--  Active User -->
                                        <a  href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estatusUser", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                    echo "\">
                                            <i class=\"glyphicon glyphicon-hand-up\" title=\"Activar User\"></i>
                                        </a>
                                    ";
                }
                // line 76
                echo "                                    
                                </td>

                                ";
                // line 79
                $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
                // line 82
                echo "                                ";
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 87
                echo "                            </tr>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    ";
        }
        echo "                        
                ";
        
        $__internal_ba698fc1f4cd2901aec688ba097eaa0e7cf1d1cfb9313196eebd7c7e4f8b1715->leave($__internal_ba698fc1f4cd2901aec688ba097eaa0e7cf1d1cfb9313196eebd7c7e4f8b1715_prof);

        
        $__internal_8255c5b695b0323569a191c3bfc3e37f58e2e5a8e0b92b818648ecb51d018408->leave($__internal_8255c5b695b0323569a191c3bfc3e37f58e2e5a8e0b92b818648ecb51d018408_prof);

    }

    // line 79
    public function block_tableBodyMassActionsColumn($context, array $blocks = array())
    {
        $__internal_374968ceb414ec9b188d3b45ed9d3980d35c4bc6a3e53a334fd3c306cce78dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374968ceb414ec9b188d3b45ed9d3980d35c4bc6a3e53a334fd3c306cce78dbe->enter($__internal_374968ceb414ec9b188d3b45ed9d3980d35c4bc6a3e53a334fd3c306cce78dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_9823070a70dfa9c75ba839ce2e0dbb56b0de33103ffcf62db75985b59b86cb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9823070a70dfa9c75ba839ce2e0dbb56b0de33103ffcf62db75985b59b86cb51->enter($__internal_9823070a70dfa9c75ba839ce2e0dbb56b0de33103ffcf62db75985b59b86cb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 80
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
        
        $__internal_9823070a70dfa9c75ba839ce2e0dbb56b0de33103ffcf62db75985b59b86cb51->leave($__internal_9823070a70dfa9c75ba839ce2e0dbb56b0de33103ffcf62db75985b59b86cb51_prof);

        
        $__internal_374968ceb414ec9b188d3b45ed9d3980d35c4bc6a3e53a334fd3c306cce78dbe->leave($__internal_374968ceb414ec9b188d3b45ed9d3980d35c4bc6a3e53a334fd3c306cce78dbe_prof);

    }

    // line 82
    public function block_tableBodyStdColumns($context, array $blocks = array())
    {
        $__internal_942ac5632d53bde3075e6b02966d1e58bd2850c92066384c39f1b86b333f7156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942ac5632d53bde3075e6b02966d1e58bd2850c92066384c39f1b86b333f7156->enter($__internal_942ac5632d53bde3075e6b02966d1e58bd2850c92066384c39f1b86b333f7156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_a25054349b0811322019c5e447c7e6f4849429a0b4ff19229bb31db080995ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25054349b0811322019c5e447c7e6f4849429a0b4ff19229bb31db080995ffb->enter($__internal_a25054349b0811322019c5e447c7e6f4849429a0b4ff19229bb31db080995ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 83
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 84
            echo "                                        ";
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnCell.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 84)->display($context);
            // line 85
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                ";
        
        $__internal_a25054349b0811322019c5e447c7e6f4849429a0b4ff19229bb31db080995ffb->leave($__internal_a25054349b0811322019c5e447c7e6f4849429a0b4ff19229bb31db080995ffb_prof);

        
        $__internal_942ac5632d53bde3075e6b02966d1e58bd2850c92066384c39f1b86b333f7156->leave($__internal_942ac5632d53bde3075e6b02966d1e58bd2850c92066384c39f1b86b333f7156_prof);

    }

    // line 95
    public function block_tableStats($context, array $blocks = array())
    {
        $__internal_627508960b6c38e3a3f99e06ffaa3e4f45cc41cf46e88e0de3c494822b24ffa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627508960b6c38e3a3f99e06ffaa3e4f45cc41cf46e88e0de3c494822b24ffa1->enter($__internal_627508960b6c38e3a3f99e06ffaa3e4f45cc41cf46e88e0de3c494822b24ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        $__internal_887f86d12f2c971e13575fc1c4dd9e978f6d5320b96fe1a1cf3d782ed9017228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887f86d12f2c971e13575fc1c4dd9e978f6d5320b96fe1a1cf3d782ed9017228->enter($__internal_887f86d12f2c971e13575fc1c4dd9e978f6d5320b96fe1a1cf3d782ed9017228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        // line 96
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "_stats\">
                ";
        // line 97
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 100
        echo "            </div>
        ";
        
        $__internal_887f86d12f2c971e13575fc1c4dd9e978f6d5320b96fe1a1cf3d782ed9017228->leave($__internal_887f86d12f2c971e13575fc1c4dd9e978f6d5320b96fe1a1cf3d782ed9017228_prof);

        
        $__internal_627508960b6c38e3a3f99e06ffaa3e4f45cc41cf46e88e0de3c494822b24ffa1->leave($__internal_627508960b6c38e3a3f99e06ffaa3e4f45cc41cf46e88e0de3c494822b24ffa1_prof);

    }

    // line 97
    public function block_tableStatsAjax($context, array $blocks = array())
    {
        $__internal_0b0e4b67989a9913723adcde721ab8f2fe8beccee4b38f288d8d581b2218dc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0e4b67989a9913723adcde721ab8f2fe8beccee4b38f288d8d581b2218dc3c->enter($__internal_0b0e4b67989a9913723adcde721ab8f2fe8beccee4b38f288d8d581b2218dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        $__internal_da205b6684e52501edb604ac70ba3787e45a53b49454cbc754cd008dc6f8b6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da205b6684e52501edb604ac70ba3787e45a53b49454cbc754cd008dc6f8b6c1->enter($__internal_da205b6684e52501edb604ac70ba3787e45a53b49454cbc754cd008dc6f8b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        // line 98
        echo "                    ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_stats.html.twig", "@AppBundle/Resources/views/table/_defaultTable.html.twig", 98)->display($context);
        // line 99
        echo "                ";
        
        $__internal_da205b6684e52501edb604ac70ba3787e45a53b49454cbc754cd008dc6f8b6c1->leave($__internal_da205b6684e52501edb604ac70ba3787e45a53b49454cbc754cd008dc6f8b6c1_prof);

        
        $__internal_0b0e4b67989a9913723adcde721ab8f2fe8beccee4b38f288d8d581b2218dc3c->leave($__internal_0b0e4b67989a9913723adcde721ab8f2fe8beccee4b38f288d8d581b2218dc3c_prof);

    }

    // line 104
    public function block_tableAfterPanel($context, array $blocks = array())
    {
        $__internal_7b4fcdf9a533288423253bbade9cfcc098a1e380fc27240e2f3486acf4158009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4fcdf9a533288423253bbade9cfcc098a1e380fc27240e2f3486acf4158009->enter($__internal_7b4fcdf9a533288423253bbade9cfcc098a1e380fc27240e2f3486acf4158009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        $__internal_3e1043c93e4123d6fb7e131f4a3663284fe43649246633046c25304494ae96bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1043c93e4123d6fb7e131f4a3663284fe43649246633046c25304494ae96bc->enter($__internal_3e1043c93e4123d6fb7e131f4a3663284fe43649246633046c25304494ae96bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        
        $__internal_3e1043c93e4123d6fb7e131f4a3663284fe43649246633046c25304494ae96bc->leave($__internal_3e1043c93e4123d6fb7e131f4a3663284fe43649246633046c25304494ae96bc_prof);

        
        $__internal_7b4fcdf9a533288423253bbade9cfcc098a1e380fc27240e2f3486acf4158009->leave($__internal_7b4fcdf9a533288423253bbade9cfcc098a1e380fc27240e2f3486acf4158009_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table/_defaultTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 104,  634 => 99,  631 => 98,  622 => 97,  611 => 100,  609 => 97,  604 => 96,  595 => 95,  585 => 86,  571 => 85,  568 => 84,  550 => 83,  541 => 82,  528 => 80,  519 => 79,  506 => 89,  491 => 87,  488 => 82,  486 => 79,  481 => 76,  474 => 73,  471 => 72,  464 => 68,  461 => 67,  459 => 66,  453 => 63,  447 => 59,  429 => 58,  427 => 57,  424 => 56,  415 => 55,  405 => 49,  391 => 48,  388 => 47,  370 => 46,  361 => 45,  348 => 43,  339 => 42,  329 => 38,  315 => 37,  312 => 36,  294 => 35,  285 => 34,  272 => 32,  263 => 31,  253 => 52,  249 => 50,  246 => 45,  244 => 42,  241 => 41,  239 => 40,  236 => 39,  233 => 34,  231 => 31,  228 => 30,  219 => 29,  208 => 22,  199 => 21,  189 => 18,  186 => 17,  177 => 16,  166 => 19,  164 => 16,  159 => 15,  150 => 14,  133 => 9,  121 => 106,  119 => 104,  115 => 102,  113 => 95,  107 => 91,  105 => 55,  101 => 54,  98 => 53,  96 => 29,  91 => 27,  86 => 24,  83 => 21,  81 => 14,  76 => 11,  74 => 9,  70 => 8,  14 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @KilikTable/_defaultTable.html.twig #}
{% use \"@AppBundle/Resources/views/table/_blocks.html.twig\" with
    tableHeadMassActionsColumn as parent_tableHeadMassActionsColumn,
    tableFilterMassActionsColumn as parent_tableFilterMassActionsColumn,
    tableBodyMassActionsColumn as parent_tableBodyMassActionsColumn
%}
{# @param Kilik\\Components\\Table table #}
{{ form_start(table.formView) }}
{% block tableBeforePanel %}
{% endblock tableBeforePanel %}
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">
            {% block tablePagination %}
                <div id=\"{{ table.id }}_pagination\" class=\"btn-group\">
                    {% block tablePaginationAjax %}
                        {% include \"@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig\" %}
                    {% endblock tablePaginationAjax %}
                </div>
            {% endblock tablePagination %}
            {% block tableTitle %}
                Default title
            {% endblock tableTitle %}
        </div>
    </div>
    <div class=\"panel-body table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"{{ table.id }}\">
            <thead>
                {% block tableHead %}
                    <tr>
                        {% block tableHeadMassActionsColumn %}
                            {{ block('parent_tableHeadMassActionsColumn') }}
                        {% endblock %}
                        {% block tableHeadStdColumns %}
                            {% for column in table.columns %}
                                {% include \"@AppBundle/Resources/views/table/_columnName.html.twig\" %}
                            {% endfor %}
                        {% endblock tableHeadStdColumns %}
                    </tr>
                    {% if table.columns|length > 0 %}
                        <tr>
                            {% block tableFilterMassActionsColumn %}
                                {{ block('parent_tableFilterMassActionsColumn') }}
                            {% endblock %}
                            {% block tableHeadStdFilters %}
                                {% for column in table.columns %}
                                    {% include \"@AppBundle/Resources/views/table/_columnFilter.html.twig\" %}
                                {% endfor %}
                            {% endblock tableHeadStdFilters %}
                        </tr>
                    {% endif %}
                {% endblock tableHead %}
            </thead>
            <tbody id=\"{{ table.bodyId }}\">
                {% block tableBody %}

                    {% if tableRenderBody is defined %}
                        {% for row in rows %}
                            <tr>
                                <!--  path(profile,{id:row.object.id})  -->
                                <td>
                                    <!--  View Post  -->
                                    <a href=\"{{ path('detailUser',{id:row.object.id}) }}\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar User\"></i>
                                    </a>
                                    {% if row.object.active == \"SI\" %}
                                        <!--  Desactivar User -->
                                        <a href=\"{{ path('estatusUser',{id:row.object.id}) }}\">
                                            <i class=\"glyphicon glyphicon-hand-down\" title=\"Desactivar User\"></i>
                                        </a>                                    
                                    {% else %}
                                        <!--  Active User -->
                                        <a  href=\"{{ path('estatusUser',{id:row.object.id}) }}\">
                                            <i class=\"glyphicon glyphicon-hand-up\" title=\"Activar User\"></i>
                                        </a>
                                    {% endif %}                                    
                                </td>

                                {% block tableBodyMassActionsColumn %}
                                    {{ block('parent_tableBodyMassActionsColumn') }}
                                {% endblock %}
                                {% block tableBodyStdColumns %}
                                    {% for column in table.columns %}
                                        {% include \"@AppBundle/Resources/views/table/_columnCell.html.twig\" %}
                                    {% endfor %}
                                {% endblock tableBodyStdColumns %}
                            </tr>
                        {% endfor %}
                    {% endif %}                        
                {% endblock tableBody %}
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        {% block tableStats %}
            <div id=\"{{ table.id }}_stats\">
                {% block tableStatsAjax %}
                    {% include \"@AppBundle/Resources/views/table/_stats.html.twig\" %}
                {% endblock tableStatsAjax %}
            </div>
        {% endblock tableStats %}
    </div>
</div>
{% block tableAfterPanel %}
{% endblock tableAfterPanel %}
{{ form_end(table.formView) }}
", "@AppBundle/Resources/views/table/_defaultTable.html.twig", "/home/leandro/blog/src/AppBundle/Resources/views/table/_defaultTable.html.twig");
    }
}
