-- View: public.view_review

-- DROP VIEW public.view_review;

CREATE OR REPLACE VIEW public.view_review AS 
 SELECT 
	tbl_productos.code,
	tbl_review.comment,
	tbl_review.puntuation
   FROM tbl_review
   left join tbl_productos on  tbl_review."productCode" = tbl_productos.code 

ALTER TABLE public.view_review
  OWNER TO postgres;
