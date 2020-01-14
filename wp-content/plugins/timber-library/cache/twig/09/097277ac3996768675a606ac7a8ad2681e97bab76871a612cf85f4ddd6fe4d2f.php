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

/* views/partials/footer.twig */
class __TwigTemplate_2ad0609c34323305992b37227a686730b6176373b44e85f116e00bd1aa58a989 extends \Twig\Template
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
        $context["global"] = call_user_func_array($this->env->getFunction('get_global_options')->getCallable(), []);
        // line 2
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer-top\">
      <div class=\"grid grid-medium child-width-1-2 child-width-1-6@m\" data-margin>
        <div class=\"width-1-6@m\">
          <a class=\"logo\" href=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["global"] ?? null), "site", []), "url", []);
        echo "\">
            <img data-img=\"data-src:";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "site", []), "theme", []), "uri", []);
        echo "/assets/images/svg/logo-footer.svg\"
                 data-svg
                 alt=\"logo\"/>
          </a>
        </div>
        <ul>
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "menu", []), "menu_footer", []), "get_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "            ";
            $context["item_active"] = (((twig_in_filter("current-page-ancestor", $this->getAttribute($context["item"], "classes", [])) || twig_in_filter("current-menu-item", $this->getAttribute($context["item"], "classes", [])))) ? ("active") : (""));
            // line 16
            echo "            <li
              class=\"";
            // line 17
            echo ($context["item_active"] ?? null);
            echo "\">
              ";
            // line 18
            if (twig_in_filter("button", $this->getAttribute($context["item"], "classes", []))) {
                // line 19
                echo "                <div class=\"navbar-item\">
                  <a href=\"#\"
                     class=\"";
                // line 21
                echo $this->getAttribute($context["item"], "class", []);
                echo " ";
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    echo " dropdown-toggler ";
                }
                echo "\"
                     target=\"";
                // line 22
                echo (($this->getAttribute($context["item"], "is_external", [])) ? ("_blank") : ("_self"));
                echo "\"><span>";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</span></a>
                </div>
              ";
            } else {
                // line 25
                echo "                <a href=\"#\"
                   class=\"";
                // line 26
                echo $this->getAttribute($context["item"], "class", []);
                echo " ";
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    echo " dropdown-toggler ";
                }
                echo "\"
                   target=\"";
                // line 27
                echo (($this->getAttribute($context["item"], "is_external", [])) ? ("_blank") : ("_self"));
                echo "\">
                  <span>";
                // line 28
                echo $this->getAttribute($context["item"], "title", []);
                echo "</span>
                  ";
                // line 29
                if ($this->getAttribute($context["item"], "get_children", [])) {
                    // line 30
                    echo "                    <span class=\"nav-arrow\">
                                      <img data-svg data-src=\"";
                    // line 31
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "site", []), "theme", []), "uri", []);
                    echo "/assets/images/svg/arrow.svg\" alt=\"\">
                                    </span>
                  ";
                }
                // line 34
                echo "                </a>
              ";
            }
            // line 36
            echo "            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </ul>
        <ul>
          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "menu", []), "menu_social", []), "get_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "            ";
            $context["item_active"] = (((twig_in_filter("current-page-ancestor", $this->getAttribute($context["item"], "classes", [])) || twig_in_filter("current-menu-item", $this->getAttribute($context["item"], "classes", [])))) ? ("active") : (""));
            // line 42
            echo "            <li
              class=\"";
            // line 43
            echo ($context["item_active"] ?? null);
            echo "\">
              <a href=\"#\"
                 class=\"";
            // line 45
            echo $this->getAttribute($context["item"], "link", []);
            echo " ";
            if ($this->getAttribute($context["item"], "get_children", [])) {
                echo " dropdown-toggler ";
            }
            echo "\"
                 target=\"";
            // line 46
            echo (($this->getAttribute($context["item"], "is_external", [])) ? ("_blank") : ("_self"));
            echo "\">
                <span>";
            // line 47
            echo $this->getAttribute($context["item"], "title", []);
            echo "</span>
              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </ul>
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "views/partials/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 51,  160 => 47,  156 => 46,  148 => 45,  143 => 43,  140 => 42,  137 => 41,  133 => 40,  129 => 38,  122 => 36,  118 => 34,  112 => 31,  109 => 30,  107 => 29,  103 => 28,  99 => 27,  91 => 26,  88 => 25,  80 => 22,  72 => 21,  68 => 19,  66 => 18,  62 => 17,  59 => 16,  56 => 15,  52 => 14,  43 => 8,  39 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set global = get_global_options() %}
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer-top\">
      <div class=\"grid grid-medium child-width-1-2 child-width-1-6@m\" data-margin>
        <div class=\"width-1-6@m\">
          <a class=\"logo\" href=\"{{ global.site.url }}\">
            <img data-img=\"data-src:{{ global.site.theme.uri }}/assets/images/svg/logo-footer.svg\"
                 data-svg
                 alt=\"logo\"/>
          </a>
        </div>
        <ul>
          {% for item in global.menu.menu_footer.get_items %}
            {% set item_active = 'current-page-ancestor' in item.classes or 'current-menu-item' in item.classes ? 'active' : '' %}
            <li
              class=\"{{ item_active }}\">
              {% if 'button' in item.classes %}
                <div class=\"navbar-item\">
                  <a href=\"#\"
                     class=\"{{ item.class }} {% if item.get_children %} dropdown-toggler {% endif %}\"
                     target=\"{{ item.is_external ? '_blank' : '_self' }}\"><span>{{ item.title }}</span></a>
                </div>
              {% else %}
                <a href=\"#\"
                   class=\"{{ item.class }} {% if item.get_children %} dropdown-toggler {% endif %}\"
                   target=\"{{ item.is_external ? '_blank' : '_self' }}\">
                  <span>{{ item.title }}</span>
                  {% if item.get_children %}
                    <span class=\"nav-arrow\">
                                      <img data-svg data-src=\"{{ global.site.theme.uri }}/assets/images/svg/arrow.svg\" alt=\"\">
                                    </span>
                  {% endif %}
                </a>
              {% endif %}
            </li>
          {% endfor %}
        </ul>
        <ul>
          {% for item in global.menu.menu_social.get_items %}
            {% set item_active = 'current-page-ancestor' in item.classes or 'current-menu-item' in item.classes ? 'active' : '' %}
            <li
              class=\"{{ item_active }}\">
              <a href=\"#\"
                 class=\"{{ item.link }} {% if item.get_children %} dropdown-toggler {% endif %}\"
                 target=\"{{ item.is_external ? '_blank' : '_self' }}\">
                <span>{{ item.title }}</span>
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</footer>
", "views/partials/footer.twig", "/var/www/html/wp-content/themes/truveris/views/partials/footer.twig");
    }
}
