-- Function: public.agregartiposproductos(character varying, character varying)

-- DROP FUNCTION public.agregartiposproductos(character varying, character varying);

CREATE OR REPLACE FUNCTION public.addtypeproduct(
    IN codigoclase character varying,
    IN nombre character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('PRTY');
	WITH auxIn AS (
	insert into "tbl_poductsType" (code, "classCode", name) 
	values(AuxCode, codigoclase, nombre)
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
ALTER FUNCTION public.agregartiposproductos(character varying, character varying)
  OWNER TO postgres;
