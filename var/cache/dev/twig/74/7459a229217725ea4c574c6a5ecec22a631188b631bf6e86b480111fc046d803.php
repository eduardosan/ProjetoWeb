<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_cfbf5d32104e3cee93b1a06f1ba60bc7ac88f23dcb1b7ec7b000ebc53d2fc904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbf5d32104e3cee93b1a06f1ba60bc7ac88f23dcb1b7ec7b000ebc53d2fc904->enter($__internal_cfbf5d32104e3cee93b1a06f1ba60bc7ac88f23dcb1b7ec7b000ebc53d2fc904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0f4a0f23e109f5ed8f71bdfd8388b66c1c323fe3875fb5b4bdd82fc760401c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4a0f23e109f5ed8f71bdfd8388b66c1c323fe3875fb5b4bdd82fc760401c6b->enter($__internal_0f4a0f23e109f5ed8f71bdfd8388b66c1c323fe3875fb5b4bdd82fc760401c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cfbf5d32104e3cee93b1a06f1ba60bc7ac88f23dcb1b7ec7b000ebc53d2fc904->leave($__internal_cfbf5d32104e3cee93b1a06f1ba60bc7ac88f23dcb1b7ec7b000ebc53d2fc904_prof);

        
        $__internal_0f4a0f23e109f5ed8f71bdfd8388b66c1c323fe3875fb5b4bdd82fc760401c6b->leave($__internal_0f4a0f23e109f5ed8f71bdfd8388b66c1c323fe3875fb5b4bdd82fc760401c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
