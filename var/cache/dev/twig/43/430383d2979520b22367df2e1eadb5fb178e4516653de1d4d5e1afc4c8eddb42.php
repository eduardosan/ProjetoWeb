<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_31b4dbacaa75b32fe087894727345b3276da107eb281b3d4fdd33195cfe56426 extends Twig_Template
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
        $__internal_5f21cc3ef1c532b372a64cc6efff74f36ca1e37cd9487be7ba51ac6d8c7534d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f21cc3ef1c532b372a64cc6efff74f36ca1e37cd9487be7ba51ac6d8c7534d4->enter($__internal_5f21cc3ef1c532b372a64cc6efff74f36ca1e37cd9487be7ba51ac6d8c7534d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6b064d8c3f5ab7d09460eab6be71121a9a5bc9cbcd1696972be833ad9f65cc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b064d8c3f5ab7d09460eab6be71121a9a5bc9cbcd1696972be833ad9f65cc8d->enter($__internal_6b064d8c3f5ab7d09460eab6be71121a9a5bc9cbcd1696972be833ad9f65cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5f21cc3ef1c532b372a64cc6efff74f36ca1e37cd9487be7ba51ac6d8c7534d4->leave($__internal_5f21cc3ef1c532b372a64cc6efff74f36ca1e37cd9487be7ba51ac6d8c7534d4_prof);

        
        $__internal_6b064d8c3f5ab7d09460eab6be71121a9a5bc9cbcd1696972be833ad9f65cc8d->leave($__internal_6b064d8c3f5ab7d09460eab6be71121a9a5bc9cbcd1696972be833ad9f65cc8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
