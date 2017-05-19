<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdbb904837e962a19dfec90805919a0d29ba78968ddf9c258e4cd106724570ae extends Twig_Template
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
        $__internal_e16a3eaa9fad1e5386efdf9a1bb316753e068670ba8a2d76bf4e7f8f3ac060a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16a3eaa9fad1e5386efdf9a1bb316753e068670ba8a2d76bf4e7f8f3ac060a2->enter($__internal_e16a3eaa9fad1e5386efdf9a1bb316753e068670ba8a2d76bf4e7f8f3ac060a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e8c0610a96828d794ce97301dea28389878841ad069622e1c3c787fe08a5f87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c0610a96828d794ce97301dea28389878841ad069622e1c3c787fe08a5f87e->enter($__internal_e8c0610a96828d794ce97301dea28389878841ad069622e1c3c787fe08a5f87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e16a3eaa9fad1e5386efdf9a1bb316753e068670ba8a2d76bf4e7f8f3ac060a2->leave($__internal_e16a3eaa9fad1e5386efdf9a1bb316753e068670ba8a2d76bf4e7f8f3ac060a2_prof);

        
        $__internal_e8c0610a96828d794ce97301dea28389878841ad069622e1c3c787fe08a5f87e->leave($__internal_e8c0610a96828d794ce97301dea28389878841ad069622e1c3c787fe08a5f87e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
