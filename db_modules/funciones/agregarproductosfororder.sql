-- Function: public.agregarproductosfororder(character varying, character varying, character varying, character varying, character varying)

-- DROP FUNCTION public.agregarproductosfororder(character varying, character varying, character varying, character varying, character varying);

CREATE OR REPLACE FUNCTION public.addproductfororder(
    IN ordencode character varying,
    IN productcode character varying,
    IN cantidad character varying,
    IN tarea character varying,
    IN costo character varying,
    OUT codigo character varying)
  RETURNS character varying AS
$BODY$
DECLARE
	auxIn  character varying;
	bool_agregado integer;
	AuxCode character varying;
BEGIN

	WITH auxIn AS (
	insert into "tbl_productsForOrder" ("orderCode", "productCode", quantity, tax, cost) 
	values(ordencode, productcode, cantidad, tarea, costo)
	RETURNING code
	)
	
	SELECT count(*) into bool_agregado FROM auxIn;
	if (bool_agregado = 1) then
		codigo := categoria;
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
ALTER FUNCTION public.agregarproductosfororder(character varying, character varying, character varying, character varying, character varying)
  OWNER TO postgres;
