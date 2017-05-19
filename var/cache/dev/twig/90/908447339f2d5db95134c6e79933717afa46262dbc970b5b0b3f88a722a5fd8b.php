<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_ac4b066f36ebeaadee7bfc2b0bc7e8804febfb77f56d07a73e29ca5726ea8e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4b066f36ebeaadee7bfc2b0bc7e8804febfb77f56d07a73e29ca5726ea8e50->enter($__internal_ac4b066f36ebeaadee7bfc2b0bc7e8804febfb77f56d07a73e29ca5726ea8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1c9a9281cc5fa53b0effbf4eb2a30e58a8b4efc8b01a6fa9538a614cec57e46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9a9281cc5fa53b0effbf4eb2a30e58a8b4efc8b01a6fa9538a614cec57e46b->enter($__internal_1c9a9281cc5fa53b0effbf4eb2a30e58a8b4efc8b01a6fa9538a614cec57e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ac4b066f36ebeaadee7bfc2b0bc7e8804febfb77f56d07a73e29ca5726ea8e50->leave($__internal_ac4b066f36ebeaadee7bfc2b0bc7e8804febfb77f56d07a73e29ca5726ea8e50_prof);

        
        $__internal_1c9a9281cc5fa53b0effbf4eb2a30e58a8b4efc8b01a6fa9538a614cec57e46b->leave($__internal_1c9a9281cc5fa53b0effbf4eb2a30e58a8b4efc8b01a6fa9538a614cec57e46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
