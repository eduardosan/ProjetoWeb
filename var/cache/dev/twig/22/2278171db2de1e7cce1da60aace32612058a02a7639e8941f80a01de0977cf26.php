<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a36dad82158789959d9353abb049e3bb361e6d82c87d5cbb9dae18e8d3c92758 extends Twig_Template
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
        $__internal_609c4332bf50472e783e438855ec8c7a2eacc58d4f258c329387cf093d7983d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609c4332bf50472e783e438855ec8c7a2eacc58d4f258c329387cf093d7983d0->enter($__internal_609c4332bf50472e783e438855ec8c7a2eacc58d4f258c329387cf093d7983d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ab2ccbeee43156014e22aff925c3feee85c222eca73142463874f93e1184dbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2ccbeee43156014e22aff925c3feee85c222eca73142463874f93e1184dbc5->enter($__internal_ab2ccbeee43156014e22aff925c3feee85c222eca73142463874f93e1184dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_609c4332bf50472e783e438855ec8c7a2eacc58d4f258c329387cf093d7983d0->leave($__internal_609c4332bf50472e783e438855ec8c7a2eacc58d4f258c329387cf093d7983d0_prof);

        
        $__internal_ab2ccbeee43156014e22aff925c3feee85c222eca73142463874f93e1184dbc5->leave($__internal_ab2ccbeee43156014e22aff925c3feee85c222eca73142463874f93e1184dbc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
