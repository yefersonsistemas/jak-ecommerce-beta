-- View: public.view_productosbuscar

-- DROP VIEW public.view_productosbuscar;

CREATE OR REPLACE VIEW public.view_productosbuscar AS 
 SELECT tbl_productos.name,
    tbl_productos."imgSrc" as images,
    tbl_productos."actualPrice" as price,
    "tbl_poductsType".name as type
   FROM tbl_productos
 left join "tbl_poductsType" on tbl_productos."typeCode" = "tbl_poductsType".code

ALTER TABLE public.view_productosbuscar
  OWNER TO postgres;
