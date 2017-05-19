<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b899594e1a4af6ec732f205dc84f98eb52b7baa8fd2d88f5bc1115b4936d23ad extends Twig_Template
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
        $__internal_35b98a4fcd58020a4308b4ee7b52ae80f6aca4a0e5d3fb6c73265c5ef07a1dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b98a4fcd58020a4308b4ee7b52ae80f6aca4a0e5d3fb6c73265c5ef07a1dc4->enter($__internal_35b98a4fcd58020a4308b4ee7b52ae80f6aca4a0e5d3fb6c73265c5ef07a1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_81bc7cffd8454ed44cf27a44e7f03123ff8e59e17952ffdd6d62392f4999ddc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bc7cffd8454ed44cf27a44e7f03123ff8e59e17952ffdd6d62392f4999ddc9->enter($__internal_81bc7cffd8454ed44cf27a44e7f03123ff8e59e17952ffdd6d62392f4999ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_35b98a4fcd58020a4308b4ee7b52ae80f6aca4a0e5d3fb6c73265c5ef07a1dc4->leave($__internal_35b98a4fcd58020a4308b4ee7b52ae80f6aca4a0e5d3fb6c73265c5ef07a1dc4_prof);

        
        $__internal_81bc7cffd8454ed44cf27a44e7f03123ff8e59e17952ffdd6d62392f4999ddc9->leave($__internal_81bc7cffd8454ed44cf27a44e7f03123ff8e59e17952ffdd6d62392f4999ddc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
