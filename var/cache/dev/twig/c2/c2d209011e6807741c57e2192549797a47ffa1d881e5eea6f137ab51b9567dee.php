<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_af0d7ffca172acc8290551e8da69fd63cb787d448b705003130cc80d19d83054 extends Twig_Template
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
        $__internal_4d0ce4a92eadb32e6a8e4c28f3ef55273a9544246968ab7e79ca586db7aaf216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0ce4a92eadb32e6a8e4c28f3ef55273a9544246968ab7e79ca586db7aaf216->enter($__internal_4d0ce4a92eadb32e6a8e4c28f3ef55273a9544246968ab7e79ca586db7aaf216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7d3eef47269da2eb0e3e2df12d9f79f9c219a19927533adf2ff45eece361f055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3eef47269da2eb0e3e2df12d9f79f9c219a19927533adf2ff45eece361f055->enter($__internal_7d3eef47269da2eb0e3e2df12d9f79f9c219a19927533adf2ff45eece361f055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4d0ce4a92eadb32e6a8e4c28f3ef55273a9544246968ab7e79ca586db7aaf216->leave($__internal_4d0ce4a92eadb32e6a8e4c28f3ef55273a9544246968ab7e79ca586db7aaf216_prof);

        
        $__internal_7d3eef47269da2eb0e3e2df12d9f79f9c219a19927533adf2ff45eece361f055->leave($__internal_7d3eef47269da2eb0e3e2df12d9f79f9c219a19927533adf2ff45eece361f055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
