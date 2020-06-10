-- FUNCTION: public.removetocart(character varying, character varying)

-- DROP FUNCTION public.removetocart(character varying, character varying);

CREATE OR REPLACE FUNCTION public.removetocart(
	ip_in character varying,
	product character varying,
	OUT message boolean)
    RETURNS boolean
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
    
AS $BODY$
DECLARE
BEGIN
		
		 	DELETE FROM public."tbl_carShop"
			WHERE ip = ip_in and "codeProduct" = product;
			
			message := true;

END;
$BODY$;

ALTER FUNCTION public.removetocart(character varying, character varying)
    OWNER TO postgres;
