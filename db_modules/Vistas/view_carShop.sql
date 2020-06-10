-- View: public.view_carshop

-- DROP VIEW public.view_carshop;

CREATE OR REPLACE VIEW public.view_carshop
 AS
 SELECT "tbl_carShop".ip,
    tbl_product.code,
    "tbl_carShop".quantity,
    tbl_product.name,
    tbl_product."actualPrice" AS price,
    tbl_product."actualPrice" * "tbl_carShop".quantity::double precision AS fullprice
   FROM "tbl_carShop"
     JOIN tbl_product ON "tbl_carShop"."codeProduct"::text = tbl_product.code::text;

ALTER TABLE public.view_carshop
    OWNER TO postgres;

