<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e8da47c82bdbf50e78aef30bcc8d459ea0b2d9469dfc5aab66ef267e1403fcc8 extends Twig_Template
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
        $__internal_71684dcfb159ab4ef5600ac9de4d25c8598ef4a84158814ac3c597d3243d1ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71684dcfb159ab4ef5600ac9de4d25c8598ef4a84158814ac3c597d3243d1ac3->enter($__internal_71684dcfb159ab4ef5600ac9de4d25c8598ef4a84158814ac3c597d3243d1ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f4e2c0363d7bb942ea1a8fd1da854b9acdf67ec7060ff5ab0533d7089acd97ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2c0363d7bb942ea1a8fd1da854b9acdf67ec7060ff5ab0533d7089acd97ad->enter($__internal_f4e2c0363d7bb942ea1a8fd1da854b9acdf67ec7060ff5ab0533d7089acd97ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_71684dcfb159ab4ef5600ac9de4d25c8598ef4a84158814ac3c597d3243d1ac3->leave($__internal_71684dcfb159ab4ef5600ac9de4d25c8598ef4a84158814ac3c597d3243d1ac3_prof);

        
        $__internal_f4e2c0363d7bb942ea1a8fd1da854b9acdf67ec7060ff5ab0533d7089acd97ad->leave($__internal_f4e2c0363d7bb942ea1a8fd1da854b9acdf67ec7060ff5ab0533d7089acd97ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
