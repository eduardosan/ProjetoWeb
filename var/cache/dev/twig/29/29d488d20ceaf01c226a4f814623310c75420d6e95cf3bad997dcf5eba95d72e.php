<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76bf0ac26a99047ff29b3263e88c04869e0cc34ac959f274dce6eaae3620a324 extends Twig_Template
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
        $__internal_499eefcf5d49a746da33e6948aa3c1c2dcc2eedddc0c70702222bf60807238d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499eefcf5d49a746da33e6948aa3c1c2dcc2eedddc0c70702222bf60807238d8->enter($__internal_499eefcf5d49a746da33e6948aa3c1c2dcc2eedddc0c70702222bf60807238d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4aced567b8c4854e19638d47769076e350ba630ddf8ab9b3633f6e30822ee63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aced567b8c4854e19638d47769076e350ba630ddf8ab9b3633f6e30822ee63a->enter($__internal_4aced567b8c4854e19638d47769076e350ba630ddf8ab9b3633f6e30822ee63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_499eefcf5d49a746da33e6948aa3c1c2dcc2eedddc0c70702222bf60807238d8->leave($__internal_499eefcf5d49a746da33e6948aa3c1c2dcc2eedddc0c70702222bf60807238d8_prof);

        
        $__internal_4aced567b8c4854e19638d47769076e350ba630ddf8ab9b3633f6e30822ee63a->leave($__internal_4aced567b8c4854e19638d47769076e350ba630ddf8ab9b3633f6e30822ee63a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
