<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f95cc52884f1e1fc3f59cf29d804ae00326e9c7855e29cd2cb9bf7f2b0bd4ed extends Twig_Template
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
        $__internal_eadb30e163c5f1cac4d4058fa73375aad4f5914e0427577a17ca2e32c3598a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadb30e163c5f1cac4d4058fa73375aad4f5914e0427577a17ca2e32c3598a0f->enter($__internal_eadb30e163c5f1cac4d4058fa73375aad4f5914e0427577a17ca2e32c3598a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a4a4623e41a62dcc65b5644fa05ac27ee2d1d300c70f063b9a3fb72a496b8dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a4623e41a62dcc65b5644fa05ac27ee2d1d300c70f063b9a3fb72a496b8dd8->enter($__internal_a4a4623e41a62dcc65b5644fa05ac27ee2d1d300c70f063b9a3fb72a496b8dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eadb30e163c5f1cac4d4058fa73375aad4f5914e0427577a17ca2e32c3598a0f->leave($__internal_eadb30e163c5f1cac4d4058fa73375aad4f5914e0427577a17ca2e32c3598a0f_prof);

        
        $__internal_a4a4623e41a62dcc65b5644fa05ac27ee2d1d300c70f063b9a3fb72a496b8dd8->leave($__internal_a4a4623e41a62dcc65b5644fa05ac27ee2d1d300c70f063b9a3fb72a496b8dd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
