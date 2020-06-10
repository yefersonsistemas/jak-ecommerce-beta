-- View: public.view_review

-- DROP VIEW public.view_review;

CREATE OR REPLACE VIEW public.view_review AS 
 SELECT 
	tbl_product.code,
	tbl_review.comment,
	tbl_review.puntuation
   FROM tbl_review
   left join tbl_product on  tbl_review."productCode" = tbl_product.code 

ALTER TABLE public.view_review
  OWNER TO postgres;
