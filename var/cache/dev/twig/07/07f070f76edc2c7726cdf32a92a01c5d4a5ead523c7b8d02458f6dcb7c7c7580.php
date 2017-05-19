<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_a069539f53e81d860e82cbdf1be1db451811e23b6363a170484b2271a1278112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a069539f53e81d860e82cbdf1be1db451811e23b6363a170484b2271a1278112->enter($__internal_a069539f53e81d860e82cbdf1be1db451811e23b6363a170484b2271a1278112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_21abf2c9724872180637996fabb7666dc698841991cdc207c7c70975f7488db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21abf2c9724872180637996fabb7666dc698841991cdc207c7c70975f7488db6->enter($__internal_21abf2c9724872180637996fabb7666dc698841991cdc207c7c70975f7488db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a069539f53e81d860e82cbdf1be1db451811e23b6363a170484b2271a1278112->leave($__internal_a069539f53e81d860e82cbdf1be1db451811e23b6363a170484b2271a1278112_prof);

        
        $__internal_21abf2c9724872180637996fabb7666dc698841991cdc207c7c70975f7488db6->leave($__internal_21abf2c9724872180637996fabb7666dc698841991cdc207c7c70975f7488db6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
