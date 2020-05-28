-- View: public.view_productosbuscar

-- DROP VIEW public.view_productosbuscar;

CREATE OR REPLACE VIEW view_productosbuscar AS 
 SELECT tbl_productos.code,
 tbl_productos.name,
    tbl_productos."imgSrc" AS images,
    tbl_productos."actualPrice" AS price,
    "tbl_poductsType".name AS type
   FROM tbl_productos
     LEFT JOIN "tbl_poductsType" ON tbl_productos."typeCode"::text = "tbl_poductsType".code::text;

ALTER TABLE public.view_productosbuscar
  OWNER TO postgres;
