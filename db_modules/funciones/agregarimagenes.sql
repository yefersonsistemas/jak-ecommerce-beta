CREATE OR REPLACE FUNCTION public.addimages(
    IN imgsrc character varying,
    IN codigoproducto character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('IMG');
	WITH auxIn AS (
	insert into tbl_image (code, "imgSrc", "productCode") 
	values(AuxCode, imgsrc, codigoproducto)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := imgsrc;
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