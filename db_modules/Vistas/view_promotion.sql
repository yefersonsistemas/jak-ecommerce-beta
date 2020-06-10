CREATE OR REPLACE VIEW public.view_promotion AS 
 SELECT tbl_promotion.discount,
    tbl_promotion.code as descuento,
    tbl_product.code as producto,
    tbl_product."imgSrc" as images
   FROM tbl_promotion 
   LEFT JOIN tbl_product ON tbl_promotion."codeProducto"::text = tbl_product.code::text