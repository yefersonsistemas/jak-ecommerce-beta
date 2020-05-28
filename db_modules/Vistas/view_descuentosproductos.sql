CREATE OR REPLACE VIEW public.view_descuentosproductos AS 
 SELECT tbl_productos.name,
    tbl_productos."imgSrc"   as images,
    tbl_productos.code,
    tbl_productos.discount,
    "tbl_poductsType".name AS nametype
   FROM tbl_productos 
   LEFT JOIN "tbl_poductsType" ON tbl_productos."typeCode"::text = "tbl_poductsType".code::text
   where discount IS NOT NULL;