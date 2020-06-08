CREATE OR REPLACE FUNCTION public.agregardescuentos(
    IN codeproduct character varying,
    IN discount character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('PRO');
	WITH auxIn AS (
	insert into tbl_promotion (code, "codeProducto", discount) 
	values(AuxCode, codeproduct, discount)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := discount;
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