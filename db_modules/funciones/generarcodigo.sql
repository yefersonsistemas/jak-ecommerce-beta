CREATE OR REPLACE FUNCTION public.generarcodigo(
    IN codigoswiche character varying,
    OUT codigogenerado character varying)
  RETURNS character varying AS
$BODY$
    DECLARE
    numeroCodigo integer;
    codigoAuxiliar character varying;
    stringCodigo character varying;
    
    BEGIN
		--PRODUCTO--
		if codigoSwiche = 'PRODUCT' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_productos" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'PRD-'|| codigoAuxiliar ||'';
			return;
		end if;
		--ORDENES--
		if codigoSwiche = 'ORDER' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_order" ;
		
			numeroCodigo = numeroCodigo + 1 ;

			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'ORD-'|| codigoAuxiliar ||'';
			return;
		end if;
		--TIPO DE PRODUCTO--
		if codigoSwiche = 'PRTY' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_poductsType" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'PRTY-'|| codigoAuxiliar ||'';
			return;
		end if;
		--PRODUCTO CLASE--
		if codigoSwiche = 'PRDCLASS' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_productosClass" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'CLASS-'|| codigoAuxiliar ||'';
			return;
		end if;
		--REDES SOCIALES--
		if codigoSwiche = 'REDSOCIAL' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_redSocialCompany" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'RDS-'|| codigoAuxiliar ||'';
			return;
		end if;
		--REVISIÓN--
		if codigoSwiche = 'REW' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_review ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'REW-'|| codigoAuxiliar ||'';
			return;
		end if;
		--VENTAS--
		if codigoSwiche = 'SAL' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_sales ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'SAL-'|| codigoAuxiliar ||'';
			return;
		end if;
		--CONFIGURACION WEB--
		if codigoSwiche = 'WEB' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_webConfiguration" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'WEB-'|| codigoAuxiliar ||'';
			return;
		end if;
		--INVENTARIO--
		if codigoSwiche = 'INV' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_inventory ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'INV-'|| codigoAuxiliar ||'';
			return;
		end if;
		--PROMOCIONES--
		if codigoSwiche = 'PRO' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_promotion ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'PRO-'|| codigoAuxiliar ||'';
			return;
		end if;
		--ACERCA DE--
		if codigoSwiche = 'ABOUT' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_about ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'AB-'|| codigoAuxiliar ||'';
			return;
		end if;
		--BANNERS--
		if codigoSwiche = 'BANN' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_banners ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'BANN-'|| codigoAuxiliar ||'';
			return;
		end if;
		--CARRITO DE COMPRAS--
		if codigoSwiche = 'CAR' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_carShop" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'CAR-'|| codigoAuxiliar ||'';
			return;
		end if;
		--COMPAÑIAS--
		if codigoSwiche = 'COMP' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_company ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'COM-'|| codigoAuxiliar ||'';
			return;
		end if;
		--INICIO--
		if codigoSwiche = 'HOME' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_home ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'HOME-'|| codigoAuxiliar ||'';
			return;
		end if;
		--IMAGENES--
		if codigoSwiche = 'IMG' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_image ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'IMG-'|| codigoAuxiliar ||'';
			return;
		end if;
        
        
    END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;