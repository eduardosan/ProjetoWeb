<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4cd3c0a952a2a819f5f39c3904ceaf3e68e9f659f876be58dc8bc9275f87ecf5 extends Twig_Template
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
        $__internal_f1fc828f5680f4cb2103176f88c6868f9d0f5b88c7143efaf32c79be3b192a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fc828f5680f4cb2103176f88c6868f9d0f5b88c7143efaf32c79be3b192a99->enter($__internal_f1fc828f5680f4cb2103176f88c6868f9d0f5b88c7143efaf32c79be3b192a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_acf1628a0830f80eeb68a4c91f12f2279e9df76593f2b62803f95cc17921754e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf1628a0830f80eeb68a4c91f12f2279e9df76593f2b62803f95cc17921754e->enter($__internal_acf1628a0830f80eeb68a4c91f12f2279e9df76593f2b62803f95cc17921754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f1fc828f5680f4cb2103176f88c6868f9d0f5b88c7143efaf32c79be3b192a99->leave($__internal_f1fc828f5680f4cb2103176f88c6868f9d0f5b88c7143efaf32c79be3b192a99_prof);

        
        $__internal_acf1628a0830f80eeb68a4c91f12f2279e9df76593f2b62803f95cc17921754e->leave($__internal_acf1628a0830f80eeb68a4c91f12f2279e9df76593f2b62803f95cc17921754e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
