<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_abad01326f8e76b08bc9e744943ba51348b7b3806d637527e24ce39dcf3fe8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abad01326f8e76b08bc9e744943ba51348b7b3806d637527e24ce39dcf3fe8fb->enter($__internal_abad01326f8e76b08bc9e744943ba51348b7b3806d637527e24ce39dcf3fe8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_403dcb4b304237958e7eabdd570128daf6d6ab5af14849c217b96024f7d69559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403dcb4b304237958e7eabdd570128daf6d6ab5af14849c217b96024f7d69559->enter($__internal_403dcb4b304237958e7eabdd570128daf6d6ab5af14849c217b96024f7d69559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_abad01326f8e76b08bc9e744943ba51348b7b3806d637527e24ce39dcf3fe8fb->leave($__internal_abad01326f8e76b08bc9e744943ba51348b7b3806d637527e24ce39dcf3fe8fb_prof);

        
        $__internal_403dcb4b304237958e7eabdd570128daf6d6ab5af14849c217b96024f7d69559->leave($__internal_403dcb4b304237958e7eabdd570128daf6d6ab5af14849c217b96024f7d69559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
