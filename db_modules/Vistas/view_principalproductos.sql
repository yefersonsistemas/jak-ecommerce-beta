-- View: public.view_principalproductos

-- DROP VIEW public.view_principalproductos;

CREATE OR REPLACE VIEW public.view_principalproductos AS 
 SELECT tbl_productos.name,
    tbl_productos."imgSrc",
    tbl_productos.code,
    "tbl_poductsType".name as type
   FROM tbl_productos
   left join "tbl_poductsType" on tbl_productos."typeCode" =  "tbl_poductsType".code

ALTER TABLE public.view_principalproductos
  OWNER TO postgres;
