<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd9138c75d34683d1be6dab69d393fcdf5948f03f5be714a6a2d77b604181883 extends Twig_Template
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
        $__internal_bf355a8180b404c6fa66f0c84ef8c7ac52f877b644174e96763518dba769f700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf355a8180b404c6fa66f0c84ef8c7ac52f877b644174e96763518dba769f700->enter($__internal_bf355a8180b404c6fa66f0c84ef8c7ac52f877b644174e96763518dba769f700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_aadd8d32bc70a4bca52ea3d36b285bc18b51d0f1f5bd4481356227df06264de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadd8d32bc70a4bca52ea3d36b285bc18b51d0f1f5bd4481356227df06264de0->enter($__internal_aadd8d32bc70a4bca52ea3d36b285bc18b51d0f1f5bd4481356227df06264de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bf355a8180b404c6fa66f0c84ef8c7ac52f877b644174e96763518dba769f700->leave($__internal_bf355a8180b404c6fa66f0c84ef8c7ac52f877b644174e96763518dba769f700_prof);

        
        $__internal_aadd8d32bc70a4bca52ea3d36b285bc18b51d0f1f5bd4481356227df06264de0->leave($__internal_aadd8d32bc70a4bca52ea3d36b285bc18b51d0f1f5bd4481356227df06264de0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
