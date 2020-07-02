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

/* modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig */
class __TwigTemplate_e74ab70fd344f12b3aad2d3c37c925e055c2d7b825d70ebc6715d77dd63af6a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 4, "include" => 16];
        $filters = ["escape" => 1, "t" => 21];
        $functions = ["attach_library" => 1, "url" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library', 'url']
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true);
        echo "

";
        // line 3
        if ($this->getAttribute(($context["items"] ?? null), "width", [])) {
            // line 4
            echo "    ";
            $context["width"] = (($this->getAttribute(($context["items"] ?? null), "width", [])) ? ((("width=" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", []))) . "")) : (""));
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["items"] ?? null), "height", [])) {
            // line 8
            echo "    ";
            $context["height"] = (($this->getAttribute(($context["items"] ?? null), "height", [])) ? ((("height=" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", []))) . "")) : (""));
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute(($context["items"] ?? null), "radius", [])) {
            // line 12
            echo "    ";
            $context["radius"] = (($this->getAttribute(($context["items"] ?? null), "radius", [])) ? ((("style=border-radius:" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", []))) . ";")) : (""));
        }
        // line 14
        echo "
";
        // line 16
        echo "<div style=\"display: none\">";
        $this->loadTemplate(($context["social_buttons_sprite"] ?? null), "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", 16)->display($context);
        echo "</div>

<div class=\"social-sharing-buttons\">
    <!-- Facebook share button -->
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook", [])) {
            // line 21
            echo "        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#facebook\" />
            </svg>
        </a>
    ";
        }
        // line 27
        echo "
    <!-- Twitter share button -->
    ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "twitter", [])) {
            // line 30
            echo "        <a href=\"http://twitter.com/intent/tweet?text=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "+";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Twitter\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Twitter\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#twitter\" />
            </svg>
        </a>
    ";
        }
        // line 36
        echo "
    <!-- WhatsApp share button -->
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "whatsapp", [])) {
            // line 39
            echo "        <a href=\"https://wa.me/?text=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " WhatsApp\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " WhatsApp\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#whatsapp\" />
            </svg>
        </a>
    ";
        }
        // line 45
        echo "
    <!-- Facebook Messenger share button -->
    ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook_messenger", [])) {
            // line 48
            echo "        <a href=\"http://www.facebook.com/dialog/send?app_id=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "facebook_app_id", [])), "html", null, true);
            echo "&link=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&redirect_uri=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>"));
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook Messenger\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook Messenger\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#messenger\" />
            </svg>
        </a>
    ";
        }
        // line 54
        echo "
    <!-- Pinterest share button -->
    ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "pinterest", [])) {
            // line 57
            echo "        <a href=\"http://pinterest.com/pin/create/link/?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&description=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Pinterest\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Pinterest\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#pinterest\" />
            </svg>
        </a>
    ";
        }
        // line 63
        echo "
    <!-- Linkedin share button -->
    ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "linkedin", [])) {
            // line 66
            echo "        <a href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&source=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "base_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Linkedin\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Linkedin\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#linkedin\" />
            </svg>
        </a>
    ";
        }
        // line 72
        echo "
    <!-- Google+ share button -->
    ";
        // line 74
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "googleplus", [])) {
            // line 75
            echo "        <a href=\"https://plus.google.com/share?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Google+\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Google+\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#googleplus\" />
            </svg>
        </a>
    ";
        }
        // line 81
        echo "
    <!-- Digg share button -->
    ";
        // line 83
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "digg", [])) {
            // line 84
            echo "        <a href=\"http://www.digg.com/submit?phase=2&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Digg\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Digg\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#digg\" />
            </svg>
        </a>
    ";
        }
        // line 90
        echo "
    <!-- StumbleUpon share button -->
    ";
        // line 92
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "stumbleupon", [])) {
            // line 93
            echo "        <a href=\"http://www.stumbleupon.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " StumbleUpon\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " StumbleUpon\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#stumbleupon\" />
            </svg>
        </a>
    ";
        }
        // line 99
        echo "
    <!-- Delicious share button -->
    ";
        // line 101
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "delicious", [])) {
            // line 102
            echo "        <a href=\"http://del.icio.us/post?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&notes=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "description", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Delicious\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Delicious\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#delicious\" />
            </svg>
        </a>
    ";
        }
        // line 108
        echo "
    <!-- Slashdot share button -->
    ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "slashdot", [])) {
            // line 111
            echo "        <a href=\"http://slashdot.org/bookmark.pl?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Slashdot\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Slashdot\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#slashdot\" />
            </svg>
        </a>
    ";
        }
        // line 117
        echo "
    <!-- Tumblr share button -->
    ";
        // line 119
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "tumblr", [])) {
            // line 120
            echo "        <a href=\"http://www.tumblr.com/share?v=3&u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&t=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Tumblr\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Tumblr\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#tumblr\" />
            </svg>
        </a>
    ";
        }
        // line 126
        echo "
    <!-- Reddit share button -->
    ";
        // line 128
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "reddit", [])) {
            // line 129
            echo "        <a href=\"http://www.reddit.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Reddit\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Reddit\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#reddit\" />
            </svg>
        </a>
    ";
        }
        // line 135
        echo "
    <!-- Evernote share button -->
    ";
        // line 137
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "evernote", [])) {
            // line 138
            echo "        <a href=\"http://www.evernote.com/clip.action?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Evernote\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Evernote\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#evernote\" />
            </svg>
        </a>
    ";
        }
        // line 144
        echo "
    <!-- Email share button -->
    ";
        // line 146
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "email", [])) {
            // line 147
            echo "        <a href=\"mailto:?subject=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&body=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " E-mail\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " E-mail\" class=\"social-sharing-buttons__button\" target=\"_blank\" rel=\"noopener\">
            <svg ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#email\" />
            </svg>
        </a>
    ";
        }
        // line 153
        echo "
    <!-- Copy link share button -->
    ";
        // line 155
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "copy", [])) {
            // line 156
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true);
            echo "
        <button class=\"btnCopy social-sharing-buttons__button\">
            <svg ";
            // line 158
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use xlink:href=\"";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#copy\" />
            </svg>
            <div class=\"social-sharing-buttons__popup\">";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copied to clipboard"));
            echo "</div>
        </button>
    ";
        }
        // line 164
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 164,  598 => 161,  593 => 159,  585 => 158,  579 => 156,  577 => 155,  573 => 153,  566 => 149,  558 => 148,  547 => 147,  545 => 146,  541 => 144,  534 => 140,  526 => 139,  515 => 138,  513 => 137,  509 => 135,  502 => 131,  494 => 130,  483 => 129,  481 => 128,  477 => 126,  470 => 122,  462 => 121,  451 => 120,  449 => 119,  445 => 117,  438 => 113,  430 => 112,  419 => 111,  417 => 110,  413 => 108,  406 => 104,  398 => 103,  385 => 102,  383 => 101,  379 => 99,  372 => 95,  364 => 94,  353 => 93,  351 => 92,  347 => 90,  340 => 86,  332 => 85,  321 => 84,  319 => 83,  315 => 81,  308 => 77,  300 => 76,  291 => 75,  289 => 74,  285 => 72,  278 => 68,  270 => 67,  257 => 66,  255 => 65,  251 => 63,  244 => 59,  236 => 58,  225 => 57,  223 => 56,  219 => 54,  212 => 50,  204 => 49,  191 => 48,  189 => 47,  185 => 45,  178 => 41,  170 => 40,  161 => 39,  159 => 38,  155 => 36,  148 => 32,  140 => 31,  129 => 30,  127 => 29,  123 => 27,  116 => 23,  108 => 22,  97 => 21,  95 => 20,  87 => 16,  84 => 14,  80 => 12,  78 => 11,  75 => 10,  71 => 8,  69 => 7,  66 => 6,  62 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", "C:\\web\\ondetemforro8\\modules\\contrib\\better_social_sharing_buttons\\theme\\better-social-sharing-buttons.html.twig");
    }
}
