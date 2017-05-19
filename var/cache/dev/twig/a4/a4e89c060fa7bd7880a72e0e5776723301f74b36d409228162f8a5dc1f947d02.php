<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f6ec7f51f2d51e10ad09ad7f2f36fcd1e8d01be6d18aa5fbd82ae21ca0f6871 extends Twig_Template
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
        $__internal_222263f3d99626c625c7ad08f36bb5f4a769c8c899b4961643f8e635c6b9d07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222263f3d99626c625c7ad08f36bb5f4a769c8c899b4961643f8e635c6b9d07b->enter($__internal_222263f3d99626c625c7ad08f36bb5f4a769c8c899b4961643f8e635c6b9d07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dd1f22aab4925695390b80695c97a842b83a622bff0260194e2c6ec353311075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1f22aab4925695390b80695c97a842b83a622bff0260194e2c6ec353311075->enter($__internal_dd1f22aab4925695390b80695c97a842b83a622bff0260194e2c6ec353311075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_222263f3d99626c625c7ad08f36bb5f4a769c8c899b4961643f8e635c6b9d07b->leave($__internal_222263f3d99626c625c7ad08f36bb5f4a769c8c899b4961643f8e635c6b9d07b_prof);

        
        $__internal_dd1f22aab4925695390b80695c97a842b83a622bff0260194e2c6ec353311075->leave($__internal_dd1f22aab4925695390b80695c97a842b83a622bff0260194e2c6ec353311075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
