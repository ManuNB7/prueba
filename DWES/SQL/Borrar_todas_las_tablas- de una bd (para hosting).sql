/* Borrar todas las tablas de una base de datos */

-- FORMA 1
/*  1) 	Obtener el drop de todas las tablas de la base de datos*/
	SELECT CONCAT('drop table ',table_name,'; ') FROM information_schema.tables WHERE table_schema = 'tuBaseDeDatos';

/*  2) REALIZA los siguientes procesos:
	   - Desactivar restricción de clave ajena (orden SET FOREIGN_KEY_CHECKS)
	   - Copiar a continuación de la orden SET, los DROP table que genera la consulta SELECT CONCAT
       - Activar de nuevo la comprobación de claves ajenas*/
	SET FOREIGN_KEY_CHECKS=0;  /*No funciona desde phpMyAdmin, si en el hosting (al conectar con Heidi sql */
	drop table alumnos;
	drop table cursos;
	drop table datosgenerales;
	drop table inscripcion;
	drop table profesor;
	SET FOREIGN_KEY_CHECKS=1 


-- FORMA 2

	/* Borra todas las tablas. Hace lo mismo que lo anterior, pero de forma automática */
	USE `tuBaseDeDatos`; /* Si no está seleccionada */
	SET FOREIGN_KEY_CHECKS = 0;
	SET GROUP_CONCAT_MAX_LEN=32768;
	SET @tables = NULL;
	SELECT GROUP_CONCAT('`', table_name, '`') INTO @tables
	  FROM information_schema.tables
	  WHERE table_schema = (SELECT DATABASE());
	SELECT IFNULL(@tables,'dummy') INTO @tables;

	SET @tables = CONCAT('DROP TABLE IF EXISTS ', @tables);
	PREPARE stmt FROM @tables;
	EXECUTE stmt;
	DEALLOCATE PREPARE stmt;
	SET FOREIGN_KEY_CHECKS = 1;


/* Borrar todas las filas de una tabla*/
	truncate alumnos;
	truncate cursos;
	truncate profesor;


/*BORRADO DE LAS TABLAS DE WORDPRESS*/
	drop table wp_actionscheduler_actions; drop table wp_actionscheduler_claims; drop table wp_actionscheduler_groups; drop table wp_actionscheduler_logs; 
	drop table wp_commentmeta; drop table wp_comments; drop table wp_links; drop table wp_mailchimp_carts; drop table wp_mailchimp_jobs; drop table wp_options; 
	drop table wp_postmeta; drop table wp_posts; drop table wp_term_relationships; drop table wp_term_taxonomy; drop table wp_termmeta; 
	drop table wp_terms; drop table wp_usermeta; drop table wp_users; drop table wp_wc_admin_note_actions; drop table wp_wc_admin_notes; drop table wp_wc_category_lookup; 
	drop table wp_wc_customer_lookup; drop table wp_wc_download_log; drop table wp_wc_order_product_lookup; drop table wp_wc_order_stats; 
	drop table wp_wc_order_tax_lookup; drop table wp_wc_product_meta_lookup; drop table wp_wc_reserved_stock; drop table wp_wc_tax_rate_classes; 
	drop table wp_wc_webhooks; drop table wp_woocommerce_api_keys; drop table wp_woocommerce_attribute_taxonomies; drop table wp_woocommerce_downloadable_product_permissions; 
	drop table wp_woocommerce_log; drop table wp_woocommerce_order_itemmeta; drop table wp_woocommerce_order_items; drop table wp_woocommerce_payment_tokenmeta; 
	drop table wp_woocommerce_payment_tokens; drop table wp_woocommerce_sessions; drop table wp_woocommerce_shipping_zone_locations; drop table wp_woocommerce_shipping_zone_methods; 
	drop table wp_woocommerce_shipping_zones; drop table wp_woocommerce_tax_rate_locations; drop table wp_woocommerce_tax_rates; drop table wp_yoast_indexable; 
	drop table wp_yoast_indexable_hierarchy; drop table wp_yoast_migrations; drop table wp_yoast_primary_term; drop table wp_yoast_seo_links; 
