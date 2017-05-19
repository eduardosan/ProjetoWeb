<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_91a8934b45f9944e6ad04de6aaf89fffee96696656f72c4601847bdc8ca26d04 extends Twig_Template
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
        $__internal_7fa4a5a4a08ed2bf5819d897ebf7bc2df7811c4b9fdbe5e5d1c4bde309c883e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa4a5a4a08ed2bf5819d897ebf7bc2df7811c4b9fdbe5e5d1c4bde309c883e5->enter($__internal_7fa4a5a4a08ed2bf5819d897ebf7bc2df7811c4b9fdbe5e5d1c4bde309c883e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d2b36037ce5a1f8e62fd56662b50e03708c2a5cd459a1c057f46520ae3efc18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b36037ce5a1f8e62fd56662b50e03708c2a5cd459a1c057f46520ae3efc18f->enter($__internal_d2b36037ce5a1f8e62fd56662b50e03708c2a5cd459a1c057f46520ae3efc18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7fa4a5a4a08ed2bf5819d897ebf7bc2df7811c4b9fdbe5e5d1c4bde309c883e5->leave($__internal_7fa4a5a4a08ed2bf5819d897ebf7bc2df7811c4b9fdbe5e5d1c4bde309c883e5_prof);

        
        $__internal_d2b36037ce5a1f8e62fd56662b50e03708c2a5cd459a1c057f46520ae3efc18f->leave($__internal_d2b36037ce5a1f8e62fd56662b50e03708c2a5cd459a1c057f46520ae3efc18f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
