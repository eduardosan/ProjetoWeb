<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f5a0aa3844d9600030e9ac735f4890a4de59c0b76ee05fadb7af494b20f0708d extends Twig_Template
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
        $__internal_1f3c22e7d56f6d7f3879ac696488028c27edb4db3807fe07838db5e4f7198157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3c22e7d56f6d7f3879ac696488028c27edb4db3807fe07838db5e4f7198157->enter($__internal_1f3c22e7d56f6d7f3879ac696488028c27edb4db3807fe07838db5e4f7198157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1f35163cf69bb5728cdf05df7f2c612e2c6d811e0b98eedc155c22e9eb6367e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f35163cf69bb5728cdf05df7f2c612e2c6d811e0b98eedc155c22e9eb6367e1->enter($__internal_1f35163cf69bb5728cdf05df7f2c612e2c6d811e0b98eedc155c22e9eb6367e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1f3c22e7d56f6d7f3879ac696488028c27edb4db3807fe07838db5e4f7198157->leave($__internal_1f3c22e7d56f6d7f3879ac696488028c27edb4db3807fe07838db5e4f7198157_prof);

        
        $__internal_1f35163cf69bb5728cdf05df7f2c612e2c6d811e0b98eedc155c22e9eb6367e1->leave($__internal_1f35163cf69bb5728cdf05df7f2c612e2c6d811e0b98eedc155c22e9eb6367e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
