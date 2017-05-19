<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2722426e46d50e4e427c4443770abf2394fe69258026c8e8f06233e47d4f859b extends Twig_Template
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
        $__internal_2a4c70513d0a9eed08ebd4887c457b0f9c89a8a06a53e4be900d1a47f3df9450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4c70513d0a9eed08ebd4887c457b0f9c89a8a06a53e4be900d1a47f3df9450->enter($__internal_2a4c70513d0a9eed08ebd4887c457b0f9c89a8a06a53e4be900d1a47f3df9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4012c21aa6cd01808d2b2e8d92449a026dd0ef2f3cf4a6e61825549582208234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4012c21aa6cd01808d2b2e8d92449a026dd0ef2f3cf4a6e61825549582208234->enter($__internal_4012c21aa6cd01808d2b2e8d92449a026dd0ef2f3cf4a6e61825549582208234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2a4c70513d0a9eed08ebd4887c457b0f9c89a8a06a53e4be900d1a47f3df9450->leave($__internal_2a4c70513d0a9eed08ebd4887c457b0f9c89a8a06a53e4be900d1a47f3df9450_prof);

        
        $__internal_4012c21aa6cd01808d2b2e8d92449a026dd0ef2f3cf4a6e61825549582208234->leave($__internal_4012c21aa6cd01808d2b2e8d92449a026dd0ef2f3cf4a6e61825549582208234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
