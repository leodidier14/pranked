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

/* @PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig */
class __TwigTemplate_15fe62afc26aa4bc80b8c42a50239f4bba42f2513e3e8777a29aa1c21a474c83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig"));

        // line 25
        echo "
<div class=\"collapse\" id=\"addressRequiredFieldsContainer\">
  ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requiredFieldsForm"] ?? $this->getContext($context, "requiredFieldsForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_save_required_fields")]);
        echo "
  <div class=\"card\" >
    <h3 class=\"card-header\">
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required Fields", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          <p>
            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required fields apply to the customer's registration form, you should check the address formats in [1]International > Locations > Countries[/1] before.", ["[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCountries", true)) . "\">"), "[/1]" => "</a>"], "Admin.Orderscustomers.Help");
        // line 42
        echo "
          </p>
        </div>
      </div>
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["requiredFieldsForm"] ?? $this->getContext($context, "requiredFieldsForm")), "required_fields", []), 'widget');
        echo "
      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requiredFieldsForm"] ?? $this->getContext($context, "requiredFieldsForm")), 'rest');
        echo "
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requiredFieldsForm"] ?? $this->getContext($context, "requiredFieldsForm")), 'form_end');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 55,  74 => 51,  67 => 47,  63 => 46,  57 => 42,  55 => 36,  46 => 30,  40 => 27,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"collapse\" id=\"addressRequiredFieldsContainer\">
  {{ form_start(requiredFieldsForm, {'action': path('admin_addresses_save_required_fields')}) }}
  <div class=\"card\" >
    <h3 class=\"card-header\">
      {{ 'Required Fields'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          <p>
            {{ 'Required fields apply to the customer\\'s registration form, you should check the address formats in [1]International > Locations > Countries[/1] before.'|trans(
              {
                '[1]': '<a href=\"' ~ getAdminLink('AdminCountries', true) ~ '\">',
                '[/1]': '</a>'
              },
              'Admin.Orderscustomers.Help')|raw
            }}
          </p>
        </div>
      </div>
      {{ form_widget(requiredFieldsForm.required_fields) }}
      {{ form_rest(requiredFieldsForm) }}
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
  {{ form_end(requiredFieldsForm) }}
</div>
", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig", "D:\\wamp64\\www\\pranked-shop\\pranked-1.0\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Address\\Blocks\\required_fields.html.twig");
    }
}
