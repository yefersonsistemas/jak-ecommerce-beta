-- View: public.view_productosclass

-- DROP VIEW public.view_productosclass;

CREATE OR REPLACE VIEW public.view_productosclass AS 
 SELECT "tbl_productosClass".code,
    "tbl_productosClass".name
   FROM "tbl_productosClass";

ALTER TABLE public.view_productosclass
  OWNER TO postgres;
