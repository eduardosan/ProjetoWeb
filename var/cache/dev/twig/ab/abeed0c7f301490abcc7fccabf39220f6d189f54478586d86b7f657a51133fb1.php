<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_d3c61d7ce024de9ada0ed023b87d17e85c4c46eb041d8e1013517ffb7f6d61a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c61d7ce024de9ada0ed023b87d17e85c4c46eb041d8e1013517ffb7f6d61a6->enter($__internal_d3c61d7ce024de9ada0ed023b87d17e85c4c46eb041d8e1013517ffb7f6d61a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_abcf20e021c4312d4ee3424be5bf834e92a420fd657125bbf3cfb630ef3cd515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf20e021c4312d4ee3424be5bf834e92a420fd657125bbf3cfb630ef3cd515->enter($__internal_abcf20e021c4312d4ee3424be5bf834e92a420fd657125bbf3cfb630ef3cd515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d3c61d7ce024de9ada0ed023b87d17e85c4c46eb041d8e1013517ffb7f6d61a6->leave($__internal_d3c61d7ce024de9ada0ed023b87d17e85c4c46eb041d8e1013517ffb7f6d61a6_prof);

        
        $__internal_abcf20e021c4312d4ee3424be5bf834e92a420fd657125bbf3cfb630ef3cd515->leave($__internal_abcf20e021c4312d4ee3424be5bf834e92a420fd657125bbf3cfb630ef3cd515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
