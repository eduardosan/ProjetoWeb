<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4474f74cada0a5e75a6dd5b3cdda12cf897c90f75a32f1281201f0c9fa22ecb9 extends Twig_Template
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
        $__internal_4336d74aabaf4b2a399c0e0e3956031f0bd7f65de2fb598402d3a9c8f200a8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4336d74aabaf4b2a399c0e0e3956031f0bd7f65de2fb598402d3a9c8f200a8af->enter($__internal_4336d74aabaf4b2a399c0e0e3956031f0bd7f65de2fb598402d3a9c8f200a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_14bbb14a6558df87b9c21967483f8b6ae9749a121b08fdbf5a8e27d588dff7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bbb14a6558df87b9c21967483f8b6ae9749a121b08fdbf5a8e27d588dff7f5->enter($__internal_14bbb14a6558df87b9c21967483f8b6ae9749a121b08fdbf5a8e27d588dff7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4336d74aabaf4b2a399c0e0e3956031f0bd7f65de2fb598402d3a9c8f200a8af->leave($__internal_4336d74aabaf4b2a399c0e0e3956031f0bd7f65de2fb598402d3a9c8f200a8af_prof);

        
        $__internal_14bbb14a6558df87b9c21967483f8b6ae9749a121b08fdbf5a8e27d588dff7f5->leave($__internal_14bbb14a6558df87b9c21967483f8b6ae9749a121b08fdbf5a8e27d588dff7f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
