<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_db3716d3f708ad48587c9859687a871f43214f665f4ba4c9523cefb01dc0c217 extends Twig_Template
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
        $__internal_158ab88b34d0eeade46f76b50feaef0dd5aaaef987bc80af1eb532e93d15808f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158ab88b34d0eeade46f76b50feaef0dd5aaaef987bc80af1eb532e93d15808f->enter($__internal_158ab88b34d0eeade46f76b50feaef0dd5aaaef987bc80af1eb532e93d15808f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d291f0f7aee0b9beef9ebd85b0760983bc2347c60d7580f77948a34ffd6df9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d291f0f7aee0b9beef9ebd85b0760983bc2347c60d7580f77948a34ffd6df9d0->enter($__internal_d291f0f7aee0b9beef9ebd85b0760983bc2347c60d7580f77948a34ffd6df9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_158ab88b34d0eeade46f76b50feaef0dd5aaaef987bc80af1eb532e93d15808f->leave($__internal_158ab88b34d0eeade46f76b50feaef0dd5aaaef987bc80af1eb532e93d15808f_prof);

        
        $__internal_d291f0f7aee0b9beef9ebd85b0760983bc2347c60d7580f77948a34ffd6df9d0->leave($__internal_d291f0f7aee0b9beef9ebd85b0760983bc2347c60d7580f77948a34ffd6df9d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
