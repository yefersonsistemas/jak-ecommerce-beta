-- View: public.view_principalproductos

-- DROP VIEW public.view_principalproductos;

CREATE OR REPLACE VIEW public.view_principalproductos AS 
 SELECT tbl_product.name,
    tbl_product."imgSrc",
    tbl_product.code,
    "tbl_poductsType".name as type
   FROM tbl_product
   left join "tbl_poductsType" on tbl_product."typeCode" =  "tbl_poductsType".code

ALTER TABLE public.view_principalproductos
  OWNER TO postgres;
