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
		
		if codigoSwiche = 'PRODUCT' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_productos" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'PRD-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'ORDER' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_order" ;
		
			numeroCodigo = numeroCodigo + 1 ;

			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'ORD-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'PRTY' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_poductsType" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'PRTY-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'PRDCLASS' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_productosClass" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'CLASS-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'REW' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_review ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'REW-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'SAL' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_sales ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'SAL-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'WEB' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_webConfiguration" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('000' || numeroCodigo ||'',length(stringCodigo),4);

			codigoGenerado := 'WEB-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'PRO' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_promotion ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'PRO-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'CAR' then
			SELECT COUNT(1) INTO numeroCodigo FROM "tbl_carShop" ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('00000' || numeroCodigo ||'',length(stringCodigo),6);

			codigoGenerado := 'CAR-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'COMP' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_company ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'COM-'|| codigoAuxiliar ||'';
			return;
		end if;
		if codigoSwiche = 'IMG' then
			SELECT COUNT(1) INTO numeroCodigo FROM tbl_image ;
		
			numeroCodigo = numeroCodigo + 1;
		
			stringCodigo = numeroCodigo::varchar(255);
		
			codigoAuxiliar :=  substring('0000' || numeroCodigo ||'',length(stringCodigo),5);

			codigoGenerado := 'IMG-'|| codigoAuxiliar ||'';
			return;
		end if;
        
        
    END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;