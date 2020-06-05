-- View: public.view_typeproductos

-- DROP VIEW public.view_typeproductos;

CREATE OR REPLACE VIEW public.view_typeproductos AS 
 SELECT "tbl_poductsType".name,
    "tbl_poductsType".code,
    "tbl_productosClass".name AS class
   FROM "tbl_poductsType"
     LEFT JOIN "tbl_productosClass" ON "tbl_poductsType"."classCode"::text = "tbl_productosClass".code::text;

ALTER TABLE public.view_typeproductos
  OWNER TO postgres;
