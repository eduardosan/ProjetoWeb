<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9da4296c33e4a2507a8266e721232d10f3a1b58beaa68b6875203d4e982a6302 extends Twig_Template
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
        $__internal_c5e8417799d9695e48abe63d69ada3d3a9aee8e694a0d2dcf149c43152059b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e8417799d9695e48abe63d69ada3d3a9aee8e694a0d2dcf149c43152059b22->enter($__internal_c5e8417799d9695e48abe63d69ada3d3a9aee8e694a0d2dcf149c43152059b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f07fc36ba13e54a62edff749325ed2e66d0f31e68a82f5dd36039e00dda330c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07fc36ba13e54a62edff749325ed2e66d0f31e68a82f5dd36039e00dda330c4->enter($__internal_f07fc36ba13e54a62edff749325ed2e66d0f31e68a82f5dd36039e00dda330c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c5e8417799d9695e48abe63d69ada3d3a9aee8e694a0d2dcf149c43152059b22->leave($__internal_c5e8417799d9695e48abe63d69ada3d3a9aee8e694a0d2dcf149c43152059b22_prof);

        
        $__internal_f07fc36ba13e54a62edff749325ed2e66d0f31e68a82f5dd36039e00dda330c4->leave($__internal_f07fc36ba13e54a62edff749325ed2e66d0f31e68a82f5dd36039e00dda330c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
