-- View: public.view_productosbuscar

-- DROP VIEW public.view_productosbuscar;

CREATE OR REPLACE VIEW view_productosbuscar AS 
 SELECT tbl_product.code,
 tbl_product.name,
    tbl_product."imgSrc" AS images,
    tbl_product."actualPrice" AS price,
    "tbl_poductsType".name AS type,
    tbl_product."typeCode",
    "tbl_typeModel".name as typemodel,
    tbl_product."typeModel",
    tbl_model.name as namemodel,
    "tbl_typeModel"."codeModel"
   FROM tbl_product
     LEFT JOIN "tbl_poductsType" ON tbl_product."typeCode"::text = "tbl_poductsType".code::text
     LEFT JOIN "tbl_typeModel" ON tbl_product."typeModel"::text = "tbl_typeModel".code::text
     LEFT JOIN tbl_model ON "tbl_typeModel"."codeModel"::text = tbl_model.code::text;

ALTER TABLE public.view_productosbuscar
  OWNER TO postgres;
