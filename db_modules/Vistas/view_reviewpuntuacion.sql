-- View: public.view_reviewpuntuacion

-- DROP VIEW public.view_reviewpuntuacion;

CREATE OR REPLACE VIEW public.view_reviewpuntuacion AS 
 SELECT count(tbl_review.id) AS countreview,
    sum(tbl_review.puntuation) AS puntation,
    tbl_review."productCode"
   FROM tbl_review
     LEFT JOIN tbl_productos ON tbl_review."productCode"::text = tbl_productos.code::text
  GROUP BY tbl_review."productCode";

ALTER TABLE public.view_reviewpuntuacion
  OWNER TO postgres;
