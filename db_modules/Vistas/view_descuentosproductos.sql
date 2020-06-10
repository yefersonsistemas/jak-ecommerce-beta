CREATE OR REPLACE VIEW public.view_descuentosproductos AS 
 SELECT tbl_product.name,
    tbl_product."imgSrc"   as images,
    tbl_product.code,
    tbl_promotion.discount,
    "tbl_poductsType".name AS nametype
   FROM tbl_product 
   LEFT JOIN "tbl_poductsType" ON tbl_product."typeCode"::text = "tbl_poductsType".code::text
   LEFT JOIN tbl_promotion ON tbl_product.code::text = tbl_promotion."codeProducto"::text
   where discount IS NOT NULL;