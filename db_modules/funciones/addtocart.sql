-- FUNCTION: public.addtocart(character varying, integer, character varying)

-- DROP FUNCTION public.addtocart(character varying, integer, character varying);

CREATE OR REPLACE FUNCTION public.addtocart(
	ip_in character varying,
	quantity integer,
	product character varying,
	OUT message boolean)
    RETURNS boolean
    LANGUAGE 'plpgsql'

    COST 100
    VOLATILE 
    
AS $BODY$
DECLARE
BEGIN
		if (select count(*) from "tbl_carShop" where ip = ip_in and "codeProduct" = product) = 0
		then
		 INSERT INTO public."tbl_carShop" (ip, cantidad, "codeProduct", "dateCreation") 
			values (ip_in, quantity, product, now());
				message := true;
		else
			UPDATE "tbl_carShop"
				SET cantidad = cantidad + quantity
				WHERE ip = ip_in and "codeProduct" = product;
				message := true;
		end if;

END;
$BODY$;

ALTER FUNCTION public.addtocart(character varying, integer, character varying)
    OWNER TO postgres;
