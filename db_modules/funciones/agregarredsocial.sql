-- Function: public.agregarredsocial(character varying, character varying)

-- DROP FUNCTION public.agregarredsocial(character varying, character varying);

CREATE OR REPLACE FUNCTION public.agregarredsocial(
    IN icono character varying,
    IN url character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('REDSOCIAL');
	WITH auxIn AS (
	insert into "tbl_redSocialCompany" (code, icon, url) 
	values(AuxCode, icono, url)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := url;
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
ALTER FUNCTION public.agregarredsocial(character varying, character varying)
  OWNER TO postgres;
