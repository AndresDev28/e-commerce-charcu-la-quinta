<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c1b8fe0f5b33b7f8d8406d5a07a2fbc3 */
class __TwigTemplate_41538450bf0f87425927c4094fdc5fe8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Tema y logotipo > Tema • Charcu LaQuinta</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = '71a1f06549df97ca9486746e5ff6df45';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'eed40f9fc60ab9ecdde479569be4b3d5';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminMc7IFcRnYvwrPSU/index.php/improve/modules/manage?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8';
    var admin_notification_get_link = '/adminMc7IFcRnYvwrPSU/index.php/common/notifications?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8';
    var admin_notification_push_link = adminNotificationPushLink = '/adminMc7IFcRnYvwrPSU/index.php/common/notifications/ack?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización co";
        // line 42
        echo "rrecta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminMc7IFcRnYvwrPSU/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminMc7IFcRnYvwrPSU\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminMc7IFcRnYvwrPSU\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondar";
        // line 67
        echo "yGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/adminMc7IFcRnYvwrPSU/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminMc7IFcRnYvwrPSU/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/adminMc7IFcRnYvwrPSU/index.php/common/notifications?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminthemes\"
  data-base-url=\"/adminMc7IFcRnYvwrPSU/index.php\"  data-token=\"MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminDashboard&amp;token=8f319cb30f85ce2aa81d7d39b4e5fcd9\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=80c43730c939d51ee98d836d1184c685\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/improve/modules/manage?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/categories/new?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/products-v2/create?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
                 data-item";
        // line 137
        echo "=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=12ad675e511c8b87332378264328dbc4\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/orders?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"97\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-Riy1AREFjx8QH2LZvmGu8\"
        data-post-link=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminQuickAccesses&token=c04a2e268267015e9aefd63e74dec7fd\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Tema y logotipo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminQuickAccesses&token=c04a2e268267015e9aefd63e74dec7fd\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminMc7IFcRnYvwrPSU/index.php?controller=AdminSearch&amp;token=6b56b47bdab127a0a312ff4ba09828ff\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_searc";
        // line 177
        echo "h_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><";
        // line 192
        echo "i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=80c43730c939d51ee98d836d1184c685\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/improve/modules/manage?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/categories/new?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/products-v2/create?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCartRules&amp;addcart_rule&amp;to";
        // line 229
        echo "ken=12ad675e511c8b87332378264328dbc4\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php/sell/orders?token=a2c66403ea325bd3d2b1b48e3fae6d9e\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"166\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/?-Riy1AREFjx8QH2LZvmGu8\"
      data-post-link=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminQuickAccesses&token=c04a2e268267015e9aefd63e74dec7fd\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Tema y logotipo - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminQuickAccesses&token=c04a2e268267015e9aefd63e74dec7fd\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
";
        // line 275
        echo "    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=06b03c4284df9e90588c6c85ab056656\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
         ";
        // line 325
        echo "   </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dr";
        // line 376
        echo "opdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" alt=\"Andres\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Andres</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/employees/1/edit?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminLogin&amp;logout=1&amp;token=66a1a8c55aedcdcd7179b8616050412c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/employees/toggle-navigation?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminDashboard&amp;token=8f319cb30f85ce2aa81d7d39b4e5fcd9\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?con";
        // line 421
        echo "troller=AdminDashboard&amp;token=8f319cb30f85ce2aa81d7d39b4e5fcd9\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/orders/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/orders/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                      ";
        // line 460
        echo "                                      
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/orders/invoices/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/orders/credit-slips/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/orders/delivery-slips/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCarts&amp;token=06b03c4284df9e90588c6c85ab056656\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

        ";
        // line 490
        echo "                                                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/products?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/products?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/categories?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Cate";
        // line 519
        echo "gorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/monitoring/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminAttributesGroups&amp;token=0cb5c3de2780e83cb11d25aa8219d4af\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/catalog/brands/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachmen";
        // line 550
        echo "ts\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/attachments/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCartRules&amp;token=12ad675e511c8b87332378264328dbc4\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/stocks/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/customers/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>";
        // line 582
        echo "
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/customers/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/addresses/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCustomerThreads&amp;token=8b95ccad26c2ca5adfabe88d522b8da6\" cla";
        // line 611
        echo "ss=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCustomerThreads&amp;token=8b95ccad26c2ca5adfabe88d522b8da6\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/sell/customer-service/order-messages/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/adminMc";
        // line 641
        echo "7IFcRnYvwrPSU/index.php?controller=AdminReturn&amp;token=f3fe3130291ffafe34a33afd625f0b5b\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminStats&amp;token=80c43730c939d51ee98d836d1184c685\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/modules/manage?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
   ";
        // line 679
        echo "                   <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/modules/manage?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
               ";
        // line 709
        echo "                                             </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"128\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/mail_theme/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/cms-pages/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leve";
        // line 739
        echo "ltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/modules/positions/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminImages&amp;token=3c228e39470b4804d173c53b8edaa42e\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/modules/link-widget/list?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCarriers&amp;token=994337ed5184fb8cdec0aca3ccbe59ff\" class=\"link\">
                      <i class=\"material-icons mi-local_shippin";
        // line 768
        echo "g\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminCarriers&amp;token=994337ed5184fb8cdec0aca3ccbe59ff\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/shipping/preferences/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/";
        // line 800
        echo "payment/payment_methods?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/payment/payment_methods?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/payment/preferences?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-level";
        // line 832
        echo "one has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/international/localization/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/international/localization/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/international/zones/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                      ";
        // line 861
        echo "                                      
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/international/taxes/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/international/translations/settings?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/preferences/preferences?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"ma";
        // line 897
        echo "terial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/preferences/preferences?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/order-preferences/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/product-preferences/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                         ";
        // line 926
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/customer-preferences/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/contacts/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/shop/seo-urls/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=Admi";
        // line 954
        echo "nSearchConf&amp;token=1593a50f8161c9687cf1467b0a6f18a2\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/system-information/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/system-information/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
              ";
        // line 986
        echo "                <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/performance/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/administration/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/emails/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/import/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Importar
                                </a>
                              </li>

                                                             ";
        // line 1015
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/employees/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/sql-requests/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/logs/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/webservice-keys/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Web";
        // line 1043
        echo "service
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/feature-flags/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminMc7IFcRnYvwrPSU/index.php/configure/advanced/security/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Tema y logotipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema y logotipo &gt; Tema          </h1>
      

      
        <div class=\"toolbar";
        // line 1093
        echo "-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/import?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"                  title=\"Añadir nuevo tema\"                                  >
                  <i class=\"material-icons\">add</i>                  Añadir nuevo tema
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/export?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"                  title=\"Exportar tema actual\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema actual
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminMc7IFcRnYvwrPSU/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Des/Ayuda?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                        ";
        // line 1127
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Tema y logotipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminPsThemeCustoConfiguration&token=b9ce00a424210d007845b4d07598e344\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"129\">
                      Paginas configuracion
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminPsThemeCustoAdvanced&token=bcd8b13962fa3fbcc9f3f0a27710b0de\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"130\">
                      Personalización avanzada";
        // line 1145
        echo "
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/import?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"              title=\"Añadir nuevo tema\"            >
              Añadir nuevo tema
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"           ";
        // line 1167
        echo "   id=\"page-header-desc-floating-configuration-export\"
              href=\"/adminMc7IFcRnYvwrPSU/index.php/improve/design/themes/export?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"              title=\"Exportar tema actual\"            >
              Exportar tema actual
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminMc7IFcRnYvwrPSU/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Des/Ayuda?_token=MkK8BtRJYW3WLGC6LzA1m-Riy1AREFjx8QH2LZvmGu8\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1197
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8080/adminMc7IFcRnYvwrPSU/index.php?controller=AdminDashboard&amp;token=8f319cb30f85ce2aa81d7d39b4e5fcd9\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1231
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1197
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1231
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c1b8fe0f5b33b7f8d8406d5a07a2fbc3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1398 => 1231,  1377 => 1197,  1366 => 102,  1357 => 1231,  1317 => 1197,  1285 => 1167,  1261 => 1145,  1241 => 1127,  1205 => 1093,  1153 => 1043,  1123 => 1015,  1092 => 986,  1058 => 954,  1028 => 926,  997 => 897,  959 => 861,  928 => 832,  894 => 800,  860 => 768,  829 => 739,  797 => 709,  765 => 679,  725 => 641,  693 => 611,  662 => 582,  628 => 550,  595 => 519,  564 => 490,  532 => 460,  491 => 421,  444 => 376,  391 => 325,  339 => 275,  291 => 229,  252 => 192,  235 => 177,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c1b8fe0f5b33b7f8d8406d5a07a2fbc3", "");
    }
}
