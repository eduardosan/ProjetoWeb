<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3f4c9cade32f53675f5d1507ee1007bd799aa5f57b44c2fc2f6931c09424bd7f extends Twig_Template
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
        $__internal_13f33db3b1b4948cce360495792b79f6603840e83bfa98890ba20383887ab638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f33db3b1b4948cce360495792b79f6603840e83bfa98890ba20383887ab638->enter($__internal_13f33db3b1b4948cce360495792b79f6603840e83bfa98890ba20383887ab638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f2a0fffa3600ed728d2efd35133cd7ea1d853621aa6f9d3c34744994cc65dd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a0fffa3600ed728d2efd35133cd7ea1d853621aa6f9d3c34744994cc65dd97->enter($__internal_f2a0fffa3600ed728d2efd35133cd7ea1d853621aa6f9d3c34744994cc65dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_13f33db3b1b4948cce360495792b79f6603840e83bfa98890ba20383887ab638->leave($__internal_13f33db3b1b4948cce360495792b79f6603840e83bfa98890ba20383887ab638_prof);

        
        $__internal_f2a0fffa3600ed728d2efd35133cd7ea1d853621aa6f9d3c34744994cc65dd97->leave($__internal_f2a0fffa3600ed728d2efd35133cd7ea1d853621aa6f9d3c34744994cc65dd97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
