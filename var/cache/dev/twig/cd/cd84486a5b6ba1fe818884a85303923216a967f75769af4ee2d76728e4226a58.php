<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_831d6045f5f7e57b672f77b45a30282bdbdc2f4d734edd3fbfaeb309409bb625 extends Twig_Template
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
        $__internal_4ac59992f8b6eb724536c57b59ad1cc1c5d88942d69bd88f04168b3a3d3b67b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac59992f8b6eb724536c57b59ad1cc1c5d88942d69bd88f04168b3a3d3b67b3->enter($__internal_4ac59992f8b6eb724536c57b59ad1cc1c5d88942d69bd88f04168b3a3d3b67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2a90d96256334077db8c542fd71a839c36f8147e72bd7665e8ce0d9092b74189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a90d96256334077db8c542fd71a839c36f8147e72bd7665e8ce0d9092b74189->enter($__internal_2a90d96256334077db8c542fd71a839c36f8147e72bd7665e8ce0d9092b74189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4ac59992f8b6eb724536c57b59ad1cc1c5d88942d69bd88f04168b3a3d3b67b3->leave($__internal_4ac59992f8b6eb724536c57b59ad1cc1c5d88942d69bd88f04168b3a3d3b67b3_prof);

        
        $__internal_2a90d96256334077db8c542fd71a839c36f8147e72bd7665e8ce0d9092b74189->leave($__internal_2a90d96256334077db8c542fd71a839c36f8147e72bd7665e8ce0d9092b74189_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
