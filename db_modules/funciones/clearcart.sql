-- FUNCTION: public.clearcart(character varying)

-- DROP FUNCTION public.clearcart(character varying);

CREATE OR REPLACE FUNCTION public.clearcart(
	ip_in character varying,
	OUT message boolean)
    RETURNS boolean
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
    
AS $BODY$
DECLARE
BEGIN
		
		 	DELETE FROM public."tbl_carShop"
			WHERE ip = ip_in;
			
			message := true;

END;
$BODY$;

ALTER FUNCTION public.clearcart(character varying)
    OWNER TO postgres;
