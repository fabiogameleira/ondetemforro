<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/address/templates/address-plain.html.twig */
class __TwigTemplate_cfddf922dc2c763b44379f36db94761412b861ad525c34a095dace4d68465ee3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 40];
        $filters = ["escape" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 39
        echo "<p class=\"address\" translate=\"no\">
  ";
        // line 40
        if ((($context["given_name"] ?? null) || ($context["family_name"] ?? null))) {
            // line 41
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["given_name"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["family_name"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 43
        echo "  ";
        if (($context["organization"] ?? null)) {
            // line 44
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["organization"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 46
        echo "  ";
        if (($context["address_line1"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line1"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 49
        echo "  ";
        if (($context["address_line2"] ?? null)) {
            // line 50
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line2"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 52
        echo "  ";
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])) {
            // line 53
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])), "html", null, true);
            echo " <br>
  ";
        }
        // line 55
        echo "  ";
        if ((($this->getAttribute(($context["locality"] ?? null), "code", []) || ($context["postal_code"] ?? null)) || $this->getAttribute(($context["administrative_area"] ?? null), "code", []))) {
            // line 56
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["locality"] ?? null), "code", [])), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postal_code"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["administrative_area"] ?? null), "code", [])), "html", null, true);
            echo " <br>
  ";
        }
        // line 58
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["country"] ?? null), "name", [])), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/address/templates/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 58,  107 => 56,  104 => 55,  98 => 53,  95 => 52,  89 => 50,  86 => 49,  80 => 47,  77 => 46,  71 => 44,  68 => 43,  60 => 41,  58 => 40,  55 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/address/templates/address-plain.html.twig", "C:\\web\\ondetemforro8\\modules\\contrib\\address\\templates\\address-plain.html.twig");
    }
}
