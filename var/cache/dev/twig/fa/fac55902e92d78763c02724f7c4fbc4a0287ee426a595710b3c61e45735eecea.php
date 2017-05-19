<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3411c5459fefde02e42888849cf135634fc31cb04d7e7c42d1794b2b3424f2ec extends Twig_Template
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
        $__internal_4eb5dbce331259ccaa02cdbfe1b3e5b3318e9d5e1e6fec99f728fa3a82367325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb5dbce331259ccaa02cdbfe1b3e5b3318e9d5e1e6fec99f728fa3a82367325->enter($__internal_4eb5dbce331259ccaa02cdbfe1b3e5b3318e9d5e1e6fec99f728fa3a82367325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e0779c61159b00fd2743fc4c6f3b3756ac691e155146be0d896f9190908f9597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0779c61159b00fd2743fc4c6f3b3756ac691e155146be0d896f9190908f9597->enter($__internal_e0779c61159b00fd2743fc4c6f3b3756ac691e155146be0d896f9190908f9597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4eb5dbce331259ccaa02cdbfe1b3e5b3318e9d5e1e6fec99f728fa3a82367325->leave($__internal_4eb5dbce331259ccaa02cdbfe1b3e5b3318e9d5e1e6fec99f728fa3a82367325_prof);

        
        $__internal_e0779c61159b00fd2743fc4c6f3b3756ac691e155146be0d896f9190908f9597->leave($__internal_e0779c61159b00fd2743fc4c6f3b3756ac691e155146be0d896f9190908f9597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
