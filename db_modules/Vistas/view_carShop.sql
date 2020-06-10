-- View: public.view_carshop

-- DROP VIEW public.view_carshop;

CREATE OR REPLACE VIEW public.view_carshop
 AS
 SELECT "tbl_carShop".ip,
    tbl_productos.code,
    "tbl_carShop".cantidad AS quantity,
    tbl_productos.name,
    tbl_productos."actualPrice" AS price,
    tbl_productos."actualPrice" * "tbl_carShop".cantidad::double precision AS fullprice
   FROM "tbl_carShop"
     JOIN tbl_productos ON "tbl_carShop"."codeProduct"::text = tbl_productos.code::text;

ALTER TABLE public.view_carshop
    OWNER TO postgres;

