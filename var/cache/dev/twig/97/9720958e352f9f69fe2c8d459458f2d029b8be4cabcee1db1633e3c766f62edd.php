<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb28fb8c716cfcce34dc23b36baede0f63e36cc06a9ea0641eea296cd667648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb28fb8c716cfcce34dc23b36baede0f63e36cc06a9ea0641eea296cd667648->enter($__internal_0fb28fb8c716cfcce34dc23b36baede0f63e36cc06a9ea0641eea296cd667648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_91ff033f781d58cb4577c472f9afdc7f23b6afeb447377ce46c6f2869970093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ff033f781d58cb4577c472f9afdc7f23b6afeb447377ce46c6f2869970093d->enter($__internal_91ff033f781d58cb4577c472f9afdc7f23b6afeb447377ce46c6f2869970093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb28fb8c716cfcce34dc23b36baede0f63e36cc06a9ea0641eea296cd667648->leave($__internal_0fb28fb8c716cfcce34dc23b36baede0f63e36cc06a9ea0641eea296cd667648_prof);

        
        $__internal_91ff033f781d58cb4577c472f9afdc7f23b6afeb447377ce46c6f2869970093d->leave($__internal_91ff033f781d58cb4577c472f9afdc7f23b6afeb447377ce46c6f2869970093d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e35e6496cc6fdff111747fd92400ee7f5f22c5c739aa070bd21e2d4f99f3f366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35e6496cc6fdff111747fd92400ee7f5f22c5c739aa070bd21e2d4f99f3f366->enter($__internal_e35e6496cc6fdff111747fd92400ee7f5f22c5c739aa070bd21e2d4f99f3f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9faae57e558d8b8e2fc280a37fd6979946aaaaf368b1e95164b060ca9c8b399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9faae57e558d8b8e2fc280a37fd6979946aaaaf368b1e95164b060ca9c8b399->enter($__internal_e9faae57e558d8b8e2fc280a37fd6979946aaaaf368b1e95164b060ca9c8b399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e9faae57e558d8b8e2fc280a37fd6979946aaaaf368b1e95164b060ca9c8b399->leave($__internal_e9faae57e558d8b8e2fc280a37fd6979946aaaaf368b1e95164b060ca9c8b399_prof);

        
        $__internal_e35e6496cc6fdff111747fd92400ee7f5f22c5c739aa070bd21e2d4f99f3f366->leave($__internal_e35e6496cc6fdff111747fd92400ee7f5f22c5c739aa070bd21e2d4f99f3f366_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06689a3167ced4d2c2ebdeac85807674c38749f18c2413a8bf13f29b332c5ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06689a3167ced4d2c2ebdeac85807674c38749f18c2413a8bf13f29b332c5ad0->enter($__internal_06689a3167ced4d2c2ebdeac85807674c38749f18c2413a8bf13f29b332c5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b60f0ee1bdb8cd8d1c0ef1cd3e474af2c4de89d3ac25fbf4bda966e25f00e6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60f0ee1bdb8cd8d1c0ef1cd3e474af2c4de89d3ac25fbf4bda966e25f00e6f7->enter($__internal_b60f0ee1bdb8cd8d1c0ef1cd3e474af2c4de89d3ac25fbf4bda966e25f00e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b60f0ee1bdb8cd8d1c0ef1cd3e474af2c4de89d3ac25fbf4bda966e25f00e6f7->leave($__internal_b60f0ee1bdb8cd8d1c0ef1cd3e474af2c4de89d3ac25fbf4bda966e25f00e6f7_prof);

        
        $__internal_06689a3167ced4d2c2ebdeac85807674c38749f18c2413a8bf13f29b332c5ad0->leave($__internal_06689a3167ced4d2c2ebdeac85807674c38749f18c2413a8bf13f29b332c5ad0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75c2cdaa3b43fd4f5be77fc14e4a5c4cadc316cac2293b20a7c225487e6e5099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c2cdaa3b43fd4f5be77fc14e4a5c4cadc316cac2293b20a7c225487e6e5099->enter($__internal_75c2cdaa3b43fd4f5be77fc14e4a5c4cadc316cac2293b20a7c225487e6e5099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_987e41ecb7cf44dd31b3e77e061a685fbe12d60d9b4e0ecf011c8b2da6a1bc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987e41ecb7cf44dd31b3e77e061a685fbe12d60d9b4e0ecf011c8b2da6a1bc94->enter($__internal_987e41ecb7cf44dd31b3e77e061a685fbe12d60d9b4e0ecf011c8b2da6a1bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_987e41ecb7cf44dd31b3e77e061a685fbe12d60d9b4e0ecf011c8b2da6a1bc94->leave($__internal_987e41ecb7cf44dd31b3e77e061a685fbe12d60d9b4e0ecf011c8b2da6a1bc94_prof);

        
        $__internal_75c2cdaa3b43fd4f5be77fc14e4a5c4cadc316cac2293b20a7c225487e6e5099->leave($__internal_75c2cdaa3b43fd4f5be77fc14e4a5c4cadc316cac2293b20a7c225487e6e5099_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/diogo/Diogo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
