CREATE OR REPLACE VIEW public.view_promotion AS 
 SELECT tbl_promotion.discount,
    tbl_promotion.code as descuento,
    tbl_productos.code as producto,
    tbl_productos."imgSrc" as images
   FROM tbl_promotion 
   LEFT JOIN tbl_productos ON tbl_promotion."codeProducto"::text = tbl_productos.code::text