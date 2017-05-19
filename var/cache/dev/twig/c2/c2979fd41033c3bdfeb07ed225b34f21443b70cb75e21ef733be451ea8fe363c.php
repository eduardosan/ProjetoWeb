<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d044b5b9fa6cb4e2bc707333177a330c48f7d931749ce4128e14fbce038de2c3 extends Twig_Template
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
        $__internal_4461c2cdbfd1d3a6197dc23adc9133f2c26ba27ecd9fcd0ce153963f96c4a4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4461c2cdbfd1d3a6197dc23adc9133f2c26ba27ecd9fcd0ce153963f96c4a4e7->enter($__internal_4461c2cdbfd1d3a6197dc23adc9133f2c26ba27ecd9fcd0ce153963f96c4a4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ebe3a795577af4f106494f76024c722242ff8c574e70ad724be1c86725997f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe3a795577af4f106494f76024c722242ff8c574e70ad724be1c86725997f02->enter($__internal_ebe3a795577af4f106494f76024c722242ff8c574e70ad724be1c86725997f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4461c2cdbfd1d3a6197dc23adc9133f2c26ba27ecd9fcd0ce153963f96c4a4e7->leave($__internal_4461c2cdbfd1d3a6197dc23adc9133f2c26ba27ecd9fcd0ce153963f96c4a4e7_prof);

        
        $__internal_ebe3a795577af4f106494f76024c722242ff8c574e70ad724be1c86725997f02->leave($__internal_ebe3a795577af4f106494f76024c722242ff8c574e70ad724be1c86725997f02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
