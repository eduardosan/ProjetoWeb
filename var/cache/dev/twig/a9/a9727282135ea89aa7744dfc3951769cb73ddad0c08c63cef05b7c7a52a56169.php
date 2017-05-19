<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a850b9d28cdb48dc986b07263c05526f4999b31edacc9ce6e365ca366872178 extends Twig_Template
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
        $__internal_9964df9187fcb664f26e7b135ffd83bc8918a0c013df377ec8b9bbcca8a7ef5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9964df9187fcb664f26e7b135ffd83bc8918a0c013df377ec8b9bbcca8a7ef5f->enter($__internal_9964df9187fcb664f26e7b135ffd83bc8918a0c013df377ec8b9bbcca8a7ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8f88c9ca1d733ba51120bb0ef71cb65a53047525f4e5ce7d6563993287d1dc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f88c9ca1d733ba51120bb0ef71cb65a53047525f4e5ce7d6563993287d1dc23->enter($__internal_8f88c9ca1d733ba51120bb0ef71cb65a53047525f4e5ce7d6563993287d1dc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9964df9187fcb664f26e7b135ffd83bc8918a0c013df377ec8b9bbcca8a7ef5f->leave($__internal_9964df9187fcb664f26e7b135ffd83bc8918a0c013df377ec8b9bbcca8a7ef5f_prof);

        
        $__internal_8f88c9ca1d733ba51120bb0ef71cb65a53047525f4e5ce7d6563993287d1dc23->leave($__internal_8f88c9ca1d733ba51120bb0ef71cb65a53047525f4e5ce7d6563993287d1dc23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
