<?php

/* @AppBundle/Resources/views/table_post/table_post_publico.html.twig */
class __TwigTemplate_2bbaaa8f3e44512c708a87047ebf6cd1615985c0d47e8ddc069ed5002bfa486b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@AppBundle/Resources/views/table/_blocks.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 2);
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
        $__internal_d21e70d79f3ca8fcbe7bc2c3782da4bc78f595d3f99de02333fa69935e01a096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21e70d79f3ca8fcbe7bc2c3782da4bc78f595d3f99de02333fa69935e01a096->enter($__internal_d21e70d79f3ca8fcbe7bc2c3782da4bc78f595d3f99de02333fa69935e01a096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig"));

        $__internal_3032d2eea01e22a00e6ea39ba4d44e17f60a66367acbdcc28a07d6be6ca75680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3032d2eea01e22a00e6ea39ba4d44e17f60a66367acbdcc28a07d6be6ca75680->enter($__internal_3032d2eea01e22a00e6ea39ba4d44e17f60a66367acbdcc28a07d6be6ca75680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig"));

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
        // line 79
        echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
        // line 83
        $this->displayBlock('tableStats', $context, $blocks);
        // line 90
        echo "    </div>
</div>
";
        // line 92
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 94
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", array()), 'form_end');
        echo "
";
        
        $__internal_d21e70d79f3ca8fcbe7bc2c3782da4bc78f595d3f99de02333fa69935e01a096->leave($__internal_d21e70d79f3ca8fcbe7bc2c3782da4bc78f595d3f99de02333fa69935e01a096_prof);

        
        $__internal_3032d2eea01e22a00e6ea39ba4d44e17f60a66367acbdcc28a07d6be6ca75680->leave($__internal_3032d2eea01e22a00e6ea39ba4d44e17f60a66367acbdcc28a07d6be6ca75680_prof);

    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = array())
    {
        $__internal_92da61fdaf93307f2b26223cbfb2703d1e93529e120efe1ffcb3dbc9c50b6048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92da61fdaf93307f2b26223cbfb2703d1e93529e120efe1ffcb3dbc9c50b6048->enter($__internal_92da61fdaf93307f2b26223cbfb2703d1e93529e120efe1ffcb3dbc9c50b6048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        $__internal_d65c7de4843f0dce35d977c6470216a844154f5de6ea260e8754050a4d057658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65c7de4843f0dce35d977c6470216a844154f5de6ea260e8754050a4d057658->enter($__internal_d65c7de4843f0dce35d977c6470216a844154f5de6ea260e8754050a4d057658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        
        $__internal_d65c7de4843f0dce35d977c6470216a844154f5de6ea260e8754050a4d057658->leave($__internal_d65c7de4843f0dce35d977c6470216a844154f5de6ea260e8754050a4d057658_prof);

        
        $__internal_92da61fdaf93307f2b26223cbfb2703d1e93529e120efe1ffcb3dbc9c50b6048->leave($__internal_92da61fdaf93307f2b26223cbfb2703d1e93529e120efe1ffcb3dbc9c50b6048_prof);

    }

    // line 14
    public function block_tablePagination($context, array $blocks = array())
    {
        $__internal_e95c10b18a9f9cc98aed392edee8713d7cea0f00bb3a84e197eab05a0d7e09a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95c10b18a9f9cc98aed392edee8713d7cea0f00bb3a84e197eab05a0d7e09a0->enter($__internal_e95c10b18a9f9cc98aed392edee8713d7cea0f00bb3a84e197eab05a0d7e09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

        $__internal_91c572403d3b146dcf9c39c265df220f9cede8b1af0d6611ca04641200032ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c572403d3b146dcf9c39c265df220f9cede8b1af0d6611ca04641200032ecf->enter($__internal_91c572403d3b146dcf9c39c265df220f9cede8b1af0d6611ca04641200032ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

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
        
        $__internal_91c572403d3b146dcf9c39c265df220f9cede8b1af0d6611ca04641200032ecf->leave($__internal_91c572403d3b146dcf9c39c265df220f9cede8b1af0d6611ca04641200032ecf_prof);

        
        $__internal_e95c10b18a9f9cc98aed392edee8713d7cea0f00bb3a84e197eab05a0d7e09a0->leave($__internal_e95c10b18a9f9cc98aed392edee8713d7cea0f00bb3a84e197eab05a0d7e09a0_prof);

    }

    // line 16
    public function block_tablePaginationAjax($context, array $blocks = array())
    {
        $__internal_6a7c61632df4d3540e4f7dc26526f829e58fb597d5d5650bb28c08b80b546dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7c61632df4d3540e4f7dc26526f829e58fb597d5d5650bb28c08b80b546dbf->enter($__internal_6a7c61632df4d3540e4f7dc26526f829e58fb597d5d5650bb28c08b80b546dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        $__internal_2d49fcc0c3a51cf71259d8c2dfdd784283f296299b3c0fe169ca11d135e81b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d49fcc0c3a51cf71259d8c2dfdd784283f296299b3c0fe169ca11d135e81b47->enter($__internal_2d49fcc0c3a51cf71259d8c2dfdd784283f296299b3c0fe169ca11d135e81b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        // line 17
        echo "                        ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
        
        $__internal_2d49fcc0c3a51cf71259d8c2dfdd784283f296299b3c0fe169ca11d135e81b47->leave($__internal_2d49fcc0c3a51cf71259d8c2dfdd784283f296299b3c0fe169ca11d135e81b47_prof);

        
        $__internal_6a7c61632df4d3540e4f7dc26526f829e58fb597d5d5650bb28c08b80b546dbf->leave($__internal_6a7c61632df4d3540e4f7dc26526f829e58fb597d5d5650bb28c08b80b546dbf_prof);

    }

    // line 21
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_724db2ccba651a1a63f195510d195dc94a03eedd1a23e8bcd612f40973337fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724db2ccba651a1a63f195510d195dc94a03eedd1a23e8bcd612f40973337fae->enter($__internal_724db2ccba651a1a63f195510d195dc94a03eedd1a23e8bcd612f40973337fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_80368541dcd295a6dfeacfdbbaa743fd24b7b0907c02f3be9511d787a661cdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80368541dcd295a6dfeacfdbbaa743fd24b7b0907c02f3be9511d787a661cdfd->enter($__internal_80368541dcd295a6dfeacfdbbaa743fd24b7b0907c02f3be9511d787a661cdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 22
        echo "                Default title
            ";
        
        $__internal_80368541dcd295a6dfeacfdbbaa743fd24b7b0907c02f3be9511d787a661cdfd->leave($__internal_80368541dcd295a6dfeacfdbbaa743fd24b7b0907c02f3be9511d787a661cdfd_prof);

        
        $__internal_724db2ccba651a1a63f195510d195dc94a03eedd1a23e8bcd612f40973337fae->leave($__internal_724db2ccba651a1a63f195510d195dc94a03eedd1a23e8bcd612f40973337fae_prof);

    }

    // line 29
    public function block_tableHead($context, array $blocks = array())
    {
        $__internal_bb21df0662a11e2348baae26e0cb1a7025fb8f52131a695df76c0879ac9a7938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb21df0662a11e2348baae26e0cb1a7025fb8f52131a695df76c0879ac9a7938->enter($__internal_bb21df0662a11e2348baae26e0cb1a7025fb8f52131a695df76c0879ac9a7938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

        $__internal_c0576ff856fdb4c2281569a2677e10a765612700cf20a62c3ccc7dac31ceddff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0576ff856fdb4c2281569a2677e10a765612700cf20a62c3ccc7dac31ceddff->enter($__internal_c0576ff856fdb4c2281569a2677e10a765612700cf20a62c3ccc7dac31ceddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

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
        
        $__internal_c0576ff856fdb4c2281569a2677e10a765612700cf20a62c3ccc7dac31ceddff->leave($__internal_c0576ff856fdb4c2281569a2677e10a765612700cf20a62c3ccc7dac31ceddff_prof);

        
        $__internal_bb21df0662a11e2348baae26e0cb1a7025fb8f52131a695df76c0879ac9a7938->leave($__internal_bb21df0662a11e2348baae26e0cb1a7025fb8f52131a695df76c0879ac9a7938_prof);

    }

    // line 31
    public function block_tableHeadMassActionsColumn($context, array $blocks = array())
    {
        $__internal_9f92ab307bce64406c026733f8d1e7f1956ebf8d4db2303c3a13bfeb67a42055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f92ab307bce64406c026733f8d1e7f1956ebf8d4db2303c3a13bfeb67a42055->enter($__internal_9f92ab307bce64406c026733f8d1e7f1956ebf8d4db2303c3a13bfeb67a42055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_b05e46c1754355dfae884ced0003835360fe094c0c3d246ec32c8801d35a2d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05e46c1754355dfae884ced0003835360fe094c0c3d246ec32c8801d35a2d74->enter($__internal_b05e46c1754355dfae884ced0003835360fe094c0c3d246ec32c8801d35a2d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 32
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
        
        $__internal_b05e46c1754355dfae884ced0003835360fe094c0c3d246ec32c8801d35a2d74->leave($__internal_b05e46c1754355dfae884ced0003835360fe094c0c3d246ec32c8801d35a2d74_prof);

        
        $__internal_9f92ab307bce64406c026733f8d1e7f1956ebf8d4db2303c3a13bfeb67a42055->leave($__internal_9f92ab307bce64406c026733f8d1e7f1956ebf8d4db2303c3a13bfeb67a42055_prof);

    }

    // line 34
    public function block_tableHeadStdColumns($context, array $blocks = array())
    {
        $__internal_c07d2f8d77983b9a1c27899071e76de470dc4c327c95765f8335b1a3e9f7e2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07d2f8d77983b9a1c27899071e76de470dc4c327c95765f8335b1a3e9f7e2ba->enter($__internal_c07d2f8d77983b9a1c27899071e76de470dc4c327c95765f8335b1a3e9f7e2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_9b2c65cff3af0503ed10319ff82943d8c4d025df9a7a9f5dcea146b8451fdfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2c65cff3af0503ed10319ff82943d8c4d025df9a7a9f5dcea146b8451fdfbc->enter($__internal_9b2c65cff3af0503ed10319ff82943d8c4d025df9a7a9f5dcea146b8451fdfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

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
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnName.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 36)->display($context);
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
        
        $__internal_9b2c65cff3af0503ed10319ff82943d8c4d025df9a7a9f5dcea146b8451fdfbc->leave($__internal_9b2c65cff3af0503ed10319ff82943d8c4d025df9a7a9f5dcea146b8451fdfbc_prof);

        
        $__internal_c07d2f8d77983b9a1c27899071e76de470dc4c327c95765f8335b1a3e9f7e2ba->leave($__internal_c07d2f8d77983b9a1c27899071e76de470dc4c327c95765f8335b1a3e9f7e2ba_prof);

    }

    // line 42
    public function block_tableFilterMassActionsColumn($context, array $blocks = array())
    {
        $__internal_26feb3c08e473ce06b481f3094e8a50a02612c15d52af1bdf28c3148518564bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26feb3c08e473ce06b481f3094e8a50a02612c15d52af1bdf28c3148518564bd->enter($__internal_26feb3c08e473ce06b481f3094e8a50a02612c15d52af1bdf28c3148518564bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_2c52cb748b453cc3a07e39a12b93abca797286a0cf8c84e735d52dddf0129f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c52cb748b453cc3a07e39a12b93abca797286a0cf8c84e735d52dddf0129f21->enter($__internal_2c52cb748b453cc3a07e39a12b93abca797286a0cf8c84e735d52dddf0129f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 43
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
        
        $__internal_2c52cb748b453cc3a07e39a12b93abca797286a0cf8c84e735d52dddf0129f21->leave($__internal_2c52cb748b453cc3a07e39a12b93abca797286a0cf8c84e735d52dddf0129f21_prof);

        
        $__internal_26feb3c08e473ce06b481f3094e8a50a02612c15d52af1bdf28c3148518564bd->leave($__internal_26feb3c08e473ce06b481f3094e8a50a02612c15d52af1bdf28c3148518564bd_prof);

    }

    // line 45
    public function block_tableHeadStdFilters($context, array $blocks = array())
    {
        $__internal_f9e7fb2025eb29c7f884c60527cb0ec67141fbb9d467e9bcae9f01e01094a786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e7fb2025eb29c7f884c60527cb0ec67141fbb9d467e9bcae9f01e01094a786->enter($__internal_f9e7fb2025eb29c7f884c60527cb0ec67141fbb9d467e9bcae9f01e01094a786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_7327e34a58dab041e98016a70ccac014608aac2336313f685faf66bbbdd6eac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7327e34a58dab041e98016a70ccac014608aac2336313f685faf66bbbdd6eac5->enter($__internal_7327e34a58dab041e98016a70ccac014608aac2336313f685faf66bbbdd6eac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

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
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnFilter.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 47)->display($context);
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
        
        $__internal_7327e34a58dab041e98016a70ccac014608aac2336313f685faf66bbbdd6eac5->leave($__internal_7327e34a58dab041e98016a70ccac014608aac2336313f685faf66bbbdd6eac5_prof);

        
        $__internal_f9e7fb2025eb29c7f884c60527cb0ec67141fbb9d467e9bcae9f01e01094a786->leave($__internal_f9e7fb2025eb29c7f884c60527cb0ec67141fbb9d467e9bcae9f01e01094a786_prof);

    }

    // line 55
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_931ed7569a1681af1bc03a95e4ee2cf0d5af8d7f80b4d2c071cf7909c45188f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931ed7569a1681af1bc03a95e4ee2cf0d5af8d7f80b4d2c071cf7909c45188f5->enter($__internal_931ed7569a1681af1bc03a95e4ee2cf0d5af8d7f80b4d2c071cf7909c45188f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        $__internal_b6df8027cd715be07d1b0d32cd1b13833488212dd0d4078aab72abfef023099b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6df8027cd715be07d1b0d32cd1b13833488212dd0d4078aab72abfef023099b->enter($__internal_b6df8027cd715be07d1b0d32cd1b13833488212dd0d4078aab72abfef023099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

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
                                <td>
                                    <!--  View Post  -->
                                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar Post\"></i>
                                    </a>                                                                
                                </td>

                                ";
                // line 67
                $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
                // line 70
                echo "                                ";
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 75
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
            // line 77
            echo "                    ";
        }
        // line 78
        echo "                ";
        
        $__internal_b6df8027cd715be07d1b0d32cd1b13833488212dd0d4078aab72abfef023099b->leave($__internal_b6df8027cd715be07d1b0d32cd1b13833488212dd0d4078aab72abfef023099b_prof);

        
        $__internal_931ed7569a1681af1bc03a95e4ee2cf0d5af8d7f80b4d2c071cf7909c45188f5->leave($__internal_931ed7569a1681af1bc03a95e4ee2cf0d5af8d7f80b4d2c071cf7909c45188f5_prof);

    }

    // line 67
    public function block_tableBodyMassActionsColumn($context, array $blocks = array())
    {
        $__internal_44879754a19085548ecd35cec394ec49f24afceb6c1d108d2a36f557bb25cd25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44879754a19085548ecd35cec394ec49f24afceb6c1d108d2a36f557bb25cd25->enter($__internal_44879754a19085548ecd35cec394ec49f24afceb6c1d108d2a36f557bb25cd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_aea998cd713922dd4791c8e17060fe0d57111bea8449f4a7629492af718af5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea998cd713922dd4791c8e17060fe0d57111bea8449f4a7629492af718af5a6->enter($__internal_aea998cd713922dd4791c8e17060fe0d57111bea8449f4a7629492af718af5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 68
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
        
        $__internal_aea998cd713922dd4791c8e17060fe0d57111bea8449f4a7629492af718af5a6->leave($__internal_aea998cd713922dd4791c8e17060fe0d57111bea8449f4a7629492af718af5a6_prof);

        
        $__internal_44879754a19085548ecd35cec394ec49f24afceb6c1d108d2a36f557bb25cd25->leave($__internal_44879754a19085548ecd35cec394ec49f24afceb6c1d108d2a36f557bb25cd25_prof);

    }

    // line 70
    public function block_tableBodyStdColumns($context, array $blocks = array())
    {
        $__internal_449bdc415870d073487aa47d00b776eab171bfa4139991130c1dae7b0a5a9f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449bdc415870d073487aa47d00b776eab171bfa4139991130c1dae7b0a5a9f02->enter($__internal_449bdc415870d073487aa47d00b776eab171bfa4139991130c1dae7b0a5a9f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_f3628e99772983b3a3a67b54c66df8f9a4eea7683d7bc82a1cc764604af2f7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3628e99772983b3a3a67b54c66df8f9a4eea7683d7bc82a1cc764604af2f7a8->enter($__internal_f3628e99772983b3a3a67b54c66df8f9a4eea7683d7bc82a1cc764604af2f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 71
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
            // line 72
            echo "                                        ";
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnCell.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 72)->display($context);
            // line 73
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
        // line 74
        echo "                                ";
        
        $__internal_f3628e99772983b3a3a67b54c66df8f9a4eea7683d7bc82a1cc764604af2f7a8->leave($__internal_f3628e99772983b3a3a67b54c66df8f9a4eea7683d7bc82a1cc764604af2f7a8_prof);

        
        $__internal_449bdc415870d073487aa47d00b776eab171bfa4139991130c1dae7b0a5a9f02->leave($__internal_449bdc415870d073487aa47d00b776eab171bfa4139991130c1dae7b0a5a9f02_prof);

    }

    // line 83
    public function block_tableStats($context, array $blocks = array())
    {
        $__internal_3753dd4fe48afc70ccbbb1d961d5be10bcd360cd9399dedce043427d19ee8519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3753dd4fe48afc70ccbbb1d961d5be10bcd360cd9399dedce043427d19ee8519->enter($__internal_3753dd4fe48afc70ccbbb1d961d5be10bcd360cd9399dedce043427d19ee8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        $__internal_4c763417333b7aa45b1a920ed89443d0c7686e9064d0d5589e35fe0fbf682306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c763417333b7aa45b1a920ed89443d0c7686e9064d0d5589e35fe0fbf682306->enter($__internal_4c763417333b7aa45b1a920ed89443d0c7686e9064d0d5589e35fe0fbf682306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        // line 84
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "_stats\">
                ";
        // line 85
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 88
        echo "            </div>
        ";
        
        $__internal_4c763417333b7aa45b1a920ed89443d0c7686e9064d0d5589e35fe0fbf682306->leave($__internal_4c763417333b7aa45b1a920ed89443d0c7686e9064d0d5589e35fe0fbf682306_prof);

        
        $__internal_3753dd4fe48afc70ccbbb1d961d5be10bcd360cd9399dedce043427d19ee8519->leave($__internal_3753dd4fe48afc70ccbbb1d961d5be10bcd360cd9399dedce043427d19ee8519_prof);

    }

    // line 85
    public function block_tableStatsAjax($context, array $blocks = array())
    {
        $__internal_d41b94c9e1afe15fea0ddc79065a70c238bc4cf56347bb609a52201d144b4577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41b94c9e1afe15fea0ddc79065a70c238bc4cf56347bb609a52201d144b4577->enter($__internal_d41b94c9e1afe15fea0ddc79065a70c238bc4cf56347bb609a52201d144b4577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        $__internal_632d49fe008148ed45c8aa1ca503f39e028ce61d6cf0438681613bc38b10f766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632d49fe008148ed45c8aa1ca503f39e028ce61d6cf0438681613bc38b10f766->enter($__internal_632d49fe008148ed45c8aa1ca503f39e028ce61d6cf0438681613bc38b10f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        // line 86
        echo "                    ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_stats.html.twig", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", 86)->display($context);
        // line 87
        echo "                ";
        
        $__internal_632d49fe008148ed45c8aa1ca503f39e028ce61d6cf0438681613bc38b10f766->leave($__internal_632d49fe008148ed45c8aa1ca503f39e028ce61d6cf0438681613bc38b10f766_prof);

        
        $__internal_d41b94c9e1afe15fea0ddc79065a70c238bc4cf56347bb609a52201d144b4577->leave($__internal_d41b94c9e1afe15fea0ddc79065a70c238bc4cf56347bb609a52201d144b4577_prof);

    }

    // line 92
    public function block_tableAfterPanel($context, array $blocks = array())
    {
        $__internal_629aad33b0fc6c45b83329d88eab9095b08ecd3ae97870b656e9a514569a4d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629aad33b0fc6c45b83329d88eab9095b08ecd3ae97870b656e9a514569a4d8c->enter($__internal_629aad33b0fc6c45b83329d88eab9095b08ecd3ae97870b656e9a514569a4d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        $__internal_9cf215caa8a55e08884122250fdd5ca63282d77395a995773a53e182d84a9c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf215caa8a55e08884122250fdd5ca63282d77395a995773a53e182d84a9c0a->enter($__internal_9cf215caa8a55e08884122250fdd5ca63282d77395a995773a53e182d84a9c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        
        $__internal_9cf215caa8a55e08884122250fdd5ca63282d77395a995773a53e182d84a9c0a->leave($__internal_9cf215caa8a55e08884122250fdd5ca63282d77395a995773a53e182d84a9c0a_prof);

        
        $__internal_629aad33b0fc6c45b83329d88eab9095b08ecd3ae97870b656e9a514569a4d8c->leave($__internal_629aad33b0fc6c45b83329d88eab9095b08ecd3ae97870b656e9a514569a4d8c_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/table_post_publico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 92,  608 => 87,  605 => 86,  596 => 85,  585 => 88,  583 => 85,  578 => 84,  569 => 83,  559 => 74,  545 => 73,  542 => 72,  524 => 71,  515 => 70,  502 => 68,  493 => 67,  483 => 78,  480 => 77,  465 => 75,  462 => 70,  460 => 67,  452 => 62,  447 => 59,  429 => 58,  427 => 57,  424 => 56,  415 => 55,  405 => 49,  391 => 48,  388 => 47,  370 => 46,  361 => 45,  348 => 43,  339 => 42,  329 => 38,  315 => 37,  312 => 36,  294 => 35,  285 => 34,  272 => 32,  263 => 31,  253 => 52,  249 => 50,  246 => 45,  244 => 42,  241 => 41,  239 => 40,  236 => 39,  233 => 34,  231 => 31,  228 => 30,  219 => 29,  208 => 22,  199 => 21,  189 => 18,  186 => 17,  177 => 16,  166 => 19,  164 => 16,  159 => 15,  150 => 14,  133 => 9,  121 => 94,  119 => 92,  115 => 90,  113 => 83,  107 => 79,  105 => 55,  101 => 54,  98 => 53,  96 => 29,  91 => 27,  86 => 24,  83 => 21,  81 => 14,  76 => 11,  74 => 9,  70 => 8,  14 => 2,);
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
                                <td>
                                    <!--  View Post  -->
                                    <a href=\"{{ path('detail',{id:row.object.id}) }}\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar Post\"></i>
                                    </a>                                                                
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
", "@AppBundle/Resources/views/table_post/table_post_publico.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/table_post_publico.html.twig");
    }
}
