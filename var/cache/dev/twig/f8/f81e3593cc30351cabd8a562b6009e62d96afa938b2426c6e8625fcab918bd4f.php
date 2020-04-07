<?php

/* @AppBundle/Resources/views/table_post/table_post_logueado.html.twig */
class __TwigTemplate_0b8a8be27d202283066d54917f8985f58ababe5084658cd7801e83697e8a72ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@AppBundle/Resources/views/table/_blocks.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 2);
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
        $__internal_a84c3bd0321d8994edf56b9b0e1d657be572c38ea2891c8893a914d683b4946b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84c3bd0321d8994edf56b9b0e1d657be572c38ea2891c8893a914d683b4946b->enter($__internal_a84c3bd0321d8994edf56b9b0e1d657be572c38ea2891c8893a914d683b4946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig"));

        $__internal_c0a54319b3b4ed2d128986d05369b3e3497b611a9670ee5db8497df6678c3239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a54319b3b4ed2d128986d05369b3e3497b611a9670ee5db8497df6678c3239->enter($__internal_c0a54319b3b4ed2d128986d05369b3e3497b611a9670ee5db8497df6678c3239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig"));

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
        // line 92
        echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
        // line 96
        $this->displayBlock('tableStats', $context, $blocks);
        // line 103
        echo "    </div>
</div>
";
        // line 105
        $this->displayBlock('tableAfterPanel', $context, $blocks);
        // line 107
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", array()), 'form_end');
        echo "
";
        
        $__internal_a84c3bd0321d8994edf56b9b0e1d657be572c38ea2891c8893a914d683b4946b->leave($__internal_a84c3bd0321d8994edf56b9b0e1d657be572c38ea2891c8893a914d683b4946b_prof);

        
        $__internal_c0a54319b3b4ed2d128986d05369b3e3497b611a9670ee5db8497df6678c3239->leave($__internal_c0a54319b3b4ed2d128986d05369b3e3497b611a9670ee5db8497df6678c3239_prof);

    }

    // line 9
    public function block_tableBeforePanel($context, array $blocks = array())
    {
        $__internal_f02ffb2ea680ff82ad0d8e3c383fcef39679c2ee2998d5047894390f7e395d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02ffb2ea680ff82ad0d8e3c383fcef39679c2ee2998d5047894390f7e395d29->enter($__internal_f02ffb2ea680ff82ad0d8e3c383fcef39679c2ee2998d5047894390f7e395d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        $__internal_042ce65aaaac0f75cc714ba7b5c4607d93fe7db2d495efc8860f9a64479c0c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042ce65aaaac0f75cc714ba7b5c4607d93fe7db2d495efc8860f9a64479c0c5a->enter($__internal_042ce65aaaac0f75cc714ba7b5c4607d93fe7db2d495efc8860f9a64479c0c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBeforePanel"));

        
        $__internal_042ce65aaaac0f75cc714ba7b5c4607d93fe7db2d495efc8860f9a64479c0c5a->leave($__internal_042ce65aaaac0f75cc714ba7b5c4607d93fe7db2d495efc8860f9a64479c0c5a_prof);

        
        $__internal_f02ffb2ea680ff82ad0d8e3c383fcef39679c2ee2998d5047894390f7e395d29->leave($__internal_f02ffb2ea680ff82ad0d8e3c383fcef39679c2ee2998d5047894390f7e395d29_prof);

    }

    // line 14
    public function block_tablePagination($context, array $blocks = array())
    {
        $__internal_1d2d83752793e90035bc23364edc91c953bb2a2969d055771e622db03fb808c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2d83752793e90035bc23364edc91c953bb2a2969d055771e622db03fb808c4->enter($__internal_1d2d83752793e90035bc23364edc91c953bb2a2969d055771e622db03fb808c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

        $__internal_1af5b38c42d3c6dad5eb54cb3c1f6051bef127ff4aebd020e0d82909b70dd208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af5b38c42d3c6dad5eb54cb3c1f6051bef127ff4aebd020e0d82909b70dd208->enter($__internal_1af5b38c42d3c6dad5eb54cb3c1f6051bef127ff4aebd020e0d82909b70dd208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePagination"));

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
        
        $__internal_1af5b38c42d3c6dad5eb54cb3c1f6051bef127ff4aebd020e0d82909b70dd208->leave($__internal_1af5b38c42d3c6dad5eb54cb3c1f6051bef127ff4aebd020e0d82909b70dd208_prof);

        
        $__internal_1d2d83752793e90035bc23364edc91c953bb2a2969d055771e622db03fb808c4->leave($__internal_1d2d83752793e90035bc23364edc91c953bb2a2969d055771e622db03fb808c4_prof);

    }

    // line 16
    public function block_tablePaginationAjax($context, array $blocks = array())
    {
        $__internal_731d42a04371a717bb03cb290157b3b78939f3ff041b671c8496fa75567cbb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731d42a04371a717bb03cb290157b3b78939f3ff041b671c8496fa75567cbb9d->enter($__internal_731d42a04371a717bb03cb290157b3b78939f3ff041b671c8496fa75567cbb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        $__internal_6e2908f7cf99da7f1ec36637e476e25e0c8d8d5cf6064dffc40fa4fdca2168ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2908f7cf99da7f1ec36637e476e25e0c8d8d5cf6064dffc40fa4fdca2168ee->enter($__internal_6e2908f7cf99da7f1ec36637e476e25e0c8d8d5cf6064dffc40fa4fdca2168ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablePaginationAjax"));

        // line 17
        echo "                        ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_paginationNumbersIcons.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 17)->display($context);
        // line 18
        echo "                    ";
        
        $__internal_6e2908f7cf99da7f1ec36637e476e25e0c8d8d5cf6064dffc40fa4fdca2168ee->leave($__internal_6e2908f7cf99da7f1ec36637e476e25e0c8d8d5cf6064dffc40fa4fdca2168ee_prof);

        
        $__internal_731d42a04371a717bb03cb290157b3b78939f3ff041b671c8496fa75567cbb9d->leave($__internal_731d42a04371a717bb03cb290157b3b78939f3ff041b671c8496fa75567cbb9d_prof);

    }

    // line 21
    public function block_tableTitle($context, array $blocks = array())
    {
        $__internal_b943650a127005d13e586c0b0988286fadc78917c4f92cd26a8920b8c1769c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b943650a127005d13e586c0b0988286fadc78917c4f92cd26a8920b8c1769c3d->enter($__internal_b943650a127005d13e586c0b0988286fadc78917c4f92cd26a8920b8c1769c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        $__internal_2cdc59a6d93ead9c766dac2c887081bd85c94d3e284d8ac27339e465bc646f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdc59a6d93ead9c766dac2c887081bd85c94d3e284d8ac27339e465bc646f77->enter($__internal_2cdc59a6d93ead9c766dac2c887081bd85c94d3e284d8ac27339e465bc646f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableTitle"));

        // line 22
        echo "                Default title
            ";
        
        $__internal_2cdc59a6d93ead9c766dac2c887081bd85c94d3e284d8ac27339e465bc646f77->leave($__internal_2cdc59a6d93ead9c766dac2c887081bd85c94d3e284d8ac27339e465bc646f77_prof);

        
        $__internal_b943650a127005d13e586c0b0988286fadc78917c4f92cd26a8920b8c1769c3d->leave($__internal_b943650a127005d13e586c0b0988286fadc78917c4f92cd26a8920b8c1769c3d_prof);

    }

    // line 29
    public function block_tableHead($context, array $blocks = array())
    {
        $__internal_62cae712ce5e8b9ff14566fb921ee38638097adea941759ba21840c95ec0f031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cae712ce5e8b9ff14566fb921ee38638097adea941759ba21840c95ec0f031->enter($__internal_62cae712ce5e8b9ff14566fb921ee38638097adea941759ba21840c95ec0f031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

        $__internal_e7553e97e85687a287a454bfa9fcf756530d2dfc9bb3d8b386f87ec418d5bea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7553e97e85687a287a454bfa9fcf756530d2dfc9bb3d8b386f87ec418d5bea6->enter($__internal_e7553e97e85687a287a454bfa9fcf756530d2dfc9bb3d8b386f87ec418d5bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHead"));

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
        
        $__internal_e7553e97e85687a287a454bfa9fcf756530d2dfc9bb3d8b386f87ec418d5bea6->leave($__internal_e7553e97e85687a287a454bfa9fcf756530d2dfc9bb3d8b386f87ec418d5bea6_prof);

        
        $__internal_62cae712ce5e8b9ff14566fb921ee38638097adea941759ba21840c95ec0f031->leave($__internal_62cae712ce5e8b9ff14566fb921ee38638097adea941759ba21840c95ec0f031_prof);

    }

    // line 31
    public function block_tableHeadMassActionsColumn($context, array $blocks = array())
    {
        $__internal_79805f0f1c53aee5977e5863818384f931dc3f2754074538921a34641002c992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79805f0f1c53aee5977e5863818384f931dc3f2754074538921a34641002c992->enter($__internal_79805f0f1c53aee5977e5863818384f931dc3f2754074538921a34641002c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        $__internal_d91dee533d62225aa078419fc8298064dfd51cf316c31ee28d230c29a293a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91dee533d62225aa078419fc8298064dfd51cf316c31ee28d230c29a293a326->enter($__internal_d91dee533d62225aa078419fc8298064dfd51cf316c31ee28d230c29a293a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadMassActionsColumn"));

        // line 32
        echo "                            ";
        $this->displayBlock("parent_tableHeadMassActionsColumn", $context, $blocks);
        echo "
                        ";
        
        $__internal_d91dee533d62225aa078419fc8298064dfd51cf316c31ee28d230c29a293a326->leave($__internal_d91dee533d62225aa078419fc8298064dfd51cf316c31ee28d230c29a293a326_prof);

        
        $__internal_79805f0f1c53aee5977e5863818384f931dc3f2754074538921a34641002c992->leave($__internal_79805f0f1c53aee5977e5863818384f931dc3f2754074538921a34641002c992_prof);

    }

    // line 34
    public function block_tableHeadStdColumns($context, array $blocks = array())
    {
        $__internal_e6265d8f56385d010b06d6b48c5702837cc1b8fb576eda387518c5b44cd42e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6265d8f56385d010b06d6b48c5702837cc1b8fb576eda387518c5b44cd42e62->enter($__internal_e6265d8f56385d010b06d6b48c5702837cc1b8fb576eda387518c5b44cd42e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

        $__internal_827c0f0b129571fa4d1991896520351a1ab9a5220d14f3c20a6d7a213a78e43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827c0f0b129571fa4d1991896520351a1ab9a5220d14f3c20a6d7a213a78e43d->enter($__internal_827c0f0b129571fa4d1991896520351a1ab9a5220d14f3c20a6d7a213a78e43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdColumns"));

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
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnName.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 36)->display($context);
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
        
        $__internal_827c0f0b129571fa4d1991896520351a1ab9a5220d14f3c20a6d7a213a78e43d->leave($__internal_827c0f0b129571fa4d1991896520351a1ab9a5220d14f3c20a6d7a213a78e43d_prof);

        
        $__internal_e6265d8f56385d010b06d6b48c5702837cc1b8fb576eda387518c5b44cd42e62->leave($__internal_e6265d8f56385d010b06d6b48c5702837cc1b8fb576eda387518c5b44cd42e62_prof);

    }

    // line 42
    public function block_tableFilterMassActionsColumn($context, array $blocks = array())
    {
        $__internal_afaf584be7f762b057cbeb80ffe1588b2182e81c442f96f1a1e58d6449d4ce24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaf584be7f762b057cbeb80ffe1588b2182e81c442f96f1a1e58d6449d4ce24->enter($__internal_afaf584be7f762b057cbeb80ffe1588b2182e81c442f96f1a1e58d6449d4ce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        $__internal_23b35f7223b811824c216c6f34666b8dc43d4b89ac069b90f8c3375dbe3dba05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b35f7223b811824c216c6f34666b8dc43d4b89ac069b90f8c3375dbe3dba05->enter($__internal_23b35f7223b811824c216c6f34666b8dc43d4b89ac069b90f8c3375dbe3dba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableFilterMassActionsColumn"));

        // line 43
        echo "                                ";
        $this->displayBlock("parent_tableFilterMassActionsColumn", $context, $blocks);
        echo "
                            ";
        
        $__internal_23b35f7223b811824c216c6f34666b8dc43d4b89ac069b90f8c3375dbe3dba05->leave($__internal_23b35f7223b811824c216c6f34666b8dc43d4b89ac069b90f8c3375dbe3dba05_prof);

        
        $__internal_afaf584be7f762b057cbeb80ffe1588b2182e81c442f96f1a1e58d6449d4ce24->leave($__internal_afaf584be7f762b057cbeb80ffe1588b2182e81c442f96f1a1e58d6449d4ce24_prof);

    }

    // line 45
    public function block_tableHeadStdFilters($context, array $blocks = array())
    {
        $__internal_cdc539a03ad7a22e907670dc7f4faed0b56efeaeeaa6c49b32d748f9f8e2aae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc539a03ad7a22e907670dc7f4faed0b56efeaeeaa6c49b32d748f9f8e2aae4->enter($__internal_cdc539a03ad7a22e907670dc7f4faed0b56efeaeeaa6c49b32d748f9f8e2aae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

        $__internal_5c823e898652204b7be2d4f48cb45509bda18b725f512f24110c11e88ce63c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c823e898652204b7be2d4f48cb45509bda18b725f512f24110c11e88ce63c53->enter($__internal_5c823e898652204b7be2d4f48cb45509bda18b725f512f24110c11e88ce63c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeadStdFilters"));

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
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnFilter.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 47)->display($context);
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
        
        $__internal_5c823e898652204b7be2d4f48cb45509bda18b725f512f24110c11e88ce63c53->leave($__internal_5c823e898652204b7be2d4f48cb45509bda18b725f512f24110c11e88ce63c53_prof);

        
        $__internal_cdc539a03ad7a22e907670dc7f4faed0b56efeaeeaa6c49b32d748f9f8e2aae4->leave($__internal_cdc539a03ad7a22e907670dc7f4faed0b56efeaeeaa6c49b32d748f9f8e2aae4_prof);

    }

    // line 55
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_9f97b440a0658aac801b995ee3dcf67815b756895df9abe49896d085bb02410d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f97b440a0658aac801b995ee3dcf67815b756895df9abe49896d085bb02410d->enter($__internal_9f97b440a0658aac801b995ee3dcf67815b756895df9abe49896d085bb02410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        $__internal_71ee522dcc006a20d2d40c4d34898cdd1c2163117b3ddfc8fa0d91692b07489d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ee522dcc006a20d2d40c4d34898cdd1c2163117b3ddfc8fa0d91692b07489d->enter($__internal_71ee522dcc006a20d2d40c4d34898cdd1c2163117b3ddfc8fa0d91692b07489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

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
                                <!--  path(profile,{id:row.object.id})  -->
                                <td>
                                <!--  View Post  -->
                                    <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar Post\"></i>
                                    </a>
                                    
                                    <!--  Delete Post  -->
                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletePost", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-trash\" title=\"Eliminar Post\"></i>
                                    </a>

                                    <!--  Edit Post  -->
                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editPost", array("id" => $this->getAttribute($this->getAttribute($context["row"], "object", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"glyphicon glyphicon-edit\" title=\"Editar Post\"></i>
                                    </a>                                                                    

                                </td>

                                ";
                // line 80
                $this->displayBlock('tableBodyMassActionsColumn', $context, $blocks);
                // line 83
                echo "                                ";
                $this->displayBlock('tableBodyStdColumns', $context, $blocks);
                // line 88
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
            // line 90
            echo "                    ";
        }
        // line 91
        echo "                ";
        
        $__internal_71ee522dcc006a20d2d40c4d34898cdd1c2163117b3ddfc8fa0d91692b07489d->leave($__internal_71ee522dcc006a20d2d40c4d34898cdd1c2163117b3ddfc8fa0d91692b07489d_prof);

        
        $__internal_9f97b440a0658aac801b995ee3dcf67815b756895df9abe49896d085bb02410d->leave($__internal_9f97b440a0658aac801b995ee3dcf67815b756895df9abe49896d085bb02410d_prof);

    }

    // line 80
    public function block_tableBodyMassActionsColumn($context, array $blocks = array())
    {
        $__internal_ee92f6b6d33615006db497c40d41ffc1f08308331e78b676f75ec724ecca3c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee92f6b6d33615006db497c40d41ffc1f08308331e78b676f75ec724ecca3c90->enter($__internal_ee92f6b6d33615006db497c40d41ffc1f08308331e78b676f75ec724ecca3c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        $__internal_4595f628df8c51717233ccfef30b29b55cef4f4d0eeea604387b14a5e05118b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4595f628df8c51717233ccfef30b29b55cef4f4d0eeea604387b14a5e05118b0->enter($__internal_4595f628df8c51717233ccfef30b29b55cef4f4d0eeea604387b14a5e05118b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyMassActionsColumn"));

        // line 81
        echo "                                    ";
        $this->displayBlock("parent_tableBodyMassActionsColumn", $context, $blocks);
        echo "
                                ";
        
        $__internal_4595f628df8c51717233ccfef30b29b55cef4f4d0eeea604387b14a5e05118b0->leave($__internal_4595f628df8c51717233ccfef30b29b55cef4f4d0eeea604387b14a5e05118b0_prof);

        
        $__internal_ee92f6b6d33615006db497c40d41ffc1f08308331e78b676f75ec724ecca3c90->leave($__internal_ee92f6b6d33615006db497c40d41ffc1f08308331e78b676f75ec724ecca3c90_prof);

    }

    // line 83
    public function block_tableBodyStdColumns($context, array $blocks = array())
    {
        $__internal_4b858f6e17a03ee7b7b96f959c3c6df47064a3ef62450bbeebd7bb9ead140e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b858f6e17a03ee7b7b96f959c3c6df47064a3ef62450bbeebd7bb9ead140e95->enter($__internal_4b858f6e17a03ee7b7b96f959c3c6df47064a3ef62450bbeebd7bb9ead140e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        $__internal_133a01c10435ec6f8d7176c8a04c9487d55c2979f2531c527dc67b001935e78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133a01c10435ec6f8d7176c8a04c9487d55c2979f2531c527dc67b001935e78e->enter($__internal_133a01c10435ec6f8d7176c8a04c9487d55c2979f2531c527dc67b001935e78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBodyStdColumns"));

        // line 84
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
            // line 85
            echo "                                        ";
            $this->loadTemplate("@AppBundle/Resources/views/table/_columnCell.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 85)->display($context);
            // line 86
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
        // line 87
        echo "                                ";
        
        $__internal_133a01c10435ec6f8d7176c8a04c9487d55c2979f2531c527dc67b001935e78e->leave($__internal_133a01c10435ec6f8d7176c8a04c9487d55c2979f2531c527dc67b001935e78e_prof);

        
        $__internal_4b858f6e17a03ee7b7b96f959c3c6df47064a3ef62450bbeebd7bb9ead140e95->leave($__internal_4b858f6e17a03ee7b7b96f959c3c6df47064a3ef62450bbeebd7bb9ead140e95_prof);

    }

    // line 96
    public function block_tableStats($context, array $blocks = array())
    {
        $__internal_9a0aa1b631d9a13d23b0338f4368ec3d85b91e382c4390daee469415c2a32666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0aa1b631d9a13d23b0338f4368ec3d85b91e382c4390daee469415c2a32666->enter($__internal_9a0aa1b631d9a13d23b0338f4368ec3d85b91e382c4390daee469415c2a32666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        $__internal_f3866bd1af1a77c07600a7580668d766102f6417d7bdafc5a49532361ae8bd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3866bd1af1a77c07600a7580668d766102f6417d7bdafc5a49532361ae8bd28->enter($__internal_f3866bd1af1a77c07600a7580668d766102f6417d7bdafc5a49532361ae8bd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStats"));

        // line 97
        echo "            <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", array()), "html", null, true);
        echo "_stats\">
                ";
        // line 98
        $this->displayBlock('tableStatsAjax', $context, $blocks);
        // line 101
        echo "            </div>
        ";
        
        $__internal_f3866bd1af1a77c07600a7580668d766102f6417d7bdafc5a49532361ae8bd28->leave($__internal_f3866bd1af1a77c07600a7580668d766102f6417d7bdafc5a49532361ae8bd28_prof);

        
        $__internal_9a0aa1b631d9a13d23b0338f4368ec3d85b91e382c4390daee469415c2a32666->leave($__internal_9a0aa1b631d9a13d23b0338f4368ec3d85b91e382c4390daee469415c2a32666_prof);

    }

    // line 98
    public function block_tableStatsAjax($context, array $blocks = array())
    {
        $__internal_5f1c5a4b3aeca07731ef297ffc77fc86380ae4e08feb98f78e1f1e7685d81604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1c5a4b3aeca07731ef297ffc77fc86380ae4e08feb98f78e1f1e7685d81604->enter($__internal_5f1c5a4b3aeca07731ef297ffc77fc86380ae4e08feb98f78e1f1e7685d81604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        $__internal_1e79207bd19e6aca94dfbf09a196eb5bac3fa230338e83d01304430517c19c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e79207bd19e6aca94dfbf09a196eb5bac3fa230338e83d01304430517c19c17->enter($__internal_1e79207bd19e6aca94dfbf09a196eb5bac3fa230338e83d01304430517c19c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableStatsAjax"));

        // line 99
        echo "                    ";
        $this->loadTemplate("@AppBundle/Resources/views/table/_stats.html.twig", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", 99)->display($context);
        // line 100
        echo "                ";
        
        $__internal_1e79207bd19e6aca94dfbf09a196eb5bac3fa230338e83d01304430517c19c17->leave($__internal_1e79207bd19e6aca94dfbf09a196eb5bac3fa230338e83d01304430517c19c17_prof);

        
        $__internal_5f1c5a4b3aeca07731ef297ffc77fc86380ae4e08feb98f78e1f1e7685d81604->leave($__internal_5f1c5a4b3aeca07731ef297ffc77fc86380ae4e08feb98f78e1f1e7685d81604_prof);

    }

    // line 105
    public function block_tableAfterPanel($context, array $blocks = array())
    {
        $__internal_3d3fd76f547c78010b5b62bd1f34640c330bc47a9b01e59160caf529c11dbc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3fd76f547c78010b5b62bd1f34640c330bc47a9b01e59160caf529c11dbc50->enter($__internal_3d3fd76f547c78010b5b62bd1f34640c330bc47a9b01e59160caf529c11dbc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        $__internal_fe55bcaf50dab566111d32d68d7637bdf4c483bb95af21c2d2e3a1272356bdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe55bcaf50dab566111d32d68d7637bdf4c483bb95af21c2d2e3a1272356bdda->enter($__internal_fe55bcaf50dab566111d32d68d7637bdf4c483bb95af21c2d2e3a1272356bdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableAfterPanel"));

        
        $__internal_fe55bcaf50dab566111d32d68d7637bdf4c483bb95af21c2d2e3a1272356bdda->leave($__internal_fe55bcaf50dab566111d32d68d7637bdf4c483bb95af21c2d2e3a1272356bdda_prof);

        
        $__internal_3d3fd76f547c78010b5b62bd1f34640c330bc47a9b01e59160caf529c11dbc50->leave($__internal_3d3fd76f547c78010b5b62bd1f34640c330bc47a9b01e59160caf529c11dbc50_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 105,  627 => 100,  624 => 99,  615 => 98,  604 => 101,  602 => 98,  597 => 97,  588 => 96,  578 => 87,  564 => 86,  561 => 85,  543 => 84,  534 => 83,  521 => 81,  512 => 80,  502 => 91,  499 => 90,  484 => 88,  481 => 83,  479 => 80,  470 => 74,  462 => 69,  454 => 64,  447 => 59,  429 => 58,  427 => 57,  424 => 56,  415 => 55,  405 => 49,  391 => 48,  388 => 47,  370 => 46,  361 => 45,  348 => 43,  339 => 42,  329 => 38,  315 => 37,  312 => 36,  294 => 35,  285 => 34,  272 => 32,  263 => 31,  253 => 52,  249 => 50,  246 => 45,  244 => 42,  241 => 41,  239 => 40,  236 => 39,  233 => 34,  231 => 31,  228 => 30,  219 => 29,  208 => 22,  199 => 21,  189 => 18,  186 => 17,  177 => 16,  166 => 19,  164 => 16,  159 => 15,  150 => 14,  133 => 9,  121 => 107,  119 => 105,  115 => 103,  113 => 96,  107 => 92,  105 => 55,  101 => 54,  98 => 53,  96 => 29,  91 => 27,  86 => 24,  83 => 21,  81 => 14,  76 => 11,  74 => 9,  70 => 8,  14 => 2,);
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
                                <!--  path(profile,{id:row.object.id})  -->
                                <td>
                                <!--  View Post  -->
                                    <a href=\"{{ path('detail',{id:row.object.id}) }}\">
                                        <i class=\"glyphicon glyphicon-search\" title=\"Vizualizar Post\"></i>
                                    </a>
                                    
                                    <!--  Delete Post  -->
                                    <a href=\"{{ path('deletePost',{id:row.object.id}) }}\">
                                        <i class=\"glyphicon glyphicon-trash\" title=\"Eliminar Post\"></i>
                                    </a>

                                    <!--  Edit Post  -->
                                    <a href=\"{{ path('editPost',{id:row.object.id}) }}\">
                                        <i class=\"glyphicon glyphicon-edit\" title=\"Editar Post\"></i>
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
", "@AppBundle/Resources/views/table_post/table_post_logueado.html.twig", "/home/leandro/my_project_name/src/AppBundle/Resources/views/table_post/table_post_logueado.html.twig");
    }
}
