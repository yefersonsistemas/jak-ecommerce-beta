
-- DROP VIEW public.view_productos;

CREATE OR REPLACE VIEW public.view_productos AS
SELECT tbl_product.name,
  tbl_product.code,
  tbl_product."imgSrc" as images,
  tbl_product.description,
  tbl_product."shortDescription",
  tbl_product.materials,
  tbl_product."actualPrice" as price,
  tbl_product."typeModel" as codeModel
FROM tbl_product
ORDER BY tbl_product.id DESC;


ALTER TABLE public.view_productos
  OWNER TO postgres;
