-- Function: public.agregarproductosclase(character varying)

-- DROP FUNCTION public.agregarproductosclase(character varying);

CREATE OR REPLACE FUNCTION public.agregarproductosclase(
    IN nombre character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('PRDCLASS');
	WITH auxIn AS (
	insert into "tbl_productosClass" (code, name) 
	values(AuxCode, nombre)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := nombre;
		return;
	else 
		rollback;
		return;
	end if;
	commit;

END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION public.agregarproductosclase(character varying)
  OWNER TO postgres;
