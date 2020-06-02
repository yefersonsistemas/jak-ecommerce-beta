CREATE OR REPLACE VIEW public.view_carshop AS 
 SELECT
    "tbl_carShop".ip,
    "tbl_carShop".cantidad,
    tbl_productos.name as nombreproducto
   FROM "tbl_carShop"
     inner JOIN tbl_productos ON "tbl_carShop"."codeProduct" = tbl_productos.code