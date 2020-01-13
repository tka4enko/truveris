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

/* modules/highlights/highlights.twig */
class __TwigTemplate_f6c7f2d3a4fc729304b3840d91bdbcf9411d4c6a81d19982afb06ba4f47531e1 extends \Twig\Template
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
        // line 1
        echo "<section class=\"highlights\">
  <div class=\"container\">
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "highlights_group", []), "posts", [])) {
            // line 4
            echo "      <div class=\"highlights-list\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), "highlights_group", []), "posts", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 6
                echo "          ";
                $this->loadTemplate((("views/components/cards/card-" . $this->getAttribute($this->getAttribute(($context["data"] ?? null), "highlights_group", []), "variant", [])) . ".twig"), "modules/highlights/highlights.twig", 6)->display($context);
                // line 7
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "      </div>
    ";
        }
        // line 10
        echo "  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/highlights/highlights.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 8,  59 => 7,  56 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"highlights\">
  <div class=\"container\">
    {% if data.highlights_group.posts %}
      <div class=\"highlights-list\">
        {% for post in data.highlights_group.posts %}
          {% include 'views/components/cards/card-'~data.highlights_group.variant~'.twig' %}
        {% endfor %}
      </div>
    {% endif %}
  </div>
</section>
", "modules/highlights/highlights.twig", "/var/www/html/wp-content/themes/truveris/modules/highlights/highlights.twig");
    }
}
