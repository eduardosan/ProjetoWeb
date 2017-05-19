<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_67641477698b6eea2e6bbfd3a74b45911356d91d77869b652912de882954c17f extends Twig_Template
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
        $__internal_46b63bc89faee28b144ae5cdecd67807068bc3799dbb9034edb6998a1f56e7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b63bc89faee28b144ae5cdecd67807068bc3799dbb9034edb6998a1f56e7b6->enter($__internal_46b63bc89faee28b144ae5cdecd67807068bc3799dbb9034edb6998a1f56e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fac3a99c40555bbd1196255964b06fb3c264e03585f19403166c7bef89af1f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac3a99c40555bbd1196255964b06fb3c264e03585f19403166c7bef89af1f82->enter($__internal_fac3a99c40555bbd1196255964b06fb3c264e03585f19403166c7bef89af1f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_46b63bc89faee28b144ae5cdecd67807068bc3799dbb9034edb6998a1f56e7b6->leave($__internal_46b63bc89faee28b144ae5cdecd67807068bc3799dbb9034edb6998a1f56e7b6_prof);

        
        $__internal_fac3a99c40555bbd1196255964b06fb3c264e03585f19403166c7bef89af1f82->leave($__internal_fac3a99c40555bbd1196255964b06fb3c264e03585f19403166c7bef89af1f82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
