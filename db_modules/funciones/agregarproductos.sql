
CREATE OR REPLACE FUNCTION public.agregarproductos(
    IN nombre character varying,
    IN imagen character varying,
    IN descripcion character varying,
    IN cortadescripcion character varying,
    IN tipocodigo character varying,
    IN materiales character varying,
    IN precio double precision,
    IN existencia integer,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	select  codigoGenerado into AuxCode from generarcodigo('PRODUCT');
	WITH auxIn AS (
	insert into tbl_productos (code, name, "imgSrc", descripcion, "shortDescripcion", "typeCode", materials, "actualPrice", existenc, "insertDate") 
	values(AuxCode, nombre, imagen, descripcion, cortadescripcion, tipocodigo, materiales, precio, existencia, CURRENT_TIMESTAMP)
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