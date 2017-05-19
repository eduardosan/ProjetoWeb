<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2047749632772e78fc479fb789b20bfbae028baf86d5e829db4bd4947a1e2e3 extends Twig_Template
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
        $__internal_48fd9ce80ec9c64af6b4d3e8d1c4732b81f1f2fc7825064769d4a7c87be9b2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fd9ce80ec9c64af6b4d3e8d1c4732b81f1f2fc7825064769d4a7c87be9b2d2->enter($__internal_48fd9ce80ec9c64af6b4d3e8d1c4732b81f1f2fc7825064769d4a7c87be9b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bc429c84efbb3f294882b8bacca357cb0959d54f6925e67591f5c516966a7779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc429c84efbb3f294882b8bacca357cb0959d54f6925e67591f5c516966a7779->enter($__internal_bc429c84efbb3f294882b8bacca357cb0959d54f6925e67591f5c516966a7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_48fd9ce80ec9c64af6b4d3e8d1c4732b81f1f2fc7825064769d4a7c87be9b2d2->leave($__internal_48fd9ce80ec9c64af6b4d3e8d1c4732b81f1f2fc7825064769d4a7c87be9b2d2_prof);

        
        $__internal_bc429c84efbb3f294882b8bacca357cb0959d54f6925e67591f5c516966a7779->leave($__internal_bc429c84efbb3f294882b8bacca357cb0959d54f6925e67591f5c516966a7779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
