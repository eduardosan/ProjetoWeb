<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35857ee1311a28a3bc68d6cb688f4573a483378ff1d1ae838e53d4742bfcaab extends Twig_Template
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
        $__internal_f81692d425e736b1b27b4436398ea823cb394c40613c03b3e248db39882957bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81692d425e736b1b27b4436398ea823cb394c40613c03b3e248db39882957bc->enter($__internal_f81692d425e736b1b27b4436398ea823cb394c40613c03b3e248db39882957bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f58931d1cada86e38574ebc85a00160d30cfbca53ed70d59fe6aaa805f3893e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58931d1cada86e38574ebc85a00160d30cfbca53ed70d59fe6aaa805f3893e6->enter($__internal_f58931d1cada86e38574ebc85a00160d30cfbca53ed70d59fe6aaa805f3893e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f81692d425e736b1b27b4436398ea823cb394c40613c03b3e248db39882957bc->leave($__internal_f81692d425e736b1b27b4436398ea823cb394c40613c03b3e248db39882957bc_prof);

        
        $__internal_f58931d1cada86e38574ebc85a00160d30cfbca53ed70d59fe6aaa805f3893e6->leave($__internal_f58931d1cada86e38574ebc85a00160d30cfbca53ed70d59fe6aaa805f3893e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
