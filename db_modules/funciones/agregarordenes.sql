-- Function: public.agregarordenes(character varying, double precision, boolean, integer, boolean, double precision, date)

-- DROP FUNCTION public.agregarordenes(character varying, double precision, boolean, integer, boolean, double precision, date);

CREATE OR REPLACE FUNCTION public.agregarordenes(
    IN usuario character varying,
    IN total double precision,
    IN indited boolean,
    IN discount integer,
    IN cancelated boolean,
    IN tax double precision,
    IN emission date,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('ORDER');
	WITH auxIn AS (
	insert into tbl_order (code, "userCode", total, indicted, register, discount, cancelated, tax, emission) 
	values(AuxCode, usuario, total, indited, current_timestamp, discount, cancelated, tax, emission)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := usuario;
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
ALTER FUNCTION public.agregarordenes(character varying, double precision, boolean, integer, boolean, double precision, date)
  OWNER TO postgres;
