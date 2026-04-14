<?php
/**
 * TheUIXstudio Briefing Generator Snippet
 * Uso: pegar en Code Snippets o functions.php y usar shortcode [tuix_briefing_form]
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('tuixb_get_questions')) {
    function tuixb_get_questions() {
        return array(
            'general' => array(
                'title' => '1. Datos generales del negocio',
                'fields' => array(
                    array('name' => 'negocio_nombre_comercial', 'label' => 'Nombre comercial del negocio', 'type' => 'text', 'required' => true),
                    array('name' => 'negocio_razon_social', 'label' => 'Razón social o nombre legal', 'type' => 'text'),
                    array('name' => 'contacto_nombre', 'label' => 'Nombre de la persona de contacto', 'type' => 'text', 'required' => true),
                    array('name' => 'contacto_cargo', 'label' => 'Cargo', 'type' => 'text'),
                    array('name' => 'contacto_whatsapp', 'label' => 'WhatsApp', 'type' => 'text', 'required' => true),
                    array('name' => 'contacto_email', 'label' => 'Correo principal', 'type' => 'email', 'required' => true),
                    array('name' => 'negocio_ciudad_pais', 'label' => 'Ciudad y país', 'type' => 'text', 'required' => true),
                    array('name' => 'negocio_redes', 'label' => 'Redes sociales', 'type' => 'textarea'),
                    array('name' => 'negocio_web_actual', 'label' => 'Sitio web actual', 'type' => 'url'),
                    array('name' => 'negocio_tiene_dominio', 'label' => '¿Ya tienen dominio propio?', 'type' => 'select', 'options' => array('Sí', 'No', 'En proceso'), 'required' => true),
                    array('name' => 'negocio_tiene_hosting', 'label' => '¿Ya tienen hosting?', 'type' => 'select', 'options' => array('Sí', 'No', 'No estoy seguro/a'), 'required' => true),
                ),
            ),
            'empresa' => array(
                'title' => '2. Sobre la empresa',
                'fields' => array(
                    array('name' => 'empresa_que_hace', 'label' => '¿Qué hace exactamente tu empresa?', 'type' => 'textarea', 'required' => true),
                    array('name' => 'empresa_productos_servicios', 'label' => '¿Qué productos o servicios ofrece?', 'type' => 'textarea', 'required' => true),
                    array('name' => 'empresa_diferenciador', 'label' => '¿Cuál es su principal diferenciador?', 'type' => 'textarea'),
                    array('name' => 'empresa_problema_resuelve', 'label' => '¿Qué problema resuelve?', 'type' => 'textarea'),
                    array('name' => 'empresa_frase', 'label' => 'Describe tu negocio en una sola frase', 'type' => 'text'),
                    array('name' => 'empresa_historia', 'label' => 'Historia breve de la empresa', 'type' => 'textarea'),
                    array('name' => 'empresa_valores', 'label' => 'Valores de marca', 'type' => 'textarea'),
                    array('name' => 'empresa_percepcion', 'label' => '¿Qué percepción quieren transmitir?', 'type' => 'textarea'),
                ),
            ),
            'objetivo' => array(
                'title' => '3. Objetivo de la web',
                'fields' => array(
                    array('name' => 'web_para_que', 'label' => '¿Para qué quieren la página web?', 'type' => 'textarea', 'required' => true),
                    array('name' => 'web_objetivo_principal', 'label' => '¿Cuál es el objetivo principal?', 'type' => 'text', 'required' => true),
                    array('name' => 'web_accion_visitante', 'label' => '¿Qué acción quieren que haga el visitante?', 'type' => 'text'),
                    array('name' => 'web_conversion_exitosa', 'label' => '¿Qué sería una conversión exitosa?', 'type' => 'text'),
                    array('name' => 'web_meta_3_6_meses', 'label' => '¿Qué esperan lograr con esta web en 3 a 6 meses?', 'type' => 'textarea'),
                ),
            ),
            'cliente' => array(
                'title' => '4. Cliente ideal',
                'fields' => array(
                    array('name' => 'cliente_ideal_quien', 'label' => '¿Quién es su cliente ideal?', 'type' => 'textarea', 'required' => true),
                    array('name' => 'cliente_no_atraer', 'label' => '¿A quién NO quieren atraer?', 'type' => 'textarea'),
                    array('name' => 'cliente_edad', 'label' => 'Edad aproximada', 'type' => 'text'),
                    array('name' => 'cliente_ubicacion', 'label' => 'Ubicación', 'type' => 'text'),
                    array('name' => 'cliente_dudas', 'label' => '¿Qué dudas suele tener antes de contratar o comprar?', 'type' => 'textarea'),
                    array('name' => 'cliente_objeciones', 'label' => '¿Qué objeciones suele tener?', 'type' => 'textarea'),
                    array('name' => 'cliente_por_que_elige', 'label' => '¿Por qué termina eligiéndolos?', 'type' => 'textarea'),
                ),
            ),
            'identidad' => array(
                'title' => '5. Identidad visual y diseño',
                'fields' => array(
                    array('name' => 'identidad_tiene_logo', 'label' => '¿Ya tienen logo?', 'type' => 'select', 'options' => array('Sí', 'No', 'En proceso')),
                    array('name' => 'identidad_manual_marca', 'label' => '¿Ya tienen manual de marca?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'identidad_colores', 'label' => 'Colores corporativos', 'type' => 'text'),
                    array('name' => 'identidad_tipografias', 'label' => 'Tipografías', 'type' => 'text'),
                    array('name' => 'identidad_estilo', 'label' => '¿Qué estilo visual buscan?', 'type' => 'textarea', 'required' => true),
                    array('name' => 'identidad_webs_gustan', 'label' => 'Menciona 3 webs que les gusten', 'type' => 'textarea'),
                    array('name' => 'identidad_que_gusta', 'label' => '¿Qué les gusta de esas webs?', 'type' => 'textarea'),
                    array('name' => 'identidad_que_no_quieren', 'label' => '¿Qué NO quieren ver en su web?', 'type' => 'textarea'),
                    array('name' => 'identidad_sensacion', 'label' => '¿Qué sensación debe transmitir la página?', 'type' => 'textarea'),
                ),
            ),
            'contenido' => array(
                'title' => '6. Contenido disponible',
                'fields' => array(
                    array('name' => 'contenido_textos', 'label' => '¿Ya tienen textos?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_fotos', 'label' => '¿Ya tienen fotos profesionales?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_videos', 'label' => '¿Tienen videos?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_testimonios', 'label' => '¿Tienen testimonios?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_casos_exito', 'label' => '¿Tienen casos de éxito?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_faqs', 'label' => '¿Tienen preguntas frecuentes?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'contenido_quien_entrega', 'label' => '¿Quién entregará este contenido?', 'type' => 'text'),
                    array('name' => 'contenido_falta_crear', 'label' => '¿Qué contenido aún falta crear?', 'type' => 'textarea'),
                ),
            ),
            'conversion' => array(
                'title' => '7. Contacto y conversión',
                'fields' => array(
                    array('name' => 'conversion_cta', 'label' => '¿Cuál será el CTA principal?', 'type' => 'text', 'required' => true),
                    array('name' => 'conversion_whatsapp', 'label' => 'WhatsApp principal', 'type' => 'text'),
                    array('name' => 'conversion_correo_receptor', 'label' => 'Correo receptor', 'type' => 'email'),
                    array('name' => 'conversion_necesita_form', 'label' => '¿Necesitan formulario?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'conversion_campos_form', 'label' => '¿Qué campos debe tener?', 'type' => 'textarea'),
                    array('name' => 'conversion_boton_flotante_whatsapp', 'label' => '¿Necesitan botón flotante de WhatsApp?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'conversion_captar', 'label' => '¿Quieren captar leads, llamadas o reuniones?', 'type' => 'text'),
                ),
            ),
            'seo' => array(
                'title' => '8. SEO y posicionamiento',
                'fields' => array(
                    array('name' => 'seo_keywords', 'label' => 'Palabras clave principales', 'type' => 'textarea'),
                    array('name' => 'seo_zonas', 'label' => 'Ciudades o zonas objetivo', 'type' => 'text'),
                    array('name' => 'seo_competidores', 'label' => 'Competidores directos', 'type' => 'textarea'),
                    array('name' => 'seo_busquedas_ganar', 'label' => '¿Qué búsquedas debería ganar la web?', 'type' => 'textarea'),
                    array('name' => 'seo_local', 'label' => '¿El negocio depende de búsquedas locales?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcialmente')),
                ),
            ),
            'tecnico' => array(
                'title' => '9. Aspectos técnicos',
                'fields' => array(
                    array('name' => 'tec_idiomas', 'label' => '¿Necesitan varios idiomas?', 'type' => 'select', 'options' => array('Sí', 'No', 'Futuro')),
                    array('name' => 'tec_blog', 'label' => '¿Necesitan blog?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'tec_descargas', 'label' => '¿Necesitan descargar PDFs o catálogos?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'tec_integraciones', 'label' => '¿Necesitan integraciones?', 'type' => 'textarea'),
                    array('name' => 'tec_maps', 'label' => '¿Necesitan Google Maps?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'tec_analytics_pixel', 'label' => '¿Necesitan Analytics o Pixel?', 'type' => 'select', 'options' => array('Sí', 'No', 'No sé')),
                    array('name' => 'tec_crm_auto', 'label' => '¿Necesitan CRM, calendario o automatizaciones?', 'type' => 'textarea'),
                    array('name' => 'tec_info_extra', 'label' => '¿Hay algo técnico importante que debamos saber?', 'type' => 'textarea'),
                ),
            ),
            'plan30' => array(
                'title' => 'Bloque específico Plan $30 (sin WooCommerce)',
                'plan'  => '30',
                'fields' => array(
                    array('name' => 'p30_tipo_web', 'label' => '¿La web será principalmente informativa, comercial o para captar contactos?', 'type' => 'textarea'),
                    array('name' => 'p30_servicios_destacar', 'label' => '¿Qué servicios quieren destacar primero?', 'type' => 'textarea'),
                    array('name' => 'p30_paginas_servicios', 'label' => '¿Necesitan páginas de servicios individuales?', 'type' => 'select', 'options' => array('Sí', 'No', 'Tal vez')),
                    array('name' => 'p30_portafolio', 'label' => '¿Necesitan portafolio o proyectos?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p30_sobre_nosotros', 'label' => '¿Necesitan sección “sobre nosotros” fuerte?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p30_testimonios_visibles', 'label' => '¿Necesitan testimonios visibles?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p30_blog_activo', 'label' => '¿Necesitan blog activo?', 'type' => 'select', 'options' => array('Sí', 'No', 'Más adelante')),
                    array('name' => 'p30_faqs', 'label' => '¿Necesitan FAQs?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p30_prioridad', 'label' => '¿La prioridad es confianza, imagen, claridad o captar leads?', 'type' => 'textarea'),
                    array('name' => 'p30_legales', 'label' => '¿Qué datos legales deben aparecer?', 'type' => 'textarea'),
                    array('name' => 'p30_secciones_imprescindibles', 'label' => '¿Qué secciones consideran imprescindibles en la web?', 'type' => 'textarea'),
                    array('name' => 'p30_que_no_esperan', 'label' => '¿Qué NO esperan de esta web?', 'type' => 'textarea'),
                ),
            ),
            'plan50' => array(
                'title' => 'Bloque específico Plan $50 (con WooCommerce)',
                'plan'  => '50',
                'fields' => array(
                    array('name' => 'p50_que_vender', 'label' => '¿Qué van a vender?', 'type' => 'textarea'),
                    array('name' => 'p50_cantidad_productos', 'label' => '¿Cuántos productos iniciales habrá?', 'type' => 'text'),
                    array('name' => 'p50_tipo_productos', 'label' => '¿Son productos simples o variables?', 'type' => 'text'),
                    array('name' => 'p50_variaciones', 'label' => '¿Hay tallas, colores, medidas, presentaciones o variaciones?', 'type' => 'textarea'),
                    array('name' => 'p50_quien_carga', 'label' => '¿Quién cargará los productos?', 'type' => 'text'),
                    array('name' => 'p50_fotos_producto', 'label' => '¿Ya tienen fotos de producto?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'p50_descripciones', 'label' => '¿Ya tienen descripciones?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'p50_categorias', 'label' => '¿Necesitan categorías y subcategorías?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p50_filtros', 'label' => '¿Qué filtros necesita la tienda?', 'type' => 'textarea'),
                    array('name' => 'p50_mercado', 'label' => '¿Venden local, nacional o internacional?', 'type' => 'text'),
                    array('name' => 'p50_envios', 'label' => '¿Cómo manejan envíos?', 'type' => 'textarea'),
                    array('name' => 'p50_costos_envio', 'label' => '¿Tienen costos de envío definidos?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'p50_retiro_tienda', 'label' => '¿Hay retiro en tienda?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p50_metodos_pago', 'label' => '¿Qué métodos de pago necesitan?', 'type' => 'textarea'),
                    array('name' => 'p50_pasarela', 'label' => '¿Ya tienen pasarela?', 'type' => 'select', 'options' => array('Sí', 'No', 'En proceso')),
                    array('name' => 'p50_transfer_tarjetas', 'label' => '¿Necesitan transferencias, tarjetas o ambos?', 'type' => 'text'),
                    array('name' => 'p50_stock', 'label' => '¿Cómo manejan stock?', 'type' => 'textarea'),
                    array('name' => 'p50_promociones', 'label' => '¿Cómo manejan promociones?', 'type' => 'textarea'),
                    array('name' => 'p50_cupones', 'label' => '¿Necesitan cupones?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p50_resenas', 'label' => '¿Necesitan reseñas?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p50_carrito_checkout_micuenta', 'label' => '¿Necesitan carrito, checkout y área de mi cuenta personalizada?', 'type' => 'select', 'options' => array('Sí', 'No', 'Parcial')),
                    array('name' => 'p50_whatsapp_adicional', 'label' => '¿Necesitan vender por WhatsApp además de WooCommerce?', 'type' => 'select', 'options' => array('Sí', 'No')),
                    array('name' => 'p50_politicas', 'label' => '¿Qué políticas necesitan?', 'type' => 'textarea'),
                    array('name' => 'p50_tienda_exitosa', 'label' => '¿Qué sería para ustedes una tienda online exitosa?', 'type' => 'textarea'),
                    array('name' => 'p50_preocupacion', 'label' => '¿Qué les preocupa más del ecommerce?', 'type' => 'textarea'),
                ),
            ),
        );
    }
}

if (!class_exists('TUIXB_MinPDF')) {
    class TUIXB_MinPDF {
        private $objects = array();
        private $pages = array();
        private $current = '';
        private $w = 595;
        private $h = 842;
        private $fontObj = 0;

        public function __construct() {
            $this->fontObj = $this->newObject("<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>");
        }

        private function esc($s) {
            $s = (string) $s;
            $s = iconv('UTF-8', 'Windows-1252//TRANSLIT//IGNORE', $s);
            return str_replace(array('\\', '(', ')'), array('\\\\', '\\(', '\\)'), $s);
        }

        private function newObject($content) {
            $this->objects[] = $content;
            return count($this->objects);
        }

        public function addPage($bg = array(0.06, 0.06, 0.07)) {
            if ($this->current !== '') {
                $this->endPage();
            }
            $this->current = '';
            $this->rect(0, 0, $this->w, $this->h, $bg[0], $bg[1], $bg[2]);
        }

        public function rect($x, $y, $w, $h, $r, $g, $b) {
            $yy = $this->h - $y - $h;
            $this->current .= sprintf("%.3F %.3F %.3F rg %.2F %.2F %.2F %.2F re f\n", $r, $g, $b, $x, $yy, $w, $h);
        }

        public function text($x, $y, $txt, $size = 11, $rgb = array(1,1,1)) {
            $yy = $this->h - $y;
            $this->current .= sprintf("BT /F1 %d Tf %.3F %.3F %.3F rg 1 0 0 1 %.2F %.2F Tm (%s) Tj ET\n", $size, $rgb[0], $rgb[1], $rgb[2], $x, $yy, $this->esc($txt));
        }

        public function multiline($x, &$y, $txt, $size = 10, $rgb = array(0.95,0.95,0.95), $lineHeight = 14, $maxChars = 104) {
            $txt = trim(preg_replace('/\s+/', ' ', (string) $txt));
            if ($txt === '') {
                return;
            }
            $lines = wordwrap($txt, $maxChars, "\n", true);
            foreach (explode("\n", $lines) as $line) {
                if ($y > 800) {
                    $this->addPage(array(0.07,0.07,0.08));
                    $y = 40;
                }
                $this->text($x, $y, $line, $size, $rgb);
                $y += $lineHeight;
            }
        }

        private function endPage() {
            $stream = "<< /Length " . strlen($this->current) . " >>\nstream\n" . $this->current . "endstream";
            $contentObj = $this->newObject($stream);
            $pageObj = $this->newObject("<< /Type /Page /Parent PAGES_REF /MediaBox [0 0 {$this->w} {$this->h}] /Resources << /Font << /F1 {$this->fontObj} 0 R >> >> /Contents {$contentObj} 0 R >>");
            $this->pages[] = $pageObj;
            $this->current = '';
        }

        public function output() {
            if ($this->current !== '') {
                $this->endPage();
            }

            $kids = '';
            foreach ($this->pages as $p) {
                $kids .= $p . " 0 R ";
            }
            $pagesObj = $this->newObject("<< /Type /Pages /Kids [{$kids}] /Count " . count($this->pages) . " >>");

            foreach ($this->objects as $idx => $obj) {
                if (strpos($obj, 'PAGES_REF') !== false) {
                    $this->objects[$idx] = str_replace('PAGES_REF', $pagesObj . ' 0 R', $obj);
                }
            }

            $catalogObj = $this->newObject("<< /Type /Catalog /Pages {$pagesObj} 0 R >>");

            $pdf = "%PDF-1.4\n";
            $offsets = array(0);
            foreach ($this->objects as $i => $obj) {
                $offsets[] = strlen($pdf);
                $pdf .= ($i + 1) . " 0 obj\n" . $obj . "\nendobj\n";
            }

            $xref = strlen($pdf);
            $pdf .= "xref\n0 " . (count($this->objects) + 1) . "\n";
            $pdf .= "0000000000 65535 f \n";
            for ($i = 1; $i <= count($this->objects); $i++) {
                $pdf .= sprintf("%010d 00000 n \n", $offsets[$i]);
            }

            $pdf .= "trailer\n<< /Size " . (count($this->objects) + 1) . " /Root {$catalogObj} 0 R >>\n";
            $pdf .= "startxref\n{$xref}\n%%EOF";

            return $pdf;
        }
    }
}

if (!function_exists('tuixb_render_field')) {
    function tuixb_render_field($f) {
        $required = !empty($f['required']);
        $reqAttr  = $required ? ' data-required="1" required' : '';
        $name     = esc_attr($f['name']);
        $id       = 'tuixb_' . $name;
        $label    = esc_html($f['label']);
        $type     = $f['type'];

        echo '<div class="tuixb-field" data-label="' . esc_attr($f['label']) . '">';
        echo '<label for="' . esc_attr($id) . '">' . $label . ($required ? ' <span>*</span>' : '') . '</label>';

        if ($type === 'textarea') {
            echo '<textarea id="' . esc_attr($id) . '" name="' . $name . '" rows="4"' . $reqAttr . '></textarea>';
        } elseif ($type === 'select') {
            echo '<select id="' . esc_attr($id) . '" name="' . $name . '"' . $reqAttr . '>';
            echo '<option value="">Seleccionar</option>';
            foreach ((array) $f['options'] as $opt) {
                echo '<option value="' . esc_attr($opt) . '">' . esc_html($opt) . '</option>';
            }
            echo '</select>';
        } else {
            echo '<input id="' . esc_attr($id) . '" type="' . esc_attr($type) . '" name="' . $name . '"' . $reqAttr . ' />';
        }

        echo '<small class="tuixb-error"></small>';
        echo '</div>';
    }
}

if (!function_exists('tuixb_shortcode')) {
    function tuixb_shortcode() {
        $sections = tuixb_get_questions();
        ob_start();
        ?>
        <div id="tuixb-root" class="tuixb-wrap" data-ajax="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" data-nonce="<?php echo esc_attr(wp_create_nonce('tuixb_nonce')); ?>">
            <form id="tuixb-form" novalidate>
                <div class="tuixb-header">
                    <div>
                        <h2>Briefing de Proyecto Web</h2>
                        <p>Completa este formulario para construir una propuesta precisa y profesional.</p>
                    </div>
                    <img src="http://theuixstudio.com/wp-content/uploads/2024/02/3-12.webp" alt="TheUIXstudio" loading="lazy"/>
                </div>

                <div class="tuixb-plan">
                    <button type="button" class="tuixb-plan-card active" data-plan="30">
                        <strong>Plan $30</strong>
                        <span>Sitio web corporativo</span>
                    </button>
                    <button type="button" class="tuixb-plan-card" data-plan="50">
                        <strong>Plan $50</strong>
                        <span>Sitio web con WooCommerce</span>
                    </button>
                    <input type="hidden" name="plan" id="tuixb-plan-input" value="30" />
                </div>

                <div class="tuixb-progress"><div id="tuixb-progress-bar"></div></div>

                <div class="tuixb-steps">
                    <?php $stepIndex = 0; foreach ($sections as $key => $section): $stepIndex++; $plan = isset($section['plan']) ? $section['plan'] : ''; ?>
                        <section class="tuixb-step<?php echo $stepIndex === 1 ? ' is-active' : ''; ?><?php echo $plan ? ' tuixb-plan-step' : ''; ?>" data-step="<?php echo esc_attr($stepIndex); ?>"<?php echo $plan ? ' data-plan-only="' . esc_attr($plan) . '"' : ''; ?>>
                            <h3><?php echo esc_html($section['title']); ?></h3>
                            <div class="tuixb-grid">
                                <?php foreach ($section['fields'] as $field) { tuixb_render_field($field); } ?>
                            </div>
                        </section>
                    <?php endforeach; ?>

                    <section class="tuixb-step" data-step="999" id="tuixb-summary-step">
                        <h3>Revisión final</h3>
                        <div id="tuixb-summary"></div>
                    </section>
                </div>

                <div class="tuixb-footer">
                    <button type="button" id="tuixb-prev" class="tuixb-btn tuixb-btn-ghost">Anterior</button>
                    <button type="button" id="tuixb-next" class="tuixb-btn tuixb-btn-main">Siguiente</button>
                    <button type="submit" id="tuixb-submit" class="tuixb-btn tuixb-btn-main">Enviar briefing</button>
                </div>

                <div id="tuixb-message" role="status" aria-live="polite"></div>
                <input type="hidden" name="action" value="tuixb_submit_briefing" />
                <input type="hidden" name="security" value="<?php echo esc_attr(wp_create_nonce('tuixb_nonce')); ?>" />
            </form>
        </div>

        <style>
            .tuixb-wrap,.tuixb-wrap *{box-sizing:border-box}
            .tuixb-wrap{--bg:#070909;--card:#0f1311;--line:#1b2712;--txt:#fff;--muted:#a8b0a6;--brand:#A4FD0E;max-width:1120px;margin:0 auto;padding:22px;border:1px solid var(--line);background:linear-gradient(160deg,#070909 0%,#0b0f0b 100%);border-radius:18px;color:var(--txt);font-family:Inter,Segoe UI,Roboto,Arial,sans-serif;box-shadow:0 14px 40px rgba(0,0,0,.35)}
            .tuixb-header{display:flex;justify-content:space-between;gap:20px;align-items:center;margin-bottom:18px}
            .tuixb-header h2{margin:0;font-size:clamp(1.3rem,2vw,2rem);line-height:1.2}
            .tuixb-header p{margin:.45rem 0 0;color:var(--muted)}
            .tuixb-header img{width:54px;height:54px;object-fit:contain;opacity:.95}
            .tuixb-plan{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin-bottom:14px}
            .tuixb-plan-card{all:unset;cursor:pointer;border-radius:14px;border:1px solid #24371a;background:#0f1410;padding:16px 14px;display:flex;flex-direction:column;gap:4px;transition:.25s}
            .tuixb-plan-card strong{font-size:1.04rem}
            .tuixb-plan-card span{font-size:.9rem;color:var(--muted)}
            .tuixb-plan-card.active{border-color:var(--brand);background:linear-gradient(180deg,#162210,#10180f);box-shadow:0 0 0 1px rgba(164,253,14,.25) inset,0 10px 20px rgba(0,0,0,.24)}
            .tuixb-progress{height:7px;background:#18201a;border-radius:99px;overflow:hidden;margin-bottom:16px}
            #tuixb-progress-bar{height:100%;width:0;background:linear-gradient(90deg,#89d408,#A4FD0E);transition:width .3s}
            .tuixb-step{display:none;background:rgba(14,17,15,.78);border:1px solid #1d2718;padding:16px;border-radius:14px}
            .tuixb-step.is-active{display:block}
            .tuixb-step h3{margin:0 0 14px;font-size:1.02rem;padding-bottom:10px;border-bottom:1px solid #1d2718;color:#eef1ee}
            .tuixb-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
            .tuixb-field{display:flex;flex-direction:column;gap:8px}
            .tuixb-field label{font-weight:600;font-size:.91rem;color:#edf3eb}
            .tuixb-field label span{color:var(--brand)}
            .tuixb-field input,.tuixb-field textarea,.tuixb-field select{width:100%;border:1px solid #2a3624;background:#090c09;color:#fff;padding:12px;border-radius:10px;outline:0;box-shadow:none;font-size:.93rem}
            .tuixb-field input:focus,.tuixb-field textarea:focus,.tuixb-field select:focus{border-color:var(--brand);box-shadow:0 0 0 3px rgba(164,253,14,.15)}
            .tuixb-field .tuixb-error{color:#ff6868;min-height:14px;font-size:.78rem}
            .tuixb-footer{display:flex;gap:10px;justify-content:flex-end;margin-top:16px}
            .tuixb-btn{border:0;border-radius:10px;padding:12px 16px;font-weight:700;cursor:pointer}
            .tuixb-btn-main{background:var(--brand);color:#0b1106}
            .tuixb-btn-ghost{background:#1a2216;color:#eaf0e8;border:1px solid #2f3d2a}
            #tuixb-submit{display:none}
            #tuixb-summary{display:grid;gap:12px}
            .tuixb-summary-card{border:1px solid #253120;background:#0d120e;border-radius:12px;padding:14px}
            .tuixb-summary-card h4{margin:0 0 10px;color:var(--brand);font-size:.95rem}
            .tuixb-summary-card ul{margin:0;padding-left:18px;display:grid;gap:6px}
            .tuixb-summary-card li{color:#e8ede6;font-size:.9rem}
            #tuixb-message{margin-top:14px;padding:10px 12px;border-radius:8px;display:none}
            #tuixb-message.ok{display:block;background:#122009;border:1px solid #3b5e17;color:#dbffc1}
            #tuixb-message.err{display:block;background:#2a0f0f;border:1px solid #5e1f1f;color:#ffd2d2}
            @media (max-width:767px){
                .tuixb-wrap{padding:14px}
                .tuixb-grid,.tuixb-plan{grid-template-columns:1fr}
                .tuixb-footer{justify-content:space-between}
                .tuixb-btn{flex:1}
            }
        </style>

        <script>
        (function(){
            const root = document.getElementById('tuixb-root');
            if(!root || root.dataset.booted==='1') return;
            root.dataset.booted='1';
            const form = root.querySelector('#tuixb-form');
            const steps = Array.from(root.querySelectorAll('.tuixb-step'));
            const planCards = Array.from(root.querySelectorAll('.tuixb-plan-card'));
            const planInput = root.querySelector('#tuixb-plan-input');
            const prevBtn = root.querySelector('#tuixb-prev');
            const nextBtn = root.querySelector('#tuixb-next');
            const submitBtn = root.querySelector('#tuixb-submit');
            const progress = root.querySelector('#tuixb-progress-bar');
            const message = root.querySelector('#tuixb-message');
            const summaryBox = root.querySelector('#tuixb-summary');
            let active = 0;

            const visibleSteps = () => steps.filter(s => {
                const p = s.getAttribute('data-plan-only');
                return !p || p === planInput.value;
            });

            const setPlan = (plan) => {
                planInput.value = plan;
                planCards.forEach(c => c.classList.toggle('active', c.dataset.plan === plan));
                steps.forEach(s => {
                    const p = s.getAttribute('data-plan-only');
                    s.style.display = (!p || p===plan) ? '' : 'none';
                });
                active = 0;
                goTo(active);
            };

            const clearErrors = (scope) => {
                scope.querySelectorAll('.tuixb-error').forEach(el=>el.textContent='');
            };

            const validateStep = () => {
                const current = visibleSteps()[active];
                if(!current || current.id === 'tuixb-summary-step') return true;
                clearErrors(current);
                let ok = true;
                current.querySelectorAll('[data-required="1"]').forEach(input => {
                    const value = (input.value || '').trim();
                    if(!value){
                        ok = false;
                        const err = input.closest('.tuixb-field').querySelector('.tuixb-error');
                        if(err) err.textContent = 'Este campo es obligatorio.';
                    }
                    if(input.type==='email' && value){
                        const emailOK = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                        if(!emailOK){
                            ok = false;
                            const err = input.closest('.tuixb-field').querySelector('.tuixb-error');
                            if(err) err.textContent = 'Ingresa un correo válido.';
                        }
                    }
                });
                return ok;
            };

            const getFormData = () => {
                const fd = new FormData(form);
                const data = {};
                fd.forEach((v,k)=>data[k]=v);
                return data;
            };

            const buildSummary = () => {
                const data = getFormData();
                const blocks = [
                    ['Plan elegido', ['Plan seleccionado: $'+data.plan]],
                    ['Datos clave del negocio', ['Negocio: '+(data.negocio_nombre_comercial||'-'),'Contacto: '+(data.contacto_nombre||'-'),'Correo: '+(data.contacto_email||'-'),'WhatsApp: '+(data.contacto_whatsapp||'-')]],
                    ['Objetivo de la web', ['Objetivo principal: '+(data.web_objetivo_principal||'-'),'Acción esperada: '+(data.web_accion_visitante||'-'),'Conversión: '+(data.web_conversion_exitosa||'-')]],
                    ['Cliente ideal', ['Cliente ideal: '+(data.cliente_ideal_quien||'-'),'Objeciones: '+(data.cliente_objeciones||'-')]],
                    ['Diseño y branding', ['Estilo: '+(data.identidad_estilo||'-'),'Sensación: '+(data.identidad_sensacion||'-'),'No desean: '+(data.identidad_que_no_quieren||'-')]],
                    ['Contenido disponible', ['Textos: '+(data.contenido_textos||'-'),'Fotos: '+(data.contenido_fotos||'-'),'Videos: '+(data.contenido_videos||'-'),'Falta crear: '+(data.contenido_falta_crear||'-')]],
                    ['Requerimientos técnicos', ['Idiomas: '+(data.tec_idiomas||'-'),'Integraciones: '+(data.tec_integraciones||'-'),'Automatizaciones: '+(data.tec_crm_auto||'-')]],
                ];
                if(data.plan === '30'){
                    blocks.push(['Requerimientos del Plan $30', ['Tipo de web: '+(data.p30_tipo_web||'-'),'Servicios a destacar: '+(data.p30_servicios_destacar||'-'),'Secciones clave: '+(data.p30_secciones_imprescindibles||'-')]]);
                }else{
                    blocks.push(['Requerimientos del Plan $50', ['Qué venden: '+(data.p50_que_vender||'-'),'Cantidad de productos: '+(data.p50_cantidad_productos||'-'),'Pagos: '+(data.p50_metodos_pago||'-'),'Envíos: '+(data.p50_envios||'-')]]);
                }
                summaryBox.innerHTML = blocks.map(([t,items])=>`<article class="tuixb-summary-card"><h4>${t}</h4><ul>${items.map(i=>`<li>${(i||'-').replace(/</g,'&lt;')}</li>`).join('')}</ul></article>`).join('');
            };

            const goTo = (idx) => {
                const vis = visibleSteps();
                if(idx < 0) idx = 0;
                if(idx > vis.length-1) idx = vis.length-1;
                active = idx;
                steps.forEach(s => s.classList.remove('is-active'));
                vis[active].classList.add('is-active');
                const pct = ((active+1) / vis.length) * 100;
                progress.style.width = pct + '%';
                prevBtn.style.visibility = active===0 ? 'hidden' : 'visible';
                const inSummary = vis[active].id === 'tuixb-summary-step';
                nextBtn.style.display = inSummary ? 'none' : 'inline-block';
                submitBtn.style.display = inSummary ? 'inline-block' : 'none';
                if(inSummary) buildSummary();
            };

            planCards.forEach(c=>c.addEventListener('click',()=>setPlan(c.dataset.plan)));
            prevBtn.addEventListener('click',()=>goTo(active-1));
            nextBtn.addEventListener('click',()=>{ if(validateStep()) goTo(active+1); });

            form.addEventListener('submit', async (e)=>{
                e.preventDefault();
                message.className = '';
                message.style.display = 'none';
                submitBtn.disabled = true;
                const fd = new FormData(form);
                try {
                    const res = await fetch(root.dataset.ajax, {method:'POST', body:fd, credentials:'same-origin'});
                    const json = await res.json();
                    if(json.success){
                        message.className = 'ok';
                        message.textContent = json.data && json.data.message ? json.data.message : 'Briefing enviado correctamente.';
                        form.reset();
                        setPlan('30');
                    } else {
                        throw new Error((json.data && json.data.message) ? json.data.message : 'No se pudo enviar el briefing.');
                    }
                } catch(err){
                    message.className = 'err';
                    message.textContent = err.message || 'Error de envío.';
                }
                message.style.display = 'block';
                submitBtn.disabled = false;
            });

            setPlan('30');
        })();
        </script>
        <?php
        return ob_get_clean();
    }
    add_shortcode('tuix_briefing_form', 'tuixb_shortcode');
}

if (!function_exists('tuixb_clean_text')) {
    function tuixb_clean_text($v) {
        if (is_array($v)) {
            return implode(', ', array_map('tuixb_clean_text', $v));
        }
        return sanitize_textarea_field(wp_unslash((string) $v));
    }
}

if (!function_exists('tuixb_collect_post_data')) {
    function tuixb_collect_post_data() {
        $all = tuixb_get_questions();
        $data = array();
        $data['plan'] = isset($_POST['plan']) ? sanitize_text_field(wp_unslash($_POST['plan'])) : '30';

        foreach ($all as $section) {
            foreach ($section['fields'] as $field) {
                $name = $field['name'];
                $data[$name] = isset($_POST[$name]) ? tuixb_clean_text($_POST[$name]) : '';
            }
        }
        return $data;
    }
}

if (!function_exists('tuixb_pdf_from_data')) {
    function tuixb_pdf_from_data($data) {
        $sections = tuixb_get_questions();
        $pdf = new TUIXB_MinPDF();

        $planTitle = ($data['plan'] === '50') ? 'Sitio web con WooCommerce' : 'Sitio web corporativo';
        $biz = !empty($data['negocio_nombre_comercial']) ? $data['negocio_nombre_comercial'] : 'Cliente';
        $date = wp_date('d/m/Y H:i');

        $pdf->addPage(array(0.04,0.05,0.05));
        $pdf->rect(30, 40, 535, 4, 0.64, 0.99, 0.05);
        $pdf->text(40, 110, 'TheUIXstudio', 16, array(0.64,0.99,0.05));
        $pdf->text(40, 160, 'Briefing de Proyecto Web', 30, array(1,1,1));
        $pdf->text(40, 205, $planTitle, 16, array(0.8,0.85,0.8));
        $pdf->text(40, 270, 'Negocio: ' . $biz, 15, array(1,1,1));
        $pdf->text(40, 305, 'Fecha: ' . $date, 12, array(0.83,0.86,0.83));
        $pdf->text(40, 770, 'https://theuixstudio.com/', 10, array(0.64,0.99,0.05));

        $pdf->addPage(array(0.07,0.07,0.08));
        $y = 42;
        $pdf->text(40, $y, 'Resumen ejecutivo', 18, array(0.64,0.99,0.05));
        $y += 30;
        $resume = array(
            'Plan seleccionado' => '$' . $data['plan'] . ' - ' . $planTitle,
            'Cliente / Negocio' => $biz,
            'Contacto principal' => $data['contacto_nombre'],
            'Correo principal' => $data['contacto_email'],
            'WhatsApp' => $data['contacto_whatsapp'],
            'Objetivo principal' => $data['web_objetivo_principal'],
            'Público objetivo' => $data['cliente_ideal_quien'],
            'Estilo visual deseado' => $data['identidad_estilo'],
            'Observaciones clave' => $data['tec_info_extra'],
        );
        foreach ($resume as $k => $v) {
            $pdf->text(40, $y, $k . ':', 11, array(0.64,0.99,0.05));
            $y += 14;
            $pdf->multiline(46, $y, $v ?: '-', 10, array(0.94,0.94,0.94), 13, 98);
            $y += 6;
        }

        foreach ($sections as $key => $section) {
            if (isset($section['plan']) && $section['plan'] !== $data['plan']) {
                continue;
            }
            $pdf->addPage(array(0.07,0.07,0.08));
            $y = 40;
            $pdf->rect(30, 26, 535, 24, 0.13,0.19,0.10);
            $pdf->text(40, 42, $section['title'], 14, array(0.64,0.99,0.05));
            $y += 30;
            foreach ($section['fields'] as $f) {
                $val = isset($data[$f['name']]) ? $data[$f['name']] : '';
                $pdf->text(40, $y, $f['label'] . ':', 10, array(0.75,0.97,0.38));
                $y += 13;
                $pdf->multiline(46, $y, $val ?: '-', 10, array(0.95,0.95,0.95), 13, 96);
                $y += 8;
            }
            $pdf->text(40, 810, 'Documento generado para evaluación y desarrollo del proyecto web por TheUIXstudio.', 9, array(0.74,0.74,0.74));
        }

        return $pdf->output();
    }
}

if (!function_exists('tuixb_send_briefing')) {
    function tuixb_send_briefing() {
        if (!isset($_POST['security']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['security'])), 'tuixb_nonce')) {
            wp_send_json_error(array('message' => 'Solicitud no válida.'));
        }

        $data = tuixb_collect_post_data();

        if (empty($data['negocio_nombre_comercial']) || empty($data['contacto_nombre']) || empty($data['contacto_email'])) {
            wp_send_json_error(array('message' => 'Completa los campos obligatorios.'));
        }

        if (!is_email($data['contacto_email'])) {
            wp_send_json_error(array('message' => 'Correo principal inválido.'));
        }

        $upload = wp_upload_dir();
        $dir = trailingslashit($upload['basedir']) . 'tuix-briefings/';
        if (!wp_mkdir_p($dir)) {
            wp_send_json_error(array('message' => 'No se pudo preparar almacenamiento temporal.'));
        }

        $safeBiz = sanitize_title($data['negocio_nombre_comercial']);
        $filename = 'briefing-' . $safeBiz . '-' . gmdate('Ymd-His') . '.pdf';
        $path = $dir . $filename;

        $pdf = tuixb_pdf_from_data($data);
        $written = file_put_contents($path, $pdf);
        if (!$written) {
            wp_send_json_error(array('message' => 'No se pudo generar el PDF.'));
        }

        $subject = sprintf('Nuevo briefing web - %s - Plan $%s', $data['negocio_nombre_comercial'], $data['plan']);
        $body  = "Nuevo briefing enviado desde TheUIXstudio\n\n";
        $body .= "Plan: $" . $data['plan'] . "\n";
        $body .= "Negocio: " . $data['negocio_nombre_comercial'] . "\n";
        $body .= "Contacto: " . $data['contacto_nombre'] . "\n";
        $body .= "Correo: " . $data['contacto_email'] . "\n";
        $body .= "WhatsApp: " . $data['contacto_whatsapp'] . "\n";
        $body .= "Objetivo principal: " . $data['web_objetivo_principal'] . "\n\n";
        $body .= "Documento adjunto: " . $filename . "\n";

        $headers = array('Content-Type: text/plain; charset=UTF-8');
        $sent = wp_mail('info@theuixstudio.com', $subject, $body, $headers, array($path));

        if (!$sent) {
            @unlink($path);
            wp_send_json_error(array('message' => 'No se pudo enviar el correo.'));
        }

        wp_send_json_success(array('message' => 'Briefing enviado con éxito. Tu información fue recibida correctamente.'));
    }

    add_action('wp_ajax_tuixb_submit_briefing', 'tuixb_send_briefing');
    add_action('wp_ajax_nopriv_tuixb_submit_briefing', 'tuixb_send_briefing');
}
